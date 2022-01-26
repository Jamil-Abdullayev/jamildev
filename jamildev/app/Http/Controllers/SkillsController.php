<?php

namespace App\Http\Controllers;
use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function submit( Request $request)
    {
       $skills= new Skills();
       $skills->name=$request->input('name');
       $skills->description=$request->input('text');

       $skills->save();
       return redirect()->route('skills');
    }

    public function all_data_list()
    {
        /*$skills= new Skills();
        $all_data=$skills->all();
        dd($all_data);*/
        return view('admin/skills/skills',['all_data'=>Skills::all()]);
    }

    public function edit_skill($id)
    {
        $skills=new Skills();
        $data=$skills->find($id);
        return view('admin/skills/edit',['data'=>$data]);
    }

    public function update_skills( $id,Request $request)
    {
        $skills= Skills::find($id);
        $skills->name=$request->input('name');
        $skills->description=$request->input('text');

        $skills->save();
        return redirect()->route('skills');
    }

    public function skill_delete($id)
    {
        Skills::find($id)->delete();
        return redirect()->route('skills');
    }
}
