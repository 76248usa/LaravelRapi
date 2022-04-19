<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePage;

class Home extends Controller
{
    public function selectVideo(){
        $results = HomePage::select('video_description', 'video_url')->get();
        
        return $results;
    }//end method

    public function selectTotalHome(){
        $results = HomePage::select('total_student', 'total_course', 'total_review')->get();
        return $results;
    }//end method

    public function selectTechHome(){
        $results = HomePage::select('tech_description')->get();
        return $results;
    }//end method

    public function selectHomeTitle(){
        $result = HomePage::select('home_title', 'home_subtitle')->get();
        return $result;
    }//end method
}
