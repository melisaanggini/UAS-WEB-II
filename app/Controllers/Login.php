<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        // Show the login form
        return view('login');
    }

    public function authenticate()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Check credentials
        if ($username == 'user' && $password == '123') {
            // Set session data
            session()->set('username', $username);
            // Redirect to the dashboard
            return redirect()->to('/dashboard');
        } elseif ($username == 'admin' && $password == '123') {
            // Set session data for admin
            session()->set('username', $username);
            // Redirect to the admin dashboard
            return redirect()->to('/admin');
        } else {
            // Authentication failed
            return view('login', ['error' => 'Invalid username or password']);
        }
    }

    public function logout()
    {
        // Remove session data
        session()->remove('username');
        // Redirect to the login page
        return redirect()->to('/login');
    }
}
