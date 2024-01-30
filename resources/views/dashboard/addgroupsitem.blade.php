@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row text-center">
        <div class="col-sm-12 ">
            <h1 class="alert alert-light text-center">Add a group of items</h1>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('save')}}" method="post">
                        @csrf
                        <label for="itemgrname">Group Name</label>

                        <input type="text" name="itemgroupsname" id="itemgrname">
                          <div class="row mt-3 p-3">
                            <div class="col ">
                                <button class="btn btn-primary " type="submit">Save</button>
                            </div>
                          </div>
                       
                    </form>
                </div>
            </div>
           
           
           
            <div class="card mt-3">
                <div class="card-body">
                   <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Group Number</th>
                            <th>Group Name</th>
                            <th colspan="2">Action</tr>
                        </tr>
                    </thead>
            
                    <tbody>
                        @foreach($data as $row)
                          
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->itemgroupsname}}</td>
                            <td><a href="{{ route('del',['x'=>$row->id])}}"><i class="fa-solid fa-trash text-danger"></i></a> </td>
                            <td><a href="{{route('edit',['x'=>$row->id])}}"><i class="fa-regular fa-pen-to-square text-success"></i></a></td>
                        </tr>
            
                        @endforeach
                   </table>
                </div>
              </div>
            
        </div>
    </div>
</div>
@endsection