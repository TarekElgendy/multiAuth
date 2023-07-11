<!DOCTYPE html>
<html lang="ar" class="no-js" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title_page') | {{$setting->seo_key }}</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('des_seo'){{$setting->seo_des}}">
    <meta name="keywords" content="@yield('key_seo'){{$setting->seo_key}}">
    <meta name="author" content="{{$setting->seo_key}}">
    {{-- start share button  --}}
    <meta property="og:image" content="@yield('image_url_share')" />
    <meta property="og:title" content="@yield('title_share')">
    <meta property="og:description" content="@yield('description_share')" />
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:type" content="website" />
    {{-- end share button  --}}

    <link rel="icon" href="{{$setting->image_icon}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{$setting->image_icon}}" type="image/x-icon">

    <link rel='stylesheet' href='{{url('/')}}/frontend/plugins/goodlayers-core/plugins/fa5/fa5.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{url('/')}}/frontend/plugins/goodlayers-core/plugins/fontawesome/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{url('/')}}/frontend/plugins/goodlayers-core/plugins/elegant/elegant-font.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{url('/')}}/frontend/plugins/goodlayers-core/plugins/ionicons/ionicons.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{url('/')}}/frontend/plugins/goodlayers-core/plugins/simpleline/simpleline.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{url('/')}}/frontend/plugins/goodlayers-core/plugins/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{url('/')}}/frontend/plugins/goodlayers-core/include/css/page-builder.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{url('/')}}/frontend/plugins/revslider/public/assets/css/rs6.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{url('/')}}/frontend/plugins/google-map-plugin/assets/css/frontend.css' type='text/css' media='all' />

    <link rel='stylesheet' href='{{url('/')}}/frontend/css/main-style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{url('/')}}/frontend/css/ar-style.css' type='text/css' media='all' />


    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMerriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin-ext%2Cdevanagari%2Clatin%2Cvietnamese%2Ccyrillic%2Ccyrillic-ext&amp;display=optional&amp;ver=5.3.2' type='text/css' media='all' />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet" property="stylesheet" media="all" type="text/css">


    @livewireStyles

</head>

