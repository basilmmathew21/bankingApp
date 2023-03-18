<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AccountsController extends Controller
{
    public function index(Request $request)
    {
        $user = User::with(['account']);
        $user = $user->where('id',Auth::user()->id)->first();
        return view('accounts.index',compact('user'));
    }

    public function edit($id)
    {
        $user   = User::with('account')
                   ->findOrFail($id);
        return view('accounts.edit', compact('user'));
     }

    public function update($id, Request $request)
    {
        $data    = $this->getData($request, $id);
        $user    = User::findOrFail($id);

        if ($request->hasFile('image')) {
            $profile_image_path = $request->file('image')->store('public/images/profile');
            $profile_image_path = str_replace("public/", "", $profile_image_path);
           $data['image'] =  $profile_image_path;
        } else {
            $data['image'] =  $user->image;
        }
        //Update the password only if provided
        if ($data['password'] && !empty($data['password']))
            $data['password'] = Hash::make($data['password']); //Encrypting password
        else
            unset($data['password']);
        $user->update($data);
        
        return redirect()->route('accounts.index')
            ->with('success_message','Accounts Info Udated');
    }

    protected function getData(Request $request, $id = 0)
    {

        $rules = [
            'name' => 'required|string|min:1|max:255',
            'email' => [
                'regex:/(.+)@(.+)\.(.+)/i',
                Rule::unique('users')->where(function ($query) {
                }),
            ],
            'password' => 'string|min:8|max:255',
            'image' => 'nullable|mimes:jpg,jpeg,png|max:5120',
        
        ];

        //Validating unique for update ignoring the same record
        if ($id) {
            $rules = array_merge($rules,[
                'email' => [
                    'regex:/(.+)@(.+)\.(.+)/i',
                    Rule::unique('users')->ignore($id)->where(function ($query) {
                    }),
                ],
                'password' => 'nullable|string|min:8|max:255',
            ]);
        }

        $data = $request->validate($rules);
        return $data;
    }

    
    
}
