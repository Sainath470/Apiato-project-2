<?php

/**
 * @apiGroup           User
 * @apiName            deleteUser
 *
 * @api                {DELETE} /v1/user/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\BlogsSection\User\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::delete('user/{id}', [Controller::class, 'deleteUser'])
    ->name('api_user_delete_user')
    ->middleware(['auth:api']);

