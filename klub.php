<?php
session_start();
include 'config/koneksi.php';

// Cek session login user
if (!isset($_SESSION['id_pengguna'])) {
    $_SESSION['id_pengguna'] = 1; // Temporary ID untuk testing
}

$id_pengguna = $_SESSION['id_pengguna'];
$logoPath = 'assets/images/logo.png';

$clubs = [
    [
        'title' => 'Klub Fiksi',
        'description' => 'Ruang eksplorasi narasi imajinatif, sci-fi lokal, cerita fiksi spekulatif, dan apresiasi karya sastra kontemporer.',
        'icon' => 'auto_stories',
        'iconBox' => 'bg-primary-fixed text-primary',
    ],
    [
        'title' => 'Klub Self-Improvement',
        'description' => 'Membahas konsistensi, kebiasaan mikro harian, manajemen fokus, mindfulness, dan pengembangan potensi diri.',
        'icon' => 'psychology',
        'iconBox' => 'bg-secondary-container text-on-secondary-fixed',
    ],
    [
        'title' => 'Klub Pendidikan',
        'description' => 'Diskusi metodologi belajar kritis, pedagogi modern, riset literasi, dan transformasi ekosistem pendidikan.',
        'icon' => 'school',
        'iconBox' => 'bg-surface-variant text-primary',
    ],
    [
        'title' => 'Klub Teknologi',
        'description' => 'Membedah etika kecerdasan artifisial, disrupsi digital, perkembangan teknologi web, dan masa depan otomatisasi.',
        'icon' => 'memory',
        'iconBox' => 'bg-surface-variant text-primary',
    ],
    [
        'title' => 'Klub Lifestyle',
        'description' => 'Berbagi inspirasi gaya hidup seimbang, kesehatan holistik, kreativitas harian, serta tren budaya urban.',
        'icon' => 'spa',
        'iconBox' => 'bg-primary-fixed text-primary',
    ],
];
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub Membaca | Litera</title>

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700;800&family=Plus+Jakarta+Sans:ital,wght@0,400;0,600;0,700;0,800;0,900;1,400&display=swap"
        rel="stylesheet">

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
        }

        body {
            overscroll-behavior: none;
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-variant": "#d3e4fe",
                        "surface-tint": "#bb0d44",
                        "inverse-primary": "#ffb2ba",
                        "on-error-container": "#93000a",
                        "background": "#f8f9ff",
                        "on-primary-fixed": "#400011",
                        "primary-container": "#d82b57",
                        "on-secondary-fixed-variant": "#3f465c",
                        "on-secondary": "#ffffff",
                        "error-container": "#ffdad6",
                        "inverse-on-surface": "#eaf1ff",
                        "outline": "#8e6f72",
                        "outline-variant": "#e2bec0",
                        "on-primary-container": "#fff8f7",
                        "tertiary-container": "#da2a4d",
                        "surface-bright": "#f8f9ff",
                        "surface-container": "#e5eeff",
                        "surface-container-low": "#eff4ff",
                        "tertiary-fixed": "#ffdadb",
                        "primary": "#b50340",
                        "secondary-fixed-dim": "#bec6e0",
                        "on-surface-variant": "#5a4043",
                        "error": "#ba1a1a",
                        "surface": "#f8f9ff",
                        "on-tertiary-fixed": "#40000d",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-high": "#dce9ff",
                        "primary-fixed": "#ffd9dc",
                        "on-surface": "#0b1c30",
                        "primary-fixed-dim": "#ffb2ba",
                        "on-secondary-container": "#5c647a",
                        "tertiary": "#b60237",
                        "inverse-surface": "#213145",
                        "secondary": "#565e74",
                        "on-primary-fixed-variant": "#910031",
                        "on-tertiary-fixed-variant": "#92002a",
                        "on-error": "#ffffff",
                        "secondary-container": "#dae2fd",
                        "surface-dim": "#cbdbf5",
                        "surface-container-highest": "#d3e4fe",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed-dim": "#ffb2b7",
                        "secondary-fixed": "#dae2fd",
                        "on-secondary-fixed": "#131b2e",
                        "on-tertiary-container": "#fff8f8",
                        "on-background": "#0b1c30",
                        "on-primary": "#ffffff"
                    },

                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px"
                    },

                    spacing: {
                        "space-xs": "0.25rem",
                        margin: "2rem",
                        "space-sm": "0.5rem",
                        "space-lg": "1.5rem",
                        "gutter-mobile": "1rem",
                        "margin-mobile": "1rem",
                        "space-md": "1rem",
                        "space-xl": "2.5rem",
                        gutter: "1.5rem"
                    },

                    fontFamily: {
                        "brand": ["Baloo 2", "sans-serif"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "display-lg-mobile": ["Plus Jakarta Sans"],
                        "label-lg": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "label-sm": ["Plus Jakarta Sans"],
                        "display-lg": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"],
                        "body-sm": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "headline-sm": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"]
                    },

                    fontSize: {
                        "headline-md": [
                            "22px",
                            {
                                lineHeight: "28px",
                                fontWeight: "600"
                            }
                        ],
                        "headline-lg": [
                            "32px",
                            {
                                lineHeight: "40px",
                                letterSpacing: "-0.015em",
                                fontWeight: "700"
                            }
                        ],
                        "display-lg-mobile": [
                            "32px",
                            {
                                lineHeight: "40px",
                                letterSpacing: "-0.02em",
                                fontWeight: "800"
                            }
                        ],
                        "label-lg": [
                            "14px",
                            {
                                lineHeight: "20px",
                                fontWeight: "600"
                            }
                        ],
                        "body-lg": [
                            "16px",
                            {
                                lineHeight: "26px",
                                fontWeight: "400"
                            }
                        ],
                        "label-sm": [
                            "11px",
                            {
                                lineHeight: "14px",
                                letterSpacing: "0.04em",
                                fontWeight: "700"
                            }
                        ],
                        "display-lg": [
                            "48px",
                            {
                                lineHeight: "56px",
                                letterSpacing: "-0.02em",
                                fontWeight: "800"
                            }
                        ],
                        "label-md": [
                            "12px",
                            {
                                lineHeight: "16px",
                                letterSpacing: "0.02em",
                                fontWeight: "600"
                            }
                        ],
                        "body-sm": [
                            "12px",
                            {
                                lineHeight: "18px",
                                fontWeight: "400"
                            }
                        ],
                        "body-md": [
                            "14px",
                            {
                                lineHeight: "22px",
                                fontWeight: "400"
                            }
                        ],
                        "headline-sm": [
                            "18px",
                            {
                                lineHeight: "24px",
                                fontWeight: "600"
                            }
                        ],
                        "headline-lg-mobile": [
                            "24px",
                            {
                                lineHeight: "32px",
                                letterSpacing: "-0.01em",
                                fontWeight: "700"
                            }
                        ]
                    }
                }
            }
        };
    </script>
