<?php

/**
 * @apiGroup           Admin
 * @apiName            findAdminById
 *
 * @api                {GET} /v1/admins/:id Endpoint title here..
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

Route::get('admins/{id}', [Controller::class, 'findAdminById'])
    ->name('api_admin_find_admin_by_id')
    ->middleware(['auth:api']);

