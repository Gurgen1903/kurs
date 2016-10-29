<?php

namespace App\Http\Controllers;

use App\Http\Services\WorksServices;
use App\Http\Requests;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    protected $worksServices;
    public function __construct(WorksServices $worksServices)
    {
        $this->worksServices = $worksServices;
    }

    /**
     * get all diplom works and print in view:'diplom_works'
     * @param WorksServices $worksServices
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function diplomWorks($category){
        $works_category = $this->worksServices->selectAllCategoriesWorks($category);

//        $diploms_works = $worksServices->getAllDiplomsWorks($category);
//        $works_category = $this->worksServices->selectAllCategoriesWorks();
        $data = array();
        foreach ($works_category as $val){
            $data[$val->works_object] =$this->worksServices->getCountWork($val->works_object,$category);
                    $val->count = $data[$val->works_object];
        }


        return view('works.diplom_works',compact('works_category'));
    }

    public function worksByCategory(WorksServices $worksServices, $subject){
        $data = $worksServices->selectAllWorksBySubject($subject);
        return view('works.work_list_by_category',compact('data'));

    }
}