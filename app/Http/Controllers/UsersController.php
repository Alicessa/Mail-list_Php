<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function userslist()
    {  
        /*方法三使用model模型*/
        $ret= User::paginate(env('PAGE-SIZE'));
       
        /*方法二使用构建器*/
       /* $ret=DB::table('AliceUser')->get();*/
       
       return view("Users.Userslist",compact("ret"));

        /*方法一使用原生sql语句*/
         /* $ret=DB::select("select * from AliceUser ");
  return view("user.Alicelist",compact("ret"));*/
    }
    public function userlogin()
    {  
        
        
       return view("Users.userlogin");
       
    }
    public function dologin(Request $request)
    {   $username=$request->get('username');
        $password=$request->get('password');

        //dump($request->all());
        
        $ret=User::where('username',$username)->where('password',$password)->count();
        dump($ret);
        if($ret>0){

            return redirect("Users/userslist");
        }
      
    }
    public function add(){
        return view("Users.add");
    }
    /*方法二使用验证器*/
    public function saveadd(Request $request)
    
    {
       /*方法一原生sql语句  $sql="insert into AliceUser(username,password,em)values(:username,:password,:em)";
        DB::insert($sql,[":username"=>$request->get("username"),
        ":password"=>$request->get("password"),
        ":em"=>$request->get("em"),
        
        ]);*/
        /*方法二使用构建器*/
       /* DB::table('AliceUser')->insert(["username"=>$request->get("username"),
        "password"=>$request->get("password"),
        "em"=>$request->get("em")
        
        
        
        ]);*/
        dump($request->all());

       
    /*  dump($request->all()) ;*/
    /*方法三使用model模型*/
    /*save*/
  /*$model =new User();
  $model->username=$request->get("username");
  $model->password=$request->get("password");
  $model->em=$request->get("em");
  
  $model->save();*/

  /*使用 */
   /*insert*/
$user=["username"=>$request->get("username"),
"password"=>$request->get("password"),
"role"=>$request->get("role")
  
    ];
    User::insert($user);/*修改insert变成create*/
    /*使用create*/

       return redirect("Users/userslist");
    
    }
    public function delete( ){
        $id=request()->get('id');

        /*$ret = DB::table('AliceUser')->where('id',$id)->delete();*/
        //使用模型删除
        $num=User::destroy($id); 
        

        return redirect("/Users/userslist");
            
    }
public function updata(){
    $id=request()->get('id');

   $ret = User::where('id', $id)->first();
   
   return view("Users.updata",compact("ret"));
    

}
    public function doupdata(Request $request ){
          $id=request()->get('id');
 
      

        // DB::table('Users')->where('id',$id)->updata(["username"=>$request->get("username"),
        // "password"=>$request->get("password"),
        // "em"=>$request->get("em")      
        // ]);
      
//使用model修改
$model=User::where('id',$id)->update(["username"=>$request->get("username"),
"password"=>$request->get("password"),
"role"=>$request->get("role")      
]);
 //返回更新的行数
        return redirect("/Users/userslist");
    }
    

}
