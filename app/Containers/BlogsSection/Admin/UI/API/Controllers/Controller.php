<?php

namespace App\Containers\BlogsSection\Admin\UI\API\Controllers;

use App\Containers\BlogsSection\Admin\UI\API\Requests\CreateAdminRequest;
use App\Containers\BlogsSection\Admin\UI\API\Requests\DeleteAdminRequest;
use App\Containers\BlogsSection\Admin\UI\API\Requests\GetAllAdminsRequest;
use App\Containers\BlogsSection\Admin\UI\API\Requests\FindAdminByIdRequest;
use App\Containers\BlogsSection\Admin\UI\API\Requests\UpdateAdminRequest;
use App\Containers\BlogsSection\Admin\UI\API\Transformers\AdminTransformer;
use App\Containers\BlogsSection\Admin\Actions\CreateAdminAction;
use App\Containers\BlogsSection\Admin\Actions\FindAdminByIdAction;
use App\Containers\BlogsSection\Admin\Actions\GetAllAdminsAction;
use App\Containers\BlogsSection\Admin\Actions\UpdateAdminAction;
use App\Containers\BlogsSection\Admin\Actions\DeleteAdminAction;
use App\Containers\BlogsSection\Admin\Actions\LoginAdminAction;
use App\Containers\BlogsSection\Admin\UI\API\Requests\LoginAdminRequest;
use App\Containers\BlogsSection\Admin\UI\API\Transformers\LoginAdminTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;
use Log;

class Controller extends ApiController
{
    public function createAdmin(CreateAdminRequest $request): JsonResponse
    {
        $admin = app(CreateAdminAction::class)->run($request);
        return $this->created($this->transform($admin, AdminTransformer::class));
    }

    public function loginAdmin(LoginAdminRequest $request): array
    {
        $admin = app(LoginAdminAction::class)->run($request);
        return $this->transform($admin,LoginAdminTransformer::class);
    }

    public function findAdminById(FindAdminByIdRequest $request): array
    {
        $admin = app(FindAdminByIdAction::class)->run($request);
        return $this->transform($admin, AdminTransformer::class);
    }

    public function getAllAdmins(GetAllAdminsRequest $request): array
    {
        $admins = app(GetAllAdminsAction::class)->run($request);
        return $this->transform($admins, AdminTransformer::class);
    }

    public function updateAdmin(UpdateAdminRequest $request): array
    {
        Log::error([$request]);
        $admin = app(UpdateAdminAction::class)->run($request);
        return $this->transform($admin, AdminTransformer::class);
    }

    public function deleteAdmin(DeleteAdminRequest $request): JsonResponse
    {
        app(DeleteAdminAction::class)->run($request);
        return $this->noContent();
    }
}
