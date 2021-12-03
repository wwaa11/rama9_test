@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="/find/show" method="GET">
                        <div class="col-md">
                            <h3>Search Employees</h3>
                            <div class="form-group">
                                <input type="text" name="input">
                            </div>
                            <input class="btn btn-primary" type="submit" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
