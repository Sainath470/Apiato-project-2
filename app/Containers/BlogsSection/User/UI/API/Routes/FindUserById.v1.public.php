<?php

/**
 * @apiGroup           User
 * @apiName            findUserById
 *
 * @api                {GET} /v1/user/:id Endpoint title here..
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

Route::get('user/{id}', [Controller::class, 'findUserById'])
    ->name('api_user_find_user_by_id')
    ->middleware(['auth:api']);

