<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'usu_name' => ['required', 'string', 'max:255'],
            'usu_email' => ['required', 'string', 'email', 'max:255', 'unique:users,usu_email'],
            'usu_password' => ['required', 'string', 'min:8', 'confirmed'],
            'usu_document' => ['required', 'string', 'numeric', 'digits_between:7,12', 'unique:users,usu_document']
        ], [
            "usu_name.required" => "El campo <b>Nombre</b> es obligatorio.",
            "usu_email.required" => "El campo <b>Correo Electronico</b> es obligatorio.",
            "usu_password.required" => "El campo <b>Contraseña</b> es obligatorio.",
            "usu_document.required" => "El campo <b>Documento<b> es obligatorio.",
            "usu_name.string" => "El campo <b>Nombre</b> no puede estar vacio.",
            "usu_email.string" => "El campo <b>Correo Electronico</b> no puede estar vacio.",
            "usu_password.string" => "El campo <b>Contraseña</b> no puede estar vacio.",
            "usu_document.numeric" => "El campo <b>Documento</b> debe contener numeros.",
            "usu_name.max" => "El campo <b>Nombre</b> no puede tener mas 255 caracteres.",
            "usu_email.max" => "El campo <b>Correo Electronico</b> no puede tener mas de 255 caracteres.",
            "usu_document.digits_between" => "El campo <b>Documento</b> debe tener entre 7 y 12 digitos.",
            "usu_email.email" => "El campo <b>Correo Electronico</b> debe contener un email valido.",
            "usu_password.min" => "El campo <b>Contraseña</b> debe tener minimo 8 caracteres.",
            "usu_password.confirmed" => "Las contraseñas no coinciden.",
            "usu_email.unique" => "Ya existe un usuario registrado con ese <b>Correo Electronico</b>.",
            "usu_document.unique" => "Ya existe un usuario registrado con ese <b>Documento</b>."
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'usu_name' => $data['usu_name'],
            'usu_email' => $data['usu_email'],
            'usu_password' => Hash::make($data['usu_password']),
            'usu_document' => $data['usu_document']
        ]);
    }
}
