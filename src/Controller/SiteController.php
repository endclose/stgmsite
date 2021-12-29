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
    public function contacto(): Response
    {
        return $this->render('site/contactanos.html.twig');
    }
    public function colaborador(): Response
    {
        return $this->render('site/colaboradores.html.twig');
    }
    public function conocenos(): Response
    {
        return $this->render('site/conocenos.html.twig');
    }
    public function servicio(): Response
    {
        return $this->render('site/servicios.html.twig');
    }
    public function producto(): Response
    {
        return $this->render('site/productos.html.twig');
    }
    public function pro_ensayo(): Response
    {
        return $this->render('site/productos-ensayo.html.twig');
    }
    public function pro_geologia(): Response
    {
        return $this->render('site/productos-geologia.html.twig');
    }

}
