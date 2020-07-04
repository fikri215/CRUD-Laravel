@extends('adminlte.master')

@section('title')
Detail Pertanyaan
@endsection

@section('content')

    <div class="card">
        <div class="card-header">
          <h3 class="card-title text-bold">Pertanyaan</h3>
        </div>
        <div class="card-body">
            {{ $pertanyaan->isi }}
        </div>
    </div>
        <div class="">
        <a class="btn btn-primary mb-2" href="/jawaban/{{ $pertanyaan->id }}">Berikan Jawaban</a>
        <a class="btn btn-warning mb-2" href="/pertanyaan/{{ $pertanyaan->id }}/edit">Edit Pertanyaan</a>
        <a class="text-decoration-none ml-2 mt-2" href="/pertanyaan">Kembali ke daftar pertanyaan</a>
        </div>
        
        @foreach($jawaban as $ans)
        <div class="card mt-2">
            <div class="card-header">
                <h5 class="card-title">Jawaban User {{$ans->id}}</h5>
            </div>
            <div class="card-body">
                {{ $ans->isi }}
            </div>
        </div>
    @endforeach

@endsection