@extends('layouts.app')
@section('content')



<div class="container">
    @foreach($data as $row)

    <div class="card text-bg-light">
        <div class="card-img-overlay">
        <div class="container">
      </div>

      <div class="card-group">
        
  <div class="card">
    <img src="https://img.freepik.com/free-vector/realistic-smartphone-device_52683-29765.jpg?size=626&ext=jpg&ga=GA1.2.786323150.1704839530&semt=ais" class="card-img-top" alt="">
    <div class="card-body">
      <h1 class="card-title text-center ">Iphone13</h1>
      <p class="card-text text-center">Apple iPhone 13 Plus (256 GB) - purple</p>
      <p class="card-text "><h3 class="text-body-secondary text-center">3500$ </h3> </p>
      <div class=" text-center">
      <a href="{{route('addtocart',['id'=>$row->id]) }}" class="btn btn-secondary  ">Add To Cart</a>
     

    </div></div>
  </div>


  <div class="card">
    <img src="https://img.freepik.com/free-photo/smartphone-balancing-with-pink-background_23-2150271746.jpg?size=626&ext=jpg&ga=GA1.2.786323150.1704839530&semt=ais" class="card-img-top" alt="">
    <div class="card-body">
      <h1 class="card-title text-center">Iphone14</h1>
      <p class="card-text text-center" >Apple iPhone 14 Plus (256 GB) -black </p>
      <p class="card-text"><h3 class="text-body-secondary text-center">4500$</h3></p>
      <div class=" text-center">
      <a href="{{route('addtocart',['id'=>$row->id]) }}" class="btn btn-secondary">Add To Cart</a>
      
         
    
</div>
     
    </div>
  </div>

  
  <div class="card">
    <img src="https://img.freepik.com/free-photo/tech-device-with-nature-background_23-2150470431.jpg?size=626&ext=jpg&ga=GA1.2.786323150.1704839530&semt=aisclass="class="card-img-top" alt="">
    <div class="card-body">
    <h1 class="card-title  text-center">Iphone15</h1>
      <p class="card-text  text-center">Apple iPhone 15 Plus (500 GB) -blue </p>
      <p class="card-text"><h3 class="text-body-secondary  text-center"> 6000$ </h3></p>
      <div class=" text-center">
      <a href="{{route('addtocart',['id'=>$row->id]) }}" class="btn btn-secondary">Add To Cart</a>
   
  </div>

</div>
</div>

  </div>
</div>
@endforeach
</div>


@endsection