<div dir="ltr" class="rev_slider_wrapper fullscreenbanner-container">
    <div id="rev-slider-1" data-version="5.4.5" class="milenia-d-none rev-slider fullscreenabanner rev-has-scrollbottom-icon">
        <ul>
            <!--================ Slide 1 ================-->
            <?php
            foreach ($sliders as $slider) {
                ?>
                <li data-transition="fade" data-speed="300" data-delay="9000">
                    <img src="upload/slider/<?php echo $slider['image_name']; ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" class="rev-slidebg">
                    <!--================ Layer ================-->
                    <div data-frames="[{&quot;delay&quot;:200,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-x="center" data-y="center" data-hoffset="0" data-voffset="['-70', '-70', '-70', '-90']" data-width="['400']" data-height="['auto']" data-textAlign="['center']" data-color="['#fff']" data-fontsize="['14']" data-lineheight="['20']" class="tp-caption tp-resizeme tp-layer-section-subtitle">Welcome to Araliya Gardens Hotel</div>
                    <!--================ End of Layer ================-->
                    <!--================ Layer ================-->
                    <div data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-x="center" data-y="center" data-hoffset="0" data-voffset="['-10', '-10', '0', '0']" data-width="['1000', '1000', '760', '560']" data-height="['auto']" data-textAlign="['center']" data-color="['#fff']" data-fontsize="['65']" data-lineheight="['65']" class="tp-caption tp-resizeme tp-layer-section-title"><?php echo $slider['title']; ?></div>
                    <!--================ End of Layer ================-->
                    <!--================ Layer ================-->
                    <div data-frames="[{&quot;delay&quot;:600,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-x="center" data-y="center" data-hoffset="0" data-voffset="['100', '100', '120', '140']" data-width="['1000']" data-textAlign="['center']" class="tp-caption">
                        <a href="#" class="milenia-btn milenia-btn--scheme-primary milenia-btn--big milenia-btn--unbordered">Discover More</a></div>
                    <!--================ End of Layer ================-->
                </li>
                <?php
            }
            ?>
            <!--================ End of Slide 1 ================-->
        </ul>
    </div>
</div>