<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ApiAccountController extends Controller
{
    //

    public function add(Request $request)
    {
        
        $request = $request->toArray();
        $save    = $this->getData($request);
        dd($save);
    }

    protected function getData($request, $id = 0)
    {

        $rules = [
            'user_id' => 'required|integer',
            'account_no' => 'required',
        ];
        $data = $request->validate($rules);
        return $data;
    }
}
