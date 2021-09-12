<?=$this->extend('layouts/coreLayout');?>
<?=$this->section('content');?>
<div class="inner-banner" style="background: url('assets/img/mix/monastery (10).jpg') center center/cover; ">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="<?=base_url()?>">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li><?=$title?></li>
            </ul>
            <h3><?=$title?></h3>
        </div>
    </div>
</div>

<div class="book-area-two pt-70 pb-70" style="background: #FFFFFF;">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6">
                <div style="padding: 3rem 1rem;">



                    <div class="contact-item">
                        <ul>
                            <li>
                                <i class='bx bx-home-alt'></i>
                                <div class="content">
                                    <span>KAMBI YA NYOKA
                                    </span>
                                    <span>KARATU ARUSHA, TANZANIA</span>
                                </div>
                            </li>
                            <li>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <div class="content">
                                    <span><a href="tel:+255(0) 762 923 306">+255(0) 762 923 306</a></span>
                                    <span><a href="tel:+255(0) 789 925 724">+255(0) 789 925 724</a></span>
                                    <span><a href="tel:+255(0)689 499 597">+255(0)689 499 597 (WhatsApp)</a></span>
                                </div>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <div class="content">
                                    <span><a href="mailto:info@stcatherinemonastery.com"><span
                                                class="__cf_email__">info@stcatherinemonastery.com</span></a></span>
                                    <span><a href="mailto:stcatherinemonastery2@gmail.com"><span
                                                class="__cf_email__">stcatherinemonastery2@gmail.com</span></a></span>

                                </div>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
            <div class="col-lg-6">
                <div class="book-img-2">
                    <img src="<?=base_url()?>/assets/img/slide/image5.jpg"
                        style="height: 400px; width:100%;margin-top:1rem;" alt="Images" />
                </div>
            </div>
        </div>
    </div>
</div>


<div class="map-area">
    <div class="container-fluid m-0 p-0">
        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="914" height="500" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=St.%20Catherine%20Monastery%20Guest%20House&t=&z=11&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    height: 100%;
                    width: 100%;
                }
                </style>
                <style>
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 100%;
                    width: 100%;
                }
                </style>
            </div>
        </div>
    </div>

    <?=$this->endSection();?>