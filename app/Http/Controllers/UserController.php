<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:create,App\User')->only('create');
        $this->middleware('can:update,user')->only('edit');
        $this->middleware('can:delete,user')->only('destroy');;
    }

    public function create()
    {
        /**Alternative 1
         * $this->authorize('create',new User);
         */
        return 'You Have Permission to Create a User';
    }

    public function edit(User $user)
    {
        /**Alternative 1
         * $this->authorize('update', $user);
         */
        return 'You Have Permission to Update User ' . $user->name;
    }

    public function destroy(User $user)
    {
        /**Alternative 1
         * $this->authorize('delete', $user);
         */
        return 'You Have Permission to Delete User ' . $user->name;
    }
}
