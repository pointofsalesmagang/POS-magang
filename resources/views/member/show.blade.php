@extends('layouts.main')
@section('content')
   
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left mb-4">
                <h2>Show Member</h2>
            </div>
        </div>
    </div>
        
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode : </strong>
                {{ $member->kode}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Member : </strong>
                {{ $member->nama_member}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat : </strong>
                {{ $member->alamat}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No.Telpon : </strong>
                {{ $member->notelp}}
            </div>
        </div>
        <div class="float-right">
            <a href="{{ route('member.index')}}"  type="button" class="btn btn-secondary text-white mt-3">Kembali</a>
        </div>
    </div>
@endsection