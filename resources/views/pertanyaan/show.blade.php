@extends('adminlte.master')

@section('content')
<div class="mt-3 ml-3">
    
    <h4>{{$post->judul}}</h4>
        <p>{{$post->isi}}</p>

</div>

@endsection