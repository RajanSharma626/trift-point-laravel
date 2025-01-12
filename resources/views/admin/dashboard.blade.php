<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard</title>

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
    <div class="body-bg">
        <!-- NFTMax Admin Menu -->
        <x-sidebar pageId=1 />
        <!-- End NFTMax Admin Menu -->

        <!-- Start Header -->
        <x-navbar pageName="Dashboard" />
        <!-- End Header -->

        <!-- NFTmax Dashboard -->
        <section class="nftmax-adashboard nftmax-show">
            
            <div class=" nftmax-adashboard-left ">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="total-earnings">
                            <div class="total-earnings-main">
                                <div class="sub-earnings">
                                    <div class="icon">
                                        <img src="assets/images/icon/total.png" alt="icon">
                                    </div>
                                    <div class="text">
                                        <h6>Total earnings</h6>
                                    </div>
                                </div>

                                <div class="sub-earnings-user">
                                    <img src="assets/images/icon/user.png" alt="img">
                                </div>
                            </div>

                            <div class="total-earnings-inner">
                                <div class="total-earnings-price">
                                    <h2>$7,245.00</h2>

                                    <div class="total-earnings-price-btm">
                                        <span>
                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.4318 0.52295L12.4446 0.52295L8.55575 0.522949L7.56859 0.522949C6.28227 0.522949 5.48082 1.9183 6.12896 3.0294L9.06056 8.05501C9.7037 9.15752 11.2967 9.15752 11.9398 8.05501L14.8714 3.0294C15.5196 1.91831 14.7181 0.52295 13.4318 0.52295Z"
                                                    fill="#22C55E" />
                                                <path opacity="0.4"
                                                    d="M2.16878 13.0486L3.15594 13.0486L7.04483 13.0486L8.03199 13.0486C9.31831 13.0486 10.1198 11.6532 9.47163 10.5421L6.54002 5.51652C5.89689 4.41402 4.30389 4.41401 3.66076 5.51652L0.729153 10.5421C0.0810147 11.6532 0.882466 13.0486 2.16878 13.0486Z"
                                                    fill="#22C55E" />
                                            </svg>
                                        </span>

                                        <span class="span-color"> + 3.5% </span>

                                        <span> from last week </span>
                                    </div>
                                </div>
                                <div class="total-earnings-price-btm-img">
                                    <div class="w-[106px]">
                                        <canvas id="totalEarn" height="68"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-responsive-padd-top-20px">
                        <div class="total-earnings">
                            <div class="total-earnings-main">
                                <div class="sub-earnings">
                                    <div class="icon">
                                        <img src="assets/images/icon/total-1.png" alt="icon">
                                    </div>
                                    <div class="text">
                                        <h6>Total Spending</h6>
                                    </div>
                                </div>

                                <div class="sub-earnings-user">
                                    <img src="assets/images/icon/user.png" alt="img">
                                </div>
                            </div>

                            <div class="total-earnings-inner">
                                <div class="total-earnings-price">
                                    <h2>$7,245.00</h2>

                                    <div class="total-earnings-price-btm">
                                        <span>
                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.4318 0.52295L12.4446 0.52295L8.55575 0.522949L7.56859 0.522949C6.28227 0.522949 5.48082 1.9183 6.12896 3.0294L9.06056 8.05501C9.7037 9.15752 11.2967 9.15752 11.9398 8.05501L14.8714 3.0294C15.5196 1.91831 14.7181 0.52295 13.4318 0.52295Z"
                                                    fill="#22C55E" />
                                                <path opacity="0.4"
                                                    d="M2.16878 13.0486L3.15594 13.0486L7.04483 13.0486L8.03199 13.0486C9.31831 13.0486 10.1198 11.6532 9.47163 10.5421L6.54002 5.51652C5.89689 4.41402 4.30389 4.41401 3.66076 5.51652L0.729153 10.5421C0.0810147 11.6532 0.882466 13.0486 2.16878 13.0486Z"
                                                    fill="#22C55E" />
                                            </svg>
                                        </span>

                                        <span class="span-color">- 0,5% </span>

                                        <span> from last week </span>
                                    </div>
                                </div>
                                <div class="total-earnings-price-btm-img">
                                    <div class="w-[106px]">
                                        <canvas id="totalSpending" height="68"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-block col-responsive-padd-top-20px">
                        <div class="total-earnings">
                            <div class="total-earnings-main">
                                <div class="sub-earnings">
                                    <div class="icon">
                                        <img src="assets/images/icon/total-1.png" alt="icon">
                                    </div>
                                    <div class="text">
                                        <h6>Spending Goal</h6>
                                    </div>
                                </div>

                                <div class="sub-earnings-user">
                                    <img src="assets/images/icon/user.png" alt="img">
                                </div>
                            </div>

                            <div class="total-earnings-inner">
                                <div class="total-earnings-price">
                                    <h2>$7,245.00</h2>

                                    <div class="total-earnings-price-btm">
                                        <span>
                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.4318 0.52295L12.4446 0.52295L8.55575 0.522949L7.56859 0.522949C6.28227 0.522949 5.48082 1.9183 6.12896 3.0294L9.06056 8.05501C9.7037 9.15752 11.2967 9.15752 11.9398 8.05501L14.8714 3.0294C15.5196 1.91831 14.7181 0.52295 13.4318 0.52295Z"
                                                    fill="#22C55E" />
                                                <path opacity="0.4"
                                                    d="M2.16878 13.0486L3.15594 13.0486L7.04483 13.0486L8.03199 13.0486C9.31831 13.0486 10.1198 11.6532 9.47163 10.5421L6.54002 5.51652C5.89689 4.41402 4.30389 4.41401 3.66076 5.51652L0.729153 10.5421C0.0810147 11.6532 0.882466 13.0486 2.16878 13.0486Z"
                                                    fill="#22C55E" />
                                            </svg>
                                        </span>

                                        <span class="span-color"> 2.4%</span>

                                        <span> from last week </span>
                                    </div>
                                </div>
                                <div class="total-earnings-price-btm-img">
                                    <div class="w-[106px]">
                                        <canvas id="totalGoal" height="68"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-mt-25px">
                    <div class="col-lg-8 col-md-8">
                        <div class="revenue-item">
                            <div class="revenue-inner">



                                <div class="revenue-inner-text">
                                    <h2>Revenue Flow</h2>
                                </div>
                                <div class="revenue-inner-df">
                                    <div class="revenue-inner-df-text">
                                        <div class="yellow"></div>
                                        <div class="text">
                                            <h6>Pending </h6>
                                        </div>
                                    </div>
                                    <div class="revenue-inner-df-text">
                                        <div class="yellow signed "></div>
                                        <div class="text">
                                            <h6>Signed </h6>
                                        </div>
                                    </div>
                                    <div class="revenue-inner-df-text">
                                        <div class="yellow lost"></div>
                                        <div class="text">
                                            <h6>Lost </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="revenue-item-btn">
                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            Jan 10 - Jan 16

                                            <span>
                                                <svg width="16" height="17" viewBox="0 0 16 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4 6.5L8 10.5L12 6.5" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#"> Jan 10 - Jan 16</a></li>
                                            <li><a class="dropdown-item" href="#"> Jan 10 - Jan 16</a></li>
                                            <li><a class="dropdown-item" href="#"> Jan 10 - Jan 16</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="revene-chart">
                                <canvas id="revenueFlow" height="255" width="659"></canvas>
                            </div>


                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-responsive-padd-top-20px">
                        <div class="efficiency-item">

                            <div class="efficiency-item-inner">
                                <div class="efficiency-item-text">
                                    <h2>Efficiency</h2>
                                </div>
                                <div class="efficiency-item-btn">
                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Monthly

                                            <span>
                                                <svg width="16" height="17" viewBox="0 0 16 17"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4 6.5L8 10.5L12 6.5" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#"> January </a></li>
                                            <li><a class="dropdown-item" href="#"> February </a></li>
                                            <li><a class="dropdown-item" href="#"> March </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="efficiency-item-chart-main">
                                <div class="efficiency-item-chart">
                                    <canvas id="pie_chart" height="168" width="180"></canvas>

                                </div>

                                <div class="efficiency-item-chart-main-text">
                                    <div class="efficiency-item-chart-text">
                                        <h2> $5,230 <span>
                                                <svg width="14" height="12" viewBox="0 0 14 12"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M10.7749 0.558058C10.5309 0.313981 10.1351 0.313981 9.89107 0.558058L7.39107 3.05806C7.14699 3.30214 7.14699 3.69786 7.39107 3.94194C7.63514 4.18602 8.03087 4.18602 8.27495 3.94194L9.70801 2.50888V11C9.70801 11.3452 9.98783 11.625 10.333 11.625C10.6782 11.625 10.958 11.3452 10.958 11V2.50888L12.3911 3.94194C12.6351 4.18602 13.0309 4.18602 13.2749 3.94194C13.519 3.69786 13.519 3.30214 13.2749 3.05806L10.7749 0.558058Z"
                                                        fill="#22C55E" />
                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M3.22407 11.4419C3.46815 11.686 3.86388 11.686 4.10796 11.4419L6.60796 8.94194C6.85203 8.69786 6.85203 8.30214 6.60796 8.05806C6.36388 7.81398 5.96815 7.81398 5.72407 8.05806L4.29102 9.49112L4.29102 1C4.29101 0.654823 4.01119 0.375001 3.66602 0.375001C3.32084 0.375001 3.04102 0.654823 3.04102 1L3.04102 9.49112L1.60796 8.05806C1.36388 7.81398 0.968151 7.81398 0.724074 8.05806C0.479996 8.30214 0.479996 8.69786 0.724074 8.94194L3.22407 11.4419Z"
                                                        fill="#22C55E" />
                                                </svg>
                                            </span></h2>

                                        <p>Arrival</p>
                                    </div>
                                    <div class="efficiency-item-chart-text efficiency-item-chart-text-two">
                                        <h2> $5,230 <span>
                                                <svg width="14" height="12" viewBox="0 0 14 12"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M10.7749 0.558058C10.5309 0.313981 10.1351 0.313981 9.89107 0.558058L7.39107 3.05806C7.14699 3.30214 7.14699 3.69786 7.39107 3.94194C7.63514 4.18602 8.03087 4.18602 8.27495 3.94194L9.70801 2.50888V11C9.70801 11.3452 9.98783 11.625 10.333 11.625C10.6782 11.625 10.958 11.3452 10.958 11V2.50888L12.3911 3.94194C12.6351 4.18602 13.0309 4.18602 13.2749 3.94194C13.519 3.69786 13.519 3.30214 13.2749 3.05806L10.7749 0.558058Z"
                                                        fill="#1A202C" />
                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M3.22407 11.4419C3.46815 11.686 3.86388 11.686 4.10796 11.4419L6.60796 8.94194C6.85203 8.69786 6.85203 8.30214 6.60796 8.05806C6.36388 7.81398 5.96815 7.81398 5.72407 8.05806L4.29102 9.49112L4.29102 1C4.29101 0.654823 4.01119 0.375001 3.66602 0.375001C3.32084 0.375001 3.04102 0.654823 3.04102 1L3.04102 9.49112L1.60796 8.05806C1.36388 7.81398 0.968151 7.81398 0.724074 8.05806C0.479996 8.30214 0.479996 8.69786 0.724074 8.94194L3.22407 11.4419Z"
                                                        fill="#1A202C" />
                                                </svg>
                                            </span></h2>

                                        <p>Spending</p>
                                    </div>
                                </div>


                            </div>


                            <div class="efficiency-item-btm">
                                <div class="efficiency-item-btm-text">
                                    <div class="text-one">
                                        <div class="goal"></div>

                                        <p>Goal</p>
                                    </div>
                                    <div class="text">
                                        <p>13%</p>
                                    </div>
                                </div>
                                <div class="efficiency-item-btm-text">
                                    <div class="text-one">
                                        <div class="goal spending"></div>

                                        <p>Spending</p>
                                    </div>
                                    <div class="text">
                                        <p>28%</p>
                                    </div>
                                </div>
                                <div class="efficiency-item-btm-text">
                                    <div class="text-one">
                                        <div class="goal others"></div>

                                        <p>Others</p>
                                    </div>
                                    <div class="text">
                                        <p>59%</p>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>

                <div class="row tabel-main-box">
                    <div class="col-lg-12 col-padding-0">
                        <div class="tabel-search-box">
                            <div class="tabel-search-box-item">
                                <div class="tabel-search-box-inner">
                                    <div class="search-icon">
                                        <span>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="9.7859" cy="9.78614" r="8.23951" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></circle>
                                                <path d="M15.5166 15.9448L18.747 19.1668" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" id="exampleFormControlInput1-0"
                                        placeholder="Search by name, email, or others...">
                                </div>
                                <div class="tabel-search-box-button">
                                    <div class="tabel-search-box-button-img">
                                        <img src="assets/images/icon/filter.svg" alt="img">
                                    </div>
                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink-2" data-bs-toggle="dropdown" aria-expanded="false">
                                            Filters
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item" href="#"> January</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">February</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"> March</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-padding-0 col-pr-15px margin-top-20px">
                        <div class="list-btn-item">
                            <div class="list-btn-text">
                                <h5>Location</h5>
                            </div>
                            <div class="list-btn">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        State or province

                                        <span class="btn-img">
                                            <img src="assets/images/icon/chevron-down.png" alt="img">
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark"
                                        aria-labelledby="dropdownMenuButton2">
                                        <li>
                                            <a class="dropdown-item active" href="#">January</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">February</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">March</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-padding-0 col-pr-15px margin-top-20px">
                        <div class="list-btn-item">
                            <div class="list-btn-text">
                                <h5>Amount Spent</h5>
                            </div>
                            <div class="list-btn">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2-0"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        > $1,000

                                        <span class="btn-img">
                                            <img src="assets/images/icon/chevron-down.png" alt="img">
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark"
                                        aria-labelledby="dropdownMenuButton2">
                                        <li>
                                            <a class="dropdown-item active" href="#">January</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">February</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">March</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-padding-0 col-pr-15px margin-top-20px">
                        <div class="list-btn-item">
                            <div class="list-btn-text">
                                <h5>Transaction list Date</h5>
                            </div>
                            <div class="list-btn">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2-01"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Select date

                                        <span class="btn-img">
                                            <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.6753 2.81873H3.67529C2.57072 2.81873 1.67529 3.71416 1.67529 4.81873V16.8187C1.67529 17.9233 2.57072 18.8187 3.67529 18.8187H15.6753C16.7799 18.8187 17.6753 17.9233 17.6753 16.8187V4.81873C17.6753 3.71416 16.7799 2.81873 15.6753 2.81873Z"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M13.6753 0.818726V4.81873" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.67529 0.818726V4.81873" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M1.67529 8.81873H17.6753" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M8.67529 12.8187H9.67529" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9.67529 12.8187V15.8187" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark"
                                        aria-labelledby="dropdownMenuButton2">
                                        <li>
                                            <a class="dropdown-item active" href="#">January</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">February</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">March</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-padding-0 margin-top-20px">
                        <div class="list-btn-item">
                            <div class="list-btn-text">
                                <h5>Type of transaction</h5>
                            </div>
                            <div class="list-btn">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2-0-1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        All transaction

                                        <span class="btn-img">
                                            <img src="assets/images/icon/chevron-down.png" alt="img">
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark"
                                        aria-labelledby="dropdownMenuButton2">
                                        <li>
                                            <a class="dropdown-item active" href="#">January</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">February</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">March</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="tabel-main">
                            <table id="expendable-data-table" class="table display nowrap">
                                <thead>
                                    <tr>
                                        <td class="details-control">
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel"
                                                value="" aria-label="...">
                                        </td>
                                        <th>
                                            Customer name
                                            <span>
                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.332 2.31567V14.3157" stroke="#718096"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6.66602 12.3157L4.66602 14.3157L2.66602 12.3157"
                                                        stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M4.66602 14.3157V2.31567" stroke="#718096"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M13.332 4.31567L11.332 2.31567L9.33203 4.31567"
                                                        stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </th>
                                        <th>
                                            Email
                                            <span>
                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.332 2.31567V14.3157" stroke="#718096"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6.66602 12.3157L4.66602 14.3157L2.66602 12.3157"
                                                        stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M4.66602 14.3157V2.31567" stroke="#718096"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M13.332 4.31567L11.332 2.31567L9.33203 4.31567"
                                                        stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </th>
                                        <th>
                                            Location
                                            <span>
                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.332 2.31567V14.3157" stroke="#718096"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6.66602 12.3157L4.66602 14.3157L2.66602 12.3157"
                                                        stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M4.66602 14.3157V2.31567" stroke="#718096"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M13.332 4.31567L11.332 2.31567L9.33203 4.31567"
                                                        stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </th>
                                        <th>
                                            Spent
                                            <span>
                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.332 2.31567V14.3157" stroke="#718096"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6.66602 12.3157L4.66602 14.3157L2.66602 12.3157"
                                                        stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M4.66602 14.3157V2.31567" stroke="#718096"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M13.332 4.31567L11.332 2.31567L9.33203 4.31567"
                                                        stroke="#718096" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="details-control">
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel-0"
                                                value="" aria-label="...">
                                        </td>
                                        <td>
                                            <div class="tabel-item">
                                                <div class="tabel-img">
                                                    <img src="assets/images/tabel-1.png" alt="img">
                                                </div>
                                                <div class="tabel-text">
                                                    <p>Devon Lane</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>devon@mail.com</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>
                                            <button class="btn btn-primary" type="submit">
                                                <span>
                                                    <svg width="18" height="4" viewBox="0 0 18 4"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 2.00024C8 2.55253 8.44772 3.00024 9 3.00024C9.55228 3.00024 10 2.55253 10 2.00024C10 1.44796 9.55228 1.00024 9 1.00024C8.44772 1.00024 8 1.44796 8 2.00024Z"
                                                            stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M1 2.00024C1 2.55253 1.44772 3.00024 2 3.00024C2.55228 3.00024 3 2.55253 3 2.00024C3 1.44796 2.55228 1.00024 2 1.00024C1.44772 1.00024 1 1.44796 1 2.00024Z"
                                                            stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M15 2.00024C15 2.55253 15.4477 3.00024 16 3.00024C16.5523 3.00024 17 2.55253 17 2.00024C17 1.44796 16.5523 1.00024 16 1.00024C15.4477 1.00024 15 1.44796 15 2.00024Z"
                                                            stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="details-control">
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel-001"
                                                value="" aria-label="...">
                                        </td>
                                        <td>
                                            <div class="tabel-item">
                                                <div class="tabel-img">
                                                    <img src="assets/images/tabel-2.png" alt="img">
                                                </div>
                                                <div class="tabel-text">
                                                    <p>Bessie Cooper</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>
                                            <button class="btn btn-primary" type="submit">
                                                <span>
                                                    <svg width="18" height="4" viewBox="0 0 18 4"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 2.00024C8 2.55253 8.44772 3.00024 9 3.00024C9.55228 3.00024 10 2.55253 10 2.00024C10 1.44796 9.55228 1.00024 9 1.00024C8.44772 1.00024 8 1.44796 8 2.00024Z"
                                                            stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M1 2.00024C1 2.55253 1.44772 3.00024 2 3.00024C2.55228 3.00024 3 2.55253 3 2.00024C3 1.44796 2.55228 1.00024 2 1.00024C1.44772 1.00024 1 1.44796 1 2.00024Z"
                                                            stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M15 2.00024C15 2.55253 15.4477 3.00024 16 3.00024C16.5523 3.00024 17 2.55253 17 2.00024C17 1.44796 16.5523 1.00024 16 1.00024C15.4477 1.00024 15 1.44796 15 2.00024Z"
                                                            stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="details-control">
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel-11"
                                                value="" aria-label="...">
                                        </td>
                                        <td>
                                            <div class="tabel-item">
                                                <div class="tabel-img">
                                                    <img src="assets/images/tabel-3.png" alt="img">
                                                </div>
                                                <div class="tabel-text">
                                                    <p>Dianne Russell</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>
                                            <button class="btn btn-primary" type="submit">
                                                <span>
                                                    <svg width="18" height="4" viewBox="0 0 18 4"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 2.00024C8 2.55253 8.44772 3.00024 9 3.00024C9.55228 3.00024 10 2.55253 10 2.00024C10 1.44796 9.55228 1.00024 9 1.00024C8.44772 1.00024 8 1.44796 8 2.00024Z"
                                                            stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M1 2.00024C1 2.55253 1.44772 3.00024 2 3.00024C2.55228 3.00024 3 2.55253 3 2.00024C3 1.44796 2.55228 1.00024 2 1.00024C1.44772 1.00024 1 1.44796 1 2.00024Z"
                                                            stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M15 2.00024C15 2.55253 15.4477 3.00024 16 3.00024C16.5523 3.00024 17 2.55253 17 2.00024C17 1.44796 16.5523 1.00024 16 1.00024C15.4477 1.00024 15 1.44796 15 2.00024Z"
                                                            stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="show-result-main">
                                <div class="show-result-main-item">
                                    <div class="show-result-main-inner-one">
                                        <div class="show-result-main-inner-text">
                                            <p>Show result</p>
                                        </div>
                                        <div class="show-result-main-inner-btn">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    3

                                                    <span class="btn-img">
                                                        <img src="assets/images/icon/chevron-down.png" alt="img">
                                                    </span>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li>
                                                        <button class="dropdown-item" type="button">
                                                            1
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item" type="button">
                                                            2
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="dropdown-item" type="button">
                                                            3
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="show-result-main-inner">
                                        <nav aria-label="...">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Previous</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item active" aria-current="page">
                                                    <a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">...</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">20</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" nftmax-adashboard-right ">

                <div class="nftmax-adashboard-right-res-df">
                    <div class="my-walet-main-box">
                        <div class="my-walet-item-box">
                            <div class="my-walet-item-box-inner">
                                <div class="my-walet-item-box-text">
                                    <h4>My Wallet</h4>
                                </div>
                                <div class="my-walet-item-box-btn">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton1-05" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <svg width="18" height="4" viewBox="0 0 18 4" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 2C8 2.55228 8.44772 3 9 3C9.55228 3 10 2.55228 10 2C10 1.44772 9.55228 1 9 1C8.44772 1 8 1.44772 8 2Z"
                                                    stroke="#CBD5E0" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M1 2C1 2.55228 1.44772 3 2 3C2.55228 3 3 2.55228 3 2C3 1.44772 2.55228 1 2 1C1.44772 1 1 1.44772 1 2Z"
                                                    stroke="#CBD5E0" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M15 2C15 2.55228 15.4477 3 16 3C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1C15.4477 1 15 1.44772 15 2Z"
                                                    stroke="#CBD5E0" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2-01">
                                            <li>
                                                <a class="dropdown-item" href="#"> Master Card</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Master Card</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"> Others</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="my-walet-item-box-img-slick">
                                <div class="my-walet-item-box-img">
                                    <img src="assets/images/card-1.svg" class="w-100" alt="img">
                                </div>
                                <div class="my-walet-item-box-img">
                                    <img src="assets/images/card-2.svg" class="w-100" alt="img">
                                </div>
                                <div class="my-walet-item-box-img">
                                    <img src="assets/images/card-3.svg" class="w-100" alt="img">
                                </div>
                            </div>

                            <div class="quick-transfr">
                                <div class="quick-transfr-head">
                                    <h4>Quick Transfer</h4>
                                </div>

                                <div class="quick-trandfr-btn">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton1-02" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <span class="one">
                                                <span>
                                                    <svg width="26" height="16" viewBox="0 0 26 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_1557_18621)">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M9.3877 14.2687H16.3464V1.70776H9.3877V14.2687Z"
                                                                fill="#FF5F00" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M9.82945 7.98847C9.82945 5.44015 11.0173 3.17054 12.867 1.70798C11.5141 0.63819 9.80736 0 7.95215 0C3.56021 0 0 3.57662 0 7.98847C0 12.4003 3.56021 15.9769 7.95215 15.9769C9.80736 15.9769 11.5141 15.3388 12.867 14.269C11.0173 12.8062 9.82945 10.5368 9.82945 7.98847Z"
                                                                fill="#EB001B" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M25.4859 12.9384V12.6284H25.4052L25.3127 12.8417L25.2199 12.6284H25.1393V12.9384H25.196V12.7045L25.2831 12.9062H25.3421L25.4291 12.7041V12.9384H25.4859ZM24.9753 12.9384V12.6812H25.0787V12.6289H24.8158V12.6812H24.919V12.9384H24.9753ZM25.7342 7.98823C25.7342 12.4001 22.1737 15.9767 17.782 15.9767C15.9268 15.9767 14.2198 15.3385 12.8672 14.2687C14.7169 12.8062 15.9047 10.5366 15.9047 7.98823C15.9047 5.44013 14.7169 3.17051 12.8672 1.70774C14.2198 0.637946 15.9268 -0.000244141 17.782 -0.000244141C22.1737 -0.000244141 25.7342 3.57637 25.7342 7.98823Z"
                                                                fill="#F79E1B" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1557_18621">
                                                                <rect width="26" height="16" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>

                                                <span class="btn-text">Debit</span>
                                            </span>

                                            <span class="two">
                                                <span class="btn-text-two"> $10,431 </span>
                                                <span class="btn-text-svg"><svg width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 6L8 10L12 6" stroke="#A0AEC0" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2-0">
                                            <li>
                                                <a class="dropdown-item" href="#">Jan 10 - Jan 16</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Jan 10 - Jan 16</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Jan 10 - Jan 16</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="btn-two">
                                    <p>Enter amount</p>

                                    <div class="btn-main">
                                        <div class="btn-text">
                                            <h2>$</h2>
                                        </div>
                                        <div class="btn-input">
                                            <input type="email" class="form-control" id="exampleFormControlInput2">
                                        </div>
                                        <div class="btn-img">
                                            <img src="assets/images/recipient.png" alt="img">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="team-chat">
                        <div class="team-chat-head">
                            <div class="team-chat-head-item">
                                <div class="right">
                                    <h3>Team Chat</h3>
                                </div>
                                <div class="left">
                                    <img src="assets/images/member.png" alt="img">
                                    <button class="btn" type="button">
                                        <span>
                                            <img src="assets/images/icon/plus.png" alt="img">
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="team-chat-item">
                            <div class="team-chat-item-inner">
                                <div class="team-chat-item-inner-img">
                                    <img src="assets/images/user-1.png" alt="img">
                                </div>
                                <div class="team-chat-item-inner-text">
                                    <p> Hi, What can I help you with?</p>
                                    <h6>10:00 PM</h6>
                                </div>
                            </div>
                            <div class="team-chat-item-inner">
                                <div class="team-chat-item-inner-img">
                                    <img src="assets/images/user-1.png" alt="img">
                                </div>
                                <div class="team-chat-item-inner-text">
                                    <img src="assets/images/mp3.png" class="img-fluid" alt="img">
                                    <h6>10:00 PM</h6>
                                </div>
                            </div>
                            <div class="team-chat-item-inner">
                                <div class="team-chat-item-inner-text">
                                    <h6>10:00 PM</h6>
                                    <p> Hi, What can I help you with?</p>
                                </div>
                                <div class="team-chat-item-inner-img">
                                    <img src="assets/images/user-1.png" alt="img">
                                </div>
                            </div>
                            <div class="team-chat-item-inner">
                                <div class="team-chat-item-inner-img">
                                    <img src="assets/images/user-1.png" alt="img">
                                </div>
                                <div class="team-chat-item-inner-text">
                                    <p> Hi, What can I help you with?</p>
                                    <h6>10:00 PM</h6>
                                </div>
                            </div>

                            <div class="send-box">
                                <div class="send-box-img-one">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.6665 6.1112L7.22208 10.5557C6.60843 11.1693 6.60843 12.1642 7.22208 12.7779C7.83573 13.3915 8.83065 13.3915 9.4443 12.7779L13.8887 8.33343C15.116 7.10613 15.116 5.11628 13.8887 3.88898C12.6614 2.66168 10.6716 2.66168 9.4443 3.88898L4.99985 8.33343C3.1589 10.1744 3.1589 13.1591 4.99985 15.0001C6.8408 16.841 9.82557 16.841 11.6665 15.0001L16.111 10.5557"
                                                stroke="#CBD5E0" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="send-box-img-two">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19 11V12C19 15.866 15.866 19 12 19M5 11V12C5 15.866 8.13401 19 12 19M12 19V22M12 22H15M12 22H9M12 16C9.79086 16 8 14.2091 8 12V6C8 3.79086 9.79086 2 12 2C14.2091 2 16 3.79086 16 6V12C16 14.2091 14.2091 16 12 16Z"
                                                stroke="#A0AEC0" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>

                                <input type="email" class="form-control" id="exampleFormControlInput1-06"
                                    placeholder="Type your Message...">

                                <div class="send-box-btn">
                                    <a href="#">
                                        <span>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.3894 0H2.61094C0.339326 0 -0.844596 2.63548 0.696196 4.26234L3.78568 7.52441C4.23 7.99355 4.47673 8.60858 4.47673 9.24704V15.4553C4.47673 17.8735 7.61615 18.9233 9.13941 17.0145L19.4463 4.09894C20.7775 2.43071 19.5578 0 17.3894 0Z"
                                                    fill="#22C55E" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </section>
        <!-- End NFTmax Dashboard -->
    </div>

    <script src="{{ asset('admin_assets/assets/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/chart.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/custom.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/modeControl.js') }}"></script>



    <!-- chart-js  -->

    <script>
        let darkMode = JSON.parse(localStorage.getItem("darkMode"))

        function totalEarn() {
            const ctx_bids = document.getElementById("totalEarn").getContext("2d");
            const bitsMonth = [
                "Jan",
                "Feb",
                "Mar",
                "Afril",
                "May",
                "Jan",
                "Feb",
                "Mar",
                "Afril",
                "May",
                "Feb",
                "Mar",
                "Afril",
                "May",
            ];
            const bitsData = [
                0, 10, 0, 65, 0, 25, 0, 35, 20, 100, 40, 75, 50, 85, 60,
            ];
            const totalEarn = new Chart(ctx_bids, {
                type: "line",
                data: {
                    labels: bitsMonth,
                    datasets: [{
                        label: "Visitor",
                        data: bitsData,
                        backgroundColor: () => {
                            const chart = document
                                .getElementById("totalEarn")
                                .getContext("2d");
                            const gradient = chart.createLinearGradient(0, 0, 0, 450);
                            gradient.addColorStop(0, "rgba(34, 197, 94,0.41)");
                            gradient.addColorStop(0.2, "rgba(255, 255, 255, 0)");

                            return gradient;
                        },
                        borderColor: "#22C55E",
                        pointRadius: 0,
                        pointBackgroundColor: "#fff",
                        pointBorderColor: "#22C55E",
                        borderWidth: 1,
                        fill: true,
                        fillColor: "#fff",
                        tension: 0.4,
                    }, ],
                },
                options: {
                    layout: {
                        padding: {
                            bottom: -20,
                        },
                    },
                    maintainAspectRatio: false,
                    responsive: true,
                    scales: {
                        x: {
                            grid: {
                                display: false,
                                drawBorder: false,
                            },
                            ticks: {
                                display: false,
                            },
                        },
                        y: {
                            grid: {
                                display: false,
                                drawBorder: false,
                            },
                            ticks: {
                                display: false,
                            },
                        },
                    },

                    plugins: {
                        legend: {
                            position: "top",
                            display: false,
                        },
                        title: {
                            display: false,
                            text: "Visitor: 2k",
                        },
                        tooltip: {
                            enabled: false,
                        },
                    },
                },
            });
        }
        totalEarn();

        function totalSpendingChart() {
            let ctx_bids = document
                .getElementById("totalSpending")
                .getContext("2d");
            let bitsMonth = [
                "Jan",
                "Feb",
                "Mar",
                "Afril",
                "May",
                "Jan",
                "Feb",
                "Mar",
                "Afril",
                "May",
                "Feb",
                "Mar",
                "Afril",
                "May",
            ];
            let bitsData = [
                0, 10, 0, 65, 0, 25, 0, 35, 20, 100, 40, 75, 50, 85, 60,
            ];
            let totalEarn = new Chart(ctx_bids, {
                type: "line",
                data: {
                    labels: bitsMonth,
                    datasets: [{
                        label: "Visitor",
                        data: bitsData,
                        backgroundColor: () => {
                            const chart = document
                                .getElementById("totalEarn")
                                .getContext("2d");
                            const gradient = chart.createLinearGradient(0, 0, 0, 450);
                            gradient.addColorStop(0, "rgba(34, 197, 94,0.41)");
                            gradient.addColorStop(0.2, "rgba(255, 255, 255, 0)");

                            return gradient;
                        },
                        borderColor: "#22C55E",
                        pointRadius: 0,
                        pointBackgroundColor: "#fff",
                        pointBorderColor: "#22C55E",
                        borderWidth: 1,
                        fill: true,
                        fillColor: "#fff",
                        tension: 0.4,
                    }, ],
                },
                options: {
                    layout: {
                        padding: {
                            bottom: -20,
                        },
                    },
                    maintainAspectRatio: false,
                    responsive: true,
                    scales: {
                        x: {
                            grid: {
                                display: false,
                                drawBorder: false,
                            },
                            ticks: {
                                display: false,
                            },
                        },
                        y: {
                            grid: {
                                display: false,
                                drawBorder: false,
                            },
                            ticks: {
                                display: false,
                            },
                        },
                    },

                    plugins: {
                        legend: {
                            position: "top",
                            display: false,
                        },
                        title: {
                            display: false,
                            text: "Visitor: 2k",
                        },
                        tooltip: {
                            enabled: false,
                        },
                    },
                },
            });
        }
        totalSpendingChart();

        function totalGoal() {
            let ctx_bids = document.getElementById("totalGoal").getContext("2d");
            let bitsMonth = [
                "Jan",
                "Feb",
                "Mar",
                "Afril",
                "May",
                "Jan",
                "Feb",
                "Mar",
                "Afril",
                "May",
                "Feb",
                "Mar",
                "Afril",
                "May",
            ];
            let bitsData = [
                0, 10, 0, 65, 0, 25, 0, 35, 20, 100, 40, 75, 50, 85, 60,
            ];
            let totalEarn = new Chart(ctx_bids, {
                type: "line",
                data: {
                    labels: bitsMonth,
                    datasets: [{
                        label: "Visitor",
                        data: bitsData,
                        backgroundColor: () => {
                            const chart = document
                                .getElementById("totalGoal")
                                .getContext("2d");
                            const gradient = chart.createLinearGradient(0, 0, 0, 450);
                            gradient.addColorStop(0, "rgba(34, 197, 94,0.41)");
                            gradient.addColorStop(0.2, "rgba(255, 255, 255, 0)");
                            console.log({
                                gradient
                            })
                            return gradient;
                        },
                        borderColor: "#22C55E",
                        pointRadius: 0,
                        pointBackgroundColor: "#fff",
                        pointBorderColor: "#22C55E",
                        borderWidth: 1,
                        fill: true,
                        fillColor: "#fff",
                        tension: 0.4,
                    }, ],
                },
                options: {
                    layout: {
                        padding: {
                            bottom: -20,
                        },
                    },
                    maintainAspectRatio: false,
                    responsive: true,
                    scales: {
                        x: {
                            grid: {
                                display: false,
                                drawBorder: false,
                            },
                            ticks: {
                                display: false,
                            },
                        },
                        y: {
                            grid: {
                                display: false,
                                drawBorder: false,
                            },
                            ticks: {
                                display: false,
                            },
                        },
                    },

                    plugins: {
                        legend: {
                            position: "top",
                            display: false,
                        },
                        title: {
                            display: false,
                            text: "Visitor: 2k",
                        },
                        tooltip: {
                            enabled: false,
                        },
                    },
                },
            });
        }
        totalGoal();

        let revenueFlowElement = document
            .getElementById("revenueFlow")
            .getContext("2d");
        let month = [
            "Jan",
            "Feb",
            "Mar",
            "April",
            "May",
            "Jun",
            "July",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
        ];
        let dataSetsLight = [{
                label: "My First Dataset",
                data: [1, 5, 2, 2, 6, 7, 8, 7, 3, 4, 1, 3],
                backgroundColor: [
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(250, 204, 21, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                ],
                borderWidth: 0,
                borderRadius: 5,
            },
            {
                label: "My First Dataset 2",
                data: [5, 2, 4, 2, 5, 8, 3, 7, 3, 4, 1, 3],
                backgroundColor: [
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(255, 120, 75, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                ],
                borderWidth: 0,
                borderRadius: 5,
            },
            {
                label: "My First Dataset 3",
                data: [2, 5, 3, 2, 5, 6, 9, 7, 3, 4, 1, 3],
                backgroundColor: [
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(74, 222, 128, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                    "rgba(237, 242, 247, 1)",
                ],
                borderWidth: 0,
                borderRadius: 5,
            },
        ];
        let dataSetsDark = [{
                label: "My First Dataset",
                data: [1, 5, 2, 2, 6, 7, 8, 7, 3, 4, 1, 3],
                backgroundColor: [
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(250, 204, 21, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                ],
                borderWidth: 0,
                borderRadius: 5,
            },
            {
                label: "My First Dataset 2",
                data: [5, 2, 4, 2, 5, 8, 3, 7, 3, 4, 1, 3],
                backgroundColor: [
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(255, 120, 75, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                ],
                borderWidth: 0,
                borderRadius: 5,
            },
            {
                label: "My First Dataset 3",
                data: [2, 5, 3, 2, 5, 6, 9, 7, 3, 4, 1, 3],
                backgroundColor: [
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(74, 222, 128, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                    "rgba(42, 49, 60, 1)",
                ],
                borderWidth: 0,
                borderRadius: 5,
            },
        ];
        let revenueFlow = new Chart(revenueFlowElement, {
            type: "bar",
            data: {
                labels: month,
                datasets: dataSetsLight,
            },
            options: {
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: "rgb(243 ,246, 255 ,1)",
                        },
                        gridLines: {
                            zeroLineColor: "transparent",
                        },
                        ticks: {
                            callback(value) {
                                return `${value}% `;
                            },
                        },
                    },
                    x: {
                        grid: {
                            color: "rgb(243 ,246, 255 ,1)",
                        },
                        gridLines: {
                            zeroLineColor: "transparent",
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: false,
                    },
                },
                x: {
                    stacked: true,
                },
                y: {
                    stacked: true,
                },
            },
        });
        //pie chart
        let pieChart = document.getElementById("pie_chart").getContext("2d");

        const data = {
            labels: [10, 20, 30],
            datasets: [{
                label: "My First Dataset",
                data: [15, 20, 35, 40],
                backgroundColor: ["#1A202C", "#61C660", "#F8CC4B", "#EDF2F7"],
                borderColor: ["#ffffff", "#ffffff", "#ffffff", "#1A202C"],
                hoverOffset: 18,
                borderWidth: 0,
            }, ],
        };
        const customDatalabels = {
            id: "customDatalabels",
            afterDatasetsDraw(chart, args, pluginOptions) {
                const {
                    ctx,
                    data,
                    chartArea: {
                        top,
                        bottom,
                        left,
                        right,
                        width,
                        height
                    },
                } = chart;
                ctx.save();
                data.datasets[0].data.forEach((datapoint, index) => {
                    const {
                        x,
                        y
                    } = chart
                        .getDatasetMeta(0)
                        .data[index].tooltipPosition();
                    ctx.font = "bold 12px sans-serif";
                    ctx.fillStyle = data.datasets[0].borderColor[index];
                    ctx.textAlign = "center";
                    ctx.textBaseline = "middle";
                    ctx.fillText(`${datapoint}%`, x, y);
                });
            },
        };
        const config = {
            type: "doughnut",
            data,
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 10,
                        top: 10,
                        bottom: 10,
                    },
                },
                plugins: {
                    legend: {
                        display: false,
                    },
                },
            },
            plugins: [customDatalabels],
        };

        let pieChartConfiig = new Chart(pieChart, config);

        //chart dark mode




        //Theme controll 

        if (darkMode) {
            document.getElementById("dark-icon").style.setProperty("display", "block")
            document.getElementById("light-icon").style.setProperty("display", "none")
            document.getElementsByClassName("logo")[0].style.setProperty("display", "none")
            document.getElementsByClassName("logo-dark")[0].style.setProperty("display", "block")
            modeSetup(darkMode)
        } else {
            document.getElementById("dark-icon").style.setProperty("display", "none")
            document.getElementById("light-icon").style.setProperty("display", "block")
            document.getElementsByClassName("logo")[0].style.setProperty("display", "block")
            document.getElementsByClassName("logo-dark")[0].style.setProperty("display", "none")
            modeSetup(darkMode)
        }





        //onclick

        function updateRevFlow() {

            if (darkMode) {
                revenueFlow.data.datasets = dataSetsDark;
                revenueFlow.options.scales.y.ticks.color = 'white';
                revenueFlow.options.scales.x.ticks.color = 'white';
                revenueFlow.options.scales.x.grid.color = '#222429';
                revenueFlow.options.scales.y.grid.color = '#222429';
                revenueFlow.update();
            } else {
                revenueFlow.data.datasets = dataSetsLight;
                revenueFlow.options.scales.y.ticks.color = 'black';
                revenueFlow.options.scales.x.ticks.color = 'black';
                revenueFlow.options.scales.x.grid.color = 'rgb(243 ,246, 255 ,1)';
                revenueFlow.options.scales.y.grid.color = 'rgb(243 ,246, 255 ,1)';
                revenueFlow.update();
            }
        }
        updateRevFlow()
        document.getElementById("theme-controll").addEventListener("click", event => {
            darkMode = !darkMode
            localStorage.setItem("darkMode", darkMode)
            updateRevFlow()
            const main = document.querySelector("html")

            modeSetup(darkMode)
        })
    </script>

</body>

</html>
