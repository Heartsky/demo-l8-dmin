<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MasterManagementController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */

    public function show()
    {
        return view('profile.show');
    }

    public function edit()
    {
        return view('profile.edit');
    }


    public function userList()
    {
        $users = User::all();
        $result = [];
        foreach ($users as $user) {
            if(!$user->hasRole('Admin')) {
                $result[] = $user;
            }
        }
        return view('pages.alluser',['users' => $result]);
    }

    public function userDetail(Request $request, $id)
    {
        $user = User::find($id);
        return view('pages.user_detail',['user' => $user]);
    }

    public function userEdit(Request $request, $id)
    {
        $user = User::find($id);
        $roles = Role::where('name', "<>", "Admin")->get();
        return view('pages.user_edit',['user' => $user, 'roles' => $roles]);
    }





    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function userUpdate(Request $request, $id)
    {

//        if (auth()->user()->id == 1) {
//            return back()->withErrors(['not_allow_profile' => __('You are not allowed to change data for a default user.')]);
//        }
        $user = User::find($id);
        $user->update($request->all());

        return back()->withStatus(__('Profile successfully updated.'));
    }


}
