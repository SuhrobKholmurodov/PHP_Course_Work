@extends('layouts.master')

@section('title')
   Dashboard | founds
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Etelier Fashion Report</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>Name</th>
                            <th>Location</th>
                            <th>Revenue</th>
                            <th class="text-right">Employees</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Etelier Fashion</td>
                                <td>Tajikistan</td>
                                <td>$ 3730</td>
                                <td class="text-right">3</td>
                            </tr>
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
