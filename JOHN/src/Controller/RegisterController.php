<?php


namespace App\Controller;


use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use App\Security\EmailVerifier;
use App\Security\LoginAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegisterController extends AbstractController
{
    private $emailVerifier;
    private $entityManager;
    private $repository;

    public function __construct(EmailVerifier $emailVerifier, EntityManagerInterface $entityManager,
                                UserRepository $repository)
    {
        $this->emailVerifier = $emailVerifier;
        $this->entityManager = $entityManager;
        $this->repository = $repository;
    }

    /**
     * @Route("/api/register", methods={"POST","HEAD"}, name="Register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, LoginAuthenticator $authenticator): Response
    {

        $request_as_array = [];
        if ($data = $request->getContent()) {
            $request_as_array = json_decode($data, true);
        }


        if ($request_as_array != null) {
            $user = new User();
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $request_as_array['password']
                )
            );
            $user->setEmail($request_as_array['username']);
            $user->setLastname($request_as_array['username']);
            $user->setFirstname($request_as_array['username']);
            $user->setLogin($request_as_array['username']);
            $user->setRoles(['ROLE_USER']);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('jmrtlpro@gmail.com', 'JJ'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            // do anything else you need here, like send an email
//            return $this->json(['response_creation'=> $user]);
            return $guardHandler->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $authenticator,
                'main' // firewall name in security.yaml
            );

        } else {
            return $this->json(['request' => 'cnull']);

        }
    }

    /**
     * @Route("/verifyEmail", name="app_verify_email")
     */
    public function verifyUserEmail(Request $request): Response
    {
        $userid = $request->query->get('userid');

        $repository = $this->entityManager->getRepository(User::class);
        $user = $repository->find($userid);
        if ($user == null) {
            return $this->json("Not found", 404);
        }
//        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $user);

        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());
//            return $this->redirectToRoute('TestApi');
            return $this->json(['res'=>$exception]);

        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Your email address has been verified.');
        return $this->json(['res'=>'ok']);
//        return $this->redirectToRoute('TestApi');
    }
}