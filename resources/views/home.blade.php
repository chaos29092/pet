@extends('master')

@section('title','Veteye')
@section('description','des')
@section('keywords','keywordsss')

@section('menu')
    <li class="hasSubMenu current-menu-ancestor current_page_ancestor "><a href="/">Home</a></li>
    <li class="hasSubMenu"><a href="{{URL::to('product')}}">Product</a></li>
    <li class="hasSubMenu"><a href="{{URL::to('support')}}">Support</a></li>
    <li class="hasSubMenu"><a href="{{URL::to('contact')}}">Contact</a></li>
    <li class="hasSubMenu"><a href="{{URL::to('shortcode')}}">Shortcode</a></li>
@stop

@section('content')
<div class="top_wrapper   no-transparent">
        <span class="slider-img"></span>
        <section id="slider-fixed" class="slider  padding_top_none" style="">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:500px;">
                            <!-- START REVOLUTION SLIDER 4.6.3 fullwidth mode -->
                            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;max-height:500px;height:500px;">
                                <ul>
                                    <!-- SLIDE  -->
                                    <li data-transition="fade,fadetoleftfadefromright,fadetorightfadefromleft" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/2014/11/shutterstock_146958269.jpg" alt="shutterstock_146958269" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                        <!-- LAYERS -->
                                    </li>
                                    <!-- SLIDE  -->
                                    <li data-transition="fade,fadetoleftfadefromright,fadetorightfadefromleft" data-slotamount="7" data-masterspeed="500" data-saveperformance="off">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/2014/11/31.jpg" alt="31" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                        <!-- LAYERS -->

                                    </li>
                                    <!-- SLIDE  -->
                                    <li data-transition="fade,fadetoleftfadefromright,fadetorightfadefromleft" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/2014/11/shutterstock_67128502.jpg" alt="shutterstock_67128502" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                        <!-- LAYERS -->

                                    </li>
                                    <!-- SLIDE  -->
                                    <li data-transition="fade,fadetoleftfadefromright,fadetorightfadefromleft" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/2014/11/34566.jpg" alt="34566" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                        <!-- LAYERS -->

                                    </li>
                                </ul>
                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                            </div>

                            <div class="revsliderstyles">
                                <style scoped></style>
                            </div>
                        </div>
                        <!-- END REVOLUTION SLIDER -->
                    </div>
                </div>

                <div class="bottom_shadow"></div>
            </div>
        </section>

        <!-- .header -->

        <section id="content" style="" class="composer_content">
            <div id="fws_5481c495a5cee" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el full-width-content section-style    " style="padding-top: 30px !important; padding-bottom: 60px !important; ">
                <div class="col span_12  dark">
                    <div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                        <div class="wpb_wrapper">
                            <div class="wpb_content_element dynamic_page_header style_3">
                                <h1 style="font-size:36px; font-family:Bebas Neue; color:#444444">WELCOME TO VETEYE, THE BEST VET XX.</h1>
                                <p class="description"></p>
                                <div class="line_under_full">
                                    <div class="line_full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fws_5481c495a64e9" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el section-style    " style="padding-top: 30px !important; padding-bottom: 90px !important; ">
                <div class="container  dark">
                    <div class="section_clear">
                        <div class="vc_col-sm-4 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="wpb_content_element services_media">
                                    <h1><a href="#">Great SEO Base</a></h1>
                                    <img src="images/2014/11/347x248.png" alt="" />
                                    <div class="serv_content">
                                        <p>Nulla consequat massa quis enim. Veronum versus designus Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_col-sm-4 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="wpb_content_element services_media">
                                    <h1><a href="#">ONE CLICK DATA</a></h1>
                                    <img src="images/2014/11/347x248.png" alt="" />
                                    <div class="serv_content">
                                        <p>Nulla consequat massa quis enim. Veronum versus designus Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_col-sm-4 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="wpb_content_element services_media">
                                    <h1><a href="#">GREAT RESPONSIVE LAYOUT</a></h1>
                                    <img src="images/2014/11/347x248.png" alt="" />
                                    <div class="serv_content">
                                        <p>Nulla consequat massa quis enim. Veronum versus designus Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <a href="#" class="scrollup">Scroll</a> 
        <!-- Social Profiles -->

        <!-- Footer -->
    </div>
@stop
