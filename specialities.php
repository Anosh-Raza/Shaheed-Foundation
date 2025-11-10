<section class="specialties-section">
    <div class="container">
        <h2 class="section-title">Our Specialties</h2>

        <div class="specialty-tabs">
            <button class="tab-btn active" data-tab="available">Ongoing Services</button>
            <button class="tab-btn" data-tab="upcoming">Upcoming Services</button>
        </div>

        <div class="specialties-wrapper tab-content active" id="available">
            <button class="arrow left-arrow" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>

            <div class="specialties-carousel">
              <div class="specialty-box">
                    <a href="services/general-opd.php">
                        <img src="assets/images/general_opd.png" alt="General OPD" />
                        <p>Free General OPD</p>
                    </a>
                </div>

                <div class="specialty-box">
                    <a href="#">
                        <img src="assets/images/Pharmacy.png" alt="Pharmacy" />
                        <p>Free Medicine Supply</p>
                    </a>
                </div>

                <div class="specialty-box">
                    <a href="services/pediatrician.php">
                        <img src="assets/images/Pediatrician.png" alt="Pediatrician" />
                        <p>Pediatrics (Children Treatment)</p>
                    </a>
                </div>
                
                <div class="specialty-box">
                    <a href="services/pediatrician.php">
                        <img src="assets/images/endocrinologist.png" alt="Pediatrician" />
                        <p>Diabetic (Sugar Treatment)</p>
                    </a>
                </div>

                <div class="specialty-box">
                    <a href="services/orthopedic.php">
                        <img src="assets/images/orthopedic.png" alt="Orthopedic" />
                        <p>Orthopedic (Bones and Joints)</p>
                    </a>
                </div>
                
                <div class="specialty-box">
                    <a href="services/ent.php">
                        <img src="assets/images/ent.png" alt="ENT" />
                        <p>Ear, Nose & Throat (ENT)</p>
                    </a>
                </div>
                <div class="specialty-box">
                    <a href="#">
                        <img src="assets/images/physiotherapy.png" alt="Physiotherapy" />
                        <p>Physiotherapy</p>
                    </a>
                </div>
                
            </div>

            <button class="arrow right-arrow" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>

        <div class="specialties-wrapper tab-content" id="upcoming">
            <button class="arrow left-arrow" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>

            <div class="specialties-carousel">
                <div class="specialty-box">
                    <img src="assets/images/350BeddedHospital.png" alt="350 Bedded Hospital" />
                    <p> 350 Beds Hospital</p>
                </div>
                <div class="specialty-box">
                    <img src="assets/images/DentalService.png" alt="Dental Service" />
                    <p>Dental Treatment</p>
                </div>
                <div class="specialty-box">
                    <img src="assets/images/ICU-Operation.png" alt="ICU & Operation" />
                    <p>ICU & Operation</p>
                </div>
                <div class="specialty-box">
                    <img src="assets/images/laboratory.png" alt="Laboratory" />
                    <p>Laboratory & Diagnostics</p>
                </div>
                <div class="specialty-box">
                    <img src="assets/images/nusring_school.png" alt="Laboratory" />
                    <p>Nusring School</p>
                </div>
                <div class="specialty-box">
                    <img src="assets/images/ophthalmology.png" alt="Laboratory" />
                    <p>Ophthalmology</p>
                </div>
            </div>

            <button class="arrow right-arrow" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
    </div>
</section>

<style>
/* --- Specialties: desktop & mobile behaviors --- */
.specialties-section {
    background-color: var(--white);
    text-align: center;
    padding: 60px 20px;
    font-family: var(--font-family);
    position: relative;
    border-top: 6px solid var(--primary-color);
    border-bottom: 6px solid var(--primary-color);
}

.section-title {
    font-size: 2rem;
    font-weight: 800;
    color: var(--black-color);
    margin-bottom: 30px;
}

/* Tabs */
.specialty-tabs {
    display: flex;
    justify-content: center;
    gap: 12px;
    margin-bottom: 28px;
}

.tab-btn {
    background: none;
    border: 2px solid var(--primary-color);
    color: var(--primary-color);
    padding: 8px 18px;
    border-radius: 6px;
    cursor: pointer;
    transition: all .25s;
    font-size: 15px;
    box-shadow: 6px 6px 1px 0 var(--secondary-color);
    border: 2px solid var(--white);
    font-family: var(--font-family);
    text-transform: uppercase;
    font-weight: bold;
}

.tab-btn.active,
.tab-btn:hover {
    background: var(--primary-color);
    color: var(--white);
}

/* wrapper */
.specialties-wrapper {
    position: relative;
    display: none;
    align-items: center;
}

.specialties-wrapper.active {
    display: flex;
}

/* carousel base */
.specialties-carousel {
    display: flex;
    gap: 22px;
    overflow-x: auto;
    padding: 18px 16px;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
    width: 100%;
    align-items: center;
}

/* hide scrollbar on webkit */
.specialties-carousel::-webkit-scrollbar {
    display: none;
}

/* item default (desktop) */
.specialty-box {
    flex: 0 0 23%;
    min-width: 210px;
    box-sizing: border-box;
    background: var(--white);
    border-radius: 14px;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
    padding: 24px 14px;
    text-align: center;
    transition: transform 500ms ease, box-shadow 500ms ease;
}

.specialty-box:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
    cursor: pointer;
    border: 1px solid var(--primary-color);
    transition: transform 500ms ease;
}

