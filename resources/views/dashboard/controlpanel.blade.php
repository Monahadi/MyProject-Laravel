@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="alert alert-success text-center">Categories data</h1>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Item number</th>
                                <th>Item name</th>
                                <th>Group name</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Color</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if($data!=null)
                         
                        @foreach($data as $row)
                        
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->itemname}}</td>
                            <td>{{$row->itemgroupsname}}</td>
                            <td>{{$row->price}}</td>
                            <td>{{$row->qty}}</td>
                            <td>{{$row->price}}</td>
                        </tr>
                          
                        @endforeach
            
            
            
                       @endif
            
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection