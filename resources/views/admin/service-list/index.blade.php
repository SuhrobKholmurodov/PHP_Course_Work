@extends('layouts.master')

@section('title')
    Service Category - List | Founds
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Service Category - List
                        <a href="" class="btn float-right btn-primary">Add </a>
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
                        <tr>
                            <td>1</td>
                            <td>suhrob</td>
                            <td>hello</td>
                            <td>size</td>
                            <td>
                                <a class="btn btn-info">Edit</a>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                 </table>     
                </div>
            </div>
    </div>
</div>

@endsection
