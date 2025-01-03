<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        //
    }

    // Register
    public function register()
    {
        if ($this->request->getMethod() === 'post') {
            $data = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            ];
            $this->userModel->insert($data);
            return redirect()->to('/login')->with('success', 'Registration successful. Please login.');
        }

        return view('users/register');
    }

    // Login
    public function login()
    {
        if ($this->request->getMethod() === 'post') {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            echo json_encode($this->request->getPost()); die();

            $user = $this->userModel->where('email', $email)->first();
            if ($user && password_verify($password, $user['password'])) {
                session()->set('user', $user);
                return redirect()->to('/dashboard');
            }

            return redirect()->back()->with('error', 'Invalid credentials.');
        }

        // return view('users/login');
        return view('auth/login');
    }

    // Logout
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    // Reset Password
    public function resetPassword()
    {
        if ($this->request->getMethod() === 'post') {
            $email = $this->request->getPost('email');
            $user = $this->userModel->where('email', $email)->first();

            if ($user) {
                $token = bin2hex(random_bytes(16));
                $this->userModel->update($user['id'], ['reset_token' => $token]);

                // Send reset link (mock example)
                $resetLink = base_url("/users/newPassword/$token");
                return redirect()->back()->with('success', "Reset link: $resetLink");
            }

            return redirect()->back()->with('error', 'Email not found.');
        }

        return view('users/reset_password');
    }

    public function newPassword($token)
    {
        $user = $this->userModel->where('reset_token', $token)->first();

        if (!$user) {
            return redirect()->to('/login')->with('error', 'Invalid token.');
        }

        if ($this->request->getMethod() === 'post') {
            $newPassword = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT);
            $this->userModel->update($user['id'], ['password' => $newPassword, 'reset_token' => null]);

            return redirect()->to('/login')->with('success', 'Password updated successfully.');
        }

        return view('users/new_password', ['token' => $token]);
    }
}
