<?php
namespace App\Http\Services;

use Illuminate\Support\Facades\DB;

class AdminServices
{
    public function __construct(){

    }
    public function getTotalUsers(){
        $usersTotal = DB::table('users')->count();
        return $usersTotal;
    }
    public function getAllDataUsers(){
        $data = DB::table('users')->count();
        return $data;
    }
    public function insertNewWork($data){
        $result = DB::table('all_works')->insert($data);
        return $result;
    }
    public function getAllWorksById($id){
        $result = DB::table('all_works')->where('user_id',$id)->get();
        return $result;
    }
}