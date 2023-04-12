<?php
$koneksi = mysqli_connect("localhost", "root", "", "");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
} else {
    // echo "Koneksi database berhasil";
}



// function peringatan($pesan)
// {

//     if ($pesan == "hapus") {
//         echo "<div class='alert alert-success' role='alert'>Data Berhasil Dihapus</div>";
//     } elseif ($pesan == "edit") {
//         echo "<div class='alert alert-success' role='alert'>Data Berhasil Diedit</div>";
//     } elseif ($pesan == "kosong") {
//         echo "<div class='alert alert-danger' role='alert'>Masih Ada Data Kosong</div>";
//     } elseif ($pesan == "tipe") {
//         echo "<div class='alert alert-danger' role='alert'>Tipe File Tidak Support</div>";
//     } elseif ($pesan == "ukuran") {
//         echo "<div class='alert alert-danger' role='alert'>Ukuran File Max 100MB</div>";
//     } elseif ($pesan == "username") {
//         echo "<div class='alert alert-danger' role='alert'>Username Sudah Dipakai!</div>";
//     } elseif ($pesan == "password") {
//         echo "<div class='alert alert-danger' role='alert'>Password Tidak Sama!</div>";
//     } elseif ($pesan == "tambahkan") {
//         echo "<div class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";
//     } elseif ($pesan == "kode-tambah") {
//         echo "<div class='alert alert-success' role='alert'>Kode Berhasil Disimpan</div>";
//     }
// }

function ceklogin($pesan)
{
    if ($pesan == 'kosong') {
        echo "<div class='alert alert-danger' role='alert'>
            Username/Password Kosong!
        </div>";
    } elseif ($pesan == 'notfound') {
        echo "<div class='alert alert-danger' role='alert'>
            Username/Password Salah!
        </div>";
    } elseif ($pesan == 'login') {
        echo "<div class='alert alert-warning' role='alert'>
            Silakan Login Terlebih Dahulu, Jika Belum Punya Silahkan Daftar
        </div>";
    } elseif ($pesan == 'logout') {
        echo "<div class='alert alert-success' role='alert'>
            Anda Telah Logout
        </div>";
    } elseif ($pesan == 'berhasil') {
        echo "<div class='alert alert-success' role='alert'>
            Login Berhasil
        </div>";
    } elseif ($pesan == "tambah") {
        echo "<div class='alert alert-success d-flex align-items-center' role='alert'>Pendaftaran Berhasil, Silahkan login</div>";
    }
}

function cekSession()
{
    if (!isset($_SESSION['id'])) {
        header("location:../login?pesan=login");
    }
}

function cekCookie()
{
    if (!isset($_COOKIE['id_mhs'])) {
        header("location:../login?pesan=login");
    }
}
?>
<!-- <script>
    window.setTimeout(function() {
        $(".alert")
            .fadeTo(500, 0)
            .slideUp(500, function() {
                $(this).remove();
            });
    }, 3000);
</script> -->