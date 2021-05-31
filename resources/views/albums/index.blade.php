@extends('layouts.app')
@section('content')
<div class="row ">

    @foreach($albums as $album)
      <div class="col-sm-4 my-1">
        <div class="card">
          <div class="card-body @if ($album->colour == "Yellow") bg-warning @endif">
            <h5 class="card-title">{{$album->name}} @for ($i = 0; $i < $album->ratings; $i++) * @endfor</h5>
            <p class="card-text">Number Of Songs: {{ $album->trackCount}}</p>
            <p class="card-text">{{ $album->artistName}}</p>


            <form action="/albums/{{$album->id}}" method="POST">
              @method('DELETE')
              @csrf

              <a class="btn btn-primary mx-1 " href="/albums/{{$album->id}}">Show</a>
               @auth
              <a class="btn btn-success mx-1" href="/albums/{{$album->id}}/edit">Edit</a>
              <button type="submit" title="delete" class="btn btn-danger mx-1" >Delete</button>
               @endauth
            </form>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
