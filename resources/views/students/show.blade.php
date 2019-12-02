@extends('template/main')

@section('title', 'Student Detail')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-4">
            <h1>Detail Student</h1>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$student->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->email}}</h6>
                    <p class="card-text">{{$student->nrp}}</p>
                    <p class="card-text">{{$student->jurusan}}</p>
                    <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>
                    <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{url('students/')}}" class="card-link">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection