@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <h1>Employee</h1>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="/createData" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="build">Building</label>
                            <input type="text" name="build" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="depart">Department</label>
                            <input type="text" name="depart" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tel">Tel.</label>
                            <input type="text" maxlength="10" name="tel" class="form-control">
                        </div>

                        <a href="/" class="btn btn-danger">Cancle</a>
                        <button type="submit" class="btn btn-primary float-right">Add</button>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
