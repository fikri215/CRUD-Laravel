@extends('adminlte.master')

@section('title')
Form Jawban
@endsection

@section('content')
      <div class="card" style="width: 67rem;">
        <div class="card-body">
            <h5 class="card-title text-bold">Pertanyaan</h5>
            <p class="card-text">{{ $pertanyaan->isi }}</p>
        </div>
      </div>
      @foreach($jawaban as $jawab)
      <div class="card" style="width: 67rem;">
        <div class="card-body">
            <h5 class="card-title text-bold">Jawaban</h5>
            <p class="card-text">{{ $jawab->isi }}</p>
        </div>
      </div>
      @endforeach
@endsection