<?php
$page_css = [
    '/styles/critical.css',
    [
        'href' => '/styles/local.css',
        'media' => 'print',
        'onload' => "this.media='all'; this.onload=null;"
    ],
    [
        'href' => 'https://unpkg.com/aos@2.3.1/dist/aos.css',
        'media' => 'print',
        'onload' => "this.media='all'; this.onload=null;"
    ],
];
include 'includes/header.php';
?>
<main id="main">

    <!-- ============================================ -->
    <!--                    LANDING                   -->
    <!-- ============================================ -->

    <section id="landing">
        <div class="container">
            <h1 data-aos="fade-up">
                Burgess Group <br>
                <span style="font-size: 0.8em;">The Team That Delivers</span>
            </h1>
            <h2 data-aos="fade-up" data-aos-delay="100">The Burgess Group: Over 50 Years of Excellence in Industrial
                Contracting and Real Estate Development.</h2>
            <h2 data-aos="fade-up" data-aos-delay="120">
                With a legacy spanning more than half a century, the Burgess Group has established itself as a
                leader in creating innovative industrial solutions and visionary real estate developments. Our
                expertise and commitment to excellence ensure that we deliver results that stand the test of time.
            </h2>
            <a data-aos="fade-up" data-aos-delay="150" href="/about.php" class="button-solid">About Us</a>
            <picture data-aos="fade-left" data-aos-delay="50">
                <img src="/images/crew.JPG" aria-hidden="true" alt="Burgess Crew" decoding="async">
            </picture>
        </div>
    </section>

    <!-- ============================================ -->
    <!--                 What We Do                   -->
    <!-- ============================================ -->

    <section id="what-we-do">
        <div class="container">
            <div class="top-section">
                <h2>What we do</h2>
                <div class="content-group">
                    <p>
                        Based in Wilmington, NC, Burgess Corporation has been a trusted name in construction and
                        development since 1974. With a strong track record of delivering high-quality projects on
                        time, we are committed to environmental stewardship, safety, and integrity. Our mission is
                        to uphold excellence in every endeavor, making us a respected and innovative leader in the
                        industry.
                    </p>
                    <a aria-label="read more about our projects" class="projects" href="/projects.php">Read more
                        about
                        our projects</a>
                </div>
            </div>
            <div class="bottom-section">
                <div class="card" data-aos="fade-up">
                    <img aria-hidden="true" loading="lazy" decoding="async" src="/images/icon1.png"
                        alt="svg of mannequin" width="69" height="69">
                    <h3>Design and Development</h3>
                    <p>
                        We craft visionary designs and develop solutions that set the foundation for impactful
                        construction and real estate projects, tailored to meet modern needs.
                    </p>
                </div>
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <img aria-hidden="true" loading="lazy" decoding="async" src="/images/icon2.png"
                        alt="svg of mannequin" width="69" height="69">
                    <h3>Construction</h3>
                    <p>
                        Our construction expertise ensures projects are built to the highest standards, delivering
                        quality and efficiency across industrial and real estate sectors.
                    </p>
                </div>
                <div class="card" data-aos="fade-up" data-aos-delay="50">
                    <img aria-hidden="true" loading="lazy" decoding="async" src="/images/icon3.png"
                        alt="svg of mannequin" width="69" height="69">
                    <h3>Safety</h3>
                    <p>
                        Safety is our cornerstone. We prioritize the well-being of our team and partners,
                        implementing rigorous standards to maintain secure, reliable construction environments.
                    </p>
                </div>
                <div class="card" data-aos="fade-up" data-aos-delay="150">
                    <img aria-hidden="true" loading="lazy" decoding="async" src="/images/icon4.png"
                        alt="svg of mannequin" width="69" height="69">
                    <h3>Impact</h3>
                    <p>
                        As stewards of the environment, we integrate sustainable practices into every project,
                        ensuring a lasting positive impact on communities and ecosystems for generations to come.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!--                   Reviews                    -->
    <!-- ============================================ -->

    <section id="reviews">
        <div class="container">
            <div class="top-section">
                <h2>Let our customers speak for us</h2>
                <div class="content-group">
                    <p>
                        At Burgess Group, we pride ourselves on delivering exceptional results and building lasting relationships with our clients. Let their words reflect the quality and care we bring to every project.
                    </p>
                </div>
            </div>
            <div class="bottom-section">
                <div class="card" data-aos="fade-up">
                    <img class="quote" loading="lazy" decoding="async" src="/images/quote.png" alt="quote" width="27"
                        height="20">
                    <p>
                        I’ve had the pleasure of working with Vince for years across various commercial real estate product types. His deep industry knowledge, professionalism, and exceptional ability to meet short deadlines make him an invaluable partner. I wholeheartedly recommend Vince for anyone seeking expertise, reliability, and outstanding results in commercial real estate.
                    </p>
                    <div class="info">
                        <img loading="lazy" decoding="async" src="/images/profile.svg" alt="quote" width="66"
                            height="66">
                        <span class="name">Steve Hall</span>
                        <span class="title">BlueCoast Commercial, VP</span>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-delay="50">
                    <img class="quote" loading="lazy" decoding="async" src="/images/quote.png" alt="quote" width="27"
                        height="20">
                    <p>
                        XXX
                    </p>
                    <div class="info">
                        <img loading="lazy" decoding="async" src="/images/profile.svg" alt="quote" width="66"
                            height="66">
                        <span class="name">XXX</span>
                        <span class="title">XXX</span>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <img class="quote" loading="lazy" decoding="async" src="/images/quote.png" alt="quote" width="27"
                        height="20">
                    <p>
                        XXX
                    </p>
                    <div class="info">
                        <img loading="lazy" decoding="async" src="/images/profile.svg" alt="quote" width="66"
                            height="66">
                        <span class="name">XXX</span>
                        <span class="title">XXX</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!--                    CTA                       -->
    <!-- ============================================ -->

    <section id="cta">
        <picture>
            <source media="(max-width: 600px)" srcset="/images/mission.jpeg">
            <source media="(min-width: 601px)" srcset="/images/mission.jpeg">
            <img aria-hidden="true" loading="lazy" decoding="async" src="/images/mission.jpeg" alt="plotting"
                width="1920" height="596">
        </picture>
        <div class="container">
            <h2>Mission Statement</h2>
            <p>
                It is our mission to abide by a standard of excellence that represents our commitment to quality and timely delivery of projects, while maintaining our duty to operate under the covenant of good faith and fair dealing.
            </p>
            <a href="/opportunities.php#contact-form" class="button-solid">Contact Us</a>
        </div>
    </section>

</main>
<?php require 'includes/footer.php'; ?>