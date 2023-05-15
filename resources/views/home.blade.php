@extends('layouts.app')
@section('content')
    <div>
        <div class="banner">
            <div class="banner-text">
                <h1 class="fade-in">Welcome to our website</h1>
                <p class="fade-in">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="container">
        <!-- <div class="cz_gap clr  hide_on_mobile" style="height: 70px"></div> -->
        <div class="cz_gap show_on_mobile clr" style="height: 40px"></div>
        <div id="cz_88085" class="cz_grid_p cz_88085 pt-50" style="background:#282828;">
            <ul class="cz_grid_filters clr tal">
                <li class="cz_active_filter" data-filter=".cz_grid_item">All
                </li>
                @foreach($categories as $key)
                    <li>
                        <a href="/templates/{{ $key->id }}">{{ $key->name }}</a>
                    </li>
                @endforeach
            </ul>



            <div class="row-template"
                 data-gap="50" data-search="Search in demos ...">
                @foreach($templates as $key)
                    <div class="item-template">
                        <img src="{{ asset($key->file) }}" alt="">
                        <div class="overline-img">
                            <a href="template/{{ $key->id }}">
                                <button>Տեսնել</button>
                            </a>
                            <a href="/profile/site/buy/{{ $key->id }}">
                                <button>Վերցնել</button>
                            </a>
                        </div>
                        <h3>Կայք</h3>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- <div class="cz_gap clr  hide_on_mobile" style="height: 70px"></div> -->
    <div class="cz_gap show_on_mobile clr" style="height: 50px"></div>

    <div class="clr"></div>
    <div class="cz_gap clr  hide_on_mobile" style="height: 10px"></div>
    <div class="cz_gap show_on_mobile clr" style="height: 60px"></div>
    </div>
    </div>
    </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false"
         data-vc-stretch-content="true"
         class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="relative">
                        <div id="cz_17274" class="cz_sep2 cz_sep2_52 cz_sep_top relative">
                            <!-- <svg preserveAspectRatio="none"
                                 xmlns="http://www.w3.org/2000/svg" width="100%"
                                 viewBox="0 0 1600 257">
                                <path style="fill:#282828"
                                      d="M-7-10H1618V288H-7V-10ZM173.416,229.5L1611.94,3.759a50,50,0,0,0,42.21-56.729l-44.42-302.759A50,50,0,0,0,1553-397.94L-34.024-172.2a50,50,0,0,0-42.212,56.729L116.687,187.289C136.2,218.611,146.844,232.009,173.416,229.5Z"/>
                            </svg> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div id="features" class="vc_row wpb_row vc_row-fluid tac">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <!-- <div class="cz_gap clr  hide_on_mobile" style="height: 100px"></div> -->
                    <!-- <div class="cz_gap show_on_mobile clr" style="height: 80px"></div> -->
                </div>
            </div>
        </div>
    </div>

    <div data-vc-full-width="true" data-vc-full-width-init="false"
         class="vc_row wpb_row vc_row-fluid tac vc_custom_1536135329374 vc_row-has-fill">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="cz_gap clr  hide_on_mobile" style="height: 80px"></div>
                    <div class="cz_gap show_on_mobile clr" style="height: 10px"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false"
         data-vc-stretch-content="true"
         class="vc_row wpb_row vc_row-fluid tac vc_custom_1536135344573 vc_row-has-fill vc_row-no-padding">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">

                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false"
         class="vc_row wpb_row vc_row-fluid tac vc_custom_1536135374361 vc_row-has-fill">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="cz_gap clr  hide_on_mobile" style="height: 120px"></div>
                    <div class="cz_gap show_on_mobile clr" style="height: 30px"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false"
         class="vc_row wpb_row vc_row-fluid tac vc_custom_1536135374361 vc_row-has-fill">
        <div class="wpb_column vc_column_container vc_col-sm-4">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div id="cz_33369"
                         class="cz_33369 cz_title clr cz_smart_fs cz_title_pos_center tac">
                        <div class="cz_title_content">
                            <div class="cz_wpe_content"><h3
                                    style="text-align: center;"><span
                                        style="color: #ffffff; font-family: Poppins; font-weight: 300;"><span
                                            style="font-size: 42px;">Drag &amp; Drop Live<br
                                                class="clr"/>Page Builder</span><br/>
