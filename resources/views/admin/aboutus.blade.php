@extends('layouts.master')

@section('title')
   About Us | Founds
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">About Us
                    <!-- Button of the modal -->
                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">Add</button>
                </h4>
            </div>
            <style>
                .w-10px
                {
                    width: 10% !important;
                }
            </style>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th class="w-10px">ID</th>
                            <th class="w-10px">Title</th>
                            <th class="w-10px">Sub-Title</th>
                            <th class="w-10px">Description</th>
                            <th class="w-10px">EDIT</th>
                            <th class="w-10px">DELETE</th>
                        </thead>
                        <tbody>
                            @foreach ($aboutus as $data)
                            <tr>
                                <td>{{$data -> id}}</td>
                                <td>{{$data -> title}}</td>
                                <td>{{$data -> subtitle}}</td>
                                <div style="heiht:80px, overflow: hidden">
                                    <td>{{$data -> description}}</td>
                                </div>
                                <td>
                                    <a href="{{url('about-us/'.$data->id)}}" class="btn btn-success">EDIT</a>
                                </td>
                                <td>
                                  <form action="{{url('about-us-delete/'.$data->id)}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button href="#" type="submit" class="btn btn-danger">DELETE</button>
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

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add About Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="/save-aboutus" method="POST">
        {{csrf_field()}}
      <div class="modal-body">
          <div class="form-group">
            <label for="inputField" class="col-form-label">Title:</label>
            <input type="text" name="title" class="form-control" id="inputField" placeholder="Enter text">
          </div>
          <div class="form-group">
            <label for="inputField" class="col-form-label">Sub-Title:</label>
            <input type="text" name="subtitle" class="form-control" id="inputField" placeholder="Enter text">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description</label>
            <input type="text" name="description" class="form-control" id="inputField" placeholder="Enter text">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection

@section('scripts')

@endsection
