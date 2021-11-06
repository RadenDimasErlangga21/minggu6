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

                    <form action="/students" method="post" enctype="multipart/form-data"> 
                        @csrf
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" required="required" name="nim"></br>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" required="required" name="name"></br>
                        </div>

                        <div class="form-group">
                            <label for="Kelas">Class</label>
                            <select class="form-control" name="Kelas">
                            @foreach($kelas as $class)
                            <option value="{{$class->id}}">
                                {{ $class->class_name }}
                            </option>
                            @endforeach
                            </select></br>
                        </div>
                        
                        <div class="form-group">
                            <label for="department">Department</label>
                            <input type="text" class="form-control" required="required" name="department"></br>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" required="required" name="phone_number"></br>
                        </div>

                        <div class="form-group">
                            <label for="photo">Profile Photo</label>
                            <input type="file" class="form-control" required="required" name="photo"></br>
                        <div>

                        <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection