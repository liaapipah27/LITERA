
<?php
session_start();

require_once __DIR__ . '/config/koneksi.php';

// Pastikan pengguna sudah login
if (!isset($_SESSION['id_pengguna'])) {
    header('Location: login.php');
    exit;
}

$id_pengguna = $_SESSION['id_pengguna'];

$pageTitle = "Koleksi Saya - LITERA";

try {
    // Koneksi menggunakan PDO
    $database = new Database();
    $conn = $database->getConnection();

    // Ambil bacaan yang disimpan oleh pengguna
    $query = "SELECT b.*
              FROM bacaan_tersimpan bt
              JOIN bacaan b ON bt.id_bacaan = b.id_bacaan
              WHERE bt.id_pengguna = :id_pengguna";

    $stmt = $conn->prepare($query);
    $stmt->execute([
        ':id_pengguna' => $id_pengguna
    ]);

    $daftarBacaan = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    error_log($e->getMessage());
    die("Koleksi bacaan gagal dimuat. Silakan coba kembali.");
}
?>


<!DOCTYPE html>
<html class="h-screen overflow-hidden" lang="id">

<head>
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="web_standard" name="shell-type">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700;800&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <style>
        @layer base {
            html, body {
                margin: 0;
                padding: 0;
                height: 100%;
                overflow: hidden;
            }
            body {
                overscroll-behavior: none;
            }
            main > :first-child {
                margin-top: 0 !important;
            }
            main > :last-child {
                margin-bottom: 0 !important;
            }
        }
        ::-webkit-scrollbar {
            display: none;
        }
        .font-baloo {
            font-family: 'Baloo 2', cursive, sans-serif;
        }

        /* Filter aktif */
        .filter-tab {
            border: 1px solid transparent;
        }
        .filter-tab.active {
            background-color: #b50340 !important;
            color: #ffffff !important;
            border: 1px solid #b50340 !important;
            box-shadow: 0 2px 8px rgba(181, 3, 64, 0.18) !important;
        }
        .filter-tab:focus-visible {
            outline: 2px solid #b50340;
            outline-offset: 2px;
        }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-tertiary-fixed-variant": "#92002a",
                        "inverse-on-surface": "#eaf1ff",
                        "primary-fixed": "#ffd9dc",
                        "on-primary": "#ffffff",
                        "on-background": "#0b1c30",
                        "surface-container": "#e5eeff",
                        "on-error": "#ffffff",
                        "background": "#f8f9ff",
                        "on-secondary-fixed": "#131b2e",
                        "surface": "#f8f9ff",
                        "primary-fixed-dim": "#ffb2ba",
                        "surface-container-highest": "#d3e4fe",
                        "on-secondary-fixed-variant": "#3f465c",
                        "tertiary": "#b60237",
                        "tertiary-fixed-dim": "#ffb2b7",
                        "secondary-fixed": "#dae2fd",
                        "surface-container-low": "#eff4ff",
                        "surface-container-lowest": "#ffffff",
                        "secondary-container": "#dae2fd",
                        "on-primary-fixed": "#400011",
                        "on-tertiary-fixed": "#40000d",
                        "primary": "#b50340",
                        "tertiary-container": "#da2a4d",
                        "surface-variant": "#d3e4fe",
                        "on-surface-variant": "#5a4043",
                        "surface-bright": "#f8f9ff",
                        "on-primary-fixed-variant": "#910031",
                        "secondary-fixed-dim": "#bec6e0",
                        "error": "#ba1a1a",
                        "secondary": "#565e74",
                        "outline": "#8e6f72",
                        "surface-container-high": "#dce9ff",
                        "on-primary-container": "#fff8f7",
                        "surface-dim": "#cbdbf5",
                        "on-secondary": "#ffffff",
                        "on-error-container": "#93000a",
                        "inverse-surface": "#213145",
                        "inverse-primary": "#ffb2ba",
                        "on-secondary-container": "#5c647a",
                        "on-tertiary-container": "#fff8f8",
                        "tertiary-fixed": "#ffdadb",
                        "on-tertiary": "#ffffff",
                        "surface-tint": "#bb0d44",
                        "outline-variant": "#e2bec0",
                        "on-surface": "#0b1c30"
                    },
                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px"
                    },
                    spacing: {
                        "gutter": "1.5rem",
                        "space-sm": "0.5rem",
                        "gutter-mobile": "1rem",
                        "margin-mobile": "1rem",
                        "space-xs": "0.25rem",
                        "space-xl": "2.5rem",
                        "space-md": "1rem",
                        "space-lg": "1.5rem",
                        "margin": "2rem"
                    },
                    fontFamily: {
                        "display-lg-mobile": ["Plus Jakarta Sans"],
                        "headline-sm": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "body-sm": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"],
                        "label-sm": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "display-lg": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "label-lg": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"]
                    },
                    fontSize: {
                        "display-lg-mobile": ["32px", { lineHeight: "40px", letterSpacing: "-0.02em", fontWeight: "800" }],
                        "headline-sm": ["18px", { lineHeight: "24px", fontWeight: "600" }],
                        "body-md": ["14px", { lineHeight: "22px", fontWeight: "400" }],
                        "body-sm": ["12px", { lineHeight: "18px", fontWeight: "400" }],
                        "label-md": ["12px", { lineHeight: "16px", letterSpacing: "0.02em", fontWeight: "600" }],
                        "label-sm": ["11px", { lineHeight: "14px", letterSpacing: "0.04em", fontWeight: "700" }],
                        "body-lg": ["16px", { lineHeight: "26px", fontWeight: "400" }],
                        "headline-lg": ["32px", { lineHeight: "40px", letterSpacing: "-0.015em", fontWeight: "700" }],
                        "display-lg": ["48px", { lineHeight: "56px", letterSpacing: "-0.02em", fontWeight: "800" }],
                        "headline-lg-mobile": ["24px", { lineHeight: "32px", letterSpacing: "-0.01em", fontWeight: "700" }],
                        "label-lg": ["14px", { lineHeight: "20px", fontWeight: "600" }],
                        "headline-md": ["22px", { lineHeight: "28px", fontWeight: "600" }]
                    }
                }
            }
        };
    </script>
