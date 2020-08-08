@extends('adminlte.master')

@section('content')


<div class="card card-primary ml-3 mr-3 mt-3">
    <div class="card-header">
      <h3 class="card-title">Edit Pertanyaan {{$post->id}}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="/pertanyaan/{{$post->id}}">
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="judul">Judul</label>
        <input type="text" class="form-control" id="judul" value="{{old('judul',$post->judul)}}" name="judul" placeholder="Enter judul">
          @error('judul')
            <div class="alert alert-danger sm">{{ $message }}</div>
           
          @enderror
        </div>
        <div class="form-group">
          <label for="isi">Isi</label>
          <input type="text" class="form-control" id="isi" name="isi" placeholder="isi" value="{{old('isi',$post->isi)}}">
          @error('isi')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
     
     
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Ubah</button>
      </div>
    </form>
  </div>
    
@endsection
