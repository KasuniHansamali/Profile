<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use DB;

class MembersController extends Controller
{
    public function new_member(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone_number = $request->phone_number;
        $address = $request->address;

        Members::create(['name' => $name, 'email' => $email, 'phone_number' => $phone_number, 'address' => $address]);

        return redirect('/');

    }

}
