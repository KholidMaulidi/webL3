@extends('layouts.master')
@section('drink')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1> <center>Drink Product</center></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-4 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Milk Shake</h5>
          <p class="card-text">With cococrunch topping</p>
          <a href="#" class="btn btn-primary">Buy</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Hazelnut</h5>
          <p class="card-text">Less Sugar</p>
          <a href="#" class="btn btn-primary">Buy</a>
        </div>
      </div>
    </div>
  </div>

@endsection
