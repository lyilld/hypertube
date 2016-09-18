<?php
namespace UserBundle\Handler;

use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginFailureHandler implements AuthenticationFailureHandlerInterface
{
  public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
	{


    // $referer_url = $request->headers->get('referer');
    //
    // $response = new RedirectResponse($referer_url);
// DELETE
    // $test = "OUI SA MARCGE";
    // return $test;
    // return $response;
		  // return $response;
	}
}
