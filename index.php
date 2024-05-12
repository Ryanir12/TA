<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Waber Sport & Gym</title>
    <style>
        .logo {
            font-size: 24px;
            text-decoration: none;
            color: black;
            display: inline-block;
        }

        .logo em {
            font-style: normal;
        }

        @media screen and (max-width: 600px) {
            .logo {
                font-size: 18px;
            }
        }

        @media screen and (max-width: 375px),
        (max-height: 667px) {
            .logo {
                font-size: 14px;
            }
        }



        .section {
            padding: 50px 0;
            text-align: center;
        }

        .section-heading h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .section-heading p {
            font-size: 18px;
            color: #666;
            margin-bottom: 40px;
        }

        .section-heading img {
            margin-bottom: 40px;
        }

        /* CSS untuk form BMI */
        /* CSS untuk section dengan class 'bmi-section' */

        /* Gaya untuk section BMI Calculator */
        .bmi-section {
            background-color: #333;
            /* Warna latar belakang */
            color: #fff;
            /* Warna teks */
            padding: 60px 0;
            /* Padding atas dan bawah */
        }

        .bmi-section h2 {
            margin-bottom: 30px;
            /* Margin bawah untuk judul */
        }

        .bmi-section p {
            margin-bottom: 20px;
            /* Margin bawah untuk paragraf */
        }

        /* Gaya untuk judul */
        .bmi-section .section-heading h2 {
            font-size: 36px;
            /* Ukuran font untuk judul */
        }

        /* Gaya untuk gambar dekoratif */
        .bmi-section img {
            display: block;
            margin: 0 auto 30px;
            /* Margin bawah dan tengah untuk gambar */
        }

        /* Gaya untuk deskripsi tabel */
        .bmi-section .table-description {
            margin-bottom: 20px;
            /* Margin bawah untuk deskripsi tabel */
        }

        /* Gaya untuk tabel BMI */
        .bmi-section table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            /* Margin bawah untuk tabel */
        }

        .bmi-section table th,
        .bmi-section table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        .bmi-section table th {

            font-weight: bold;
        }

        /* Gaya untuk form kalkulator */
        .bmi-section .form-column {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            /* Mengisi seluruh ruang yang tersedia dalam kolom */
        }

        .bmi-section form {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            /* Margin bawah untuk form */
        }

        .bmi-section label {
            margin-bottom: 5px;
        }

        .bmi-section input,
        .bmi-section select {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
        }

        .bmi-section input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .bmi-section input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Gaya untuk hasil BMI dan status berat badan */
        .bmi-section .form-column input[type="text"] {
            margin-bottom: 10px;
        }

        /* Aturan responsif */
        @media (max-width: 768px) {
            .bmi-section .row {
                flex-direction: column;
                /* Ubah ke tata letak satu kolom saat lebar layar lebih kecil dari 768px */
            }

            .bmi-section .col-lg-6 {
                flex: 0 0 100%;
                /* Gunakan seluruh lebar saat lebar layar lebih kecil dari 768px */
                max-width: 100%;
            }
        }
    </style>
    <!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Waber<em> Sport & Gym</em></a>


                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#features">Tentang</a></li>
                            <li class="scroll-to-section"><a href="#our-classes">Produk</a></li>
                            <li class="scroll-to-section"><a href="#schedule">BMI Calculator</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Lokasi</a></li>
                            <li class="main-button"><a href="pages/login.php">Sign Up</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/treadmill.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h2>Supply Chain <em>Management</em></h2>
                <h6>Distribusi Alat Fitness Berbasis Web</h6>
                <div class="main-button scroll-to-section">
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Tentang <em>Perusahaan</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>Training Studio is free CSS template for gyms and fitness centers. You are allowed to use this layout for your business website.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Basic Fitness</h4>
                                <p>Please do not re-distribute this template ZIP file on any template collection website. This is not allowed.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>New Gym Training</h4>
                                <p>If you wish to support TemplateMo website via PayPal, please feel free to contact us. We appreciate it a lot.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="third gym training">
                            </div>
                            <div class="right-content">
                                <h4>Basic Muscle Course</h4>
                                <p>Credit goes to <a rel="nofollow" href="https://www.pexels.com" target="_blank">Pexels website</a> for images and video background used in this HTML template.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>Advanced Muscle Course</h4>
                                <p>You may want to browse through <a rel="nofollow" href="https://templatemo.com/tag/digital-marketing" target="_parent">Digital Marketing</a> or <a href="https://templatemo.com/tag/corporate">Corporate</a> HTML CSS templates on our website.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Yoga Training</h4>
                                <p>This template is built on Bootstrap v4.3.1 framework. It is easy to adapt the columns and sections.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="gym training">
                            </div>
                            <div class="right-content">
                                <h4>Body Building Course</h4>
                                <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>dibuat <em>oleh :</em></h2>
                        <br>
                        <ul style="color: #ffffff;">
                            <li>Ryan Ilham Ramadhan</li>
                            <li>21101152600047</li>
                            <li>D3 Manajemen Informatika</li>
                            <li>Universitas Putra Indonesia "YPTK" Padang</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Products</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <li><a href='#tabs-1'><img src="assets/images/tabs-first-icon.png" alt="">Eleptical Bike and Crosstrainer</a></li>
                        <li><a href='#tabs-2'><img src="assets/images/tabs-first-icon.png" alt="">Fittness Bike</a></a></li>
                        <li><a href='#tabs-3'><img src="assets/images/tabs-first-icon.png" alt="">Home Gym</a></a></li>
                        <li><a href='#tabs-4'><img src="assets/images/tabs-first-icon.png" alt="">Treadmill and Walking Pad</a></a></li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="assets/images/training-image-01.jpg" alt="First Class">
                            <h4>First Training Class</h4>
                            <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                            <div class="main-button">
                            </div>
                        </article>
                        <article id='tabs-2'>
                            <img src="assets/images/training-image-02.jpg" alt="Second Training">
                            <h4>Second Training Class</h4>
                            <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <div class="main-button">

                            </div>
                        </article>
                        <article id='tabs-3'>
                            <img src="assets/images/training-image-03.jpg" alt="Third Class">
                            <h4>Third Training Class</h4>
                            <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                            <div class="main-button">

                            </div>
                        </article>
                        <article id='tabs-4'>
                            <img src="assets/images/training-image-04.jpg" alt="Fourth Training">
                            <h4>Fourth Training Class</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
                            <div class="main-button">

                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->

    <section class="section bmi-section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>BMI <em>Calculator</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p class="paragraph-1" style="color: white;">BMI adalah singkatan dari Body Mass Index (Indeks Massa Tubuh). Ini adalah metode yang umum digunakan untuk mengevaluasi apakah seseorang memiliki berat badan yang sehat berdasarkan tinggi dan berat badan.</p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <!-- Tabel untuk menampilkan kategori status berat badan -->
                    <p style="color: white;">Tabel berikut menunjukkan kategori status berat badan berdasarkan nilai Body Mass Index (BMI).</p>
                    <br>
                    <table>
                        <thead>
                            <tr>
                                <th>BMI</th>
                                <th>Weight Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Di Bawah 18.5</td>
                                <td>Underweight (Kurus)</td>
                            </tr>
                            <tr>
                                <td>18.5 – 24.9</td>
                                <td>Healthy (Normal)</td>
                            </tr>
                            <tr>
                                <td>25.0 – 29.9</td>
                                <td>Overweight (Gemuk)</td>
                            </tr>
                            <tr>
                                <td>30.0 atau lebih</td>
                                <td>Obese (Obesitas)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <!-- Form BMI -->
                    <div class="form-column">
                        <p class="paragraph-2" style="color: white;">Silakan gunakan kalkulator di bawah ini untuk menghitung BMI Anda dan mengetahui status berat badan Anda.</p>
                        <form id="bmi-form" action="index.php" method="post">
                            <label for="height" style="color: white;">Tinggi (cm):</label>
                            <input type="text" id="height" name="height" placeholder="Masukkan tinggi Anda dalam cm" required>

                            <label for="weight" style="color: white;">Berat (kg):</label>
                            <input type="text" id="weight" name="weight" placeholder="Masukkan berat Anda dalam kg" required>

                            <label for="age" style="color: white;">Umur:</label>
                            <input type="text" id="age" name="age" placeholder="Masukkan usia Anda" required>

                            <label for="sex" style="color: white;">Jenis Kelamin:</label>
                            <select id="sex" name="sex" required>
                                <option value="male">Laki-laki</option>
                                <option value="female">Perempuan</option>
                            </select>

                            <label for="activity-factor" style="color: white;">Faktor Aktivitas:</label>
                            <select id="activity-factor" name="activity-factor" required>
                                <option value="1.2">Sedentary (Tidak Aktif)</option>
                                <option value="1.375">Lightly Active (Aktif Ringan)</option>
                                <option value="1.55">Moderately Active (Aktif Sedang)</option>
                                <option value="1.725">Very Active (Sangat Aktif)</option>
                                <option value="1.9">Extra Active (Ekstra Aktif)</option>
                            </select>

                            <input type="submit" value="Hitung BMI">
                        </form>
                    </div>
                    <div class="form-column">
                        <label for="hasil_bmi" style="color: white;">BMI Anda:</label>
                        <input type="text" id="hasil_bmi" name="hasil_bmi" placeholder="BMI Anda" readonly>
                        <label for="status_berat_badan" style="color: white;">Status Berat Badan:</label>
                        <input type="text" id="status_berat_badan" name="status_berat_badan" placeholder="Status Berat Badan" readonly>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Fungsi untuk menghitung BMI dan menampilkan hasilnya
        function hitungBMI() {
            // Mengambil nilai-nilai tinggi, berat, umur, jenis kelamin, dan faktor aktivitas dari form
            var tinggi = parseFloat(document.getElementById('height').value);
            var berat = parseFloat(document.getElementById('weight').value);
            var umur = parseFloat(document.getElementById('age').value);
            var sex = document.getElementById('sex').value;
            var faktorAktivitas = parseFloat(document.getElementById('activity-factor').value);

            // Validasi input numerik
            if (isNaN(tinggi) || isNaN(berat) || isNaN(umur)) {
                alert("Harap masukkan nilai numerik untuk tinggi, berat, dan umur.");
                return;
            }

            // Menghitung BMI
            var bmi = berat / Math.pow(tinggi / 100, 2);

            // Menentukan status berat badan berdasarkan BMI
            var statusBeratBadan;
            if (bmi < 18.5) {
                statusBeratBadan = "Underweight (Kurus)";
            } else if (bmi >= 18.5 && bmi < 24.9) {
                statusBeratBadan = "Normal Weight (Berat Badan Normal)";
            } else if (bmi >= 24.9 && bmi < 29.9) {
                statusBeratBadan = "Overweight (Kelebihan Berat Badan)";
            } else {
                statusBeratBadan = "Obese (Obesitas)";
            }

            // Mengisi nilai-nilai hasil ke dalam input
            document.getElementById('hasil_bmi').value = bmi.toFixed(2);
            document.getElementById('status_berat_badan').value = statusBeratBadan;
        }

        // Menambahkan event listener untuk form
        document.getElementById('bmi-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Menghentikan pengiriman form
            hitungBMI(); // Memanggil fungsi untuk menghitung BMI
        });
    </script>




    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 style="text-align: center; color: #ed563b;">Lokasi</h2> <!-- Tambahkan style untuk warna dan pemformatan teks "Lokasi" -->
                    <br> <!-- Sisipkan baris kosong di antara teks "Lokasi" dan iframe -->
                    <div id="map">
                        <!-- Lebarkan iframe sesuai keinginan Anda -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.7340343126346!2d100.32602001476956!3d-0.8268197992159634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4c16f58e2aba5%3A0x7476d69e5baea6c6!2sWaber%20sport%20%26%20gym!5e0!3m2!1sen!2sid!4v1647751153990!5m2!1sen!2sid" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- ***** Contact Us Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="mt-3 text-muted">&copy; <?php echo date("Y"); ?> Copyright Ryan</p>
                    <!-- You shall support us a little via PayPal to info@templatemo.com -->

                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body>

</html>