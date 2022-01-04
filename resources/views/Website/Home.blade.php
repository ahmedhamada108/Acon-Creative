<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Acon Creative</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io/site.webmanifest">
    <link rel="mask-icon" href="../favicon_io/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/logo2x.png"
}


    </script>
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
</head>
<body class="u-body">
<header class="u-align-center u-clearfix u-header u-header" id="sec-9923">
    <nav class="u-dropdown-icon u-menu u-menu-dropdown u-offcanvas u-offcanvas-shift u-menu-1"
         data-responsive-from="LG">
        <div class="menu-collapse"
             style="font-size: 1rem; letter-spacing: 0px; text-transform: uppercase; font-weight: 700;">
            <a class="u-button-style u-custom-active-color u-custom-border u-custom-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-text-shadow u-custom-text-shadow-blur u-custom-text-shadow-color u-custom-text-shadow-transparency u-custom-text-shadow-x u-custom-text-shadow-y u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
               href="#" style="font-size: calc(1em + 8px);">
                <svg>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                </svg>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                            <rect y="1" width="16" height="2"></rect>
                            <rect y="7" width="16" height="2"></rect>
                            <rect y="13" width="16" height="2"></rect>
                        </symbol>
                    </defs>
                </svg>
            </a>
        </div>
        <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-2 u-unstyled u-nav-1">
                <li class="u-nav-item">
                    @if(URL::current()== url('/ar'))
                        <a class=" u-button-style u-hover-custom-color-1 u-nav-link  u-text-custom-color-1 u-text-hover-white"
                           href="#" style="padding: 28px 45px; text-shadow: 2px 0 8px rgba(128,128,128,1); ">اللغة</a>
                    @elseif(URL::current()==url('/en'))

                        <a class=" u-button-style u-hover-custom-color-1 u-nav-link u-text-custom-color-1 u-text-hover-white"
                           href="#" style="padding: 28px 23px 28px 2px; text-shadow: 2px 0 8px rgba(128,128,128,1)">Language</a>
                    @elseif(Url::current()==url('/'))
                        <a class=" u-button-style u-hover-custom-color-1 u-nav-link u-text-custom-color-1 u-text-hover-white"
                           href="#" style="padding: 28px 45px; text-shadow: 2px 0 8px rgba(128,128,128,1);">اللغة</a>
                    @endif
                    <div class="u-nav-popup">
                        <ul class="u-h-spacing-24 u-nav u-unstyled u-v-spacing-14 u-nav-2"
                            style="text-align: left;width: 127px">
                            <li class="u-nav-item"><a
                                    href="{{url('/ar')}}"
                                    class="u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">العربية</a>
                            </li>
                            <li class="u-nav-item"><a
                                    href="{{url('/en')}}"
                                    class="u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">English</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="u-nav-item">
                    @if(URL::current()== url('/en'))
                        <a href="{{url('/en')}}#sec-c21d"
                           class=" u-button-style u-hover-custom-color-1 u-nav-link  u-text-custom-color-1 u-text-hover-white"
                           style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">About Us</a>
                    @elseif(URL::current()== url('/ar'))
                        <a href="{{url('ar')}}#sec-c21d"
                           class=" u-button-style u-hover-custom-color-1 u-nav-link  u-text-custom-color-1 u-text-hover-white"
                           style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">نبذة عنا</a>
                    @elseif(URL::current()==url('/'))
                        <a href="{{url('/')}}#sec-c21d"
                           class=" u-button-style u-hover-custom-color-1 u-nav-link  u-text-custom-color-1 u-text-hover-white"
                           style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">نبذة عنا</a>
                    @endif
                </li>
                <li class="u-nav-item">
                    @if(URL::current()== url('/en'))
                        <a href="{{url('/en')}}#sec-3b42"
                           class=" u-button-style u-hover-custom-color-1 u-nav-link  u-text-custom-color-1 u-text-hover-white"
                           style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">Our Works</a>
                    @elseif(URL::current()== url('/ar'))
                        <a href="{{url('/ar')}}#sec-3b42"
                           class=" u-button-style u-hover-custom-color-1 u-nav-link  u-text-custom-color-1 u-text-hover-white"
                           style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">اعمالنا</a>
                    @elseif(URL::current()==url('/'))
                        <a href="{{url('/')}}#sec-3b42"
                           class=" u-button-style u-hover-custom-color-1 u-nav-link  u-text-custom-color-1 u-text-hover-white"
                           style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">اعمالنا</a>
                    @endif
                </li>
                <li class="u-nav-item">
                    @if(URL::current()== url('/en'))
                        <a class=" u-button-style u-hover-custom-color-1 u-nav-link u-text-custom-color-1 u-text-hover-white"
                           href="#" style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">Our
                            Services</a>
                    @elseif(URL::current()== url('/ar'))
                        <a class=" u-button-style u-hover-custom-color-1 u-nav-link u-text-custom-color-1 u-text-hover-white"
                           href="#" style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">خدماتنا</a>
                    @elseif(URL::current()==url('/'))
                        <a class="u-button-style u-hover-custom-color-1 u-nav-link u-text-custom-color-1 u-text-hover-white"
                           href="#" style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">خدماتنا</a>
                    @endif
                    <div class="u-nav-popup " style="width: 100%;">
                        <ul class="u-h-spacing-24 u-nav u-unstyled u-v-spacing-14 u-nav-2" style="width: 100%;">
                            @foreach($allservices as $services)
                                @if(URL::current()== url('/en'))
                                    <li class="u-nav-item ">
                                        <a href="/{{$services->name_en}}EN"
                                           class="u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">{{$services->name_en}}</a>
                                    </li>
                                @elseif(URL::current()== url('/ar'))
                                    <li class="u-nav-item ">
                                        <a href="/{{$services->name_en}}AR"
                                           class="u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">{{$services->name_ar}}</a>
                                    </li>
                                @elseif(URL::current()==url('/'))
                                    <li class="u-nav-item ">
                                        <a href="/{{$services->name_en}}AR"
                                           class="u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">{{$services->name_ar}}</a>
                                    </li>
                                @endif

                            @endforeach

                        </ul>
                    </div>
                </li>
                <li class="u-nav-item">
                    @if(URL::current()== url('/en'))
                        <a href="{{url('/en')}}"
                           class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-active-white u-text-custom-color-1 u-text-hover-white"
                           style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">Home</a>
                    @elseif(URL::current()== url('/ar'))
                        <a href="{{url('/ar')}}"
                           class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-active-white u-text-custom-color-1 u-text-hover-white"
                           style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">الرئيسية</a>
                    @elseif(URL::current()==url('/'))
                        <a href="{{url('/ar')}}"
                           class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-active-white u-text-custom-color-1 u-text-hover-white"
                           style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">الرئيسية</a>
                    @endif
                </li>
            </ul>
        </div>

        <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                <div class="u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4">
                        <li class="u-nav-item">
                            @if(URL::current()== url('/en'))
                                <a href="{{url('/en')}}" class="u-button-style u-nav-link" style="padding: 24px 32px;">Home</a>
                            @elseif(URL::current()== url('/ar'))
                                <a href="{{url('/ar')}}" class="u-button-style u-nav-link" style="padding: 24px 32px;">الرئيسية</a>
                            @elseif(URL::current()==url('/'))
                                <a href="{{url('/')}}" class="u-button-style u-nav-link" style="padding: 24px 32px;">الرئيسية</a>
                            @endif
                        </li>
                        <li class="u-nav-item">
                            @if(URL::current()== url('/en'))
                                <a class="u-button-style u-nav-link" href="#"
                                   style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">Our
                                    Services</a>
                            @elseif(URL::current()== url('/ar'))
                                <a class="u-button-style u-nav-link" href="#"
                                   style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">خدماتنا</a>
                            @elseif(URL::current()==url('/'))
                                <a class="u-button-style u-nav-link" href="#"
                                   style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">خدماتنا</a>
                            @endif
                            <div class="u-nav-popup " style="width: 100%;">
                                <ul class="u-h-spacing-24 u-nav u-unstyled u-v-spacing-14 u-nav-2" style="width: 100%;">
                                    @foreach($allservices as $services)
                                        @if(URL::current()== url('/en'))
                                            <li class="u-nav-item ">
                                                <a href="/{{$services->name_en}}EN"
                                                   class=" u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">{{$services->name_en}}</a>
                                            </li>
                                        @elseif(URL::current()== url('/ar'))
                                            <li class="u-nav-item ">
                                                <a href="/{{$services->name_en}}AR"
                                                   class=" u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">{{$services->name_ar}}</a>
                                            </li>
                                        @elseif(URL::current()==url('/'))
                                            <li class="u-nav-item ">
                                                <a href="/{{$services->name_en}}AR"
                                                   class=" u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">{{$services->name_ar}}</a>
                                            </li>
                                        @endif
                                    @endforeach

                                </ul>
                            </div>
                        <li class="u-nav-item">
                            @if(URL::current()== url('/en'))
                                <a class="u-button-style u-nav-link" style="padding: 24px 32px;">Our Works</a>
                            @elseif(URL::current()== url('/ar'))
                                <a class="u-button-style u-nav-link" style="padding: 24px 32px;">اعمالنا</a>
                            @elseif(URL::current()==url('/'))
                                <a class="u-button-style u-nav-link" style="padding: 24px 32px;">اعمالنا</a>
                            @endif
                        </li>
                        <li class="u-nav-item">
                            @if(URL::current()== url('/en'))
                                <a class="u-button-style u-nav-link" style="padding: 24px 32px;">About Us</a>
                            @elseif(URL::current()== url('/ar'))
                                <a class="u-button-style u-nav-link" style="padding: 24px 32px;">نبذة عنا</a>
                            @elseif(URL::current()==url('/'))
                                <a class="u-button-style u-nav-link" style="padding: 24px 32px;">نبذة عنا</a>
                            @endif
                        </li>

                        <li class="u-nav-item">
                            @if(URL::current()== url('/en'))
                                <a class="u-button-style u-nav-link" href="#" style="padding: 24px 32px;">Languages</a>
                            @elseif(URL::current()== url('/ar'))
                                <a class="u-button-style u-nav-link" href="#" style="padding: 24px 32px;">اللغة</a>
                            @elseif(URL::current()==url('/'))
                                <a class="u-button-style u-nav-link" href="#" style="padding: 24px 32px;">اللغة</a>
                            @endif
                            <div class="u-nav-popup">
                                <ul class="u-h-spacing-24 u-nav u-unstyled u-v-spacing-14 u-nav-5">
                                    <li class="u-nav-item"><a
                                       href="{{url('/ar')}}"     class="u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">العربية</a>
                                    </li>
                                    <li class="u-nav-item"><a
                                      href="{{url('/en')}}"      class="u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">English</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
    </nav>
    <img src="images/Group692x.png" alt="" class="u-image u-image-default u-image-1" data-image-width="1493"
         data-image-height="337">
    @if(URL::current()== url('/en'))
        <img src="images/logo2x.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-2"
             data-image-width="235" data-image-height="138" data-href="{{url('/en')}}"></header>
