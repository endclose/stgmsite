<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SiteController extends AbstractController
{
    /**
     * @Route("/{_locale}/",
     *         name="index",
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     */
    public function index(): Response
    {
        return $this->render('site/index.html.twig');
    }
    public function contact(): Response
    {
        return $this->render('site/contact-us.html.twig');
    }
    public function partners(): Response
    {
        return $this->render('site/partners.html.twig');
    }
    public function about(): Response
    {
        return $this->render('site/about-us.html.twig');
    }
    public function services(): Response
    {
        return $this->render('site/services.html.twig');
    }
    public function products(): Response
    {
        return $this->render('site/products.html.twig');
    }
    public function sample(): Response
    {
        return $this->render('site/products/sample-prep.html.twig');
    }
    public function geology(): Response
    {
        return $this->render('site/products/geology.html.twig');
    }
    public function assay(): Response
    {
        return $this->render('site/products/fire-assay.html.twig');
    }
    public function instruments(): Response
    {
        return $this->render('site/products/instruments.html.twig');
    }
    public function chemical (): Response
    {
        return $this->render('site/products/chemical-reagents.html.twig');
    }
    public function equipment (): Response
    {
        return $this->render('site/products/lab-equipment.html.twig');
    }
    public function metallurgical (): Response
    {
        return $this->render('site/products/metallurgical.html.twig');
    }
    public function reference (): Response
    {
        return $this->render('site/products/reference-materials.html-twig'); 
    }


}
