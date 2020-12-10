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
    <h2>Register form</h2>
    {!! Form::model(null,array('url' => array('user/register_form'),'class'=>'form-horizontal create-store-form','id'=>'form_add','method'=>'post','enctype'=>'multipart/form-data')) !!}
    <div class="form-group">
        <label>Firstname:</label>
        <input type="text" class="form-control"  placeholder="Enter Firstname" name="firstname" required>
    </div>
    <div class="form-group">
        <label>Lastname:</label>
        <input type="text" class="form-control"  placeholder="Enter Lastname" name="lastname" required>
    </div>
    <div class="form-group">
        <label>Date of Birth:</label>
        <input type="date" class="form-control"  placeholder="Enter Date of Birth" name="date_of_birth" required>
    </div>
    <div class="form-group">
        <label>Profile image:</label>
        <input type="file" class="form-control" placeholder="Enter Date of Birth" name="img">
    </div>
    <div class="form-group">
        <label>Gender:</label>
        <input type="radio" id="male" name="sex" value="1" required>
        <label for="male">: Male </label>  <input type="radio" id="male" name="sex" value="2" required>
        <label for="male">: Female </label><br>
    </div>

    <div class="form-group">
        <label for="social">Social:</label>
        <input type="checkbox" name="social[]" value="1">
        <label for="male">Facebook </label>
        <input type="checkbox" name="social[]" value="2">
        <label for="male">Twitter </label>
        <input type="checkbox" name="social[]" value="3">
        <label for="male">Instagram </label>
        <input type="checkbox" name="social[]" value="4">
        <label for="male">Line </label>
        <input type="checkbox" name="social[]" value="5">
        <label for="male">Tiktok </label><br>
    </div>

    <div class="form-group">
        <label>Email:</label>
        <input type="text" class="form-control"  placeholder="Enter Email" name="email" required>
    </div>

    <div class="form-group">
        <label>Password:</label>
        <input type="text" class="form-control" placeholder="Enter your password" name="password" required>
    </div>

    <div class="form-group">
        <label>Confirm Password:</label>
        <input type="text" class="form-control" placeholder="Enter to confirm password" name="con_pass" required>
    </div>


    <button type="submit" class="btn btn-primary">Register</button>
    {!! Form::close() !!}
</div>

</body>
</html>

@endsection
