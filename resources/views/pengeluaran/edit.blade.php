@extends('layouts.main')
@section('content')

    <div class="row mt-5 mb-5">
         <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Daftar Pengeluaran</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('pengeluaran.index')}}"  type="button" class="btn btn-dark text-white mt-3" >Kembali</a>
            </div>
         </div>
    </div>

    <form action="{{ route('pengeluaran.update',$pengeluaran->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal:</strong>
                <input type="date" name="tanggal" value="{{ $pengeluaran->tanggal }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi:</strong>
                    <input type="text" name="deskripsi" value="{{ $pengeluaran->deskripsi }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nominal:</strong>
                    <input type="number" name="nominal" value="{{ $pengeluaran->nominal }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>


@endsection
