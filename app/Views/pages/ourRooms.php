<?=$this->extend('layouts/coreLayout');?>
<?=$this->section('content');?>
<div class="inner-banner"
    style="background: url('<?=base_url()?>/assets/img/rooms/room-img4.jpg') center center/cover;">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="<?=base_url()?>">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Our Rooms</li>
            </ul>
            <h3>Our Rooms</h3>
        </div>
    </div>
</div>



<?=$this->include('components/rooms');?>

<?=$this->endSection();?>