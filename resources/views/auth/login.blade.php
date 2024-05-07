<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>DYFZN | Login</title>
    <link rel="icon" type="image/png" href="/assets/images/logo/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/rt-plugins.css">
    <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="">
    <link rel="stylesheet" href="/assets/css/app.css">
    <script src="/assets/js/settings.js" sync></script>
</head>

<body class=" font-inter skin-default">
    <div class="loginwrapper">
        <div class="lg-inner-column">
            <div class="left-column relative z-[1]">
                <div class="max-w-[520px] pt-20 ltr:pl-20 rtl:pr-20">
                    <a href="/">
                        <img src="/assets/images/logo/logo-dark.png" alt="" class="mb-10 dark_logo">
                        <img src="/assets/images/logo/logo-white.png" alt="" class="mb-10 white_logo">
                    </a>
                    <h4>
                        Unlock your Project
                        <span class="text-slate-800 dark:text-slate-400 font-bold">
                            performance
                        </span>
                    </h4>
                </div>
                <div class="absolute left-0 2xl:bottom-[-160px] bottom-[-130px] h-full w-full z-[-1]">
                    <img src="/assets/images/auth/ils1.svg" alt="" class=" h-full w-full object-contain">
                </div>
            </div>
            <div class="right-column  relative">
                <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
                    <div class="auth-box h-full flex flex-col justify-center">
                        <div class="mobile-logo text-center mb-6 lg:hidden block">
                            <a href="index.html">
                                <img src="assets/images/logo/logo.svg" alt="" class="mb-10 dark_logo">
                                <img src="assets/images/logo/logo-white.svg" alt="" class="mb-10 white_logo">
                            </a>
                        </div>
                        <div class="text-center 2xl:mb-10 mb-4">
                            <h4 class="font-medium">Log in</h4>
                            <div class="text-slate-500 text-base">
                                Log in to your account to start
                            </div>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="fromGroup">
                                <label class="block capitalize form-label">email</label>
                                <div class="relative mb-1">
                                    <input type="email" id="email" name="email" class="form-control py-2 @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter your email" autocomplete="email" autofocus required>
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="fromGroup">
                                <label class="block capitalize form-label">password</label>
                                <div class="relative"><input type="password" name="password" class="form-control py-2 @error('password') is-invalid @enderror" id="password" placeholder="Enter your password" autocomplete="current-password" required>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="flex justify-between mt-2">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" class="hiddens" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="text-slate-500 dark:text-slate-400 text-sm leading-6 capitalize mx-2">
                                        Remember Me</span>
                                </label>
                                <a class="text-sm text-slate-800 dark:text-slate-400 leading-6 font-medium" href="{{ route('password.request') }}">Forgot
                                    Password?
                                </a>
                            </div>
                            <button class="btn btn-dark block w-full text-center mt-4">Log in</button>
                        </form>
                        <div class="relative border-b-[#9AA2AF] border-opacity-[16%] border-b pt-6">
                            <div class="absolute inline-block bg-white dark:bg-slate-800 dark:text-slate-400 left-1/2 top-1/2 transform -translate-x-1/2
                                    px-4 min-w-max text-sm text-slate-500 font-normal">
                                Or continue with
                            </div>
                        </div>
                        <div class="max-w-[242px] mx-auto mt-8 w-full">
                            <ul class="flex">
                                <li class="flex-1">
                                    <a href="#" class="inline-flex h-10 w-10 bg-[#1C9CEB] text-white text-2xl flex-col items-center justify-center rounded-full">
                                        <img src="assets/images/icon/tw.svg" alt="">
                                    </a>
                                </li>
                                <li class="flex-1">
                                    <a href="#" class="inline-flex h-10 w-10 bg-[#395599] text-white text-2xl flex-col items-center justify-center rounded-full">
                                        <img src="assets/images/icon/fb.svg" alt="">
                                    </a>
                                </li>
                                <li class="flex-1">
                                    <a href="#" class="inline-flex h-10 w-10 bg-[#0A63BC] text-white text-2xl flex-col items-center justify-center rounded-full">
                                        <img src="assets/images/icon/in.svg" alt="">
                                    </a>
                                </li>
                                <li class="flex-1">
                                    <a href="/auth/google/redirect" class="inline-flex h-10 w-10 bg-[#EA4335] text-white text-2xl flex-col items-center justify-center rounded-full">
                                        <img src="assets/images/icon/gp.svg" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="auth-footer text-center">
                        Copyright 2024, DYFZN All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- scripts -->
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/rt-plugins.js"></script>
    <script src="/assets/js/app.js"></script>
</body>

</html>