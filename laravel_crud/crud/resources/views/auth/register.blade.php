@extends('layouts.main')

@section('main-section')
    <div class="container mt-5">
        <form action="" method="POST">
            @csrf
            <div>
                <label for="name">name</label>
                <input type="name" id="name" name="name" class="form-control">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="email">email</label>
                <input type="email" id="email" name="email" class="form-control">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password">password</label>
                <input type="password" id="password" name="password" class="form-control">
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="cpassword">confirm password</label>
                <input type="password" id="cpassword" name="confirm_password" class="form-control">
                @error('confirm_password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <input type="submit" name="submit" class="btn btn-primary mt-3">
        </form>
    </div>
@endsection
