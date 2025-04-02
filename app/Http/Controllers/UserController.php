<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{

    public function index()
    {
        $users = User::latest()->paginate(8);

        return view('panel.panel', ['users' => $users]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    public function show(User $user)
    {
        return view('panel.edit', ['user' => $user]);
    }

    public function update(User $user)
    {

        Gate::authorize('editUser', $user);

        request()->validate([
            'name' => ['required'],
        ]);

        $user->update([
            'name' => request('name'),
        ]);

        return redirect('/panel/' . $user->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        Gate::authorize('editUser', $user);

        $user->delete();

        return redirect('/');
    }
}
