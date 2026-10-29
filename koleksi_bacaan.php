<?php
session_start();

$books = [
    [
        "author" => "Lia Apipah",
        "title" => "Jejak Masa Depan",
        "category" => "Fiksi",
        "description" => "Sebuah narasi tentang persimpangan antara ambisi manusia dan bayang-bayang masa depan yang tak menentu di ufuk waktu.",
        "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuCcF2YqCy5VVjuqKkYhacLh4ZnLEMUwSAJ5dRckB1E7QhXM9PAaHlQkEP0eBJGth8Grbhsz6_j5N8B9QT8f4iLzzPLpXa6HVsxPh-z38ZkbB8gxp4TeWlxkasc007IOT5QaLYPzZQgoMxkjh4daLyWtJslRanLvCsHQ2LtnnPQTp1uSN8wUr-xE9fMiMnupwOehTTBKj-hchPQrx7G2nWdm_NvLWIMcbYxJveBBjOHevMP-jZF3KxJo",
        "alt" => "Jejak Masa Depan",
        "link" => "ruang_membaca.php"
    ],
    [
        "author" => "Raden Mahesa",
        "title" => "Pelan-Pelan, Kamu Akan Sampai",
        "category" => "Self-Improvement",
        "description" => "Refleksi hangat untuk meredakan kepanikan masa muda, mengajakmu menghargai proses yang sunyi dan bermakna.",
        "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuA_0toDeemc2GLPSOcmpW4oyFLclvr9luAxs4BGxbXD5jJfYhZMNdcEf9pvavw4pZBTOg5wAn2rb-pZhpD2IP9vDG1GD5yo-E5cFljqEm52Eda6FEyI8lplg5QzEfbPt_lhCJVTA2r171VJ69YMb6cv2hWU_lhIcmrTXBWvb4LK5QDwk0z2tnioL0I16ekik1awbp3bToEyszUmIOaphsniTCnPonNSKM30203LgQesa0-kXCMb2sXv",
        "alt" => "Pelan-Pelan, Kamu Akan Sampai",
        "link" => "ruang_membaca.php"
    ],
    [
        "author" => "Siti Nurhaliza",
        "title" => "Menjadi Teman Belajar",
        "category" => "Pendidikan",
        "description" => "Eksplorasi metode pendampingan belajar yang humanis, membongkar dogma akademis menuju pemahaman sejati.",
        "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuDeFy3afT7ZLEUdQIjOkXlC8Tq_KiXvTbStuQWo4CZqaoA-CIKbKq15p8xDK0HrYRXN-IQH6Nldly1jsyHNKHPAZrrhXkjgjNs4n8vTdc4UvpENyvWZodEf93EGqpoJCJ8Ol3DFXji29lrv97WJZDcGWv5vMUTuH9oOXXXLSRisSv-RYFF3-x6V-SHe1K3NnYgs6fb2fH4FEH9qQ_DJ6D73Xp7zGEja0kjrr_RBbVfvKPRkFXPDfk-0",
        "alt" => "Menjadi Teman Belajar",
        "link" => "ruang_membaca.php"
    ],
    [
        "author" => "Arya Pratama",
        "title" => "Arsitektur Masa Depan & Kode",
        "category" => "Teknologi",
        "description" => "Menelisik bagaimana barisan kode perangkat lunak membentuk kembali peradaban kota dan ruang interaksi manusia.",
        "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuDGc9CCbrdsSbxpsL3VNz59IsX352cVdVe83HD9qQiE6OdVAgLHT-STQ7c4u0SqF36_R9Tsev8ltJCJZgicHiADZEMDMXCZZW3tGxNoJS1_8R17NuDgFXjJLBxxnHvmydqEuASMpUrrbFm4U9gpBwI17EHLnA4f1rfqFqr7zVwnzaDW1WfiVo2rP4o2izveyUkrULythQQ4xta7b5B-TqaRd4C57bvnOZERbxHNmTyM6eci3MkcQvTS",
        "alt" => "Arsitektur Masa Depan & Kode",
        "link" => "ruang_membaca.php"
    ],
    [
        "author" => "Clara S.",
        "title" => "Ritual Pagi Hari yang Tenang",
        "category" => "Gaya Hidup",
        "description" => "Panduan praktis menata jam-jam awal hari tanpa gawai untuk membangun kejernihan berpikir sebelum kesibukan dimulai.",
        "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuCI2JcaoHlDbpIqsuRBG_x8-42aEm0CkdynYLU8TR6bzR-jnC8kZob9qnNasjOQpS2jMx75Md8VE65Ct3djfPaqY-5WvIdWQ65vAP7V6E_XYwztjw1VcygfwYsH9NyfWYGMdDugB-Yw_-SxdfqFh9frvSYF3UOBDthNRsVUqZtGNYJX24wRbeHg36hnZ7GSndRalslH__HsCH0oD46BTj_FCJ-R6qXOoB_6loXQdV1au1WDkYd-jdtC",
        "alt" => "Ritual Pagi Hari yang Tenang",
        "link" => "ruang_membaca.php"
    ],
    [
        "author" => "Dimas Wardhana",
        "title" => "Bayang-Bayang di Ujung Senja",
        "category" => "Fiksi",
        "description" => "Kisah misteri tentang kenangan yang tertinggal di pesisir selatan dan sebuah surat rahasia yang tak pernah terkirim.",
        "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuDB_x2-E28BOxHcbjcYbf_YtRGyfiRUliJpmJKG0DtusesueK30TRymkibOgk76nNwIL4T-l7RZDT1YouvRjfyrREesdY7eW15Bw1Ztl9kLuJZnp_Qs8wD-9xanEmL8rD5V8RpZJNmFBgQevnDhS-k0Te9r5DY0CvnhEIM5aDazlEPNBLcPNDszDr2MvIcU8uIdKAlRtPhcAm4MDYtsylmuihp0gGyH2qUK2zy8Gih5XhmhXBVDuwIi",
        "alt" => "Bayang-Bayang di Ujung Senja",
        "link" => "ruang_membaca.php"
    ],
    [
        "author" => "Nadia Larasati",
        "title" => "Seni Menerima Diri Apa Adanya",
        "category" => "Self-Improvement",
        "description" => "Langkah berdamai dengan ketidaksempurnaan dan menemukan kekuatan batin di tengah ekspektasi sosial yang menekan.",
        "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuBP4WvJIZSh6E8rVyX9RglQ0NQNJ86jQZFgj248e39nRIR5PzUthQZlF5nqEu5LIbNchZFh59FjkF9glL-4s3I_7FHPHXyPuXy9K22_O1UEfR9tJ5ssr4PQ8w4-lr79y_WeZTv2I4BLRlEX-b5weVb2y3v-FWO2nQ4rE0pgmR3RafgY89sEFYRFJztHrb82H110pzIwxbXTOuNpwegYtCFkSbkGIki_MeptygE4Ql86khOHtiYvwUc3",
        "alt" => "Seni Menerima Diri Apa Adanya",
        "link" => "ruang_membaca.php"
    ],
    [
        "author" => "Hendra Gunawan",
        "title" => "Langkah Pertama Mengubah Kebiasaan",
        "category" => "Self-Improvement",
        "description" => "Kerangka kerja psikologis untuk merombak rutinitas berulang melalui aksi mikro yang konsisten tanpa rasa terbebani.",
        "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuAQPJ8KP6F-1oPcrj0voCk1a2Zu7vM8ZIjd7FSM57Ll5PHfkf9qO-o6EVF7wY-SXZ074cCi4a43DOhcudiQfw7a_QgLGAwJbNAZBbjCefItfYMeAUkjvH0wVk_ps1w9r6dJ9YdqDiybze0dVG6Tt8bhb6A2yp7wO0k_-9xsCoDlMmiaZAuE68ser_yiWZDUinC2InpaM6Z_E1vi5ORZBQrvBlhL3AD5wv9-jG4iqBpe4PfqAm-qtzhj",
        "alt" => "Langkah Pertama Mengubah Kebiasaan",
        "link" => "ruang_membaca.php"
    ],
    [
        "author" => "Maya Anggraini",
        "title" => "Revolusi Belajar Mandiri",
        "category" => "Pendidikan",
        "description" => "Cara merancang silabus pribadi di era informasi berlimpah agar tetap terarah, tajam, dan memiliki kedalaman analisis.",
        "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuCGKGMm4OqUW46C63IVka-Xsp0USKPzrEHBsTu2pqSpyGQKu-mUYdtR_RT0ovFCoy67zli0hNAZI_BYOQUJbxvL22Zo3_sy5kn63zjFXJVtOtMDsWHnJIdNcL1Reu0BUOd1r9KbqITefmhKEQV-V7R96LAqG_HH0vRiKRx5u-3BWR0rlIlYJhwuGQUdyrNK5ouPQoQf3dQ7UFPsZCBLqDmZ8UefhUMC2VBJ4wdlZkixmXAric0ey3b1",
        "alt" => "Revolusi Belajar Mandiri",
        "link" => "ruang_membaca.php"
    ],
    [
        "author" => "Budi Wicaksono",
        "title" => "Menemukan Kembali Ruang Hening",
        "category" => "Gaya Hidup",
        "description" => "Sebuah esai tentang pentingnya kesunyian terencana di tengah kebisingan notifikasi digital yang tiada henti.",
        "image" => "https://lh3.googleusercontent.com/aida-public/AB6AXuDyS4-0gbrC7WGA4nk3Yr5E9p9MRAdVYkzagoVBudxXRewnOUCfJ034XyHMx6K5w0kym6Ei2aByCIG7eGFqTD3n4CeOk6z4yh8O7Zq_l0uFfYj3hpqHkPoFAddhgJ-2pdDKwrVxyT-kMOsw3Fzk8OSI1P9ZeI0I2Y284SeHOsigjwGnF9NGe2XJvQqVHHou6IXTK6EZpznw09dqie5rORduO_ZYHdd2mwu_0-DlD5f6o92ZzWm6pjyL",
        "alt" => "Menemukan Kembali Ruang Hening",
        "link" => "ruang_membaca.php"
    ]
];
?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="web_standard" name="shell-type">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.googleapis.com" rel="preconnect">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet">

    <style>
        @layer base {

            html,
            body {
                margin: 0;
                padding: 0;
                width: 100%;
            }

            body {
                overscroll-behavior: none;
                min-width: 0;
            }

            main> :first-child {
                margin-top: 0 !important;
            }

            main> :last-child {
                margin-bottom: 0 !important;
            }
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
                        "on-primary-fixed-variant": "#910031",
                        "on-surface-variant": "#5a4043",
                        "inverse-primary": "#ffb2ba",
                        "on-tertiary-container": "#fff8f8",
                        "tertiary": "#b60237",
                        "tertiary-fixed": "#ffdadb",
                        "on-tertiary": "#ffffff",
                        "on-primary": "#ffffff",
                        "primary-container": "#d82b57",
                        "surface-container-low": "#eff4ff",
                        "surface-tint": "#bb0d44",
                        "on-primary-container": "#fff8f7",
                        "on-secondary-container": "#5c647a",
                        "on-background": "#0b1c30",
                        "surface-container-high": "#dce9ff",
                        "error": "#ba1a1a",
                        "surface": "#f8f9ff",
                        "surface-container-highest": "#d3e4fe",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary-fixed": "#40000d",
                        "secondary-fixed": "#dae2fd",
                        "background": "#f8f9ff",
                        "on-primary-fixed": "#400011",
                        "surface-container": "#e5eeff",
                        "on-secondary-fixed-variant": "#3f465c",
                        "primary-fixed": "#ffd9dc",
                        "surface-dim": "#cbdbf5",
                        "secondary": "#565e74",
                        "tertiary-fixed-dim": "#ffb2b7",
                        "primary-fixed-dim": "#ffb2ba",
                        "secondary-container": "#dae2fd",
                        "surface-variant": "#d3e4fe",
                        "secondary-fixed-dim": "#bec6e0",
                        "inverse-on-surface": "#eaf1ff",
                        "outline-variant": "#e2bec0",
                        "tertiary-container": "#da2a4d",
                        "primary": "#b50340",
                        "error-container": "#ffdad6",
                        "surface-bright": "#f8f9ff",
                        "on-error": "#ffffff",
                        "on-error-container": "#93000a",
                        "on-secondary-fixed": "#131b2e",
                        "on-secondary": "#ffffff",
                        "on-tertiary-fixed-variant": "#92002a",
                        "on-surface": "#0b1c30",
                        "outline": "#8e6f72",
                        "inverse-surface": "#213145"
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
                        "space-xl": "2.5rem",
                        "space-lg": "1.5rem",
                        "margin-mobile": "1rem",
                        "gutter-mobile": "1rem",
                        gutter: "1.5rem",
                        "space-md": "1rem"
                    },

                    fontFamily: {
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "label-lg": ["Plus Jakarta Sans"],
                        "label-sm": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"],
                        "display-lg-mobile": ["Plus Jakarta Sans"],
                        "body-sm": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "display-lg": ["Plus Jakarta Sans"],
                        "headline-sm": ["Plus Jakarta Sans"]
                    },

                    fontSize: {
                        "headline-lg-mobile": ["24px", {
                            lineHeight: "32px",
                            letterSpacing: "-0.01em",
                            fontWeight: "700"
                        }],
                        "body-lg": ["16px", {
                            lineHeight: "26px",
                            fontWeight: "400"
                        }],
                        "label-lg": ["14px", {
                            lineHeight: "20px",
                            fontWeight: "600"
                        }],
                        "label-sm": ["11px", {
                            lineHeight: "14px",
                            letterSpacing: "0.04em",
                            fontWeight: "700"
                        }],
                        "headline-lg": ["32px", {
                            lineHeight: "40px",
                            letterSpacing: "-0.015em",
                            fontWeight: "700"
                        }],
                        "label-md": ["12px", {
                            lineHeight: "16px",
                            letterSpacing: "0.02em",
                            fontWeight: "600"
                        }],
                        "display-lg-mobile": ["32px", {
                            lineHeight: "40px",
                            letterSpacing: "-0.02em",
                            fontWeight: "800"
                        }],
                        "body-sm": ["12px", {
                            lineHeight: "18px",
                            fontWeight: "400"
                        }],
                        "headline-md": ["22px", {
                            lineHeight: "28px",
                            fontWeight: "600"
                        }],
                        "body-md": ["14px", {
                            lineHeight: "22px",
                            fontWeight: "400"
                        }],
                        "display-lg": ["48px", {
                            lineHeight: "56px",
                            letterSpacing: "-0.02em",
                            fontWeight: "800"
                        }],
                        "headline-sm": ["18px", {
                            lineHeight: "24px",
                            fontWeight: "600"
                        }]
                    }
                }
            }
        };
    </script>
