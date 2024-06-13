
<section id="testimonials" class="testimonials section">

    <div class="container section-title" data-aos="fade-up">
        <h2>Отзывы</h2>
        <p>Обратная связь наших гостей позволяет нам сделать Ваш отдых ещё более комфортным.</p>
        <a href="https://www.avito.ru/dzhubga_kp/komnaty/komnata_22m_33et._3933936587">Отзывы на сайте avito.ru</a>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                    "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 1,
                            "spaceBetween": 40
                        },
                        "1200": {
                            "slidesPerView": 3,
                            "spaceBetween": 1
                        }
                    }
                }
            </script>
            
            <div class="swiper-wrapper">
                <?php foreach(getTestimonials() as $info) { ?>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span><?= $info['text'] ?></span>
                            <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <h3><?= $info['name'] ?></h3>
                            <h4>avito.ru</h4>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>