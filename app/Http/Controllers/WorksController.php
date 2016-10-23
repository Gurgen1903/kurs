<?php

namespace App\Http\Controllers;

use App\Http\Services\WorksServices;
use App\Http\Requests;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function __construct()
    {
//        if(Auth::check()){
//
//        }
    }

    /**
     * get all diplom works and print in view:'diplom_works'
     * @param WorksServices $worksServices
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function diplomWorks(WorksServices $worksServices,$category){
        $diploms_works = $worksServices->getAllDiplomsWorks($category);
        $works_category = $worksServices->selectAllCategoriesWorks();
        $data = array();
        foreach ($works_category as $val){
            $data[$val->works_object] = $worksServices->getCountWork($val->works_object);
                    $val->count = $data[$val->works_object];
        }

       return view('works.diplom_works',compact('diploms_works','works_category'));
    }

    public function worksByCategory(WorksServices $worksServices, $subject){
        $data = $worksServices->selectAllWorksBySubject($subject);
        return view('works.work_list_by_category',compact('data'));

    }
}