@extends('layouts.master')

@section('title')
   Services Category Edit | Founds
@endsection

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Service Category - Edit
                        <a href="{{ url('service-category')}}" class="btn float-right btn-primary">Back </a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('category-update/'.$service_category->id)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <label for="">Services Cate Name</label>
                                <input type="text" name="service_name" class="form-control" value="{{$service_category->service_name}}">
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <label for="">Services Cate Description</label>
                                <input type="text" name="service_description" class="form-control" value="{{$service_category->service_description}}">
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <label for="">Services Cate Price</label>
                                <input type="text" name="service_price" class="form-control" value="{{$service_category->service_price}}">
                            </div>
                        </div>
                        <div class="col-md-12"> 
                            <button type="submit" class="btn btn-info">Update Data</button>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection()