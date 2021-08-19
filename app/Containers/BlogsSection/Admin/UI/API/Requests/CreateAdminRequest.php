<?php

namespace App\Containers\BlogsSection\Admin\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

class CreateAdminRequest extends Request
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     */
    protected array $access = [
        'permissions' => '',
        'roles'       => '',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     */
    protected array $decode = [
        // 'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     */
    protected array $urlParameters = [
        // 'id',
    ];

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'firstName' => 'min:2|max:50',
            'lastName' => 'min:2|max:50',
            'email' => 'required|email|max:40|unique:admins',
            'password' => 'required|required_with:password_confirmation|min:3',
            'password_confirmation' => 'required|same:password'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
