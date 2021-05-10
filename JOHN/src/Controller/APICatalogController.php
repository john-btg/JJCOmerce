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
use Symfony\Component\HttpFoundation\Request;


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
     * @Route("/api/product/{id}", methods={"PUT"},name="ModifieProduct")
     */
    function ModifieProduct(Request $request,$id,SerializerInterface $serialize):Response
    {
        try{
            $em = $this->getDoctrine()->getManager();
            $parametersAsArray = [];
            if ($data = $request->getContent()) {
                $parametersAsArray = json_decode($data, true);
            }

            $post = $em->getRepository('App:Catalog')->find($id);

            if($parametersAsArray['description'] == null || $parametersAsArray['photo'] == null || $parametersAsArray['name'] == null  || $parametersAsArray['price'] == null   ){
                $response = new Response();
                $response->setContent(json_encode([
                    'error' => "Requete refuser: un parametre est null !",
                ]));
                $response->headers->set('Content-Type', 'application/json');
                $response->setStatusCode(400);
                return $response;

            }

            $post->setName($parametersAsArray['name']);
            $post->setDescription($parametersAsArray['description']);
            $post->setPrice($parametersAsArray['price']);
            $post->setPhoto($parametersAsArray['photo']);
            $em->persist($post);
            $em->flush();
            $response = new Response();
            $response->setContent(json_encode([
                'Success' => "La modification a ete effectue !",
            ]));
            $response->headers->set('Content-Type', 'application/json');
            $response->setStatusCode(200);
            return $response;

        }catch(\Exception $e){
            $response = new Response();
            $response->setContent(json_encode([
                'error' => "Probleme interne Server !",
            ]));
            $response->headers->set('Content-Type', 'application/json');
            $response->setStatusCode(500);
            return $response;
        }
    }


    /**
     * @Route("/api/product", methods={"POST"},name="NouveauProduit")
     */
    function addProduct(Request $request,serializerInterface $serialize):Response
    {
        try{
            $data = $request->getContent();
            $article = $serialize->deserialize($data,'App\Entity\Catalog', 'json');
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();
            $response = new Response();
            $response->setContent(json_encode([
                'Success' => "Creation du produit effectuer !",
            ]));
            $response->headers->set('Content-Type', 'application/json');
            $response->setStatusCode(201);
            return $response;

        }

        catch(\Exception $e){

            $response = new Response();
            $response->setContent(json_encode([
                'error' => "Probleme interne Server !",
            ]));
            $response->headers->set('Content-Type', 'application/json');
            $response->setStatusCode(500);
            return $response;
        }
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
