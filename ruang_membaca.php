
<?php
require_once __DIR__ . '/config/koneksi.php';

$id_bacaan = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);


if (!$id_bacaan || $id_bacaan < 1) {
    die("ID bacaan tidak valid.");
}

try {
    // Membuat koneksi PDO
    $database = new Database();
    $conn = $database->getConnection();

   $query = "SELECT bacaan.*, kategori.nama_kategori
          FROM bacaan
          LEFT JOIN kategori
              ON bacaan.id_kategori = kategori.id_kategori
          WHERE bacaan.id_bacaan = :id_bacaan
          LIMIT 1";

$stmt = $conn->prepare($query);
$stmt->execute([
    ':id_bacaan' => $id_bacaan
]);

$bacaan = $stmt->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    error_log($e->getMessage());
    die("Bacaan gagal dimuat. Silakan coba kembali.");
}

if (!$bacaan) {
    die("Bacaan tidak ditemukan.");
}

$title      = $bacaan['judul'];
$author     = $bacaan['penulis'];
$category   = $bacaan['nama_kategori'];
$isi_bacaan = $bacaan['isi_bacaan'];
$gambar     = trim($bacaan['gambar'] ?? '');

// Tentukan lokasi gambar
if ($gambar === '') {
    $gambarPath = 'assets/images/section1.png';
} elseif (
    strpos($gambar, '/') === false &&
    strpos($gambar, '\\') === false
) {
    $gambarPath = 'assets/images/' . $gambar;
} else {
    $gambarPath = $gambar;
}

// Fungsi untuk menampilkan teks dengan aman
function e($value) {
    return htmlspecialchars(
        (string) $value,
        ENT_QUOTES,
        'UTF-8'
    );
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= e($title) ?> - LITERA</title>

    <!-- Font yang digunakan halaman Jelajah -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Baloo+2:wght@600;700&display=swap"
        rel="stylesheet"
    >

    <!-- Ikon -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet"
    >

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#b50340",
                        "primary-dark": "#910031",
                        "primary-container": "#d82b57",
                        surface: "#f8f9ff",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#eff4ff",
                        "surface-container": "#e5eeff",
                        "on-primary": "#ffffff",
                        "on-surface": "#0b1c30",
                        "on-surface-variant": "#5a4043"
                    },
                    fontFamily: {
                        jakarta: ["Plus Jakarta Sans", "sans-serif"],
                        baloo: ["Baloo 2", "sans-serif"]
                    },
                    spacing: {
                        margin: "2rem",
                        "space-xs": "0.25rem",
                        "space-sm": "0.5rem",
                        "space-md": "1rem",
                        "space-lg": "1.5rem",
                        "space-xl": "2.5rem"
                    }
                }
            }
        };
    </script>

    <style>
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: "Plus Jakarta Sans", sans-serif;
            background: #f8f9ff;
            color: #0b1c30;
        }

        .reading-text {
            font-size: 16px;
            line-height: 2;
            color: #34445a;
            overflow-wrap: anywhere;
        }

        .reading-text p {
            margin-bottom: 23px;
        }

        .cover-shadow {
            box-shadow: 0 14px 28px rgba(40, 50, 80, 0.15);
        }

        .reading-progress-full {
            height: 3px;
            width: 100%;
            background: #b50340;
        }

        .material-symbols-outlined {
            font-family: "Material Symbols Outlined";
            font-weight: normal;
            font-style: normal;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            direction: ltr;
            -webkit-font-feature-settings: "liga";
            -webkit-font-smoothing: antialiased;
            font-feature-settings: "liga";
        }
    </style>
</head>

