<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LITERA - Masuk</title>

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

            <!-- Decorative Glow -->
            <div
                class="absolute -top-16 -left-16 w-56 h-56 bg-primary-fixed rounded-full blur-3xl opacity-40 pointer-events-none">
            </div>

            <div
                class="absolute -bottom-16 -right-16 w-60 h-60 bg-secondary-fixed rounded-full blur-3xl opacity-50 pointer-events-none">
            </div>


            <!-- Main Card -->
            <div
                class="relative w-full bg-surface-container-lowest rounded-2xl shadow-xl shadow-on-surface/5 p-5 sm:p-7 md:p-10">


                <!-- Logo & Header -->
                <div class="flex flex-col items-center text-center mb-5 sm:mb-8">

                    <!-- Logo -->
                    <div class="h-9 sm:h-12 flex items-center justify-center mb-3 sm:mb-6">

                        <img
                            alt="LITERA Official Logo"
                            class="h-12 sm:h-16 w-auto object-contain"
                            src="assets/images/logo.png">

                    </div>


                    <!-- Title -->
                    <h1
                        class="text-xl sm:text-2xl font-semibold tracking-tight">
                        Selamat Datang
                    </h1>


                </div>


                <!-- Login Form -->
              <form
                    id="loginForm"
                    action="auth/proses_login.php"
                    method="POST"
                    class="flex flex-col gap-4">


                    <!-- Email / Username -->
                    <div class="flex flex-col gap-1.5">

                        <label
                            for="userIdentifier"
                            class="text-xs sm:text-sm text-on-surface font-semibold">
                            Email atau Nama Pengguna
                        </label>

                        <div class="relative flex items-center">

                            <span
                                class="material-symbols-outlined absolute left-3.5 text-secondary pointer-events-none text-[20px]">
                                mail
                            </span>

                            <input
                                id="userIdentifier"
                                name="userIdentifier"
                                type="text"
                                placeholder="nama@email.com atau nama pengguna"
                                autocomplete="username"
                                required
                                class="w-full pl-10 pr-4 py-3 bg-surface-container-low text-on-surface rounded-xl text-sm outline-none transition-all placeholder:text-secondary/60 focus:bg-white focus:ring-2 focus:ring-primary focus:shadow-sm">

                        </div>

                    </div>


                    <!-- Password -->
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
                                name="password"
                                type="password"
                                placeholder="Minimal 8 karakter"
                                autocomplete="current-password"
                                required
                                class="w-full pl-10 pr-11 py-3 bg-surface-container-low text-on-surface rounded-xl text-sm outline-none transition-all placeholder:text-secondary/60 focus:bg-white focus:ring-2 focus:ring-primary focus:shadow-sm">


                            <!-- Show / Hide Password -->
                            <button
                                id="togglePasswordBtn"
                                type="button"
                                onclick="togglePasswordVisibility()"
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


                    <!-- Login Options -->
                    <div
                        class="flex flex-wrap items-center justify-between pt-1 gap-2">


                        <!-- Remember Me -->
                        <label
                            class="flex items-center gap-2.5 cursor-pointer select-none">

                            <input
                                id="rememberMe"
                                name="rememberMe"
                                type="checkbox"
                                class="w-4 h-4 rounded accent-primary cursor-pointer">

                            <span class="text-xs sm:text-sm text-secondary">
                                Ingat saya di perangkat ini
                            </span>

                        </label>


                        <!-- Forgot Password -->
                        <a
                            href="#"
                            class="text-xs sm:text-sm text-primary font-normal hover:text-primary-container transition-colors">
                            Lupa Sandi?
                        </a>

                    </div>


                    <!-- Login Button -->
                    <button
                        id="btnSubmit"
                        type="submit"
                        class="w-full mt-1 sm:mt-2 py-3 sm:py-3.5 px-5 rounded-full bg-primary hover:bg-tertiary text-white font-semibold text-sm transition-all duration-200 shadow-md shadow-primary/20 flex items-center justify-center gap-2 active:scale-[0.99]">

                        <span>
                            Masuk ke Akun
                        </span>

                        <span class="material-symbols-outlined text-[18px]">
                            arrow_forward
                        </span>

                    </button>

                </form>

                <!-- Login dengan Google -->
<div class="flex items-center my-4 sm:my-6">

    <div class="flex-1 h-px bg-surface-variant"></div>

    <span
        class="px-2 sm:px-3 text-[11px] sm:text-xs text-secondary/80 bg-white whitespace-nowrap">
        atau masuk dengan
    </span>

    <div class="flex-1 h-px bg-surface-variant"></div>

</div>


<!-- Tombol Google -->
<div class="w-full">

    <button
        type="button"
        class="w-full flex items-center justify-center gap-2.5 py-3 px-4 rounded-xl bg-surface-container-low hover:bg-surface-container text-on-surface font-semibold text-xs sm:text-sm transition-all active:scale-[0.98]">

        <!-- Logo Google -->
        <svg
            class="w-4 h-4 flex-shrink-0"
            viewBox="0 0 24 24">

            <path
                d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.66v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.15z"
                fill="#4285F4">
            </path>

            <path
                d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24z"
                fill="#34A853">
            </path>

            <path
                d="M5.28 14.27A7.19 7.19 0 0 1 4.9 12c0-.79.14-1.57.38-2.27V6.58H1.25A11.97 11.97 0 0 0 0 12c0 1.92.45 3.74 1.25 5.42l4.03-3.15z"
                fill="#FBBC05">
            </path>

            <path
                d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98z"
                fill="#EA4335">
            </path>

        </svg>

        <span>
            Lanjutkan dengan Google
        </span>

    </button>

</div>


                <!-- Register Link -->
                <div class="flex flex-col items-center gap-3 pt-5 sm:pt-6 text-center">

                    <p class="text-xs sm:text-sm text-secondary">

                        Belum punya akun Litera?

                        <a
                            href="register.php"
                            class="text-primary font-semibold hover:underline ml-1">
                            Daftar gratis
                        </a>

                    </p>

                </div>

            </div>


            <!-- Security -->
            <div
                class="mt-5 sm:mt-6 flex items-center justify-center text-secondary/60">

                <div
                    class="flex items-center gap-1.5 text-[10px] sm:text-xs font-semibold">

                    </span>                    

                </div>

            </div>

        </div>

    </main>


    <!-- Password Visibility -->
    <script>

        function togglePasswordVisibility() {

            const passwordInput =
                document.getElementById('passwordField');

            const passwordIcon =
                document.getElementById('passwordIcon');


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

    </script>

</body>

</html>