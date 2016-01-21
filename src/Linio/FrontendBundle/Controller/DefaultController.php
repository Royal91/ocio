<?php

namespace Linio\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    public function inicioAction()
    {
         return $this->render('FrontendBundle:Default:inicio.html.twig');
       
    }


        public function mxAction()
    {
         return $this->render('FrontendBundle:Default:mx.html.twig');
     
    }

            public function coAction()
    {
         return $this->render('FrontendBundle:Default:co.html.twig');
       
    }

         public function peAction()
    {
         return $this->render('FrontendBundle:Default:pe.html.twig');
       
    }


        public function paAction()
    {
         return $this->render('FrontendBundle:Default:pa.html.twig');
       
    }


        public function chAction()
    {
         return $this->render('FrontendBundle:Default:ch.html.twig');
       
    }

    public function faqAction()
    {
        return $this->render('FrontendBundle:Default:faqs.html.twig');
    }


}
