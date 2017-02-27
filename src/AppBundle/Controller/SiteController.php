<?php
/**
 * Created by PhpStorm.
 * User: k0577425
 * Date: 2/22/2017
 * Time: 10:06 AM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SiteController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('site/index.html.twig');
    }

}