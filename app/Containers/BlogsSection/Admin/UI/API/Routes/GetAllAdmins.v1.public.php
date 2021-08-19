<?php

/**
 * @apiGroup           Admin
 * @apiName            getAllAdmins
 *
 * @api                {GET} /v1/admins Endpoint title here..
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

Route::get('admins', [Controller::class, 'getAllAdmins'])
    ->name('api_admin_get_all_admins')
    ->middleware(['auth:api']);