</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="cz_btn_center find_a_lightbox">
                        <div class="cz_80621_p"><a id="cz_80621"
                                                   class="cz_80621 cz_btn cz_btn_txt_no_fx cz_btn_zoom_in"
                                                   href="https://www.youtube.com/watch?v=Ih0g0ovJkPI"><span><i
                                        class="fa fa-play"></i><strong></strong></span><b
                                    class="cz_btn_onhover"><i
                                        class="fa fa-play"></i><strong></strong></b></a></div>
                    </div>
                    <div id="cz_103119"
                         class="cz_103119 cz_title clr cz_title_pos_inline tac">
                        <div class="cz_title_content">
                            <div class="cz_wpe_content"><p style="text-align: center;"><span
                                        style="font-size: 14px; color: #aaaaaa;"><span
                                            style="font-size: 18px;">Xtra is based on 2 popular page builders <span
                                                style="color: #ffffff;"><strong>Elementor</strong></span> &amp; <span
                                                style="color: #ffffff;"><strong>WPBakery</strong></span> (Visual Composer).<br/>
</span></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-4">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div id="cz_108475"
                         class="cz_108475 cz_title clr cz_smart_fs cz_title_pos_center tac">
                        <div class="cz_title_content">
                            <div class="cz_wpe_content"><h3
                                    style="text-align: center;"><span
                                        style="color: #ffffff; font-family: Poppins; font-weight: 300;"><span
                                            style="font-size: 42px;">Settings &amp; Theme<br
                                                class="clr"/>Options</span><br/>
</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="cz_btn_center find_a_lightbox">
                        <div class="cz_36970_p"><a id="cz_36970"
                                                   class="cz_36970 cz_btn cz_btn_txt_no_fx cz_btn_zoom_in"
                                                   href="https://www.youtube.com/watch?v=Ih0g0ovJkPI"><span><i
                                        class="fa fa-play"></i><strong></strong></span><b
                                    class="cz_btn_onhover"><i
                                        class="fa fa-play"></i><strong></strong></b></a></div>
                    </div>
                    <div id="cz_98244"
                         class="cz_98244 cz_title clr cz_title_pos_inline tac">
                        <div class="cz_title_content">
                            <div class="cz_wpe_content"><p style="text-align: center;"><span
                                        style="font-size: 14px; color: #aaaaaa;"><span
                                            style="font-size: 18px;">Theme Options are really live, you can see the changes in real time before publishing it.</span></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-4">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div id="cz_61005"
                         class="cz_61005 cz_title clr cz_smart_fs cz_title_pos_center tac">
                        <div class="cz_title_content">
                            <div class="cz_wpe_content"><h3
                                    style="text-align: center;"><span
                                        style="color: #ffffff; font-family: Poppins; font-weight: 300;"><span
                                            style="font-size: 42px;">Header &amp; Footer<br
                                                class="clr"/>Builder</span><br/>
