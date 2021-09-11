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
                <li>About Us</li>
            </ul>
            <h3>About Us</h3>
        </div>
    </div>
</div>

<section class="about-block">
    <div class="container">
        <h2>Welcome To St. Catherine’s Monastery!</h2>
        <p class="text">
            Our Monastery is the suitable place to spend your holidays in serenity, peace and tranquillity, while being
            immersed in Tanzania’s nature. 2 Km far from Ngorongoro National Park and close to other National Parks,
            including Lake Manyara and Serengeti, we are the ideal starting point for your safari.
        </p>

        <h2>Our History</h2>
        <p class="text">The St. Catherine Monastery is managed by a group of Tanzanian Benedictine Nuns who are Members
            of Camaldolesian Order. The history of the monastery begins in July 2002 with three nuns who came from the
            Monastery Mama wa Kanisa, which belongs to the Iringa Diocese and is located in Tanzania’s Southern
            Highlands. The fortitude and sacrifice of these three nuns was determining and made possible the
            realizations of their vision of building, within a few years, this religious complex, an oasis of Christian
            Spirituality , where Benedictine precept ” ora et labora ” is experienced every day in sympathy and harmony
            in nature.</p>

        <p class="text">
            The St. Catherine Monastery is inserted in the local reality, and is engaged in contributing solutions to
            the local people, who may seek the nuns for aid. An example of this has been the provision of services
            previously unavailable in the village: a grinding mill, where people can bring their maize to be grinded; a
            local dining hall with a Television, where people gather to have chai (tea), socialize and watch the news;
            and a local shop where people can buy a diversity of items
        </p>
        <p class="text">
            The St. Catherine Monastery is inserted in the local reality, and is engaged in contributing
            solutions to the local people, who may seek the nuns for aid. An example of this has been
            the provision of services previously unavailable in the village: a grinding mill, where
            people can bring their maize to be grinded; a local dining hall with a Television, where
            people gather to have chai (tea), socialize and watch the news; and a local shop where
            people can buy a diversity of items.
        </p>
    </div>

</section>

<section class="cards">

    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <div class="image">
                        <img src="<?=base_url()?>/assets/img/mix/church1.jpg" alt="">
                    </div>
                    <div class="details">
                        <p>
                            We also conduct the seminars inside and outside the Monastery to make the youth in the
                            spirit
                            of the lord and make them aware of themselves all time.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <div class="image">
                        <img src="<?=base_url()?>/assets/img/mix/church2.jpg" alt="">
                    </div>
                    <div class="details">
                        <p>
                            Life and the prayer services. In the monastery the NUNS go deeply in prayer where they pray
                            for their monastery and other places around the monastery
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<?=$this->include('components/team');?>

<?=$this->endSection();?>