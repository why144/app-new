@extends('layout.main')

@section('container')
<div class="row justify-content-center">*
    <div class="col-lg-4">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="POST">

                <div class="form-floating">
                    <input type="text" class="form-control rounded-top" name="name" id="name"  placeholder="name">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="username" id="username"  placeholder="username">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating"> 
                    <input type="password" class="form-control rounded-bottom" name="password" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>

                <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login!</a></small>
        </main>
    </div>
</div>

@endsection