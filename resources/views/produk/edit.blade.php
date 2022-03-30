@extends('layouts.main')
@section('content')

    <div class="row mt-5 mb-5">
         <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Produk</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('produk.index')}}"  type="button" class="btn btn-dark text-white mt-3" >Kembali</a>
            </div>
         </div>
    </div>

    <form action="{{ route('produk.update',$produk->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode:</strong>
                <input type="number" name="kode" value="{{ $produk->kode }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Produk:</strong>
                    <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kategori Produk:</strong>
                    <input type="text" name="kategori_produk" value="{{ $produk->kategori_produk }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Merk:</strong>
                    <input type="text" name="merk" value="{{ $produk->merk }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga Beli:</strong>
                    <input type="text" id="dengan-rupiah" name="harga_beli" value="{{ $produk->harga_beli }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga Jual:</strong>
                    <input type="text" id="dengan-rupiah" name="harga_jual" value="{{ $produk->harga_jual }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Diskon:</strong>
                    <input type="number" name="diskon" value="{{ $produk->diskon }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stok:</strong>
                    <input type="number" name="stok" value="{{ $produk->stok }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>


@endsection
