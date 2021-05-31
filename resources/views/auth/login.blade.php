@extends('layouts.app')
@section('content')

    <div class="form-content">
        <form method="POST" action="{{ route('login') }}">
                @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="email" type="text" class="form-control" placeholder="Email *" value=""/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="Your Password *" value=""/>
                    </div>
                </div>
            </div>
            <input type="submit" value="Submit">
          </form>
        </div>
    </div>
</div>
@endsection
