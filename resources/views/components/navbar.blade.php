<div>
    <header class="nftmax-header">
        <div class="container-fluid">
            <div class="row g-50">
                <div class="col-12">
                    <!-- Dashboard Header -->
                    <div class="nftmax-header__inner">
                        <div class="nftmax__sicon close-icon close-icon-two d-xl-none">
                            <span>
                                <svg width="16" height="40" viewBox="0 0 16 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 10C0 4.47715 4.47715 0 10 0H16V40H10C4.47715 40 0 35.5228 0 30V10Z"
                                        fill="#22C55E">
                                    </path>
                                    <path d="M10 15L6 20.0049L10 25.0098" stroke="#ffffff" stroke-width="1.2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>

                        <div class="header-left">
                            <div class="header-text">
                                <h3>{{$pageName}}</h3>
                                {{-- <p>Let’s check your update today</p> --}}
                            </div>

                        </div>


                        <div class="header-right">
                            <div class="profile icon-dropdown" data-name="profile-drop">

                                <ul class="profile-dropdown" id="profile-drop">
                                    <li data-name="profile-drop">
                                        <a href="setting.html" data-name="profile-drop">
                                            <span data-name="profile-drop">
                                                <svg data-name="profile-drop"
                                                    class="stroke-bgray-900 dark:stroke-bgray-50" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.1197 12.7805C12.0497 12.7705 11.9597 12.7705 11.8797 12.7805C10.1197 12.7205 8.71973 11.2805 8.71973 9.51047C8.71973 7.70047 10.1797 6.23047 11.9997 6.23047C13.8097 6.23047 15.2797 7.70047 15.2797 9.51047C15.2697 11.2805 13.8797 12.7205 12.1197 12.7805Z"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                    <path
                                                        d="M18.7398 19.3796C16.9598 21.0096 14.5998 21.9996 11.9998 21.9996C9.39977 21.9996 7.03977 21.0096 5.25977 19.3796C5.35977 18.4396 5.95977 17.5196 7.02977 16.7996C9.76977 14.9796 14.2498 14.9796 16.9698 16.7996C18.0398 17.5196 18.6398 18.4396 18.7398 19.3796Z"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                    <path
                                                        d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                            </span>
                                            My Profile
                                        </a>
                                    </li>

                                    <li class="text-color">
                                        <a href="{{route('admin.logout')}}">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15 10L13.7071 11.2929C13.3166 11.6834 13.3166 12.3166 13.7071 12.7071L15 14M14 12L22 12M6 20C3.79086 20 2 18.2091 2 16V8C2 5.79086 3.79086 4 6 4M6 20C8.20914 20 10 18.2091 10 16V8C10 5.79086 8.20914 4 6 4M6 20H14C16.2091 20 18 18.2091 18 16M6 4H14C16.2091 4 18 5.79086 18 8"
                                                        stroke="#22C55E" stroke-width="1.5" stroke-linecap="round">
                                                    </path>
                                                </svg>
                                            </span>
                                            Log Out
                                        </a>
                                    </li>


                                    <li>
                                        <a href="setting.html">
                                            Settings
                                        </a>
                                    </li>
                                </ul>


                                <div class="profile-img" data-name="profile-drop">
                                    <img src="{{ asset('admin_assets/assets/images/profile.png') }}" alt="img"
                                        data-name="profile-drop">
                                </div>
                                <div class="profile-taitel" data-name="profile-taitel ">
                                    <h3 data-name="profile-drop">
                                        AJOY Sarker
                                        <span data-name="profile-drop"><svg data-name="profile-drop" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7 10L12 14L17 10" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </h3>

                                    <h6 data-name="profile-drop">Super Admin</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
