<?php

namespace App\Http\Controllers\Site\Students;

use App\Http\Controllers\Controller;
use App\Models\Quizz;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StudentController extends Controller
{

   function index() {

        $user = Auth::user();

       $subjects =  $user->student->grade->subjects ;

       return view('studets.index' , compact('user' , 'subjects'));
    }

    function subject($id) {

       $subject = Subject::query()->findOrFail($id);
       return view('studets.subject' , compact('subject'));
    }

      function quizz($id) {

       $quizz = Quizz::query()->findOrFail($id);
       return view('studets.quizz' , compact('quizz'));
    }

    function postquizz(Request $request) {


    }
    function download($filename) {
        $path = public_path('uploads/books/' . $filename );

        return response()->download($path);
    }
}
