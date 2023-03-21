<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\UserAccounts;

class LoansController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard()
    {
        $loan   = UserAccounts::with(['loanTransactions','loans']);
        $dbInfo = $loan->where('user_id',Auth::user()->id)->first();
        if(!empty($dbInfo)){
            $dbInfo->toArray();
        }
        return view('loans.dashboard',compact('dbInfo'));
    }

    public function payments()
    {
        $loan   = UserAccounts::with(['loanTransactions','loans']);
        $dbInfo = $loan->where('user_id',Auth::user()->id)->first();
        if(!empty($dbInfo)){
            $dbInfo  = $dbInfo->toArray();
        }
        return view('loans.payments',compact('dbInfo'));
    }
}
