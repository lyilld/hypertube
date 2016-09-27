<?php

namespace UserBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;

Class RegistrationController extends BaseController
{
  public function MyRegisterAction(Request $request)
  {

     $formFactory = $this->get('fos_user.registration.form.factory');
     $userManager = $this->get('fos_user.user_manager');
     $dispatcher = $this->get('event_dispatcher');
     $user = $userManager->createUser();
     $user->setEnabled(true);
     $form = $formFactory->createForm();
     $form->setData($user);
     $form->handleRequest($request);


    return $this->render('FOSUserBundle:Registration:register_content.html.twig', array(
    'form' => $form->createView(),
    ));
  }

  public function registerAction(Request $request)
  {
      $formFactory = $this->get('fos_user.registration.form.factory');
      $userManager = $this->get('fos_user.user_manager');
      $dispatcher = $this->get('event_dispatcher');

      $user = $userManager->createUser();
      $user->setEnabled(true);

      $event = new GetResponseUserEvent($user, $request);
      $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

      if (null !== $event->getResponse()) {
          return $event->getResponse();
      }

      $form = $formFactory->createForm();
      $form->setData($user);

      $form->handleRequest($request);

      if ($form->isSubmitted())
      {
          if ($form->isValid())
          {

              $filename = uniqid() . ".png";
              $form['image']->getData()->move("image/profil/", $filename);
              $reposite = "image/profil/" . $filename;

              $event = new FormEvent($form, $request);
              $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);

              $user->image = $reposite;

              $userManager->updateUser($user);


              if (null === $response = $event->getResponse()) {
                  $url = $this->generateUrl('fos_user_registration_confirmed');
                  $response = new RedirectResponse($url);
              }

              $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

              return $response;
          }

          $event = new FormEvent($form, $request);
          $dispatcher->dispatch(FOSUserEvents::REGISTRATION_FAILURE, $event);

          if (null !== $response = $event->getResponse()) {
              return $response;
          }
      }

      return $this->render('FOSUserBundle:Registration:register.html.twig', array(
          'form' => $form->createView(),
      ));
  }


}