</head>

<body class="bg-surface font-body-md text-body-md text-on-surface antialiased">

 
<!-- HEADER LITERA -->
<header class="fixed top-0 left-0 right-0 w-full z-50 bg-surface/85 backdrop-blur-xl shadow-[0_1px_8px_rgba(15,23,42,0.04)]">
    <div class="h-16 sm:h-20 max-w-[1240px] mx-auto px-4 sm:px-6 md:px-margin flex items-center justify-between">

        <!-- Logo Litera -->
        <a class="flex items-center gap-1.5 sm:gap-space-sm group"
           href="jelajah.php">

            <img alt="LOGO.png" class="h-12 sm:h-16 w-auto object-contain" src="assets/images/logo.png"><span class="font-['Baloo_2'] text-2xl font-bold tracking-tight text-on-surface group-hover:text-primary transition-colors">litera</span></a>

            <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600;700&display=swap" rel="stylesheet">

        </a>

        <!-- Navigasi dan Profil -->
        <div class="flex items-center gap-1 sm:gap-space-lg">

            <!-- Navigasi Desktop -->
            <nav class="hidden sm:flex items-center gap-space-xs">

                <a
                    href="jelajah.php"
                    class="text-on-surface-variant font-label-lg text-label-lg px-5 py-2 rounded-full hover:bg-surface-container hover:text-on-surface transition-all"
                >
                    Jelajah
                </a>

                <a
                    href="klub.php"
                    class="text-on-surface-variant font-label-lg text-label-lg px-5 py-2 rounded-full hover:bg-surface-container hover:text-on-surface transition-all"
                >
                    Klub
                </a>

                <a
                    href="koleksi.php"
                    class="text-on-surface-variant font-label-lg text-label-lg px-5 py-2 rounded-full hover:bg-surface-container hover:text-on-surface transition-all"
                >
                    Koleksi
                </a>

            </nav>

            <!-- Profil Pengguna -->
            <div class="flex items-center gap-1 sm:gap-space-sm pl-0 sm:pl-space-xs">

                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-primary text-[18px]">
                        person
                    </span>
                </div>

                <span class="font-label-md text-label-md text-on-surface hidden sm:inline-block">
                    
                </span>

            </div>

        </div>

    </div>
