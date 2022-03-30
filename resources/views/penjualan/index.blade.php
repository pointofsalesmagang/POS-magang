@extends('layouts.main')
@section('content')

<a href="{{route ('penjualan.create')}}" type="button" class="btn btn-success text-white mb-4"><i class="bi bi-plus-circle"></i> Daftar Penjualan</a>

<table id="tabledata" class="table table-bordered text-center">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Tanggal</th>
        <th scope="col">kode Member</th>
        <th scope="col">Total Item</th>
        <th scope="col">Total Harga</th>
        <th scope="col">Diskon</th>
        <th scope="col">Total Bayar</th>
        <th scope="col">Kasir</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($penjualan as $jual)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$jual->tanggal}}</td>
            <td>{{$jual->kode_member}}</td>
            <td>{{$jual->total_item}}</td>
            <td>{{$jual->total_harga}}</td>
            <td>{{$jual->diskon}}</td>
            <td>{{$jual->total_bayar}}</td>
            <td>{{$jual->kasir}}</td>
            <td>
             
              <form action="{{route('penjualan.destroy',$jual->id)}}" method="POST" class="text-center">
                @csrf
                @method('DELETE') 
                <a class="btn btn-warning btn-fw text-white" href="{{route('penjualan.edit',$jual->id)}}"><i class="bi bi-pencil-square"></i></a>
                <button type="submit" class="btn btn-danger btn-fw text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-trash3-fill"></i></button>
                </form>
            </td>  
     </tr>
     @endforeach
    </tbody>
  </table>
   
@endsection