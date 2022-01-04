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
         data-responsive-from="MD">
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
                    @if(Str::substr(URL::current(),-2)=='EN')
                        <a class=" u-button-style u-hover-custom-color-1 u-nav-link  u-text-custom-color-1 u-text-hover-white"
                           href="#" style="padding: 28px 45px; text-shadow: 2px 0 8px rgba(128,128,128,1); ">Language</a>
                        <div class="u-nav-popup">
                            <ul class="u-h-spacing-24 u-nav u-unstyled u-v-spacing-14 u-nav-2"
                                style="text-align: left;width: 192px">
                                <li class="u-nav-item"><a
                                        href="{{Str::replaceLast('EN','AR',URL::current())}}"
                                        class="u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">العربية</a>
                                </li>
                                <li class="u-nav-item"><a
                                        href="{{Str::replaceLast('AR','EN',URL::current())}}"
                                        class="u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">English</a>
                                </li>
                            </ul>
                        </div>
                    @elseif(Str::substr(URL::current(),-2)=='AR')

                        <a class=" u-button-style u-hover-custom-color-1 u-nav-link u-text-custom-color-1 u-text-hover-white"
                           href="#" style="padding: 28px 45px; text-shadow: 2px 0 8px rgba(128,128,128,1)">اللغة</a>
                        <div class="u-nav-popup">
                            <ul class="u-h-spacing-24 u-nav u-unstyled u-v-spacing-14 u-nav-2"
                                style="text-align: left;width: 127px">
                                <li class="u-nav-item"><a
                                        href="{{Str::replaceLast('EN','AR',URL::current())}}"
                                        class="u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">العربية</a>
                                </li>
                                <li class="u-nav-item"><a
                                        href="{{Str::replaceLast('AR','EN',URL::current())}}"
                                        class="u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">English</a>
                                </li>
                            </ul>
                        </div>
                    @elseif(Str::substr(URL::current(),-2)=='AR')
                        <a class=" u-button-style u-hover-custom-color-1 u-nav-link u-text-custom-color-1 u-text-hover-white"
                           href="#" style="padding: 28px 45px; text-shadow: 2px 0 8px rgba(128,128,128,1);">اللغة</a>
                        <div class="u-nav-popup">
                            <ul class="u-h-spacing-24 u-nav u-unstyled u-v-spacing-14 u-nav-2"
                                style="text-align: left;width: 127px">
                                <li class="u-nav-item"><a
                                        href="{{Str::replaceLast('EN','AR',URL::current())}}"
                                        class="u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">العربية</a>
                                </li>
                                <li class="u-nav-item"><a
                                        href="{{Str::replaceLast('AR','EN',URL::current())}}"
                                        class="u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">English</a>
                                </li>
                            </ul>
                        </div>
                    @endif

                </li>
                <li class="u-nav-item">
                    @if(Str::substr(URL::current(),-2)=='EN')
                        <a href="{{url('/en')}}#sec-c21d"
                           class=" u-button-style u-hover-custom-color-1 u-nav-link  u-text-custom-color-1 u-text-hover-white"
                           style="padding: 28px 45px; text-shadow: 2px 0 8px rgba(128,128,128,1);">About Us</a>
                    @elseif(Str::substr(URL::current(),-2)=='AR')
                        <a href="{{url('ar')}}#sec-c21d"
                           class=" u-button-style u-hover-custom-color-1 u-nav-link  u-text-custom-color-1 u-text-hover-white"
                           style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">نبذة عنا</a>
                    @elseif(Str::substr(URL::current(),-2)=='AR')
                        <a href="{{url('/')}}#sec-c21d"
                           class=" u-button-style u-hover-custom-color-1 u-nav-link  u-text-custom-color-1 u-text-hover-white"
                           style="padding: 28px 45px; text-shadow: 2px 0 8px rgba(128,128,128,1);">نبذة عنا</a>
                    @endif
                </li>
                <li class="u-nav-item">
                    @if(Str::substr(URL::current(),-2)=='EN')
                        <a href="{{url('/en')}}#sec-3b42"
                           class=" u-button-style u-hover-custom-color-1 u-nav-link  u-text-custom-color-1 u-text-hover-white"
                           style="padding: 28px 45px; text-shadow: 2px 0 8px rgba(128,128,128,1);">Our Works</a>
                    @elseif(Str::substr(URL::current(),-2)=='AR')
                        <a href="{{url('/ar')}}#sec-3b42"
                           class=" u-button-style u-hover-custom-color-1 u-nav-link  u-text-custom-color-1 u-text-hover-white"
                           style="padding: 28px 45px; text-shadow: 2px 0 8px rgba(128,128,128,1);">اعمالنا</a>
                    @elseif(Str::substr(URL::current(),-2)=='AR')
                        <a href="{{url('/')}}#sec-3b42"
                           class=" u-button-style u-hover-custom-color-1 u-nav-link  u-text-custom-color-1 u-text-hover-white"
                           style="padding: 28px 45px; text-shadow: 2px 0 8px rgba(128,128,128,1);">اعمالنا</a>
                    @endif
                </li>
                <li class="u-nav-item">
                    @if(Str::substr(URL::current(),-2)=='EN')
                        <a class=" u-button-style u-hover-custom-color-1 u-nav-link u-text-custom-color-1 u-text-hover-white"
                           href="#" style="padding: 28px 45px; text-shadow: 2px 0 8px rgba(128,128,128,1);">Our
                            Services</a>
                    @elseif(Str::substr(URL::current(),-2)=='AR')
                        <a class=" u-button-style u-hover-custom-color-1 u-nav-link u-text-custom-color-1 u-text-hover-white"
                           href="#" style="padding: 28px 45px; text-shadow: 2px 0 8px rgba(128,128,128,1);">خدماتنا</a>
                    @elseif(Str::substr(URL::current(),-2)=='AR')
                        <a class="u-button-style u-hover-custom-color-1 u-nav-link u-text-custom-color-1 u-text-hover-white"
                           href="#" style="padding: 28px 45px; text-shadow: 2px 0 8px rgba(128,128,128,1);">خدماتنا</a>
                    @endif
                    <div class="u-nav-popup " style="width: 100%;">
                        <ul class="u-h-spacing-24 u-nav u-unstyled u-v-spacing-14 u-nav-2" style="width: 100%;">
                            @foreach($allservices as $services)
                                @if(Str::substr(URL::current(),-2)=='EN')
                                    <li class="u-nav-item">
                                        <a href="/{{$services->name_en}}EN"
                                           class="u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">{{$services->name_en}}</a>
                                    </li>
                                @elseif(Str::substr(URL::current(),-2)=='AR')
                                    <li class="u-nav-item ">
                                        <a href="/{{$services->name_en}}AR"
                                           class="u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">{{$services->name_ar}}</a>
                                    </li>
                                @elseif(Str::substr(URL::current(),-2)=='AR')
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
                    @if(Str::substr(URL::current(),-2)=='EN')
                        <a href="{{url('/en')}}"
                           class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-active-white u-text-custom-color-1 u-text-hover-white"
                           style="padding: 28px 45px; text-shadow: 2px 0 8px rgba(128,128,128,1);">Home</a>
                    @elseif(Str::substr(URL::current(),-2)=='AR')
                        <a href="{{url('/ar')}}"
                           class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-active-white u-text-custom-color-1 u-text-hover-white"
                           style="padding: 28px 45px; text-shadow: 2px 0 8px rgba(128,128,128,1);">الرئيسية</a>
                    @elseif(Str::substr(URL::current(),-2)=='AR')
                        <a href="{{url('/ar')}}"
                           class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-active-white u-text-custom-color-1 u-text-hover-white"
                           style="padding: 28px 45px; text-shadow: 2px 0 8px rgba(128,128,128,1);">الرئيسية</a>
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
                            @if(Str::substr(URL::current(),-2)=='EN')
                                <a href="{{url('/en')}}" class="u-button-style u-nav-link" style="padding: 24px 32px;">Home</a>
                            @elseif(Str::substr(URL::current(),-2)=='AR')
                                <a href="{{url('/ar')}}" class="u-button-style u-nav-link" style="padding: 24px 32px;">الرئيسية</a>
                            @elseif(Str::substr(URL::current(),-2)=='AR')
                                <a href="{{url('/')}}" class="u-button-style u-nav-link" style="padding: 24px 32px;">الرئيسية</a>
                            @endif
                        </li>
                        <li class="u-nav-item">
                            @if(Str::substr(URL::current(),-2)=='EN')
                                <a class="u-button-style u-nav-link" href="#"
                                   style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">Our
                                    Services</a>
                            @elseif(Str::substr(URL::current(),-2)=='AR')
                                <a class="u-button-style u-nav-link" href="#"
                                   style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">خدماتنا</a>
                            @elseif(Str::substr(URL::current(),-2)=='AR')
                                <a class="u-button-style u-nav-link" href="#"
                                   style="padding: 28px 32px; text-shadow: 2px 0 8px rgba(128,128,128,1);">خدماتنا</a>
                            @endif
                            <div class="u-nav-popup " style="width: 100%;">
                                <ul class="u-h-spacing-24 u-nav u-unstyled u-v-spacing-14 u-nav-2" style="width: 100%;">
                                    @foreach($allservices as $services)
                                        @if(Str::substr(URL::current(),-2)=='EN')
                                            <li class="u-nav-item ">
                                                <a href="/{{$services->name_en}}EN"
                                                   class=" u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">{{$services->name_en}}</a>
                                            </li>
                                        @elseif(Str::substr(URL::current(),-2)=='AR')
                                            <li class="u-nav-item ">
                                                <a href="/{{$services->name_en}}AR"
                                                   class=" u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">{{$services->name_ar}}</a>
                                            </li>
                                        @elseif(Str::substr(URL::current(),-2)=='AR')
                                            <li class="u-nav-item ">
                                                <a href="/{{$services->name_en}}AR"
                                                   class=" u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">{{$services->name_ar}}</a>
                                            </li>
                                        @endif
                                    @endforeach

                                </ul>
                            </div>
                        <li class="u-nav-item">
                            @if(Str::substr(URL::current(),-2)=='EN')
                                <a class="u-button-style u-nav-link" style="padding: 24px 32px;">Our Works</a>
                            @elseif(Str::substr(URL::current(),-2)=='AR')
                                <a class="u-button-style u-nav-link" style="padding: 24px 32px;">اعمالنا</a>
                            @elseif(Str::substr(URL::current(),-2)=='AR')
                                <a class="u-button-style u-nav-link" style="padding: 24px 32px;">اعمالنا</a>
                            @endif
                        </li>
                        <li class="u-nav-item">
                            @if(Str::substr(URL::current(),-2)=='EN')
                                <a class="u-button-style u-nav-link" style="padding: 24px 32px;">About Us</a>
                            @elseif(Str::substr(URL::current(),-2)=='AR')
                                <a class="u-button-style u-nav-link" style="padding: 24px 32px;">نبذة عنا</a>
                            @elseif(Str::substr(URL::current(),-2)=='AR')
                                <a class="u-button-style u-nav-link" style="padding: 24px 32px;">نبذة عنا</a>
                            @endif
                        </li>

                        <li class="u-nav-item">
                            @if(Str::substr(URL::current(),-2)=='EN')
                                <a class="u-button-style u-nav-link" href="#" style="padding: 24px 32px;">Languages</a>
                            @elseif(Str::substr(URL::current(),-2)=='AR')
                                <a class="u-button-style u-nav-link" href="#" style="padding: 24px 32px;">اللغة</a>
                            @elseif(Str::substr(URL::current(),-2)=='AR')
                                <a class="u-button-style u-nav-link" href="#" style="padding: 24px 32px;">اللغة</a>
                            @endif
                            <div class="u-nav-popup">
                                <ul class="u-h-spacing-24 u-nav u-unstyled u-v-spacing-14 u-nav-5">
                                    <li class="u-nav-item"><a
                                       href="{{Str::replaceLast('EN','AR',URL::current())}}" class="u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">العربية</a>
                                    </li>
                                    <li class="u-nav-item"><a
                                      href="{{URL::current()}}"   class="u-active-custom-color-6 u-button-style u-custom-color-6 u-hover-custom-color-1 u-nav-link u-text-hover-white">English</a>
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
    @if(Str::substr(URL::current(),-2)=='EN')
        <img src="images/logo2x.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-2"
             data-image-width="235" data-image-height="138" data-href="{{url('/en')}}"></header>
