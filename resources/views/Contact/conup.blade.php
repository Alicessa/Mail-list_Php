<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/dist/css/bootstrap.css">
</head>
<body>
    <form action="/Contact/codoup" method="POST">
    @csrf
   
   <div class="panel panel-info">
         <div class="panel-heading">
               <h3 class="panel-title">用户修改</h3>
         </div>
         
       
            
         @csrf
             <div class="form-group">
               
             </div>
           
             
             <input type="text" name="name" id="id" class="form-control"  title="" value="{{$ret->id}}" >
              名字<input type="text" name="name" id="input" class="form-control"  title="" value="{{$ret->name}}">
         性别<input type="text"name="gender"  id="input" class="form-control"  title=""value="{{$ret->gender}}" >
        
          生日<input type="text"name="birthday"  id="input" class="form-control"  title="" value="{{$ret->birthday}}">
          手机<input type="text"name="mobileNumber"  id="input" class="form-control"  title="" value="{{$ret->mobileNumber}}">
          家庭电话<input type="text"name="homeNumber"  id="input" class="form-control"  title="" value="{{$ret->homeNumber}}">
          家庭住址<input type="text"name="homeAddress"  id="input" class="form-control"  title="" value="{{$ret->homeAddress}}">
          QQ<input type="text"name="QQ"  id="input" class="form-control"  title=""value="{{$ret->QQ}}" >
          邮箱<input type="text"name="Email"  id="input" class="form-control"  title=""value="{{$ret->Email}}" >
         MSN<input type="text"name="MSN"  id="input" class="form-control"  title=""value="{{$ret->MSN}}" >
          分组名字<input type="text"name="companyNumber"  id="input" class="form-control"  title="" value="{{$ret->companyNumber}}">
          分组编号<input type="text"name="companyAddress"  id="input" class="form-control"  title=""value="{{$ret->companyAddress}}" >
          分组id<input type="text"name="groupId"  id="input" class="form-control"  title=""value="{{$ret->groupId}}" >
          备注<input type="text"name="remarks"  id="input" class="form-control"  title="" value="{{$ret->remarks}}">
             <button type="submit" class="btn btn-primary">提交</button>
             
            </form>
         
        
   </div>
  
  </form>
   
 
    
</body>
<script src="/dist/js/bootstrap.js">
    <script src="/dist/js/jquery.js">
</html>