<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write your post here</title>
</head>
<body>
  @if(Session::has('post_update'))
  <span>{{Session::get('post_update')}}</span>
  @endif  
<form method="post" action="{{route('update.post')}}">
  @csrf
  <input type="hidden" name="id" value="{{$post->id}}"><br> 
  <label for="Pname">Post Name</label><br>
  <input type="text" name="name" value="{{$post->name}}"><br> <br>
  <label for="Dname">description</label><br>
  <textarea name="description">{{$post->description}}</textarea><br><br>
  
 <input type="submit" value="Update">
<a href="{{route('post.list') }}">Post List</a>
</form>

</body>
</html>
