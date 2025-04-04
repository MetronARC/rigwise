<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                        <h1 class="mb-4">
                            Welcome to <br />
                            <span class="accent-text">Rigwise Technologies Pte Ltd</span>
                        </h1>

                        <p class="mb-4 mb-md-5">
                            From shipping and offshore services with the highest levels of
                            customer satisfaction. Our highly accomplished team can
                            proactively manage your needs with the ability to build and
                            maintain relationships, a core skill in business today
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-carousel" data-aos="zoom-out" data-aos-delay="300">
                        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                            <!-- Add carousel indicators for better navigation -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/maxresdefault.jpg" class="d-block w-100 rounded-4" alt="Hero Image 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/about-2.webp" class="d-block w-100 rounded-4" alt="Hero Image 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/about-5.webp" class="d-block w-100 rounded-4" alt="Hero Image 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="row stats-row gy-4 mt-5"
                data-aos="fade-up"
                data-aos-delay="500">
                <div class="col-5-cols">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-trophy"></i>
                        </div>
                        <div class="stat-content">
                            <h4>Marine Warranty</h4>
                        </div>
                    </div>
                </div>
                <div class="col-5-cols">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <div class="stat-content">
                            <h4>Rig Mover</h4>
                        </div>
                    </div>
                </div>
                <div class="col-5-cols">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <div class="stat-content">
                            <h4>Rig Specialist</h4>
                        </div>
                    </div>
                </div>
                <div class="col-5-cols">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-award"></i>
                        </div>
                        <div class="stat-content">
                            <h4>International Consultancy</h4>
                        </div>
                    </div>
                </div>
                <div class="col-5-cols">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="stat-content">
                            <h4>Customer Relations</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 align-items-center justify-content-between">
                <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                    <span class="about-meta">MORE ABOUT US</span>
                    <h2 class="about-title">
                        Rigs, ships and the vessels that move them
                    </h2>
                    <p class="about-description">
                        We are a top-performing Marine Consultant credited with managing
                        all phases of rig operations, international marine operations,
                        and expertise to deliver cost savings and budgetary efficiency
                        in international, multi-cultural markets
                    </p>
                    <p class="about-description">
                        Our skilled Marine Team include Rig Movers and Pilots for both
                        anchored and jack-up MODU's, Reconnect Pilots for FPSO
                        Operations, Shuttle Pilots for FPSO Operations
                    </p>
                    <p class="about-description">
                        Our skilled Rig Team include Rig Manager, Bull Pusher and
                        Performance Pusher, Completions Manager and Sub Sea Experts
                    </p>
                    <div class="row feature-list-wrapper">
                    </div>

                    <div class="info-wrapper">
                        <div class="row gy-4">
                            <div class="col-lg-5">
                                <div class="profile d-flex align-items-center gap-3">
                                    <img
                                        src="assets/img/avatar-1.webp"
                                        alt="CEO Profile"
                                        class="profile-image" />
                                    <div>
                                        <h4 class="profile-name">Phil Shearer</h4>
                                        <p class="profile-position">CEO &amp; Founder</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="image-wrapper">
                        <div
                            class="images position-relative"
                            data-aos="zoom-out"
                            data-aos-delay="400">
                            <img
                                src="assets/img/about-5.webp"
                                alt="Business Meeting"
                                class="img-fluid main-image rounded-4" />
                            <img
                                src="assets/img/about-2.webp"
                                alt="Team Discussion"
                                class="img-fluid small-image rounded-4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Section -->
</main>

<?= $this->endSection() ?>