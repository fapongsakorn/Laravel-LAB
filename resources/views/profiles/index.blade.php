@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Menu</div>
                    <div class="card-body">
                        <div>
                            <a href="{{ route('profiles.create') }}" class="btn btn-success">Profile</a>
                            <a href="{{ route('home') }}" class="btn btn-success">Back</a>
                        </div> 
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
