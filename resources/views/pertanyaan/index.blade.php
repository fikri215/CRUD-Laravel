@extends('adminlte.master')

@section('title')
Forum Tanya Jawab
@endsection

@section('content')
            <h1>Daftar Pertanyaan</h1>
            <a class="btn btn-success mb-2 float-right" href="/pertanyaan/create" role="button">
            Buat Pertanyaan</a>
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Pertanyaan</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pertanyaan as $tanya)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $tanya->isi }}</td>
                    <td><a class="btn btn-success" href="/jawaban/{{ $tanya->id }}" role="button"><i class="fas fa-reply"></i></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

@endsection