@elseif(URL::current()== url('/ar'))
    <img src="images/logo2x.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-2"
         data-image-width="235" data-image-height="138" data-href="{{url('/ar')}}"></header>
@elseif(URL::current()==url('/'))
    <img src="images/logo2x.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-2"
         data-image-width="235" data-image-height="138" data-href="{{url('/ar')}}"></header>
@endif
<section class="u-clearfix u-section-1" id="sec-5dd2">
    <div id="carousel-bd35" data-interval="3000" data-u-ride="carousel"
         class="u-carousel u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-slider u-slider-1">
        <ol class="u-absolute-hcenter-xl u-carousel-indicators u-carousel-indicators-1">
            <li data-u-target="#carousel-bd35"
                class="u-active u-active-custom-color-1 u-grey-30 u-hover-grey-30 u-shape-circle" data-u-slide-to="0"
                style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-bd35" class="u-active-custom-color-1 u-grey-30 u-hover-grey-30 u-shape-circle"
                data-u-slide-to="1" style="width: 10px; height: 10px;"></li>
        </ol>
        @foreach($allcontent as $content)
            <div class="u-carousel-inner" role="listbox">
                <div class="u-active u-align-right u-carousel-item u-container-style u-slide">
                    <div class="u-container-layout u-container-layout-1">
                        <img alt="" class="u-image u-image-default u-image-1" data-image-width="967"
                             data-image-height="645"
                             src="images/herodesign.svg">
                        @if(URL::current()== url('/en'))
                            <h1 class="u-text u-text-1">
                                @php echo htmlspecialchars_decode($content->hero_content1_en); @endphp
                            </h1>
                            <a href="{{url('/en')}}#sec-3b42" data-page-id="2288925875"
                               style="margin: 202px 330px 0 auto;"
                               class="u-black u-btn u-btn-round u-button-style u-hover-grey-75 u-radius-50 u-btn-1">Our
                                Works</a>
                            <a href="{{url('/en')}}#sec-17cb" data-page-id="2288925875"
                               class="u-btn u-btn-round u-button-style u-custom-color-4 u-hover-custom-color-1 u-radius-50 u-btn-2">Starting</a>
                        @elseif(URL::current()== url('/ar'))
                            <h1 class="u-text u-text-1">
                                @php echo htmlspecialchars_decode($content->hero_content1_ar); @endphp
                            </h1>
                            <a href="{{url('/ar')}}#sec-17cb"
                               class="u-btn u-btn-round u-button-style u-custom-color-4 u-hover-custom-color-1 u-radius-50 u-btn-3">ابدأ
                                الان</a>
                            <a href="{{url('/ar')}}#sec-3b42"
                               class="u-black u-btn u-btn-round u-button-style u-hover-grey-75 u-radius-50 u-btn-4">أعمالنا</a>
                        @elseif(URL::current()==url('/'))
                            <h1 class="u-text u-text-1">
                                @php echo htmlspecialchars_decode($content->hero_content1_ar); @endphp
                            </h1>
                            <a href="{{url('/ar')}}#sec-3b42" data-page-id="2288925875"
                               style="margin: 202px 325px 0 auto;"
                               class="u-black u-btn u-btn-round u-button-style u-hover-grey-75 u-radius-50 u-btn-1">أعمالنا</a>
                            <a href="{{url('/ar')}}#sec-17cb" data-page-id="2288925875"
                               class="u-btn u-btn-round u-button-style u-custom-color-4 u-hover-custom-color-1 u-radius-50 u-btn-2">أبدا</a>
                        @endif

                    </div>
                </div>
                <div
                    class="u-align-right-md u-align-right-sm u-align-right-xs u-carousel-item u-container-style u-expanded-width u-slide">
                    <div class="u-container-layout u-container-layout-2">
                        <img alt="" class="u-image u-image-default u-image-2" data-image-width="967"
                             data-image-height="645"
                             src="images/herodesign.svg">
                        @if(URL::current()== url('/en'))
                            <h1 class="u-align-right-lg u-align-right-xl u-text u-text-2">
                                @php echo htmlspecialchars_decode($content->hero_content2_en); @endphp
                            </h1>
                            <a href="{{url('/en')}}#sec-3b42" data-page-id="2288925875"
                               style="margin: 202px 330px 0 auto;"
                               class="u-black u-btn u-btn-round u-button-style u-hover-grey-75 u-radius-50 u-btn-1">Our
                                Works</a>
                            <a href="{{url('/en')}}#sec-17cb" data-page-id="2288925875"
                               class="u-btn u-btn-round u-button-style u-custom-color-4 u-hover-custom-color-1 u-radius-50 u-btn-2">Starting</a>
                        @elseif(URL::current()== url('/ar'))
                            <h1 class="u-align-right-lg u-align-right-xl u-text u-text-2">
                                @php echo htmlspecialchars_decode($content->hero_content2_ar); @endphp
                            </h1>
                            <a href="{{url('/ar')}}#sec-17cb"
                               class="u-btn u-btn-round u-button-style u-custom-color-4 u-hover-custom-color-1 u-radius-50 u-btn-3">ابدأ
                                الان</a>
                            <a href="{{url('/ar')}}#sec-3b42"
                               class="u-black u-btn u-btn-round u-button-style u-hover-grey-75 u-radius-50 u-btn-4">أعمالنا</a>
                        @elseif(URL::current()==url('/'))
                            <h1 class="u-align-right-lg u-align-right-xl u-text u-text-2">
                                @php echo htmlspecialchars_decode($content->hero_content2_ar); @endphp
                            </h1>
                            <a href="{{url('/ar')}}#sec-17cb"
                               class="u-btn u-btn-round u-button-style u-custom-color-4 u-hover-custom-color-1 u-radius-50 u-btn-3">ابدأ
                                الان</a>
                            <a href="{{url('/ar')}}#sec-3b42"
                               class="u-black u-btn u-btn-round u-button-style u-hover-grey-75 u-radius-50 u-btn-4">أعمالنا</a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-hidden u-spacing-12 u-text-grey-30 u-carousel-control-1"
               href="#carousel-bd35" role="button" data-u-slide="prev">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
          </span>
                <span class="sr-only">+Previous</span>
            </a>
            <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-hidden u-spacing-12 u-text-grey-30 u-carousel-control-2"
               href="#carousel-bd35" role="button" data-u-slide="next">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
          </span>
                <span class="sr-only">+Next</span>
            </a>
    </div>
    <div class="u-shape u-shape-svg u-text-custom-color-3 u-shape-1">
        <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 140 160" style="">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e0f2"></use>
        </svg>
        <svg class="u-svg-content" viewBox="0 0 140 160" x="0px" y="0px" id="svg-e0f2">
            <g>
                <polygon points="0,0 140,80 0,160 	"></polygon>
            </g>
        </svg>
    </div>
    <div class="u-shape u-shape-svg u-text-custom-color-2 u-shape-2">
        <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 140 160" style="">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3d85"></use>
        </svg>
        <svg class="u-svg-content" viewBox="0 0 140 160" x="0px" y="0px" id="svg-3d85">
            <path d="M30,51.7L79.5,80L30,108.3V51.7 M0,0v160l140-80L0,0L0,0z"></path>
        </svg>
    </div>
    <div class="u-shape u-shape-svg u-text-custom-color-3 u-shape-3">
        <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 140 160" style="">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-da80"></use>
        </svg>
        <svg class="u-svg-content" viewBox="0 0 140 160" x="0px" y="0px" id="svg-da80">
            <g>
                <polygon points="0,0 140,80 0,160 	"></polygon>
            </g>
        </svg>
    </div>
