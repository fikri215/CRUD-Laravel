@extends('adminlte.master')

@section('title')
Forum Tanya Jawab
@endsection

@section('content')
            <h1>Daftar Pertanyaan</h1>
            <a class="btn btn-primary mb-2" href="/pertanyaan/create">
            Buat Pertanyaan</a>

            @foreach($pertanyaan as $tanya)
            <div class="card mt-1">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text text-bold">{{ $tanya->isi }}</p>
                    <div class="float-right">
                        <a href="/pertanyaan/{{$tanya->id}}" class="btn btn-info">Detail</a>
                        <a href="/jawaban/{{$tanya->id}}" class="btn btn-success">Reply</a>
                        <a href="/pertanyaan/{{$tanya->id}}/edit" class="btn btn-warning">Edit</a>
                        <form action="/pertanyaan/{{$tanya->id}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                           <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus pertanyaan ini?')"><i class="fas fa-trash"></i></button>
                        </form>
                        
                    </div>
                </div>
            </div>
            @endforeach

@endsection
