
<?php
session_start();

require_once __DIR__ . '/../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../login.php');
    exit;
}

$userIdentifier = trim($_POST['userIdentifier'] ?? '');
$password = $_POST['password'] ?? '';

if ($userIdentifier === '' || $password === '') {
    echo "<script>
        alert('Email/nama pengguna dan password wajib diisi!');
        window.location='../login.php';
    </script>";
    exit;
}

try {
    $database = new Database();
    $conn = $database->getConnection();

    // Cari berdasarkan email ATAU nama pengguna
    $sql = "SELECT * FROM pengguna
            WHERE email = :email
            OR nama_pengguna = :nama_pengguna";

    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':email' => $userIdentifier,
        ':nama_pengguna' => $userIdentifier
    ]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['kata_sandi'])) {
        session_regenerate_id(true);

        $_SESSION['id_pengguna'] = $user['id_pengguna'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];

        header('Location: ../jelajah.php');
        exit;
    }

    echo "<script>
        alert('Email/nama pengguna atau password salah!');
        window.location='../login.php';
    </script>";
    exit;

} catch (PDOException $e) {
    error_log($e->getMessage());

    echo "<script>
        alert('Terjadi kesalahan saat login. Silakan coba kembali.');
        window.location='../login.php';
    </script>";
    exit;
}
?>
