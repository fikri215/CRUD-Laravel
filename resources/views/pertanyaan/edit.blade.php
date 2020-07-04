@extends('adminlte.master')

@section('title')
Form Edit Pertanyaan
@endsection

@section('content')

     <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
      @csrf
      @method('PUT')
      
      <div class="form-group">
        <label for="isi">Edit Pertanyaan</label>
        <input type="text" class="form-control" name="isi" id="isi" value="{{$pertanyaan->isi}}" placeholder="Masukkan Pertanyaan">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection
