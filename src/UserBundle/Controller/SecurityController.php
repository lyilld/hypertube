<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Controller\SecurityController as BaseController;

class SecurityController extends BaseController
{
  public function LoginBisAction()
  {
    $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');

    return $this->container->get('templating')->renderResponse('FOSUserBundle:Security:login_content.html.twig', array(
        'last_username' => null,
        'error'         => null,
        'csrf_token'    => $csrfToken
    ));
  }

  public function ForgetPWDAction(Request $request)
  {
    $formBuilder = $this->get('form.factory')->createBuilder('form');
    $formBuilder->add('email', 'email')
                ->add('save', 'submit');

    $form = $formBuilder->getForm();

    $form->handleRequest($request);

    if ($form->isValid())
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->find($form->get('email')->getData());

        $message = \Swift_Message::newInstance()->setSubject('Nouveau password')
                                                ->setFrom('lucasyv12@gmail.com')
                                                ->setTo('zsk.slazer@gmail.com')
                                                ->setBody('Voici votre nouveau password:');

        $this->get('mailer')->send($message);

        return $this->redirectToRoute('user_homepage');
    }

    return $this->render('UserBundle:Security:forgetpwd.html.twig', array('form' => $form->createView()));
  }
}
