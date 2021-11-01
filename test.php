<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Around | Shop Homepage</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Around - Multipurpose Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, consulting, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, multipurpose, product landing, shop, software, ui kit, web studio, landing, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        font-weight: normal;
        color: #737491;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #766df4;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      
    </style>
    <!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          var preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 2000);
        };
      })();
      
    </script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="vendor/tiny-slider/dist/tiny-slider.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
  </head>
  <!-- Body-->
  <body>
    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>
    <main class="page-wrapper">
      <!-- Sign In Modal-->
      <div class="modal fade" id="modal-signin" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content border-0">
            <div class="view show" id="modal-signin-view">
              <div class="modal-header border-0 bg-dark px-4">
                <h4 class="modal-title text-light">Sign in</h4>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="btn-close "></button>
              </div>
              <div class="modal-body px-4">
                <p class="fs-ms text-muted">Sign in to your account using email and password provided during registration.</p>
                <form class="needs-validation" novalidate>
                  <div class="mb-3">
                    <div class="input-group"><i class="ai-mail position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                      <input class="form-control rounded" type="email" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="input-group"><i class="ai-lock position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                      <div class="password-toggle w-100">
                        <input class="form-control" type="password" placeholder="Password" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mb-3 mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="keep-signed">
                      <label class="form-check-label fs-sm" for="keep-signed">Keep me signed in</label>
                    </div><a class="nav-link-style fs-ms" href="password-recovery.html">Forgot password?</a>
                  </div>
                  <button class="btn btn-primary d-block w-100" type="submit">Sign in</button>
                  <p class="fs-sm pt-3 mb-0">Don't have an account? <a href='#' class='fw-medium' data-view='#modal-signup-view'>Sign up</a></p>
                </form>
              </div>
            </div>
            <div class="view" id="modal-signup-view">
              <div class="modal-header border-0 bg-dark px-4">
                <h4 class="modal-title text-light">Sign up</h4>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="btn-close"></button>
              </div>
              <div class="modal-body px-4">
                <p class="fs-ms text-muted">Registration takes less than a minute but gives you full control over your orders.</p>
                <form class="needs-validation" novalidate>
                  <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Full name" required>
                  </div>
                  <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Email" required>
                  </div>
                  <div class="mb-3 password-toggle">
                    <input class="form-control" type="password" placeholder="Password" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                  <div class="mb-3 password-toggle">
                    <input class="form-control" type="password" placeholder="Confirm password" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                  <button class="btn btn-primary d-block w-100" type="submit">Sign up</button>
                  <p class="fs-sm pt-3 mb-0">Already have an account? <a href='#' class='fw-medium' data-view='#modal-signin-view'>Sign in</a></p>
                </form>
              </div>
            </div>
            <div class="modal-body text-center px-4 pt-2 pb-4">
              <hr class="my-0">
              <p class="fs-sm fw-medium text-heading pt-4">Or sign in with</p><a class="btn-social bs-facebook bs-lg mx-1 mb-2" href="#"><i class="ai-facebook"></i></a><a class="btn-social bs-twitter bs-lg mx-1 mb-2" href="#"><i class="ai-twitter"></i></a><a class="btn-social bs-instagram bs-lg mx-1 mb-2" href="#"><i class="ai-instagram"></i></a><a class="btn-social bs-google bs-lg mx-1 mb-2" href="#"><i class="ai-google"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Shopping cart off-canvas-->
      <div class="offcanvas offcanvas-end" id="shoppingCart">
        <div class="offcanvas-header navbar-shadow px-4 mb-2">
          <h5 class="mt-1 mb-0">Your cart</h5>
          <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-4" data-simplebar>
          <div class="d-flex align-items-center mb-3"><a class="d-block flex-shrink-0" href="shop-single.html"><img class="rounded" src="img/demo/shop-homepage/thumbnails/05.jpg" alt="Product" width="60"></a>
            <div class="w-100 ps-2 ms-1">
              <div class="d-flex align-items-center justify-content-between">
                <div class="me-3">
                  <h4 class="nav-heading fs-md mb-1"><a class="fw-medium" href="shop-single.html">Smart Watch Series 5</a></h4>
                  <div class="d-flex align-items-center fs-sm"><span class="me-2">$364.99</span><span class="me-2">x</span>
                    <input class="form-control form-control-sm px-2" type="number" style="max-width: 3.5rem;" min="1" value="1">
                  </div>
                </div>
                <div class="ps-3 border-start"><a class="d-block text-danger text-decoration-none fs-xl" href="#" data-bs-toggle="tooltip" title="Remove"><i class="ai-x-circle"></i></a></div>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center mb-3"><a class="d-block flex-shrink-0" href="shop-single.html"><img class="rounded" src="img/demo/shop-homepage/thumbnails/02.jpg" alt="Product" width="60"></a>
            <div class="w-100 ps-2 ms-1">
              <div class="d-flex align-items-center justify-content-between">
                <div class="me-3">
                  <h4 class="nav-heading fs-md mb-1"><a class="fw-medium" href="shop-single.html">Running Sneakers, Collection</a></h4>
                  <div class="d-flex align-items-center fs-sm"><span class="me-2">$145.00</span><span class="me-2">x</span>
                    <input class="form-control form-control-sm px-2" type="number" style="max-width: 3.5rem;" min="1" value="1">
                  </div>
                </div>
                <div class="ps-3 border-start"><a class="d-block text-danger text-decoration-none fs-xl" href="#" data-bs-toggle="tooltip" title="Remove"><i class="ai-x-circle"></i></a></div>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center mb-3"><a class="d-block flex-shrink-0" href="shop-single.html"><img class="rounded" src="img/demo/shop-homepage/thumbnails/06.jpg" alt="Product" width="60"></a>
            <div class="w-100 ps-2 ms-1">
              <div class="d-flex align-items-center justify-content-between">
                <div class="me-3">
                  <h4 class="nav-heading fs-md mb-1"><a class="fw-medium" href="shop-single.html">Wireless Bluetooth Headset</a></h4>
                  <div class="d-flex align-items-center fs-sm"><span class="me-2">$258.00</span><span class="me-2">x</span>
                    <input class="form-control form-control-sm px-2" type="number" style="max-width: 3.5rem;" min="1" value="1">
                  </div>
                </div>
                <div class="ps-3 border-start"><a class="d-block text-danger text-decoration-none fs-xl" href="#" data-bs-toggle="tooltip" title="Remove"><i class="ai-x-circle"></i></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="offcanvas-footer d-block border-top px-4 mb-2">
          <div class="d-flex justify-content-between mb-4"><span>Total:</span><span class="h6 mb-0">$776.99</span></div><a class="btn btn-primary btn-sm d-block w-100" href="checkout.html"><i class="ai-credit-card fs-base me-2"></i>Checkout</a>
        </div>
      </div>
      <!-- Navbar (Solid background + shadow)-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <header class="header">
        <div class="topbar topbar-dark bg-dark">
          <div class="container d-md-flex align-items-center px-0 px-xl-3">
            <div class="d-none d-md-block text-nowrap me-3"><i class="ai-phone fs-base text-muted me-1 align-middle"></i><span class="text-muted me-2">Support</span><a class="topbar-link me-1" href="tel:9107848015">910-784-8015</a></div>
            <div class="d-flex text-md-end ms-md-auto"><a class="topbar-link pe-2 me-4" href="order-tracking.html"><i class="ai-map-pin fs-base opacity-60 me-1 align-middle"></i>Track <span class='d-none d-sm-inline'>your order</span></a>
              <div class="dropdown ms-auto ms-md-0 me-3"><a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><img class="me-2" src="img/flags/en.png" alt="English" width="20">Eng</a>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#"><img class="me-2" src="img/flags/fr.png" alt="Français" width="20">Français</a><a class="dropdown-item" href="#"><img class="me-2" src="img/flags/de.png" alt="Deutsch" width="20">Deutsch</a><a class="dropdown-item" href="#"><img class="mt-n1 me-2" src="img/flags/it.png" alt="Italiano" width="20">Italiano</a></div>
              </div>
              <div class="dropdown"><a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown">$ Dollar (US)</a>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">€ Euro (EU)</a><a class="dropdown-item" href="#">£ Pound (UK)</a><a class="dropdown-item" href="#">¥ Yen (JP)</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="navbar navbar-expand-lg navbar-light bg-light navbar-shadow navbar-sticky" data-scroll-header data-fixed-element>
          <div class="navbar-search bg-light">
            <div class="container d-flex flex-nowrap align-items-center"><i class="ai-search fs-xl"></i>
              <input class="form-control form-control-xl navbar-search-field" type="text" placeholder="Search site">
              <div class="d-none d-sm-block flex-shrink-0 ps-2 me-4 border-start border-end" style="width: 10rem;">
                <select class="form-select ps-2 pe-0">
                  <option value="all">All categories</option>
                  <option value="clothing">Clothing</option>
                  <option value="shoes">Shoes</option>
                  <option value="electronics">Electronics</option>
                  <option value="accessoriies">Accessories</option>
                  <option value="software">Software</option>
                  <option value="automotive">Automotive</option>
                </select>
              </div>
              <div class="d-flex align-items-center"><span class="text-muted fs-xs d-none d-sm-inline">Close</span>
                <button class="btn-close p-2" type="button" data-bs-toggle="search"></button>
              </div>
            </div>
          </div>
          <div class="container px-0 px-xl-3">
            <button class="navbar-toggler ms-n2 me-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu"><span class="navbar-toggler-icon"></span></button><a class="navbar-brand flex-shrink-0 order-lg-1 mx-auto ms-lg-0 pe-lg-2 me-lg-4" href="index.html"><img class="d-none d-lg-block" src="img/logo/logo-dark.png" alt="Around" width="153"><img class="d-lg-none" src="img/logo/logo-icon.png" alt="Around" width="58"></a>
            <div class="d-flex align-items-center order-lg-3 ms-lg-auto">
              <div class="navbar-tool"><a class="navbar-tool-icon-box me-2" href="#" data-bs-toggle="search"><i class="ai-search"></i></a></div>
              <div class="navbar-tool d-none d-sm-flex"><a class="navbar-tool-icon-box me-2" href="#modal-signin" data-bs-toggle="modal" data-view="#modal-signin-view"><i class="ai-user"></i></a></div>
              <div class="border-start me-2" style="height: 30px;"></div>
              <div class="navbar-tool me-2"><a class="navbar-tool-icon-box" href="#" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart"><i class="ai-shopping-cart"></i><span class="navbar-tool-badge">3</span></a></div>
            </div>
            <div class="offcanvas offcanvas-collapse order-lg-2" id="primaryMenu">
              <div class="offcanvas-header navbar-shadow">
                <h5 class="mt-1 mb-0">Menu</h5>
                <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <!-- Menu-->
                <ul class="navbar-nav">
                  <li class="nav-item dropdown dropdown-mega active"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Demos</a>
                    <div class="dropdown-menu"><a class="dropdown-column dropdown-column-img bg-secondary" href="index.html" style="background-image: url(img/demo/menu-banner.jpg);"></a>
                      <div class="dropdown-column"><a class="dropdown-item" href="index.html">Web Template Presentation</a><a class="dropdown-item" href="demo-business-consulting.html">Business Consulting</a><a class="dropdown-item" href="demo-shop-homepage.html">Shop Homepage</a><a class="dropdown-item" href="demo-booking-directory.html">Booking / Directory</a><a class="dropdown-item" href="demo-creative-agency.html">Creative Agency</a><a class="dropdown-item" href="demo-web-studio.html">Web Studio</a><a class="dropdown-item" href="demo-product-software.html">Product Landing - Software</a></div>
                      <div class="dropdown-column"><a class="dropdown-item" href="demo-product-gadget.html">Product Landing - Gadget</a><a class="dropdown-item" href="demo-mobile-app.html">Mobile App Showcase</a><a class="dropdown-item" href="demo-coworking-space.html">Coworking Space</a><a class="dropdown-item" href="demo-event-landing.html">Event Landing</a><a class="dropdown-item" href="demo-marketing-seo.html">Digital Marketing &amp; SEO</a><a class="dropdown-item" href="demo-food-blog.html">Food Blog</a><a class="dropdown-item" href="demo-personal-portfolio.html">Personal Portfolio</a></div>
                    </div>
                  </li>
                  <li class="nav-item dropdown dropdown-mega"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Templates</a>
                    <div class="dropdown-menu">
                      <div class="dropdown-column mb-2 mb-lg-0">
                        <h5 class="dropdown-header">Blog</h5><a class="dropdown-item" href="blog-grid-rs.html">Grid Right Sidebar</a><a class="dropdown-item" href="blog-grid-ls.html">Grid Left Sidebar</a><a class="dropdown-item" href="blog-grid-ns.html">Grid No Sidebar</a><a class="dropdown-item" href="blog-list-rs.html">List Right Sidebar</a><a class="dropdown-item" href="blog-list-ls.html">List Left Sidebar</a><a class="dropdown-item" href="blog-list-ns.html">List No Sidebar</a><a class="dropdown-item" href="blog-single-rs.html">Single Post Right Sidebar</a><a class="dropdown-item" href="blog-single-ls.html">Single Post Left Sidebar</a><a class="dropdown-item" href="blog-single-ns.html">Single Post No Sidebar</a>
                      </div>
                      <div class="dropdown-column mb-2 mb-lg-0">
                        <h5 class="dropdown-header">Portfolio</h5><a class="dropdown-item" href="portfolio-style-1.html">Grid Style 1</a><a class="dropdown-item" href="portfolio-style-2.html">Grid Style 2</a><a class="dropdown-item" href="portfolio-style-3.html">Grid Style 3</a><a class="dropdown-item" href="portfolio-single-side-gallery-grid.html">Project Side Gallery (Grid)</a><a class="dropdown-item" href="portfolio-single-side-gallery-list.html">Project Side Gallery (List)</a><a class="dropdown-item" href="portfolio-single-carousel.html">Project Carousel</a><a class="dropdown-item" href="portfolio-single-wide-gallery.html">Project Wide Gallery</a>
                      </div>
                      <div class="dropdown-column mb-2 mb-lg-0">
                        <h5 class="dropdown-header">Shop</h5><a class="dropdown-item" href="shop-ls.html">Grid Left Sidebar</a><a class="dropdown-item" href="shop-rs.html">Grid Right Sidebar</a><a class="dropdown-item" href="shop-ns.html">Grid No Sidebar</a><a class="dropdown-item" href="shop-single.html">Single Product</a><a class="dropdown-item" href="checkout.html">Cart &amp; Checkout</a><a class="dropdown-item" href="order-tracking.html">Order Tracking</a>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Account</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Dashboard</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="dashboard-orders.html">Orders</a></li>
                          <li><a class="dropdown-item" href="dashboard-sales.html">Sales</a></li>
                          <li><a class="dropdown-item" href="dashboard-messages.html">Messages</a></li>
                          <li><a class="dropdown-item" href="dashboard-followers.html">Followers</a></li>
                          <li><a class="dropdown-item" href="dashboard-reviews.html">Reviews</a></li>
                          <li><a class="dropdown-item" href="dashboard-favorites.html">Favorites</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Account Settings</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="account-profile.html">Profile Info</a></li>
                          <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a></li>
                          <li><a class="dropdown-item" href="account-notifications.html">Notifications</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="signin-illustration.html">Sign In - Illustration</a></li>
                      <li><a class="dropdown-item" href="signin-image.html">Sign In - Image</a></li>
                      <li><a class="dropdown-item" href="signin-signup.html">Sign In - Sign Up</a></li>
                      <li><a class="dropdown-item" href="password-recovery.html">Password Recovery</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="about.html">About</a></li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Contacts</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="contacts-v1.html">Contacts v.1</a></li>
                          <li><a class="dropdown-item" href="contacts-v2.html">Contacts v.2</a></li>
                          <li><a class="dropdown-item" href="contacts-v3.html">Contacts v.3</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Help Center</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="help-topics.html">Help Topics</a></li>
                          <li><a class="dropdown-item" href="help-single-topic.html">Single Topic</a></li>
                          <li><a class="dropdown-item" href="help-submit-request.html">Submit a Request</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">404 Not Found</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="404-simple.html">Simple Text</a></li>
                          <li><a class="dropdown-item" href="404-illustration.html">Illustration</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Coming Soon</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="coming-soon-image.html">Image</a></li>
                          <li><a class="dropdown-item" href="coming-soon-illustration.html">Illustration</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Docs / UI Kit</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="docs/dev-setup.html">
                          <div class="d-flex align-items-center">
                            <div class="fs-xl text-muted"><i class="ai-file-text"></i></div>
                            <div class="ps-3"><span class="d-block text-heading">Documentation</span><small class="d-block text-muted">Kick-start customization</small></div>
                          </div></a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="components/typography.html">
                          <div class="d-flex align-items-center">
                            <div class="fs-xl text-muted"><i class="ai-layers"></i></div>
                            <div class="ps-3"><span class="d-block text-heading">UI Kit<span class="badge bg-danger ms-2">50+</span></span><small class="d-block text-muted">Flexible components</small></div>
                          </div></a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="docs/changelog.html">
                          <div class="d-flex align-items-center">
                            <div class="fs-xl text-muted"><i class="ai-edit"></i></div>
                            <div class="ps-3"><span class="d-block text-heading">Changelog<span class="badge bg-success ms-2">v2.4.0</span></span><small class="d-block text-muted">Regular updates</small></div>
                          </div></a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="mailto:support@createx.studio">
                          <div class="d-flex align-items-center">
                            <div class="fs-xl text-muted"><i class="ai-life-buoy"></i></div>
                            <div class="ps-3"><span class="d-block text-heading">Support</span><small class="d-block text-muted">support@createx.studio</small></div>
                          </div></a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="offcanvas-footer border-top"><a class="btn btn-translucent-primary d-block w-100" href="#modal-signin" data-bs-toggle="modal" data-view="#modal-signin-view"><i class="ai-user fs-lg me-2"></i>Sign in</a></div>
            </div>
          </div>
        </div>
      </header>
   
      <!-- Page content-->
      <!-- Hero - Featured Products (tabs)-->
      <section class="position-relative bg-gradient pt-5 pt-lg-6 pb-7 mb-7">
        <div class="shape shape-bottom shape-curve bg-body">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
            <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
          </svg>
        </div>
        <!-- Tabs-->
        <div class="container pb-7">
          <div class="row align-items-center pb-7">
            <div class="col-lg-3">
              <ul class="nav nav-tabs media-tabs media-tabs-light justify-content-center justify-content-lg-start pb-3 mb-4 pb-lg-0 mb-lg-0" role="tablist">
                <li class="nav-item me-3 mb-3"><a class="nav-link active" href="#camera" data-bs-toggle="tab" role="tab">
                    <div class="d-flex align-items-center"><img class="flex-shrink-0 rounded" src="img/demo/shop-homepage/thumbnails/01.jpg" alt="Product" width="60">
                      <div class="w-100 ps-2 ms-1">
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="fs-sm pe-1">Outdoor HD Cloud Security Camera</div><i class="ai-chevron-right lead ms-2 me-1"></i>
                        </div>
                      </div>
                    </div></a></li>
                <li class="nav-item me-3 mb-3"><a class="nav-link" href="#sneakers" data-bs-toggle="tab" role="tab">
                    <div class="d-flex align-items-center"><img class="flex-shrink-0 rounded" src="img/demo/shop-homepage/thumbnails/02.jpg" alt="Product" width="60">
                      <div class="w-100 ps-2 ms-1">
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="fs-sm pe-1">Running Sneakers Sports Collection</div><i class="ai-chevron-right lead ms-2 me-1"></i>
                        </div>
                      </div>
                    </div></a></li>
                <li class="nav-item me-3 mb-3"><a class="nav-link" href="#vr" data-bs-toggle="tab" role="tab">
                    <div class="d-flex align-items-center"><img class="flex-shrink-0 rounded" src="img/demo/shop-homepage/thumbnails/03.jpg" alt="Product" width="60">
                      <div class="w-100 ps-2 ms-1">
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="fs-sm pe-1">Wireless Virtual Reality Headset</div><i class="ai-chevron-right lead ms-2 me-1"></i>
                        </div>
                      </div>
                    </div></a></li>
              </ul>
            </div>
            <div class="col-lg-9">
              <div class="tab-content">
                <div class="tab-pane fade show active" id="camera">
                  <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2 pb-1 mb-4 pb-lg-0 mb-lg-0">
                      <div class="mx-auto" style="max-width: 443px;"><img src="img/demo/shop-homepage/hero/01.png" alt="Security Camera"></div>
                    </div>
                    <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                      <div class="ps-xl-5">
                        <h2 class="h1 text-light">Outdoor HD Cloud Security Camera</h2>
                        <p class="fs-lg text-light mb-lg-5">Stay connected 24/7. Free trial for 30 days</p><a class="btn btn-translucent-light" href="#">Get now - $45.00</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="sneakers">
                  <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2 pb-1 mb-4 pb-lg-0 mb-lg-0">
                      <div class="mx-auto" style="max-width: 443px;"><img src="img/demo/shop-homepage/hero/02.png" alt="Running Sneakers"></div>
                    </div>
                    <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                      <div class="ps-xl-5">
                        <h2 class="h1 text-light">Running Sneakers Sports Collection</h2>
                        <p class="fs-lg text-light mb-lg-5">Run like never before. Money back guarantee</p><a class="btn btn-translucent-light" href="#">Get now - $99.00</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="vr">
                  <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2 pb-1 mb-4 pb-lg-0 mb-lg-0">
                      <div class="mx-auto" style="max-width: 443px;"><img src="img/demo/shop-homepage/hero/03.png" alt="VR Headset"></div>
                    </div>
                    <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                      <div class="ps-xl-5">
                        <h2 class="h1 text-light">Wireless Virtual Reality Headset</h2>
                        <p class="fs-lg text-light mb-lg-5">Run like never before. Money back guarantee</p><a class="btn btn-translucent-light" href="#">Get now - $180.00</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Categories (carousel)-->
      <section class="container position-relative zindex-5" style="margin-top: -290px;">
        <div class="tns-carousel-wrapper">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 3, &quot;controls&quot;: false, &quot;gutter&quot;: 24, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;560&quot;:{&quot;items&quot;:2},&quot;850&quot;:{&quot;items&quot;:3}}}">
            <!-- Category-->
            <div class="pb-2"><a class="card card-category shadow mx-1" href="#"><span class="badge badge-lg badge-floating badge-floating-end bg-success">From $8.99</span><img class="card-img-top" src="img/shop/categories/01.jpg" alt="Clothing">
                <div class="card-body">
                  <h4 class="card-title">Clothing</h4>
                </div></a></div>
            <!-- Category-->
            <div class="pb-2"><a class="card card-category shadow mx-1" href="#"><span class="badge badge-lg badge-floating badge-floating-end bg-info">From $14.99</span><img class="card-img-top" src="img/shop/categories/02.jpg" alt="Electronics">
                <div class="card-body">
                  <h4 class="card-title">Electronics</h4>
                </div></a></div>
            <!-- Category-->
            <div class="pb-2"><a class="card card-category shadow mx-1" href="#"><span class="badge badge-lg badge-floating badge-floating-end bg-danger">From $5.99</span><img class="card-img-top" src="img/shop/categories/03.jpg" alt="Accessories">
                <div class="card-body">
                  <h4 class="card-title">Accessories</h4>
                </div></a></div>
            <!-- Category-->
            <div class="pb-2"><a class="card card-category shadow mx-1" href="#"><span class="badge badge-lg badge-floating badge-floating-end bg-warning">From $7.99</span><img class="card-img-top" src="img/shop/categories/04.jpg" alt="Kids">
                <div class="card-body">
                  <h4 class="card-title">Kids</h4>
                </div></a></div>
          </div>
        </div>
      </section>
      <!-- Trending products (grid)-->
      <section class="container pt-5 mt-5 mt-md-0 pt-md-6 pt-lg-7">
        <h2 class="text-center mb-5">Trending products</h2>
        <div class="row pb-1">
          <!-- Item-->
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
            <div class="card card-product card-hover"><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/01.jpg" alt="Product thumbnail"></a>
              <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Men's clothing</a>
                <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">Simple Cotton Gray T-shirt</a></h3><span class="text-heading fw-semibold">$19.00</span>
              </div>
              <div class="card-footer">
                <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i><i class="sr-star ai-star"></i>
                </div>
                <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
            <div class="card card-product card-hover"><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/02.jpg" alt="Product thumbnail"></a>
              <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Electronics</a>
                <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">Wireless Headphones</a></h3><span class="text-heading fw-semibold">$165.00</span>
              </div>
              <div class="card-footer">
                <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                </div>
                <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
            <div class="card card-product card-hover"><span class="badge badge-floating rounded-pill bg-success">New</span><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/03.jpg" alt="Product thumbnail"></a>
              <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Accessories</a>
                <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">Military Cotton Cap</a></h3><span class="text-heading fw-semibold">$28.00</span>
              </div>
              <div class="card-footer">
                <div class="star-rating mt-n1"><i class="sr-star ai-star"></i><i class="sr-star ai-star"></i><i class="sr-star ai-star"></i><i class="sr-star ai-star"></i><i class="sr-star ai-star"></i>
                </div>
                <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
            <div class="card card-product card-hover"><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/09.jpg" alt="Product thumbnail"></a>
              <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Women's shoes</a>
                <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">Women Colorblock Sneakers</a></h3><span class="text-heading fw-semibold">$154.00</span>
              </div>
              <div class="card-footer">
                <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                </div>
                <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
            <div class="card card-product card-hover"><span class="badge badge-floating rounded-pill bg-danger">Sale</span><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/04.jpg" alt="Product thumbnail"></a>
              <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Electronics</a>
                <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">360 Degrees Camera</a></h3>
                <del class="fs-sm text-muted me-1">$120.40</del><span class="text-heading fw-semibold">$98.75</span>
              </div>
              <div class="card-footer">
                <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                </div>
                <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
            <div class="card card-product card-hover"><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/07.jpg" alt="Product thumbnail"></a>
              <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Accessories</a>
                <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">3-Color Sun Stash Hat</a></h3><span class="text-heading fw-semibold">$25.99</span>
              </div>
              <div class="card-footer">
                <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i><i class="sr-star ai-star"></i>
                </div>
                <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
            <div class="card card-product card-hover"><span class="badge badge-floating rounded-pill bg-warning">Top rated</span><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/06.jpg" alt="Product thumbnail"></a>
              <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Backpacks</a>
                <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">Vintage Travel Backpack</a></h3><span class="text-heading fw-semibold">$82.00</span>
              </div>
              <div class="card-footer">
                <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i>
                </div>
                <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
            <div class="card card-product card-hover"><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/08.jpg" alt="Product thumbnail"></a>
              <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Electronics</a>
                <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">Speaker with Voice Control</a></h3><span class="text-heading fw-semibold">$49.99</span>
              </div>
              <div class="card-footer">
                <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                </div>
                <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
              </div>
            </div>
          </div>
          <!-- Item-->
          <div class="col-lg-3 col-md-4 col-sm-6 d-none d-md-block d-lg-none mb-grid-gutter">
            <div class="card card-product card-hover"><a class="card-img-top" href="shop-single.html"><img src="img/shop/catalog/05.jpg" alt="Product thumbnail"></a>
              <div class="card-body"><a class="meta-link fs-xs mb-1" href="#">Men's shoes</a>
                <h3 class="fs-md fw-medium mb-2"><a class="meta-link" href="shop-single.html">Sport Running Sneakers</a></h3><span class="text-heading fw-semibold">$140.00</span>
              </div>
              <div class="card-footer">
                <div class="star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                </div>
                <div class="d-flex align-items-center"><a class="btn-wishlist" href="#"><i class="ai-heart"></i><span class="btn-tooltip">Wishlist</span></a><span class="btn-divider"></span><a class="btn-addtocart" href="#"><i class="ai-shopping-cart"></i><span class="btn-tooltip">To Cart</span></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center"><a class="btn btn-outline-primary" href="shop-ls.html">More products</a></div>
      </section>
      <!-- New arrivals (widget) + Promo banner-->
      <section class="container pt-5 mt-3 mt-md-0 pt-md-6 pt-lg-7">
        <div class="row">
          <div class="col-lg-4 d-none d-lg-block">
            <div class="card h-100 p-4">
              <div class="p-2">
                <div class="d-flex justify-content-between align-items-center mb-4 pb-1">
                  <h3 class="fs-xl mb-0">New arrivals</h3><a class="fs-sm fw-medium me-n2" href="shop-ls.html">View more<i class="ai-chevron-right fs-lg ms-1 align-middle"></i></a>
                </div>
                <div class="d-flex align-items-center pb-2 mb-1"><a class="d-block flex-shrink-0" href="#"><img class="rounded" src="img/demo/shop-homepage/thumbnails/04.jpg" alt="Product" width="60"></a>
                  <div class="ps-2 ms-1">
                    <h4 class="fs-md nav-heading mb-1"><a class="fw-medium" href="#">Block-colored Hooded Top</a></h4>
                    <p class="fs-sm mb-0">$27.50</p>
                  </div>
                </div>
                <div class="d-flex align-items-center pb-2 mb-1"><a class="d-block flex-shrink-0" href="#"><img class="rounded" src="img/demo/shop-homepage/thumbnails/05.jpg" alt="Product" width="60"></a>
                  <div class="ps-2 ms-1">
                    <h4 class="fs-md nav-heading mb-1"><a class="fw-medium" href="#">Smart Watch Series 5</a></h4>
                    <p class="fs-sm mb-0">$364.99</p>
                  </div>
                </div>
                <div class="d-flex align-items-center pb-2 mb-1"><a class="d-block flex-shrink-0" href="#"><img class="rounded" src="img/demo/shop-homepage/thumbnails/02.jpg" alt="Product" width="60"></a>
                  <div class="ps-2 ms-1">
                    <h4 class="fs-md nav-heading mb-1"><a class="fw-medium" href="#">Running Sneakers, Collection</a></h4>
                    <p class="fs-sm mb-0">$145.00</p>
                  </div>
                </div>
                <div class="d-flex align-items-center"><a class="d-block flex-shrink-0" href="#"><img class="rounded" src="img/demo/shop-homepage/thumbnails/06.jpg" alt="Product" width="60"></a>
                  <div class="ps-2 ms-1">
                    <h4 class="fs-md nav-heading mb-1"><a class="fw-medium" href="#">Bluetooth Headset</a></h4>
                    <p class="fs-sm mb-0">$258.00</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="bg-secondary rounded-3 pt-5 px-3 ps-sm-5 pe-sm-2">
              <div class="d-sm-flex align-items-end text-center text-sm-start ps-2">
                <div class="me-sm-n6 pb-5">
                  <h2 class="h1 text-sm-nowrap">Virtual Reality</h2>
                  <p class="pb-2 mx-auto mx-sm-0" style="max-width: 14rem;">Gadgets from top brands at discounted price</p>
                  <div class="d-inline-block bg-faded-danger text-danger fs-sm fw-medium rounded-1 px-3 py-2">Limited time offer</div>
                  <div class="countdown pt-3 h4 justify-content-center justify-content-sm-start" data-countdown="10/01/2021 07:00:00 PM">
                    <div class="countdown-days"><span class="countdown-value">0</span><span class="countdown-label fs-xs text-muted">Days</span></div>
                    <div class="countdown-hours"><span class="countdown-value">0</span><span class="countdown-label fs-xs text-muted">Hours</span></div>
                    <div class="countdown-minutes"><span class="countdown-value">0</span><span class="countdown-label fs-xs text-muted">Mins</span></div>
                  </div><a class="btn btn-primary" href="#">Get one now</a>
                </div>
                <div><img src="img/demo/shop-homepage/banner.png" alt="Promo banner"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Brands-->
      <section class="container pt-5 mt-3 mt-md-0 pt-md-6 pt-lg-7 pb-md-4">
        <h2 class="mb-5 text-center">Shop by brand</h2>
        <div class="row">
          <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
              <div class="card-body px-1 py-0 text-center">
                <div class="swap-image"><img class="swap-to" src="img/shop/brands/01_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/01_gray.png" alt="Brand logo" width="150"></div>
              </div></a></div>
          <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
              <div class="card-body px-1 py-0 text-center">
                <div class="swap-image"><img class="swap-to" src="img/shop/brands/02_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/02_gray.png" alt="Brand logo" width="150"></div>
              </div></a></div>
          <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
              <div class="card-body px-1 py-0 text-center">
                <div class="swap-image"><img class="swap-to" src="img/shop/brands/03_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/03_gray.png" alt="Brand logo" width="150"></div>
              </div></a></div>
          <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
              <div class="card-body px-1 py-0 text-center">
                <div class="swap-image"><img class="swap-to" src="img/shop/brands/04_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/04_gray.png" alt="Brand logo" width="150"></div>
              </div></a></div>
          <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
              <div class="card-body px-1 py-0 text-center">
                <div class="swap-image"><img class="swap-to" src="img/shop/brands/05_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/05_gray.png" alt="Brand logo" width="150"></div>
              </div></a></div>
          <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
              <div class="card-body px-1 py-0 text-center">
                <div class="swap-image"><img class="swap-to" src="img/shop/brands/06_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/06_gray.png" alt="Brand logo" width="150"></div>
              </div></a></div>
          <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
              <div class="card-body px-1 py-0 text-center">
                <div class="swap-image"><img class="swap-to" src="img/shop/brands/07_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/07_gray.png" alt="Brand logo" width="150"></div>
              </div></a></div>
          <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
              <div class="card-body px-1 py-0 text-center">
                <div class="swap-image"><img class="swap-to" src="img/shop/brands/08_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/08_gray.png" alt="Brand logo" width="150"></div>
              </div></a></div>
          <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
              <div class="card-body px-1 py-0 text-center">
                <div class="swap-image"><img class="swap-to" src="img/shop/brands/09_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/09_gray.png" alt="Brand logo" width="150"></div>
              </div></a></div>
          <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
              <div class="card-body px-1 py-0 text-center">
                <div class="swap-image"><img class="swap-to" src="img/shop/brands/10_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/10_gray.png" alt="Brand logo" width="150"></div>
              </div></a></div>
          <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
              <div class="card-body px-1 py-0 text-center">
                <div class="swap-image"><img class="swap-to" src="img/shop/brands/11_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/11_gray.png" alt="Brand logo" width="150"></div>
              </div></a></div>
          <div class="col-md-3 col-sm-4 col-6 mb-grid-gutter"><a class="card border-0 shadow card-hover py-3 py-sm-4" href="#">
              <div class="card-body px-1 py-0 text-center">
                <div class="swap-image"><img class="swap-to" src="img/shop/brands/12_color.png" alt="Brand logo" width="150"><img class="swap-from" src="img/shop/brands/12_gray.png" alt="Brand logo" width="150"></div>
              </div></a></div>
        </div>
      </section>
      <!-- Reviews-->
      <section class="bg-secondary py-5 py-md-6 mt-4 mt-md-5">
        <div class="container-fluid py-3 py-md-0">
          <h2 class="mb-5 text-center">Trusted reviews</h2>
          <div class="tns-carousel-wrapper">
            <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16}, &quot;520&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 12}, &quot;860&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 23}, &quot;1080&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 23}, &quot;1380&quot;:{&quot;items&quot;:5, &quot;gutter&quot;: 23}, &quot;1600&quot;:{&quot;items&quot;:6, &quot;gutter&quot;: 23}}}">
              <!-- Review Card-->
              <div class="py-2">
                <div class="card h-100 border-0 shadow mx-1">
                  <div class="card-body"><a class="d-flex align-items-center nav-heading mb-3" href="#"><img src="img/demo/shop-homepage/thumbnails/01.jpg" alt="Product thumb" width="60">
                      <div class="fs-md fw-medium ps-2 ms-1">Outdoor HD Cloud Security Camera</div></a>
                    <div class="mb-2 pb-1 star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                    </div>
                    <p class="fs-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                  </div>
                  <footer class="fs-sm px-4 pb-4">
                    <div class="d-flex align-items-center border-top mb-n2 pt-3"><img class="rounded-circle" src="img/testimonials/01.jpg" alt="Emma Brown" width="42">
                      <div class="text-heading fw-medium ps-2 ms-1 mt-n1">Emma Brown</div>
                    </div>
                  </footer>
                </div>
              </div>
              <!-- From Instagram-->
              <div class="py-2"><a class="card h-100 border-0 shadow mx-1" href="#"><span class="card-floating-icon"><i class="ai-instagram"></i></span><img class="card-img-top" src="img/demo/shop-homepage/instagram/01.jpg" alt="Image">
                  <footer class="fs-sm mt-auto py-2 px-4">
                    <div class="d-flex align-items-center py-2"><img class="rounded-circle" src="img/testimonials/02.jpg" alt="@morni.janeffel" width="42">
                      <div class="text-heading fw-medium ps-2 ms-1 mt-n1">@morni.janeffel</div>
                    </div>
                  </footer></a></div>
              <!-- Review Card-->
              <div class="py-2">
                <div class="card h-100 border-0 shadow mx-1">
                  <div class="card-body"><a class="d-flex align-items-center nav-heading mb-3" href="#"><img src="img/demo/shop-homepage/thumbnails/02.jpg" alt="Product thumb" width="60">
                      <div class="fs-md fw-medium ps-2 ms-1">Running Sneakers, Sports Collection</div></a>
                    <div class="mb-2 pb-1 star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i>
                    </div>
                    <p class="fs-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                  </div>
                  <footer class="fs-sm px-4 pb-4">
                    <div class="d-flex align-items-center border-top mb-n2 pt-3"><img class="rounded-circle" src="img/testimonials/06.jpg" alt="Edward Chew" width="42">
                      <div class="text-heading fw-medium ps-2 ms-1 mt-n1">Edward Chew</div>
                    </div>
                  </footer>
                </div>
              </div>
              <!-- From Instagram-->
              <div class="py-2"><a class="card h-100 border-0 shadow mx-1" href="#"><span class="card-floating-icon"><i class="ai-instagram"></i></span><img class="card-img-top" src="img/demo/shop-homepage/instagram/02.jpg" alt="Image">
                  <footer class="fs-sm mt-auto py-2 px-4">
                    <div class="d-flex align-items-center py-2"><img class="rounded-circle" src="img/testimonials/09.jpg" alt="@jane.palson" width="42">
                      <div class="text-heading fw-medium ps-2 ms-1 mt-n1">@jane.palson</div>
                    </div>
                  </footer></a></div>
              <!-- Review Card-->
              <div class="py-2">
                <div class="card h-100 border-0 shadow mx-1">
                  <div class="card-body"><a class="d-flex align-items-center nav-heading mb-3" href="#"><img src="img/demo/shop-homepage/thumbnails/06.jpg" alt="Product thumb" width="60">
                      <div class="fs-md fw-medium ps-2 ms-1">Wireless Bluetooth Headset</div></a>
                    <div class="mb-2 pb-1 star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                    </div>
                    <p class="fs-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                  </div>
                  <footer class="fs-sm px-4 pb-4">
                    <div class="d-flex align-items-center border-top mb-n2 pt-3"><img class="rounded-circle" src="img/testimonials/03.jpg" alt="Tim Brooks" width="42">
                      <div class="text-heading fw-medium ps-2 ms-1 mt-n1">Tim Brooks</div>
                    </div>
                  </footer>
                </div>
              </div>
              <!-- From Instagram-->
              <div class="py-2"><a class="card h-100 border-0 shadow mx-1" href="#"><span class="card-floating-icon"><i class="ai-instagram"></i></span><img class="card-img-top" src="img/demo/shop-homepage/instagram/03.jpg" alt="Image">
                  <footer class="fs-sm mt-auto py-2 px-4">
                    <div class="d-flex align-items-center py-2"><img class="rounded-circle" src="img/testimonials/05.jpg" alt="@sarah.cole" width="42">
                      <div class="text-heading fw-medium ps-2 ms-1 mt-n1">@sarah.cole</div>
                    </div>
                  </footer></a></div>
              <!-- Review Card-->
              <div class="py-2">
                <div class="card h-100 border-0 shadow mx-1">
                  <div class="card-body"><a class="d-flex align-items-center nav-heading mb-3" href="#"><img src="img/demo/shop-homepage/thumbnails/04.jpg" alt="Product thumb" width="60">
                      <div class="fs-md fw-medium ps-2 ms-1">Block-colored Hooded Top</div></a>
                    <div class="mb-2 pb-1 star-rating mt-n1"><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star-filled active"></i><i class="sr-star ai-star"></i>
                    </div>
                    <p class="fs-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                  </div>
                  <footer class="fs-sm px-4 pb-4">
                    <div class="d-flex align-items-center border-top mb-n2 pt-3"><img class="rounded-circle" src="img/testimonials/04.jpg" alt="Michael Smith" width="42">
                      <div class="text-heading fw-medium ps-2 ms-1 mt-n1">Michael Smith</div>
                    </div>
                  </footer>
                </div>
              </div>
              <!-- From Instagram-->
              <div class="py-2"><a class="card h-100 border-0 shadow mx-1" href="#"><span class="card-floating-icon"><i class="ai-instagram"></i></span><img class="card-img-top" src="img/demo/shop-homepage/instagram/04.jpg" alt="Image">
                  <footer class="fs-sm mt-auto py-2 px-4">
                    <div class="d-flex align-items-center py-2"><img class="rounded-circle" src="img/testimonials/02.jpg" alt="@morni.janeffel" width="42">
                      <div class="text-heading fw-medium ps-2 ms-1 mt-n1">@morni.janeffel</div>
                    </div>
                  </footer></a></div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Footer-->
    <footer class="footer bg-dark pt-5 pt-md-6">
      <div class="container pt-3 pb-0 pt-md-0 pb-md-3">
        <div class="row mb-4">
          <div class="col-md-4">
            <div class="widget widget-light pb-2 mb-4">
              <h4 class="widget-title">Shop departments</h4>
              <ul>
                <li><a class="widget-link" href="#">Closing</a></li>
                <li><a class="widget-link" href="#">Shoes</a></li>
                <li><a class="widget-link" href="#">Electronics</a></li>
                <li><a class="widget-link" href="#">Accessories</a></li>
                <li><a class="widget-link" href="#">Software</a></li>
                <li><a class="widget-link" href="#">Automotive</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget widget-light pb-2 mb-4">
              <h4 class="widget-title">Customer zone</h4>
              <ul>
                <li><a class="widget-link" href="#">Your account</a></li>
                <li><a class="widget-link" href="#">Shipping rates &amp; policies</a></li>
                <li><a class="widget-link" href="#">Refunds &amp; replacements</a></li>
                <li><a class="widget-link" href="#">Order tracking</a></li>
                <li><a class="widget-link" href="#">Delivery info</a></li>
                <li><a class="widget-link" href="#">Taxes &amp; fees</a></li>
                <li><a class="widget-link" href="#">News</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget widget-light pb-3 mb-4" style="max-width: 24rem;">
              <h3 class="widget-title">Stay informed</h3>
              <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                <div class="input-group flex-nowrap"><i class="ai-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                  <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
                  <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                </div>
                <div class="form-text">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</div>
                <div class="subscription-status"></div>
              </form>
            </div>
            <div class="widget widget-light pt-1 mb-4">
              <h4 class="widget-title">Download our app</h4>
              <div class="d-flex flex-wrap pt-1"><a class="btn-market btn-outline btn-apple me-3 mb-3" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a><a class="btn-market btn-outline btn-google mb-3" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-darker pt-2">
        <div class="container py-sm-3">
          <div class="row pb-4 mb-2 pt-5 py-md-5">
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex align-items-center"><i class="ai-truck text-primary" style="font-size: 2.125rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Fast and free delivery</h6>
                  <p class="mb-0 fs-xs text-light opacity-50">Free delivery for all orders over $200</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex align-items-center"><i class="ai-refresh-cw text-primary" style="font-size: 2.125rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Money back guarantee</h6>
                  <p class="mb-0 fs-xs text-light opacity-50">We return money within 30 days</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex align-items-center"><i class="ai-life-buoy text-primary" style="font-size: 2.125rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">24/7 customer support</h6>
                  <p class="mb-0 fs-xs text-light opacity-50">Friendly 24/7 customer support</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex align-items-center"><i class="ai-credit-card text-primary" style="font-size: 2.125rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Secure online payment</h6>
                  <p class="mb-0 fs-xs text-light opacity-50">We possess SSL / Secure сertificate</p>
                </div>
              </div>
            </div>
          </div>
          <hr class="hr-light my-0 mb-5">
          <div class="d-sm-flex align-items-center mb-4 pb-3">
            <div class="d-flex flex-wrap align-items-center me-3"><a class="d-block me-grid-gutter mt-n1 mb-3" href="index.html" style="width: 108px;"><img src="img/logo/logo-footer.png" alt="Around"></a>
              <ul class="list-inline fs-sm pt-2 mb-3">
                <li class="list-inline-item"><a class="nav-link-style nav-link-light" href="#">About</a></li>
                <li class="list-inline-item"><a class="nav-link-style nav-link-light" href="#">Outlets</a></li>
                <li class="list-inline-item"><a class="nav-link-style nav-link-light" href="#">Affiliates</a></li>
                <li class="list-inline-item"><a class="nav-link-style nav-link-light" href="#">Support</a></li>
                <li class="list-inline-item"><a class="nav-link-style nav-link-light" href="#">Terms of use</a></li>
              </ul>
            </div>
            <div class="d-flex pt-2 pt-sm-0 ms-auto"><a class="btn-social bs-twitter bs-light me-2 mb-2" href="#"><i class="ai-twitter"></i></a><a class="btn-social bs-facebook bs-light me-2 mb-2" href="#"><i class="ai-facebook"></i></a><a class="btn-social bs-instagram bs-light me-2 mb-2" href="#"><i class="ai-instagram"></i></a><a class="btn-social bs-pinterest bs-light me-2 mb-2" href="#"><i class="ai-pinterest"></i></a><a class="btn-social bs-youtube bs-light mb-2" href="#"><i class="ai-youtube"></i></a></div>
          </div>
          <div class="d-sm-flex justify-content-between align-items-center pb-4 pb-sm-2">
            <div class="order-sm-2 mb-4 mb-sm-3"><img src="img/footer/cards.png" alt="Payment methods" width="181"></div>
            <div class="order-sm-1 mb-3">
              <p class="fs-ms mb-0"><span class="text-light opacity-50 me-1">© All rights reserved. Made by</span><a class="nav-link-style nav-link-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll data-fixed-element><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ai-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>
</html>