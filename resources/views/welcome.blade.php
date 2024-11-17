
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ---------Font Family--------- -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <!-- ---------Font Awesome--------- -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- =========AOS_ANIMATION ========= -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- ---------Link Css--------- -->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}" />
    <title>Document</title>
  </head>
  <body>
    <!-- ------------Header Section------------ -->
    <header>
      <div class="nav_top">
        <div class="flexBetween container">
          <div class="left_side">
            <div class="flexcenter gap-1">
              <p class="flexcenter gap-1">
                <i class="fa-regular fa-circle-question"></i>
                <span>Have any Question?</span>
              </p>
              <p class="flexcenter gap-1">
                <i class="fa-regular fa-envelope"></i>
                <span>example@gmail.com </span>
              </p>
              <p class="flexcenter gap-1">
                <i class="fa-solid fa-phone"></i>
                <span>+1-202-555-0174</span>
              </p>
            </div>
          </div>
          <div class="right_side">
            <div class="flexcenter gap-2">
              <div class="flexcenter gap-8">
                <img src="{{ asset('asset/imgs/en-us.png') }}" alt="" />
                <h4 class="flexcenter gap-8">
                  <span>English</span>
                  <i class="fa-solid fa-chevron-down"></i>
                </h4>
              </div>
              <h4 class="flexcenter gap-8">
                <span>USD</span>
                <i class="fa-solid fa-chevron-down"></i>
              </h4>
            </div>
          </div>
          <div class="mobile_show">
            <i class="fa-solid fa-xmark" style="color: var(--black) !important;"></i>
          </div>
        </div>
      </div>
      <!-- Nav -->
      <nav>
        <div class="container">
          <div class="flexBetween navbar">
            <div class="logo">
              <img src="{{ asset('asset/imgs/logo.png') }}" alt="" />
            </div>
            <ul class="flexcenter gap-2">
              <li>
                <a href="">Home</a>
              </li>
              <li>
                <a href="">Courses</a>
              </li>
              <li>
                <a href="">Dashboard</a>
              </li>
              <li>
                <a href="">Pages</a>
              </li>
              <li>
                <a href="">Elements</a>
              </li>
              <li>
                <a href="">Blogs</a>
              </li>
            </ul>
            <button onclick="window.open('register')" class="primary mobile_none">Join Now</button>
            <div class="menu_btn mobile_show">
              <i class="fa-solid fa-bars"></i>
            </div>
          </div>
        </div>
      </nav>
      <!-- Hero Sec -->
      <div class="hero_sec">
        <div class="container">
          <div class="box">
            <div class="badge flexcenter gap-8 mb-20">
              <img src="{{ asset('asset/imgs/client-02.png') }}" alt="" />
              <span>Learn with <span>Fatima Asrafy</span></span>
            </div>
            <h1 class="mb-20">
              Putting Your Child's Future <br />
              in Great Motion.
            </h1>
            <p class="mb-20">
              We just don't give our student only <br />
              lecture but real life experience.
            </p>
            <div class="flexcenter gap-2 mb-4">
              <div class="link flexcenter gap-1">
                <i class="fa-solid fa-check flexCenter"></i>
                <h3>No Cridit Card</h3>
              </div>
              <div class="link flexcenter gap-1">
                <i class="fa-solid fa-check flexCenter"></i>
                <h3>14 Days Trial</h3>
              </div>
              <div class="link flexcenter gap-1">
                <i class="fa-solid fa-check flexCenter"></i>
                <h3>Free For Teachers</h3>
              </div>
            </div>
            <button>Get Started Today</button>
          </div>
        </div>
      </div>
    </header>
    <!-- ---------Sidebar--------- -->
    <div class="sidebar_sec">
      <div class="overlay"></div>
      <div class="sidebar">
        <div class="logo">
          <div class="flexBetween">
            <img src="{{ asset('asset/imgs/logo.png') }}" alt="" />
            <i class="fa-solid fa-xmark"></i>
          </div>
        </div>
        <p>Histudy is a education website template. You can customize all.</p>
        <div class="contact">
          <div class="flexcenter gap-1">
            <i class="fa-regular fa-envelope"></i>
            <a href="">example@gmail.com</a>
          </div>
          <div class="flexcenter gap-1">
            <i class="fa-solid fa-phone"></i>
            <a href="">(302) 555-0107</a>
          </div>
        </div>
        <ul class="">
          <li>
            <a href="">Home</a>
          </li>
          <li>
            <a href="">Courses</a>
          </li>
          <li>
            <a href="">Dashboard</a>
          </li>
          <li>
            <a href="">Pages</a>
          </li>
          <li>
            <a href="">Elements</a>
          </li>
          <li>
            <a href="">Blogs</a>
          </li>
        </ul>
        <button>Encroll Now</button>

        <h4>Find With Us</h4>
        <div class="flexcenter gap-8 social_icons">
          <i class="fa-brands fa-facebook-f flexCenter"></i>
          <i class="fa-brands fa-twitter flexCenter"></i>
          <i class="fa-brands fa-instagram flexCenter"></i>
          <i class="fa-brands fa-linkedin flexCenter"></i>
        </div>
      </div>
    </div>
    <!-- ------------Services Section------------ -->
    <section class="services bg-color">
      <div class="container">
        <div class="heading">
          <div class="badge">Our Curriculum</div>
          <h2>Our Curriculum</h2>
          <p>
            There are many variations of passages of the Ipsum available, but
            the majority <br />
            have suffered alteration in some form, by injected humour.
          </p>
        </div>

        <div class="grid-4 gap-3">
          <div class="col">
            <img src="{{ asset('asset/imgs/kindergarten-01-front.jpg') }}" alt="" />
            <h2>Infant</h2>
            <ul>
              <li class="flexcenter gap-1">
                <i class="fa-regular fa-heart"></i>
                <p>Health and Wellness</p>
              </li>
              <li class="flexcenter gap-1">
                <i class="fa-regular fa-flag"></i>
                <p>Literacy and Language</p>
              </li>
              <li class="flexcenter gap-1">
                <i class="fa-regular fa-eye"></i>
                <p>Social-Emotional Learning</p>
              </li>
              <li class="flexcenter gap-1">
                <i class="fa-regular fa-edit"></i>
                <p>Visual and Creative Arts</p>
              </li>
              <li class="flexcenter gap-1">
                <i class="fa-solid fa-battery-three-quarters"></i>
                <p>Thinking and Learning</p>
              </li>
            </ul>
            <a href="">Learn More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="col">
            <img src="{{ asset('asset/imgs/kindergarten-02-front.jpg') }}" alt="" />
            <h2>Infant</h2>
            <ul>
              <li class="flexcenter gap-1">
                <i class="fa-regular fa-heart"></i>
                <p>Health and Wellness</p>
              </li>
              <li class="flexcenter gap-1">
                <i class="fa-regular fa-flag"></i>
                <p>Literacy and Language</p>
              </li>
              <li class="flexcenter gap-1">
                <i class="fa-regular fa-eye"></i>
                <p>Social-Emotional Learning</p>
              </li>
              <li class="flexcenter gap-1">
                <i class="fa-regular fa-edit"></i>
                <p>Visual and Creative Arts</p>
              </li>
              <li class="flexcenter gap-1">
                <i class="fa-solid fa-battery-three-quarters"></i>
                <p>Thinking and Learning</p>
              </li>
            </ul>
            <a href="">Learn More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="col">
            <img src="{{ asset('asset/imgs/kindergarten-03-front.jpg') }}" alt="" />
            <h2>Infant</h2>
            <ul>
              <li class="flexcenter gap-1">
                <i class="fa-regular fa-heart"></i>
                <p>Health and Wellness</p>
              </li>
              <li class="flexcenter gap-1">
                <i class="fa-regular fa-flag"></i>
                <p>Literacy and Language</p>
              </li>
              <li class="flexcenter gap-1">
                <i class="fa-regular fa-eye"></i>
                <p>Social-Emotional Learning</p>
              </li>
              <li class="flexcenter gap-1">
                <i class="fa-regular fa-edit"></i>
                <p>Visual and Creative Arts</p>
              </li>
              <li class="flexcenter gap-1">
                <i class="fa-solid fa-battery-three-quarters"></i>
                <p>Thinking and Learning</p>
              </li>
            </ul>
            <a href="">Learn More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="col">
            <img src="{{ asset('asset/imgs/kindergarten-04-front.jpg') }}" alt="" />
            <h2>Infant</h2>
            <ul>
              <li class="flexcenter gap-1">
                <i class="fa-regular fa-heart"></i>
                <p>Health and Wellness</p>
              </li>
              <li class="flexcenter gap-1">
                <i class="fa-regular fa-flag"></i>
                <p>Literacy and Language</p>
              </li>
              <li class="flexcenter gap-1">
                <i class="fa-regular fa-eye"></i>
                <p>Social-Emotional Learning</p>
              </li>
              <li class="flexcenter gap-1">
                <i class="fa-regular fa-edit"></i>
                <p>Visual and Creative Arts</p>
              </li>
              <li class="flexcenter gap-1">
                <i class="fa-solid fa-battery-three-quarters"></i>
                <p>Thinking and Learning</p>
              </li>
            </ul>
            <a href="">Learn More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <!-- services Bottom Sec -->
        <div class="grid-2 gap-3">
          <div class="col">
            <div class="grid">
              <div class="item">
                <button class="mb-20">New Collection</button>
                <h2>Online Courses from Histudy</h2>
                <p>Top instructors from around the world</p>
              </div>
              <div class="item">
                <i class="fa-solid fa-play flexCenter"></i>
                <img src="{{ asset('asset/imgs/video-01.jpg') }}" alt="" />
              </div>
            </div>
          </div>
          <div class="col">
            <button class="mb-20">Top Teacher</button>
            <h2>Free Online Courses from Histudy School To Education</h2>
            <p>Top instructors from around the world</p>
            <a href="{{ route('register') }}" class="primary">Join Now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- ------------Courses Section------------ -->
    <section class="courses bg-color">
      <div class="container">
        <div class="heading">
          <div class="badge">Histudy Course</div>
          <h2>Weekly Online Classes.</h2>
          <p>
            There are many variations of passages of the Ipsum available, but
            the majority <br />
            have suffered alteration in some form, by injected humour.
          </p>
        </div>

        <div class="grid-3 gap-3">
          <div class="col">
            <img src="{{ asset('asset/imgs/kindergarten-course-01.jpg') }}" alt="" />
            <div class="flexBetween">
              <h2>
                Ten Reliable Sources To <br />
                Learn About Education.
              </h2>
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
          <div class="col">
            <img src="{{ asset('asset/imgs/kindergarten-course-02.jpg') }}" alt="" />
            <div class="flexBetween">
              <h2>
                Five Things You Should Do <br />
                In Education.
              </h2>
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
          <div class="col">
            <img src="{{ asset('asset/imgs/kindergarten-course-03.jpg') }}" alt="" />
            <div class="flexBetween">
              <h2>
                Five Ways To Learn <br />
                Education Effectively.
              </h2>
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
        </div>
        <button>Load More Courses</button>
      </div>
    </section>
    <!-- ------------Community Section------------ -->
    <section class="community">
      <div class="container">
        <div class="grid-2 gap-6">
          <div class="col">
            <div class="grid-2 gap-4">
              <div class="item">
                <img src="{{ asset('asset/imgs/counter-01.png') }}" alt="" />
                <h2>500+</h2>
                <p>Learners & counting</p>
              </div>
              <div class="item">
                <img src="{{ asset('asset/imgs/counter-02.png') }}" alt="" />
                <h2>800+</h2>
                <p>Courses & Video</p>
              </div>
              <div class="item">
                <img src="{{ asset('asset/imgs/counter-03.png') }}" alt="" />
                <h2>1,000+</h2>
                <p>Certified & Students</p>
              </div>
              <div class="item">
                <img src="{{ asset('asset/imgs/counter-04.png') }}" alt="" />
                <h2>100+</h2>
                <p>Certified & Students</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="badge">WHY CHOOSE US</div>
            <h1>Creating A Community Of <br />Life Long Learners.</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
              quisquam, officia hic neque vel delectus unde tempore odit
              obcaecati omnis.
            </p>
            <ul>
              <li class="flexcenter gap-1">
                <i class="fa-regular fa-heart flexCenter"></i>
                <h3>Flexible Classes</h3>
              </li>
              <li class="flexcenter gap-1">
                <i class="fa-solid fa-book flexCenter"></i>
                <h3>Learn From Anywhere</h3>
              </li>
              <li class="flexcenter gap-1">
                <i class="fa-brands fa-slack flexCenter"></i>
                <h3>Unlimited Resources With Strong Support</h3>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- ------------Pricing Section------------ -->
    <section class="pricing bg-color">
      <div class="container">
        <div class="flexBetween">
          <div class="left">
            <div class="badge">COURSE PRICING</div>
            <h1>Histudy Course Plan</h1>
          </div>
          <div class="right">
            <div class="flexcenter gap-8">
              <button>Yearly Plan</button>
              <button class="primary_">Monthly Plan</button>
            </div>
          </div>
        </div>

        <div class="grid-3">
          <div class="col">
            <img src="{{ asset('asset/imgs/pricing-icon-01.png') }}" alt="" />
            <div class="content">
              <h2>6 weeks to 12 months</h2>
              <p>Free for a Month</p>
              <h1>$12.00<span>/Monthly</span></h1>
            </div>
            <ul>
              <li>5 Full Days</li>
              <li>7:00 am 6:00 pm</li>
              <li><span>High Resolution Videos</span></li>
              <li><span>24/7 Dedicated Support</span></li>
            </ul>
            <button>
              Join Course Plan <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
          <div class="col">
            <img src="{{ asset('asset/imgs/pricing-icon-02.png') }}" alt="" />
            <div class="content">
              <h2>12 months to 24 months</h2>
              <p>Free for a Month</p>
              <h1>$20.00<span>/Monthly</span></h1>
            </div>
            <ul>
              <li>8 Full Days</li>
              <li>7:00 am 6:00 pm</li>
              <li><span>High Resolution Videos</span></li>
              <li><span>24/7 Dedicated Support</span></li>
            </ul>
            <button>
              Join Course Plan <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
          <div class="col">
            <img src="{{ asset('asset/imgs/pricing-icon-03.png') }}" alt="" />
            <div class="content">
              <h2>Pre Primary Community</h2>
              <p>Free for a Month</p>
              <h1>$30.00<span>/Monthly</span></h1>
            </div>
            <ul>
              <li>Pre Primary Community</li>
              <li>Kindergarten Community</li>
              <li><span>High Resolution Videos</span></li>
              <li><span>24/7 Dedicated Support</span></li>
            </ul>
            <button>
              Join Course Plan <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
    </section>
    <!-- ------------Our Instructor Section------------ -->
    <section class="instructor">
      <div class="container">
        <div class="heading">
          <div class="badge">Our Curriculum</div>
          <h2>Meet Our Teacher.</h2>
          <p>
            There are many variations of passages of the Ipsum available, but
            the majority <br />
            have suffered alteration in some form, by injected humour.
          </p>
        </div>

        <div class="grid-3 gap-3">
          <div class="col">
            <img src="{{ asset('asset/imgs/team-07.jpg') }}" alt="" />
            <h2>Alejandro</h2>
            <p class="linear">Math Teacher</p>
            <p class="flexcenter gap-8">
              <i class="fa-solid fa-location-dot"></i>
              CO Miego, AD,USA
            </p>
          </div>
          <div class="col">
            <img src="{{ asset('asset/imgs/team-08.jpg') }}" alt="" />
            <h2>Alejandro</h2>
            <p class="linear">Math Teacher</p>
            <p class="flexcenter gap-8">
              <i class="fa-solid fa-location-dot"></i>
              CO Miego, AD,USA
            </p>
          </div>
          <div class="col">
            <img src="{{ asset('asset/imgs/team-09.jpg') }}" alt="" />
            <h2>Alejandro</h2>
            <p class="linear">Math Teacher</p>
            <p class="flexcenter gap-8">
              <i class="fa-solid fa-location-dot"></i>
              CO Miego, AD,USA
            </p>
          </div>
        </div>
        <button>View All Teacher</button>
      </div>
    </section>
    <!-- ------------AboutUs Section------------ -->
    <section class="aboutus bg-color">
      <div class="container">
        <div class="heading">
          <div class="badge">EDUCATION FOR EVERYONE</div>
          <h2>
            People like histudy education. <br />
            No joking - Parents Review Here!
          </h2>
        </div>

        <div class="grid-2 gap-4">
          <div class="col">
            <div class="flexcenter gap-8">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h2>
              Histudy The standard chunk of Lorem Ipsum used since the 1500s is
              reproduced below for those interested. Sections Bonorum et Malorum
              original.
            </h2>
            <p><span>Histudy</span> - COO, AMERIMAR ENTERPRISES, INC.</p>
          </div>
          <div class="col">
            <div class="flex_imgs">
              <div class="Img active">
                <img src="{{ asset('asset/imgs/testimonial-1.jpg') }}" alt="" />
              </div>
              <div class="Img">
                <img src="{{ asset('asset/imgs/testimonial-2.jpg') }}" alt="" />
              </div>
              <div class="Img">
                <img src="{{ asset('asset/imgs/testimonial-3.jpg') }}" alt="" />
              </div>
              <div class="Img">
                <img src="{{ asset('asset/imgs/testimonial-4.jpg') }}" alt="" />
              </div>
              <div class="Img">
                <img src="{{ asset('asset/imgs/testimonial-5.jpg') }}" alt="" />
              </div>
              <div class="Img">
                <img src="{{ asset('asset/imgs/testimonial-6.jpg') }}" alt="" />
              </div>
              <div class="Img">
                <img src="{{ asset('asset/imgs/testimonial-7.jpg') }}" alt="" />
              </div>
              <div class="Img">
                <img src="{{ asset('asset/imgs/testimonial-8.jpg') }}" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ------------Our Post Section------------ -->
    <section class="our_post">
      <div class="container">
        <div class="heading">
          <div class="badge">Histudy Post</div>
          <h2>From Our Post.</h2>
          <p>
            There are many variations of passages of the Ipsum available, but
            the majority <br />
            have suffered alteration in some form, by injected humour.
          </p>
        </div>

        <div class="grid-3 gap-3">
          <div class="col">
            <img src="{{ asset('asset/imgs/kindergarten-01.jpg') }}" alt="" />
            <div class="content">
              <h2>
                Is Kindergarten The Most <br />
                Trending Thing Now?
              </h2>
              <p>It is a long established fact that a reader.</p>
              <a href="" class="flexcenter">
                Learn More <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="col">
            <img src="{{ asset('asset/imgs/kindergarten-02.jpg') }}" alt="" />
            <div class="content">
              <h2>
                Learn How More Money <br />
                With Kindergarten.
              </h2>
              <p>It is a long established fact that a reader.</p>
              <a href="" class="flexcenter">
                Learn More <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="col">
            <img src="{{ asset('asset/imgs/kindergarten-03.jpg') }}" alt="" />
            <div class="content">
              <h2>
                Understand The Background <br />
                Of Kindergarten Now.
              </h2>
              <p>It is a long established fact that a reader.</p>
              <a href="" class="flexcenter">
                Learn More <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <button>View All Post</button>
      </div>
    </section>
    <!-- ------------Gallery Section------------ -->
    <section class="gallery">
      <div class="grid">
        <img src="{{ asset('asset/imgs/kindergarten-thumb-01.jpg') }}" alt="" />
        <img src="{{ asset('asset/imgs/kindergarten-thumb-02.jpg') }}" alt="" />
        <img src="{{ asset('asset/imgs/kindergarten-thumb-03.jpg') }}" alt="" />
        <img src="{{ asset('asset/imgs/kindergarten-thumb-04.jpg') }}" alt="" />
        <img src="{{ asset('asset/imgs/kindergarten-thumb-05.jpg') }}" alt="" />
        <img src="{{ asset('asset/imgs/kindergarten-thumb-06.jpg') }}" alt="" />
        <img src="{{ asset('asset/imgs/kindergarten-thumb-07.jpg') }}" alt="" />
        <img src="{{ asset('asset/imgs/kindergarten-thumb-08.jpg') }}" alt="" />
        <img src="{{ asset('asset/imgs/kindergarten-thumb-09.jpg') }}" alt="" />
        <img src="{{ asset('asset/imgs/kindergarten-thumb-10.jpg') }}" alt="" />
        <img src="{{ asset('asset/imgs/kindergarten-thumb-11.jpg') }}" alt="" />
        <img src="{{ asset('asset/imgs/kindergarten-thumb-12.jpg') }}" alt="" />
      </div>
    </section>
    <!-- ------------Footer Section------------ -->
    <footer>
      <div class="container">
        <div class="grid">
          <div class="col">
            <img src="{{ asset('asset/imgs/logo.png') }}" alt="" />
            <p>
              We’re always in search for talented and motivated people. Don’t be
              shy introduce yourself!
            </p>
            <div class="flexcenter gap-8">
              <i class="fa-brands fa-facebook-f flexCenter"></i>
              <i class="fa-brands fa-twitter flexCenter"></i>
              <i class="fa-brands fa-instagram flexCenter"></i>
              <i class="fa-brands fa-linkedin flexCenter"></i>
            </div>
            <button>
              Contact With Us
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
          <div class="col">
            <h3>Useful Links</h3>
            <ul>
              <li><a href="">Marketplace</a></li>
              <li><a href="">kindergarten</a></li>
              <li><a href="">University</a></li>
              <li><a href="">Marketplace</a></li>
              <li><a href="">GYM Coaching</a></li>
              <li><a href="">FAQ</a></li>
              <li><a href="">About Us</a></li>
              <li><a href="">Privacy policy</a></li>
            </ul>
          </div>
          <div class="col">
            <h3>Our Company</h3>
            <ul>
              <li><a href="">Contact Us</a></li>
              <li><a href="">Become Teacher</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">Instructor</a></li>
              <li><a href="">Events</a></li>
              <li><a href="">Course</a></li>
              <li><a href="">Contact</a></li>
            </ul>
          </div>
          <div class="col">
            <h3>Get Contact</h3>
            <p>Phone: (406) 555-0120</p>
            <p>E-mail: admin@example.com</p>
            <p class="strong">Newsletter</p>
            <p>
              2000+ Our students are subscribe Around the World. Don’t be shy
              introduce yourself!
            </p>
            <div class="input flexBetween">
              <input type="text" placeholder="Enter Your Email Here" />
              <i class="fa-regular fa-envelope"></i>
            </div>
            <button>Submit Now</button>
          </div>
        </div>

        <div class="footer_btm">
          <div class="flexBetween">
            <p>
              Copyright © 2024 <span>Rainbow-Themes.</span> All Rights Reserved
            </p>
            <div class="flexcenter gap-2">
              <a href="">Terms of service</a>
              <a href="">Privacy policy</a>
              <a href="">Subscription</a>
              <a href="">Login & Register</a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="{{ asset('asset/javascript/script.js') }}"></script>
  </body>
</html>
