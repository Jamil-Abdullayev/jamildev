<?php

namespace App\Http\Controllers;
use App\Models\ProjectsCategory;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
   public function list_view()
   {
        $cats=new ProjectsCategory();
        $data=$cats->all();
        return view('admin/project_cat/list',['data'=>$data]);
   }

    public function add( Request $request)
    {
        $skills= new ProjectsCategory();
        $skills->name=$request->input('name');

        $skills->save();
        return redirect()->route('project_category');
    }

    public function edit_page($id)
    {
        $procat_data=ProjectsCategory::find($id);
        return view('admin/project_cat/edit',['data'=>$procat_data]);
    }

    public function  edit_event($id,Request $request)
    {
        $find_data=ProjectsCategory::find($id);
        $find_data->name=$request->input('name');
        $find_data->save();
        return redirect()->route('project_category');
    }

    public function delete_procat($id)
    {
        ProjectsCategory::find($id)->delete();
        return redirect()->route('project_category');
    }
}