</head>

<body class="bg-surface font-body-md text-body-md text-on-surface antialiased min-h-screen flex flex-col">

   
<!-- NAVBAR -->
<header class="fixed top-0 left-0 right-0 w-full z-50 bg-surface/85 backdrop-blur-xl shadow-[0_1px_8px_rgba(15,23,42,0.04)]">
    <div class="h-16 sm:h-20 max-w-[1240px] mx-auto px-4 sm:px-6 md:px-margin flex items-center justify-between">

        <!-- Logo -->
        <a class="flex items-center gap-1.5 sm:gap-space-sm group" href="jelajah.php">
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

                <!-- Jelajah -->
                <a
                    class="text-on-surface-variant font-label-lg text-label-lg px-5 py-2 rounded-full hover:bg-surface-container hover:text-on-surface transition-all"
                    href="jelajah.php"
                >
                    Jelajah
                </a>

                <!-- Klub (Aktif) -->
                <a
                    class="bg-primary-container text-on-primary font-label-lg text-label-lg rounded-full px-5 py-2 shadow-sm transition-all"
                    href="klub.php"
                    aria-current="page"
                >
                    Klub
                </a>

                <!-- Koleksi -->
                <a
                    class="text-on-surface-variant font-label-lg text-label-lg px-5 py-2 rounded-full hover:bg-surface-container hover:text-on-surface transition-all"
                    href="koleksi.php"
                >
                    Koleksi
                </a>

            </nav>

            <!-- Profil -->
            <a
                class="flex items-center gap-1 sm:gap-space-sm pl-0 sm:pl-space-xs hover:opacity-80 transition-opacity"
                href="#"
            >
                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-primary text-[18px]">
                        person
                    </span>
                </div>
                <span class="font-label-md text-label-md text-on-surface hidden sm:inline-block">
                
                </span>
            </a>

        </div>
    </div>
