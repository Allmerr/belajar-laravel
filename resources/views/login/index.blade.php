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
            <div class="card" style="width: 500px">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="">
                            <label for="username" class="form-label">Username : </label>
                            <input type="text" id="username" name="username" class="form-control">
                        </div>
                        <div class="">
                            <label for="password" class="form-label">Password : </label>
                            <input type="password" id="password" name="password" class="form-control">
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