<?php

namespace App\Controller;


use App\Entity\Order;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use JMS\Serializer\SerializerInterface;


class APIOrderController extends AbstractController
{
    /**
     * @Route("/api/order/{orderId}", name="order", methods={"GET"})
     */
    public function getSpecificOrder(SerializerInterface $serialize,int $orderId)
    {
        try{
            $test= $this->getDoctrine()->getRepository('App:Order')->find($orderId);
            if(!$test){
                $response = new Response();
                $response->setContent(json_encode([
                    'INFO'=>"Aucune commande avec l'id " .$orderId,
                ]));
                $response->headers->set('Content-Type', 'application/json');
                $response->setStatusCode(400);
                return $response;
            }else{

                $data = $serialize->serialize($test, 'json');
                $response = new Response($data);
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }
        }catch(\Exception $e){
            $response = new Response();
            $response->setContent(json_encode([
                'Error'=>"Probleme interne du serveur",
            ]));
            $response->headers->set('Content-Type', 'application/json');
            $response->setStatusCode(500);
            return $response;
        }


    }

    /**
     * @Route("/api/orders", name="orderAll", methods={"GET"})
     */
    public function getOrder(SerializerInterface $serialize)
    {
        $user = $this->getUser();
        $userid = $user->getId();
        $user=$this->getDoctrine()->getRepository('App:User')->find($userid);
        if($user->getOrdersId()!=false) {
            $orders = $user->getOrdersId();
            foreach ($orders as $items) {
                $array[] = $this->getDoctrine()->getRepository('App:Order')->find($items);
            }
            $data = $serialize->serialize($array, 'json');
            $response = new Response($data);
            $response->headers->set('Content-Type', 'application/json');
            //$response->setStatusCode(402,"Page not found");
            return $response;

        }else{
            $empty=new \ArrayObject();
            return $this->json($empty);
        }
    }
}