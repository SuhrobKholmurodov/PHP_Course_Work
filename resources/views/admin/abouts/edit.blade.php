@extends('layouts.master')

@section('title')
   About Us Edit | Founds
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h4 class="title">About Us Edit</h4>

                    <form action="{{url('aboutus-update/'.$aboutus->id)}}" method="POST">
                     {{ csrf_field() }}
                     {{ method_field('PUT') }}
                 <div class="modal-body">
          <div class="form-group">
            <label for="inputField" class="col-form-label">Title:</label>
            <input type="text" name="title" class="form-control" value="{{$aboutus->title}}" placeholder="Enter text">
          </div>
          <div class="form-group">
            <label for="inputField" class="col-form-label">Sub-Title:</label>
            <input type="text" name="subtitle" class="form-control" value="{{$aboutus->subtitle}}" placeholder="Enter text">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description</label>
            <input type="text" name="description" class="form-control" value="{{$aboutus->description}}" placeholder="Enter text">
          </div>
             </div>
          <div class="modal-footer">
        <a href="{{url('abouts')}}" class="btn btn-secondary">Back</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection