@extends('dashboard')

@section('content')
    <main class="signup-form">
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
            }
            .signup-form {
                margin-top: 50px;
            }
            .card {
                border-radius: 10px;
                border: 1px solid #ccc;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            }
            .card-header {
                background-color: #f8f9fa;
                border-bottom: 1px solid #ccc;
                font-size: 1.5rem;
            }
            .card-body {
                padding: 20px;
            }
            .form-group {
                margin-bottom: 15px;
            }
            .form-control {
                width: 100%;
                padding: 10px;
                margin: 5px 0;
                border: 1px solid #ccc;
                border-radius: 3px;
            }
            .text-danger {
                color: red;
                font-size: 0.875rem;
            }
            .btn-dark {
                background-color: #343a40;
                color: white;
                padding: 10px;
                border: none;
                border-radius: 3px;
                cursor: pointer;
                width: 100%;
            }
            .btn-dark:hover {
                background-color: #23272b;
            }
            .d-grid {
                display: grid;
                justify-items: center;
            }
        </style>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Update User</h3>
                        <div class="card-body">
                            <form action="{{ route('user.postUpdateUser') }}" method="POST">
                                @csrf
                                <input name="id" type="hidden" value="{{ $user->id }}">
                                
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                           value="{{ $user->name }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                           name="email" value="{{ $user->email }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Phone" id="phone" class="form-control"
                                           name="phone" value="{{ $user->phone }}">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Address" id="address" class="form-control"
                                           name="address" value="{{ $user->address }}">
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
