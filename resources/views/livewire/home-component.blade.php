<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-text">
                    <!-- **************change****************** -->
                    <h3>
                        Committed to create solutions that transform lives
                    </h3>
                </div>
                <div class="banner-link">
                    <!-- *******************change******************** -->
                    <a href="#contact">Getting Started</a>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="banner-image  ml-auto">
                    <img src="images/banner-image.png" alt="banner-image" class="img-fluid w-100">

                </div>
            </div>

        </div>

    </div>
    <div class="banner-items container">
        <div class="row Banner-items ">
            <div class="col-lg-4">
                <div class="banner-item">
                    <div class="banner-icon">
                        <i class="flaticon-011-search"></i>
                    </div>
                    <div class="banner-itemn-text">
                        <h3>Innovate</h3>
                        <p>Innovation is the base of groundbreaking achievements, With a thirst for solving problems, our team brainstorms to collaborate and develop ideas using mind mapping techniques that lay the foundation for next-generation solutions.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="banner-item">
                    <div class="banner-icon">
                        <i class="flaticon-006-technical-support"></i>
                    </div>
                    <div class="banner-itemn-text">
                        <h3>Build.</h3>
                        <p>Every major accomplishment began with a single thought, Using key design tactics and the right technology, our company works hard to turn every thought into an operational project, We are motivated to create the perfect product
                            that works entirely.

                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="banner-item last">
                    <div class="banner-icon">
                        <i class="flaticon-008-like"></i>
                    </div>
                    <div class="banner-itemn-text">
                        <h3>Impact.</h3>
                        <p>
                            Striving to create a widespread positive impact, Our company believes that simply building a product is not enough, a true innovative creation has a constant beneficial social impact, allowing it to successfully achieve long term sustainability. </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- ==============Banner Part Ends================== -->
<div class="clip">
    <div class="bar">
    </div>
</div>
<!-- ==============About Us Part Starts=============== -->
<section id="about">

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text">
                    <h3>{{ $about->title}} </h3>
                    <p>{!! $about->content !!}</p>

                </div>

            </div>
            <div class="col-lg-6 mt-5 pt-5">
                <div class="about-image pl-4">
                    <img src="{{asset('images/about/'.$about->image)}}" class="img-fluid w-100" alt="about Image">
                </div>
            </div>
        </div>

    </div>

</section>
<!-- ==============About Us Part Ends================== -->
<!-- **********************************Changes************************************* -->
<!-- =============PortFolio Starts====================== -->
<div class="clip">
    <div class="bar">
    </div>
