@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>Selamat datang di web {{ $name }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>Ini Footer</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- <html>
    <body>
        <h1>Hello, {{ $name }}</h1>
    </body>
</html> --}}