</section>
@foreach($allcontent as $content)
    <section class="u-align-left u-clearfix u-valign-middle-sm u-section-2" id="sec-8c75">
        @if(URL::current()== url('/en'))
            <h1 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-1"
                style="margin: 4px 33% 0px 40%">Our Services</h1>
        @elseif(URL::current()== url('/ar'))
            <h1 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-1">
                خدماتنا</h1>
        @elseif(URL::current()==url('/'))
            <h1 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-1">
                خدماتنا</h1>
        @endif
        <div class="u-border-3 u-border-custom-color-1 u-line u-line-horizontal u-line-1"></div>
        <img src="images/Path20472x.png" alt="" class="u-expanded-width u-image u-image-default u-image-1"
             data-image-width="2880" data-image-height="1333">
        <img src="images/develop2x.png" alt="" class="u-image u-image-default u-image-2" data-image-width="745"
             data-image-height="766">
        @if(URL::current()== url('/en'))
            <h2 class="u-align-right u-text u-text-2">
                @php echo htmlspecialchars_decode($content->ourservice1_en); @endphp
            </h2>
        @elseif(URL::current()== url('/ar'))
            <h2 class="u-align-right u-text u-text-2">
                @php echo htmlspecialchars_decode($content->ourservice1_ar); @endphp
            </h2>
        @elseif(URL::current()==url('/'))
            <h2 class="u-align-right u-text u-text-2">
                @php echo htmlspecialchars_decode($content->ourservice1_ar); @endphp
            </h2>
        @endif

        @endforeach
        @foreach($allfeature as $feature)
            <div class="container-fluid">
                <img src="images/check.png" id="{{$feature->id}}" alt=""
                     class="u-image u-image-default u-preserve-proportions u-image-3"
                     data-image-width="42" data-image-height="42">

                @if(URL::current()== url('/en'))
                    <h3 class="u-align-right u-text u-text-3" for="{{$feature->id}}">
                        @php echo htmlspecialchars_decode($feature->feature_en); @endphp
                    </h3>
                @elseif(URL::current()== url('/ar'))
                    <h3 class="u-align-right u-text u-text-3" for="{{$feature->id}}">
                        @php echo htmlspecialchars_decode($feature->feature_ar); @endphp
                    </h3>
                @elseif(URL::current()==url('/'))
                    <h3 class="u-align-right u-text u-text-3" for="{{$feature->id}}">
                        @php echo htmlspecialchars_decode($feature->feature_ar); @endphp
                    </h3>
                @endif
            </div>
        @endforeach
        @foreach($allcontent as $content)
            <img src="images/Subtraction32x.png" alt="" class="u-expanded-width u-image u-image-default u-image-5"
                 data-image-width="2880" data-image-height="1280">
            <img src="images/Group647.png" alt="" class="u-image u-image-default u-image-6" data-image-width="419"
                 data-image-height="396">
            @if(URL::current()== url('/en'))
                <h2 class="u-align-right u-text u-text-5">
                    @php echo htmlspecialchars_decode($content->ourservice2_en); @endphp
                </h2>
            @elseif(URL::current()== url('/ar'))
                <h2 class="u-align-right u-text u-text-5">
                    @php echo htmlspecialchars_decode($content->ourservice2_ar); @endphp
                </h2>
            @elseif(URL::current()==url('/'))
                <h2 class="u-align-right u-text u-text-5">
                    @php echo htmlspecialchars_decode($content->ourservice2_ar); @endphp
                </h2>
            @endif

        @endforeach
        @foreach($allcontent as $content)
            <img src="images/Path20502x.png" alt="" class="u-expanded-width u-image u-image-default u-image-7"
                 data-image-width="2880" data-image-height="1333">
            <img src="images/Group582.png" alt="" class="u-image u-image-default u-image-8" data-image-width="392"
                 data-image-height="393">
            @if(URL::current()== url('/en'))
                <h3 class="u-align-left u-text u-text-6">
                    @php echo htmlspecialchars_decode($content->ourservice3_en); @endphp
                </h3>
            @elseif(URL::current()== url('/ar'))
                <h3 class="u-align-right u-text u-text-6">
                    @php echo htmlspecialchars_decode($content->ourservice3_ar); @endphp
                </h3>
            @elseif(URL::current()==url('/'))
                <h3 class="u-align-right u-text u-text-6">
                    @php echo htmlspecialchars_decode($content->ourservice3_ar); @endphp
                </h3>
            @endif

        @endforeach
    </section>
    @foreach($allcontent as $content)
        <section class="u-clearfix u-section-3" id="sec-c21d">
            <img src="images/Group6542x.png" alt="" class="u-expanded-width u-image u-image-default u-image-1"
                 data-image-width="2880" data-image-height="734">
            @if(URL::current()== url('/en'))
                <h1 class="u-text u-text-body-alt-color u-text-1"
                    style="margin: -344px calc(((94% - 1140px) / 2) + 455px) 0 calc(((100% - 1209px) / 2) + 546px)">
                    About Us</h1>

            @elseif(URL::current()== url('/ar'))
                <h1 class="u-text u-text-body-alt-color u-text-1">نبذة عنا</h1>

            @elseif(URL::current()==url('/'))
                <h1 class="u-text u-text-body-alt-color u-text-1">نبذة عنا</h1>

            @endif
            <div class="u-border-3 u-border-white u-line u-line-horizontal u-line-1"></div>
            @if(URL::current()== url('/en'))
                <div class="u-align-right u-text u-text-body-alt-color u-text-2 text-light">
                    @php echo htmlspecialchars_decode($content->AboutSection_en); @endphp
                </div>
                <a href="{{url('/AboutUsEN')}}" data-page-id="38311005"
                   class="u-btn u-btn-round u-button-style u-hover-grey-10 u-radius-50 u-text-custom-color-4 u-white u-btn-1">More</a>
            @elseif(URL::current()== url('/ar'))
                <div class="u-align-right u-text u-text-body-alt-color u-text-2 text-light">
                    @php echo htmlspecialchars_decode($content->AboutSection_ar); @endphp
                </div>
                <a href="{{url('/AboutUsAR')}}" data-page-id="38311005"
                   class="u-btn u-btn-round u-button-style u-hover-grey-10 u-radius-50 u-text-custom-color-4 u-white u-btn-1">المزيد</a>
            @elseif(URL::current()==url('/'))
                <div class="u-align-right u-text u-text-body-alt-color u-text-2 text-light">
                    @php echo htmlspecialchars_decode($content->AboutSection_ar); @endphp
                </div>
                <a href="{{url('/AboutUsAR')}}" data-page-id="38311005"
                   class="u-btn u-btn-round u-button-style u-hover-grey-10 u-radius-50 u-text-custom-color-4 u-white u-btn-1">المزيد</a>
            @endif
        </section>
    @endforeach
    <section class="u-align-left u-clearfix u-section-4" id="sec-3b42">
        <div class="u-clearfix u-sheet u-sheet-1">
            @if(URL::current()== url('/en'))
                <h1 class="u-align-right u-text u-text-1" style="width: 283px;">Our Works</h1>

            @elseif(URL::current()== url('/ar'))
                <h1 class="u-align-right u-text u-text-1">أعمالنا</h1>

            @elseif(URL::current()==url('/'))
                <h1 class="u-align-right u-text u-text-1">أعمالنا</h1>

            @endif
            <div class="u-border-3 u-border-custom-color-4 u-line u-line-horizontal u-line-1"></div>
            <div class="u-expanded-width-xl u-layout-horizontal u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
                        @foreach($allworks as $OurWorks)
                            <div style="padding: 0 60px 0 60px;"
                                 class="u-container-layout u-similar-container u-valign-bottom-xs u-container-layout-1">
                                <div class="u-border-3 u-border-custom-color-4 u-line u-line-horizontal u-line-2"></div>
                                <img src="../public/images/{{$OurWorks->img}}" alt=""
                                     class="u-border-3 u-border-custom-color-4 u-image u-image-round u-radius-23 u-image-1"
                                     data-image-width="600" data-image-height="320" style="cursor: pointer;">
                                <div class="u-container-style u-custom-color-4 u-group u-shape-rectangle u-group-1">
                                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                                        <p style="cursor: pointer;"
                                           class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-4">{{$OurWorks->work_name}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <a class="u-absolute-vcenter-lg u-absolute-vcenter-md u-absolute-vcenter-sm u-absolute-vcenter-xl u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1"
                   href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
                    <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
                </a>
                <a class="u-absolute-vcenter-lg u-absolute-vcenter-md u-absolute-vcenter-sm u-absolute-vcenter-xl u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2"
                   href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
                    <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
                </a>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xl u-section-5"
             id="sec-40cc">
        <div class="u-expanded-width u-gradient u-shape u-shape-rectangle u-shape-1"></div>
        <div class="u-layout-horizontal u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                @foreach($allfeedback as $feedback)
                    <div class="u-align-left u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-1"
                             style="padding: 0 60px 0 60px;">
                            <div class="u-container-style u-group u-radius-39 u-shape-round u-white u-group-1">
                                <div class="u-container-layout u-container-layout-2">
                                    <img src="../public/images/{{$feedback->img}}" alt=""
                                         class="u-image u-image-circle u-image-1"/>
                                    <h3 class="u-text u-text-1">{{$feedback->name}}</h3>
                                    <h4 class="u-align-right-md u-align-right-sm u-align-right-xs u-text u-text-2">{{$feedback->job}}</h4>
                                    <h5 class="u-align-center u-text u-text-3">{{$feedback->feedback}}</h5><span
                                        class="u-icon u-icon-circle u-text-custom-color-6 u-icon-1"><svg
                                            class="u-svg-link"
                                            preserveAspectRatio="xMidYMin slice"
                                            viewBox="0 0 409.294 409.294"
                                            style=""><use
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-fa27"></use></svg><svg
                                            class="u-svg-content" viewBox="0 0 409.294 409.294" id="svg-fa27"><path
                                                d="m0 204.647v175.412h175.412v-175.412h-116.941c0-64.48 52.461-116.941 116.941-116.941v-58.471c-96.728 0-175.412 78.684-175.412 175.412z"></path><path
                                                d="m409.294 87.706v-58.471c-96.728 0-175.412 78.684-175.412 175.412v175.412h175.412v-175.412h-116.941c0-64.48 52.461-116.941 116.941-116.941z"></path></svg></span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="u-absolute-vcenter u-custom-color-6 u-gallery-nav u-gallery-nav-prev u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-gallery-nav-1"
               href="#" role="button">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
          </span>
                <span class="sr-only">
            <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
          </span>
            </a>
            <a class="u-custom-color-6 u-gallery-nav u-gallery-nav-next u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-gallery-nav-2"
               href="#" role="button">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
          </span>
                <span class="sr-only">
            <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
          </span>
            </a>
        </div>
    </section>


    <footer class="u-clearfix u-footer u-grey-80 u-footer" id="sec-17cb">
        <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
                <div class="u-gutter-0 u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-align-center-sm u-align-center-xs u-align-left-md u-align-left-xl u-container-style u-layout-cell u-left-cell u-size-20 u-size-20-md u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                @foreach($allcontent as $content)
                                    <div alt="" class="u-image u-image-circle u-preserve-proportions u-image-1"
                                         data-image-width="28" data-image-height="28"></div>
                                    <p class="u-text u-text-1">{{$content->	WhatsApp}}</p>
                                    <img src="images/telegram.png" alt=""
                                         class="u-image u-image-default u-preserve-proportions u-image-2"
                                         data-image-width="28"
                                         data-image-height="28">
                                    <p class="u-text u-text-2">{{$content->Telegram}}</p><!--position-->
                                    <div data-position="" class="u-position u-position-1"><!--block-->
                                        <div class="u-block">
                                            <div class="u-block-container u-clearfix"><!--block_header-->
                                                <h5 class="u-block-header u-text u-text-3"><!--block_header_content-->
                                                    <!--/block_header_content--></h5><!--/block_header-->
                                                <!--block_content-->
                                                <div class="u-align-right u-block-content u-text u-text-4">
                                                    <!--block_content_content--><!--/block_content_content--></div>
                                                <!--/block_content-->
                                            </div>
                                        </div><!--/block-->
                                    </div><!--/position-->
                                    <img src="images/call.png" alt=""
                                         class="u-image u-image-default u-preserve-proportions u-image-3"
                                         data-image-width="28"
                                         data-image-height="28">
                                    <p class="u-text u-text-5">{{$content->Phone_Number}}</p>
                                    <img src="images/mail.png" alt=""
                                         class="u-image u-image-default u-preserve-proportions u-image-4"
                                         data-image-width="28"
                                         data-image-height="28">
                                    <p class="u-text u-text-6">{{$content->Email}}</p>
                            </div>
                            @endforeach
                        </div>
                        <div
                            class="u-align-center-sm u-align-right-md u-container-style u-layout-cell u-size-20 u-size-20-md u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
                                <a href="{{url('/en')}}" class="u-image u-logo u-image-5" data-image-width="235"
                                   data-image-height="138">
                                    <img src="images/logo2x.png" class="u-logo-image u-logo-image-1"
                                         data-image-width="155.562">
                                </a>
                                <a href="{{$content->Facebook_URL}}" class="u-image u-logo u-image-5"
                                   data-image-width="235"
                                   data-image-height="138">
                                    <img src="images/fb.png" alt=""
                                         class="u-image u-image-default u-preserve-proportions u-image-6"
                                         data-image-width="33"
                                         data-image-height="33">
                                </a>
                                <a href="{{$content->Twitter_URL}}" class="u-image u-logo u-image-5"
                                   data-image-width="235"
                                   data-image-height="138">
                                    <img src="images/twitter.png" alt=""
                                         class="u-image u-image-default u-preserve-proportions u-image-7"
                                         data-image-width="33"
                                         data-image-height="33">
                                </a>
                            </div>
                        </div>
                        <div
                            class="u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-md u-align-right-xl u-container-style u-layout-cell u-right-cell u-size-20 u-size-20-md u-layout-cell-3">
                            <div class="u-container-layout u-container-layout-3">
                                @if(URL::current()== url('/en'))
                                    <p class="u-text u-text-7">
                                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="{{url('en/Terms')}}">&nbsp;
                                            &nbsp;Terms Of Use
                                            <span class="u-icon u-icon-1">
                                            <svg class="u-svg-content" viewBox="0 0 443.52 443.52" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8    c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712L143.492,221.863z"></path></g></g></svg><img></span>
                                        </a>
                                    </p>
                                    <p class="u-text u-text-8">
                                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2"
                                           href="{{url('PrivacPolicyEN')}}">
                                            Privacy Policy
                                            <span class="u-icon u-icon-2">
                                            <svg class="u-svg-content" viewBox="0 0 443.52 443.52" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8    c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712L143.492,221.863z"></path></g></g></svg><img></span>
                                        </a>
                                    </p>
                                @elseif(URL::current()== url('/ar'))
                                    <p class="u-text u-text-7">
                                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="{{url('/TermsAR ')}}">&nbsp;
                                            &nbsp;​شروط الاستخدام
                                            <span class="u-icon u-icon-1">
                                            <svg class="u-svg-content" viewBox="0 0 443.52 443.52" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8    c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712L143.492,221.863z"></path></g></g></svg><img></span>
                                        </a>
                                    </p>
                                    <p class="u-text u-text-8">
                                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2"
                                           href="{{url('/PrivacPolicyAR')}}">
                                            سياسات الخصوصية
                                            <span class="u-icon u-icon-2">
                                            <svg class="u-svg-content" viewBox="0 0 443.52 443.52" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8    c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712L143.492,221.863z"></path></g></g></svg><img></span>
                                        </a>
                                    </p>
                                @elseif(URL::current()==url('/'))
                                    <p class="u-text u-text-7">
                                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="{{url('/TermsAR')}}">&nbsp;
                                            &nbsp;​شروط الاستخدام
                                            <span class="u-icon u-icon-1">
                                            <svg class="u-svg-content" viewBox="0 0 443.52 443.52" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8    c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712L143.492,221.863z"></path></g></g></svg><img></span>
                                        </a>
                                    </p>
                                    <p class="u-text u-text-8">
                                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2"
                                           href="{{url('PrivacPolicyAR')}}">
                                            سياسات الخصوصية
                                            <span class="u-icon u-icon-2">
                                            <svg class="u-svg-content" viewBox="0 0 443.52 443.52" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8    c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712L143.492,221.863z"></path></g></g></svg><img></span>
                                        </a>
                                    </p>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section class="u-backlink u-clearfix u-grey-80">
        <a class="u-link" href="{{url('/ar')}}" target="_blank">
            <span>Acon Creative</span>
        </a>
        <p class="u-text">
            <span>created By</span>
        </p>
        <p class="u-text"> <span >Team in faculty of computers & information </span> </p>.
    </section>
</body>
</html>
