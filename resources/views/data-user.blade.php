@extends('layouts.app')
@section('title','Data-User')

@section('content')

<div class="row">
    <div class="col-10">
        <div class="card">
            <div class="card-header">
            Data User
            </div>
            <div class="card-body">
                <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Dibuat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            {{-- insert database to table --}}
                            @foreach ($users as $key => $user)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>

@endsection