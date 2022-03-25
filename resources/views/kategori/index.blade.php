@extends('layouts.main')
@section('content')


<a href="{{route ('kategori.create')}}" type="button" class="btn btn-success text-white mb-4"><i class="bi bi-plus-circle"></i> kategori</a>  

<table id="tabledata" class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Nama Kategori</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kategori as $item)
        <tr>
            <td>{{$item->nama_kategori}}</td>
            <td>{{$item->deskripsi}}</td>  
            <td>
                <form action="{{route('kategori.destroy',$item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-warning btn-fw text-white" href="{{route('kategori.edit',$item->id)}}"><i class="bi bi-pencil-square"></i></a>
                    <button type="submit" class="btn btn-danger btn-fw text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-trash3-fill"></i></button>
                </form>
            </td>  
     </tr>
     @endforeach
    </tbody>
</table>


@endsection