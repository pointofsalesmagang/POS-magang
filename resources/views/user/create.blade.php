@extends('layouts.main')
@section('content')

<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left mb-4">
            <h2>Tambah User</h2>
        </div>
        <div class="float-right">
            <a href="{{route('user.index')}}"  type="button" class="btn btn-dark" text-white mt-3>Kembali</a>
        </div>
    </div>
</div>


<form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama User <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="{{ old('name' )}}" />
            </div>
            <div class="form-group">
                <label>Email <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" />
            </div>
            <div class="form-group">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password"/>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Simpan</button>
                <a class="btn btn-danger" href="{{ route('user.index') }}">Kembali</a>
            </div>
        </form>
@endsection
