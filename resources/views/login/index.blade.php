@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="base">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert" style="width: 500px">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>    
            @endif  
            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert" style="width: 500px">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>    
            @endif  
            <div class="card" style="width: 500px">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form action="/login" method="POST">
                        @csrf
                        <div class="">
                            <label for="email" class="form-label">Email : </label>
                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" required>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="">
                            <label for="password" class="form-label">Password : </label>
                            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
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