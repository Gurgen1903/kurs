<?php namespace App\Http\Services;
use Illuminate\Support\Facades\DB;


class WorksServices
{
    /**
     * select all works from diplom works where 'category == diplom'
     * @return mixed
     */
    public function getAllDiplomsWorks($category){
//        $sql = 'SELECT * FROM all_works WHERE work_category = "diplom"';
//        $result = DB::select(DB::raw($sql));
//        return $result;
        return DB::table('all_works')->where('work_category',$category)->get();
    }
    /**
     * select all works_category from all_works table
     */
    public function selectAllCategoriesWorks()
    {
        $sql = 'SELECT w.works_object
                FROM all_works as w
                WHERE w.work_category = "diplom"
                GROUP BY w.works_object';
        return DB::select(DB::raw($sql));
    }
    /**
     * select all works COUNT by category
     * table all_works
     */
    public function getCountWork($subject){
        return DB::table('all_works')->where('works_object',$subject)->count();
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