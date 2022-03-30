@extends('layouts.main')
@section('content')


<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
       <div class="float-left">
           <h2>Edit Daftar Pembelian</h2>
       </div>
       <div class="float-right">
           <a href="{{ route('pembelian.index')}}"  type="button" class="btn btn-dark text-white mt-3" >Kembali</a>
       </div>
    </div>
</div>

<form action="{{ route('pembelian.update',$pembelian->id)}}" method="POST">
   @csrf
   @method('PUT')

   <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
               <strong>Tanggal:</strong>
           <input type="date" name="tanggal" value="{{ $pembelian->tanggal }}" class="form-control">
           </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Supplier:</strong>
                <input type="text" name="supplier" value="{{ $pembelian->supplier }}" class="form-control">
            </div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Total Item:</strong>
            <input type="text" name="total_item" value="{{ $pembelian->total_item }}" class="form-control">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Total Harga:</strong>
            <input type="text" name="total_harga" value="{{ $pembelian->total_harga }}" class="form-control">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Diskon:</strong>
            <input type="text" name="diskon" value="{{ $pembelian->diskon }}" class="form-control">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Total Bayar:</strong>
            <input type="text" name="total_bayar" value="{{ $pembelian->total_bayar }}" class="form-control">
        </div>
    </div>
       <div class="col-xs-12 col-sm-12 col-md-12 text-center">
           <button type="submit" class="btn btn-primary">Update</button>
       </div>
   </div>
</form>
    
@endsection