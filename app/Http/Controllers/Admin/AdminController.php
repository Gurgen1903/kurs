<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\AdminServices;
use Symfony\Component\HttpFoundation\File;
use Illuminate\Support\Facades\Auth;
use App\all_works;
use App\Taske;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AdminServices $adminServices)
    {
        $total_users = $adminServices->getTotalUsers();
        $data_users = $adminServices->getAllDataUsers();
        return view('admin/adminHome',compact('total_users','data_users'));
    }
    public function NewWork(AdminServices $adminServices,Taske $taske){
        if(Auth::user()){
            $data = $adminServices->getAllWorksById(Auth::user()->id);
            return view('admin.addNewWork',['data' => $data]);
        }
        else{
            return redirect('admin/home');
        }

    }
    /**
     * Word file upload
     * name New work
     */
    public function uploadNewWork(Request $request,AdminServices $adminServices){
            $this->validate($request, [
               'work_object' => 'required',
               'work_name' => 'required',
               'filefield' => 'required',
               'work_category' => 'required',
            ]);
        if($request->file('filefield')->getClientOriginalExtension() == 'pdf' || $request->file('filefield')->getClientOriginalExtension() == 'docx'){
            $fileType = $request->file('filefield')->getClientOriginalExtension();
            $display_name = $request->input('work_name');
            $filename = $request->input('work_name').'__'.uniqid().'.'.$fileType;
            $filePath = base_path('uploads');
            $data = array(
                'works_name' => $filename,
                'display_name' => $display_name,
                'works_object' =>$request->input('work_object'),
                'work_category' =>$request->input('work_category'),
                'user_id' =>Auth::user()->id,
                'user_name' =>Auth::user()->name,

            );
//            Insert this work in table all Works
            $adminServices->insertNewWork($data);
            $request->file('filefield')->move($filePath,$filename);
            return redirect('add-work');
        }
        else{
            Session::flash('errorTypeFile', "Type of file must be \"docx\" or \"PDF\"");
            return back();
        }
    }

    /**
     * order work function
     * get all info from ajax request
     * and insert this info
     */
    public function postOrderWorkByUser(Request $request,AdminServices $adminServices){
        $data = array(
            'category_order' => $request->input('category'),
            'name' => $request->input('name_of_work'),
            'fakultet' => $request->input('fakultet'),
            'teacher' => $request->input('nauch_ruk'),
            'completion_date' => $request->input('data_sdachi'),
            'name_student' => $request->input('nameOfStudent'),
            'new_end' => 1,
            'tel_number' => $request->input('tel_number'),
        );
        $adminServices->insertDataOrder($data);

        return 1;
    }

    /**
     * View all orders
     *
     */
    public function allOrders(AdminServices $adminServices){
        $orders = $adminServices->getAllOrders();
        return view('admin.orders_admin',compact('orders'));
    }
    /**
     * update status new_end
     */
    public function changeStatusNew(AdminServices $adminServices,$id){
        $adminServices->updateNewEnd($id);
        return redirect('all-order-work');
    }





}