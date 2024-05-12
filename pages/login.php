<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form with Background Video</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS untuk membuat video sebagai latar belakang */
        .main-banner {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        #bg-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .form-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: calc(100% - 40px);
            margin: auto;
        }

        .form-container h2 {
            margin-bottom: 20px;
            color: #007bff;
            margin-top: 5px;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 10px;
        }

        .logo-container img {
            max-width: 200px;
            height: auto;
        }

        .register-link {
            margin-top: 10px;
        }

        /* Responsif */
        @media (max-width: 576px) {
            .form-container {
                max-width: 90%;
                padding: 10px;
            }

            .logo-container img {
                max-width: 150px;
            }
        }
    </style>
</head>

<body class="text-center">
    <!-- Letakkan elemen video di luar div main-banner -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="../assets/images/treadmill.mp4" type="video/mp4" />
        </video>

        <!-- Letakkan form login di dalam div form-container -->
        <div class="form-container">
            <div class="logo-container">
                <img src="../assets/images/waber logo.png" alt="Waber Logo">
            </div>
            <h6 style="color: #000000;">Supply Chain Management</h6>

            <form action="../action/login.php" method="POST">
                <br>
                <div class="form-floating">
                    <input name="username" type="text" class="form-control" id="floatingInput" placeholder="Username" required>
                    <br>
                </div>
                <div class="form-floating">
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <br>
                </div>
                <button class="btn" type="submit" style="background-color: #ed563b; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">Login</button>
            </form>
            <div class="register-link">
                <a href="../pages/register.php">Don't have an account? Register here</a>
                <h6 style="color: red; font-size: 0.9em;">* Hanya Orang yang Berkepentingan yang Bisa Login.</h6>

            </div>
        </div>
    </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>