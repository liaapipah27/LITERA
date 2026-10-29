<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LITERA - Daftar</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet">

    <!-- Plus Jakarta Sans -->
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#b50340",
                        "primary-container": "#d82b57",
                        tertiary: "#b60237",
                        background: "#f8f9ff",
                        surface: "#f8f9ff",
                        "surface-container-low": "#eff4ff",
                        "surface-container-lowest": "#ffffff",
                        "surface-variant": "#d3e4fe",
                        secondary: "#565e74",
                        "on-surface": "#0b1c30",
                        "on-primary": "#ffffff",
                        "primary-fixed": "#ffd9dc",
                        "secondary-fixed": "#dae2fd",
                        "on-surface-variant": "#5a4043"
                    },

                    fontFamily: {
                        jakarta: ["Plus Jakarta Sans"]
                    }
                }
            }
        }
    </script>

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Plus Jakarta Sans", sans-serif;
            background: #f8f9ff;
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>


<body class="bg-surface text-on-surface antialiased">

    <main class="w-full min-h-screen flex items-center justify-center px-3 py-6 sm:px-6 sm:py-8 md:px-8">

        <div class="w-full max-w-[480px] flex flex-col items-center justify-center">


            <!-- Dekorasi -->
            <div
                class="absolute -top-16 -left-16 w-56 h-56 bg-primary-fixed rounded-full blur-3xl opacity-40 pointer-events-none">
            </div>

            <div
                class="absolute -bottom-16 -right-16 w-60 h-60 bg-secondary-fixed rounded-full blur-3xl opacity-50 pointer-events-none">
            </div>


            <!-- Card Utama -->
            <div
                class="relative w-full bg-surface-container-lowest rounded-2xl shadow-xl shadow-on-surface/5 p-5 sm:p-7 md:p-10">


                <!-- Logo & Header -->
                <div class="flex flex-col items-center text-center mb-5 sm:mb-8">

                    <!-- Logo -->
                    <div class="h-9 sm:h-12 flex items-center justify-center mb-3 sm:mb-6">

                        <img
                            alt="Logo LITERA"
                            class="h-12 sm:h-16 w-auto object-contain"
                            src="assets/images/logo.png">

                    </div>


                    <!-- Judul -->
                    <h1 class="text-xl sm:text-2xl font-semibold tracking-tight">
                        Buat Akun LITERA
                    </h1>

                </div>


                <!-- Form Daftar -->
                <form
                    id="registerForm"
                    action="auth/proses_register.php"
                    method="POST"
                    class="flex flex-col gap-4">


                    <!-- Nama Lengkap -->
                    <div class="flex flex-col gap-1.5">

                        <label
                            for="fullName"
                            class="text-xs sm:text-sm text-on-surface font-semibold">
                            Nama Lengkap
                        </label>

                        <div class="relative flex items-center">

                            <span
                                class="material-symbols-outlined absolute left-3.5 text-secondary pointer-events-none text-[20px]">
                                person
                            </span>

                            <input
                                id="fullName"
                                name="nama_lengkap"
                                type="text"
                                placeholder="Masukkan nama lengkap"
                                autocomplete="name"
                                required
                                class="w-full pl-10 pr-4 py-3 bg-surface-container-low text-on-surface rounded-xl text-sm outline-none transition-all placeholder:text-secondary/60 focus:bg-white focus:ring-2 focus:ring-primary focus:shadow-sm">

                        </div>

                    </div>


                    <!-- Nama Pengguna -->
                    <div class="flex flex-col gap-1.5">

                        <label
                            for="username"
                            class="text-xs sm:text-sm text-on-surface font-semibold">
                            Nama Pengguna
                        </label>

                        <div class="relative flex items-center">

                            <span
                                class="material-symbols-outlined absolute left-3.5 text-secondary pointer-events-none text-[20px]">
                                alternate_email
                            </span>

                            <input
                                id="username"
                                name="nama_pengguna"
                                type="text"
                                placeholder="Buat nama pengguna"
                                autocomplete="username"
                                required
                                class="w-full pl-10 pr-4 py-3 bg-surface-container-low text-on-surface rounded-xl text-sm outline-none transition-all placeholder:text-secondary/60 focus:bg-white focus:ring-2 focus:ring-primary focus:shadow-sm">

                        </div>

                    </div>


                    <!-- Email -->
                    <div class="flex flex-col gap-1.5">

                        <label
                            for="email"
                            class="text-xs sm:text-sm text-on-surface font-semibold">
                            Email
                        </label>

                        <div class="relative flex items-center">

                            <span
                                class="material-symbols-outlined absolute left-3.5 text-secondary pointer-events-none text-[20px]">
                                mail
                            </span>

                            <input
                                id="email"
                                name="email"
                                type="email"
                                placeholder="nama@email.com"
                                autocomplete="email"
                                required
                                class="w-full pl-10 pr-4 py-3 bg-surface-container-low text-on-surface rounded-xl text-sm outline-none transition-all placeholder:text-secondary/60 focus:bg-white focus:ring-2 focus:ring-primary focus:shadow-sm">

                        </div>

                    </div>


                    <!-- Kata Sandi -->
                    <div class="flex flex-col gap-1.5">

                        <label
                            for="passwordField"
                            class="text-xs sm:text-sm text-on-surface font-semibold">
                            Kata Sandi
                        </label>

                        <div class="relative flex items-center">

                            <span
                                class="material-symbols-outlined absolute left-3.5 text-secondary pointer-events-none text-[20px]">
                                lock
                            </span>

                            <input
                                id="passwordField"
                                name="kata_sandi"
                                type="password"
                                placeholder="Minimal 8 karakter"
                                autocomplete="new-password"
                                minlength="8"
                                required
                                class="w-full pl-10 pr-11 py-3 bg-surface-container-low text-on-surface rounded-xl text-sm outline-none transition-all placeholder:text-secondary/60 focus:bg-white focus:ring-2 focus:ring-primary focus:shadow-sm">


                            <!-- Tampilkan / Sembunyikan Sandi -->
                            <button
                                type="button"
                                onclick="togglePasswordVisibility('passwordField', 'passwordIcon')"
                                title="Tampilkan / Sembunyikan Sandi"
                                class="absolute right-3 text-secondary hover:text-on-surface transition-colors p-1 flex items-center justify-center rounded-lg">

                                <span
                                    id="passwordIcon"
                                    class="material-symbols-outlined text-[20px]">
                                    visibility_off
                                </span>

                            </button>

                        </div>

                    </div>


                    <!-- Konfirmasi Kata Sandi -->
                    <div class="flex flex-col gap-1.5">

                        <label
                            for="confirmPassword"
                            class="text-xs sm:text-sm text-on-surface font-semibold">
                            Konfirmasi Kata Sandi
                        </label>

                        <div class="relative flex items-center">

                            <span
                                class="material-symbols-outlined absolute left-3.5 text-secondary pointer-events-none text-[20px]">
                                lock
                            </span>

                            <input
                                id="confirmPassword"
                                name="confirmPassword"
                                type="password"
                                placeholder="Masukkan kembali kata sandi"
                                autocomplete="new-password"
                                minlength="8"
                                required
                                class="w-full pl-10 pr-11 py-3 bg-surface-container-low text-on-surface rounded-xl text-sm outline-none transition-all placeholder:text-secondary/60 focus:bg-white focus:ring-2 focus:ring-primary focus:shadow-sm">


                            <!-- Tampilkan / Sembunyikan Konfirmasi -->
                            <button
                                type="button"
                                onclick="togglePasswordVisibility('confirmPassword', 'confirmPasswordIcon')"
                                title="Tampilkan / Sembunyikan Sandi"
                                class="absolute right-3 text-secondary hover:text-on-surface transition-colors p-1 flex items-center justify-center rounded-lg">

                                <span
                                    id="confirmPasswordIcon"
                                    class="material-symbols-outlined text-[20px]">
                                    visibility_off
                                </span>

                            </button>

                        </div>

                    </div>


                    <!-- Persetujuan -->
                    <div class="flex items-start gap-2.5 pt-1">

                        <input
                            id="termsCheckbox"
                            name="terms"
                            type="checkbox"
                            required
                            class="mt-0.5 w-4 h-4 rounded accent-primary cursor-pointer">

                        <label
                            for="termsCheckbox"
                            class="text-xs sm:text-sm text-secondary leading-relaxed cursor-pointer">

                            Saya setuju dengan
                            <a
                                href="#"
                                class="text-primary hover:underline">
                                Ketentuan Layanan
                            </a>
                            dan
                            <a
                                href="#"
                                class="text-primary hover:underline">
                                Kebijakan Privasi
                            </a>
                            LITERA.

                        </label>

                    </div>


                    <!-- Tombol Daftar -->
                    <button
                        id="btnSubmit"
                        type="submit"
                        class="w-full mt-1 sm:mt-2 py-3 sm:py-3.5 px-5 rounded-full bg-primary hover:bg-tertiary text-white font-semibold text-sm transition-all duration-200 shadow-md shadow-primary/20 flex items-center justify-center gap-2 active:scale-[0.99]">

                        <span>
                            Daftar Akun
                        </span>

                        <span class="material-symbols-outlined text-[18px]">
                            arrow_forward
                        </span>

                    </button>

                </form>


                <!-- Link ke Login -->
                <div class="flex flex-col items-center gap-3 pt-5 sm:pt-6 text-center">

                    <p class="text-xs sm:text-sm text-secondary">

                        Sudah punya akun Litera?

                        <a
                            href="login.php"
                            class="text-primary font-semibold hover:underline ml-1">
                            Masuk di sini
                        </a>

                    </p>

                </div>

            </div>


            <!-- Keamanan -->
            <div
                class="mt-5 sm:mt-6 flex items-center justify-center text-secondary/60">

                <div
                    class="flex items-center gap-1.5 text-[10px] sm:text-xs font-semibold">

                </div>

            </div>

        </div>

    </main>


    <!-- Fungsi Tampilkan / Sembunyikan Kata Sandi & Validasi Konfirmasi Password -->
    <script>

        function togglePasswordVisibility(inputId, iconId) {

            const passwordInput =
                document.getElementById(inputId);

            const passwordIcon =
                document.getElementById(iconId);


            if (passwordInput.type === 'password') {

                passwordInput.type = 'text';

                passwordIcon.textContent =
                    'visibility';

            } else {

                passwordInput.type = 'password';

                passwordIcon.textContent =
                    'visibility_off';

            }

        }

        // Cek apakah Konfirmasi Password cocok sebelum dikirim
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            const pwd = document.getElementById('passwordField').value;
            const confirmPwd = document.getElementById('confirmPassword').value;

            if (pwd !== confirmPwd) {
                e.preventDefault();
                alert('Konfirmasi kata sandi tidak cocok!');
            }
        });

    </script>

</body>

</html>