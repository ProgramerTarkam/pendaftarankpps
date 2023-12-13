@if ($errors->any())

<div class="alert alert-danger absolute">
    @foreach ($errors->all() as $item)

    <li>{{$item}}</li>

    @endforeach

</div>
    
@endif


@if (Session::get('success'))

    <div class="alert alert-warning alert-dismissible fade my-3 show absolute" role="alert">
        <strong>Terima Kasih !!!</strong> {{Session::get('success')}}
        </button>
    </div>

@endif