@elseif(Str::substr(URL::current(),-2)=='AR')
    <img src="images/logo2x.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-2"
         data-image-width="235" data-image-height="138" data-href="{{url('/ar')}}"></header>
@elseif(Str::substr(URL::current(),-2)=='AR')
    <img src="images/logo2x.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-2"
         data-image-width="235" data-image-height="138" data-href="{{url('/ar')}}"></header>
@endif

@yield('mastercontent')

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
                            @if(Str::substr(URL::current(),-2)=='EN')
                                <p class="u-text u-text-7">
                                    <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="{{url('/TermsEN')}}">&nbsp;
                                        &nbsp;Terms Of Use
                                        <span class="u-icon u-icon-1">
                                            <svg class="u-svg-content" viewBox="0 0 443.52 443.52" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8    c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712L143.492,221.863z"></path></g></g></svg><img></span>
                                    </a>
                                </p>
                                <p class="u-text u-text-8">
                                    <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2"
                                       href="{{url('/PrivacPolicyEN')}}">
                                        Privacy Policy
                                        <span class="u-icon u-icon-2">
                                            <svg class="u-svg-content" viewBox="0 0 443.52 443.52" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8    c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712L143.492,221.863z"></path></g></g></svg><img></span>
                                    </a>
                                </p>
                            @elseif(Str::substr(URL::current(),-2)=='AR')
                                <p class="u-text u-text-7">
                                    <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="{{url('/TermsAR')}}">&nbsp;
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
                            @elseif(Str::substr(URL::current(),-2)=='AR')
                                <p class="u-text u-text-7">
                                    <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="{{url('/TermsAR')}}">&nbsp;
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
        <span>created with</span>
    </p>
    <p class="u-text"> <span >Team in faculty of computers & information </span> </p>.
</section>
</body>
</html>
