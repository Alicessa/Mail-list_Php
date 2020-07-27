<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequest;
use App\Models\Contact;
class ContactController extends Controller
{

    public function contactlist()
    {  
        /*方法三使用model模型*/
        $ret= Contact::paginate(env('PAGE-SIZE'));
       
        /*方法二使用构建器*/
       /* $ret=DB::table('AliceUser')->get();*/
       
       return view("Contact.contactlist",compact("ret"));

        /*方法一使用原生sql语句*/
         /* $ret=DB::select("select * from AliceUser ");
  return view("user.Alicelist",compact("ret"));*/
    }
    public function conup(){
        $id=request()->get('id');
    
        $ret=Contact::where('id',$id)->first();
       
       return view("contact.conup",compact("ret"));
        
    
    }
        public function codoup(Request $request ){
            $id=request()->get('id');
    
            $model=Contact::where('id',$id)->update(["name"=>$request->get("name"),
            "gender"=>$request->get("gender"),
            "birthday"=>$request->get("birthday"),
            "mobileNumber"=>$request->get("mobileNumber"),
            "homeNumber"=>$request->get("homeNumber"),     
            "homeAddress"=>$request->get("homeAddress"),
            "QQ"=>$request->get("QQ"),
            "Email"=>$request->get("Email"),
            "MSN"=>$request->get("MSN"),
            "companyNumber"=>$request->get("companyNumber"),
            "companyAddress"=>$request->get("companyAddress"),
            "groupId"=>$request->get("groupId"),
            "remarks"=>$request->get("remarks"),
            ]);
            dump($request->id) ;
    //使用model修改
  
   //返回更新的行数
   return redirect("/Contact/contactlist");
          
        }
        public function delete( ){
            $id=request()->get('id');
    
            /*$ret = DB::table('AliceUser')->where('id',$id)->delete();*/
            //使用模型删除
            $num=Contact::destroy($id); 
            
    
            return redirect("/Contact/contactlist");
                
        }
        public function conadd(){
            return view("Contact.conadd");
        }
        /*方法二使用验证器*/
        public function condoadd(Request $request)
        
        {
           
    $add=["name"=>$request->get("name"),
    "gender"=>$request->get("gender"),
    "birthday"=>$request->get("birthday"),
    "mobileNumber"=>$request->get("mobileNumber"),
    "homeNumber"=>$request->get("homeNumber"),     
    "homeAddress"=>$request->get("homeAddress"),
    "QQ"=>$request->get("QQ"),
    "Email"=>$request->get("Email"),
    "MSN"=>$request->get("MSN"),
    "companyNumber"=>$request->get("companyNumber"),
    "companyAddress"=>$request->get("companyAddress"),
    "groupId"=>$request->get("groupId"),
    "remarks"=>$request->get("remarks")
      
        ];
        Contact::insert($add);/*修改insert变成create*/
        /*使用create*/
    
           return redirect("/Contact/contactlist");
        
        }
    //
}
