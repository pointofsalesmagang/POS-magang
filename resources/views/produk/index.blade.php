@extends('layouts.main')
@section('content')


<a href="{{route ('produk.create')}}" type="button" class="btn btn-success text-white mb-4"><i class="bi bi-plus-circle"></i> Produk</a>

<table id="tabledata" class="table table-bordered text-center">
    <thead>
      <tr>
        <th scope="col" >No</th>
        <th scope="col" >Kode</th>
        <th scope="col" >Nama Produk</th>
        <th scope="col" >Kategori Produk</th>
        <th scope="col" >Merk</th>
        <th scope="col" >Harga Beli</th>
        <th scope="col" >Harga Jual</th>
        <th scope="col" >Diskon</th>
        <th scope="col" >Stok</th>
        <th scope="col" >Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($produk as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$item->kode_produk}}</td>
            <td>{{$item->nama_produk}}</td>
            <td>{{$item->kategori->nama_kategori}}</td>
            <td>{{$item->merk}}</td>
            <td>{{$item->harga_beli}}</td>
            <td>{{$item->harga_jual}}</td>
            <td>{{$item->diskon}}</td>
            <td>{{$item->stok}}</td>  
            <td>
             
              <form action="{{route('produk.destroy',$item->id_produk)}}" method="POST" class="text-center">
                @csrf
                @method('DELETE') 
                <a class="btn btn-info btn-fw text-white" href="{{route('produk.show',$item->id_produk)}}"><i class="bi bi-eye-fill"></i></a>
                <a class="btn btn-warning btn-fw text-white" href="{{route('produk.edit',$item->id_produk)}}"><i class="bi bi-pencil-square"></i></a>
                <button type="submit" class="btn btn-danger btn-fw text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-trash3-fill"></i></button>
                </form>
            </td>  
     </tr>
     @endforeach
    </tbody>
  </table>
@endsection