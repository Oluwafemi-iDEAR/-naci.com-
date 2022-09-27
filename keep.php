<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/naci/css/naci.css">
<!-- Gogole Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap"
    rel="stylesheet" />
    <style>
        * {
  box-sizing: border-box;
}
 
body {
  /* overflow: hidden; */
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0;
  font-family: 'Montserrat', sans-serif;
}
/* Navigation */
.navigation {
  position: absolute;
  width: 100%;
  height: 100px;
  padding: 0 100px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  z-index: 1;
}
 
.navigation-left {
  margin-left: -33px;
}
 
.navigation-left a {
  text-decoration: none;
  text-transform: uppercase;
  color: #333745;
  font-size: 12px;
  font-weight: bold;
  width: 107px;
  height: 30px;
  border: 2px solid transparent;
  border-radius: 15px;
  display: inline-block;
  text-align: center;
  line-height: 25px;
  transition: all .2s;
}
 
.navigation-left a:hover,
.navigation-left a:focus {
  border-color: rgb(234, 46, 73);
  background-color: rgba(44, 45, 47, 0);
}
 
.navigation-center {
  margin-right: 85px;
}
 
.navigation-right {
  display: flex;
  align-items: center;
}
 
.login-btn {
  background-color: #b8b8b9;
  width: 97px;
  height: 30px;
  display: inline-block;
  text-align: center;
  text-decoration: none;
  font-size: 12px;
  font-weight: bold;
  border-radius: 15px;
  border: none;
  color: #333745;
  text-transform: uppercase;
  margin-left: 20px;
  transition: all .2s;
  cursor: pointer;
}
.login-btn:hover {
  transform: scale(1.06);
}

.css-slider-wrapper {
  display: block;
  background: #FFF;
  overflow: hidden;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}
/* Slider */.slider {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 1;
  z-index: 1;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  align-content: center;
  -webkit-transition: -webkit-transform 1600ms;
  transition: -webkit-transform 1600ms, transform 1600ms;
  -webkit-transform: scale(1);
  transform: scale(1);
}
 
/* Slides Background Color */.slide-1 {
  background: #fbad99;
  left: 0;
}
.slide-2 {
  background: #a5b7c3;
  left: 100%
}
.slide-3 {
  background: #9ea6b3;
  left: 200%
}
.slide-4 {
  background: #c0b7ad;
  left: 300%;
}
.slider {
  display: flex;
  justify-content: flex-start;
}
.slider-content {
  width: 635px;
  padding-left: 100px;
}
/* Slider Inner Slide Effect */.slider h2 {
  color: #333333;
  font-weight: 900;
  text-transform: capitalize;
  font-size: 60px;
  font-weight: 300;
  line-height: 1.2;
  opacity: 0;
  -webkit-transform: translateX(500px);
  transform: translateX(500px);
  margin-top: 0;
  letter-spacing: 2px;
}
 
.slider h4 {
  font-size: 22px;
  font-family: "Oswald";
  color: rgba(51, 51, 51, 0.349);
  font-weight: bold;
  text-transform: uppercase;
  line-height: 1.2;
  opacity: 0;
  -webkit-transform: translateX(500px);
  transform: translateX(500px);
}
 
.slider > img {
  position: absolute;
  right: 10%;
  bottom: 0;
  height: 100%;
  opacity: 0;
  -webkit-transform: translateX(500px);
  transform: translateX(500px);
}
 
.slide-1 > img {
  right: 0;
}
 
.ican-now-btn {
  background-color: #ea2e49;
  width: 220px;
  height: 50px;
  border-radius: 30px;
  border: none;
  font-family: Montserrat;
  font-size: 20px;
  font-weight: 100;
  color: #fff;
  text-align: left;
  padding-left: 35px;
  position: relative;
  cursor: pointer;
  transition: all .2s;
}
 
.ican-now-btn:hover {
  box-shadow: 0px 0px 60px -17px rgba(51,51,51,1);
}
 
.ican-now-btn:after {
  content: 'Start Now';
  font-size: 12px;
  font-weight: bold;
  text-transform: uppercase;
  position: absolute;
  right: 35px;
  top: 18px;
}
 
