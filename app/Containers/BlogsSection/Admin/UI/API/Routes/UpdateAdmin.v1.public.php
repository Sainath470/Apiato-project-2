<?php

/**
 * @apiGroup           Admin
 * @apiName            updateAdmin
 *
 * @api                {PATCH} /v1/admins/:id Endpoint title here..
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

use App\Containers\BlogsSection\Admin\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::patch('admins/{id}', [Controller::class, 'updateAdmin'])
    ->name('api_admin_update_admin')
    ->middleware(['auth:api']);

