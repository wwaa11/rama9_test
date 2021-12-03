@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div classs="row">
                    <div class="card-header" style="height: 70px">
                        <h2 class="float-left">Employee</h2>
                        <a href="/createData"> <button class="btn btn-success float-right">New Employee</button></a>
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
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datas as $data)
                                <tr>
                                    <td class="align-middle overflow-hidden">{{$data->name}}</td>
                                    <td class="align-middle overflow-hidden">{{$data->build}}</td>
                                    <td class="align-middle overflow-hidden">{{$data->depart}}</td>
                                    <td class="align-middle overflow-hidden">{{$data->tel}}</td>
                                    <td class="align-middle text-center">
                                        <a href="createData/{{$data->id}}/edit" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td class="align-middle text-center">
                                        <form action="createData/{{$data->id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
