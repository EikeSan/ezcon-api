<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ControllerSWG extends BaseController
{
/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="EzCon API",
 *      description="API to manage condominous, 
 to get the authorization working, put `Bearer your-token-in-authorize-field`, 
 whitout the *Bearer* you will not be auhtorized to use the services",
 *      @OA\Contact(
 *          email="eikesantz@gmail.com"
 *      ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
*/

/**
 *  @OA\Server(
 *      url="https://ezcon-api.herokuapp.com/",
 *      description="API hosted on Heroku"
 * ),
 * @OA\Server(
 *      url="http://ezcon-api.local/",
 *      description="API local"
 * )
 */

 /**
 * @OA\SecurityScheme(
 *     type="apiKey",
 *     description="Use the Auth routes and recieve your accessToken",
 *     name="Authorization",
 *     in="header",
 *     scheme="https",
 *     securityScheme="bearerAuth"
 * )
*/

/**
 * @OA\Tag(
 *     name="Auth",
 *     description="Operations to register and authorize the user"
 * )
*/

/**
 * @OA\Tag(
 *     name="User",
 *     description="Operations about user"
 * )
*/
}