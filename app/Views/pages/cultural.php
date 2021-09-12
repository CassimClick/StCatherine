<?=$this->extend('layouts/coreLayout');?>
<?=$this->section('content');?>
<div class="inner-banner" style="background: url('assets/img/mix/iraq3.jpg') center center/cover; ">
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

<section class="about-block" style="background: #F1F1F1;">
    <div class="container">
        <h2>IRAQW CULTURAL MUSEUM</h2>
        <p class="text">
            All museums tours & walking safari are created to Support vulnerable Community in Karatu area. You will
            spend your day in Iraqw memorial Village and Experiences the real Iraqw life during your visiting day.
            Museums village is created by Experience cultural life how this Tribe lived 2000years ago.

            <br>
            Our aim is to share the authentic Iraqw life Culture with you as our friend, and get historical of this
            Tribe ,culture, local food and dance , .Our Eco-Tourism is to provide the maximum respect to the Iraqw tribe
            and Maximum education and excitement to our valuable Clients.


        </p>


    </div>

</section>
<div class="book-area-two pt-70 pb-70" style="background: #FFFFFF;">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6">
                <div style="padding: 3rem 1rem;">



                    <h4>
                        Activities that we offer are:
                    </h4>
                    <ul style="list-style: none; padding:0;">
                        <li> <i class="fas fa-arrow-right"></i> IRAQW Dance</li>
                        <li> <i class="fas fa-arrow-right"></i> Kushitic ( Iraqw) where are we coming from</li>
                        <li> <i class="fas fa-arrow-right"></i> Four oldest Linguistic family history.</li>
                        <li> <i class="fas fa-arrow-right"></i> Traditional House ,food , and drinks.</li>
                        <li> <i class="fas fa-arrow-right"></i> Making coffee by using local technic and test our coffee
                        </li>
                        <li> <i class="fas fa-arrow-right"></i> How they defense from their enemies, Weapons and tools.
                        </li>
                        <li> <i class="fas fa-arrow-right"></i> More about Iraqw culture, and history.</li>
                    </ul>


                </div>
            </div>
            <div class="col-lg-6">
                <div class="book-img-2">
                    <img src="<?=base_url()?>/assets/img/mix/iraq5.jpg" style="height: 450px; width:100%"
                        alt="Images" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gallery-area pt-10 pb-70">
    <div class="container">
        <div class="tab gallery-tab">
            <ul class="tabs text-center">

            </ul>
            <div class="tab_content current active pt-45">
                <div class="tabs_item current">
                    <div class="gallery-tab-item">
                        <div class="gallery-view">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/iraq4.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/iraq2.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/iraq8.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/iraq7.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/iraq5.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/iraq6.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/iraq8.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/iraq10.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/iraq9.jpg')?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?=$this->endSection();?>