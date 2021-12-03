@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div classs="row">
                    <div class="card-header" style="height: 70px">
                        <h2 class="float-left">Search for "{{$input}}"</h2>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered " style="table-layout: fixed;">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Building</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Tel.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datas as $data)
                                <tr>
                                    <td class="align-middle overflow-hidden">{{$data->name}}</td>
                                    <td class="align-middle overflow-hidden">{{$data->build}}</td>
                                    <td class="align-middle overflow-hidden">{{$data->depart}}</td>
                                    <td class="align-middle overflow-hidden">{{$data->tel}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a class="btn btn-primary" href="/find">Search Again</a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
