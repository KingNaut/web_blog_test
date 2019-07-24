<!DOCTYPE html>
<html lang="en" class="wf-poppins-n3-active wf-poppins-n4-active wf-poppins-n5-active wf-poppins-n6-active wf-poppins-n7-active wf-roboto-n3-active wf-roboto-n4-active wf-roboto-n5-active wf-roboto-n6-active wf-roboto-n7-active wf-active"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><!-- /Added by HTTrack -->

    <title>

        @yield('title')

    </title>

    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="http://www.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles -->
    <link href="/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles -->


    <!--begin::Global Theme Styles(used by all pages) -->

    <link href="/assets/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/admins/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/charts/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->
    <!--begin: Style Error-->
    <link href="/assets/css/error-6.css" rel="stylesheet" type="text/css" />
    <!--end: Style Error-->
    <!--begin::Layout Skins(used by all pages) -->
    <!--end::Layout Skins -->

    <link rel="shortcut icon" href="/assets/imgs/logos/favicon.png" />
</head>
<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed" style="">


<!-- begin:: Page -->

<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="#">
            <img alt="Logo" src="/assets/imgs/logos/logo-12.png">
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">

        <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>

        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
    </div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <!-- begin:: Aside -->
        <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>

        <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside" style="opacity: 1;">
            <!-- begin:: Aside -->
            <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand" kt-hidden-height="65" style="">
                <div class="kt-aside__brand-logo">
                    <a href="#">
                        <img alt="Logo" src="/assets/imgs/logos/logo-12.png">
                    </a>
                </div>

                <div class="kt-aside__brand-tools">
                    <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler"><span></span></button>
                </div>
            </div>

            <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                <div id="kt_aside_menu" class="kt-aside-menu kt-scroll ps ps--active-y" data-ktmenu-vertical="1" data-ktmenu-scroll="1" style="height: 128px; overflow: hidden;">

                    <ul class="kt-menu__nav ">
                        <li class="kt-menu__item " aria-haspopup="true">
                            <a href="/" class="kt-menu__link ">
                                <i class="kt-menu__link-icon flaticon2-architecture-and-city"></i>
                                <span class="kt-menu__link-text">Dashboard</span>
                            </a>
                        </li>
                        <!--begin: Menu Thong ke ch-->
                        <li class="kt-menu__section ">
                            <h4 class="kt-menu__section-text">Thống Kê Chung</h4>
                            <i class="kt-menu__section-icon flaticon-more-v2"></i>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true">
                            <a href="/bankstatistics" class="kt-menu__link ">
                                <i class="kt-menu__link-icon  flaticon-piggy-bank"></i>
                                <span class="kt-menu__link-text">Ngân Hàng</span>
                            </a>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true">
                            <a href="/cardstatistics" class="kt-menu__link ">
                                <i class="kt-menu__link-icon flaticon2-cardiogram"></i>
                                <span class="kt-menu__link-text">Thẻ</span>
                            </a>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true">
                            <a href="/cashstatistics" class="kt-menu__link ">
                                <i class="kt-menu__link-icon flaticon-coins"></i>
                                <span class="kt-menu__link-text">Tiền Mặt</span>
                            </a>
                        </li>
                        <!--end: Menu Thng ke chung-->
                        <!--begin: Menu Game-->
                        <li class="kt-menu__section ">
                            <h4 class="kt-menu__section-text">Thống Kê Game</h4>
                            <i class="kt-menu__section-icon flaticon-more-v2"></i>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true">
                            <a href="/gamestatistics" class="kt-menu__link ">
                                <i class="kt-menu__link-icon  flaticon2-line-chart"></i>
                                <span class="kt-menu__link-text">Game</span>
                            </a>
                        </li>
                        <!--end: Menu Game-->
                        <!--begin: Menu Thanhvien-->
                        <li class="kt-menu__section ">
                            <h4 class="kt-menu__section-text">Thành Viên</h4>
                            <i class="kt-menu__section-icon flaticon-more-v2"></i>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true">
                            <a href="/listuser" class="kt-menu__link ">
                                <i class="kt-menu__link-icon  flaticon2-group"></i>
                                <span class="kt-menu__link-text">Danh Sách Thành Viên</span>
                            </a>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true">
                            <a href="/adduser" class="kt-menu__link ">
                                <i class="kt-menu__link-icon flaticon-user-add"></i>
                                <span class="kt-menu__link-text">Thêm Thành Viên</span>
                            </a>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true">
                            <a href="/action" class="kt-menu__link ">
                                <i class="kt-menu__link-icon flaticon-list"></i>
                                <span class="kt-menu__link-text">List Action</span>
                            </a>
                        </li>
                        <!--begin: Menu Thanhvien-->


                        <li class="kt-menu__section ">
                            <h4 class="kt-menu__section-text">Cá Nhân</h4>
                            <i class="kt-menu__section-icon flaticon-more-v2"></i>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true">
                            <a href="/profile" class="kt-menu__link ">
                                <i class="kt-menu__link-icon flaticon2-user-1"></i>
                                <span class="kt-menu__link-text">Thay Đổi Thông Tin Cá Nhân</span>
                            </a>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true">
                        <a href="/change_password" class="kt-menu__link ">
                                <i class="kt-menu__link-icon flaticon2-lock"></i>
                                <span class="kt-menu__link-text">Thay Đổi Mật Khẩu</span>
                            </a>
                        </li>
                        <li class="kt-menu__item " aria-haspopup="true">

                            <a href="/login" class="kt-menu__link " onclick="return  confirm('Bạn thật sự muốn đăng xuất hay không?')")>
                                <i class="kt-menu__link-icon flaticon2-fast-back"></i>
                                <span class="kt-menu__link-text">Logout</span>
                            </a>
                        </li>

                    </ul>
            </div>
            </div>
            <!-- end:: Aside Menu --></div>
        <!-- end:: Aside -->
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
                <!-- begin: Header Menu -->
                <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper" style="opacity: 1;">

                    <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
                    </div>
                </div>
                <!-- end: Header Menu -->		<!-- begin:: Header Topbar -->
                <div class="kt-header__topbar">


                    <!--begin: Language bar -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--langs">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
	        <span class="kt-header__topbar-icon">
				<img class="" src="/assets/imgs/flags/vietnam.png" alt="">
			</span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround">
                            <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
                                <li class="kt-nav__item kt-nav__item--active">
                                    <a href="#" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><img src="/assets/imgs/flags/vietnam.png" alt=""></span>
                                        <span class="kt-nav__link-text">Việt Nam</span>
                                    </a>
                                </li>
                            </ul>	    </div>
                    </div>
                    <!--end: Language bar -->

                    <!--begin: User Bar -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--user">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                            <div class="kt-header__topbar-user">
                                <span class="kt-hidden kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
                                <span class="kt-hidden kt-header__topbar-username kt-hidden-mobile">{{$getUser['username']}}</span>
                                <img alt="Pic" class="kt-radius-100" src="{{$getUser['avatar']}}" width="33.9px">
                                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                            <!--begin: Head -->
                            <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
                                <div class="kt-user-card__avatar">
                                    <img class="kt-hidden-" alt="Pic" src="{{$getUser['avatar']}}">
                                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                    <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
                                </div>
                                <div class="kt-user-card__name">
                                    {{$getUser['username']}}
                                </div>
                               
                            </div>
                            <!--end: Head -->

                            <!--begin: Navigation -->
                            <div class="kt-notification">
                                <a href="/profile" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-calendar-3 kt-font-success"></i>
                                    </div>
{{--                                    <a href="/profile">--}}
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            Thông tin của tôi
                                        </div>
                                        <div class="kt-notification__item-time">
                                            Thay đổi thông tin cá nhân
                                        </div>
                                    </div>
                                </a>
                                <div class="kt-notification__custom kt-space-between">
                                    <a href="/login" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Đăng xuất</a>
                                </div>
                            </div>
                            <!--end: Navigation -->	    </div>
                    </div>
                    <!--end: User Bar -->
                </div>
                <!-- end:: Header Topbar --></div>
            <!-- end:: Header -->


            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt-contnent">
                @yield('content')
            </div>

            <!-- begin:: Footer -->
            <div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                <div class="kt-footer__copyright">
                    2019&nbsp;©&nbsp;<a href="https://appota.com" target="_blank" class="kt-link">AppotaPay</a>
                </div>
              
            </div>
            <!-- end:: Footer -->			</div>
    </div>
