@extends('adminlte.master')

@section('title')
Form Pertanyaan
@endsection

@section('content')

     <form action="/pertanyaan" method="POST">
      @csrf
      <div class="form-group">
        <label for="isi">Buat Pertanyaan Baru</label>
        <input type="text" class="form-control" name="isi" id="isi" placeholder="Masukkan Pertanyaan">
      </div>
      <button type="submit" class="btn btn-primary">Tanyakan</button>
    </form>

@endsection
