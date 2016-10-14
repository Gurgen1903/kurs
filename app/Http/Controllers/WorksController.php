<?php

namespace App\Http\Controllers;

use App\Http\Services\WorksServices;
use App\Http\Requests;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function diplomWorks(WorksServices $worksServices){
//        $diploms_works = $worksServices->getAllDiplomsWorks();
//        $subjects = $worksServices->getAllSubjects();
       return view('works.diplom_works');
    }
}