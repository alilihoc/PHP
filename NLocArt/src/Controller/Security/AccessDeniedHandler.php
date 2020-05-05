<?php
/**
 * Created by PhpStorm.
 * User: alili
 * Date: 29/03/2018
 * Time: 18:10
 */

namespace App\Controller\Security;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{

	/**
	 * Handles an access denied failure.
	 *
	 * @param Request $request
	 * @param AccessDeniedException $accessDeniedException
	 *
	 */
	public function handle(Request $request, AccessDeniedException $accessDeniedException)
	{
		throw $accessDeniedException;
	}
}