</header>



    <!-- MAIN -->
    <main class="w-full pt-20 bg-surface min-h-[calc(100vh-280px)]">

        <div class="flex flex-col w-full">

            <div class="max-w-[1240px] w-full mx-auto px-margin py-space-lg flex flex-col gap-space-xl">

                <!-- JUDUL -->
                <section class="flex flex-col md:flex-row md:items-end justify-between gap-space-md pb-space-md">

                    <div class="flex flex-col gap-space-xs max-w-2xl">

                        <div class="flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-md">

                            <a class="hover:text-primary transition-colors flex items-center gap-1" href="#">

                                <span class="material-symbols-outlined text-[16px]">
                                    arrow_back
                                </span>

                                <span>Jelajahi</span>

                            </a>

                            <span>/</span>

                            <span class="text-primary font-semibold">
                                Semua Koleksi
                            </span>

                        </div>

                        <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">
                            Koleksi Bacaan
                        </h1>

                        <p class="font-body-lg text-body-lg text-on-surface-variant">
                            Temukan 10 kurasi cerita, esai, dan refleksi pilihan untuk menemani harimu.
                        </p>

                    </div>

                    <div class="flex items-center gap-space-sm self-start md:self-auto">

                        <span
                            class="bg-surface-container-low px-4 py-2 rounded-full font-label-sm text-label-sm text-on-surface-variant flex items-center gap-2 shadow-sm">

                            <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>

                            Menampilkan 10 Bacaan Pilihan

                        </span>

                    </div>

                </section>


                <!-- KOLEKSI BUKU -->
                <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