<body class="rtl home page-template-default page page-id-7861 gdlr-core-body mediz-body mediz-body-front mediz-full  mediz-with-sticky-navigation  mediz-sticky-navigation-no-logo  mediz-blockquote-style-1 gdlr-core-link-to-lightbox" data-home-url="{{route('home')}}">

    <!-- Whatsapp -->
    <a href="https://wa.me/0570041576" target="_blank" id="wa_button">
        <div class="circlephone" style="transform-origin: center;"></div>
        <div class="circle-fill" style="transform-origin: center;"></div>
        <div class="img-circle" style="transform-origin: center;">
            <div class="img-circleblock" style="transform-origin: center;"></div>
        </div>
    </a>

    <!-- Mobile Header -->
    <div class="mediz-mobile-header-wrap">
        <div class="mediz-mobile-header mediz-header-background mediz-style-slide mediz-sticky-mobile-navigation " id="mediz-mobile-header">
            <div class="mediz-mobile-header-container mediz-container clearfix">
                <div class="mediz-logo  mediz-item-pdlr">
                    <div class="mediz-logo-inner">
                        <a class="" href="{{route('home')}}"><img src="{{url('/')}}/frontend/images/logo-01.svg" alt="" width="350" height="59" title="{{$setting->seo_key}}" /></a>
                    </div>
                </div>
                <div class="mediz-mobile-menu-right">
                    <div class="mediz-overlay-menu mediz-mobile-menu" id="mediz-mobile-menu"><a class="mediz-overlay-menu-icon mediz-mobile-menu-button mediz-mobile-button-hamburger" href="#"><span></span></a>
                        <div class="mediz-overlay-menu-content mediz-navigation-font">
                            <div class="mediz-overlay-menu-close"></div>
                            <div class="mediz-overlay-menu-row">
                                <div class="mediz-overlay-menu-cell">
                                    <ul id="menu-main-navigation" class="menu">
                                        <li class="menu-item menu-item-home current-menu-item page_item page-item-7684 current_page_item">
                                            <a href="{{route('home')}}"> الرئيسية </a>
                                        </li>
                                        <li class="menu-item menu-item-home current-menu-item page_item page-item-7684 current_page_item">
                                            <a href="{{route('about')}}"> من نحن </a>
                                        </li>
                                        <li class="menu-item menu-item-home current-menu-item page_item page-item-7684 current_page_item">
                                            <a href="{{route('doctors')}}"> أطبائنا </a>
                                        </li>
                                        <li class="menu-item menu-item-home current-menu-item page_item page-item-7684 current_page_item">
                                            <a href="{{route('home')}}#services"> خدماتنا </a>
                                        </li>
                                        <li class="menu-item menu-item-home current-menu-item page_item page-item-7684 current_page_item">
                                            <a href="{{route('contactUs')}}"> تواصل معنا </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mediz-body-outer-wrapper ">
        <div class="mediz-body-wrapper clearfix  mediz-with-frame">

            <!-- Top Header -->
            <div class="mediz-top-bar">
                <div class="mediz-top-bar-background"></div>
                <div class="mediz-top-bar-container mediz-container ">
                    <div class="mediz-top-bar-container-inner clearfix">
                        <div class="mediz-top-bar-left mediz-item-pdlr">
                            <bdi>
                                <i class="icon-clock" style="font-size: 18px ;color: #ffffff ;margin-right: 10px ;"></i>
                                @foreach ($workingDays as $item)
                                {{ $item->title }} {{ $item->short_description }}
                                @endforeach

                            </bdi>
                        </div>
                        <div class="mediz-top-bar-right mediz-item-pdlr">
                            <bdi>
                                <i class="icon-phone" style="font-size: 19px ;color: #ffffff ;margin-left: 25px ;margin-right: 10px ;"></i>
                                <a href="tel:{{ $setting->num1 }}">
                                    <span class="__cf_email__"> {{ $setting->num1 }} </span>
                                </a>



                            </bdi>
                            <bdi>
                                <i class="icon-envelope" style="font-size: 19px ;color: #ffffff ;margin-left: 25px ;margin-right: 10px ;"></i>
                                <a href="mailto:{{ $setting->email}} ">
                                    <span class="__cf_email__"> {{ $setting->email}} </span>
                                </a>
                                <bdi>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header -->
            <header class="mediz-header-wrap mediz-header-style-plain  mediz-style-menu-right mediz-sticky-navigation mediz-style-fixed" data-navigation-offset="75">
                <div class="mediz-header-background"></div>
                <div class="mediz-header-container  mediz-container">

                    <div class="mediz-header-container-inner clearfix">
                        <div class="mediz-logo  mediz-item-pdlr">
                            <div class="mediz-logo-inner">
                                <a class="" href="{{route('home')}}"><img src="{{url('/')}}/frontend/images/logo-01.svg" alt="" width="350" height="59" title="{{$setting->seo_key}}" /></a>
                            </div>
                        </div>

                        <div class="mediz-top-bar-right-social social_icons">
                            <a href="{{ $setting->tiktok }}" target="_blank" class="mediz-top-bar-social-icon" title="tiktok">
                                <i class="fab fa-tiktok"></i>
                            </a>
                            <a href="{{ $setting->twitter }}" target="_blank" class="mediz-top-bar-social-icon" title="twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="{{ $setting->instagram }}" target="_blank" class="mediz-top-bar-social-icon" title="instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <div class="mediz-navigation mediz-item-pdlr clearfix ">
                            <div class="mediz-main-menu" id="mediz-main-menu">
                                <ul id="menu-main-navigation-1" class="sf-menu">
                                    <li class="menu-item menu-item-home current-menu-item page_item page-item-7684 current_page_item mediz-normal-menu">
                                        <a href="{{route('home')}}"> الرئيسية </a>
                                    </li>
                                    <li class="menu-item menu-item-home current-menu-item page_item page-item-7684 current_page_item mediz-normal-menu">
                                        <a href="{{route('about')}}"> من نحن </a>
                                    </li>
                                    <li class="menu-item menu-item-home current-menu-item page_item page-item-7684 current_page_item mediz-normal-menu">
                                        <a href="{{route('doctors')}}"> أطبائنا </a>
                                    </li>
                                    <li class="menu-item menu-item-home current-menu-item page_item page-item-7684 current_page_item mediz-normal-menu">
                                        <a href="{{route('home')}}#services"> خدماتنا </a>
                                    </li>
                                    <li class="menu-item menu-item-home current-menu-item page_item page-item-7684 current_page_item mediz-normal-menu">
                                        <a href="{{route('contactUs')}}"> تواصل معنا </a>
                                    </li>
                                </ul>
                                <div class="mediz-navigation-slide-bar  mediz-navigation-slide-bar-style-dot" id="mediz-navigation-slide-bar"></div>
                            </div>

                            <div class="mediz-main-menu-right-wrap clearfix ">
                                <a class="mediz-main-menu-right-button mediz-button-1 mediz-style-round" href="{{route('home')}}#apponitment" target="_self">
                                    احجز موعد
                                </a>
                            </div>
                        </div>
                        <!-- mediz-navigation -->

                    </div>
                    <!-- mediz-header-inner -->
                </div>
                <!-- mediz-header-container -->
            </header>

            <div class="mediz-page-wrapper" id="mediz-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    @yield('content')
                </div>

                <footer>
                    <div class="mediz-footer-wrapper ">
                        <div class="mediz-footer-container mediz-container clearfix">
                            <div class="mediz-footer-column mediz-item-pdlr mediz-column-15">
                                <div id="text-1" class="widget widget_text mediz-widget">
                                    <div class="textwidget">
                                        <p><img class="alignnone size-full wp-image-6129" src="{{url('/')}}/frontend/images/logo-01.svg" alt="" width="170" />
                                            <br />
                                            <span class="gdlr-core-space-shortcode" style="margin-top: -27px ;"></span>
                                            <br />
                                            <span class="gdlr-core-space-shortcode" style="margin-top: 0px ;"></span>
                                            <br />
                                            <i class="icon-phone" style="font-size: 19px ;"></i><span> <bdi> {{$setting->num1}} </bdi> </span>
                                            <br />
                                            <span class="gdlr-core-space-shortcode" style="margin-top: -15px ;"></span>
                                            <br />
                                            <i class="icon-envelope" style="font-size: 19px ;"></i>
                                            <span class="__cf_email__"><bdi> {{$setting->email}} </bdi> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mediz-footer-column mediz-item-pdlr mediz-column-15">
                                <div id="nav_menu-3" class="widget widget_nav_menu mediz-widget">
                                    <h3 class="mediz-widget-title"> روابط سريعه </h3><span class="clear"></span>
                                    <div class="menu-about-us-container">
                                        <ul id="menu-about-us" class="menu">
                                            <li class="menu-item"><a href="{{route('home')}}"> الرئيسية </a></li>
                                            <li class="menu-item"><a href="{{route('about')}}"> من نحن </a></li>
                                            <li class="menu-item"><a href="{{route('home')}}#services"> خدماتنا </a></li>
                                            <li class="menu-item"><a href="{{route('contactUs')}}"> تواصل معنا </a></li>
                                            <li class="menu-item"><a href="{{route('home')}}#apponitment"> احجز موعد </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mediz-footer-column mediz-item-pdlr mediz-column-15">
                                <div id="nav_menu-2" class="widget widget_nav_menu mediz-widget">
                                    <h3 class="mediz-widget-title"> خدماتنا </h3><span class="clear"></span>
                                    <div class="menu-our-services-container">
                                        <ul id="menu-our-services" class="menu">
                                            <li class="menu-item"><a href="{{route('home')}}#services"> تركيبات الاسنان </a></li>
                                            <li class="menu-item"><a href="{{route('home')}}#services"> زراعة الاسنان </a></li>
                                            <li class="menu-item"><a href="{{route('home')}}#services"> جراحة اللثة </a></li>
                                            <li class="menu-item"><a href="{{route('home')}}#services"> جراحة الاسنان </a></li>
                                            <li class="menu-item"><a href="{{route('home')}}#services"> تقويم الاسنان </a></li>
                                            <li class="menu-item"><a href="{{route('home')}}#services"> تبييض الاسنان </a></li>
                                            <li class="menu-item"><a href="{{route('home')}}#services"> تنظيف الاسنان </a></li>
                                            <li class="menu-item"><a href="{{route('home')}}#services"> علاج عصب الاسنان </a></li>
                                            <li class="menu-item"><a href="{{route('home')}}#services"> حشوات الاسنان </a></li>
                                            <li class="menu-item"><a href="{{route('home')}}#services"> اسنان الأطفال </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mediz-footer-column mediz-item-pdlr mediz-column-15">
                                <div id="gdlr-core-opening-hour-widget-3" class="widget widget_gdlr-core-opening-hour-widget mediz-widget">
                                    <h3 class="mediz-widget-title"> ساعات العمل </h3><span class="clear"></span>
                                    <div class="gdlr-core-opening-hour-widget">
                                        <div class="gdlr-core-opening-hour-widget-list clearfix"><span class="gdlr-core-head"><i class="icon-clock"></i> الأحد - الخميس </span><span class="gdlr-core-tail"> 1م - 9م </span>
                                        </div>
                                        <div class="gdlr-core-opening-hour-widget-list clearfix"><span class="gdlr-core-head"><i class="icon-clock"></i> السبت </span><span class="gdlr-core-tail"> 1م - 5م </span></div>
                                        <div class="gdlr-core-opening-hour-widget-list clearfix"><span class="gdlr-core-head"><i class="icon-clock"></i> الجمعة </span><span class="gdlr-core-tail"> مغلق </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mediz-copyright-wrapper">
                        <div class="mediz-copyright-container mediz-container clearfix">
                            <div class="mediz-copyright-left mediz-item-pdlr">
                                <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;">

                                    <a href="{{ $setting->tiktok }}" target="_blank" class="gdlr-core-social-network-icon" title="tiktok" style="font-size: 17px ;color: #573189 ;"><i class="fab fa-tiktok"></i></a>

                                    <a href="{{ $setting->instagram }}" target="_blank" class="gdlr-core-social-network-icon" title="instagram" style="font-size: 17px ;color: #573189 ;"><i class="fa fa-instagram"></i></a>

                                    <a href="{{ $setting->twitter }}" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="font-size: 17px ;color: #573189 ;"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                            <div class="mediz-copyright-right mediz-item-pdlr"> جميع الحقوق محفوظة 2023
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
        </div>
    </div>

    <script type='text/javascript' src='{{url('/')}}/frontend/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='{{url('/')}}/frontend/js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='{{url('/')}}/frontend/plugins/revslider/public/assets/js/revolution.tools.min.js'></script>
    <script type='text/javascript' src='{{url('/')}}/frontend/plugins/revslider/public/assets/js/rs6.min.js'></script>


    <script type="text/javascript">
        function setREVStartSize(t) {
            try {
                var h, e = document.getElementById(t.c).parentNode.offsetWidth;
                if (e = 0 === e || isNaN(e) ? window.innerWidth : e, t.tabw = void 0 === t.tabw ? 0 : parseInt(t.tabw), t.thumbw = void 0 === t.thumbw ? 0 : parseInt(t.thumbw), t.tabh = void 0 === t.tabh ? 0 : parseInt(t.tabh), t.thumbh = void 0 === t.thumbh ? 0 : parseInt(t.thumbh), t.tabhide = void 0 === t.tabhide ? 0 : parseInt(t.tabhide), t.thumbhide = void 0 === t.thumbhide ? 0 : parseInt(t.thumbhide), t.mh = void 0 === t.mh || "" == t.mh || "auto" === t.mh ? 0 : parseInt(t.mh, 0), "fullscreen" === t.layout || "fullscreen" === t.l) h = Math.max(t.mh, window.innerHeight);
                else {
                    for (var i in t.gw = Array.isArray(t.gw) ? t.gw : [t.gw], t.rl) void 0 !== t.gw[i] && 0 !== t.gw[i] || (t.gw[i] = t.gw[i - 1]);
                    for (var i in t.gh = void 0 === t.el || "" === t.el || Array.isArray(t.el) && 0 == t.el.length ? t.gh : t.el, t.gh = Array.isArray(t.gh) ? t.gh : [t.gh], t.rl) void 0 !== t.gh[i] && 0 !== t.gh[i] || (t.gh[i] = t.gh[i - 1]);
                    var r, a = new Array(t.rl.length),
                        n = 0;
                    for (var i in t.tabw = t.tabhide >= e ? 0 : t.tabw, t.thumbw = t.thumbhide >= e ? 0 : t.thumbw, t.tabh = t.tabhide >= e ? 0 : t.tabh, t.thumbh = t.thumbhide >= e ? 0 : t.thumbh, t.rl) a[i] = t.rl[i] < window.innerWidth ? 0 : t.rl[i];
                    for (var i in r = a[0], a) r > a[i] && 0 < a[i] && (r = a[i], n = i);
                    var d = e > t.gw[n] + t.tabw + t.thumbw ? 1 : (e - (t.tabw + t.thumbw)) / t.gw[n];
                    h = t.gh[n] * d + (t.tabh + t.thumbh)
                }
                void 0 === window.rs_init_css && (window.rs_init_css = document.head.appendChild(document.createElement("style"))), document.getElementById(t.c).height = h, window.rs_init_css.innerHTML += "#" + t.c + "_wrapper { height: " + h + "px }"
            } catch (t) {
                console.log("Failure at Presize of Slider:" + t)
            }
        };
    </script>
    <script type="text/javascript">
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                var err = "<div class='rs_error_message_box'>";
                err += "<div class='rs_error_message_oops'>Oops...</div>";
                err += "<div class='rs_error_message_content'>";
                err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
                err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
                err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
                err += "</div>";
                err += "</div>";
                jQuery(sliderID).show().html(err);
            }
        }
    </script>
    <script type='text/javascript' src='{{url('/')}}/frontend/plugins/goodlayers-core/plugins/script.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var gdlr_core_pbf = {
            "admin": "",
            "video": {
                "width": "640",
                "height": "360"
            },
            "ajax_url": "#"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{url('/')}}/frontend/plugins/goodlayers-core/include/js/page-builder.js'></script>
    <script type='text/javascript' src='{{url('/')}}/frontend/plugins/zeno-font-resizer/js/js.cookie.js'></script>
    <script type='text/javascript' src='{{url('/')}}/frontend/plugins/zeno-font-resizer/js/jquery.fontsize.js'></script>
    <script type='text/javascript' src='{{url('/')}}/frontend/plugins/google-map-plugin/assets/js/maps.js'></script>
    <script type='text/javascript' src='{{url('/')}}/frontend/js/jquery/ui/effect.min.js'></script>
    <script type='text/javascript' src='{{url('/')}}/frontend/js/jquery.mmenu.js'></script>
    <script type='text/javascript' src='{{url('/')}}/frontend/js/jquery.superfish.js'></script>
    <script type='text/javascript' src='{{url('/')}}/frontend/js/plugins.min.js'></script>

    <script type="text/javascript">
        setREVStartSize({
            c: 'rev_slider_1_1',
            rl: [1240, 1240, 1240, 480],
            el: [700, 700, 700, 500],
            gw: [1280, 1280, 1280, 480],
            gh: [700, 700, 700, 500],
            layout: 'fullwidth',
            mh: "0"
        });
        var revapi1,
            tpj;
        jQuery(function() {
            tpj = jQuery;
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    jsFileLocation: "plugins/revslider/public/assets/js/",
                    sliderLayout: "fullwidth",
                    visibilityLevels: "1240,1240,1240,480",
                    gridwidth: "1280,1280,1280,480",
                    gridheight: "700,700,700,500",
                    minHeight: "",
                    editorheight: "700,768,960,500",
                    responsiveLevels: "1240,1240,1240,480",
                    disableProgressBar: "on",
                    navigation: {
                        onHoverStop: false,
                        touch: {
                            touchenabled: true
                        },
                        arrows: {
                            enable: true,
                            style: "uranus",
                            hide_onmobile: true,
                            hide_under: "416px",
                            hide_onleave: true,
                            left: {
                                h_offset: 30
                            },
                            right: {
                                h_offset: 30
                            }
                        },
                        bullets: {
                            enable: true,
                            tmp: "<span class=\"tp-bullet-inner\"></span>",
                            style: "uranus",
                            hide_over: "415px",
                            v_offset: 34
                        }
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true
                    },
                });
            }

        });
    </script>
    <script>
        var htmlDivCss = unescape("%23rev_slider_1_1_wrapper%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%28255%2C255%2C255%2C0%29%3B%0A%20%7D%0A%20%23rev_slider_1_1_wrapper%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23rev_slider_1_1_wrapper%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A%23rev_slider_1_1_wrapper%20.uranus%20.tp-bullet%7B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C255%2C255%2C0%29%3B%0A%20%20-webkit-transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20background%3Atransparent%3B%0A%20%20width%3A15px%3B%0A%20%20height%3A15px%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.uranus%20.tp-bullet.selected%2C%0A%23rev_slider_1_1_wrapper%20.uranus%20.tp-bullet%3Ahover%20%7B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C255%2C255%2C1%29%3B%0A%20%20border%3Anone%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background%3Atransparent%3B%0A%7D%0A%0A%23rev_slider_1_1_wrapper%20.uranus%20.tp-bullet-inner%20%7B%0A%20%20-webkit-transition%3A%20background-color%200.3s%20ease%2C%20-webkit-transform%200.3s%20ease%3B%0A%20%20transition%3A%20background-color%200.3s%20ease%2C%20transform%200.3s%20ease%3B%0A%20%20top%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20width%3A%20100%25%3B%0A%20%20height%3A%20100%25%3B%0A%20%20outline%3A%20none%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background-color%3A%20rgba%28255%2C255%2C255%2C0%29%3B%0A%20%20background-color%3A%20rgba%28255%2C255%2C255%2C0.3%29%3B%0A%20%20text-indent%3A%20-999em%3B%0A%20%20cursor%3A%20pointer%3B%0A%20%20position%3A%20absolute%3B%0A%7D%0A%0A%23rev_slider_1_1_wrapper%20.uranus%20.tp-bullet.selected%20.tp-bullet-inner%2C%0A%23rev_slider_1_1_wrapper%20.uranus%20.tp-bullet%3Ahover%20.tp-bullet-inner%7B%0A%20transform%3A%20scale%280.4%29%3B%0A%20-webkit-transform%3A%20scale%280.4%29%3B%0A%20background-color%3Argba%28255%2C255%2C255%2C1%29%3B%0A%7D%0A");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script>
        var htmlDivCss = unescape("%0A%0A%0A%0A");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    @livewireScripts
</body>

</html>