.specialty-box a,
.specialty-box a * {
    text-decoration: none;
    color: inherit;
}

.specialty-box img {
    width: 80px;
    height: 80px;
    object-fit: contain;
    margin-bottom: 12px;
    filter: brightness(0) saturate(100%) invert(25%) sepia(99%) saturate(7442%) hue-rotate(354deg) brightness(101%) contrast(109%);
}

.specialty-box p {
    margin: 0;
    font-weight: 600;
    color: var(--primary-color);
}

/* subtle focus effect for desktop (optional) */
.specialty-box.is-focus {
    transform: translateY(-6px) scale(1.02);
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.14);
}

/* arrows */
.arrow {
    background: var(--primary-color);
    color: var(--white);
    border: none;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 5;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
}

.left-arrow {
    left: 6px;
}

.right-arrow {
    right: 6px;
}

.arrow i {
    font-size: 16px;
}

/* MOBILE: centered single card with scroll-snap */
@media (max-width: 900px) {
    .specialties-carousel {
        scroll-snap-type: x mandatory;
        padding: 22px 40px;
    }

    .specialty-box {
        flex: 0 0 78%;
        min-width: 260px;
        padding: 28px;
        border-radius: 12px;
        scroll-snap-align: center;
    }

    .left-arrow {
        left: 8px;
    }

    .right-arrow {
        right: 8px;
    }
}

/* very small screens */
@media (max-width:480px) {
    .specialty-box {
        min-width: 100%;
        padding: 20px;
        border-top: 2px solid var(--primary-color);
        border-bottom: 2px solid var(--primary-color);
        height: 200px;
    }

    .tab-btn {
        padding: 8px 12px;
        font-size: 13px;
    }

    .arrow {
        width: 40px;
        height: 40px;
    }
}
</style>

<script>
// --- Tab Switching Logic (Kept for functionality) ---
const tabBtns = document.querySelectorAll('.tab-btn');
const tabContents = document.querySelectorAll('.tab-content');

tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const tabId = btn.getAttribute('data-tab');

        // 1. Remove 'active' from all buttons and content
        tabBtns.forEach(b => b.classList.remove('active'));
        tabContents.forEach(c => c.classList.remove('active'));

        // 2. Set 'active' on the clicked button and corresponding content
        btn.classList.add('active');
        document.getElementById(tabId).classList.add('active');

        // 3. Initialize manual carousel controls for the newly active tab
        initCarousel(tabId);
    });
});


// --- Carousel Logic (Manual Scroll, Infinite Loop, No Auto-Scroll) ---
let initializedTabs = {}; // Use to ensure listeners aren't added twice

function initCarousel(tabId) {
    const activeWrapper = document.getElementById(tabId);
    if (!activeWrapper) return;

    // Check if this tab's listeners have already been set to prevent duplicates
    if (initializedTabs[tabId]) return;

    const carousel = activeWrapper.querySelector('.specialties-carousel');
    const items = activeWrapper.querySelectorAll('.specialty-box');

    // Use the existing arrow elements
    let prev = activeWrapper.querySelector('.left-arrow');
    let next = activeWrapper.querySelector('.right-arrow');

    // If no items or arrows are found, or if we already initialized, stop
    if (items.length === 0 || !prev || !next) return;

    // Calculate the gap dynamically
    const gap = parseFloat(getComputedStyle(carousel).gap) || 22;

    function scrollByCard(dir) {
        const itemWidth = items[0].offsetWidth + gap;
        carousel.scrollBy({
            left: dir * itemWidth,
            behavior: 'smooth'
        });

        // Infinite loop logic for smooth transition
        setTimeout(() => {
            // checks if at end (within a small tolerance)
            if (dir > 0 && carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth - 5) {
                // Jumps back to start
                carousel.scrollTo({
                    left: 0,
                    behavior: 'auto'
                });
            }
            // checks if at start
            else if (dir < 0 && carousel.scrollLeft <= 0) {
                // Jumps to the end
                carousel.scrollTo({
                    left: carousel.scrollWidth,
                    behavior: 'auto'
                });
            }
        }, 600); // Wait for scroll animation to complete
    }

    function scrollMobile(dir) {
        const itemWidth = items[0].offsetWidth + gap;
        carousel.scrollBy({
            left: dir * itemWidth,
            behavior: 'smooth'
        });

        // Mobile loop logic: jump to start when end is reached
        if (dir > 0) {
            setTimeout(() => {
                if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth - 5) {
                    carousel.scrollTo({
                        left: 0,
                        behavior: 'auto'
                    });
                }
            }, 600);
        } else {
            // Mobile reverse loop logic: jump to end when start is reached
            setTimeout(() => {
                if (carousel.scrollLeft <= 0) {
                    carousel.scrollTo({
                        left: carousel.scrollWidth,
                        behavior: 'auto'
                    });
                }
            }, 600);
        }
    }

    // --- Arrow Controls ---
    next.addEventListener('click', () => {
        // Use the general scroll function for desktop for the loop
        if (window.innerWidth > 900) scrollByCard(1);
        // Use the mobile scroll logic
        else scrollMobile(1);
    });

    prev.addEventListener('click', () => {
        if (window.innerWidth > 900) scrollByCard(-1);
        else scrollMobile(-1);
    });

    // Mark as initialized
    initializedTabs[tabId] = true;
}

// Initialize the carousel for the default active tab on page load
document.addEventListener('DOMContentLoaded', () => {
    initCarousel('available');
});
</script>