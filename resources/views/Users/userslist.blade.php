<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>分组</title>
    <link rel="stylesheet" href="/dist/css/bootstrap.css">
</head>
<body>
    
    <table class="table table-bordered table-hover">
  
    
    
        <thead>
            <tr>
                <th>用户名</th>

                <th>密码</th>
               
          
                <th>角色</th>
                
              
               

                

                <th>操作</th>
            </tr>
            @foreach($ret as $item)
            <tr>
                <th>{{$item->username}}</th>

         
                <th>{{$item->password}}</th>
                <th>{{$item->role}}</th>
              
                

          
                
                <th> <a href="delete?id={{$item->id}}"  onclick="return confirm('确实要删除{{$item->username}}吗？'
                
                
    
                );">删除</a></th>
                 <th> <a href="updata?id={{$item->id}}" >修改</a></th>
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