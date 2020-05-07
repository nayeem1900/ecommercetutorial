
@extends('pages.users.master')


@section('sub-content')

<div class="container">

    <div class="card-body mb-5">
        <form method="POST" action="{{ route('user.profile.update') }}">
            @csrf

            <div class="form-group row">
                <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First_Name') }}</label>

                <div class="col-md-6">
                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $user->first_name }}" required autocomplete="first_name" autofocus>

                    @error('first_name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                <div class="col-md-6">
                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $user->last_name }}" required autocomplete="last_name" autofocus>

                    @error('last_name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>

                <div class="col-md-6">
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required autocomplete="username" autofocus>

                    @error('username')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>





            <div class="form-group row">
                <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Mobile_no') }}</label>

                <div class="col-md-6">
                    <input id="mobile_no" type="text" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" value="{{ $user->mobile_no }}" required autocomplete="mobile_no">

                    @error('mobile_no')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>




            <div class="form-group row">
                <label for="division_id" class="col-md-4 col-form-label text-md-right">{{ __('Division') }}</label>

                <div class="col-md-6">

                    <select class="form-control" name="division_id">

                        <option value="">Please select YOur Division</option>
                        @foreach($divisions as $division)
                            <option value="{{$division->id}}" {{$user->division_id==$division->id?'selected': ''}}>{{$division->name}}</option>
                        @endforeach

                    </select>

                </div>
            </div>



            <div class="form-group row">
                <label for="district_id" class="col-md-4 col-form-label text-md-right">{{ __('District') }}</label>

                <div class="col-md-6">

                    <select class="form-control" name="district_id">

                        <option value="">Please select YOur District</option>
                        @foreach($districts as $district)
                            <option value="{{$district->id}}"{{$user->district_id==$district->id?'selected': ''}}>{{$district->name}}</option>
                        @endforeach

                    </select>


                </div>
            </div>






            <div class="form-group row">
                <label for="street_address" class="col-md-4 col-form-label text-md-right">{{ __('Street_Address') }}</label>

                <div class="col-md-6">
                    <input id="street_address" type="text" class="form-control @error('street_address') is-invalid @enderror" name="street_address" value="{{ $user->street_address }}" required autocomplete="street_address">

                    @error('street_address')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label for="shiping_address" class="col-md-4 col-form-label text-md-right">{{ __('Shiping Address(Optional)') }}</label>

                <div class="col-md-6">
                    <textarea id="shiping_address"  class="form-control @error('shiping_address') is-invalid @enderror" rows="4" name="shiping_address" value="">{{ $user->shiping_address }}</textarea>

                    @error('shiping_address')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>






            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password(Optional)') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>



            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update Profile') }}
                    </button>
                </div>
            </div>
        </form>
    </div>



</div>

@endsection