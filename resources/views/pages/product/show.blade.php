
@extends('layouts.master')
@section('title')
    {{$product->title}} | ecomerce
    @endsection

@section('content')
    <div class="container margintop20">

        <div class="row">
            <div class="col-md-4">

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @php $i=1;
                        @endphp
                        @foreach($product->images as $image)
                        <div class=" product-item carousel-item {{$i==1? 'active': ''}}">
                            <img src="{!! asset('images/products/' .$image->image) !!}" class="d-block w-100" alt="...">
                        </div>

                            @php $i++;
                            @endphp
                        @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="">
                    <p>Category<span class="badge badge-info">{{$product->category->name}}</span> </p>
                   <p>Brand<span class="badge badge-info">{{$product->category->name}}</span></p>


                </div>

            </div>
            <div class="col-md-8">
                <div class="widget">
                    <h3>{{$product->title}} in <mark>{{$product->category->name}}</mark></h3>
                    <h3>{{$product->price}} Taka</h3>
                    <span class="badge badge-primary">

                        {{$product->quantity<1?'No Item is Available' :$product->quantity. 'item in stock'}}
                    </span>

                    <hr>
                    <div class="product-description">
                        {!! $product->description !!}
                    </div>

                </div>

                <div class="widget">

                </div>
            </div>

        </div>

    </div>


@endsection

