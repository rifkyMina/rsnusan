<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Rumah Sakit</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>

    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    ?>

    <div class="container d-flex justify-content-center align-items-center py-5" style="min-height: 100vh;">
        <h1 class="text-center mb-5"><span class="text-primary">RS</span><br>MEDIKA NUSANTARA</h1>
        <div class="card mx-5" style="width: 700px">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 class="text-center mb-5">Login</h1>
                        <form action="cek_login.php" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3 d-grid">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-sm-6 text-center">
                                        <a href="">Forget Password</a>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <a href="registrasi.html">Create Account</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-primary text-center">
        <div class="container pt-3">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-lg-7">
                    <p>DI Panjaitan. No. 128. Karangreja. Purwokerto. East Java. Indonesia</p>
                    <p>RS Medika Nusantara is dedicated to delivering top-notch healthcare services. <br>
                        With state-of-the-art and environmentally friendly technology, National Hospital <br>
                        consistently places the needs and comfort of its patients at the forefront of its priorities.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>