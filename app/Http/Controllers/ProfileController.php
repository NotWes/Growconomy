<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        $user = User::where('name', $name)->firstOrFail();
        return view('public.profile.index', compact('user'));
    }

    public function edit(){
        return view('public.profile.edit');
    }

    public function update(Request $request){
        $this->validate($request, [
            'name' => 'string|required',
            'email' => 'email|required',
            'ign' => 'string|nullable',
            'growtopiaf' => 'string|nullable',
            'bio' => 'string|nullable|max:500',
        ]);

        $user = Auth::user();
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->ign = $request->ign;
        $user->growtopia_forums = $request->growtopiaf;
        $user->bio = $request->bio;


        
        

        $user->save();

        $name = $request->name;

        session()->flash('success', 'Successfully updated profile.');
        return redirect('/');

    }

    public function staff(){
        $owner = User::where('permission', 6)->orderBy('name', 'ASC')->get();
        $admin = User::where('permission', 5)->orderBy('name', 'ASC')->get();
        $manager = User::where('permission', 4)->orderBy('name', 'ASC')->get();
        $seditor = User::where('permission', 3)->orderBy('name', 'ASC')->get();
        $editor = User::where('permission', 2)->orderBy('name', 'ASC')->get();
        $intern = User::where('permission', 1)->orderBy('name', 'ASC')->get();

        return view('public.staff', compact('owner', 'admin', 'manager', 'seditor', 'editor', 'intern'));
    }

}
