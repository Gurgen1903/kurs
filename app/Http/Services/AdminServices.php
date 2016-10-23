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

    /**
     * create new order in table
     */
    public function insertDataOrder($data){
        $result = DB::table('order_work')->insert($data);
        return $result;
    }
    /**
     * get all orders from order_work table
     */
    public function getAllOrders(){
        $result = DB::table('order_work')->orderBy('created_at','asc')->get();
        return $result;
    }
    /**
     * update field 'new_end' 0
     */
    public function updateNewEnd($id){
        DB::table('order_work')->where('id',$id)->update(['new_end' => 0,'completed'=>'yes']);

    }



}