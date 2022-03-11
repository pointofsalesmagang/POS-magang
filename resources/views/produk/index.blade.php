@extends('layouts.main')
@section('content')


<a href="{{route ('produk.create')}}" type="button" class="btn btn-success text-white mb-4"><i class="bi bi-plus-circle"></i> Produk</a>

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col" class="text-center">Kode</th>
        <th scope="col" class="text-center">Nama Produk</th>
        <th scope="col" class="text-center">Kategori Produk</th>
        <th scope="col" class="text-center">Merk</th>
        <th scope="col" class="text-center">Harga Beli</th>
        <th scope="col" class="text-center">Harga Jual</th>
        <th scope="col" class="text-center">Diskon</th>
        <th scope="col" class="text-center">Stok</th>
        <th scope="col" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($produk as $item)
        <tr>
            <td>{{$item->kode}}</td>
            <td>{{$item->nama_produk}}</td>
            <td>{{$item->kategori_produk}}</td>
            <td>{{$item->merk}}</td>
            <td>{{$item->harga_beli}}</td>
            <td>{{$item->harga_jual}}</td>
            <td>{{$item->diskon}}</td>
            <td>{{$item->stok}}</td>  
            <td>
             
              <form action="{{route('produk.destroy',$item->id)}}" method="POST" class="text-center">
                @csrf
                @method('DELETE') 
                <a class="btn btn-info btn-fw text-white" href="{{route('produk.show',$item->id)}}"><i class="bi bi-eye-fill"></i></a>
                <a class="btn btn-warning btn-fw text-white" href="{{route('produk.edit',$item->id)}}"><i class="bi bi-pencil-square"></i></a>
                <button type="submit" class="btn btn-danger btn-fw text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-trash3-fill"></i></button>
                </form>
            </td>  
     </tr>
     @endforeach
    </tbody>
  </table>
@endsection