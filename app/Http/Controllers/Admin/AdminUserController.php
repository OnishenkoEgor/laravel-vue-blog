<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminUserController extends Controller
{

    public function __construct(private UserService $userService)
    {
    }

    public function index()
    {
        $users = User::all();
        return view('admin/user/index', ['users' => $users]);
    }

    public function create(): View
    {
        return view('admin.user.create');
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        $new_user_data = $request->validated();
        $this->userService->store($new_user_data);
        return redirect()->route('admin.user.index');
    }

    public function update(StoreUserRequest $request, User $user): RedirectResponse
    {
        $new_user_data = $request->validated();
        $this->userService->update($user, $new_user_data);
        return redirect()->route('admin.user.index', $user->id);
    }

    public function edit(User $user): View
    {
        return view('admin.user.edit', ['user' => $user]);
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
