@extends('layouts.app')
@section('content')

    <div class="form-content">
    <form method="POST" action="/albums">
            @csrf

            <div class="row">
              <div class="form-group col-6">
                <label for="albumname">Album Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$album->name}}">
              </div>

              <div class="form-group col-6">
                <label for="trackcount">Track Count</label>
                <input type="text" class="form-control @error('trackCount') is-invalid @enderror" id="trackCount" name="trackCount" value="{{$album->trackCount}}">
              </div>
            </div>

            <div class="row">
              <label for="artistname">artistName</label>
                <input type="text" class="form-control @error('artistName') is-invalid @enderror" id="artistName" name="artistName" value="{{$album->artistName}}">
            </div>
            <div class="row">
              <label for="description">Description</label>
              <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="10">{{$album->description}}</textarea>
            </div>
            <br>
        <input class="btn btn-primary" type="submit" value="Submit">
        <a class="btn btn-warning mx-1" href="/posts/">Cancel</a>
    </form>
  </div>

@endsection
