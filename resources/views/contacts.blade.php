@extends('layouts.main')

@section('title', 'All Contacts')

@section('main-section')
    <h1>All Contacts!</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">subject</th>
                    <th scope="col">age</th>
                    <th scope="col">message</th>
                    <th scope="col">created at</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td>{{ $contact->age }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>{{ $contact->created_at }}</td>
                        <td><button class="btn btn-primary">Update</button> <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
