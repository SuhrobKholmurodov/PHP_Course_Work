@extends('layouts.master')

@section('title')
   Services Category | Founds
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Service Category - Add
                        <a href="{{ url('service-category')}}" class="btn float-right btn-primary">Back </a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('category-store')}}" method="POST">
                        {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <label for="">Services Cate Name</label>
                                <input type="text" name="service_name" class="form-control" placeholder="Enter Service Name">
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <label for="">Services Cate Description</label>
                                <input type="text" name="service_description" class="form-control" placeholder="Enter Service Description">
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <label for="">Services Cate Price</label>
                                <input type="text" name="service_price" class="form-control" placeholder="Enter Service Price">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-info">SAVE</button>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
