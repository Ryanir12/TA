<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .video-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        #bg-video {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
        }

        .container {
            position: relative;
            z-index: 1;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
            /* Adjust opacity here */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .card-header h3 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #ed563b;
            text-align: center;
        }

        .card-body {
            padding: 15px;
        }

        .form-control {
            font-size: 16px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .btn-primary {
            background-color: #ed563b;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 18px;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #ed563b;
        }

        .text-danger {
            color: #ed563b;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="video-container">
        <video autoplay muted loop id="bg-video">
            <source src="../assets/images/treadmill.mp4" type="video/mp4" />
        </video>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Register</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_POST['error'])) {
                            echo "<p class='text-danger text-center'>" . $_POST['error'] . "</p>";
                        }
                        ?>
                        <form action="../action/register.php" method="POST">
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password:</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                            </div>
                            <div class="form-group">
                                <label for="level">Level:</label>
                                <select class="form-control" id="level" name="level" required>
                                    <option value="admin">Admin</option>
                                    <option value="pimpinan">Pimpinan</option>
                                    <option value="karyawan">Karyawan</option>
                                    <option value="supplier">Supplier</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>