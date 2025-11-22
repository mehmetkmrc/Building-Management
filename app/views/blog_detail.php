<!-- SUB BANNER SECTION START -->
    <section class="sub-banner-section blog-banner-section w-100 float-left d-flex align-items-center">
        <div class="container">
            <div class="sub-banner-inner-section" data-aos="fade-up" data-aos-duration="700">
                <h1>Blog</h1>
            </div>
        </div>
    </section>
     
    <!-- SUB BANNER SECTION END HERE-->
    <!-- Single Blog -->
    <section class="singleblog-section blogpage-section">
        <div class="container">
            
            <a href="/Blog" style="color: inherit; text-decoration: none;">
                ← Blog listesine dön
            </a>
           
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="main-box">
                        <figure class="image1" data-aos="fade-up" data-aos-duration="700">
                            <img src="<?= $blog['blogimage1'] ?>" alt="" class="img-fluid" loading="lazy">
                        </figure>
                        <div class="content1" data-aos="fade-up" data-aos-duration="700">
                            <h4><?= $blog['title'] ?></h4>
                            <i class="fas fa-user"></i>
                            <span class="text-size-14 text-mr"> Kalkedon Yönetim </span>
                            <i class="fas fa-calendar-alt"></i>
                            <span class="mb-0 text-size-14"><?= $blog['date'] ?></span>
                            <br>
                            <p class="text-size-14"><br><?= nl2br($blog['content']) ?></p>
                        </div>
                        <div class="content2" data-aos="fade-up" data-aos-duration="700">
                            <figure class="singleblog-quoteimage">
                                <img src="../../public/assets/images/singleblog-quoteimage.png" alt="" class="img-fluid"
                                    loading="lazy">
                            </figure>
                            <p class="mb-0 text-white text-size-18">“Kalkedon Yönetim ve Danışmanlık – Tarihin güvendiği isim, sitenizin geleceği.”</p>
                        </div>
                        <p class="text text-size-14">
                        </p>
                        <div class="content3" data-aos="fade-up" data-aos-duration="700">
                            <figure class="image1" data-aos="fade-up">
                                <img src="<?= $blog['blogimage1'] ?>" alt="" class="img-fluid" loading="lazy">
                            </figure>
                            <p class="text text-size-14">
                            </p>
                        </div>
                        <div class="content4" data-aos="fade-up" data-aos-duration="700">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="tag">
                                        <h5>Etiketler</h5>
                                        <ul class="mb-0 list-unstyled ">
                                            <li><a class="button text-decoration-none" href="about.html">Site</a>
                                            </li>
                                            <li><a class="button button2 text-decoration-none"
                                                    href="about.html">Yönetim</a></li>
                                            <li><a class="button button3 text-decoration-none"
                                                    href="about.html">Apartman</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="icon">
                                        <h5>Sosyal Medya</h5>
                                        <div class="social-icons position-absolute">
                                            <ul class="mb-0 list-unstyled ">
                                                <li><a href="https://www.linkedin.com/login"
                                                        class="text-decoration-none"><i
                                                            class="fa-brands fa-linkedin-in social-networks"></i></a>
                                                </li>
                                                <li><a href="https://www.instagram.com/accounts/login/?next=https%3A%2F%2Fwww.instagram.com%2Faccounts%2Fonetap%2F%3Fnext%3D%252F%26__coig_login%3D1"
                                                        class="text-decoration-none"><i
                                                            class="fa-brands fa-instagram social-networks"></i></a></li>
                                                <li><a href="https://www.facebook.com/login/"
                                                        class="text-decoration-none"><i
                                                            class="fa-brands fa-facebook-f social-networks"></i></a>
                                                </li>
                                                <li><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"
                                                        class="text-decoration-none"><i
                                                            class="fa-brands fa-twitter social-networks"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 column">
                    <div class="box1" data-aos="fade-up" data-aos-duration="700">
                        <h5>Haber Ara</h5>
                        <form method="POST">
                            <div class="form-row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="search" id="search" class="form-control upper_layer"
                                        placeholder="Burada arayın...">
                                    <div class="input-group-append form-button">
                                        <button class="btn search" name="btnsearch" id="searchbtn"><i
                                                class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="box1 box2" data-aos="fade-up" data-aos-duration="700">
                        <h5>Kategoriler</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="text-size-16"><a href="three-colum-sidbar.html">Danışmanlık</a></li>
                            <li class="text-size-16"><a href="three-colum-sidbar.html">Site Yönetimi</a></li>
                            <li class="text-size-16"><a href="three-colum-sidbar.html">Finans & Hukuk</a></li>
                            <li class="mb-0 text-size-16"><a href="three-colum-sidbar.html">Apartman Yönetimi</a></li>
                        </ul>
                    </div>
                    <div class="box1 box3" data-aos="fade-up" data-aos-duration="700">
                        <h5>Bizi Takip Edin</h5>
                        <div class="social-icons">
                            <ul class="mb-0 list-unstyled ">
                                <li><a href="https://www.linkedin.com/login" class="text-decoration-none"><i
                                            class="fa-brands fa-linkedin-in social-networks"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/accounts/login/?next=https%3A%2F%2Fwww.instagram.com%2Faccounts%2Fonetap%2F%3Fnext%3D%252F%26__coig_login%3D1"
                                        class="text-decoration-none"><i
                                            class="fa-brands fa-instagram social-networks"></i></a></li>
                                <li><a href="https://www.facebook.com/login/" class="text-decoration-none"><i
                                            class="fa-brands fa-facebook-f social-networks"></i></a>
                                </li>
                                <li><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"
                                        class="text-decoration-none"><i
                                            class="fa-brands fa-twitter social-networks"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="box1 box4" data-aos="fade-up" data-aos-duration="700">
                        <h5>Etiketler</h5>
                        <ul class="tag mb-0 list-unstyled">
                            <li><a class="button text-decoration-none" href="about.html">Assistant</a></li>
                            <li><a class="button button2 text-decoration-none" href="about.html">Advice</a></li>
                            <li><a class="button button3 text-decoration-none" href="about.html">Virtual</a></li>
                            <li><a class="button button4 text-decoration-none" href="about.html">Designer</a></li>
                            <li><a class="button button5 text-decoration-none" href="about.html">Blog</a></li>
                            <li><a class="button button6 text-decoration-none" href="about.html">Support</a></li>
                            <li><a class="button button7 text-decoration-none" href="about.html">Finance</a></li>
                            <li><a class="button button8 text-decoration-none" href="about.html">Projects</a></li>
                        </ul>
                    </div>
                    <div class="box1 box5" data-aos="fade-up" data-aos-duration="700">
                        <h5>Diğer Bloglarımıza Göz atın</h5>
                        <?php foreach ($blogs as $blog): ?>
                            <div class="feed">
                                <figure class="feed-image mb-0" data-aos="fade-up">
                                    <img src="<?= $blog['blogimage1'] ?>" 
                                        alt="<?= $blog['title'] ?>" 
                                        class="img-fluid" 
                                        loading="lazy">
                                </figure>

                                <a href="/Blog/show/<?= $blog['slug'] ?>" class="mb-0">
                                    <?= $blog['title'] ?>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>