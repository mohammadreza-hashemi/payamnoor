<aside class="left-sidebar">
    <div class="user-profile">
        <!-- User profile image -->
        <div class="profile-img"><img src={{asset("images/users/profile.png")}} alt="user">
            <!-- this is blinking heartbit-->
            <div class="notify setpos"><span class="heartbit"></span> <span class="point"></span></div>
        </div>
        <!-- User profile text-->
        <div class="profile-text">
            <h5>محمد امین آذرمهر</h5>
            <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true"
               aria-expanded="true"><i class="mdi mdi-settings"></i></a>
            <a href="app-email.html" class="" data-toggle="tooltip" title="ایمیل"><i class="mdi mdi-gmail"></i></a>
            <a href="pages-login.html" class="" data-toggle="tooltip" title="خروج"><i class="mdi mdi-power"></i></a>
            <div class="dropdown-menu animated flipInY">
                <!-- text-->
                <a href="#" class="dropdown-item"><i class="ti-user"></i> مشخصات من</a>
                <!-- text-->
                <a href="#" class="dropdown-item"><i class="ti-wallet"></i> موجودی حساب</a>
                <!-- text-->
                <a href="#" class="dropdown-item"><i class="ti-email"></i> صندوق ورودی</a>
                <!-- text-->
                <div class="dropdown-divider"></div>
                <!-- text-->
                <a href="#" class="dropdown-item"><i class="ti-settings"></i> تنظیمات حساب</a>
                <!-- text-->
                <div class="dropdown-divider"></div>
                <!-- text-->
                <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> خروج</a>
                <!-- text-->
            </div>
        </div>
    </div>

    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">


        </div>

        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-small-cap">پنل مدیریتی</li>
                <li>
                    <a class="has-arrow waves-effect " href={{url('/users')}} aria-expanded="false"><i
                            class="mdi mdi-gauge"></i><span class="hide-menu">کاربران </span></a>
                </li>
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                            class="mdi mdi-bullseye"></i><span class="hide-menu"> <span
                                class="label label-rouded label-themecolor pull-right">4</span> نوتیفیکیشن ها</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="app-calendar.html">تقویم</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                            class="mdi mdi-bullseye"></i><span class="hide-menu">محصولات</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="app-calendar.html">تقویم</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                            class="mdi mdi-bullseye"></i><span class="hide-menu">سفارشات</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="app-calendar.html">تقویم</a></li>
                    </ul>
                </li>

            </ul>
        </nav>

    </div>

</aside>
