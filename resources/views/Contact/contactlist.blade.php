<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>联系人</title>
    <link rel="stylesheet" href="/dist/css/bootstrap.css">
</head>
<body>
    
    <table class="table table-bordered table-hover">
  
    
    
        <thead>
            <tr>
                <th>用户名</th>

                <th>姓名</th>
                <th>性别</th>

          
                <th>生日</th>
                <th>手机</th>
                <th>家庭电话</th>
                <th>家庭住址</th>
                <th>QQ</th>
                <th>E-Mail</th>
                <th>MSN</th>
                <th>公司电话</th>
                <th>公司地址</th>
                <th>分组编码</th>
                <th>备注</th>

                

                <th>操作</th>
            </tr>
            @foreach($ret as $item)
            <tr>
                <th>{{$item->name}}</th>

                
                <th>{{$item->gender}}</th>
                <th>{{$item->birthday}}</th>
                <th>{{$item->mobileNumber}}</th>
                <th>{{$item->homeNumber}}</th>
                <th>{{$item->homeAddress}}</th>
                <th>{{$item->QQ}}</th>
                <th>{{$item->EMail}}</th>
                <th>{{$item->MSN}}</th>
                <th>{{$item->companyNumber}}</th>
                <th>{{$item->companyAddress}}</th>
                <th>{{$item->groupId}}</th>
                <th>{{$item->remarks}}</th>

          
                
                <th> <a href="delete?id={{$item->id}}"  onclick="return confirm('确实要删除{{$item->name}}吗？'
                
                
    
                );">删除</a></th>
                 <th> <a href="conup?id={{$item->id}}" >修改</a></th>
            </tr>
            @endforeach
           
        </thead>
        
       
        <tbody>
           
        </tbody>
    </table>
    
</body><div>{{$ret->links()}}</div>
<script src="/dist/js/bootstrap.js">
    <script src="/dist/js/jquery.js">
</html>