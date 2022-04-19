<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectController extends Controller
{
    public function onSelectThree(){
        $threeResult = Projects::limit(3)->get();
        return $threeResult;
    }//End Method

    public function onSelectAll(){
        $result = Projects::all();
        return $result;
    }

    public function projectDetails($projectId){
        $id = $projectId;
        $result = Projects::where('id', $id)->get();
        return $result; 
    }
}
