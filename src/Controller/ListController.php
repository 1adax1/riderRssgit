<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\CssSelector\CssSelector;
use App\Traits\WordReplace;

class ListController extends AbstractController
{
  use WordReplace;
    /**
     * @Route("/list", name="list")
     */
    public function index(Request $request)
    {
      return $this->render('list/index.html.twig', $this->operator($request));
    }

}
