
@extends('layouts.master')
@section('content')
    <div class="container margintop20">

        <div class="row">
            <div class="col-md-4">
                @include('layouts.partial.product-sidebar')
            </div>
            <div class="col-md-8">
                <div class="widget">
                    <h3>Featured Products</h3>
                    <div class="row">
                        <div class="col-md-3">

                            <div class="card" style="">
                                <img class="card-img-top feature-img" src="{{asset('images/products/1.jpg')}}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Samsung</h4>
                                    <p class="card-text">price:5000TK</p>
                                    <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">

                            <div class="card" style="">
                                <img class="card-img-top feature-img" src="{{asset('images/products/1.jpg')}}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Samsung</h4>
                                    <p class="card-text">price:5000TK</p>
                                    <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">

                            <div class="card" style="">
                                <img class="card-img-top feature-img" src="{{asset('images/products/1.jpg')}}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Samsung</h4>
                                    <p class="card-text">price:5000TK</p>
                                    <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">

                            <div class="card" style="">
                                <img class="card-img-top feature-img" src="{{asset('images/products/1.jpg')}}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Samsung</h4>
                                    <p class="card-text">price:5000TK</p>
                                    <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">

                            <div class="card" style="">
                                <img class="card-img-top feature-img" src="{{asset('images/products/1.jpg')}}" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Samsung</h4>
                                    <p class="card-text">price:5000TK</p>
                                    <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>

                <div class="widget">

                </div>
            </div>

        </div>

    </div>


@endsection

