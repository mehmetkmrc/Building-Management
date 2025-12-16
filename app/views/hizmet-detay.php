<section class="sub-banner-section w-100 float-left d-flex align-items-center">
        <div class="container">
            <div class="sub-banner-inner-section" data-aos="fade-up" data-aos-duration="700">
                <h1>Hizmetlerimiz</h1>
            </div>
        </div>
    </section>
    <!-- SUB BANNER SECTION END HERE-->
    <!-- SINGLE SERVICE SECTION START HERE -->
    <section class="single-service-main-sec w-100 float-left padding-top padding-bottom">
        <div class="container">
            <div class="single-service-inner-con">
                <div class="generic-title text-center" data-aos="fade-up" data-aos-duration="700">
                    <h2><?= strtoupper($hizmet['title']) ?></h2>
                    <p><?= date('d.m.Y', strtotime($hizmet['date'])) ?></p>
                </div>

                <div class="position-relative single-service-img-con" data-aos="fade-up" data-aos-duration="700">
                    <figure class="mb-0">
                        <img src="<?= $hizmet['blogimage1'] ?>" alt="<?= $hizmet['title'] ?>" loading="lazy">
                    </figure>

                    <?php if (!empty($hizmet['imageicon'])): ?>
                        <figure class="mb-0 single-service-search-icon">
                            <img src="<?= $hizmet['imageicon'] ?>" loading="lazy">
                        </figure>
                    <?php endif; ?>
                </div>

                <div class="single-service-consumer-market">
                    <h2 data-aos="fade-up" data-aos-duration="700">
                        <?= strtoupper($hizmet['title']) ?>
                    </h2>

                    <?php foreach (explode("\n\n", trim($hizmet['content'])) as $paragraph): ?>
                        <?php if (trim($paragraph)): ?>
                            <p data-aos="fade-up" data-aos-duration="700">
                                <?= nl2br(trim($paragraph)) ?>
                            </p>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <div class="single-service-sub-section">
                    <div class="single-service-sub-img-con" data-aos="fade-up" data-aos-duration="700">
                        <figure class="mb-0">
                            <img src="<?= $hizmet['blogimage2'] ?>" alt="<?= $hizmet['title'] ?>" loading="lazy">
                        </figure>
                    </div>

                    <div class="single-service-sub-text-con">
                        <?php foreach (explode("\n", trim($hizmet['content-2'])) as $item): ?>
                            <?php if (trim($item)): ?>
                                <p data-aos="fade-up" data-aos-duration="700">
                                    <?= trim($item) ?>
                                </p>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
    <!-- SINGLE SERVICE SECTION END HERE -->
    <!-- BEST EXPERIENCE SECTION START HERE -->
    <section class="best-experience-section w-100 float-left">
        <div class="container-fluid">
            <div class="register-inner-section" data-aos="fade-up" data-aos-duration="700">
                <h2>WE’RE DELIVERING THE BEST CUSTOMER EXPERIENCE</h2>
                <div class="generic-btn">
                    <a href="contact.html">LET’S GET STARTED</a>
                </div>
            </div>
        </div>
    </section>