</header>

    <!-- KONTEN UTAMA -->
    <main class="w-full flex-1 pt-16 bg-surface">

        <div class="flex flex-col w-full">

            <div class="w-full max-w-7xl mx-auto px-margin-mobile lg:px-margin py-space-xl flex flex-col gap-space-xl">

                <!-- Judul Klub Membaca tanpa panel besar -->
                <section class="flex flex-col gap-space-sm">

                    <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">
                        Klub Membaca
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed max-w-3xl">
                        Temukan rekan membaca dengan minat yang sama. Bergabung dan diskusikan ide, wawasan, serta
                        perspektif secara asinkron tanpa sekat.
                    </p>

                </section>

                <!-- DAFTAR KLUB -->
                <section class="flex flex-col gap-space-md mt-space-sm">

                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-xs">

                        <div>

                            <h2 class="font-headline-md text-headline-md text-on-surface">
                                Jelajahi Klub Membaca
                            </h2>

                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Pilih ruang diskusi yang sesuai dengan topik favoritmu
                            </p>

                        </div>

                        <span class="font-label-md text-label-md text-on-surface-variant font-medium">
                            Menampilkan <?= count($clubs) ?> Klub Aktif
                        </span>

                    </div>

                    <!-- Kartu Klub dibuat menggunakan PHP -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg">

                        <?php foreach ($clubs as $club): ?>

                            <div
                                class="flex flex-col justify-between rounded-xl bg-surface-container-lowest p-space-lg shadow-sm hover:shadow-md transition-all duration-200">

                                <div class="flex flex-col gap-space-md">

                                    <div class="flex items-center justify-between">

                                        <div
                                            class="w-10 h-10 rounded-full <?= htmlspecialchars($club['iconBox'], ENT_QUOTES, 'UTF-8') ?> flex items-center justify-center">

                                            <span class="material-symbols-outlined text-[22px]">
                                                <?= htmlspecialchars($club['icon'], ENT_QUOTES, 'UTF-8') ?>
                                            </span>

                                        </div>

                                        <span
                                            class="px-3 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-semibold flex items-center gap-1">

                                            <span class="material-symbols-outlined text-[14px]">
                                                group
                                            </span>

                                            0 Anggota

                                        </span>

                                    </div>

                                    <div>

                                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold mb-1">
                                            <?= htmlspecialchars($club['title'], ENT_QUOTES, 'UTF-8') ?>
                                        </h3>

                                        <p
                                            class="font-body-md text-body-md text-on-surface-variant line-clamp-3 leading-relaxed">
                                            <?= htmlspecialchars($club['description'], ENT_QUOTES, 'UTF-8') ?>
                                        </p>

                                    </div>

                                </div>

                                <div class="mt-space-lg pt-space-xs">

                                    <button
                                        class="w-full py-2.5 px-4 rounded-full bg-primary-container text-on-primary-container font-label-md text-label-md shadow-xs hover:shadow-sm hover:opacity-95 transition-all text-center"
                                        type="button">

                                        Masuk Ruang Diskusi

                                    </button>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </section>

                <!-- ETIKA BERDISKUSI -->
                <section class="rounded-xl bg-surface-container-low p-space-lg lg:p-space-xl shadow-xs">

                    <div class="flex flex-col gap-space-md">

                        <div class="flex items-center gap-space-xs">

                            <span class="material-symbols-outlined text-primary text-[22px]"
                                style="font-variation-settings: 'FILL' 1;">
                                verified
                            </span>

                            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">
                                Etika Berdiskusi di Klub LITERA
                            </h3>

                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md pt-space-xs">

                            <!-- Etika 1 -->
                            <div
                                class="flex items-start gap-space-sm bg-surface-container-lowest p-space-md rounded-lg shadow-2xs">

                                <div
                                    class="w-8 h-8 rounded-full bg-primary-fixed flex items-center justify-center text-primary flex-shrink-0">

                                    <span class="material-symbols-outlined text-[18px]">
                                        update
                                    </span>

                                </div>

                                <div class="flex flex-col">

                                    <h4 class="font-label-lg text-label-lg text-on-surface font-bold">
                                        Asinkron &amp; Fleksibel
                                    </h4>

                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5 leading-relaxed">
                                        Tulis ulasan bab kapan pun sempat. Tidak ada batasan waktu instan; pemikiran
                                        mendalam lebih dihargai.
                                    </p>

                                </div>

                            </div>

                            <!-- Etika 2 -->
                            <div
                                class="flex items-start gap-space-sm bg-surface-container-lowest p-space-md rounded-lg shadow-2xs">

                                <div
                                    class="w-8 h-8 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-fixed flex-shrink-0">

                                    <span class="material-symbols-outlined text-[18px]">
                                        favorite
                                    </span>

                                </div>

                                <div class="flex flex-col">

                                    <h4 class="font-label-lg text-label-lg text-on-surface font-bold">
                                        Sopan &amp; Saling Menghargai
                                    </h4>

                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5 leading-relaxed">
                                        Tanggapi gagasan secara kritis dan suportif. Keberagaman perspektif adalah daya
                                        pikat utama ruang baca.
                                    </p>

                                </div>

                            </div>

                            <!-- Etika 3 -->
                            <div
                                class="flex items-start gap-space-sm bg-surface-container-lowest p-space-md rounded-lg shadow-2xs">

                                <div
                                    class="w-8 h-8 rounded-full bg-surface-variant flex items-center justify-center text-primary flex-shrink-0">

                                    <span class="material-symbols-outlined text-[18px]">
                                        visibility_off
                                    </span>

                                </div>

                                <div class="flex flex-col">

                                    <h4 class="font-label-lg text-label-lg text-on-surface font-bold">
                                        Gunakan Tagar [Spoiler]
                                    </h4>

                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5 leading-relaxed">
                                        Tandai plot twist atau peristiwa kunci agar rekan yang belum menyelesaikan bab
                                        membaca dengan nyaman.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

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
</body>

</html>