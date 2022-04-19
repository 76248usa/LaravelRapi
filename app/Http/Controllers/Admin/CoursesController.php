<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;

class CoursesController extends Controller
{
    public function selectCourses(){
        $result = Courses::all();

        return $result;
    }//end method

    public function courseDetails($courseId){
        $id = $courseId;
        $result = Courses::where('id', $id)->get();

        return $result;

    }//end method
    
}
