@extends('adminlte.master')

@section('content')


<div class="card card-primary ml-3 mr-3 mt-3">
    <div class="card-header">
      <h3 class="card-title">Create New Post</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="/posts">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="Title">Title</label>
        <input type="text" class="form-control" id="title" value="{{old('title','')}}" name="title" placeholder="Enter title">
          @error('title')
            <div class="alert alert-danger sm">{{ $message }}</div>
           
          @enderror
        </div>
        <div class="form-group">
          <label for="body">Body</label>
          <input type="text" class="form-control" id="body" name="body" placeholder="Body" value="{{old('body','')}}">
          @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
     
     
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </form>
  </div>
    
@endsection
