@extends('dashboard')

@section('content')
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Changed shadow */
        }

        .card-header {
            background-color: #007bff;
            /* Updated to Bootstrap's primary color */
            color: white;
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            border-radius: 10px 10px 0 0;
            /* Added border-radius to header */
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            /* Increased margin */
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            /* Slightly more rounded */
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            /* Added smooth transition */
        }

        .form-control:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            /* Added shadow on focus */
        }

        .text-danger {
            color: #dc3545;
            /* Updated to Bootstrap's danger color */
            font-size: 0.875rem;
            margin-top: 5px;
            /* Added margin-top for better spacing */
        }

        .btn-dark {
            background-color: #007bff;
            /* Updated to Bootstrap's primary color */
            color: white;
            padding: 10px 20px;
            /* Increased horizontal padding */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            /* Added transform transition */
        }

        .btn-dark:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            /* Slightly lifted on hover */
        }

        .d-grid {
            display: grid;
            justify-items: center;
        }

        .form-group label {
            display: block;
            text-align: left;
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
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

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" placeholder="Enter your name" id="name" class="form-control" name="name"
                                       value="{{ $user->name }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                 <label for="email_address">Email</label>
                                <input type="text" placeholder="Enter your email" id="email_address" class="form-control"
                                       name="email" value="{{ $user->email }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" placeholder="Enter your password" id="password" class="form-control"
                                       name="password" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                 <label for="phone">Phone</label>
                                <input type="text" placeholder="Enter your phone" id="phone" class="form-control"
                                       name="phone" value="{{ $user->phone }}">
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" placeholder="Enter your address" id="address" class="form-control"
                                       name="address" value="{{ $user->address }}">
                                @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="github">GitHub</label>
                                <input type="text" placeholder="Enter your GitHub" id="github" class="form-control"
                                       name="github" value="{{ $user->github }}">
                                @if ($errors->has('github'))
                                    <span class="text-danger">{{ $errors->first('github') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="like">Like</label>
                                <input type="number" placeholder="Enter your Likes" id="like" class="form-control"
                                       name="like" value="{{ $user->like }}">
                                @if ($errors->has('like'))
                                    <span class="text-danger">{{ $errors->first('like') }}</span>
                                @endif
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