.slider .ican-now-btn:focus,
.navigation .login-btn:focus {
  outline: none;
}
/* Animations */.slider h2 {
  -webkit-transition: opacity 800ms, -webkit-transform 800ms;
  transition: transform 800ms, opacity 800ms;
  -webkit-transition-delay: 1s; /* Safari */  transition-delay: 1s;
}
.slider h4 {
  -webkit-transition: opacity 800ms, -webkit-transform 800ms;
  transition: transform 800ms, opacity 800ms;
  -webkit-transition-delay: 1.4s; /* Safari */  transition-delay: 1.4s;
}
.slider > img {
  -webkit-transition: opacity 800ms, -webkit-transform 800ms;
  transition: transform 800ms, opacity 800ms;
  -webkit-transition-delay: 1.2s; /* Safari */  transition-delay: 1.2s;
}
/* Number Pagination */.number-pagination {
  position: absolute;
  bottom: 30px;
  right: 100px;
  font-family: "Oswald";
  font-weight: bold;
}
 
.number-pagination span {
  font-size: 30px;
  color: #ea2e49;
  letter-spacing: 4px;
}
 
.number-pagination span:after {
  content: "/4";
  font-size: 16px;
  color: #fff;
}
/* Slider Pagger */.slider-pagination {
  position: absolute;
  bottom: 30px;
  width: 575px;
  left: 100px;
  z-index: 1000;
  display: flex;
  align-items: center;
}
.slider-pagination label {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  display: inline-block;
  background: #fff;
  margin: 0 10px;
  cursor: pointer;
}

/* Slider Pagger Event */.slide-radio1:checked ~ .slider-pagination .page1,
.slide-radio2:checked ~ .slider-pagination .page2,
.slide-radio3:checked ~ .slider-pagination .page3,
.slide-radio4:checked ~ .slider-pagination .page4 {
  width: 14px;
  height: 14px;
  border: 2px solid #ea2e49;
  background: transparent;
}
 
/* Slider Slide Effect */.slide-radio1:checked ~ .slider {
  -webkit-transform: translateX(0%);
  transform: translateX(0%);
}
.slide-radio2:checked ~ .slider {
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
}
.slide-radio3:checked ~ .slider {
  -webkit-transform: translateX(-200%);
  transform: translateX(-200%);
}
.slide-radio4:checked ~ .slider {
  -webkit-transform: translateX(-300%);
  transform: translateX(-300%);
}
 
.slide-radio1:checked ~ .slide-1 h2,
.slide-radio2:checked ~ .slide-2 h2,
.slide-radio3:checked ~ .slide-3 h2,
.slide-radio4:checked ~ .slide-4 h2,
.slide-radio1:checked ~ .slide-1 h4,
.slide-radio2:checked ~ .slide-2 h4,
.slide-radio3:checked ~ .slide-3 h4,
.slide-radio4:checked ~ .slide-4 h4,
.slide-radio1:checked ~ .slide-1 > img,
.slide-radio2:checked ~ .slide-2 > img,
.slide-radio3:checked ~ .slide-3 > img,
.slide-radio4:checked ~ .slide-4 > img {
  -webkit-transform: translateX(0);
  transform: translateX(0);
  opacity: 1
}

/* Responsive */@media only screen and (max-width: 768px) {
    .slider h2 {
    font-size: 20px;
  }
  .slider h4 {
    font-size: 16px;
  }
 
  .slider-content {
    padding: 0 2%
  }
 
  .navigation {
    padding: 0 2%;
  }
 
  .navigation-left {
    display: none;
  }
 
  .number-pagination {
    right: 2%;
  }
  .slider-pagination {
    left: 2%;
  }
 
  .slider .ican-now-btn {
    padding: 0 15px;
    width: 175px;
    height: 42px;
  }
 
  .slider .ican-now-btn:after {
    top: 15px;
  }
 
  .slider > img {
    right: 2%;
  }
 
  .slide-1 > img {
    right: -110px;
  }
}

    </style>
