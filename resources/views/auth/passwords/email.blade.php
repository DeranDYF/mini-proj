<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>DYFZN | Reset Password</title>
    <link rel="icon" type="image/png" href="/assets/images/logo/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/rt-plugins.css">
    <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="">
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
            <div class="right-column relative">
                <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
                    <div class="auth-box2 flex flex-col justify-center h-full">
                        <div class="mobile-logo text-center mb-6 lg:hidden block">
                            <a href="index.html">
                                <img src="/assets/images/logo/logo.svg" alt="" class="mx-auto">
                                <img src="/assets/images/logo/logo-white.svg" alt="" class="mx-auto">
                            </a>
                        </div>
                        <div class="text-center 2xl:mb-10 mb-5">
                            <h4 class="font-medium mb-4">Forgot Your Password?</h4>
                            <div class="text-slate-500 dark:text-slate-400 text-base">
                                You can reset password on this.
                            </div>
                        </div>

                        @if (session('status'))
                        <div class="font-normal text-base text-slate-500 dark:text-slate-400 text-center px-2 bg-success-400 dark:success-700 rounded
                                py-3 mb-4 mt-10">
                            {{ session('status') }}
                        </div>
                        @else
                        <div class="font-normal text-base text-slate-500 dark:text-slate-400 text-center px-2 bg-slate-100 dark:bg-slate-600 rounded
                                py-3 mb-4 mt-10">
                            Enter your Email and instructions will be sent to you!
                        </div>
                        @endif
                        <!-- BEGIN: Forgot Password Form -->
                        <form method="POST" class="space-y-4" action="{{ route('password.email') }}">
                            @csrf
                            <div class="fromGroup">
                                <label class="block capitalize form-label">email</label>
                                <div class="relative ">
                                    <input type="email" id="email" name="email"
                                        class="form-control py-2 @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" placeholder="Enter your Email">
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <button class="btn btn-dark block w-full text-center">Send recovery email</button>
                        </form>
                        <!-- END: Forgot Password Form -->

                        <div
                            class="md:max-w-[345px] mx-auto font-normal text-slate-500 dark:text-slate-400 2xl:mt-12 mt-8 uppercase text-sm">
                            Forget It,
                            <a href="{{ route('login') }}"
                                class="text-slate-900 dark:text-white font-medium hover:underline">
                                Send me Back
                            </a>
                            to The Log In
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