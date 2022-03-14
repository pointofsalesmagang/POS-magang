@extends('layouts.main')
@section('content')
    
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left mb-4">
            <h2>Tambah Supplier</h2>
        </div>
        <div class="float-right">
            <a href="{{route('supplier.index')}}"  type="button" class="btn btn-dark" text-white mt-3>Kembali</a>
        </div>
    </div>
</div>


<form action="{{route('supplier.store')}}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telepon:</strong>
                <input type="number" name="telepon" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                <input type="text" name="alamat" class="form-control">
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-dark">Tambahkan</button>
        </div>
    </div>
</form>
@endsection