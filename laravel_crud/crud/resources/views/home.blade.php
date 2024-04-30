@extends('layouts.main')

@section('main-section')
    <div class="container mt-5">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                    <th scope="col">age</th>
                    <th scope="col">subject</th>
                    <th scope="col">address</th>
                    <th scope="col">update</th>
                    <th scope="col">delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <th>{{ $student->id }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->subject }}</td>
                        <td>{{ $student->address }}</td>
                        <td>

                            <form action="{{ route('update.student', $student->id) }}" method="POST">
                                @csrf
                                <input type="submit" class="btn btn-primary" value="UPDATE">
                            </form>

                        </td>
                        <td>
                            <form action="{{ route('delete.student', $student->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="DELETE">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
