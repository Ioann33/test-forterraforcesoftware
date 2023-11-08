@extends('layouts.app')
@section('content')
    <div class="main conttent">
        @if(isset($lots))
            @foreach($lots as $lot)
                <a class="card lot" style="width: 18rem;" href="{{ route('lots.show',$lot->id) }}">
                    <img src="https://zt-lis.gov.ua/uploads/pics/eef0015ce45c959b99924c4c64dc0a9a_original.230643_04.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">{{$lot->name}}</h5>
                        <p class="card-text">{{ $lot->description }}</p>
                    </div>
                </a>
            @endforeach
        @endif
    </div>
    <div class="lsb">
        <div class="button">
            <a type="button" class="btn btn-primary mt-1" href="{{route('categories.index')}}">Категорії</a>
            <a type="button" class="btn btn-warning mt-1" href="{{ route('lots.create') }}">Додати лот</a>
        </div>
    </div>
@endsection
