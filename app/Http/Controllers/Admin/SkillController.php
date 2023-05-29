<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public  function viewSkill(){
        $skills = Skill::all();
        return view('backend.skill.skill',compact('skills'));
    }
    public function addSkill(){
        return view('backend.skill.add_skill');
    }
    public function storeSkill(Request $request){
     $request->validate([
         'name' => 'required',
         'percentage' => 'required|integer'
     ],[
        'name.required'  => 'This name field is required for this action'
     ]);

     $skill = new Skill();
     $skill->name = $request->name;
     $skill->percentage = $request->percentage;
     $skill->save();

     //return 'Data Save Successfully';

      return redirect()->route('admin.skill.view')->with('success','Data Save Successfully');

    }
}
