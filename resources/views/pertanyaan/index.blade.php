@extends('adminlte.master')

@section('content')
    
<div class="card">
    <div class="card-header">
      <h3 class="card-title">List Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      @if (session('success'))
          <div class="alert alert-success">
            {{session('success')}}
          </div>
      @endif
      <a class="btn btn-primary mb-3" href="/pertanyaan/create">Tambah</a>
      <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">#</th>
            <th>Judul</th>
            <th>Isi</th>
            <th style="width: 40px">Action</th>
          </tr>
        </thead>
        <tbody>
       
        
            @forelse ($posts as $key => $post)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $post->judul }}</td>
                <td>{{ $post->isi }}</td>
                <td style="display:flex;">
                  <a href="/pertanyaan/{{$post->id}}" class="btn btn-info btn-sm ">show</a>
                  <a href="/pertanyaan/{{$post->id}}/edit" class="btn btn-default btn-sm ml-1">edit</a>
                <form action="/pertanyaan/{{$post->id}}" method="POST">
                  @csrf
                  @method('DELETE')
                <input type="submit" value="delete" class="btn btn-danger btn-sm ml-1">
                </form>
                </td>
              </tr>
            @empty
            <tr><td colspan="4" align="center">No Data</td></tr>
                
            @endforelse
     
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">«</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">»</a></li>
      </ul>
    </div>
  </div>
@endsection