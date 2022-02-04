<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write your post here</title>
</head>
<body>
  @if(Session::has('post_add'))
  <span>{{Session::get('post_add')}}</span>
  @endif    
<form method="post" action=" {{route ('post.save') }}">
  @csrf
  <label for="Pname">Post Name</label><br>
  <input type="text" name="name"><br> <br>
  <label for="Dname">Description</label><br>
  <textarea name="description"></textarea><br><br>
  
 <input type="submit" value="Submit">
<a href="{{route('post.list') }}" >Post List</a>
</form>

</body>
</html>
