<?php


namespace App\Controller;
use App\Entity\User;
use App\Repository\CatalogRepository;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class APIUserController extends AbstractController
{
    /**
     * @Route("/api/user", name="infoUser", methods={"GET"})
     */
    public function listAllProduct(SerializerInterface $serialize)
    {

        try{
            $user=$this->getUser();
            $userid=$user->getId();
            $user= $this->getDoctrine()->getRepository('App:User')->find($userid);
            $data = $serialize->serialize($user, 'json');
            $response = new Response($data);
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
        catch(\Exception $e){
            $response = new Response();
            $response->setContent(json_encode([
                'Error'=>"Probleme interne du serveur",
            ]));
            $response->headers->set('Content-Type', 'application/json');
            $response->setStatusCode(500);
            return $response;
        }


    }

}