<section class="testimonial-section">
    <div class="container">
        <div class="section-header">
            <h2>What Our Patients Say</h2>
            <p>
                We take pride in providing the best healthcare experience for every patient.
                Here’s what some of our patients have to say about their journey with us.
            </p>
        </div>

        <div class="swiper testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide testimonial-card">
                    <div class="testimonial-content">
                        <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Client 1" class="client-img">
                        <p class="testimonial-text">
                            “Al Shaheed Hospital  gave me a new life. The doctors were kind, and the staff made
                            sure I was comfortable throughout my treatment. I truly felt cared for.”
                        </p>
                        <h4 class="client-name">Nadia Ahmed</h4>
                        <span class="client-company">Teacher, Karachi Grammar School</span>
                    </div>
                </div>

                <div class="swiper-slide testimonial-card">
                    <div class="testimonial-content">
                        <img src="https://randomuser.me/api/portraits/men/37.jpg" alt="Client 2" class="client-img">
                        <p class="testimonial-text">
                            “I was impressed with how efficiently the hospital handled my emergency. The doctors were
                            calm and experienced, and the facilities were spotless.”
                        </p>
                        <h4 class="client-name">Imran Qureshi</h4>
                        <span class="client-company">Civil Engineer, PakBuild Co.</span>
                    </div>
                </div>

                <div class="swiper-slide testimonial-card">
                    <div class="testimonial-content">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Client 3" class="client-img">
                        <p class="testimonial-text">
                            “From diagnosis to recovery, everything was handled with great professionalism. The nurses
                            were incredibly supportive, especially during my post-surgery care.”
                        </p>
                        <h4 class="client-name">Dr. Hina Malik</h4>
                        <span class="client-company">Assistant Professor, JPMC</span>
                    </div>
                </div>

                <div class="swiper-slide testimonial-card">
                    <div class="testimonial-content">
                        <img src="https://randomuser.me/api/portraits/men/56.jpg" alt="Client 4" class="client-img">
                        <p class="testimonial-text">
                            “The hospital’s gastroenterology department helped me recover from a chronic issue that had
                            troubled me for years. I’m thankful for their expert care and compassion.”
                        </p>
                        <h4 class="client-name">Shoaib Khan</h4>
                        <span class="client-company">Business Owner, Karachi</span>
                    </div>
                </div>

                <div class="swiper-slide testimonial-card">
                    <div class="testimonial-content">
                        <img src="https://randomuser.me/api/portraits/women/29.jpg" alt="Client 5" class="client-img">
                        <p class="testimonial-text">
                            “The maternity ward was amazing. The doctors guided me through every step, and the staff
                            treated me like family. It was a wonderful experience.”
                        </p>
                        <h4 class="client-name">Ayesha Noor</h4>
                        <span class="client-company">New Mother & NGO Worker</span>
                    </div>
                </div>
            </div>


            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<script>
const testimonialSwiper = new Swiper('.testimonial-slider', {
    loop: true,
    centeredSlides: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    slidesPerView: 1,
    spaceBetween: 30,
    breakpoints: {
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
    },
});

</script>


<style>
/* =======================================
   TESTIMONIAL SECTION STYLES
   ======================================= */

.testimonial-section {
    background-color: var(--light);
    padding: 80px 20px;
    font-family: var(--font-family);
}

.section-header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 50px;
}

.section-header h2 {
    font-size: 2.2rem;
    color: var(--primary-color);
    font-weight: 700;
    margin-bottom: 15px;
}

.section-header p {
    color: #555;
    font-size: 1rem;
    line-height: 1.7;
}

.testimonial-slider {
    position: relative;
    width: 100%;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}

.testimonial-card {
    display: flex;
    justify-content: center;
}

.testimonial-content {
    background: var(--white);
    padding: 40px 30px;
    border-radius: 15px;
    max-width: 600px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}


.client-img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 20px;
    border: 4px solid var(--primary-color);
}

.testimonial-text {
    font-style: italic;
    color: #333;
    font-size: 1rem;
    margin-bottom: 25px;
    line-height: 1.7;
}

.client-name {
    color: var(--primary-color);
    font-weight: 600;
    font-size: 1.1rem;
}

.client-company {
    display: block;
    color: #666;
    font-size: 0.95rem;
}

.swiper-button-next,
.swiper-button-prev {
    color: var(--primary-color);
    background: var(--white);
    border: 2px solid var(--primary-color);
    border-radius: 50%;
    width: 35px;
    height: 35px;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 50%;
    transform: translateY(-50%);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.swiper-button-prev {
    left: 10%;
}

.swiper-button-next {
    right: 10%;
}

.swiper-button-next:after,
.swiper-button-prev:after {
    font-size: 18px
}

.swiper-pagination-bullet {
    background: var(--primary-color);
}

@media (max-width: 768px) {
    .testimonial-content {
        padding: 30px 20px;
    }

    .section-header h2 {
        font-size: 1.8rem;
    }

    .swiper-button-prev {
        left: 2%;
    }

    .swiper-button-next {
        right: 2%;
    }
}

/* Highlight the active (center) testimonial card */
.testimonial-slider .swiper-slide-active .testimonial-content {
    background: var(--primary-color);
    color: var(--white);
    transform: scaleY(1.05);
    transition: all 0.4s ease-in-out;
}

.testimonial-slider .swiper-slide-active .client-img {
    border: 3px solid var(--white);
}

/* Ensure text colors invert nicely on active card */
.testimonial-slider .swiper-slide-active .client-name,
.testimonial-slider .swiper-slide-active .client-company,
.testimonial-slider .swiper-slide-active .testimonial-text {
    color: var(--white);
}

/* Add subtle dimming for non-active slides */
.testimonial-slider .swiper-slide .testimonial-content {
    opacity: 0.8;
    transform: scale(0.95);
    transition: all 0.4s ease-in-out;
}

.testimonial-slider .swiper-slide-active .testimonial-content {
    opacity: 1;
}


</style>