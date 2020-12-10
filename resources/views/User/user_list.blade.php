@extends('home.index')
@section('content')
    <br>
<div class="container">
    <div class="table-responsive table-striped">
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Social</th>
            <th>Profile</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $key => $value)

            <?php

            $data=[];
            $data_=[];

            $birthDate = $value->date_of_birth ;
            $birthDate_ = explode("-", $birthDate);
            $age = (date("Y")) - $birthDate_[0];


            $social = $value->social ;
            $asocial = explode("-", $social);

            ?>
            <tr>

                <td>{!! $key+1 !!}</td>
                <td>{!! $value->firstname ." ". $value->lastname !!}</td>
                <td>{!! $age!!}</td>
                <td>{!! $value->email !!}</td>
                <td>{!! ($value->sex == '1' )?'Male':'Female'!!}</td>
                <td>
                    <?php
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

                </td>
                <td><img src="{!! asset($value->img) !!}" alt="" width="50"></td>
                <td>
                    <a href="{!! url('user_detail/'.$value->id) !!}" class="button">View</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection
