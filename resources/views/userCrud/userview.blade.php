@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('STUDENT DATA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="/userCrud/{{$User->id}}" method="post">
                        {{csrf_field()}}
                        @method('PUT')

                        <table class="table table-responsive">
                        <tr><th>ID</th><th>:</th><td>{{ $User->id}}</td></tr>
                        <tr><th>User Name</th><th>:</th><td>{{$User->username}}</td></tr>
                        <tr><th>Name</th><th>:</th><td>{{$User->name}}</td></tr>
                        <tr><th>Email</th><th>:</th><td>{{$User->email}}</td></tr>
                        </table>

                        <a href="/userCrud" class="btn btn-warning">back to USER CRUD</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection