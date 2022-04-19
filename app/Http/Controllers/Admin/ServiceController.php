<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class ServiceController extends Controller
{
    public function onSelectAll(){
        $result = Services::latest()->get();
        return $result;
    }
}
