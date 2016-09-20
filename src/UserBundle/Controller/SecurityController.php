<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;
use FOS\UserBundle\Controller\SecurityController as BaseController;

class SecurityController extends BaseController
{

  public $formUsername;
  public $formEmail;
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
                ->add('username', 'text')
                ->add('save', 'submit');

    $form = $formBuilder->getForm();

    $form->handleRequest($request);

    if ($form->isValid())
    {
        $em = $this->getDoctrine()->getManager();

        $this->formUsername = $form->get('username')->getData();
        $this->formEmail = $form->get('email')->getData();

        $user = $em->getRepository('UserBundle:User')->findOneBy([
          'username' => $this->formUsername,
          'email' => $this->formEmail
        ]);

        if ($user !== null)
        {
            $mdp = uniqid();
            mail($form->get('email')->getData(), 'Nouveau mot de passe',
            'Voici votre nouveau password: ' . $mdp. ' Pensez a changer votre mot de passe immediatament ');

            $user->setPassword(password_hash($mdp, PASSWORD_BCRYPT));

            $em->flush();

            return $this->redirectToRoute('user_homepage');
        }

        //dump($user); die();

        return $this->render('UserBundle:Security:forgetpwd.html.twig', array('form' => $form->createView()));
    }

    return $this->render('UserBundle:Security:forgetpwd.html.twig', array('form' => $form->createView()));
  }
}
