<?php

namespace App\Http\Controllers\Stages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Stage;
use  App\Models\Grade;
use Yajra\DataTables\Facades\DataTables;

class StageController extends Controller
{
function getdata(Request $request){
    $grades=Grade::query();
    return DataTables::of($grades)->addIndexColumn()->addColumn('action',function(){

    return '    <div class="d-flex align-items-center gap-3 fs-6">
                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                              </div>';
    })->addColumn('stage',function($qur){
    return $qur->stage->name;
    })->make(true);
 }
function index(){
    return view('dashboard.grades.index');
 }
 function create(){
    $stages=Stage::all();
    return view('dashboard.grades.create',compact('stages'));
 }
 function add(Request $request){
    // dd($request->all());
    $request->validate([
        'name'=>'required|unique:grades,name',
        'stage'=>'required'
    ],[
        'name.required'=>'حقل الاسم مطلوب',
        'name.unique'=>'حقل الاسم يجب ان يكون فريد',
        'stage.required'=>'حقل المرحلة مطلوب',
    ]);
    Grade::create([
        'name'=>$request->name,
        'stage_id'=>$request->stage,
    ]);
    return "تمت الاضافة";

 }
}
