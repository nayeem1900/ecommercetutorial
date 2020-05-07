
@extends('pages.users.master')


@section('sub-content')


    <h2>Welcome{{$user->first_name.''.$user->last_name}}</h2>
    <P>You can change your profile and every information</P>
    <hr>


    <div class="row">
    <div class="col-md4">
        <div class="card card-body mt-2 pointer" onclick="location.href='{{route('user.profile')}}}'">
            <a href="{{route('user.profile')}}">Update Profile</a>

        </div>

    </div>
    </div>

@endsection