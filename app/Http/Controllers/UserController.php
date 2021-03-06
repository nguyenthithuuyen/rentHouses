<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        return view('users.my-profile', compact('user'));
    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        $id = Auth::id();
        $user = User::findOrFail($id);
        $user->fill($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $user->image = $path;
        }
        $user->save();
        toastr()->success('Cập nhật thông tin thành công!');
        return redirect()->route('me.profile');
    }

    public function getListHouseOfUser() {
        $userLogin = Auth::user();
        $houses = $userLogin->house;
        return view('users.my-houses', compact('houses'));
    }
}
