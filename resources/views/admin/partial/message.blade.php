<!-- /resources/views/post/create.blade.php -->



@if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Post Form -->

<!-- delete Session -->

@if(Session::has('success'))

    <div class="alert alert-success">

        <p> {{Session::get('success')}}</p>
    </div>

    @endif
