@extends('layouts.main')
@section('content')
    
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Tambah Produk</h2>
        </div>
        <div class="float-right">
            <a href="{{ route('produk.index')}}"  type="button" class="btn btn-dark" text-white mt-3>Kembali</a>
        </div>
    </div>
</div>


<form action="{{ route('produk.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Produk:</strong>
                <input type="text" name="nama_produk" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
           <label for="id_kategori">Kategori</label>
                    <select class="form-control" name="id_kategori" id="id_kategori">
                        <option value="">-- Pilih --</option>
                        @foreach ($kategori as $key => $item)
                        <option value="{{ $key }}"> {{ $item }}</option>
                        @endforeach
                    </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Merk:</strong>
                <input type="text" name="merk" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Beli:</strong>
                <input type="number" id="dengan-rupiah" name="harga_beli" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Jual:</strong>
                <input type="number" id="dengan-rupiah" name="harga_jual" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Diskon:</strong>
                <input type="number" name="diskon" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok:</strong>
                <input type="number" name="stok" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Tambahkan</button>
        </div>
    </div>
</form>
@endsection