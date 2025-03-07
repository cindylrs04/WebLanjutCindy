<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'manager 3',
        //     'password' => Hash::make('12345')
        // ];

        // UserModel::create($data);

        // $user = UserModel::find(1);

        // $user = UserModel::where('level_id', 1)->first();

        // $user = UserModel::firstwhere('level_id', 1);

        // $user = UserModel::findOr(1, ['username', 'nama'], function(){
        //     abort(404);
        // });

        $user = UserModel::findOr(20, ['username', 'nama'], function(){
            abort(404);
        });
        return view('user', ['data' => $user]);
    }
}
