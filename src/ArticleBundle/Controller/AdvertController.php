<?php
namespace ArticleBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
  public function indexAction()
  {
    $content = $this->get('templating')->render('ArticleBundle:Advert:index.html.twig');
    return new Response($content);
  }

  public function viewAction($id, Request $request)
  {
    // Vous avez accès à la requête HTTP via $request
  }
}
