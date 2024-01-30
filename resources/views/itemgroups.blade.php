@extends('layouts.app')

@section('content')

<div class="container">


  <div class="card">
    <div class="card-body">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-4">
                <form action="{{route('save')}}" method="post">
                    @csrf
                    <label for="itemgroupsname " class="p-1">Enter the Group Name</label>
                    <input type="text " class="form-control form-control-sm " name="itemgroupsname" id="itemgroupsname">
                    <div class="row">
    
                    <div class="text-center">
                    <button class="btn btn-success m-2" type="submit" onclick="showmessage()">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>

  <div class="card m-3">
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



<script >
    function showmessage()
    {
        Swal.fire({
  position: "top-end",
  icon: "success",
  title:"Saved successfully" ,
  showConfirmButton: false,
  timer: 1500
});

    }
    
</script>


@endsection