</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="cz_btn_center find_a_lightbox">
                        <div class="cz_38615_p"><a id="cz_38615"
                                                   class="cz_38615 cz_btn cz_btn_txt_no_fx cz_btn_zoom_in"
                                                   href="https://www.youtube.com/watch?v=OaVrbCcZXBQ"><span><i
                                        class="fa fa-play"></i><strong></strong></span><b
                                    class="cz_btn_onhover"><i
                                        class="fa fa-play"></i><strong></strong></b></a></div>
                    </div>
                    <div id="cz_57606"
                         class="cz_57606 cz_title clr cz_title_pos_inline tac">
                        <div class="cz_title_content">
                            <div class="cz_wpe_content"><p style="text-align: center;"><span
                                        style="font-size: 14px; color: #aaaaaa;"><span
                                            style="font-size: 18px;">You can create <span
                                                class="cz_underline"
                                                style="margin: 0px 2px; padding: 1px 0px 2px; border-bottom: 1px solid;">Unlimited</span> headers with some clicks also set different headers for sticky and mobile.</span></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false"
         class="vc_row wpb_row vc_row-fluid tac vc_custom_1551775018633 vc_row-has-fill">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="cz_gap clr  hide_on_mobile" style="height: 220px"></div>
                    <div class="cz_gap show_on_mobile clr" style="height: 130px"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false"
         class="vc_row wpb_row vc_row-fluid tac vc_custom_1551774129113 vc_row-has-fill">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="cz_eqh cz_content_box_parent_fx  ">
                        <div id="cz_104260" class="cz_104260 cz_content_box clr">
                            <div class="cz_box_front clr">
                                <div class="cz_box_front_inner clr "><span></span>
                                    <div>
                                        <div id="cz_13265"
                                             class="cz_13265 cz_title clr cz_smart_fs cz_title_pos_inline tac">
                                            <div class="cz_title_shape shape_text cz_shape_1">
                                                X
                                            </div>
                                            <div class="cz_title_content">
                                                <div class="cz_wpe_content"><h3
                                                        style="text-align: center;"><span
                                                            style="font-size: 42px; margin-bottom: 20px; display: inline-block; color: #111111;">NO CODING KNOWLEDGE REQUIRED!<br/>
<span style="font-size: 24px; font-weight: 400;">Create your website with some clicks!</span><br/>
</span></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cz_gap clr  hide_on_mobile" style="height: 120px"></div>
                    <div class="cz_gap show_on_mobile clr" style="height: 30px"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false"
         class="vc_row wpb_row vc_row-fluid tac vc_custom_1551774149860 vc_row-has-fill">
        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div id="cz_33789" class="cz_33789 services clr style11 services_b">
                        <div class="service_img"><img width="64" height="64"
                                                      src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20width=&#39;64&#39;%20height=&#39;64&#39;%20viewBox%3D&#39;0%200%2064%2064&#39;%2F%3E"
                                                      data-czlz
                                                      data-src="https://xtratheme.com/wp-content/uploads/2018/01/drag.png"
                                                      class="service-icon attachment-thumbnail"
                                                      alt="" decoding="async" title="drag"/>
                        </div>
                        <div class="service_text"><h3>Drag &amp; Drop</h3><span
                                class="cz_sb_sep_line bar"></span>
                            <div class="cz_wpe_content">
                                <div
                                    style="line-height: 1.5; font-size: 13px; color: #666666; font-weight: 300; text-align: center;">
                                    <span style="color: #aaaaaa; font-size: 16px;">You can create your website with fully drag and drop feature with ease.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div id="cz_66552" class="cz_66552 services clr style11 services_b">
                        <div class="service_img"><img width="64" height="64"
                                                      src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20width=&#39;64&#39;%20height=&#39;64&#39;%20viewBox%3D&#39;0%200%2064%2064&#39;%2F%3E"
                                                      data-czlz
                                                      data-src="https://xtratheme.com/wp-content/uploads/2018/01/elements.png"
                                                      class="service-icon attachment-thumbnail"
                                                      alt="" decoding="async"
                                                      title="elements"/></div>
                        <div class="service_text"><h3>100+ Elements</h3><span
                                class="cz_sb_sep_line bar"></span>
                            <div class="cz_wpe_content">
                                <div
                                    style="line-height: 1.5; font-size: 13px; color: #666666; font-weight: 300; text-align: center;">
                                    <span style="color: #aaaaaa; font-size: 16px;">Xtra has 100+ unique and useful elements based on <strong>Elementor</strong> &amp; <strong>WPBakery</strong> (Visual Composer)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div id="cz_22716" class="cz_22716 services clr style11 services_b">
                        <div class="service_img"><img width="64" height="64"
                                                      src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20width=&#39;64&#39;%20height=&#39;64&#39;%20viewBox%3D&#39;0%200%2064%2064&#39;%2F%3E"
                                                      data-czlz
                                                      data-src="https://xtratheme.com/wp-content/uploads/2018/01/view.png"
                                                      class="service-icon attachment-thumbnail"
                                                      alt="" decoding="async" title="view"/>
                        </div>
                        <div class="service_text"><h3>Live Preview Mode</h3><span
                                class="cz_sb_sep_line bar"></span>
                            <div class="cz_wpe_content">
                                <div
                                    style="line-height: 1.5; font-size: 13px; color: #666666;  s.src = o.src,font-weight: 300; text-align: center;"><span
                                        style="color: #aaaaaa;"><span
                                            style="font-size: 16px;">With our preview mode you can see what you made before publishing it.</span><br/>
