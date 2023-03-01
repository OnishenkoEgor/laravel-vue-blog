<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Services\UserService;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(): View
    {
        $users = User::all();
        return view('user/index', ['users' => $users]);
    }

    public function show(User $user): View
    {
        return view('user/show', ['user' => $user]);
    }
}
