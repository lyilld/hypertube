<?php
namespace UserBundle\Handler;

use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;


class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
  public function onAuthenticationSuccess(Request $request, TokenInterface $token)
	{
    if ($request->isXmlHttpRequest())
    {
        // $result = array('success' => true);
        // $response = new Response(json_encode($result));
        // $response->headers->set('Content-Type', 'application/json');
// DELETE
        // $test = "OUI SA MARCGE";
        // return $test;
        // return $response;
    }

			// $referer_url = $request->headers->get('referer');
      //
			// $response = new RedirectResponse($referer_url);
      // DELETE
      // $test = "OUI SA MARCGE";
      // return $test;
      // return $response;
	}
}
