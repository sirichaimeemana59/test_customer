@extends('home.index')
@section('content')
    <br>

    <div class="form-group row">
        <lable class="col-sm-2 control-label">Profile </lable>
        <div class="col-sm-4">
            <img src="{!! asset($user->img) !!}" alt="" width="100">
        </div>
    </div>

    <div class="container">
        <div class="form-group row">
            <lable class="col-sm-2 control-label">Firstname : </lable>
            <div class="col-sm-4">
                {!! $user->firstname !!}
            </div>
        </div>

        <div class="form-group row">
            <lable class="col-sm-2 control-label">Lastname : </lable>
            <div class="col-sm-4">
                {!! $user->lastname !!}
            </div>
        </div>

        <div class="form-group row">
            <lable class="col-sm-2 control-label">Date of Birth : </lable>
            <div class="col-sm-4">
                {!! $user->date_of_birth !!}
            </div>
        </div>

        <div class="form-group row">
            <lable class="col-sm-2 control-label">Gender : </lable>
            <div class="col-sm-4">
                {!! ($user->sex == '1' )?'Male':'Female'!!}
            </div>
        </div>

        <div class="form-group row">
            <lable class="col-sm-2 control-label">Social : </lable>
            <div class="col-sm-4">
                <?php
                $social = $user->social ;
                $asocial = explode("-", $social);
                for ($i=0 ; $i < count($asocial); $i++){
                    if($asocial[$i] == '1'){
                        $social_ = 'Facebook';
                    }elseif($asocial[$i] == '2'){
                        $social_ = 'Twitter';
                    }elseif($asocial[$i] == '3'){
                        $social_ = 'Instagram';
                    }elseif($asocial[$i] == '4'){
                        $social_ = 'Line';
                    }else{
                        $social_ = 'Tiktok';
                    }
                    echo $social_.",";
                }
                ?>
            </div>
        </div>
    </div>
@endsection
