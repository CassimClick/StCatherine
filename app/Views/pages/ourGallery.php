<?=$this->extend('layouts/coreLayout');?>
<?=$this->section('content');?>
<div class="inner-banner" style="background: url('assets/img/mix/monastery10.jpg') center center/cover; ">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="<?=base_url()?>">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Our Gallery</li>
            </ul>
            <h3>Our Gallery</h3>
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
                                    <?=galleryBlock('assets/img/pics/visitors1.jpeg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/pics/visitors7.jpeg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/pics/visitors2.jpeg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/pics/visitors3.jpeg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/pics/visitors4.jpeg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/gallery-49.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/compound.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/pics/hostel1.jpeg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/pics/hostel2.jpeg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/pics/hostel3.jpeg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/monastery(9).jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/masai.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/gardern12.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/pics/gallery-1.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/pics/gallery-2.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/pics/gallery-3.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/pics/gallery-4.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/6.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/3.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/iraq1.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/iraq2.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/iraq3.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/camping12.jpg')?>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?=galleryBlock('assets/img/mix/1african.jpg')?>
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