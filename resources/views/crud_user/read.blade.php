@extends('dashboard')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        a {
            text-decoration: none;
            color: blue;
        }

        a:hover {
            color: darkblue;
        }

        .container {
            margin-top: 50px;
        }
    </style>

    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>GitHub</th>
                            <th>Like</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $messi->id }}</td>
                            <td>{{ $messi->name }}</td>
                            <td>{{ $messi->email }}</td>
                            <td>{{ $messi->phone }}</td>
                            <td>{{ $messi->address }}</td>
                            <td>{{ $messi->github }}</td>
                            <td>{{ $messi->like }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
