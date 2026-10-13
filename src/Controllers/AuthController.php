<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    public function registerForm()
    {
        view('auth/register');
    }
    public function register()
    {
        $users = User::where('email', $_POST['email']);
        if ($users || $_POST['password'] !== $_POST['password_confirm']) {
            return redirect('/register');
        }
        $user = new User();
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user->save();
        redirect('/login');
    }
    public function loginForm()
    {
        view('auth/login');
    }
    public function login()
    {
        $users = User::where('email', $_POST['email']);
        $user = $users ? $users[0] : null;
        if (!$user || !password_verify($_POST['password'], $user->password)) {
            return redirect('/login');
        }
        session_regenerate_id(true);
        $_SESSION['userID'] = $user->id;
        return redirect('/');
    }
    public function logout()
    {
        $_SESSION = [];
        session_destroy();
        return redirect('/');
    }
}
