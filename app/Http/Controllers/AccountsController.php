<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;
use App\Models\User;
class AccountsController extends Controller
{
    public function index(Request $request)
    {
        $user = User::with(['account']);
        $user = $user->where('id',Auth::user()->id)->first();
        return view('accounts.index',compact('user'));
    }
    
}
