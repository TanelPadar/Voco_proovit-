<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div class="container mt-5" >
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('register') }}">Register here</a>
                            <div class="button-wrap">
                                <button type="button" class="btn btn-info" id="changeColorButton">Change Color</button>
                                <button type="submit" class="btn btn-primary justify-content-end ml-2">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/main.js') }}"></script>
</body>
