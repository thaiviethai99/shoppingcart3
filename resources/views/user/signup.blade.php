@extends('layouts.master')
@section('content')
<div class="row">
<div class="col-lg-12">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
<div class="col-md-4 col-md-offset-4">
<h1>Register</h1>
<form action="{{route('user.signup')}}" method="POST">
{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
@endsection