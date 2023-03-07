@extends('layouts.master')

@section('food')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1> <center>Food Product</center></h1>
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
          <h5 class="card-title">Pizza</h5>
          <p class="card-text">Extra cheese and truffle</p>
          <a href="#" class="btn btn-primary">Buy</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Hamburger</h5>
          <p class="card-text">Bread with extra cheese, sauce and meat</p>
          <a href="#" class="btn btn-primary">Buy</a>
        </div>
      </div>
    </div>
  </div>

@endsection