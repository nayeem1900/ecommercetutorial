
@extends('layouts.master')
@section('content')
    <div class="container margintop20">

        <div class="row">
            <div class="col-md-4">
                @include('layouts.partial.product-sidebar')
            </div>
            <div class="col-md-8">


                    <h3>All Products</h3>
                    @include('pages.product.partial.all_product')





            </div>

        </div>

    </div>


@endsection

