<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/registrasi.css">
    <title>Registration Page</title>
</head>

<body>
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="card col-md-5 bg-white shadow box-area">
                <h2 class="text-center mt-2">Sign Up</h2>
                <form>
                    <div class="form-group">
                        <label for="nama" class="form-label">User Name</label>
                        <input type="text" placeholder="Enter your user name" class="form-control" id="nama"
                            name="nama" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="nama" class="form-label">Position</label>
                        <input type="text" placeholder="Enter your position" class="form-control" id="nama"
                            name="nama" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="nama" class="form-label">Company Name</label>
                        <input type="text" placeholder="Enter your company name" class="form-control" id="nama"
                            name="nama" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" placeholder="Enter your email" class="form-control" id="email"
                            name="email" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" placeholder="Enter your password" class="form-control" id="password"
                            name="password" required>
                    </div>
                    <div class="form-group mt-2 mb-4">
                        <label for="konfirmasi_password" class="form-label">Confirm Password</label>
                        <input type="password" placeholder="Confirm your password" class="form-control"
                            id="konfirmasi_password" name="konfirmasi_password" required>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary mb-3 col-md-6">Login</button>
                        <span">Return to <a href="{{ route('login') }}">sign in</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
