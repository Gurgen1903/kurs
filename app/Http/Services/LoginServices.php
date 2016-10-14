<?php namespace App\Http\Services;
use Illuminate\Support\Facades\DB;


class LoginServices
{
    public function getLoginUser($email){
        $data = DB::table('users')->where('email',$email)->first();
        return $data;
    }
}