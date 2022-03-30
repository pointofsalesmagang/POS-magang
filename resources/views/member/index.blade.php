@extends('layouts.main')
@section('content')

<a href="{{route ('member.create')}}" type="button" class="btn btn-success text-white mb-4"><i class="bi bi-plus-circle"></i> Member</a>

<table id="tabledata" class="table table-bordered text-center">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Kode</th>
        <th scope="col">Nama Member</th>
        <th scope="col">Alamat</th>
        <th scope="col">No. Telpon</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($member as $memb)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$memb->kode}}</td>
            <td>{{$memb->nama_member}}</td>
            <td>{{$memb->alamat}}</td>
            <td>{{$memb->notelp}}</td>  
            <td>
             
              <form action="{{route('member.destroy',$memb->id)}}" method="POST" class="text-center">
                @csrf
                @method('DELETE') 
                <a class="btn btn-info btn-fw text-white" href="{{route('member.show',$memb->id)}}"><i class="bi bi-eye-fill"></i></a>
                <a class="btn btn-warning btn-fw text-white" href="{{route('member.edit',$memb->id)}}"><i class="bi bi-pencil-square"></i></a>
                <button type="submit" class="btn btn-danger btn-fw text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-trash3-fill"></i></button>
                </form>
            </td>  
     </tr>
     @endforeach
    </tbody>
  </table>
    
@endsection