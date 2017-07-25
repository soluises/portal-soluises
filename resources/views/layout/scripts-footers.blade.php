<a id="scroll-top" href="#top" title="Scroll top"><i class="fa fa-angle-up"></i></a>

<!-- End -->
<script src="{{url('/assets/js/plugins.min.js')}}"></script>
<script src="{{url('/assets/js/main.js')}}"></script>

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{url('/assets/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
(Load Extensions only on Local File Systems !
The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{url('/assets/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('/assets/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/extensions/revolution.extension.video.min.js')}}"></script>

<script type="text/javascript">
    (function () {
        "use strict";

        $(document).ready(function () {
            var revapi;
            if ($("#rev_slider").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider");
            } else {
                revapi = $("#rev_slider").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "assets/js/",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 10000,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "hades",
                            enable: true,
                            hide_onmobile: false,
                            hide_under: 992,
                            hide_onleave: false,
                            tmp: '<div class="tp-arr-allwrapper"><div class="tp-arr-imgholder"></div></div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 0,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 0,
                                v_offset: 0
                            }
                        },
                        bullets: {
                            enable: true,
                            hide_onmobile: false,
                            hide_under: 480,
                            style: "hades",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 25,
                            space: 8,
                            tmp: '<span class="tp-bullet-image"></span>'
                        }
                    },
                    viewPort: {
                        enable: true,
                        outof: "pause",
                        visible_area: "80%"
                    },
                    responsiveLevels: [1200, 992, 768, 480],
                    gridwidth: [1170, 970, 750, 480],
                    gridheight: [600, 540, 480, 360],
                    autoHeight: "off",
                    lazyType: "single",
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false
                });

            }
        });

    })();
</script>
