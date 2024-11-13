<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .success-message {
            position: fixed;
            top: 1em;
            right: 1em;
            text-transform: capitalize;
            color: white;
            padding: 1em;
            display: inline-block;
            min-width: 20em;
            border-radius: 0.2em;
            background: mediumseagreen;
            animation: alert 1s 1s forwards;
        }
        @keyframes alert {
        from {
            opacity: 1;
        }
        to {
            opacity: 0;
        }
    }
    </style>
</head>
<body>
    @if (Session::has('logout_success'))
        <p class="success-message">{{ Session::get('logout_success') }}</p>
    @endif
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
