<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class user extends Model
{
    
    protected $fillable = ['name', 'email', 'password'];

    public function books()
    {
        return $this->belongsToMany('App\Book');
    }
 

    public function register(Request $request) 
    {
        $user = new self();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
    }

}