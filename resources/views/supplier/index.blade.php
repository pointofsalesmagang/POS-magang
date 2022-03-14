@extends('layouts.main')
@section('content')
    
<a href="{{route ('supplier.create')}}" type="button" class="btn btn-success text-white mb-4"><i class="bi bi-plus-circle"></i> Supplier</a>

<table class="table table-bordered">
   <thead>
       <tr>
           <th scope="col" >Nama</th>
           <th scope="col" >Telepon</th>
           <th scope="col" >Alamat</th>
           <th scope="col" >Action</th>
       </tr>
   </thead>
   <tbody>
    @foreach ($supplier as $item)
    <tr>
        <td>{{$item->nama}}</td>
        <td>{{$item->telepon}}</td>
        <td>{{$item->alamat}}</td>  
        <td>
            <form action="{{route('supplier.destroy',$item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a class="btn btn-warning btn-fw text-white" href="{{route('supplier.edit',$item->id)}}"><i class="bi bi-pencil-square"></i></a>
                <button type="submit" class="btn btn-danger btn-fw text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-trash3-fill"></i></button>
            </form>
        </td>  
    </tr>
       @endforeach
   </tbody>
</table>
@endsection