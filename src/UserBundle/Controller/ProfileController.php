<?php

namespace UserBundle\Controller;

use FOS\UserBundle\Controller\ProfileController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;

class ProfileController extends BaseController
{

  public function EditImageAction(Request $request)
  {
      $image = new User();

      $formBuilder = $this->get('form.factory')->createBuilder('form', $image);
      $formBuilder->add('image', 'file')
                  ->add('save', 'submit');

      $form = $formBuilder->getForm();

      $form->handleRequest($request);

      $user = $this->container->get('security.context')->getToken()->getUser();

      if ($form->isValid())
      {
          $em = $this->getDoctrine()->getManager();
          $image = $em->getRepository('UserBundle:User')->find($user);
          $url = $image->Upload($form->get('image')->getData());
          $image->setImage($url);

          $em->flush();

          return $this->redirectToRoute('fos_user_profile_show');
      }

      return $this->render('UserBundle:Profile:EditImage.html.twig', array('form' => $form->createView()));
  }

  public function EditEmailAction(Request $request)
  {
      $email = new User();

      $formBuilder = $this->get('form.factory')->createBuilder('form', $email);
      $formBuilder->add('username', 'text')
                  ->add('email', 'email')
                  ->add('save', 'submit');

      $form = $formBuilder->getForm();

      $form->handleRequest($request);

      $user = $this->container->get('security.context')->getToken()->getUser();

      if ($form->isValid())
      {
        $em = $this->getDoctrine()->getManager();
        $email = $em->getRepository('UserBundle:User')->find($user);

        if($form->get('username')->getData() == $email->getUsername())
        {
          $email->setEmail($form->get('email')->getData());

          $em->flush();

          return $this->redirectToRoute('fos_user_profile_show');
        }
      }

      return $this->render('UserBundle:Profile:EditEmail.html.twig', array('form' => $form->createView()));

  }
}

 ?>