<body class="bg-surface text-on-surface antialiased">

    <!-- HEADER: disamakan dengan halaman Jelajah -->
    <header class="fixed top-0 left-0 right-0 w-full z-50 bg-white/85 backdrop-blur-xl border-b border-gray-100 shadow-[0_1px_8px_rgba(15,23,42,0.04)]">
        <div class="h-16 sm:h-20 max-w-[1240px] mx-auto px-4 sm:px-6 md:px-8 flex items-center justify-between">

            <!-- Logo dan wordmark -->
            <a
                href="jelajah.php"
                class="flex items-center gap-1.5 sm:gap-2 shrink-0 group"
            >
                <img
                    src="assets/images/logo.png"
                    alt="Logo LITERA"
                    class="h-12 sm:h-16 w-auto object-contain"
                    onerror="this.onerror=null;this.src='gambar/logo.png';"
                >

                <span class="font-['Baloo_2'] text-2xl font-bold tracking-tight text-on-surface group-hover:text-primary transition-colors">
                    litera
                </span>
            </a>

            <!-- Navigasi desktop -->
            <div class="flex items-center gap-1 sm:gap-2">

                <nav class="hidden sm:flex items-center gap-1">
                    <a
                        href="jelajah.php"
                        class="bg-primary-container text-white text-sm font-semibold rounded-full px-5 py-2 shadow-sm transition-all"
                    >
                        Jelajah
                    </a>

                    <a
                        href="klub.php"
                        class="text-gray-500 text-sm font-semibold px-5 py-2 rounded-full hover:bg-gray-100 hover:text-primary transition"
                    >
                        Klub
                    </a>

                    <a
                        href="koleksi_bacaan.php"
                        class="text-gray-500 text-sm font-semibold px-5 py-2 rounded-full hover:bg-gray-100 hover:text-primary transition"
                    >
                        Koleksi
                    </a>
                </nav>

                <!-- Profil pengguna -->
                <div class="hidden sm:flex items-center gap-2 pl-2 shrink-0">
                    <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center">
                        <span class="material-symbols-outlined text-white text-[18px]">
                            person
                        </span>
                    </div>

                    <span class="text-sm font-semibold text-on-surface">
                        Pembaca
                    </span>
                </div>
            </div>
        </div>
    </header>

    <!-- READING BAR: ditempatkan tepat di bawah header -->
    <div class="mt-16 sm:mt-20 bg-white border-b border-gray-100">
        <div class="max-w-[1240px] mx-auto px-4 sm:px-6 md:px-8 min-h-[58px] flex items-center justify-between gap-3">

            <a
                href="jelajah.php"
                class="flex items-center gap-1 text-sm text-gray-500 hover:text-primary shrink-0"
            >
                <span class="material-symbols-outlined text-lg">
                    arrow_back
                </span>

                <span class="hidden sm:inline">Kembali</span>
            </a>

            <h2 class="text-sm font-bold text-on-surface text-center truncate min-w-0">
                <?= e($title) ?>
            </h2>

            <button
                type="button"
                onclick="simpanBacaan()"
                class="flex items-center gap-1.5 px-3 md:px-4 py-2 rounded-full bg-[#f2f5ff] text-xs font-semibold text-gray-700 hover:text-primary shrink-0"
            >
                <span
                    id="bookmark-toolbar-icon"
                    class="material-symbols-outlined text-primary text-lg"
                >
                    bookmark_border
                </span>

                <span class="hidden sm:inline" id="bookmark-toolbar-text">
                    Tandai Bacaan
                </span>
            </button>
        </div>

        <div class="reading-progress-full"></div>
    </div>

    <!-- KONTEN UTAMA -->
    <main class="max-w-[920px] mx-auto px-5 md:px-6">

        <!-- INFORMASI BACAAN -->
        <section class="pt-8 md:pt-14 pb-7">
            <div class="bg-white rounded-[24px] p-5 md:p-7 flex flex-col md:flex-row items-center md:items-start gap-6 md:gap-7 shadow-[0_5px_18px_rgba(40,50,80,0.08)]">

                <!-- Cover -->
                <div class="w-[160px] h-[180px] md:w-[180px] md:h-[200px] shrink-0 rounded-[17px] overflow-hidden cover-shadow bg-gray-100">
                    <img
                        src="<?= e($gambarPath) ?>"
                        alt="Cover <?= e($title) ?>"
                        class="w-full h-full object-cover"
                        onerror="this.onerror=null;this.src='assets/images/section1.png';"
                    >
                </div>

                <!-- Detail bacaan -->
                <div class="flex-1 min-w-0 w-full">

                    <div class="mb-3">
                        <span class="inline-block px-3 py-1 rounded-full border border-primary text-primary text-xs font-bold">
                            <?= e($category) ?>
                        </span>
                    </div>

                    <h1 class="text-[27px] md:text-[34px] font-extrabold leading-tight tracking-tight mb-3">
                        <?= e($title) ?>
                    </h1>

                    <p class="text-sm font-bold text-on-surface">
                        <?= e($author) ?>
                    </p>

                    <p class="text-xs text-gray-500 mt-1 mb-4">
                        Penulis
                    </p>

                    <p class="text-sm md:text-[15px] leading-relaxed text-[#687386]">
                        Temukan perspektif baru melalui bacaan ini.
                        Luangkan waktu untuk membaca dan memahami
                        setiap cerita yang disajikan.
                    </p>
                </div>
            </div>
        </section>

        <!-- ISI BACAAN DARI DATABASE -->
        <article class="max-w-[850px] mx-auto pb-10">
            <div class="reading-text">
                <?= nl2br(e($isi_bacaan)) ?>
            </div>

            <!-- DISKUSI KOMUNITAS -->
            <section class="mt-8 bg-[#d9e1ff] rounded-[18px] px-5 py-6 shadow-sm">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-5">

                    <div>
                        <div class="flex items-center gap-2 mb-2">
                            <span class="material-symbols-outlined text-primary text-lg">
                                forum
                            </span>

                            <span class="text-[10px] uppercase tracking-wide font-bold text-primary">
                                Diskusi Komunitas Pembaca
                            </span>
                        </div>

                        <h3 class="text-base font-bold text-on-surface mb-1">
                            Selesai membaca cerita ini?
                        </h3>

                        <p class="text-sm leading-relaxed text-[#59677a]">
                            Bagikan pendapatmu dan diskusikan makna bacaan
                            bersama pembaca lainnya di Klub LITERA.
                        </p>
                    </div>

                    <a
                        href="klub.php"
                        class="shrink-0 inline-flex items-center justify-center gap-2 bg-primary text-white text-sm font-bold px-5 py-3 rounded-full hover:bg-primary-dark transition"
                    >
                        Buka Klub Diskusi

                        <span class="material-symbols-outlined text-lg">
                            arrow_forward
                        </span>
                    </a>
                </div>
            </section>
        </article>
    </main>

    <!-- FOOTER -->
    <footer class="bg-white border-t border-gray-100 mt-8">
        <div class="max-w-[1240px] mx-auto px-5 sm:px-6 md:px-8 py-8">

            <div class="flex flex-col md:flex-row justify-between gap-6">

                <!-- Identitas LITERA -->
                <div>
                    <a
                        href="jelajah.php"
                        class="flex items-center gap-2 mb-3"
                    >
                        <img
                            src="assets/images/logo.png"
                            alt="Logo LITERA"
                            class="h-9 w-auto object-contain"
                            onerror="this.onerror=null;this.src='gambar/logo.png';"
                        >

                        <span class="font-['Baloo_2'] text-2xl font-bold tracking-tight text-on-surface">
                            litera
                        </span>
                    </a>

                    <p class="text-sm text-gray-500 max-w-md leading-relaxed">
                        Ruang baca dan eksplorasi literasi terkurasi
                        untuk mahasiswa dan generasi muda.
                    </p>
                </div>

                <!-- Tautan footer -->
                <div class="flex gap-8">

                    <div class="flex flex-col gap-3">
                        <h3 class="font-bold text-sm">Eksplorasi</h3>

                        <a
                            href="jelajah.php"
                            class="text-sm text-gray-500 hover:text-primary"
                        >
                            Jelajah
                        </a>

                        <a
                            href="koleksi_bacaan.php"
                            class="text-sm text-gray-500 hover:text-primary"
                        >
                            Koleksi
                        </a>
                    </div>

                    <div class="flex flex-col gap-3">
                        <h3 class="font-bold text-sm">Komunitas</h3>

                        <a
                            href="klub.php"
                            class="text-sm text-gray-500 hover:text-primary"
                        >
                            Klub Diskusi
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-100 mt-7 pt-5">
                <p class="text-xs text-gray-500">
                    © 2026 LITERA Indonesia. Seluruh hak cipta dilindungi.
                </p>
            </div>
        </div>
    </footer>

    <!-- NAVIGASI MOBILE -->
    <nav class="fixed bottom-0 left-0 right-0 z-50 md:hidden bg-white border-t border-gray-100 shadow-[0_-2px_12px_rgba(15,23,42,0.08)]">
        <div class="h-16 flex items-center justify-around px-4">

            <a
                href="jelajah.php"
                class="flex flex-col items-center justify-center gap-0.5 min-w-[64px] text-primary"
            >
                <span
                    class="material-symbols-outlined text-[22px]"
                    style="font-variation-settings: 'FILL' 1;"
                >
                    explore
                </span>
                <span class="text-[11px] font-semibold">Jelajah</span>
            </a>

            <a
                href="klub.php"
                class="flex flex-col items-center justify-center gap-0.5 min-w-[64px] text-on-surface-variant hover:text-primary transition-colors"
            >
                <span class="material-symbols-outlined text-[22px]">
                    groups
                </span>
                <span class="text-[11px] font-semibold">Klub</span>
            </a>

            <a
                href="koleksi_bacaan.php"
                class="flex flex-col items-center justify-center gap-0.5 min-w-[64px] text-on-surface-variant hover:text-primary transition-colors"
            >
                <span class="material-symbols-outlined text-[22px]">
                    bookmark
                </span>
                <span class="text-[11px] font-semibold">Koleksi</span>
            </a>
        </div>
    </nav>

    <script>
        function simpanBacaan() {
            const icon = document.getElementById("bookmark-toolbar-icon");
            const text = document.getElementById("bookmark-toolbar-text");

            const isSaved = icon.textContent.trim() === "bookmark";

            if (isSaved) {
                icon.textContent = "bookmark_border";
                icon.style.fontVariationSettings = "'FILL' 0";

                if (text) {
                    text.textContent = "Tandai Bacaan";
                }
            } else {
                icon.textContent = "bookmark";
                icon.style.fontVariationSettings = "'FILL' 1";

                if (text) {
                    text.textContent = "Tersimpan";
                }
            }

            // Catatan: tombol ini baru mengubah tampilan.
            // Belum menyimpan data ke database.
        }
    </script>

</body>
</html>