@extends('layouts.master')

@section('title')
   Registered | Found of wed It
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Registered Roles</h4>
                @if(session('status'))
                <div class="alert alert-succes" role="alert">
                  {{session('status')}}
               </div>
              @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>UserType</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->name }}</td>
                                <td>{{$row->phone }}</td>
                                <td>{{$row->email }}</td>
                                <td>{{$row->userType ?? '-'}}</td>
                                <td>
                                    <a href="/role-edit/{{ $row->id }}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <form action="/role-delete/{{$row->id}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger">Delete</button>
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
@endsection

@section('scripts')

@endsection
