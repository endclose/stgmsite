<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SiteController extends AbstractController
{
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
     * @Route("/{_locale}/products/{category}",
     *         name="products/",
     * 
     *         requirements ={
     *              "_locale": "en|pt|es",
     *         }
     * )
     * 
     */

    public function producs ($category): Response
    {
        $template = "site/products.html.twig";

        switch ($category)
        {
            case "products/geology":
                $template = "site/products/geology.html.twig";
            break;

            case "metarllurgical":
                $template = "site/products/metallurgical.html.twig";
            break;

            case "chemical":
                $template = "site/products/chemical-reagents.html.twig";
            break;

            case "assay":
                $template = "site/products/fire-assay.html.twig";
            break;

            case "equipment":
                $template = "site/products/lab-equipment.html.twig";
            break;

            case "sample":
                $template ="site/products/sample-prep.html.twig";
            break;

            case "reference":
                $template = "site/products/reference-materials.html.twig";
            break;

            case "instruments":
                $template = "site/products/instruments.html.twig";
            break;
        }

        return $this->render($template);

    }

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
     * @Route("/{_locale}/products/geology",
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
        return $this->render('site/products/geology.html.twig');
    }

     /**
     * @Route("/{_locale}/products/fire-assay",
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
        return $this->render('site/products/fire-assay.html.twig');
    }



}
