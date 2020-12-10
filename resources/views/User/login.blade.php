@extends('home.index')
@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Login form</h2>
    {!! Form::model(null,array('url' => array('user/login'),'class'=>'form-horizontal create-store-form','id'=>'form_add','method'=>'post','enctype'=>'multipart/form-data')) !!}
    <div class="form-group">
        <label>Email:</label>
        <input type="text" class="form-control"  placeholder="Enter Email" name="email" required>
    </div>

    <div class="form-group">
        <label>Password:</label>
        <input type="text" class="form-control" placeholder="Enter your password" name="password" required>
    </div>


    <button type="submit" class="btn btn-primary">Register</button>
    {!! Form::close() !!}
</div>

</body>
</html>

@endsection
