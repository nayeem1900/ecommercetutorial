@extends('layouts.master')


@section('content')
    <div class="container margintop-20">

        <div class="card card-body">

            <P>Confirm Items</P>
            <hr>
            <div class="row">
                <div class="col-md-7 border-right">

                    @foreach (App\Cart::totalCarts() as $cart)

                        <p>{{$cart->product->title}} - <strong>{{$cart->product->price}} taka</strong>
                            - {{$cart->product_quantity}} item
                        </p>

                    @endforeach

                </div>
                <div class="col-5">

                @php
                $total_price=0;
                @endphp
                    @foreach (App\Cart::totalCarts() as $cart)
                    @php
                        $total_price += $cart->product->price * $cart->product_quantity;

                        @endphp

                    @endforeach
                    <p>Total Price :<strong>{{$total_price}}</strong>Taka</p>
                    <p>Total Price with Shiping Cost :<strong>{{$total_price + App\Setting::first()->shiping_cost}}</strong>Taka</p>
                </div>

            </div>

            <p>
                <a href="{{route('carts')}}">Change Carts Items</a>
            </p>

        </div>


        <div class="card card-body mt-2 mb-4">
            <h2>Shiping Address</h2>

            <form method="POST" action="{{ route('checkouts.store') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Receiver Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::check()? Auth::user()->first_name.'.Auth::user()->last_name' :'' }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row">
                    <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Mobile_no') }}</label>

                    <div class="col-md-6">
                        <input id="mobile_no" type="text" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" value="{{ Auth::check()? Auth::user()->mobile_no :'' }}" required autocomplete="mobile_no">

                        @error('mobile_no')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="shiping_address" class="col-md-4 col-form-label text-md-right">{{ __('Shiping Address*') }}</label>

                    <div class="col-md-6">
                        <textarea id="shiping_address"  class="form-control @error('shiping_address') is-invalid @enderror" rows="4" name="shiping_address" value="">{{ Auth::check()? Auth::user()->shiping_address :'' }}</textarea>

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
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::check()? Auth::user()->email :'' }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="payment_method" class="col-md-4 col-form-label text-md-right ">select a payment method{{ __('Payment Method') }}</label>

                    <div class="col-md-6">
                        <div class="hidden">


                        </div>


                        <select class="form-control"name="payment_method_id" id="payments" required>
                            <option value="">Select a payment method please</option>
                            @foreach($payments as $payment)
                                <option value="{{$payment->short_name}}">{{$payment->name}}</option>

                            @endforeach

                        </select>
                        @foreach($payments as $payment)

                            <div id="payment-{{$payment->short_name}}" class="hidden">

                                 @if($payment->short_name=="cash in")
                                   <div>
                                       <h3>For Cash in There is nothing necesssary. Just Finished order</h3>
                                       <br>
                                       <small>You will get your product next 2 or 3 business days</small>
                                   </div>
                                     @else
                                    <div id="payment-{{$payment->short_name}}" class="hidden">

                                        <h3>{{$payment->name}}Payment</h3>
                                        <p>
                                            <strong>{{$payment->name}}No{{$payment->no}}</strong>
                                            <br>
                                           <strong> Account Type:{{$payment->type}}</strong>
                                        </p>
                                        <div class="alert alert-success">
                                            Please send money Bikash number and write your transcation code
                                        </div>
                                        <input type="text" name="transcation_id" class="form-control">
                                    </div>

                                     @endif

                            </div>

                            @endforeach

                    </div>
                </div>


                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Order Now') }}
                        </button>
                    </div>
                </div>
            </form>


        </div>

    </div>


@endsection

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    ("#payments").change(function () {
        window.alert('hi');
    })
</script>