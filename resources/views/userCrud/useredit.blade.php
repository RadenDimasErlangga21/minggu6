@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('USER DATA') }} {{ $User->id }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="/userCrud/{{$User->id}}" method="post">
                        {{csrf_field()}}
                        @method('PUT')
                        <input type="hidden" name="id" value="{{$User->id}}"></br>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" required="required" name="username" value="{{$User->username}}"></br>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" required="required" name="name" value="{{$User->name}}"></br>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" required="required" name="email" value="{{$User->email}}"></br>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" required="required" name="password" value="{{$User->password}}"></br>
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection