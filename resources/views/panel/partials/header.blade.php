<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">

        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">

                <img src={{asset("images/logo-icon.png")}} alt="homepage" class="dark-logo">

                <img src={{asset("images/logo-light-icon.png")}} alt="homepage" class="light-logo">
                </b>

                <span>

                         <img src={{asset("images/logo-text.png")}} alt="homepage" class="dark-logo">

                         <img src={{asset("images/logo-light-text.png")}} class="light-logo" alt="homepage"></span> </a>
        </div>

        <div class="navbar-collapse">

            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is  -->
                <li class="nav-item"><a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                        href="javascript:void(0)"><i class="mdi mdi-menu"></i></a></li>
                <li class="nav-item m-l-10"><a
                        class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                        href="javascript:void(0)"><i class="ti-menu"></i></a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href=""
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                            class="mdi mdi-message"></i>
                        <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                    </a>
                    <div class="dropdown-menu mailbox dropdown-menu-right animated slideInUp">
                        <ul>
                            <li>
                                <div class="drop-title">اطلاعیه</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                        <div class="mail-contnet">
                                            <h5>آماده سازی مدیر</h5> <span
                                                class="mail-desc">مدیر جدید خوش آمدید!</span> <span class="time">9:30 صبح</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                        <div class="mail-contnet">
                                            <h5>رویداد امروز</h5> <span class="mail-desc">فقط یک یادآوری که شما رویداد دارید</span>
                                            <span class="time">9:10 صبح</span></div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                        <div class="mail-contnet">
                                            <h5>تنظیمات</h5> <span class="mail-desc">شما می توانید این الگو را به عنوان که شما می خواهید سفارش دهید</span>
                                            <span class="time">9:08 صبح</span></div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                        <div class="mail-contnet">
                                            <h5>مسعود وزیری</h5> <span class="mail-desc">مدیر خوش آمدید!</span>
                                            <span class="time">9:02 صبح</span></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link text-center" href="javascript:void(0);"> <strong>بررسی همه
                                        اعلانها</strong> <i class="fa fa-angle-left"></i> </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                            class="mdi mdi-email"></i>
                        <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                    </a>
                    <div class="dropdown-menu mailbox dropdown-menu-right animated slideInUp" aria-labelledby="2">
                        <ul>
                            <li>
                                <div class="drop-title">شما 4 پیام جدید دارید</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"><img src={{asset("images/users/1.jpeg")}} alt="user"
                                                                   class="img-circle"> <span
                                                class="profile-status online pull-right"></span></div>
                                        <div class="mail-contnet">
                                            <h5>مسعود وزیری</h5> <span class="mail-desc">مدیر خوش آمدید!</span>
                                            <span class="time">9:30 صبح</span></div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"><img src={{asset("images/users/2.jpeg")}} alt="user"
                                                                   class="img-circle"> <span
                                                class="profile-status busy pull-right"></span></div>
                                        <div class="mail-contnet">
                                            <h5>سارا وکیلی</h5> <span class="mail-desc">من یک برنامه را طراحی کرده ام</span>
                                            <span class="time">9:10 صبح</span></div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"><img src={{asset("images/users/3.jpeg")}} alt="user"
                                                                   class="img-circle"> <span
                                                class="profile-status away pull-right"></span></div>
                                        <div class="mail-contnet">
                                            <h5>آیدا ناصری</h5> <span
                                                class="mail-desc">من یک برنامه نویس هستم!</span> <span class="time">9:08 صبح</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"><img src={{asset("images/users/4.jpeg")}} alt="user"
                                                                   class="img-circle"> <span
                                                class="profile-status offline pull-right"></span></div>
                                        <div class="mail-contnet">
                                            <h5>مسعود وزیری</h5> <span class="mail-desc">مدیر خوش آمدید!</span>
                                            <span class="time">9:02 صبح</span></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link text-center" href="javascript:void(0);"> <strong>همه ایمیل ها را
                                        ببینید</strong> <i class="fa fa-angle-left"></i> </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

            <ul class="navbar-nav my-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                            src={{asset('images/users/1.jpeg')}} alt="user" class="profile-pic"></a>
                    <div class="dropdown-menu animated slideInUp">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src={{asset("images/users/1.jpeg")}} alt="user"></div>
                                    <div class="u-text">
                                        <h4>اسعد مستوفی</h4>
                                        <p class="text-muted">asaad@gmail.com</p><a href="pages-profile.html"
                                                                                    class="btn btn-rounded btn-danger btn-sm">نمایش
                                            مشخصات</a></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-user"></i>مشخصات من</a></li>
                            <li><a href="#"><i class="ti-wallet"></i>موجودی من</a></li>
                            <li><a href="#"><i class="ti-email"></i>صندوق ورودی</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> تنظیمات حساب</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> خروج</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
