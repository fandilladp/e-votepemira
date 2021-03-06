<?= $this->extend('layout/template1'); ?>

<?= $this->section('isicontent'); ?>
<!-- ======= Top Bar ======= -->
<?= $this->include('layout/navbar'); ?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="<?= base_url('home/index'); ?>">Home</a></li>
                <li>Portfolio Calon Presma</li>
            </ol>
            <h2>Portfolio Calon Presma</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">

            <div class="portfolio-details-container">

                <div class="owl-carousel portfolio-details-carousel">
                    <img src="<?= base_url('Rapid'); ?>/assets/img/portfolio/portfolio-details-1.jpg" class="img-fluid" alt="">
                    <img src="<?= base_url('Rapid'); ?>/assets/img/portfolio/portfolio-details-2.jpg" class="img-fluid" alt="">
                    <img src="<?= base_url('Rapid'); ?>/assets/img/portfolio/portfolio-details-3.jpg" class="img-fluid" alt="">
                </div>

                <div class="portfolio-info">
                    <h3>Profile information</h3>
                    <ul>
                        <li><strong>Nama</strong>:Fandilla dp </li>
                        <li><strong>Nim</strong>: 118130122</li>
                        <li><strong>Prodi</strong>: Teknik Elektro</li>
                    </ul>
                </div>

            </div>

            <div class="portfolio-description">
                <h2>Biografi</h2>
                <p>
                    Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                </p>
            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<section id="faq" class="faq">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h3>Visi</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            <h3>Misi</h3>
        </header>

        <ul id="faq-list" data-aos="fade-up" data-aos-delay="100">
            <li>
                <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="ion-android-remove"></i></a>
                <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="ion-android-remove"></i></a>
                <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="ion-android-remove"></i></a>
                <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="ion-android-remove"></i></a>
                <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="ion-android-remove"></i></a>
                <div id="faq5" class="collapse" data-parent="#faq-list">
                    <p>
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="ion-android-remove"></i></a>
                <div id="faq6" class="collapse" data-parent="#faq-list">
                    <p>
                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                    </p>
                </div>
            </li>

        </ul>

    </div>
</section><!-- End F.A.Q Section -->

<?= $this->endSection(); ?>