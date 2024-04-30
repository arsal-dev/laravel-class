@extends('layouts.main')

@section('main-section')
    <div class="container mt-5">
        <form action="{{ route('update.put.student', $student->id) }}" method="POST">
            @csrf
            @method('patch')
            <div>
                <label for="name">name</label>
                <input type="text" name="name" id="name"
                    class="form-control @error('name')
                    is-invalid
                @enderror"
                    value="{{ $student->name }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="email">email</label>
                <input type="email" name="email" id="email"
                    class="form-control @error('email')
                is-invalid
            @enderror"
                    value="{{ $student->email }}">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="phone">phone</label>
                <input type="text" name="phone" id="phone"
                    class="form-control @error('phone')
                is-invalid
            @enderror"
                    value="{{ $student->phone }}">
                @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="age">age</label>
                <input type="text" name="age" id="age"
                    class="form-control @error('age')
                is-invalid
            @enderror"
                    value="{{ $student->age }}">
                @error('age')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="subject">subject</label>
                <input type="text" name="subject" id="subject"
                    class="form-control @error('subject')
                is-invalid
            @enderror"
                    value="{{ $student->subject }}">
                @error('subject')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="address">address</label>
                <textarea name="address" id="address"
                    class="form-control @error('address')
                is-invalid
            @enderror" cols="30"
                    rows="10">{{ $student->address }}</textarea>
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <input type="submit" class="btn btn-primary mt-3" name="submit" value="add student">
        </form>
    </div>
@endsection
