@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Products</a>
    </div>
    <ul class="nav navbar-justify">
      <li class="active"><a href="https://www.educastudio.com/category/marbel-edu-games">Marble Edu Games</a></li>
      <li><a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Marble and Friends Kids Games</a></li>
      <li><a href="https://www.educastudio.com/category/riri-story-books">Riri Story Books</a></li>
      <li><a href="https://www.educastudio.com/category/kolak-kids-songs">Kolak Kids Songs</a></li>
    </ul>
    
</nav>
</body>
</html>
@endsection