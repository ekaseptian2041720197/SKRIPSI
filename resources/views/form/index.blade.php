<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/form/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,700&family=Manrope:wght@700&display=swap"
        rel="stylesheet">

</head>

<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img"
                    style="display: flex; justify-content: center; align-items: center; height: 100vh;">
                    <img src="assets/img/form/logo paud.png" alt="" style="width: 70%;">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2>Pendaftaran Peserta Didik Baru</h2>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap:</label>
                            <input type="text" name="nama" id="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK:</label>
                            <input type="text" name="nik" id="nik" required>
                        </div>
                       
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Jenis Kelamin:</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" class="radio-button" checked>
                                <label for="male">Laki-Laki</label>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female" class="radio-button">
                                <label for="female">Perempuan</label>
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label for="address">Alamat:</label>
                            <input type="text" name="address" id="address" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">Tempat:</label>
                                <input type="text" name="address" id="address">
                            </div>
                            <div class="form-group">
                                <label for="birth_date">Tanggal Lahir:</label>
                                <input type="date" name="birth_date" id="birth_date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama:</label>
                            <input type="text" name="agama" id="agama">
                        </div>
                        <div class="form-group">
                            <label for="photo">Foto 3x4:</label>
                            <input type="file" name="photo" id="photo" accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Nomor HP Orang Tua / Wali:</label>
                            <input type="tel" name="phone" id="phone" pattern="[0-9]{10,14}" />
                        </div>
                        <div class="form-submit">
                            <input type="reset" value="Reset Semua" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Kirim Formulir" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
                

    <!-- JS -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/form/main.js') }}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
