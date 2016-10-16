<?php namespace App\Http\Services;
use Illuminate\Support\Facades\DB;


class WorksServices
{
    /**
     * select all works from diplom works where 'category == diplom'
     * @return mixed
     */
    public function getAllDiplomsWorks(){
        $sql = 'SELECT * FROM all_works';
        $result = DB::select(DB::raw($sql));
        return $result;
    }
    /**
     * select all works_category from all_works table
     */
    public function selectAllCategoriesWorks()
    {
        $sql = 'SELECT w.works_object
                FROM all_works as w
                GROUP BY w.works_object';
        return DB::select(DB::raw($sql));
    }

    /**
     * select all works where subject == our param
     *
     */
    public function selectAllWorksBySubject($subject){
        $sql = 'SELECT *
                FROM all_works as w
                WHERE w.works_object = "'.$subject.'"';
        return DB::select(DB::raw($sql));
    }

}