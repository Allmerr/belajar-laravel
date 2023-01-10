@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="base">
            <div class="card" style="width: 500px">
                <div class="card-header">
                    Register
                </div>
                <div class="card-body">
                    <form action="/register" method="POST">
                        @csrf
                        <div class="">
                            <label for="name" class="form-label">Name : </label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" required>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="">
                            <label for="email" class="form-label">Email : </label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="">
                            <label for="username" class="form-label">Username : </label>
                            <input type="text" id="username" name="username"  class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" required>
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="">
                            <label for="password" class="form-label">Password : </label>
                            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="d-grid mt-3">
                            <button type="submit" class="btn btn-secondary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection