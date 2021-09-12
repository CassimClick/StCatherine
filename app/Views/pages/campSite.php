<?=$this->extend('layouts/coreLayout');?>
<?=$this->section('content');?>
<div class="inner-banner" style="background: url('assets/img/mix/camping3.png') center center/cover; ">
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
        <h2>CAMPING SITE</h2>
        <p class="text">
            We offer a place to put up your own tent, or ready-set tents for rental. We also offers accommodations on
            our
            African Tents which are build with an Eco Construction method called Super Adobe.

            <br>
            Approaching from the southeast the road crosses open steppe, with the line of the great rift valley
            escarpment looming increasingly up ahead, the mountains of Ngorongoro beyond. As the road reaches the rift
            it enters the suddenly verdant and well watered areas around the small town of Karatu.

            <br>
            <br>
            You have got all you need for a comfortable stay after safari. There are different options of accommodation
            : tents with beds or huts. Hot shower. There was even free wifi which was a great surprise
        </p>


    </div>

</section>
<div class="book-area-two pt-70 pb-70" style="background: #FFFFFF;">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6">
                <div style="padding: 3rem 1rem;">



                    <p>
                        We have a variety of budget safari options for our guests. For the guest that doesn’t want
                        to go on safari
                        we offer day tours around our locality. Our guides at the monastery will give you a walking
                        tour during your
                        day at the camp. Experience a lot by walking around with our guides.

                        You have got all you need for a comfortable stay after safari. There are different options
                        of accommodation
                        tents with beds or huts. Hot shower. There was even free wifi which was a great surprise.
                    </p>
                    <p>
                        Similarly many of the elephant that inhabit the groundwater forest are very habituated to
                        vehicles. We remember one occasion when we had to sit very still and hold our breathe whilst a
                        towering bull lowered his trunk into the roof hatch of our Landrover and sniffed around in our
                        hair for something to eat, before rubbing his rear end up against our bullbars and sauntering
                    </p>


                </div>
            </div>
            <div class="col-lg-6">
                <div class="book-img-2">
                    <img src="<?=base_url()?>/assets/img/mix/camping8.jpg" alt="Images" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="book-area-two pt-70 pb-70" style="background: #F1F1F1
;">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6">
                <div style="padding: 3rem 1rem;">



                    <p>
                        You can stay at the night around the bone-fire for more stories and gain many ideas about the
                        safaris and even get to know more about the Iraqw Culture.
                    </p>



                </div>
            </div>
            <div class="col-lg-6">
                <div class="book-img-2">
                    <img src="<?=base_url()?>/assets/img/mix/camping11.jpg" alt="Images" />
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
                                    <?=galleryBlock('assets/img/mix/camping4.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/camping2.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/camping12.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/camping4.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/camping5.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/camping6.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/camping8.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/camping15.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/camping14.jpg')?>
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