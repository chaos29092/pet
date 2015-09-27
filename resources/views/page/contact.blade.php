@extends('master')

@section('title','Contact Veteye')
@section('description','des')
@section('keywords','keywordsss')

@section('menu')
    <li class="hasSubMenu"><a href="/">Home</a></li>
    <li class="hasSubMenu"><a href="{{URL::to('product')}}">Product</a></li>
    <li class="hasSubMenu"><a href="{{URL::to('support')}}">Support</a></li>
    <li class="hasSubMenu current-menu-ancestor current_page_ancestor"><a href="{{URL::to('contact')}}">Contact</a></li>
    <li class="hasSubMenu"><a href="{{URL::to('shortcode')}}">Shortcode</a></li>
@stop

@section('content')
    <div class="top_wrapper   no-transparent">


        <!-- .header -->


        <section id="content" style="" class="composer_content">








            <div id="fws_5486f9743fcb6" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el full-width-content section-style    " style="padding-top: 0px !important; padding-bottom: 0px !important; ">
                <div class="col span_12  dark">
                    <div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                        <div class="wpb_wrapper">
                            <div class="wpb_content_element">
                                <div class="row-fluid row-google-map " style="position:relative; height:450px;">
                                    <div class="overlay" onClick=" style.pointerEvents= &apos; none &apos; "></div>
                                    <iframe class="googlemap " style="height:450px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3154.055389998706!2d-122.16522420000003!3d37.7652993999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f8f50366a04d5%3A0x797bb69851540a55!2sNey+Ave%2C+Oakland%2C+CA+94605!5e0!3m2!1ssq!2s!4v1414082013945"></iframe>
                                    <div class="desc"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fws_5486f974404b9" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el section-style    " style="padding-top: 60px !important; padding-bottom: 0px !important; ">
                <div class="container  dark">
                    <div class="section_clear">
                        <div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="wpb_content_element dynamic_page_header style_1">
                                    <h1 style="font-size:36px; font-family:Bebas Neue; color:#009dd1">Please Get in Touch With Us</h1>
                                    <div class="line_under">
                                        <div class="line_left"></div>
                                        <div class="line_center"></div>
                                        <div class="line_right"></div>
                                    </div>
                                    <p class="description">Please feel free to contact us any time we will get back to you asp</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fws_5486f97440b3d" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el standard_section    " style="padding-top: 0px !important; padding-bottom: 0px !important; ">
                <div class="container  dark">
                    <div class="section_clear">
                        <div class="vc_col-sm-8 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="contact_form wpb_content_element">
                                    <div class="row-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <form name="contactForm" class="standard-form row-fluid" action="#" method="post">
                                                    <input class="span6" name="themeple_name" placeholder="Name" type="text" id="themeple_name" value="" />
                                                    <input class="span6" name="themeple_e-mail" placeholder="E-Mail" type="text" id="themeple_e-mail" value="" />
                                                    <input class="span6" name="themeple_subject" placeholder="Subject" type="text" id="themeple_subject" value="" />
                                                    <select class="span12" placeholder="Priority" name="themeple_priority" id="themeple_priority">
                                                        <option value='Low'>Low</option>
                                                        <option value='Medium'>Medium</option>
                                                        <option value='High'>High</option>
                                                        <option value='Urgent as Hell'>Urgent as Hell</option>
                                                        <option value='ASAP DUDE!!!'>ASAP DUDE!!!</option>
                                                    </select>
                                                    <textarea class="span12" placeholder="Message" name="themeple_message" cols="40" rows="7" id="themeple_message"></textarea>
                                                    <p class="perspective">
                                                        <input type="submit" value="Submit Form" class="btn-system normal default" />
                                                    </p>
                                                </form>
                                                <div id="ajaxresponse"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_col-sm-4 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="wpb_content_element contact_info">
                                    <h2>Contact Info</h2>
                                    <div class="content">
                                        <p>PO Box 16134?Victoria Street West
                                            <br />Victoria 513 New Yourk, Us
                                            <br />Email : no-replay@envato.com
                                            <br />Telephone:+35 3 2635?2863</p>
                                        <div class="social">
                                            <ul>
                                                <li><a href="#"><i class="icon-google_plus"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icon-linkedin"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icon-pinterest"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icon-twitter"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icon-facebook"></i></a>
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


        </section>

        <a href="#" class="scrollup">Scroll</a>
        <!-- Social Profiles -->


        <!-- Footer -->
    </div>
@stop
