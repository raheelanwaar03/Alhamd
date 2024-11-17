<!DOCTYPE html>
<html lang="en">

<head>

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
                            <i class="fa-brands fa-facebook-f"></i>
                            <span>500k Followers </span>
                        </p>
                        <p class="flexcenter gap-1">
                            <i class="fa-solid fa-phone"></i>
                            <span>+1-202-555-0174</span>
                        </p>
                    </div>
                </div>
                <div class="center flexcenter gap-1">
                    <button>Hot</button>
                    <p class="flexcenter gap-1">
                        <img src="imgs/hand-emojji.svg" alt="" width="20" />
                        Intro price. Get Histudy for Big Sale -95% off.
                    </p>
                </div>
                <div class="right_side flexcenter gap-2">
                    <div class="flexcenter gap-8">
                        <i class="fa-brands fa-facebook-f flexCenter"></i>
                        <i class="fa-brands fa-twitter flexCenter"></i>
                        <i class="fa-brands fa-instagram flexCenter"></i>
                        <i class="fa-brands fa-linkedin flexCenter"></i>
                    </div>
                    <div class="flexcenter gap-2">
                        <div class="flexcenter gap-8">
                            <img src="imgs/en-us.png" alt="" />
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
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
        </div>
        <!-- Nav -->
        <nav class="nav_full">
            <div class="container-fluid">
                <div class="flexBetween navbar">
                    <div class="logo flexcenter gap-1">
                        <img src="imgs/logo.png" alt="" />
                        <button class="flexcenter gap-8">
                            <i class="fa-solid fa-list"></i>
                            Category
                        </button>
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
                    <div class="flexcenter gap-2">
                        <div class="flexcenter gap-2">
                            <div class="flexcenter gap-1">
                                <i class="fa-solid fa-search flexCenter icon"></i>
                                <div class="cart">
                                    <i class="fa-solid fa-shopping-bag flexCenter icon"></i>
                                    <span class="flexCenter">4</span>
                                </div>
                            </div>
                            <div class="flexcenter gap-8">
                                <i class="fa-regular fa-user flexCenter icon"></i>
                                <p class="mobile_none">Admin</p>
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
        <!-- register sec -->
        <div class="linear_heading_box">
            <h1>Login & Register</h1>
            <div class="flexCenter gap-2">
                <p><a href="home">Home</a></p>
                <i class="fa-solid fa-chevron-right"></i>
                <p><a href="{{ route('login')}}">Login</a></p>
            </div>
        </div>
    </header>
    <!-- ---------Sidebar--------- -->
    <div class="sidebar_sec">
        <div class="overlay"></div>
        <div class="sidebar">
            <div class="logo">
                <div class="flexBetween">
                    <img src="imgs/logo.png" alt="" />
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

    <!-- ---------Register Section--------- -->
    <section class="register_Sec">
        <div class="container">
            <div class="box">
                <h1>Login</h1>
                <form action="">
                    <input type="text" placeholder="Email address *" />
                    <input type="text" placeholder="Password *" />
                    <button class="flexCenter gap-1">
                        Login <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </form>

                {{-- don't have account button --}}
                <p>
                    Don't have an account? <a href="{{ route('register') }}">Register</a>
                </p>

            </div>
        </div>
    </section>
    <script src="{{ asset('asset/javascript/script.js') }}"></script>
</body>

</html>
