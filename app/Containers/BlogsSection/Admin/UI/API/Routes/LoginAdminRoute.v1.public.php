<?php

/**
 * @apiGroup           Admin
 * @apiName            loginAdmin
 *
 * @api                {POST} /v1/adminslogin Endpoint title here..
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

Route::post('adminslogin', [Controller::class, 'loginAdmin']);
    // ->name('api_admin_login_admin')
    // ->middleware(['auth:api']);

