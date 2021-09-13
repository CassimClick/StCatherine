<div class="slider">
    <div class="slide current"
        style="background: url('<?=base_url()?>/assets/img/pics/hostel3.jpeg') no-repeat center top/cover">

    </div>
    <div class="slide "
        style="background: url('<?=base_url()?>/assets/img/slide/image1.jpg') no-repeat center top/cover">

    </div>
    <div class="slide "
        style="background: url('<?=base_url()?>/assets/img/slide/image3.jpg') no-repeat center top/cover">

    </div>
    <div class="slide "
        style="background: url('<?=base_url()?>/assets/img/pics/visitors3.jpeg') no-repeat center top/cover">

    </div>
    <div class="slide "
        style="background: url('<?=base_url()?>/assets/img/pics/visitors7.jpeg') no-repeat center top/cover">

    </div>

    <div class="slide "
        style="background: url('<?=base_url()?>/assets/img/pics/hostel2.jpeg') no-repeat center top/cover">

    </div>
    <div class="slide "
        style="background: url('<?=base_url()?>/assets/img/mix/camping5.jpg') no-repeat center top/cover">

    </div>
    <div class="slide "
        style="background: url('<?=base_url()?>/assets/img/mix/camping15.jpg') no-repeat center top/cover">

    </div>

    <div class="slide"
        style="background: url('<?=base_url()?>/assets/img/slide/image4.jpg') no-repeat center top/cover">
        <!-- <div class="content">
            <h1>Slide Three</h1>
            <p>

            </p>
        </div> -->
    </div>
    <div class="slide"
        style="background: url('<?=base_url()?>/assets/img/slide/image5.jpg') no-repeat center top/cover">
        <!-- <div class="content">
            <h1>Slide Three</h1>
            <p>

            </p>
        </div> -->
    </div>



</div>
<div class="buttons">
    <button id="prev"><i class="fas fa-arrow-left"></i></button>
    <button id="next"><i class="fas fa-arrow-right"></i></button>
</div>

<script>
const slides = document.querySelectorAll('.slide');
const next = document.querySelector('#next');
const prev = document.querySelector('#prev');
const auto = true; // Auto scroll
const intervalTime = 5000;
let slideInterval;

const nextSlide = () => {
    // Get current class
    const current = document.querySelector('.current');
    // Remove current class
    current.classList.remove('current');
    // Check for next slide
    if (current.nextElementSibling) {
        // Add current to next sibling
        current.nextElementSibling.classList.add('current');
    } else {
        // Add current to start
        slides[0].classList.add('current');
    }
    setTimeout(() => current.classList.remove('current'));
};

const prevSlide = () => {
    // Get current class
    const current = document.querySelector('.current');
    // Remove current class
    current.classList.remove('current');
    // Check for prev slide
    if (current.previousElementSibling) {
        // Add current to prev sibling
        current.previousElementSibling.classList.add('current');
    } else {
        // Add current to last
        slides[slides.length - 1].classList.add('current');
    }
    setTimeout(() => current.classList.remove('current'));
};

// Button events
next.addEventListener('click', e => {
    nextSlide();
    if (auto) {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, intervalTime);
    }
});

prev.addEventListener('click', e => {
    prevSlide();
    if (auto) {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, intervalTime);
    }
});

// Auto slide
if (auto) {
    // Run next slide at interval time
    slideInterval = setInterval(nextSlide, intervalTime);
}
</script>