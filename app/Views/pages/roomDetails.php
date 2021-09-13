<?=$this->extend('layouts/coreLayout');?>
<?=$this->section('content');?>
<div class="inner-banner " style="background: url('<?=$room->images[0]?>') center center/cover;">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="<?=base_url()?>">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li> <a href="<?=base_url()?>/rooms">Rooms</a></li>
            </ul>
            <h3><?=$room->title?></h3>
        </div>
    </div>
</div>


<div class="room-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="room-details-side">

                    <div class="side-bar-plan">
                        <h3>Amenities</h3>
                        <ul>
                            <?php foreach ($features as $feature): ?>

                            <li><a href="#"><?=$feature?></a></li>
                            <?php endforeach;?>

                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="room-details-article">
                    <div class="room-details-slider owl-carousel owl-theme">
                        <?php foreach ($room->images as $image): ?>

                        <div class="room-details-item">
                            <img src="<?=$image?>" alt="Images" style="width: 100vw; height:100vh;object-fit:cover">
                        </div>
                        <?php endforeach;?>

                    </div>
                    <div class="room-details-title">
                        <h2><?=$room->title?></h2>
                        <!-- <ul>
                            <li>
                                Basic : $120/Night/Room
                            </li>
                            <li>
                                Premium : $140/Night/Room
                            </li>
                        </ul> -->
                    </div>
                    <!-- <div class="room-details-content">
                        <p>

                        </p>
                        <p>

                        </p>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</div>





<?=$this->endSection();?>