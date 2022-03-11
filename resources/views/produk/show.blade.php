@extends('layouts.main')
@section('content')
   
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2></h2>
            </div>
            <div class="float-right">
                <a href="{{ route('produk.index')}}"  type="button" class="btn btn-secondary text-white mt-3">Kembali</a>
            </div>
        </div>
    </div>
        
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode : </strong>
                {{ $produk->kode}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Produk : </strong>
                {{ $produk->nama_produk}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori Produk : </strong>
                {{ $produk->kategori_produk}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Merk : </strong>
                {{ $produk->merk}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Beli : </strong>
                {{ $produk->harga_beli}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Jual : </strong>
                {{ $produk->harga_jual}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Diskon : </strong>
                {{ $produk->diskon}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok : </strong>
                {{ $produk->stok}}
            </div>
        </div>
    </div>
@endsection