
<?php
session_start();

require_once __DIR__ . '/../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../register.php');
    exit;
}

$nama_lengkap  = trim($_POST['nama_lengkap'] ?? '');
$nama_pengguna = trim($_POST['nama_pengguna'] ?? '');
$email         = trim($_POST['email'] ?? '');
$password      = $_POST['kata_sandi'] ?? '';

if (
    $nama_lengkap === '' ||
    $nama_pengguna === '' ||
    $email === '' ||
    $password === ''
) {
    echo "<script>
        alert('Semua kolom wajib diisi!');
        window.location='../register.php';
    </script>";
    exit;
}

// Hash password
$password_hashed = password_hash($password, PASSWORD_DEFAULT);

try {
    // Membuat koneksi PDO
    $database = new Database();
    $conn = $database->getConnection();

    // Cek email atau nama pengguna
    $sql_cek = "SELECT COUNT(*) FROM pengguna
                WHERE email = :email
                OR nama_pengguna = :nama_pengguna";

    $stmt_cek = $conn->prepare($sql_cek);
    $stmt_cek->execute([
        ':email' => $email,
        ':nama_pengguna' => $nama_pengguna
    ]);

    if ($stmt_cek->fetchColumn() > 0) {
        echo "<script>
            alert('Email atau Nama Pengguna sudah digunakan!');
            window.location='../register.php';
        </script>";
        exit;
    }

    // Simpan pengguna baru
    $sql_insert = "INSERT INTO pengguna
        (nama_lengkap, nama_pengguna, email, kata_sandi)
        VALUES (:nama_lengkap, :nama_pengguna, :email, :kata_sandi)";

    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->execute([
        ':nama_lengkap' => $nama_lengkap,
        ':nama_pengguna' => $nama_pengguna,
        ':email' => $email,
        ':kata_sandi' => $password_hashed
    ]);

    echo "<script>
        alert('Pendaftaran berhasil! Silakan login.');
        window.location='../login.php';
    </script>";
    exit;

} catch (PDOException $e) {
    error_log($e->getMessage());

    echo "<script>
        alert('Pendaftaran gagal. Silakan coba kembali.');
        window.location='../register.php';
    </script>";
    exit;
}
?>
