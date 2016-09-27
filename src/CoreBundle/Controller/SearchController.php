<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{
    public function searchAction(Request $request)
    {
        $formBuilder = $this->get('form.factory')->createBuilder('form')
            ->add('search', 'text')
            ->add('Button', 'submit');

        $form = $formBuilder->getForm();

        return $this->render('CoreBundle:HP:search.html.twig', array('form_search' => $form->CreateView()));
    }
}