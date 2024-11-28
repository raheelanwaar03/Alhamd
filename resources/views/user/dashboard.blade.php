<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ---------Font Family--------- -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- ---------Font Awesome--------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- -------- AOS_ANIMATION -------- -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- ---------Link Css--------- -->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}" />
    <title>Document</title>
</head>

<body>
    <!-- ------------Header Section------------ -->
    <header>
        <div class="nav_top nav_dark">
            <div class="flexBetween container-fluid">
                <div class="left_side">
                    <div class="flexcenter gap-1">
                        <p class="flexcenter gap-1">
                            <i class="fa-regular fa-circle-question"></i>
                            <span>Have any Question?</span>
                        </p>
                        <p class="flexcenter gap-1">
                            <i class="fa-solid fa-phone"></i>
                            <span>+1-202-555-0174</span>
                        </p>
                    </div>
                </div>
                <div class="right_side flexcenter gap-2">
                    <div class="flexcenter gap-8">
                        <i class="fa-brands fa-facebook-f flexCenter"></i>
                        <i class="fa-brands fa-twitter flexCenter"></i>
                        <i class="fa-brands fa-instagram flexCenter"></i>
                        <i class="fa-brands fa-linkedin flexCenter"></i>
                    </div>
                </div>
                <div class="mobile_show">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
        </div>
        <!-- Nav -->
        <nav class="nav_full">
            <div class="container-fluid">
                <div class="flexBetween navbar">
                    <div class="logo flexcenter gap-1">
                        <img src="{{ asset('asset/imgs/logo.png') }}" alt="" />
                    </div>
                    <ul class="flexcenter gap-2">
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li>
                            <a href="">Classes</a>
                        </li>
                        <li>
                            <a href="">Registeration</a>
                        </li>
                        <li>
                            <a href="">Job Form</a>
                        </li>
                    </ul>
                    <div class="flexcenter gap-2">
                        <div class="flexcenter gap-2">
                            <div class="flexcenter gap-8">
                                <i class="fa-regular fa-user flexCenter icon"></i>
                                <p class="mobile_none">{{ auth()->user()->role }}</p>
                            </div>
                        </div>
                        <button class="primary mobile_none">Join Now</button>
                        <div class="menu_btn mobile_show">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Profile Sec -->
        <div class="gradient_box"></div>
        <div class="profile_box dashboard_box">
            <div class="container">
                <div class="box">
                    <div class="flexBetween">
                        <div class="left_side">
                            <div class="flexcenter gap-2 mobile_col">
                                <img src="{{ asset('asset/imgs/avatar.jpg') }}" alt="" />
                                <div class="content">
                                    <h2>{{ auth()->user()->name }}</h2>
                                    <div class="flexcenter gap-1">
                                        <div class="flexcenter">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <span>(15 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right_side">
                            <button class="flexcenter gap-1">
                                Create a New Course
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
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
    <!-- -------------Dashboard Section------------- -->
    <section class="courses dashboard">
        <div class="container">
            <div class="grid">
                <div class="col">
                    <div class="links">
                        <h3>Welcome, Jone Due</h3>
                        <ul>
                            <li class="flexcenter gap-8">
                                <i class="fa-solid fa-house"></i>
                                <p>Dashboard</p>
                            </li>
                            <li class="flexcenter gap-8">
                                <i class="fa-regular fa-user"></i>
                                <p>My Profile</p>
                            </li>
                            <li class="flexcenter gap-8">
                                <i class="fa-solid fa-book-open"></i>
                                <p>Enrolled Courses</p>
                            </li>
                            <li class="flexcenter gap-8">
                                <i class="fa-regular fa-bookmark"></i>
                                <p>Wishlist</p>
                            </li>
                            <li class="flexcenter gap-8">
                                <i class="fa-regular fa-star"></i>
                                <p>Reviews</p>
                            </li>
                            <li class="flexcenter gap-8">
                                <i class="fa-regular fa-circle-question"></i>
                                <p>My Quiz Attempts</p>
                            </li>
                            <li class="flexcenter gap-8">
                                <i class="fa-solid fa-shopping-bag"></i>
                                <p>Order History</p>
                            </li>
                        </ul>
                    </div>
                    <div class="links">
                        <h3>Instructor</h3>
                        <ul>
                            <li class="flexcenter gap-8">
                                <i class="fa-solid fa-tv"></i>
                                <p>My Courses</p>
                            </li>
                            <li class="flexcenter gap-8">
                                <i class="fa-solid fa-volume-high"></i>
                                <p>Announcements</p>
                            </li>
                            <li class="flexcenter gap-8">
                                <i class="fa-regular fa-message"></i>
                                <p>Quiz Attempts</p>
                            </li>
                            <li class="flexcenter gap-8">
                                <i class="fa-solid fa-list"></i>
                                <p>Assignments</p>
                            </li>
                        </ul>
                    </div>
                    <div class="links">
                        <h3>USER</h3>
                        <ul>
                            <li class="flexcenter gap-8">
                                <i class="fa-solid fa-gear"></i>
                                <p>Settings</p>
                            </li>
                            <li class="flexcenter gap-8">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <img src="{{ asset('assets/images/icons/icon-30.svg') }}" alt="">Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="dashboard_grid_sec">
                        <div class="top_sec">
                            <h2>Dashboard</h2>
                        </div>
                        <div class="grid-3 gap-3">
                            <div class="Item">
                                <i class="fa-solid fa-book-open flexCenter"></i>
                                <h2>30</h2>
                                <p>Enrolled Courses</p>
                            </div>
                            <div class="Item">
                                <i class="fa-solid fa-tv flexCenter"></i>
                                <h2>10</h2>
                                <p>ACTIVE COURSES</p>
                            </div>
                            <div class="Item">
                                <i class="fa-solid fa-award flexCenter"></i>
                                <h2>7</h2>
                                <p>Completed Courses</p>
                            </div>
                            <div class="Item">
                                <i class="fa-solid fa-users flexCenter"></i>
                                <h2>160</h2>
                                <p>Total Students</p>
                            </div>
                            <div class="Item">
                                <i class="fa-solid fa-gift flexCenter"></i>
                                <h2>20</h2>
                                <p>Total Courses</p>
                            </div>
                            <div class="Item">
                                <i class="fa-solid fa-dollar flexCenter"></i>
                                <h2>25,000+</h2>
                                <p>Total Earnings</p>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard_reviews">
                        <div class="top_sec">
                            <h2>My Courses</h2>
                        </div>

                        <div class="table">
                            <table class="rbt-table table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Enrolled</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>
                                            <a href="#" contenteditable="false"
                                                style="cursor: pointer">Accounting</a>
                                        </th>
                                        <td>50</td>
                                        <td>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bg_gray">
                                        <th>
                                            <a href="#" contenteditable="false"
                                                style="cursor: pointer">Marketing</a>
                                        </th>
                                        <td>40</td>
                                        <td>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <a href="#" contenteditable="false" style="cursor: pointer">Web
                                                Design</a>
                                        </th>
                                        <td>75</td>
                                        <td>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bg_gray">
                                        <th>
                                            <a href="#" contenteditable="false"
                                                style="cursor: pointer">Graphic</a>
                                        </th>
                                        <td>20</td>
                                        <td>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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
                    <h3>Our Company</h3>
                    <ul>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">Become Teacher</a></li>
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
                        If you have any questions. Don’t be shy! Ask anything you want.
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
                        Copyright © 2024 <span>{{ env('APP_NAME') }}.</span> All Rights Reserved
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
