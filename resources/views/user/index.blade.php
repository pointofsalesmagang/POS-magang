@extends('layouts.main')
@section('content')

<a href="{{route ('user.create')}}" type="button" class="btn btn-success text-white mb-4"><i class="bi bi-plus-circle"></i> User</a>

<table id="tabledata" class="table table-bordered">
   <thead>
       <tr>
           <th scope="col" >No</th>
           <th scope="col" >Nama</th>
           <th scope="col" >Email</th>
           <th scope="col" >Action</th>
       </tr>
   </thead>
   <tbody>
    @foreach ($user as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->email }}</td>
        <td>
            <form action="{{route('user.destroy', $item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a class="btn btn-warning btn-fw text-white" href="{{route('user.edit',$item->id)}}"><i class="bi bi-pencil-square"></i></a>
                <button type="submit" class="btn btn-danger btn-fw text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-trash3-fill"></i></button>
            </form>
        </td>
    </tr>
       @endforeach
   </tbody>
</table>
@endsection