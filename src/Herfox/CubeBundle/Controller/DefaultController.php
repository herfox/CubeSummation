<?php

namespace Herfox\CubeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CubeBundle:Default:index.html.twig');
    }
}
