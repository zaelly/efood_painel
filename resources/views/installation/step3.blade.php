@extends('layouts.blank')
@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-12">
                @if(session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="mar-ver pad-btm text-center">
                    <h1 class="h3">Database Settings</h1>
                    <p>Please enter your database credentials below.</p>
                </div>
                <form method="POST" action="{{ route('install.db') }}">
                    @csrf
                    <div class="form-group">
                        <label for="DB_HOST">Database Host</label>
                        <input type="text" class="form-control" id="DB_HOST" name="DB_HOST" value="127.0.0.1" required>
                    </div>
                    <div class="form-group">
                        <label for="DB_DATABASE">Database Name</label>
                        <input type="text" class="form-control" id="DB_DATABASE" name="DB_DATABASE" required>
                    </div>
                    <div class="form-group">
                        <label for="DB_USERNAME">Database Username</label>
                        <input type="text" class="form-control" id="DB_USERNAME" name="DB_USERNAME" value="laravel" required>
                    </div>
                    <div class="form-group">
                        <label for="DB_PASSWORD">Database Password</label>
                        <input type="password" class="form-control" id="DB_PASSWORD" name="DB_PASSWORD">
                    </div>
                    <div class="text-center pt-3">
                        <button type="submit" class="btn btn-info">Save & Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
