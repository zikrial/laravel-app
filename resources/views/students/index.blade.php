@extends('template/main')

@section('title', 'Student List')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-4">
            <h1>List Student</h1>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$student->nama}}</td>
                        <td>
                            <a href="{{url('students/' . $student->id)}}" class="badge badge-primary">Show Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection