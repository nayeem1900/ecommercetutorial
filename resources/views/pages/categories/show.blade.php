
@extends('layouts.master')
@section('content')
    <div class="container margintop20">

        <div class="row">
            <div class="col-md-4">

                @include('layouts.partial.product-sidebar')
            </div>
            <div class="col-md-8">
                <div class="widget">
                    <h3>AL Products in <span class="badge badge-info">{{$category->name}}</span>Category</h3>
                    @php $products=$category->products()->paginate(3);
                    @endphp
                    @include('pages.product.partial.all_product')
                </div>

                <div class="widget">

                </div>
            </div>

        </div>

    </div>


@endsection

