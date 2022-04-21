@extends('layouts.main')

@section('content')
<style>
.container {
  height: 50px;
  position: relative;
}

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>
    <div class="card">
  <div class="card-header">
           <h3 class="text-center">Blue Mart</h3>
  </div>
  <div class="card-body">
    {{-- <h5 class="card-title text-center">Selamat Datang Di Blue - Mart</h5> --}}
    <h4 class="card-text text-center">You are Sign in as : {{Auth::user()->name}}</h4>
    <h4 class="card-text text-center">your email is : {{Auth::user()->email}}</h4>
   <div class="container">
  <div class="center">
    <button> <a href="{{route('transaksi.baru')}} " class="btn btn-primary">Mari Mulai Bekerja</a> </button>
  </div>
</div>

    {{-- <a href="{{route('transaksi.baru')}}" class=" card-text btn btn-primary text-center"> Mari Mulai Bekerja</a> --}}
  </div>
</div>
@endsection