</div>

<!-- end:: Page -->


<script>
    var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
</script>
<!-- end::Global Config -->


<script type="text/javascript">


    var convertQuery = function() {

        var result = {}
        var subQuery = location.search

        if (!subQuery.trim()) {
            return false;
        }

        subQuery = subQuery.substr(1)

        var listQuery = subQuery.split("&")

        if (listQuery.length == 0) {
            return false;
        }

        for (var item of listQuery) {

            var sp = item.split("=")

            result[sp[0]] = sp[1]
        }

        return result
    }
    
    var daterangepickerInit = function() {

        if ($('#kt_dashboard_daterangepicker').length == 0) {
            return;
        }


        var query = convertQuery()

        var picker = $('#kt_dashboard_daterangepicker');
        var start = moment();
        var end = moment();

        if (query && query.start && query.end) {

            start = moment.unix(query.start)
            end = moment.unix(query.end)
        }


        function cb(start, end, label) {
            var title = '';
            var range = '';


            if ((end - start) < 100 || label == 'Hôm nay') {
                title = 'Hôm nay:';
                range = start.format('MM DD');
            } else if (label == 'Hôm qua') {
                title = 'Hôm qua:';
                range = start.format('MM DD');
            } else {
                range = start.format('MM DD') + ' - ' + end.format('MM DD');
            }

            $('#kt_dashboard_daterangepicker_date').html(range);
            $('#kt_dashboard_daterangepicker_title').html(title);
        }

        picker.daterangepicker({
            direction: KTUtil.isRTL(),
            startDate: start,
            endDate: end,
            opens: 'left',
            ranges: {
                'Hôm nay': [moment(), moment()],
                'Hôm qua': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '7 ngày trước': [moment().subtract(6, 'days'), moment()],
                '30 ngày trước': [moment().subtract(29, 'days'), moment()],
                'Tháng này': [moment().startOf('month'), moment().endOf('month')],
                'Tháng trước': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end, '');
    }
    jQuery(document).ready(function() {
        daterangepickerInit();

        $('#kt_dashboard_daterangepicker').on('apply.daterangepicker', function(ev, picker) {

            var start = moment(picker.startDate.format('YYYY-MM-DD') + " 00:00:00").format("X");
            var end = moment(picker.endDate.format('YYYY-MM-DD') + " 23:59:59").format("X");

            var locate = location.origin;

            if (locate.indexOf("?") != -1) {

                var result = {};
                var  query = "?"
                var subQuery = location.search

                if (!subQuery.trim()) {
                    return;
                }

                subQuery = subQuery.substr(1)

                var listQuery = subQuery.split("&")

                if (listQuery.length == 0) {
                    return;
                }

                for (var item of listQuery) {

                    var sp = item.split("=")

                    result[sp[0]] = sp[1]
                }

                result["start"] = start;
                result["end"] = end;

                var com = []
                for (item in result) {

                    com.push(item+"="+result[item]);
                }

                query += com.join("&");

                console.log(query)

                window.location.replace(locate+query)
            } else {

                locate += "?start="+start+"&end="+end;

                console.log(locate)
                window.location.replace(locate)
            }
        });
    });
    </script>

    </body>
</html>
