@extends('layouts.app')
@section('content')

<?php $c = 0; ?>

<div class="container">
    <h1 class="alert alert-dark text-center">Smart Phones</h1>

    @while($c < $count)

    <div class="row text-center d-flex align-items-center justify-content-center mt-2">
        <div class="col-sm-4 text-center">
        <a href="{{route('showproduct',['id'=>$data[$c]->id])}}">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-dark">{{$data[$c]->itemgroupsname}}</h1>
                    <h1><i class="bi bi-phone"></i></h2>
                </div>
            </div>
            <?php $c++;?>
        </a>
        </div>
        @if($c < $count)
        <div class="col-sm-4 text-center">
        <a href="{{route(' electronicdevices',['id'=>$data[$c]->id])}}">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-dark">{{$data[$c]->itemgroupsname}}</h1>
                    <h1><i class="bi bi-archive"></i></h1>
                </div>
            </div>
            <?php $c++;?>
        </a>
        </div>
       
        @endif

        @if($c < $count)
        <div class="col-sm-4 text-center">
        <a href="{{route(' electronicdevices',['id'=>$data[$c]->id])}}">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-dark">{{$data[$c]->itemgroupsname}}</h1>
                    <h1><i class="bi bi-archive"></i></h1>
                </div>
            </div>
            <?php $c++;?>
        </a>
        </div>
      
        @endif
        
    </div>

    @endwhile
</div>

@endsection