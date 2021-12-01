  <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/css/forms/theme-checkbox-radio.css">
    <link href="<?=base_url()?>assets/plugins/lightbox/photoswipe.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/plugins/lightbox/default-skin/default-skin.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/plugins/lightbox/custom-photswipe.css" rel="stylesheet" type="text/css" />
 <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row" id="cancel-row">
                    <div class="col-lg-12 layout-spacing layout-top-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Amafoto Y'umuganda</h4> 
                                    </div>          
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div id="demo-test-gallery" class="demo-gallery" data-pswp-uid="1">

                                    <a class="img-1" href="<?=base_url()?>assets/assets/img/new.jpg" data-size="1600x1068" data-med="<?=base_url()?>assets/assets/img/1280x857.jpg" data-med-size="1024x683" data-author="Samuel Rohl">
                                        <img src="<?=base_url()?>assets/assets/img/new2.jpg" alt="image-gallery">
                                        <figure>This is dummy caption. It has been placed here solely to demonstrate the look and feel of finished, typeset text.</figure>
                                    </a>

                                    <a class="img-2" href="<?=base_url()?>assets/assets/img/new1.jpg" data-size="1600x1068" data-med="<?=base_url()?>assets/assets/img/1280x857.jpg" data-med-size="1024x683" data-author="Samuel Rohl">
                                        <img src="<?=base_url()?>assets/assets/img/new1.jpg" alt="image-gallery">
                                        <figure>This is dummy caption. It has been placed here solely to demonstrate the look and feel of finished, typeset text.</figure>
                                    </a>

                                    <a class="img-3" href="<?=base_url()?>assets/assets/img/new2.jpg" data-size="1600x1067" data-med="<?=base_url()?>assets/assets/img/1280x857.jpg" data-med-size="1024x683" data-author="Michael Hull">
                                        <img src="<?=base_url()?>assets/assets/img/new2.jpg" alt="image-gallery">
                                        <figure>Dummy caption. It's Greek to you. Unless, of course, you're Greek, in which case, it really makes no sense.</figure>
                                    </a>

                                    <a class="img-4" href="<?=base_url()?>assets/assets/img/new.jpg" data-size="1600x1600" data-med="<?=base_url()?>assets/assets/img/1280x857.jpg" data-med-size="1024x1024" data-author="Folkert Gorter">
                                        <img src="<?=base_url()?>assets/assets/img/new2.jpg" alt="image-gallery">
                                        <figure>This is dummy caption.</figure>
                                    </a>

                                    <a class="img-5" href="<?=base_url()?>assets/assets/img/new1.jpg" data-size="1600x1067" data-med="<?=base_url()?>assets/assets/img/1280x857.jpg" data-med-size="1024x683" data-author="Thomas Lefebvre">
                                        <img src="<?=base_url()?>assets/assets/img/new2.jpg" alt="image-gallery">
                                        <figure>It's a dummy caption. He who searches for meaning here will be sorely disappointed.</figure>
                                    </a>

                                    <a class="img-6" href="<?=base_url()?>assets/assets/img/new1.jpg" data-size="1600x1067" data-med="<?=base_url()?>assets/assets/img/1280x857.jpg" data-med-size="1024x683" data-author="Thomas Lefebvre">
                                        <img src="<?=base_url()?>assets/assets/img/new1.jpg" alt="image-gallery">
                                        <figure>It's a dummy caption. He who searches for meaning here will be sorely disappointed.</figure>
                                    </a>
                                    
                                </div>
                              
                                

                                <!-- Root element of PhotoSwipe. Must have class pswp. -->
                                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                                    <!-- Background of PhotoSwipe. It's a separate element, as animating opacity is faster than rgba(). -->
                                    <div class="pswp__bg"></div>

                                    <!-- Slides wrapper with overflow:hidden. -->
                                    <div class="pswp__scroll-wrap">
                                        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                                        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                                        <div class="pswp__container">
                                            <div class="pswp__item"></div>
                                            <div class="pswp__item"></div>
                                            <div class="pswp__item"></div>
                                        </div>

                                        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                                        <div class="pswp__ui pswp__ui--hidden">

                                            <div class="pswp__top-bar">

                                                <!--  Controls are self-explanatory. Order can be changed. -->
                                                <div class="pswp__counter"></div>
                                                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                                <button class="pswp__button pswp__button--share" title="Share"></button>
                                                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                                                <!-- element will get class pswp__preloader--active when preloader is running -->
                                                <div class="pswp__preloader">
                                                    <div class="pswp__preloader__icn">
                                                      <div class="pswp__preloader__cut">
                                                        <div class="pswp__preloader__donut"></div>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                                <div class="pswp__share-tooltip"></div> 
                                            </div>
                                            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                            </button>
                                            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                            </button>
                                            <div class="pswp__caption">
                                                <div class="pswp__caption__center"></div>
                                            </div>

                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
        </div>
  
  
    <script src="<?=base_url()?>assets/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?=base_url()?>assets/plugins/lightbox/photoswipe.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/lightbox/photoswipe-ui-default.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/lightbox/custom-photswipe.js"></script>