</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div id="cz_23439" class="cz_23439 services clr style11 services_b">
                        <div class="service_img"><img width="64" height="64"
                                                      src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20width=&#39;64&#39;%20height=&#39;64&#39;%20viewBox%3D&#39;0%200%2064%2064&#39;%2F%3E"
                                                      data-czlz
                                                      data-src="https://xtratheme.com/wp-content/uploads/2018/01/smartphone.png"
                                                      class="service-icon attachment-thumbnail"
                                                      alt="" decoding="async"
                                                      title="smartphone"/></div>
                        <div class="service_text"><h3>Responsive Design</h3><span
                                class="cz_sb_sep_line bar"></span>
                            <div class="cz_wpe_content">
                                <div
                                    style="line-height: 1.5; font-size: 13px; color: #666666; font-weight: 300; text-align: center;">
                                    <span style="color: #aaaaaa; font-size: 16px;">Set different styles for Mobile, Tablet and Desktop in our Awesome Stylekit&#x2122;.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false"
         class="vc_row wpb_row vc_row-fluid tac vc_custom_1551774129113 vc_row-has-fill">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="cz_gap clr  hide_on_mobile" style="height: 80px"></div>
                    <div class="cz_gap show_on_mobile clr" style="height: 30px"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false"
         data-vc-stretch-content="true"
         class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="relative">
                        <div id="cz_55493" class="cz_sep2 cz_sep2_7 cz_sep_top relative">
                            <svg preserveAspectRatio="none"
                                 xmlns="http://www.w3.org/2000/svg" width="20%"
                                 viewBox="0 0 1600 116">
                                <path style="fill:transparent"
                                      d="M0,171H1600V48.5L800,1,0,51.112V171Z"/>
                                <path style="fill:transparent"
                                      d="M0,171H1600V80L800,1,0,81.112V171Z"/>
                                <path style="fill:#000000"
                                      d="M0,200H1600V109L800,0,0,110.112V200Z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div class="vc_row wpb_row vc_row-fluid tac">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="cz_gap clr  hide_on_mobile" style="height: 150px"></div>
                    <div class="cz_gap show_on_mobile clr" style="height: 70px"></div>
                    <div id="cz_30608"
                         class="cz_30608 cz_title clr cz_smart_fs cz_title_pos_inline tac">
                        <div class="cz_title_content">
                            <div class="cz_wpe_content">
                                <div style="text-align: center; line-height: 1.3;"><span
                                        style="font-size: 110px;"><span
                                            style="font-weight: 200;">200+</span></span></div>
                                <div style="text-align: center; line-height: 1.3;">
                                    <strong><span
                                            style="font-size: 50px;">CONTENT BLOCKS<br/>
</span></strong></div>
                            </div>
                        </div>
                    </div>
                    <div id="cz_41826"
                         class="cz_41826 cz_title clr cz_title_pos_inline tac">
                        <div class="cz_title_content">
                            <div class="cz_wpe_content"><h3 style="text-align: center;">
                                                            <span style="font-size: 24px; color: #666666;"><span
                                                                    style="font-weight: 300;">More than 200 modular content blocks</span></span>
                                </h3>
                                <h3 style="text-align: center;"><span
                                        style="font-size: 24px; color: #666666;"><span
                                            style="font-weight: 300;">to provide </span></span><span
                                        style="font-size: 24px; color: #666666;"><span
                                            style="font-weight: 300;">all the things you need to build an awesome website.</span></span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="cz_gap clr  hide_on_mobile" style="height: 150px"></div>
                    <div class="cz_gap show_on_mobile clr" style="height: 120px"></div>
                </div>
            </div>
        </div>
    </div>
    <div data-vc-full-width="true" data-vc-full-width-init="false"
         class="vc_row wpb_row vc_row-fluid vc_custom_1592300444469 vc_row-has-fill">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div id="cz_90945"
                         class="cz_90945 cz_image clr cz_image_no_fx center_on_mobile">
                        <div class="">
                            <div class="cz_image_in" data-tilt>
                                <div class="cz_main_image"><img width="900" height="512"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20width=&#39;900&#39;%20height=&#39;512&#39;%20viewBox%3D&#39;0%200%20900%20512&#39;%2F%3E"
                                                                data-czlz
                                                                data-src="https://xtratheme.com/wp-content/uploads/2018/01/templates2.jpg"
                                                                class="attachment-full"
                                                                alt="" decoding="async"
                                                                title="templates2"
                                                                data-srcset="https://xtratheme.com/wp-content/uploads/2018/01/templates2.jpg 900w, https://xtratheme.com/wp-content/uploads/2018/01/templates2-600x341.jpg 600w, https://xtratheme.com/wp-content/uploads/2018/01/templates2-300x171.jpg 300w, https://xtratheme.com/wp-content/uploads/2018/01/templates2-768x437.jpg 768w"
                                                                data-sizes="(max-width: 900px) 100vw, 900px"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="cz_gap clr  hide_on_mobile" style="height: 200px"></div>
                    <div class="cz_gap show_on_mobile clr" style="height: 70px"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false"
         class="vc_row wpb_row vc_row-fluid tac vc_custom_1558336071261 vc_row-has-fill">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="cz_eqh cz_content_box_parent_fx  ">
                        <div id="cz_30508" class="cz_30508 cz_content_box clr">
                            <div class="cz_box_front clr">
                                <div class="cz_box_front_inner clr "><span></span>
                                    <div>
                                        <div id="cz_49539" data-disable-comma=""
                                             data-duration="3000" data-delay="0000"
                                             class="cz_49539 cz_counter clr tac cz_2rows">
                                            <div class=""><span class="cz_counter_num_wrap"><span
                                                        class="cz_counter_num">33000</span><i>+</i></span>
                                            </div>
                                        </div>
                                        <div id="cz_104889"
                                             class="cz_104889 cz_title clr cz_smart_fs cz_title_pos_inline tac">
                                            <div class="cz_title_shape shape_text cz_shape_1">
                                                X
                                            </div>
                                            <div class="cz_title_content">
                                                <div class="cz_wpe_content"><h3
                                                        style="text-align: center;"><span
                                                            style="font-size: 42px; margin-bottom: 20px; display: inline-block; color: #111111;">Happy Clients!<br/>
            <span style="font-size: 24px; font-weight: 400;">Cant be wrong!</span><br/>
            </span></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>

    <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false"
         data-vc-stretch-content="true"
         class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="relative">
                        <div id="cz_102296" class="cz_sep2 cz_sep2_7 cz_sep_top relative">
                            <svg preserveAspectRatio="none"
                                 xmlns="http://www.w3.org/2000/svg" width="100%"
                                 viewBox="0 0 1600 116">
                                <path style="fill:transparent"
                                      d="M0,171H1600V48.5L800,1,0,51.112V171Z"/>
                                <path style="fill:transparent"
                                      d="M0,171H1600V80L800,1,0,81.112V171Z"/>
                                <path style="fill:#282828"
                                      d="M0,200H1600V109L800,0,0,110.112V200Z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div id="feature" class="vc_row wpb_row vc_row-fluid tac">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <!-- <div class="cz_gap clr  hide_on_mobile" style="height: 150px"></div> -->
                    <!-- <div class="cz_gap show_on_mobile clr" style="height: 80px"></div> -->
                    <!-- <div class="cz_gap clr  hide_on_mobile" style="height: 100px"></div> -->
                    <!-- <div class="cz_gap show_on_mobile clr" style="height: 50px"></div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">

            </div>
        </div>
    </div>
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="cz_gap clr  hide_on_mobile" style="height: 70px"></div>
                    <div class="cz_gap show_on_mobile clr" style="height: 30px"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">

                    <div class="cz_gap clr " style="height: 30px"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="wpb_raw_code wpb_raw_js">
                        <div class="wpb_wrapper">
                            <script>
                                jQuery(function ($) {
                                    $('.cz_grid_item').not('.cz_grid_first').each(function () {

                                        var $this = $(this),
                                            link = $this.find('.cz_grid_link').attr('href'),
                                            elementor = wpbakery = link;

                                        if (link.indexOf('elementor') >= 0) {
                                            wpbakery = link.replace('elementor/index.html', '');
                                        } else {
                                            elementor = link.replace('.com/', '.com/elementor/');
                                        }

                                        if (link != '#!' && link.indexOf('arabic') <= 0 && !$this.find('.xtra-demo-selector').length) {
                                            $this.find('.cz_grid_title').attr('href', '#');
                                        }

                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section>
        <div id="layout" class="clr layout_">
            <div class="inner_layout">
                <div id="page_content" class="page_content" role="main">
                    <div class="row clr">
                        <div class="s12 clr">
                            <div class="cz_is_blank clr">
                                <div class="cz_post_content clr">
                                    <section class="wpb-content-wrapper">
                                        <div class="vc_row wpb_row vc_row-fluid" style="display: flex">

                                            <div class="wpb_column vc_column_container vc_col-sm-9"
                                                 style="margin: auto">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div id="cz_15139"
                                                             data-arrows='{"open":"fa fa-angle-down","close":"fa fa-angle-up"}'
                                                             class="cz_15139 cz_acc clr cz_acc_toggle">
                                                            <div>
                                                                <div id=""><span class="cz_acc_child"><div>Why choose Xtra theme?</div></span>
                                                                    <div class="cz_acc_child_content clr">
                                                                        <div id="cz_70556"
                                                                             class="cz_70556 cz_title clr cz_title_pos_inline">
                                                                            <div class="cz_title_content">
                                                                                <div class="cz_wpe_content"><p>Xtra is
                                                                                        <strong>best
                                                                                            new top seller theme of
                                                                                            2018-2019</strong>
                                                                                        and has more than <strong>28500
                                                                                            happy
                                                                                            clients</strong>, this theme
                                                                                        is made by
                                                                                        <strong>Codevz</strong> and
                                                                                        <strong>ThemeTor</strong> expert
                                                                                        teams with
                                                                                        more than <strong>8</strong>
                                                                                        years of
                                                                                        experience in WordPress theme
                                                                                        and plugin
                                                                                        development.<br class="clr"/><br
                                                                                            class="clr"/></p>
                                                                                    <p>There is a lot of things that you
                                                                                        can
                                                                                        choose Xtra</p>
                                                                                    <ul>
                                                                                        <li>Very lightweight &amp;
                                                                                            fast
                                                                                        </li>
                                                                                        <li>SEO Friendly</li>
                                                                                        <li>Time Saver</li>
                                                                                        <li>Fully Customizable (Stylekit&#x2122;
                                                                                            is anywhere)
                                                                                        </li>
                                                                                        <li>200 pre-made template
                                                                                            blocks
                                                                                        </li>
                                                                                        <li>lots of pre-built websites
                                                                                        </li>
                                                                                        <li>Friendly support</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id=""><span class="cz_acc_child"><div>How fast are websites made with Xtra theme?</div></span>
                                                                    <div class="cz_acc_child_content clr">
                                                                        <div id="cz_42842"
                                                                             class="cz_42842 cz_title clr cz_title_pos_inline">
                                                                            <div class="cz_title_content">
                                                                                <div class="cz_wpe_content"><p>If you
                                                                                        create a
                                                                                        website with Xtra theme and
                                                                                        optimize it your
                                                                                        website will be faster than 95%
                                                                                        of all other
                                                                                        websites in the world as
                                                                                        Gtmetrix and
                                                                                        Pingdom results.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id=""><span class="cz_acc_child"><div>What is the single License mean?</div></span>
                                                                    <div class="cz_acc_child_content clr">
                                                                        <div id="cz_51755"
                                                                             class="cz_51755 cz_title clr cz_title_pos_inline">
                                                                            <div class="cz_title_content">
                                                                                <div class="cz_wpe_content"><p><span
                                                                                            style="font-size: 18px;">Each license can only be used on one domain. If you want to use the theme on a second domain, then you must purchase a new license, and so on for each domain.</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id=""><span class="cz_acc_child"><div>Do I need to pay any extra fee?</div></span>
                                                                    <div class="cz_acc_child_content clr">
                                                                        <div id="cz_91127"
                                                                             class="cz_91127 cz_title clr cz_title_pos_inline">
                                                                            <div class="cz_title_content">
                                                                                <div class="cz_wpe_content"><p>No, All
                                                                                        features
                                                                                        are included with your purchase
                                                                                        and you do
                                                                                        not need to buy or pay for
                                                                                        anything else,
                                                                                        your theme and premium plugins
                                                                                        will be
                                                                                        update for lifetime for
                                                                                        free.</p>
                                                                                    <p>You have 6 months free support
                                                                                        and if you
                                                                                        need you can extend it after 6
                                                                                        months by
                                                                                        low fee.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id=""><span class="cz_acc_child"><div>Payment is one time or annually?</div></span>
                                                                    <div class="cz_acc_child_content clr">
                                                                        <div id="cz_93727"
                                                                             class="cz_93727 cz_title clr cz_title_pos_inline">
                                                                            <div class="cz_title_content">
                                                                                <div class="cz_wpe_content"><p>Payment
                                                                                        is one
                                                                                        time only and by purchasing XTRA
                                                                                        theme you
                                                                                        will get theme files, all
                                                                                        plugins, demos and
                                                                                        6 months support. Only if your
                                                                                        support
                                                                                        expire and you need support, you
                                                                                        can extend
                                                                                        your support with low price.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id=""><span class="cz_acc_child"><div>Can I buy only single demo?</div></span>
                                                                    <div class="cz_acc_child_content clr">
                                                                        <div id="cz_76505"
                                                                             class="cz_76505 cz_title clr cz_title_pos_inline">
                                                                            <div class="cz_title_content">
                                                                                <div class="cz_wpe_content"><p>No, these
                                                                                        demos
                                                                                        are not separate themes and all
                                                                                        of them
                                                                                        included in a single theme
                                                                                        called XTRA.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id=""><span class="cz_acc_child"><div>Can I see the back-end and test the theme before buy?</div></span>
                                                                    <div class="cz_acc_child_content clr">
                                                                        <div id="cz_78320"
                                                                             class="cz_78320 cz_title clr cz_title_pos_inline">
                                                                            <div class="cz_title_content">
                                                                                <div class="cz_wpe_content"><p>There is
                                                                                        no test
                                                                                        but, You can see all back-end
                                                                                        screenshots
                                                                                        <strong><a
                                                                                                href="../theme-screenshots/index.html">here</a></strong>
                                                                                        and videos on our YouTube
                                                                                        channel,
                                                                                        <strong><a
                                                                                                href="https://www.youtube.com/channel/UCrS1L4oeTRfU1hvIo1gJGjg/videos"
                                                                                                target="_blank"
                                                                                                rel="noopener noreferrer">click
                                                                                                here</a></strong></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </div>
        </div>
        </div>
        </div>
        </div>

        </div>
@endsection
