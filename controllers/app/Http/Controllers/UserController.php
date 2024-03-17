<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index(){
        // Usando ORM
        // $users = $this->getUsersOlderThan18();

        // Usando sql directo (DD)
        // $users = DB::select(DB::raw("select * from users")); 
        //esto dice el del curso pereo no va xd
        $users = DB::select("select * from users");


        return view('user.index', compact('users'));
    }

    public function getUsers(){
       return User::all();
    }

    public function getUsersOlderThan18(){
        return User::where('age', '>=', 18)->get();
    }
 

    public function create(){
        
        $user = new User;
        $user->name = 'Ovejen';
        $user->email = 'Ovejen@ovejapreciosa@ivejen.com';
        $user->password = Hash::make('moflestforever');
        $user->age = 26;
        $user->adress = 'Casa con el Moflo';
        $user->zip_code = 2901;
        $user->save();

        User::create([
            'name' => 'Moflo',
            'email' => 'moflest@moflo.com',
            'password'=> Hash::make('ovejenforever'),
            'age' => 24,
            'adress' => 'Casa con Ovejen',
            'zip_code'=> 2901
        ]);

        return redirect()->route('user.index');

    }
}
