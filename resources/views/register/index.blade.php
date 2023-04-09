@extends('layout.base')
@section('base')
<div class="row position-absolute top-50 start-50 translate-middle rounded" style="background-color: #e3f2fd; box-shadow: 2px 2px 4px #198754; padding:20px;">
    <div class="col d-flex justify-content-center">
        <main class="form-registration">
            <form action="/register" method="post">
                @csrf
                <div class="text-center mb-4">
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="96" height="96" viewBox="0 0 32 32">
                            <polygon fill="#79b5ba" points="24.99,13 29.99,15.95 25,19.14 24.99,23.24 16,29 7.01,23.24 7,19.14 2.01,15.95 7.01,13 2.01,10.05 11,4.3 16,7.24 21,4.3 29.99,10.05"></polygon><polygon fill="#fff" points="24.221,13.695 16,8.428 7.779,13.695 7.24,12.853 16,7.24 24.76,12.853"></polygon><polygon fill="#fff" points="16,19.234 7.24,13.621 7.779,12.779 16,18.046 24.221,12.779 24.76,13.621"></polygon><polygon fill="#fff" points="11.359,21.958 7.24,19.319 7.779,18.477 11.381,20.785 15.746,18.209 16.254,19.071"></polygon><polygon fill="#fff" points="20.641,21.958 15.746,19.071 16.254,18.209 20.619,20.785 24.221,18.477 24.76,19.319"></polygon><path fill="#302529" d="M16,30.188l-9.989-6.399l-0.01-4.1L0.1,15.916L5.042,13l-4.941-2.916l10.878-6.957L16,6.08 l5.021-2.953l10.878,6.957L26.958,13l4.942,2.916l-5.901,3.772l-0.01,4.1L16,30.188z M8.009,22.692L16,27.813l7.991-5.12 l0.01-4.101l4.079-2.607L23.022,13l5.059-2.984l-7.103-4.543L16,8.4l-4.979-2.928l-7.103,4.543L8.978,13L3.92,15.984l4.079,2.607 L8.009,22.692z"></path>
                        </svg>
                    </a>
                </div>

              <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
          
              <div class="form-floating mb-2">
                <input type="text" name="name" class="form-control rounded @error('name') is-invalid @enderror" id="name" placeholder="name@example.com" value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating mb-2">
                <input type="text" name="username" class="form-control rounded @error('username') is-invalid @enderror" id="username" placeholder="name@example.com" value="{{ old('username') }}">
                <label for="username">User name</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control rounded @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded @error('password') is-invalid @enderror" id="password" placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
        
              <button class="w-100 btn btn-lg btn-success mt-2" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-2">Already Registered? <a href="/login">Login</a></small>
        </main>
    </div>
</div>
@endsection