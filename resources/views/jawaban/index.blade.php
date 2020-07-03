@extends('adminlte.master')

@section('title')
Beri Jawaban
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
    
        <form action="{{url('/jawaban/' . $pertanyaan->id)}}" method="POST">
            @csrf
            <div class="form-group">
                <input type="hidden" name="pertanyaan_id" value="{{ $pertanyaan->id }}">
                <label for="isi">Jawaban</label>
                <input type="text" class="form-control" name="isi" id="isi" placeholder="Masukkan Jawaban">
            </div>
        <button type="submit" class="btn btn-primary mb-2">Jawab</button>
        </form>
        <a class="text-decoration-none mt-2" href="/pertanyaan">Kembali ke daftar pertanyaan</a>
        
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