</head>

<body class="bg-surface text-on-surface antialiased h-screen w-screen overflow-hidden flex flex-col justify-between select-none">

   
<!-- NAVBAR -->
<header class="fixed top-0 left-0 right-0 w-full z-50 bg-surface/85 backdrop-blur-xl shadow-[0_1px_8px_rgba(15,23,42,0.04)]">
    <div class="h-16 sm:h-20 max-w-[1240px] mx-auto px-4 sm:px-6 md:px-margin flex items-center justify-between">

        <!-- Logo -->
        <a class="flex items-center gap-1.5 sm:gap-space-sm group"
           href="jelajah.php">
            <img
                alt="Logo Litera"
                class="h-12 sm:h-16 w-auto object-contain"
                src="assets/images/logo.png"
            >
            <span class="font-['Baloo_2'] text-2xl font-bold tracking-tight text-on-surface group-hover:text-primary transition-colors">
                litera
            </span>
        </a>

        <!-- Navigasi & Profil -->
        <div class="flex items-center gap-1 sm:gap-space-lg">

            <!-- Navigasi -->
            <nav class="hidden sm:flex items-center gap-space-xs">

                <a
                    class="text-on-surface-variant font-label-lg text-label-lg px-5 py-2 rounded-full hover:bg-surface-container hover:text-on-surface transition-all"
                    href="jelajah.php"
                >
                    Jelajah
                </a>

                <a
                    class="text-on-surface-variant font-label-lg text-label-lg px-5 py-2 rounded-full hover:bg-surface-container hover:text-on-surface transition-all"
                    href="klub.php"
                >
                    Klub
                </a>

                <!-- Koleksi aktif: pink -->
                <a
                    class="font-label-lg text-label-lg rounded-full px-5 py-2 shadow-sm transition-all"
                    style="background-color:#d82b57;color:#ffffff;"
                    href="koleksi.php"
                    aria-current="page"
                >
                    Koleksi
                </a>

            </nav>

            <!-- Profil -->
            <a
                class="flex items-center gap-1 sm:gap-space-sm pl-0 sm:pl-space-xs hover:opacity-80 transition-opacity"
                href="#"
            >
                <div class="w-8 h-8 rounded-full flex items-center justify-center"
                     style="background-color:#b50340;">
                    <span class="material-symbols-outlined text-white text-[18px]">
                        person
                    </span>
                </div>

                <span class="font-label-md text-label-md text-on-surface hidden sm:inline-block">
                
                </span>
            </a>

        </div>
    </div>
