<?php namespace App\Http\Services;
use Illuminate\Support\Facades\DB;


class WorksServices
{
    public function getAllDiplomsWorks(){
        $sql = 'SELECT * FROM diplom_works';
        $result = DB::select(DB::raw($sql));
        return $result;
    }
    public function getAllSubjects(){
        $sql = 'SELECT * FROM subjects';
        $result = DB::select(DB::raw($sql));
        return $result;
    }
}