</head>
<body>
    <!-- Navigation -->
    <header class="shadow py-2">
      <div class="contain ">
          <input type="checkbox" name="" id="check">
          
          <div class="logo-contain">
              <!-- <h3 class="logo">Brand<span>Name</span></h3> -->
              <a href="index.html" class="logo align-items-center">
                  <img src="assets/img/ican_logo.png" alt="" style="height: 50px;">
                </a>
          </div>

          <div class="nav-btn">
              <div class="nav-links">
                  <ul>
                      <li class="nav-link" style="--i: .6s">
                          <a href="#">Home</a>
                      </li>
                      <li class="nav-link" style="--i: .85s">
                          <a href="#">Menu<i class="fas fa-caret-down"></i></a>
                          <div class="dropdown">
                              <ul>
                                  <li class="dropdown-link">
                                      <a href="#">Link 1</a>
                                  </li>
                                  <li class="dropdown-link">
                                      <a href="#">Link 2</a>
                                  </li>
                                  <li class="dropdown-link">
                                      <a href="#">Link 3<i class="fas fa-caret-down"></i></a>
                                      <div class="dropdown second">
                                          <ul>
                                              <li class="dropdown-link">
                                                  <a href="#">Link 1</a>
                                              </li>
                                              <li class="dropdown-link">
                                                  <a href="#">Link 2</a>
                                              </li>
                                              <li class="dropdown-link">
                                                  <a href="#">Link 3</a>
                                              </li>
                                              <li class="dropdown-link">
                                                  <a href="#">More<i class="fas fa-caret-down"></i></a>
                                                  <div class="dropdown second">
                                                      <ul>
                                                          <li class="dropdown-link">
                                                              <a href="#">Link 1</a>
                                                          </li>
                                                          <li class="dropdown-link">
                                                              <a href="#">Link 2</a>
                                                          </li>
                                                          <li class="dropdown-link">
                                                              <a href="#">Link 3</a>
                                                          </li>
                                                          <div class="arrow"></div>
                                                      </ul>
                                                  </div>
                                              </li>
                                              <div class="arrow"></div>
                                          </ul>
                                      </div>
                                  </li>
                                  <li class="dropdown-link">
                                      <a href="#">Link 4</a>
                                  </li>
                                  <div class="arrow"></div>
                              </ul>
                          </div>
                      </li>
                      <li class="nav-link" style="--i: 1.1s">
                          <a href="#">Services<i class="fas fa-caret-down"></i></a>
                          <div class="dropdown">
                              <ul>
                                  <li class="dropdown-link">
                                      <a href="#">Link 1</a>
                                  </li>
                                  <li class="dropdown-link">
                                      <a href="#">Link 2</a>
                                  </li>
                                  <li class="dropdown-link">
                                      <a href="#">Link 3<i class="fas fa-caret-down"></i></a>
                                      <div class="dropdown second">
                                          <ul>
                                              <li class="dropdown-link">
                                                  <a href="#">Link 1</a>
                                              </li>
                                              <li class="dropdown-link">
                                                  <a href="#">Link 2</a>
                                              </li>
                                              <li class="dropdown-link">
                                                  <a href="#">Link 3</a>
                                              </li>
                                              <li class="dropdown-link">
                                                  <a href="#">More<i class="fas fa-caret-down"></i></a>
                                                  <div class="dropdown second">
                                                      <ul>
                                                          <li class="dropdown-link">
                                                              <a href="#">Link 1</a>
                                                          </li>
                                                          <li class="dropdown-link">
                                                              <a href="#">Link 2</a>
                                                          </li>
                                                          <li class="dropdown-link">
                                                              <a href="#">Link 3</a>
                                                          </li>
                                                          <div class="arrow"></div>
                                                      </ul>
                                                  </div>
                                              </li>
                                              <div class="arrow"></div>
                                          </ul>
                                      </div>
                                  </li>
                                  <li class="dropdown-link">
                                      <a href="#">Link 4</a>
                                  </li>
                                  <div class="arrow"></div>
                              </ul>
                          </div>
                      </li>
                      <li class="nav-link" style="--i: 1.35s">
                          <a href="#">About</a>
                      </li>
                  </ul>
              </div>
              <div class="relative text-gray-600 mt-1">
                  <input type="search" name="serch" placeholder="Search" class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                  <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                      <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                    </svg>
                  </button>
                </div>
              <!-- <div class="log-sign" style="--i: 1.8s">
                  <a href="#" class="btn transparent">Log in</a>
                  <a href="#" class="btn solid">Sign up</a>
              </div> -->
          </div>

          <div class="hamburger-menu-contain">
              <div class="hamburger-menu">
                  <div></div>
              </div>
          </div>
      </div>
  </header>
<div class="navigation">
  <!-- <div class="navigation-left">
    <a href="#">Shoes</a>
    <a href="#">Clothes</a>
    <a href="#">Accessories</a>
  </div>
  <div class="navigation-center">
    <img src="https://codersera.com/blog/build-a-custom-full-page-slider-with-css-and-javascript/images/logo.png" alt="">
  </div>
  <div class="navigation-right">
    <a href="#"><img src="https://codersera.com/blog/build-a-custom-full-page-slider-with-css-and-javascript/images/shopping-bag.png" alt=""></a>
    <button class="login-btn" href="#">Login</button>
  </div> -->
  