</header>


    <!-- MAIN -->
    <main class="flex-1 flex flex-col w-full max-w-[1280px] mx-auto overflow-hidden px-8 pt-24 pb-5">
        <div class="flex flex-col w-full h-full overflow-hidden justify-start p-6 gap-5">

            <!-- TOP HEADER AREA -->
            <div class="flex flex-col gap-4 flex-shrink-0">
                <div class="flex flex-col gap-1">
                    <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">
                        Koleksi Bacaan
                    </h1>
                    <p class="font-body-md text-body-md text-secondary">
                        Koleksi buku bacaan favorit dan daftar bacaan yang sedang kamu ikuti.
                    </p>
                </div>

                <!-- SEARCH & FILTER CONTROLS -->
                <div class="flex items-center justify-between gap-4">
                    <div class="flex items-center gap-2" id="filter-pills">
                        <button class="filter-tab active px-4 py-1.5 rounded-full font-label-md text-label-md transition-all bg-surface-container text-secondary" data-filter="all">
                            Semua
                        </button>
                        <button class="filter-tab px-4 py-1.5 rounded-full font-label-md text-label-md transition-all bg-surface-container text-secondary hover:bg-surface-container-high" data-filter="unread">
                            Belum Dibaca
                        </button>
                        <button class="filter-tab px-4 py-1.5 rounded-full font-label-md text-label-md transition-all bg-surface-container text-secondary hover:bg-surface-container-high" data-filter="completed">
                            Selesai Dibaca
                        </button>
                    </div>
                </div>
            </div>

            <!-- MAIN SECTION: CARDS GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 flex-shrink-0 items-start overflow-y-auto max-h-[calc(100vh-220px)] pr-2">
               <?php if (count($daftarBacaan) > 0): ?>
    <?php foreach ($daftarBacaan as $buku): ?>
                        <!-- CARD ITEM -->
                        <div class="bg-surface-container-lowest rounded-2xl p-5 shadow-sm hover:shadow-md transition-all flex flex-col justify-between group overflow-hidden relative">
                            <div class="flex gap-4 items-start">
                                <div class="relative w-28 aspect-[3/4] rounded-xl overflow-hidden flex-shrink-0 bg-surface-container">
                                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                                         src="assets/images/<?= htmlspecialchars($buku['cover_image'] ?? 'cover_lia.jpeg') ?>" 
                                         alt="<?= htmlspecialchars($buku['judul']) ?>">
                                </div>
                                <div class="flex flex-col gap-1.5 flex-1 min-w-0">
                                    <span class="text-xs font-semibold text-primary">
                                        <?= htmlspecialchars($buku['kategori'] ?? 'Fiksi') ?>
                                    </span>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface line-clamp-1 group-hover:text-primary transition-colors">
                                        <?= htmlspecialchars($buku['judul']) ?>
                                    </h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 leading-relaxed">
                                        <?= htmlspecialchars($buku['deskripsi'] ?? 'Masa depan adalah salah satunya. Kita sering membicarakannya seolah-olah sudah tahu bentuknya.') ?>
                                    </p>
                                </div>
                            </div>

                            <div class="pt-4 flex items-center justify-between border-t border-surface-container/50 mt-4">
                                <a class="inline-flex items-center gap-2 bg-primary text-white font-label-md text-label-md px-5 py-2 rounded-full hover:opacity-95 shadow-sm active:scale-95 transition-all" 
                                   href="ruang_membaca.php?id=<?= $buku['id_bacaan'] ?>">
                                    <span class="material-symbols-outlined text-[18px]">menu_book</span>
                                    <span>Baca Buku</span>
                                </a>
                                <button class="w-8 h-8 rounded-full bg-surface hover:bg-surface-container flex items-center justify-center text-primary transition-colors" title="Bookmark">
                                    <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">bookmark</span>
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-span-full py-12 text-center text-on-surface-variant font-body-md">
                        Kamu belum menyimpan bacaan apa pun ke koleksi pribadi.
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </main>
 <!-- FOOTER LITERA -->
<footer class="w-full bg-surface-container-low text-on-surface-variant">
    <div class="max-w-[1240px] mx-auto px-margin-mobile lg:px-margin py-space-xl">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
           <!-- Logo & Deskripsi -->
<div class="md:col-span-5 flex flex-col items-start gap-3 pl-0">
    <a href="jelajah.php" class="flex items-center gap-2 group shrink-0">
        <img
            alt="Logo Litera"
            class="h-11 w-auto object-contain"
            src="assets/images/logo.png"
        >
        <span class="font-['Baloo_2'] text-2xl font-bold tracking-tight text-on-surface group-hover:text-primary transition-colors">
            litera
        </span>
    </a>

    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed w-full max-w-sm">
        Platform ruang baca dan eksplorasi literasi terkurasi untuk mahasiswa dan generasi muda pembaca kritis.
    </p>
</div>

            <!-- Menu Eksplorasi -->
            <div class="md:col-span-3 md:col-start-7 flex flex-col gap-space-sm">
                <span class="font-label-lg text-label-lg text-on-surface font-bold">Eksplorasi</span>
                <div class="flex flex-col gap-space-xs">
                    <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="koleksi_bacaan.php">Katalog Buku</a>
                    <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="klub.php">Klub Diskusi</a>
                    <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="koleksi.php">Koleksi</a>
                </div>
            </div>

            <!-- Menu Bantuan -->
            <div class="md:col-span-3 flex flex-col gap-space-sm">
                <span class="font-label-lg text-label-lg text-on-surface font-bold">Bantuan</span>
                <div class="flex flex-col gap-space-xs">
                    <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Panduan Pengguna</a>
                    <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Hubungi Kami</a>
                    <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">FAQ</a>
                </div>
            </div>

        </div>

        <!-- Bottom Copyright & Legal -->
        <div class="mt-space-xl pt-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-md">
            <p class="font-body-sm text-body-sm text-on-surface-variant text-center sm:text-left">
                © 2025 LITERA Indonesia. Hak Cipta Dilindungi.
            </p>
            <div class="flex items-center gap-space-lg">
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors" href="#">Kebijakan Privasi</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-on-surface transition-colors" href="#">Syarat &amp; Ketentuan</a>
            </div>
        </div>
    </div>
</footer>

    <script>
        // Interaktivitas Filter Pills
        const filterButtons = document.querySelectorAll('#filter-pills .filter-tab');
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                filterButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
            });
        });
    </script>
</body>
</html>