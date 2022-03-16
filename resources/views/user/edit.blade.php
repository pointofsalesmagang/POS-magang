
@extends('layouts.main')
@section('content')
<form action="{{ route('user.update', $user) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama User <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="{{ old('name', $user->name) }}" />
            </div>
            <div class="form-group">
                <label>Email <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" value="{{ old('email', $user->email) }}" />
            </div>
            <div class="form-group">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
                <p class="form-text">Kosongkan jika tidak ingin mengubah password.</p>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Simpan</button>
                <a class="btn btn-danger" href="{{ route('user.index') }}">Kembali</a>
            </div>
        </form>
@endsection
