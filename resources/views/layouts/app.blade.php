<!DOCTYPE html>
<html lang="zxx" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>DYFZN Camera Store | {{ $title }}</title>
    <link rel="icon" type="image/png" href="/assets/images/logo/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/rt-plugins.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <script src="/assets/js/settings.js" sync></script>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment/locale/id.js"></script>

</head>

<body class=" font-inter dashcode-app" id="body_class">
    <main class="app-wrapper">
        @include('layouts/sidebar')
        @include('layouts/setting')
        <div class="flex flex-col justify-between min-h-screen">
            <div>
                @include('layouts/header')
                @yield('content')
            </div>

            <footer class="md:block hidden" id="footer">
                <div class="site-footer px-6 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-300 py-4 ltr:ml-[248px] rtl:mr-[248px]">
                    <div class="grid md:grid-cols-2 grid-cols-1 md:gap-5">
                        <div class="text-center ltr:md:text-start rtl:md:text-right text-sm">
                            COPYRIGHT ©
                            <span id="thisYear"></span>
                            DYFZN, All rights Reserved
                        </div>
                        <div class="ltr:md:text-right rtl:md:text-end text-center text-sm">
                            Hand-crafted &amp; Made by
                            <a href="https://codeshaper.net" target="_blank" class="text-primary-500 font-semibold">
                                Codeshaper
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
    <script src="/assets/js/rt-plugins.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>