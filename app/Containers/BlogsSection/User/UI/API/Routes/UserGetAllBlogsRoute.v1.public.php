<?php

/**
 * @apiGroup           User
 * @apiName            getAllblogsForUser
 *
 * @api                {GET} /v1/getblogsforuser Endpoint title here..
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

Route::get('getblogsforuser', [Controller::class, 'getAllblogsForUser']);
    // ->name('api_user_get_allblogs_for_user')
    // ->middleware(['auth:api']);

