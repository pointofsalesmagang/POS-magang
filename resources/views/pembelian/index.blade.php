@extends('layouts.main')
@section('content')


<a href="{{route ('pembelian.create')}}" type="button" class="btn btn-success text-white mb-4"><i class="bi bi-plus-circle"></i> Pembelian</a>

<table id="tabledata" class="table table-bordered text-center">
    <thead>
      <tr>
        <th scope="col">Tanggal</th>
        <th scope="col">Supplier</th>
        <th scope="col">Total Item</th>
        <th scope="col">Total Harga</th>
        <th scope="col">Diskon</th>
        <th scope="col">Total Bayar</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pembelian as $item)
        <tr>
            <td>{{$item->tanggal}}</td>
            <td>{{$item->supplier}}</td>
            <td>{{$item->total_item}}</td>
            <td>{{$item->total_harga}}</td>
            <td>{{$item->diskon}}</td>
            <td>{{$item->total_bayar}}</td>
            <td>
             
              <form action="{{route('pembelian.destroy',$item->id)}}" method="POST" class="text-center">
                @csrf
                @method('DELETE') 
                <a class="btn btn-warning btn-fw text-white" href="{{route('pembelian.edit',$item->id)}}"><i class="bi bi-pencil-square"></i></a>
                <button type="submit" class="btn btn-danger btn-fw text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-trash3-fill"></i></button>
                </form>
            </td>  
     </tr>
     @endforeach
    </tbody>
  </table>
@endsection