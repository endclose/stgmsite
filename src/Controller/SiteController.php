<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SiteController extends AbstractController
{

    /**
     * @Route("/{_locale}/es/index",
     *         name="es-index",
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */
    
    public function esindex(): Response
    {
        return $this->render('site/es/index.html.twig');
    }


    /**
     * @Route("/{_locale}/index",
     *         name="index",
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */
    
    public function index(): Response
    {
        return $this->render('site/index.html.twig');
    }

     /**
     * @Route("/{_locale}/contact-us",
     *         name="contact-us",
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */

    public function contact(): Response
    {
        return $this->render('site/contact-us.html.twig');
    }

    /**
     * @Route("/{_locale}/partners",
     *         name="partners",
     * 
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */
    public function partners(): Response
    {
        return $this->render('site/partners.html.twig');
    }

    /**
     * @Route("/{_locale}/about-us",
     *         name="about-us",
     * 
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */

    public function about(): Response
    {
        return $this->render('site/about-us.html.twig');
    }

    /**
     * @Route("/{_locale}/services",
     *         name="services",
     * 
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */

    public function services(): Response
    {
        return $this->render('site/services.html.twig');
    }

    /**
     * @Route("/{_locale}/products",
     *         name="products",
     * 
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */

    public function products(): Response
    {
        return $this->render('site/products.html.twig');
    }



    /**
     * @Route("/{_locale}/environment",
     *         name="environment",
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */
    
    public function environment(): Response
    {
        return $this->render('site/environment.html.twig');
    }

    /**
     * @Route("/{_locale}/environment-services",
     *         name="environment-services",
     * 
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */
    
    public function env_services(): Response
    {
        return $this->render('site/environment-services.html.twig');
    }

    /**
     * @Route("/{_locale}/environment-products",
     *         name="environment-products",
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */
    
    public function env_products(): Response
    {
        return $this->render('site/environment-products.html.twig');
    }


     /**
     * @Route("/{_locale}/geology",
     *         name="geology",
     * 
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */

    public function geology(): Response
    {
        return $this->render('site/geology.html.twig');
    }

     /**
     * @Route("/{_locale}/fire-assay",
     *         name="fire-assay",
     * 
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */

    public function assay(): Response
    {
        return $this->render('site/fire-assay.html.twig');
    }

     /**
     * @Route("/{_locale}/sample-prep",
     *         name="sample-prep",
     * 
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */

    public function sample(): Response
    {
        return $this->render('site/sample-prep.html.twig');
    }

     /**
     * @Route("/{_locale}/reference-materials",
     *         name="reference-materials",
     * 
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */

    public function reference(): Response
    {
        return $this->render('site/reference-materials.html.twig');
    }

     /**
     * @Route("/{_locale}/chemical-reagents",
     *         name="chemical-reagents",
     * 
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */

    public function chemical(): Response
    {
        return $this->render('site/chemical-reagents.html.twig');
    }

     /**
     * @Route("/{_locale}/instruments",
     *         name="instruments",
     * 
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */

    public function instruments(): Response
    {
        return $this->render('site/instruments.html.twig');
    }

     /**
     * @Route("/{_locale}/lab-equipment",
     *         name="lab-equipment",
     * 
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */

    public function equipment(): Response
    {
        return $this->render('site/lab-equipment.html.twig');
    }

     /**
     * @Route("/{_locale}/metallurgical",
     *         name="metallurgical",
     * 
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */

    public function metallurgical(): Response
    {
        return $this->render('site/metallurgical.html.twig');
    }



}
