<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Penggajian</title>
    <link rel="icon" href="assets/images/logo/unikom.png">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="#"><img src="assets/images/logo/logo-kel3.png" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Penggajian</h1>
                    <p class="auth-subtitle mb-5">Silahkan login terlebih dahulu.</p>
                    <?php 
                    include_once("pages/functions.php");
                    $db = dbConnect();
                    session_start();
                    if(isset($_GET["error"]))
                    {
                        $error = $_GET["error"];
                        if($error == "1")
                            showError("Username atau Password salah.");
                        else if($error == "2")
                            showError("Terjadi Kesalahan: ".(DEVELOPMENT?":".$db->error:""));
                        else if($error == "input")
                            showError("Kesalahan masukan:<br>".$_SESSION["salahinputuser"]);   
                        else if($error == "koneksi")
                            showError("Koneksi Bermasalah");  
                        else if($error == "proses")
                            showError("Terjadi Kesalahan. Wajib Menekan Tombol Login"); 
                        else if($error == "akses")
                            showError("Akses dilarang, silahkan login terlebih dahulu.");
                    }
                    ?>
                    <form action="do-login.php" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" name="username" autocomplete="off">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="pass" autocomplete="off">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <!-- <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div> -->
                        <button type="submit" name="btnLogin" class="btn btn-primary btn-block btn-lg">Log in</button>
                    </form>
                    <!-- <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="auth-register.html"
                                class="font-bold">Sign
                                up</a>.</p>
                        <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>