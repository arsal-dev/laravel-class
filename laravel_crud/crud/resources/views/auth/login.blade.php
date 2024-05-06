@extends('layouts.main')

@section('main-section')
    <div class="container mt-5">

        @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div>
                <label for="email">email</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div>
                <label for="password">password</label>
                <input type="text" id="password" name="password" class="form-control">
            </div>

            <div>
                <label for="remember">remember me</label>
                <input type="checkbox" id="remember" name="remember">
            </div>

            <input type="submit" name="submit" class="btn btn-primary mt-3">
        </form>
    </div>
@endsection