<?php foreach ($books as $book): ?>

                        <div
                            class="group bg-surface-container-lowest rounded-2xl p-6 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between hover:-translate-y-1">

                            <div class="flex flex-col gap-space-sm">

                                <div class="relative w-full h-64 rounded-xl overflow-hidden bg-surface-container">

                                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
     src="<?php echo $book['image']; ?>"
     alt="<?php echo htmlspecialchars($book['alt'] ?? $book['title']); ?>">

                                    <div
                                        class="absolute top-3 left-3 px-3 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-primary font-semibold">
                                        <?php echo $book['category']; ?>
                                    </div>

                                </div>

                                <div class="flex flex-col gap-1 pt-1">

                                    <div class="flex items-center justify-between">

                                        <span class="font-label-md text-label-md text-secondary">
                                            <?php echo $book['author']; ?>
                                        </span>

                                    </div>

                                    <h3
                                        class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors line-clamp-1">
                                        <?php echo $book['title']; ?>
                                    </h3>

                                    <p
                                        class="font-body-md text-body-md text-on-surface-variant line-clamp-3 leading-relaxed mt-1">
                                        <?php echo $book['description']; ?>
                                    </p>

                                </div>

                            </div>

                            <div class="pt-space-md flex items-center justify-between mt-space-sm">

                                <a class="inline-flex items-center gap-2 bg-primary text-white font-label-md text-label-md px-5 py-2.5 rounded-full hover:opacity-95 shadow-sm active:scale-95 transition-all"
                                    href="<?php echo $book['link']; ?>">
                                    <span class="material-symbols-outlined text-[18px]">
                                        menu_book
                                    </span>

                                    <span>Baca Buku</span>

                                </a>

                                <button aria-label="Simpan Bacaan"
                                    class="w-9 h-9 rounded-full bg-surface hover:bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors active:scale-90"
                                    title="Simpan Bacaan" type="button">

                                    <span class="material-symbols-outlined text-[20px]">
                                        bookmark_border
                                    </span>

                                </button>

                            </div>

                        </div>

                   <?php endforeach; ?>

                </section>


                <!-- KLUB KOMUNITAS -->
                <section
                    class="bg-surface-container-low rounded-xl p-space-xl my-space-md flex flex-col md:flex-row items-center justify-between gap-space-lg shadow-sm">

                    <div class="flex items-start gap-space-md max-w-2xl">

                        <div
                            class="w-12 h-12 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center shrink-0 shadow-sm">

                            <span class="material-symbols-outlined text-[26px]">
                                groups
                            </span>

                        </div>

                        <div class="flex flex-col gap-1">

                            <h2 class="font-headline-sm text-headline-sm text-on-surface">
                                Ingin Berdiskusi Seputar Bacaan Favoritmu?
                            </h2>

                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Kunjungi Klub Komunitas LITERA untuk bertukar wawasan, mengulas bab demi bab, dan
                                bertemu sesama pembaca kritis lainnya.
                            </p>

                        </div>

                    </div>

                    <a class="whitespace-nowrap px-6 py-3 rounded-full bg-surface-container-lowest text-primary font-label-lg text-label-lg hover:bg-primary hover:text-on-primary transition-all shadow-sm flex items-center gap-2"
                        href="#">

                        <span>
                            Menuju Klub Diskusi
                        </span>

                        <span class="material-symbols-outlined text-[18px]">
                            arrow_forward
                        </span>

                    </a>

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