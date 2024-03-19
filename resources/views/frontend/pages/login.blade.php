@extends('layouts.front')

@section('front_content')

    <section class="login section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-auto border p-3">
                    @if (session('user_created'))
                        <div class="alert alert-success">{{ session('user_created') }}</div>
                    @endif
                    @if (session('invalid_login'))
                        <div class="alert alert-danger">{{ session('invalid_login') }}</div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach 
                            </ul>
                        </div>
                    @endif
                    <h2 class="fs-1 mb-4 mt-3">Login</h2>

                    <form action="{{ url('/post-login') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="username" value="{{ old('username') }}" placeholder="Username" required>
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" name="password" value="{{ old('password') }}" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class=" mb-3">
                            <button class="btn btn-primary">Login</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </section>
@endsection