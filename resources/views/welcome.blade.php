@extends('layout.master')


@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Welcome to MAMYEYES</h1>
            <h2>The childcare platform trusted by families</h2>
            {{-- <a href="#appointment" class="btn-get-started scrollto">Find a babysitter</a>
            <a href="#appointment" class="btn-get-started scrollto">Find a babysitter</a> --}}
            <a href="#contact" class="appointment-btn scrollto" id="join"><span class="d-none d-md-inline"></span>Be a Babysitter</a>
            <a href="/booking" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span>Find a Babysitter </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Why Choose MAMYEYES?</h3>
                            <p> 3 reasons why MAMYEYES is the best website for babysitters in Jordan</p>
                            <!-- <div class="text-center">
                    <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                  </div> -->
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <h4>We are near you</h4>
                                        <p>Wherever you are, you will find dozens of babysitters near you through a MAMYEYES
                                            website</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="fas fa-history"></i>
                                        <h4>Any time</h4>
                                        <p>Our certified services are available 24 hours a day, seven days a week, 24/7.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="fas fa-hands"></i>
                                        <h4>Trusted</h4>
                                        <p>All of our babysitters go through an extensive rehabilitation process</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= About Section ======= -->
        {{-- <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div
                        class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> -->
                    </div>

                    <div
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h3>About us</h3>
                        <p>Founded in November 2022, the MAMYEYES is a website aimed at families who want to put their
                            children in the hands of trusted babysitters. The recruitment process takes place in three
                            stages:</p>

                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-clipboard-check"></i></div>
                            <h4 class="title">Receiving applications and interviews</h4>
                            <p class="description">We review and evaluate applications, then conduct several personal
                                interviews and select qualified babysitters</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-shield-check"></i></div>
                            <h4 class="title">Comprehensive medical examination</h4>
                            <p class="description">The safety of your children is our priority, so we conduct tests to
                                ensure the safety of our babysitters</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-easel"></i></div>
                            <h4 class="title">Education and Training</h4>
                            <p class="description">Providing an educational material on first aid and modern child care
                                methods</p>
                        </div>

                    </div>
                </div>

            </div>
        </section> --}}
        <!-- End About Section -->

        <!-- ======= Departments Section ======= -->
        {{-- <section id="departments" class="departments">
            <div class="container">

                <div>
                    <!-- <h2>Departments</h2> -->
                    <p>Our babysitters are classified into 3 sections according to scientific and practical qualifications
                    </p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Junior Sitters</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Standard Sitters</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Advanced Sitters</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Junior Sitters</h3>
                                        <p class="fst-italic">Babysitting, petting, reading stories to him, paying attention
                                            to him and his needs in general, while providing a meal according to the
                                            mother's request and choice. Its price is the lowest among all the categories
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="../img/department-1.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Standard Sitters</h3>
                                        <p class="fst-italic">In addition to the tasks of the regular babysitter, she will
                                            follow up on the child's lessons or establish the child educationally (letters,
                                            numbers, Quran .. etc.), most of the babysitters in this category are actually
                                            teachers in schools. Its price is a little more than a Junior Sitters but it is
                                            in the reasonable range</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="../img/departments-2.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Advanced Sitters</h3>
                                        <p class="fst-italic">It serves as an aid to the mother in raising the child and
                                            providing him with advanced skills, such as teaching languages, teaching arts
                                            such as drawing, sculpture, cooking, music, etc., teaching etiquette and style
                                            ... etc. These skills are personal skills that an expert nanny possesses and has
                                            strength in, and it is not required here that they be linked With academic
                                            qualifications (innate skill, accumulated experience). It is considered the most
                                            expensive due to the skill it will provide for the child during babysitting</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="../img/departments-3.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section> --}}
        <!-- End Departments Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Sitter?!</h2>
                    <p>Apply now to be part of MAMYEYES team Your golden offer is coming to you..!<br> We will contact you
                        as soon as possible </p>
                </div>
            </div>
            <div class="container">
                <div class="row mt-5">
                    <div class="d-flex p-2">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="tel" name="tel" class="form-control" id="tel"
                                        placeholder="Your phone" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="form-control" name="certificate" id="certificate"
                                        placeholder="Your certificate (if found)" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Short text about yourself" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send</button></div>
                        </form>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

        <!-- ======= Doctors Section ======= -->
        {{-- <section id="doctors" class="doctors">
            <div class="container">

                <div class="section-title">
                    <h2>Our Babysitters</h2>
                    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="../img/doctors/sitter.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Medical Officer</span>
                                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-whatsapp"></i></a>
                                    <a href=""><i class="bi bi-telephone"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="../img/doctors/sitter.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Anesthesiologist</span>
                                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-whatsapp"></i></a>
                                    <a href=""><i class="bi bi-telephone"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="../img/doctors/sitter.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>Cardiology</span>
                                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-whatsapp"></i></a>
                                    <a href=""><i class="bi bi-telephone"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="../img/doctors/sitter.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Neurosurgeon</span>
                                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-whatsapp"></i></a>
                                    <a href=""><i class="bi bi-telephone"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="../img/doctors/sitter.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>Cardiology</span>
                                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-whatsapp"></i></a>
                                    <a href=""><i class="bi bi-telephone"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="../img/doctors/sitter.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Neurosurgeon</span>
                                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-whatsapp"></i></a>
                                    <a href=""><i class="bi bi-telephone"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}
        <!-- End Doctors Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help" id="qicon"></i> <a data-bs-toggle="collapse"
                                class="collapse" data-bs-target="#faq-list-1">What is the hourly price? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                   The price varies according to the sitter’s level, but the price ranges between (5-15) JD per hour. Monthly subscriptions will soon be available to suit you.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"id="qicon"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Does the babysitter come home? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    There are babysitters who prefer to sit in their house, and there are also babysitters
                                    who come to you wherever you are! The application form will help you choose the
                                    right babysitter for you </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"id="qicon"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">how to pay ? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>You can use the Visa card or the Orange Money application</p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"id="qicon"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-5" class="collapsed">Where are you located? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    We are a website so you will find us everywhere :) And we don't have an administration
                                    site yet </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"id="qicon"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-5" class="collapsed">What are the cities in which you provide
                                your services?<i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    We are currently working in the city of Amman and Zarqa.. Soon we will be in attendance
                                    in all the cities of the Kingdom. </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        {{-- <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                        rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                        risus at semper.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div> --}}
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <!-- <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt=""> -->
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                        cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                        legam anim culpa.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <div class="sitterbtnDiv">
                                    {{-- <button class="sitterbtn">Show profile</button> --}}
                                    <button class="sitterbtn">Show profile</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        {{-- <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <!-- <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt=""> -->
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                        veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                        minim.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item --> --}}
{{-- 
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <!-- <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt=""> -->
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                        dolore labore illum veniam.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item --> --}}

                        {{-- <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <!-- <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt=""> -->
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                        veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                        culpa fore nisi cillum quid.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item --> --}}

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Appointment Section ======= -->
        {{-- <section id="appointment" class="appointment section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Find a Babysitter</h2>
                </div>

                <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="tel" class="form-control" name="phone" id="phone"
                                placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <input type="date" name="date" class="form-control datepicker" id="date"
                                placeholder="Appointment Date" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>


                        <div class="col-md-4 form-group mt-3">
                            <input type="time" name="time" class="form-control datepicker" id="time"
                                placeholder="Appointment Time" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>

                        <div class="col-md-4 form-group mt-3">
                            <input type="number" name="children" class="form-control datepicker" id="children"
                                placeholder="Number of children" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>


                    </div>



                    <div class="row">

                        <div class="col-md-4 form-group mt-3">
                            <select name="doctor" id="doctor" class="form-select">
                                <option value="">Select City</option>
                                <option value="Doctor 1">Amman</option>
                                <option value="Doctor 2">Zarqa</option>
                            </select>
                            <div class="validate"></div>
                        </div>

                        <div class="col-md-4 form-group mt-3">
                            <input type="text" name="street" class="form-control datepicker" id="street"
                                placeholder="Street" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>

                        <div class="col-md-4 form-group mt-3">
                            <input type="number" name="building" class="form-control datepicker" id="building"
                                placeholder="Building Number" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6 form-group mt-3">
                            <select name="department" id="department" class="form-select">
                                <option value="">Kind of sitter</option>
                                <option value="Department 1">Junior Sitters</option>
                                <option value="Department 2">Standard Sitters</option>
                                <option value="Department 3">Advanced Sitters</option>
                            </select>
                            <div class="validate"></div>
                        </div>

                        <div class="col-md-6 form-group mt-3">
                            <select name="department" id="department" class="form-select">
                                <option value="">Select sitter</option>
                                <option value="Department 1">Nour Ahmad</option>
                                <option value="Department 2">Nour Ahmad</option>
                                <option value="Department 3">Nour Ahmad</option>
                                <option value="Department 4">Nour Ahmad</option>
                                <option value="Department 5">Nour Ahmad</option>
                                <option value="Department 6">Nour Ahmad</option>
                            </select>
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="More details (Optional)"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="row">


                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send</button></div>
                </form>

            </div>
        </section> --}}
        <!-- End Appointment Section -->


    </main><!-- End #main -->
@endsection
