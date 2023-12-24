<?php
session_start(); // Start session nya

// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if (isset($_SESSION['username'])) { // Jika session username ada berarti dia sudah login
    header("location: dashboard.php"); // Kita Redirect ke halaman welcome.php
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Dulu Bro</title>

    <script src="https://kit.fontawesome.com/33259447fc.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .navbar {
            align-items: center;
        }

        .navbar {
            height: 70px;
            left: 0px;
            right: 0px;
            position: absolute;
            background-color: white;
        }

        .container-fluid {
            margin-top: 0px;
        }

        #kandang {
            background-color: rgba(255, 255, 255, 0.8);
            /* Latar belakang transparan */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body style="background-image: url('https://gamepress.gg/arknights/sites/arknights/files/styles/banner_image/public/2022-03/FODedTtVIAEmtdY_0.jpg?h=fccf35f4&itok=Uk2vpka5');">
    <div class="container">
        <nav class="navbar navbar-expand-lg main-navbar">
            <div class="title ms-5">
                <h1>Website Absen Testing</h1>
            </div>
            <!--  <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1"> 
                        <div class="d-sm-none d-lg-inline-block">Hallo, oki</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-title"></div>
                        <a href="" class="dropdown-item has-icon"> base_url('admin/auth/gantipass'); 
                            <i class="fas fa-key"></i> Ganti Password
                        </a>
                        <a href="features-settings.html" class="dropdown-item has-icon">
                            <i class="fas fa-cog"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="" class="dropdown-item has-icon text-danger"> base_url('auth/logout'); 
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul> -->
        </nav>

        <div class="container-fluid h-custom" style="padding-top: 100px;">
            <div class="row d-flex justify-content-center align-items-center h-100" id="kandang">
                <div class="col-xl-5" style="left: 20px;">
                    <img src="https://images.alphacoders.com/605/thumb-1920-605592.png" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form>

                        <div style="color: red; margin-bottom: 50px;">
                            <?php
                            // Cek apakah terdapat cookie dengan nama message
                            if (isset($_COOKIE["message"])) { // Jika ada
                                echo $_COOKIE["message"]; // Tampilkan pesannya
                            }
                            ?>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Username</label>
                            <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Username" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Password</label>
                            <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Password" />

                        </div>

                        <div class="text-center text-lg-start pt-2">
                            <div class="justify-content-center" style="display: flex;">
                                <button type="button" class="btn btn-primary btn-lg" style="padding-left: 7rem; padding-right: 7rem; border-radius: 15px;">Login</button>
                            </div>

                            <div class="d-flex justify-content-between mb-5">
                                <div class="form-check mb-0" style="padding-left: 0px;">
                                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!" class="link-danger">Register</a></p>
                                    <!-- kosong aja dulu -->
                                </div>
                                <a href="dashboard.php" style="padding-top: 9px;">Forgot password?</a>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>


        <!-- <form method="post" action="login.php">
            <label>Username</label><br>
            <input type="text" name="username" placeholder="Username"><br><br>

            <label>Password</label><br>
            <input type="password" name="password" placeholder="Password"><br><br>

            <button type="submit">Login</button> <a href="daftar.php" class="button button1">Daftar Member</a>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    </div>

    <footer style="position: fixed; left: 0; bottom: 0; width: 100%;">
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                @Oki Bilal Indratama &emsp; Pemrograman Paradigma
            </div>
            <!-- Copyright -->

            <!-- Right -->
            <div>
                <a href="https://www.facebook.com/KepomPong2816/" class="text-white me-4" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://github.com/KepomPong2816" class="text-white me-4" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/oki-bilal-indratama-9806b3262/" class="text-white" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <!-- Right -->
        </div>
    </footer>
</body>

</html>