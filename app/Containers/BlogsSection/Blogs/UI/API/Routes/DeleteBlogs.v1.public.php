<?php

/**
 * @apiGroup           Blogs
 * @apiName            deleteBlogs
 *
 * @api                {DELETE} /v1/blogs/:id Endpoint title here..
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

use App\Containers\BlogsSection\Blogs\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::delete('blogs/{id}', [Controller::class, 'deleteBlogs'])
    ->name('api_blogs_delete_blogs')
    ->middleware(['auth:api']);

