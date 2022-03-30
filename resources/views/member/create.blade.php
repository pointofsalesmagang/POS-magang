@extends('layouts.main')
@section('content')
    
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left mb-4">
            <h2>Tambah Member</h2>
        </div>
        <div class="float-right">
            <a href="{{route('member.index')}}"  type="button" class="btn btn-dark" text-white mt-3>Kembali</a>
        </div>
    </div>
</div>


<form action="{{ route('member.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode:</strong>
                <input type="number" name="kode" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Member:</strong>
                <input type="text" name="nama_member" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                <input type="text" name="alamat" class="form-control">
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No.Telpon:</strong>
                <input type="number" name="notelp" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Tambahkan</button>
        </div>
    </div>
</form>
@endsection