</div>
<section id="PortFolio">
    <div class="container">
        <div class="row portfolio ">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-2">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="port-icon">
                            <i class="flaticon-031-light-bulb"></i>
                        </div>
                        <div class="portfolio-text">
                            <h3>{{ $service->title}}</h3>
                            <p>{!! $service->content !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</section>
<!-- **************************Change**************************************************** -->
<!-- =============PortFolio Ends========================= -->
<div class="clip">
    <div class="bar">
    </div>
</div>
<!-- **************************Change******************************* -->
<!-- ==========Work Showcase Starts=============== -->
<!-- *****************************change********************************* -->
<section id="Work">
    <div class="container">
        <div class="work-text">
            <h3>work showcase </h3>
        </div>
        <div class="workShowcase">
            <div class="row works responsive">
        @foreach($showcases as $showcase)
                <div class="col-lg-4">
                    <div class="card">
                        <div class="work-overlay">
                            <div class="workShowcase-text">
                                <h3>{{ $showcase->title}}</h3>
                                <p>{!! $showcase->content !!}</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="work-img">
                                <img src="{{asset('images/showcase/'.$showcase->image)}}" class="img-fluid w-100" alt="work">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

    </div>
    <!-- **********************************change*********************************************** -->
</section>
<!-- *******************************change*********************************** -->
<!-- ==========Wrok Show Case Ends ===============-->
<div class="clip">
    <div class="bar">
    </div>
</div>
<!-- =================Team Part Starts===================== -->
<section id="team">
    <div class="container">
        <div class="team-text">
            <h3>
                CROSS-FUNCTIONAL TEAM
            </h3>
        </div>
        <div class="row Team teamf">
            <div class="col-lg-6">
                <div class="team-image mr-5">
                    <!-- ****change************** -->
                    <img src="images/team.svg">
                </div>
            </div>
            <div class="col-lg-6">
                <diV class="team-text para-team">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                        gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor
                        sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                        sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                        accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                        labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                        consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                        sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
                        duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                        magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing
                        elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                        ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
                        ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                        erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                        diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                </diV>
            </div>
        </div>

    </div>

</section>
<!-- =================Team Part Ends======================= -->
<div class="clip">
    <div class="bar">
    </div>
</div>
<!-- ===========Client Review Part Starts================-->
<!-- <section id="client">
        <div class="container">
            <div class="client-review-text">
                <h3>
                    clients Reviews .
                </h3>

            </div>
            <div class="row client-Review">
                <div class="col-lg-6 ">

                    <div class="client-image">
                        <div class="image-detail text-center">
                            <img src="images/client.png" alt="client-image" class="img-fluid w-100">
                        </div>

                        <div class="pillar">

                        </div>
                    </div>


                </div>
                <div class="col-lg-6 qoute">
                    <div class="qoutation">
                        <img src="images/quotation-mark.png" class="img-fluid w-100" alt="qoutatin">

                    </div>
                    <div class="qoutation-text">
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                            sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
                            duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing
                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                            ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
                            ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                            erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                            diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                            sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                            diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                            eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo.
                        </p>

                    </div>
                    <div class="client-name">
                        <p>Adams Baker,CEO</p>
                    </div>

                </div>

            </div>

        </div>

    </section> -->
<!-- ===========Client Review Part Ends=================== -->
<div class="clip">
    <div class="bar">
    </div>
</div>
<!-- ======================Blog Part Starts======================= -->
<section id="blog">

    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="blog-text">
                    <h3>Latest Blog </h3>
                </div>
            </div>
            <div class="col-lg-2">
                <diV class="view-all">
                    <!-- ./blogList.html -->
                    <a href="{{route('bloglist')}}">
                        View all
                    </a>
                </diV>
            </div>
        </div>


        @foreach($bloglist as $blog)
        <div class="blog-item current firts-blog">
            <!--************ chnage  ffirst-blog******************-->
            <div class="row blog-links">
                <div class="col-lg-9">
                    <div class="blog-head">
                        <h3>{{$blog->title}}
                        </h3>

                    </div>
                    <div class="blog-para">
                        <p>
                            {!! substr_replace($blog->content, "...", 150) !!}<a class="text-indigo-600 hover-text-indigo-900" target="_self" href="{{URL::to('/'.$blog->slug)}}">
                                <span class="readMore ">Read More </span></a>
                        </p>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blog-image">
                        <img src="{{asset('images/blogs/'.$blog->images)}}" class="img-fluid w-100" alt="blog">
                    </div>
                </div>

            </div>
        </div>
        @endforeach
        <div>

        </div>
    </div>

</section>
<div class="clip">
    <div class="bar">
    </div>
</div>
<!-- ======================Blog PArt Ends=========================== -->
<!-- ======================Contact part Starst======================== -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="contact-text">
                    <h3>Let's talk </h3>
                    <p>Don't wait until tomorrow. Talk to one of our consultants today and learn how to start leveraging your business.</p>
                </div>

            </div>
            <div class="col-lg-5">
                <div class="contact-image">
                    <img src="images/contact.png" alt="contact">
                </div>
            </div>
        </div>
        <div class="contact-form">
            <form>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Phone">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your Message"></textarea>
                </div>
                <div class="form-group send">
                    <button type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- ======================Contact PArt Ends=============================== -->
<div class="clip">
    <div class="bar">
    </div>
</div>
<!-- ==============Footer STarts======================================== -->
<section id="footer">
    <div class="container">
        <div class="row ">
            <div class="col-lg-4">
                <div class="footer-logo">
                    <a class="navbar-brand logo" href="#"><img src="images/logo.png" class="img-fluid w-100">
                    </a>
                </div>
                <div class="footer-paragraph">
                    <p>
                        Authentic and innovative. Built to the smallest detail with a focus on usability and performance.
                    </p>
                </div>


            </div>
            <div class="col-lg-4">
                <div class="ml-5">
                    <div class="footer-text ">
                        <h3>
                            Sitemap
                        </h3>
                    </div>
                    <div class="siteMap-list mt-4">
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>

                            <li>
                                <a href="#about">About us</a>
                            </li>

                            <li>
                                <a href="#Work">Work showcase</a>
                            </li>
                            <li class="nav-item">
                                <a href="#team">Cross functional team</a>
                            </li>
                            <li>
                                <a href="#blog">Latest blog</a>
                            </li>

                            <li>
                                <a href="#contact">Let's talk</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="ml-2">
                    <div class="footer-text ">
                        <h3>
                            Get in Touch
                        </h3>
                        <div class="socialmedia">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <!-- <i class="fa fa-envelope-o" aria-hidden="true"></i> -->
                        </div>
                        <p><i class="fa fa-phone" aria-hidden="true"></i>+880 1970 426798</p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>Dhaka, Bangladesh</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
</div>
<!-- ==============Footer Ends========================================== -->
<!-- Back To top -->
<div class="back-to-top">
    <i class="fa fa-arrow-up" aria-hidden="true"></i>
</div>
<section id="copy-right">
    <div class="container">
        <div class="copyRight">

            <p><span>&#169;</span>2020 Xortech</p>

        </div>
    </div>

</section>