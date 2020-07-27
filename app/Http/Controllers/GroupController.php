<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\Group;
class GroupController extends Controller
{
    //
    public function grouplist()
    {  
     
        $ret= Group::paginate(env('PAGE-SIZE'));
       
   
       
       return view("Group.grouplist",compact("ret"));

      
    }
    public function add(){
        return view("Group.add");
    }
    /*方法二使用验证器*/
    public function saveadd(Request $request)
    
    {
        dump($request->all());  
$add=["groupId"=>$request->get("groupId"),
"groupName"=>$request->get("groupName"),
"remarks"=>$request->get("remarks")
  
    ];
    Group::insert($add);/*修改insert变成create*/
    /*使用create*/

       return redirect("Group/grouplist");
    
    }
    public function delete( ){
        $id=request()->get('id');

        $num=Group::destroy($id); 
        

        return redirect("Group/grouplist");
            
    }
    public function updata(){
        $id=request()->get('id');
    
       $ret = Group::where('id', $id)->first();
       
       return view("Group.updata",compact("ret"));
        
    
    }
        public function doupdata(Request $request ){
              $id=request()->get('id');

        DB::table('Group')->where('id',$id)->update(["groupId"=>$request->get("groupId"),
        "groupName"=>$request->get("groupName"),
        "remarks"=>$request->get("remarks")
        ]);
       
       
        dump($request->all());
     //返回更新的行数
     return redirect("Group/grouplist");   
        }
        
    }
