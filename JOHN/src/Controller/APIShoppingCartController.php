<?php


namespace App\Controller;
use App\Entity\Catalog;
use App\Entity\Order;
use App\Entity\User;
use App\Repository\CatalogRepository;
use DateTime;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class APIShoppingCartController extends AbstractController
{

    /**
     * @Route("/api/cart", methods={"GET","HEAD"}, name="getCart")
     * @return Response
     */
    public function getCart(SerializerInterface $serialize): Response
    {

        $product= $this->getDoctrine()->getRepository('App:User')->find(1);

        $test=$product->getShoppingCart()->getValues();
        dump($test);
        $data = $serialize->serialize($test, 'json');
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;

    }



    /**
     * @Route("/api/cart/{productId}", methods={"PUT","HEAD"}, name="addCart")
     * @return Response
     */
    public function addShoppingCart(int $productId): Response
    {
        $articles = $this->getDoctrine()->getRepository('App:Catalog')->find($productId);
        $user=$this->getDoctrine()->getRepository('App:User')->find(1);
        $user->addShoppingCart($articles);
       // dump($user->getShoppingCart());
        $em=$this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();


        return $this->json(["data"=>"ajoute"]);
    }


    /**
     * @Route("/api/cart/{productId}", methods={"DELETE","HEAD"}, name="deleteCart")
     * @return Response
     */
    public function delShoppingCart(int $productId): Response
    {
        $articles = $this->getDoctrine()->getRepository('App:Catalog')->find($productId);
        $user=$this->getDoctrine()->getRepository('App:User')->find(1);
        $user->removeShoppingCart($articles);
        dump($user->getShoppingCart());
        $em=$this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();


        return $this->json(["data"=>"Supprime"]);
    }
    /**
     * @Route("/api/cart/validate", methods={"GET","HEAD"}, name="delCart")
     * @return Response
     */
    public function validate(SerializerInterface $serialize): Response
    {

        $user= $this->getDoctrine()->getRepository('App:User')->find(1);

        $tabProd=$user->getShoppingCart()->getValues();


        $order= new Order();
        $order->setCreationDate(new DateTime());
        $totalPrice=0;
        foreach ($tabProd as $item) {
                $order->addProduct($item);
                $totalPrice=$totalPrice+$item->getPrice();

        }


       $order->setTotalPrice($totalPrice);

        $em=$this->getDoctrine()->getManager();
        $em->persist($order);
        $em->flush();

        if($user->getOrdersId()!=false){
            $test= $user->getOrdersId();
            $test[]=$order->getId();
        }else{
            $test[]=$order->getId();
        }
        $user->setOrdersId($test);
        $em1=$this->getDoctrine()->getManager();
        $em1->persist($user);
        $em1->flush();
    return $this->json(["data"=>"validé"]);
    }
}