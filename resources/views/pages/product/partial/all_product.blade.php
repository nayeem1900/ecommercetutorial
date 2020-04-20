<div class="row">
    @foreach($products as $product)
        <div class="col-md-3">

            <div class="card" style="">

                {{-- <img class="card-img-top feature-img" src="{{asset('images/products/1.jpg')}}" alt="Card image">--}}

                @php $i=1; @endphp
                @foreach($product-> images as $image)
                    @if ($i>0)
                        <a href="{!! route('show',$product->slug) !!}">
                        <img class="card-img-top feature-img" src="{{asset('images/products/' .$image->image)}}"   alt="{{$product->title}}">
                        </a>
                    @endif
                    @php $i--;@endphp
                @endforeach

                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{!! route('show',$product->slug) !!}">{{$product->title}}</a> </h4>

                    <p class="card-text">{{$product->price}}</p>
                    <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                </div>
            </div>
        </div>

    @endforeach


</div>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        {{$products->links()}}
    </ul>
</nav>