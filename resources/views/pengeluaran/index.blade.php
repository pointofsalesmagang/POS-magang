@extends('layouts.main')
@section('content')


<a href="{{route ('pengeluaran.create')}}" type="button" class="btn btn-success text-white mb-4"><i class="bi bi-plus-circle"></i> Daftar Pengeluaran</a>

<table id="tabledata" class="table table-bordered text-center">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Nominal</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pengeluaran as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$item->tanggal}}</td>
            <td>{{$item->deskripsi}}</td>
            <td>{{$item->nominal}}</td>
            <td>
             
              <form action="{{route('pengeluaran.destroy',$item->id)}}" method="POST" class="text-center">
                @csrf
                @method('DELETE') 
                <a class="btn btn-warning btn-fw text-white" href="{{route('pengeluaran.edit',$item->id)}}"><i class="bi bi-pencil-square"></i></a>
                <button type="submit" class="btn btn-danger btn-fw text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-trash3-fill"></i></button>
                </form>
            </td>  
     </tr>
     @endforeach
    </tbody>
  </table>
@endsection