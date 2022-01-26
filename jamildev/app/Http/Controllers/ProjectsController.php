<?php

namespace App\Http\Controllers;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function list_view()
    {
        $projects=new Projects();
        $data=$projects->all();
        return view('admin/projects/list',['data'=>$data]);
    }
}
