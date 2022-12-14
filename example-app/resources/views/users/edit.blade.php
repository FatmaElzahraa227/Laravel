@extends('layouts.app')
@section('form')
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

    <form action="{{route('users.index')}}" method="get">
        @csrf
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$name}}"></input>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputPassword1" value="{{$email}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
    </form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
@endsection