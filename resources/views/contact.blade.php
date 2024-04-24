@extends('layouts.main')

@section('title', 'contact page')

@section('main-section')
    <div class="container">
        <h1>Contact Us!</h1>

        {{-- <ul>
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul> --}}

        <form action="{{ route('contactSubmit') }}" method="POST">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}">
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div>
                <label for="email">email</label>
                <input type="text" id="email" name="email"
                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div>
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject"
                    class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') }}">
                <span class="text-danger">
                    @error('subject')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div>
                <label for="age">Age</label>
                <input type="text" id="age" name="age" class="form-control @error('age') is-invalid @enderror"
                    value="{{ old('age') }}">
                <span class="text-danger">
                    @error('age')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div>
                <label for="message">Message</label>
                <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror" cols="30"
                    rows="10">{{ old('message') }}</textarea>
                <span class="text-danger">
                    @error('message')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <input type="submit" name="submit" class="btn btn-primary mt-3">
        </form>
    </div>
@endsection