</div>
 
<!-- Slider Wrapper -->
<div class="container css-slider-wrapper">
  <input type="radio" name="slider" class="slide-radio1" checked id="slider_1">
  <input type="radio" name="slider" class="slide-radio2" id="slider_2">
  <input type="radio" name="slider" class="slide-radio3" id="slider_3">
  <input type="radio" name="slider" class="slide-radio4" id="slider_4">
 
  <!-- Slider Pagination -->
  <div class="slider-pagination">
    <label for="slider_1" class="page1"></label>
    <label for="slider_2" class="page2"></label>
    <label for="slider_3" class="page3"></label>
    <label for="slider_4" class="page4"></label>
  </div>
 
  <!-- Slider #1 -->
  <div class="slider slide-1">
    <img class="d-none d-md-block" src="assets/img/smiling-4654734-removebg-preview.png" alt="">
    <div class="slider-content">
      <h4>New Product</h4>
      <h2>Denim Longline T-Shirt Dress With Split</h2>
      <button type="button" class="ican-now-btn" name="button">$130</button>
    </div>
    <div class="number-pagination">
      <span>1</span>
    </div>
  </div>
 
  <!-- Slider #2 -->
  <div class="slider slide-2">
    <img src="assets/img/business-3528035_1280.jpg" alt="">
    <div class="slider-content">
      <h4>New Product</h4>
      <h2>Denim Longline T-Shirt Dress With Split</h2>
      <button type="button" class="ican-now-btn" name="button">$130</button>
    </div>
    <div class="number-pagination">
      <span>2</span>
    </div>
  </div>
 
  <!-- Slider #3 -->
  <div class="slider slide-3">
    <img src="assets/img/business-analytics.png" alt="">
    <div class="slider-content">
      <h4>New Product</h4>
      <h2>Denim Longline T-Shirt Dress With Split</h2>
      <button type="button" class="ican-now-btn" name="button">$130</button>
    </div>
    <div class="number-pagination">
      <span>3</span>
    </div>
  </div>
 
  <!-- Slider #4 -->
  <div class="slider slide-4">
    <img src="assets/img/black-professional-4334648_1280.png" alt="">
    <div class="slider-content">
      <h4>New Product</h4>
      <h2>Denim Longline T-Shirt Dress With Split</h2>
      <button type="button" class="ican-now-btn" name="button">$130</button>
    </div>
    <div class="number-pagination">
      <span>4</span>
    </div>
  </div>
</div>

