@extends('layouts.front')

@section('front_content')

    <section class="login py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-auto border p-3">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach 
                            </ul>
                        </div>
                    @endif
                    <h2 class="fs-1 mb-4 mt-3">Registration</h2>

                    <form action="{{ url('post-registration') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="name" class="form-control" id="floatingInput" name="name" value="{{ old('name') }}" placeholder="Your Name" required>
                            <label for="floatingInput">Name*</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email" value="{{ old('email') }}" placeholder="Your Email Address" required>
                            <label for="floatingInput">Email address*</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="username" value="{{ old('username') }}" placeholder="username" required>
                            <label for="floatingInput">Username*</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                            <label for="floatingPassword">Password*</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" name="confirm_password" placeholder="Password" required>
                            <label for="floatingPassword">Confirm Password*</label>
                        </div>
                        <div class=" mb-3">
                            <button class="btn btn-primary"> Registration</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </section>
@endsection