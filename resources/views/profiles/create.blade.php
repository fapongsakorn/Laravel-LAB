@extends('layouts.app')

@section('content')<!DOCTYPE html>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12">
            <h2>Profile</h2>
        </div>
    </div>
    <div class="col-md-12">
        <a href="{{ route('profiles.index') }}" class="btn btn-success">Back</a>
    </div>
        @if (session('status'))
        <div class="aler aler-success">
            {{ session('status')}}
        </div>
        @endif
        <form action="{{ route('profiles.store')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Firstname</strong>
                            <input type="text" name="firstname" class="form-control" placeholder="Firstname">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Lastname</strong>
                            <input type="text" name="lastname" class="form-control" placeholder="Lastname">
                            @error('lastname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Email</strong>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Phone</strong>
                            <input type="text" name="phone" class="form-control" placeholder="Email">
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    
                </div>
            </form>

    </div>
    @endsection