<hr class="container grid gap-12 sm:gap-16 md:gap-24 lg:gap-32 px-8" style="margin: bottom 2000px !important; border: 2px solid #333333;">
<main class="container grid gap-12 sm:gap-16 md:gap-24 lg:gap-32 px-8 absolute">
    <a href="#"
      class=" py-2 px-6 bg-amber-400 dark:text-neutral-900 mx-auto my-12 flex gap-2 shadow-xl hover:shadow-none transition-shadow focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-md ring-offset-4 ring-offset-white dark:ring-amber-400 dark:ring-offset-neutral-800">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
        stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
      </svg>
      <span>Download the App</span>
    </a>
    <!-- <section aria-labelledby="qualities" class="">
      <img src="./assets/dots.ef4b771c.svg"
        class=" hidden lg:block top-1/2 -translate-y-1/2 -left-24 xl:-left-7" alt="dots" aria-hidden="true">
      <img src="./assets/dots.ef4b771c.svg"
        class=" hidden lg:block top-1/2 -translate-y-1/2 -right-24 xl:-right-7" alt="dots" aria-hidden="true">
      <h2 id="qualities" class="sr-only">Our Qualities</h2>
      <div class="container mx-auto max-w-5xl flex gap-12 flex-wrap items-start justify-center md:justify-between">
        <div class="grid gap-4 justify-items-center text-center md:flex-1">
          <div class=" rounded-full border-8 border-amber-400 p-4">
            <img src="assets/img/users.svg" alt="">
          </div>
          <h3 class="text-3xl font-bold">ICAN E-Learning</h3>
          <p>Our products are secure and private out-of-the-box</p>
        </div>
        <div class=" grid gap-4 justify-items-center text-center md:flex-1">
          <div class=" rounded-full border-8 border-amber-400 p-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>
          </div>
          <h3 class="text-3xl font-bold">Proven</h3>
          <p>
            Leading the Smart Home world for 10 years
          </p>
        </div>
        <div class=" grid gap-4 justify-items-center text-center md:flex-1">
          <div class=" rounded-full border-8 border-amber-400 p-4 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
          </div>
          <h3 class="text-3xl font-bold">Efficient</h3>
          <p>
            Feel good about your wallet and the environment
          </p>
        </div>
        <div class=" grid gap-4 justify-items-center text-center md:flex-1">
          <div class=" rounded-full border-8 border-amber-400 p-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>
          </div>
          <h3 class="text-3xl font-bold">Proven</h3>
          <p>
            Leading the Smart Home world for 10 years
          </p>
        </div>
        <div class="grid gap-4 justify-items-center text-center md:flex-1">
            <div class=" rounded-full border-8 border-amber-400 p-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
              </svg>
            </div>
            <h3 class="text-3xl font-bold">Safe</h3>
            <p>Our products are secure and private out-of-the-box</p>
          </div>
      </div>
    </section> -->
    <section aria-labelledby="partners" class="text-center grid gap-8 place-items-center">
      <div class="grid gap-4">
        <h2 id="partners" class="text-4xl font-bold text-amber-400">Our Partners</h2>
        <p class="w-full max-w-lg">We’ve partnered with hundreds of smart home brands to help you create a smart home that fits your needs and doesn’t lock
        you in.</p>
      </div>
      <div class="flex flex-wrap justify-center gap-8 md:gap-x-16 max-w-2xl mx-auto">
        <div class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
          <img src="/assets/img/users.svg" alt="Partner" class="h-16 w-16">
        </div>
        <div class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
          <img src="assets/img/presentation.svg" alt="Partner" class="h-16 w-16">
        </div>
        <div class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
          <img src="/assets/img/faculty.svg" alt="Partner" class="h-16 w-16">
        </div>
        <div class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
          <img src="/assets/img/users.svg/partner4.6e816758.svg" alt="Partner" class="h-16 w-16">
        </div>
        <div class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
          <img src="/assets/img/users.svg/partner5.398482a9.svg" alt="Partner" class="h-16 w-16">
        </div>
        <div class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
          <img src="/assets/img/users.svg/partner6.510672ac.svg" alt="Partner" class="h-16 w-16">
        </div>
        <div class="p-4 bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
          <img src="/assets/img/users.svg/partner7.27f820be.svg" alt="Partner" class="h-16 w-16">
        </div>
      </div>
    </section>
    <section aria-labelledby="home" class="relative">
      <div class="flex flex-wrap-reverse gap-8 justify-center">
        <div class="flex gap-6 flex-wrap flex-col items-start lg:justify-center">
          <div class="flex flex-wrap flex-col items-start gap-2">
            <h2 class="text-4xl font-bold">Relax, you’re home!</h2>
            <p class="max-w-md">All our supported hardware includes traditional inputs so you can integrate our products into your house in a way that’s
            best for everyone.</p>
          </div>
          <a href="#"
            class=" py-2 px-6 bg-navy-blue-400 dark:text-neutral-900 flex gap-2 shadow-xl hover:shadow-none transition-shadow focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-md ring-offset-4 ring-offset-white dark:ring-amber-400 dark:ring-offset-neutral-800">
            Sign Up
          </a>
        </div>
        <img src="/assets/img/laptop-2298286_640.png" alt="Table">
      </div>
      <div
        class=" absolute -bottom-6 -right-32 -z-10 aspect-square md:border-8 border-amber-400 rounded-full md:w-64 lg:w-96 xl:max-w-lg"></div>
      <div
        class=" bg-teal-900 h-24 xl:h-48 -mx-8 mt-12 xl:mt-0 xl:absolute w-screen -bottom-8 -z-10"></div>
    </section>
    </main>

<script>
    var TIMEOUT = 6000;
 
 var interval = setInterval(handleNext, TIMEOUT);
  
 function handleNext() {
  
   var $radios = $('input[class*="slide-radio"]');
   var $activeRadio = $('input[class*="slide-radio"]:checked');
  
   var currentIndex = $activeRadio.index();
   var radiosLength = $radios.length;
  
   $radios
     .attr('checked', false);
  
   if (currentIndex >= radiosLength - 1) {
  
     $radios
       .first()
       .attr('checked', true);
  
   } else {
  
     $activeRadio
       .next('input[class*="slide-radio"]')
       .attr('checked', true);
  
   }
  
 }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="assets/tailwindcss/3.1.8/tailwind.js"></script>
<script src="assets/naci/js/naci.js"></script>
</body>
</html>