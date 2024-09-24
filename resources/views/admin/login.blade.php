<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Login </title>

    <!-- fave-icon  -->
    <link rel="shortcut icon" href="assets/images/icon/fave-icon.png" type="image/png">

    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/admin_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin_assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin_assets/css/responsive.css') }}">

</head>

<body>


    <div class="sign-up-top">

        <div class="sign-up-main">
            <div class="sign-up-logo">
                <img src="{{ asset('/admin_assets/assets/images/logo/Logo.svg') }}" alt="logo">
            </div>
            <div class="sign-up-text">
                <h2>Sign in to Bankco.</h2>
                <p>Send, spend and save smarter</p>
            </div>

            <div class="sign-up-from">
                <div class="sign-up-from-item">
                    <form action="{{ route('admin.auth') }}" method="POST">
                        @csrf
                        <div class="sign-up-from-inner">
                            <input type="email" class="form-control" name="email" id="exampleFormControlInput"
                                placeholder="Email" required>
                        </div>
                        <div class="sign-up-from-inner">
                            <input type="password" class="form-control" name="password" id="exampleFormControlInput1"
                                placeholder="Password" required>

                            @if (session('error'))
                                <span class="text-danger ps-2">{{ session('error') }}</span>
                            @endif


                            <span class="text-danger ps-2"></span>

                            <div class="icon">
                                <span>
                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 1L20 19" stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M9.58445 8.58691C9.20917 8.96193 8.99823 9.47067 8.99805 10.0012C8.99786 10.5317 9.20844 11.0406 9.58345 11.4159C9.95847 11.7912 10.4672 12.0021 10.9977 12.0023C11.5283 12.0025 12.0372 11.7919 12.4125 11.4169"
                                            stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M8.363 3.36506C9.22042 3.11978 10.1082 2.9969 11 3.00006C15 3.00006 18.333 5.33306 21 10.0001C20.222 11.3611 19.388 12.5241 18.497 13.4881M16.357 15.3491C14.726 16.4491 12.942 17.0001 11 17.0001C7 17.0001 3.667 14.6671 1 10.0001C2.369 7.60506 3.913 5.82506 5.632 4.65906"
                                            stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="sign-up-from-inner">

                            <div class="sign-up-from-df">
                                <div class="form-check">
                                    <input class="form-check-input" name="remember-me" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Remember me

                                    </label>
                                </div>

                                <div class="main-btn">
                                    <button type="button" class="modal-sign-up-from-btn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal-3" data-bs-dismiss="modal">
                                        Forgot Password?
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <input type="submit" class="btn btn-success text-center"value="Login">
                        </div>


                        <div class="sign-up-btn-btm-text">
                            <p>@ 2023 Bankco. All Right Reserved. </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="sign-up-main-two">

            <div class="sign-up-main-two-item">
                <div class="sign-up-img">
                    <img src="{{ asset('/admin_assets/assets/images/sign-up.svg') }}" alt="img">
                </div>

                <div class="sign-up-main-two-item-text">
                    <h2>Speady, Easy and Fast</h2>
                    <p>BankCo. help you set saving goals, earn cash back offers, Go to disclaimer for more details and
                        get paychecks up to two days early. Get a $20 bonus when you receive qualifying direct deposits
                    </p>
                </div>
            </div>


        </div>

    </div>

    <script src="{{ asset('admin_assets/assets/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/custom.js') }}"></script>
</body>

</html>
