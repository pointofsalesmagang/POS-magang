@extends('layouts.main')
@section('content')

<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Edit Kategori</h2>
        </div>
        <div class="float-right">
        <a href="{{route ('kategori.index')}}" type="button" class="btn btn-secondary text-white mt-3">kembali</a>  
        </div>
    </div>
</div>

<form action="{{ route('kategori.update',$kategori->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <div class="form-group">
            <strong>Nama Kategori:</strong>
            <input type="text" name="nama_kategori" value="{{ $kategori->nama_kategori}}" class="form-control">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Deskripsi:</strong>
            <textarea class="form-control" style="height:150px" name="deskripsi">{{ $kategori->deskripsi }}</textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</div>

</form>
    
@endsection