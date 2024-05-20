@extends('layouts.master')

@section('title')
   Services Category | Founds
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Service Category
                        <a href="{{ url('service-create')}}" class="btn float-right btn-primary">Add </a>
                    </h4>
                </div>
                <div class="card-body">
                 <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $items)
                        <tr>
                            <td>{{$items -> id}}</td>
                            <td>{{$items -> service_name}}</td>
                            <td>{{$items -> service_description}}</td>
                            <td>{{$items -> service_price}}</td>
                            <td>
                                <a href="{{ url('service-cate-edit/'.$items->id)}}" class="btn btn-info">Edit</a>
                            </td>
                            <td>
                                  <form action="/service-delete/{{$items -> id}}" method="post">
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

@endsection
