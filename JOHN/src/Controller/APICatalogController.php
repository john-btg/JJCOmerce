<?php
namespace App\Controller;
use App\Entity\Catalog;
use App\Repository\CatalogRepository;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class APICatalogController extends AbstractController
{

    /**
     * @Route("/api/products", name="products_list", methods={"GET"})
     */
    public function listAllProduct(SerializerInterface $serialize)
    {
        try{
            $product= $this->getDoctrine()->getRepository('App:Catalog')->findAll();
            $data = $serialize->serialize($product, 'json');
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

    /**
     * @Route("/api/product/{productId}", methods={"GET"}, name="getProduct")
     */

    public function getProduct(int $productId,SerializerInterface $serialize): Response
    {
        try{
        $product= $this->getDoctrine()->getRepository('App:Catalog')->find($productId);
        if (!$product){
            $response = new Response();
            $response->setContent(json_encode([
                'INFO'=>"Aucun article avec l'id " .$productId,
            ]));
            $response->headers->set('Content-Type', 'application/json');
            $response->setStatusCode(400);
            return $response;
        }else{
            $data = $serialize->serialize($product, 'json');
            $response = new Response($data);
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
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


    /**
     * @Route("/api/product", methods={"PUT"},name="ajout Product")
     */

    function addProduct():Response
    {
        $catalog=new Catalog();
        $catalog->setName(" Item 3000")
            ->setDescription(" Best item in the shop !")
            ->setPhoto( "https://path/to/image.png")
            ->setPrice(13.37);
        $em=$this->getDoctrine()->getManager();
        try{
            $em->persist($catalog);
            $em->flush();
        }catch(\Exception $e){
            $response = new Response();
            $response->setContent(json_encode([
                'Error'=>"Probleme interne du serveur, Ajout non effectué",
            ]));
            $response->headers->set('Content-Type', 'application/json');
            $response->setStatusCode(500);
            return $response;
        }

        $response = new Response();
        $response->setContent(json_encode([
            'INFO' => "Ajout de produit faite",
        ]));
        $response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode(201);
        return $response;
    }

    /**
     * @Route("/api/product/{productId}", methods={"DELETE"},name="delProduct")
     */
    function delProduct(int $productId):Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getReference('App:Catalog', $productId);
        try{
            $em->remove($user);
            $em->flush();
        }catch(\Exception $e){
            $response = new Response();
            $response->setContent(json_encode([
                'Error'=>"Probleme interne du serveur, Ajout non effectué",
            ]));
            $response->headers->set('Content-Type', 'application/json');
            $response->setStatusCode(500);
            return $response;
        }
        $response = new Response();
        $response->setContent(json_encode([
            'INFO' => "Suppression de produit faite",
        ]));
        $response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode(200);
        return $response;
    }
}
