<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ICAN | Home</title>
    <link href="assets/img/ican_logo.jpg" rel="icon" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/naci/css/naci.css" />
    <style>
      #proparallax {
        display: block;
        position: relative;
        overflow: hidden;
        min-height: 23.5rem;
        border: 10px solid black;
        box-shadow: 0px 8px 10px 8px grey;
      }

      #proparallax img {
        position: absolute;
        width: 50rem;
        height: 23.5rem;
        overflow: hidden;
        object-fit: cover;
      }

      @keyframes parallax_one {
        /* controls img.one movement */
        0% {
          /* .imageloaded */
          height: 23.5rem;
          width: 50rem;
          left: 0rem;
          opacity: 1;
        }
        /* .imagehold runs from 0 to 27.77% */
        27.77% {
          /* .imageloaded */
          width: 50rem;
          left: 0rem;
        }
        27.78% {
          /* .imagepreunload */
          width: 50rem;
          left: 0rem;
          right: 50rem;
        }
        33.33% {
          /* .imageunloaded */
          height: 23.5rem;
          width: 0rem;
          left: 0rem;
          right: 0rem;
          opacity: 1;
        }
        33.34% {
          /* imageoff */
          opacity: 0;
        }
        94.43% {
          /* .imageon */
          left: 0rem;
          opacity: 0;
        }
        94.44% {
          /* .imageinitial */
          height: 23.5rem;
          width: 0rem;
          left: 50rem;
          opacity: 1;
        }
        100% {
          /* .imageloaded */
          width: 50rem;
          left: 0rem;
          opacity: 1;
        }
      }

      @keyframes parallax_two {
        /* controls img.two movement */
        0% {
          /* .imageoff */
          opacity: 0;
        }
        27.77% {
          /* .imageon */
          left: 0rem;
          opacity: 0;
        }
        27.78% {
          /* .imageinitial */
          width: 0rem;
          height: 23.5rem;
          left: 50rem;
          opacity: 1;
        }
        33.33% {
          /* .imageloaded */
          width: 50rem;
          left: 0rem;
        }
        /* .imagehold runs from 33.34% - 61.10% */
        61.10% {
          /* .imageloaded */
          width: 50rem;
          left: 0rem;
        }
        61.11% {
          /* .imagepreunload */
          width: 50rem;
          left: 0rem;
          right: 50rem;
        }
        66.67% {
          /* .imageunloaded */
          width: 0rem;
          right: 0rem;
          left: 0rem;
          height: 23.5rem;
          opacity: 1;
        }
        66.68% {
          /* .imageoff */
          opacity: 0;
        }
        100% {
          /* .imageoff */
          opacity: 0;
        }
      }

      @keyframes parallax_three {
        /* controls img.three movement */
        0% {
          /* .imageoff */
          opacity: 0;
        }
        61.10% {
          /* .imageon */
          opacity: 0;
        }
        61.11% {
          /* .imageinitial */
          width: 0rem;
          height: 23.5rem;
          left: 50rem;
          opacity: 1;
        }
        66.67% {
          /* .imageloaded */
          width: 50rem;
          left: 0rem;
        }
        /* .imagehold runs from 66.67% - 94.43% */
        94.43% {
          /* .imageloaded */
          width: 50rem;
          left: 0rem;
        }
        94.44% {
          /* .imagepreunload */
          width: 50rem;
          left: 0rem;
          right: 50rem;
        }
        100% {
          /* imageunloaded */
          width: 0rem;
          right: 0rem;
          left: 0rem;
          height: 23.5rem;
          opacity: 1;
        }
      }

      #proparallax img.one {
        animation-name: parallax_one; /* controls img.one movement */
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        animation-duration: 18s;
        animation-direction: forwards;
        object-fit: cover;
      }

      #proparallax img.two {
        animation-name: parallax_two; /* controls img.two movement */
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        animation-duration: 18s;
        animation-direction: forwards;
        object-fit: cover;
      }

      #proparallax img.three {
        animation-name: parallax_three; /* controls img.three movement */
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        animation-duration: 18s;
        animation-direction: forwards;
        object-fit: cover;
      }
      .carousel-item {
        height: 90vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
      .carousel-caption {
        text-align: left !important;
        bottom: 180px;
      }
      .Icantext {
        font-family: Goudy Old Style, Garamond, "Big Caslon", "Times New Roman",
          serif;
        /* font-family: Impact, Haettenschweiler, "Franklin Gothic Bold", Charcoal,
          "Helvetica Inserat", "Bitstream Vera Sans Bold", "Arial Black",
          "sans serif"; */
        font-style: normal;
        font-variant: normal;
        font-weight: 700;
        /* line-height: 17.6px; */
        font-size: 75px;
      }
      .slide-right {
        width: 100%;
        overflow: hidden;
      }

      .slide-right {
        animation: 2s slide-right;
        /* animation-delay: 2s; */
      }

      @keyframes slide-right {
        from {
          margin-left: -300px;
        }

        to {
          margin-left: 0%;
        }
      }

      @media only screen and (max-width: 600px) {
        /*Big smartphones [426px -> 600px]*/
        .Icantext {
          font-family: "Comic Sans MS", cursive, sans-serif;
          font-size: 25px;
        }
        .carousel-caption {
          text-align: left !important;
          bottom: 450px;
        }
      }
      @media only screen and (max-width: 425px) {
        /*Small smartphones [325px -> 425px]*/
        .Icantext {
          font-family: "Comic Sans MS", cursive, sans-serif;
          font-size: 15px;
        }
        .carousel-caption {
          text-align: left !important;
          bottom: 450px;
        }
      }
    </style>
  </head>
  <body>
    <header class="shadow py-2">
      <div class="contain">
        <input type="checkbox" name="" id="check" />

        <div class="logo-contain">
          <a href="index.html" class="logo align-items-center">
            <img src="assets/img/ican_logo.png" alt="" style="height: 50px" />
          </a>
        </div>

        <div class="nav-btn">
          <div class="nav-links">
            <ul>
              <li class="nav-link" style="--i: 0.6s">
                <a href="#">Home</a>
              </li>
              <li class="nav-link" style="--i: 0.6s">
                <a href="#">Members</a>
              </li>
              <li class="nav-link" style="--i: 0.85s">
                <a href="#">Students<i class="fa fa-caret-down"></i></a>
                <div class="dropdown">
                  <ul>
                    <li class="dropdown-link">
                      <a href="#">My ICAN<i class="fa fa-caret-down"></i></a>
                      <div class="dropdown second">
                        <ul class="overflow-y-scroll hide-scroll h-96">
                          <li class="dropdown-link">
                            <a href="#">Financial Status</a>
                          </li>
                          <li class="dropdown-link">
                            <a href="#">Application for Induction</a>
                          </li>
                          <li class="dropdown-link">
                            <a href="#">Profile Update</a>
                          </li>
                          <li class="dropdown-link">
                            <a href="#">Financial Status</a>
                          </li>
                          <li class="dropdown-link">
                            <a href="#">Application for Induction</a>
                          </li>
                          <li class="dropdown-link">
                            <a href="#">Profile Update</a>
                          </li>
                          <li class="dropdown-link">
                            <a href="#">Financial Status</a>
                          </li>
                          <li class="dropdown-link">
                            <a href="#">Application for Induction</a>
                          </li>
                          <li class="dropdown-link">
                            <a href="#">Profile Update</a>
                          </li>
                          <li class="dropdown-link">
                            <a href="#">Financial Status</a>
                          </li>
                          <li class="dropdown-link">
                            <a href="#">Application for Induction</a>
                          </li>
                          <li class="dropdown-link">
                            <a href="#">Profile Update</a>
                          </li>
                          <li class="dropdown-link">
                            <a href="#">More<i class="fa fa-caret-down"></i></a>
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
                      <a href="#">Registration<i class="fa fa-caret-down"></i></a>
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
                            <a href="#">More<i class="fa fa-caret-down"></i></a>
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
                      <a href="#">Exemption<i class="fa fa-caret-down"></i></a>
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
                            <a href="#">More<i class="fa fa-caret-down"></i></a>
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
                      <a href="#">Accredited Institutions<i class="fa fa-caret-down"></i></a>
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
                            <a href="#">More<i class="fa fa-caret-down"></i></a>
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
                      <a href="#">Syllabus<i class="fa fa-caret-down"></i></a>
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
                            <a href="#">More<i class="fa fa-caret-down"></i></a>
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
                      <a href="#">Learning Materials<i class="fa fa-caret-down"></i></a>
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
                            <a href="#">More<i class="fa fa-caret-down"></i></a>
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
                      <a href="#">Scholarship Scheme</a>
                    </li>
                    <li class="dropdown-link">
                      <a href="#">Transcripts<i class="fa fa-caret-down"></i></a>
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
                    <li class="dropdown-link">
                      <a href="#">Tuition House Support Fund<i class="fa fa-caret-down"></i></a>
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
                            <a href="#">More<i class="fa fa-caret-down"></i></a>
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
                      <a href="#">FAQs</a>
                    </li>
                    <div class="arrow"></div>
                  </ul>
                </div>
              </li>
              <li class="nav-link" style="--i: 1.1s">
                <a href="#">Services<i class="fa fa-caret-down"></i></a>
                <div class="dropdown">
                  <ul>
                    <li class="dropdown-link">
                      <a href="#">Link 1</a>
                    </li>
                    <li class="dropdown-link">
                      <a href="#">Link 2</a>
                    </li>
                    <li class="dropdown-link">
                      <a href="#">Link 3<i class="fa fa-caret-down"></i></a>
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
                            <a href="#">More<i class="fa fa-caret-down"></i></a>
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
            <input
              type="search"
              name="serch"
              placeholder="Search"
              class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none" />
            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
              <svg
                class="h-4 w-4 fill-current"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                version="1.1"
                id="Capa_1"
                x="0px"
                y="0px"
                viewBox="0 0 56.966 56.966"
                style="enable-background: new 0 0 56.966 56.966"
                xml:space="preserve"
                width="512px"
                height="512px">
                <path
                  d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
              </svg>
            </button>
          </div>
        </div>

        <div class="hamburger-menu-contain">
          <div class="hamburger-menu">
            <div></div>
          </div>
        </div>
      </div>
    </header>
    <div
      id="carouselExampleFade"
      class="carousel carousel-dark slide carousel-fade"
      data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleFade"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"></button>
        <button
          type="button"
          data-bs-target="#carouselExampleFade"
          data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button
          type="button"
          data-bs-target="#carouselExampleFade"
          data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="assets/img/1business-lady.png"
            class="d-block w-100"
            alt="..." />
          <div class="carousel-caption slide-right">
            <h5 class="Icantext">ICAN slide label</h5>
            <p>
              This is not an advert section <br />
              Rather it is just some ICAN qualities.
            </p>
            <br /><a
              href="profile_update.html"
              class="Icanbtn btn btn-primary btn-sm"
              >Get Started</a
            >
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="assets/img/1business-man.png"
            class="d-block w-100"
            alt="..." />
          <div class="carousel-caption slide-right">
            <h5 class="Icantext">Second slide label</h5>
            <p>
              The advert section with all posters <br />
              is just a little bit below.
            </p>
            <br /><a
              href="profile_update.html"
              class="Icanbtn btn btn-primary btn-sm"
              >Get Started</a
            >
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="assets/img/business-3528035_1280.jpg"
            class="d-block w-100"
            alt="..." />
          <div class="carousel-caption slide-right">
            <h5 class="Icantext">Third slide label</h5>
            <p>
              Some representative placeholder <br />
              content for getting to know ICAN more.
            </p>
            <br /><a
              href="profile_update.html"
              class="Icanbtn btn btn-primary btn-sm"
              >Get Started</a
            >
          </div>
        </div>
      </div>
      <div class="d-none d-md-block">
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleFade"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleFade"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- Qualities -->
    <div
      class="container naci-100 mt-5 mb-12 mx-auto max-w-5xl flex gap-12 flex-wrap items-start justify-center md:justify-between">
      <div
        class="grid icandesign gap-4 justify-items-center text-center md:flex-1 headline1">
        <div class="rounded-full border-8 border-blue-800 p-4">
          <a
            href="https://icanportal.org/members/Account/Login?ReturnUrl=%2Fmembers%2FeLearnings"
            ><i class="fa-solid fa-users fa-2x font-green-600"></i
          ></a>
        </div>
        <a
          href="https://icanportal.org/members/Account/Login?ReturnUrl=%2Fmembers%2FeLearnings"
          ><h3 class="text-3xl font-bold">ICAN E-Learning</h3></a
        >
      </div>
      <div
        class="grid icandesign gap-4 justify-items-center text-center md:flex-1 headline2">
        <div class="rounded-full border-8 border-blue-800 p-4">
          <a
            class="font-green-600"
            href="https://icanig.org/speeches-presentations"
            ><i class="fa-solid fa-microphone fa-2x font-green-600"></i
          ></a>
        </div>
        <a href="https://icanig.org/speeches-presentations"
          ><h3 class="text-3xl font-bold">Speeches & Presentations</h3></a
        >
      </div>
      <div
        class="grid icandesign gap-4 justify-items-center text-center md:flex-1 headline3">
        <div class="rounded-full border-8 border-blue-800 p-4">
          <a
            href="https://icanportal.org/members/Account/Login?ReturnUrl=%2Fmembers%2FeLearnings"
            ><i
              class="fa-sharp fa-solid fa-building-columns fa-2x font-green-600"></i
          ></a>
        </div>
        <a
          href="https://icanportal.org/members/Account/Login?ReturnUrl=%2Fmembers%2FeLearnings"
          ><h3 class="text-3xl font-bold">Find a Faculty</h3></a
        >
      </div>
      <div
        class="grid icandesign gap-4 justify-items-center text-center md:flex-1 headline4">
        <div class="rounded-full border-8 border-blue-800 p-4">
          <a
            href="https://icanportal.org/members/Account/Login?ReturnUrl=%2Fmembers%2FeLearnings"
            ><i class="fa-solid fa-graduation-cap fa-2x font-green-600"></i
          ></a>
        </div>
        <a
          href="https://icanportal.org/members/Account/Login?ReturnUrl=%2Fmembers%2FeLearnings"
          ><h3 class="text-3xl font-bold">Be a Student</h3></a
        >
      </div>
      <div
        class="grid icandesign gap-4 justify-items-center text-center md:flex-1 headline5">
        <div class="rounded-full border-8 border-blue-800 p-4">
          <a
            href="https://ebookcentral.proquest.com/auth/lib/icanlibnig/login.action?returnURL=https%3A%2F%2Febookcentral.proquest.com%2Flib%2Ficanlibnig%2Fsearch.action">
            <i class="fa-solid fa-book fa-2x font-green-600"></i>
          </a>
        </div>
        <a
          href="https://ebookcentral.proquest.com/auth/lib/icanlibnig/login.action?returnURL=https%3A%2F%2Febookcentral.proquest.com%2Flib%2Ficanlibnig%2Fsearch.action">
          <h3 class="text-3xl font-bold">Our E-Library</h3>
        </a>
      </div>
    </div>
    <div class="divider div-transparent div-dot"></div>

    <!-- Partner Section -->
    <section
      aria-labelledby="partners"
      class="text-center mt-5 mb-5 grid gap-8 place-items-center naci-150">
      <div class="grid gap-4">
        <h2 id="partners" class="text-4xl font-bold text-blue-800 headline">
          Affiliates and Professional Bodies
        </h2>
        <p class="w-full justify-center max-w-lg tagline">
          ICAN In Conjunction with the following Professional Bodies aim to
          support individuals professionally and aid them in progressing within
          their career/profession.
        </p>
      </div>
      <div
        class="flex flex-wrap justify-center gap-8 md:gap-x-16 max-w-2xl mx-auto">
        <a href="https://abwa.org.ng/" class="hover:scale-125 ease-in duration-500">
          <div
            class="p-4 bg-white icandesign dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
            <img src="assets/img/abwa.jpg" alt="Partner" class="h-16 w-16" />
          </div>
        </a>
        <a
          href="https://charteredaccountantsworldwide.com/"
          class="hover:scale-125 ease-in duration-500">
          <div
            class="p-4 bg-white icandesign dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
            <img src="assets/img/caw.jpg" alt="Partner" class="h-16 w-16" />
          </div>
        </a>
        <a href="https://www.cimaglobal.com/" class="hover:scale-125 ease-in duration-500">
          <div
            class="p-4 bg-white icandesign dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
            <img src="assets/img/cima.jpg" alt="Partner" class="h-16 w-16" />
          </div>
        </a>
        <a
          href="https://www.cipfa.org/join/joining-from-another-membership-organisation"
          class="hover:scale-125 ease-in duration-500">
          <div
            class="p-4 bg-white icandesign dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
            <img src="assets/img/cipfa.jpg" alt="Partner" class="h-16 w-16" />
          </div>
        </a>
        <a href="https://www.icaew.com/" class="hover:scale-125 ease-in duration-500">
          <div
            class="p-4 bg-white icandesign dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
            <img src="assets/img/icaew.jpg" alt="Partner" class="h-16 w-16" />
          </div>
        </a>
        <a href="https://www.ifac.org/" class="hover:scale-125 ease-in duration-500">
          <div
            class="p-4 bg-white icandesign dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
            <img src="assets/img/ifac.jpg" alt="Partner" class="h-16 w-16" />
          </div>
        </a>
        <a href="https://www.pafa.org.za/" class="hover:scale-125 ease-in duration-500">
          <div
            class="p-4 bg-white icandesign dark:bg-neutral-600 shadow-md dark:shadow-xl rounded-md">
            <img src="assets/img/pafa.jpg" alt="Partner" class="h-16 w-16" />
          </div>
        </a>
      </div>
    </section>
    <!-- ===================Advert Section================== -->
    <!-- component -->
    <section class="bg-white dark:bg-black-800">
      <div
        class="container flex flex-col px-6 py-10 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
        <div class="w-full lg:w-1/2">
          <div class="lg:max-w-lg">
            <h1
              class="text-3xl font-bold tracking-wide text-blue-800 dark:text-dark lg:text-5xl headline">
              Here is the Advert section
            </h1>
            <div class="mt-8 space-y-5 punchline">
              <p
                class="flex items-center -mx-2 text-black-700 dark:text-black-200">
        	      <i class="fa-regular fa-circle-check w-6 h-6 mx-2 text-blue-500"></i>
                <span class="mx-2">Keep it Clean and Simple</span>
              </p>
              <p
                class="flex items-center -mx-2 text-black-700 dark:text-black-200">
                <i class="fa-regular fa-circle-check w-6 h-6 mx-2 text-blue-500"></i>

                <span class="mx-2">Poster designs shouldn't be crowdy</span>
              </p>
              <p
                class="flex items-center -mx-2 text-black-700 dark:text-black-200">
                <i class="fa-regular fa-circle-check w-6 h-6 mx-2 text-blue-500"></i>

                <span class="mx-2">Too much text should not be used on the posters</span>
              </p>
              <p
                class="flex items-center -mx-2 text-black-700 dark:text-black-200">
                <i class="fa-regular fa-circle-check w-6 h-6 mx-2 text-blue-500"></i>

                <span class="mx-2">Once the poster is clicked, it takes them to the detailed page</span>
              </p>
            </div>
          </div>
          <div
            class="w-full mt-8 bg-transparent border rounded-md lg:max-w-sm dark:border-black-700 focus-within:border-blue-400 focus-within:ring focus-within:ring-blue-300 dark:focus-within:border-blue-400 focus-within:ring-opacity-40">
            <div class="flex flex-col lg:flex-row">
              <div
                class="flex-1 h-10 py-2 m-1 text-black-700 bg-transparent border-none appearance-none dark:text-black-200 focus:outline-none focus:placeholder-transparent focus:ring-0">
                <marquee behavior="" direction="">
                  <p>
                    Other establishment could place advert here... They'll surely have to pay for that 
                    hence the "Apply now" button. 
                  </p>
                </marquee>
              </div>
              <button
                type="button"
                class="h-10 px-4 py-2 m-1 text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Apply now
              </button>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Advert enrollment details</h5>
                  <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  
              <p
                class="flex items-center -mx-2 text-black-700 dark:text-black-200">
                <i class="fa-regular fa-circle-check w-6 h-6 mx-2 text-blue-500"></i>

                <span class="mx-2">Here the interested clients will have detailed information, terms 
                  and conditions inclusive on how to get their products / establishmet advertised.</span>
              </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="Icanbtn btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="Icanbtn btn btn-primary btn-sm">Understood</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="flex items-center justify-center w-full h-96 lg:w-1/2 headline">
          <div class="md-macbook-pro md-glare d-none d-md-block">
            <div class="md-lid container">
              <div class="md-camera"></div>
              <div class="md-screen">
                <!-- content goes here -->
                <div class="tab-featured-image">
                  <div class="tab-content">
                    <div class="tab-pane in active" id="tab1">
                      <div id="proparallax">
                        <a href="advert.html"><img
                          class="img img-responsive one"
                          src="assets/img/52ICAN.png?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" /></a>
                        <a href="advert.html"><img
                          class="img img-responsive two"
                          src="assets/img/exam.png?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" /></a>
                        <a href="advert.html"><img
                          class="img img-responsive three"
                          src="assets/img/medical.png?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" /></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="md-base"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================================Advert section ends=========================== -->
    <!-- component -->
    <div class="div-transparent divider div-dot"></div>
    <!-- component -->
    <main class="py-12 md:px-20 sm:px-14 px-6 bg-blue-800 container">
      <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4 icandesign">
          <div class="card h-100 rounded-2xl shadow-xl">
            <a href="#"
              ><img
                src="https://cdn.pixabay.com/photo/2020/05/28/10/21/video-conference-5230746_1280.png?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80"
                alt=""
                class="card-img-top rounded-2xl shadow-xl"
            /></a>
            <div class="card-body">
              <h4 class="card-title">
                <a
                  class="text-2xl font-semibold text-purple-900 mt-3 text-gray-800 text-2xl font-bold my-2"
                  href="#"
                  >Know your District</a
                >
              </h4>
              <p class="card-text">
                Directory of ICAN district societies and chairmen
              </p>
              <div class="flex justify-between mt-4">
                <!-- <span class="font-thin text-sm">May 20th 2020</span> -->
                <a
                  href="#"
                  class="block font-medium text-blue-600 mb-2 font-bold"
                  >Know more</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 icandesign">
          <div class="card h-100 rounded-2xl shadow-xl">
            <a href="#"
              ><img
                src="https://cdn.pixabay.com/photo/2018/09/21/13/11/checklist-3693113_1280.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80"
                alt=""
                class="card-img-top rounded-2xl shadow-xl"
            /></a>
            <div class="card-body">
              <h4 class="card-title">
                <a
                  class="text-2xl font-semibold text-purple-900 mt-3 text-gray-800 text-2xl font-bold my-2"
                  href="#"
                  >ICAN Accredited Institutions</a
                >
              </h4>
              <p class="card-text">
                Tertiary institution as accredited by the Institute of Chartered Accountants of Nigeria
              </p>
              <div class="flex justify-between mt-4">
                <!-- <span class="font-thin text-sm">May 20th 2020</span> -->
                <a
                  href="#"
                  class="block font-medium text-blue-600 mb-2 font-bold"
                  >Know more</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 icandesign">
          <div class="card h-100 rounded-2xl shadow-xl">
            <a href="#"
              ><img
                src="assets/img/teacher.png?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80"
                alt=""
                class="card-img-top rounded-2xl shadow-xl"
            /></a>
            <div class="card-body">
              <h4 class="card-title">
                <a
                  class="text-2xl font-semibold text-purple-900 mt-3 text-gray-800 text-2xl font-bold my-2"
                  href="#"
                  >Tuition Centres</a
                >
              </h4>
              <p class="card-text">
                ICAN Approved tuition centres for use of professional students
              </p>
              <div class="flex justify-between mt-4">
                <!-- <span class="font-thin text-sm">May 20th 2020</span> -->
                <a
                  href="#"
                  class="block font-medium text-blue-600 mb-2 font-bold"
                  >Know more</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="div-transparent icangrad"></div>
    <!-- ============================footer================================== -->

           <!-- ====== Footer Section Start -->
    <div class="container mt-5">
      <footer class="bg-white pt-20 lg:pt-[120px] pb-10 lg:pb-20 relative z-10">
        <div class="container">
          <div class="flex flex-wrap -mx-4">
            <div class="w-full sm:w-2/3 lg:w-3/12 px-4">
              <div class="w-full mb-10">
                <a
                  href="javascript:void(0)"
                  class="inline-block max-w-[160px] mb-6">
                  <img
                    src="assets/img/ican_logo.png"
                    alt="logo"
                    class="max-w-full" />
                </a>
                <p class="text-base text-body-color mb-5 headline">
                  Sed ut perspiciatis undmnis is iste natus error sit amet
                  voluptatem totam rem aperiam.
                  <span class="text-primary mr-3">
                    <i class="fa-solid fa-envelope"></i>
                  </span>
                  <span>info.ican@ican.org.ng</span>
                </p>
                <p class="flex items-center text-sm text-dark font-medium">
                  <span class="text-primary mr-3">
                    <i class="fa-solid fa-phone-volume"></i>
                  </span>
                  <span>+234905384710</span>
                </p>
              </div>
            </div>
            <div class="w-full sm:w-1/2 lg:w-2/12 px-4">
              <div class="w-full mb-10">
                <h4 class="text-dark text-lg font-semibold mb-9">About ICAN</h4>
                <ul class="widget-list">
                  <li class="tagline">
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base text-body-color hover:text-primary leading-loose mb-2">
                      Governance
                    </a>
                  </li>
                  <li class="tagline">
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base text-body-color hover:text-primary leading-loose mb-2">
                      Management Team
                    </a>
                  </li>
                  <li class="tagline">
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base text-body-color hover:text-primary leading-loose mb-2">
                      Vision and Mission
                    </a>
                  </li>
                  <li class="tagline">
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base text-body-color hover:text-primary leading-loose mb-2">
                      Technical Helpdesk
                    </a>
                  </li>
                  <li class="tagline">
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base text-body-color hover:text-primary leading-loose mb-2">
                      Contact Us
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="w-full sm:w-1/2 lg:w-2/12 px-4">
              <div class="w-full mb-10">
                <h4 class="text-dark text-lg font-semibold mb-9">Sections</h4>
                <ul class="widget-list">
                  <li class="tagline">
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base text-body-color hover:text-primary leading-loose mb-2">
                      Members
                    </a>
                  </li>
                  <li class="tagline">
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base text-body-color hover:text-primary leading-loose mb-2">
                      Students
                    </a>
                  </li>
                  <li class="tagline">
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base text-body-color hover:text-primary leading-loose mb-2">
                      FACULTY
                    </a>
                  </li>
                  <li class="tagline">
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base text-body-color hover:text-primary leading-loose mb-2">
                      MPD
                    </a>
                  </li>
                  <li class="tagline">
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base text-body-color hover:text-primary leading-loose mb-2">
                      JOB CENTER
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="w-full sm:w-1/2 lg:w-2/12 px-4">
              <div class="w-full mb-10">
                <h4 class="text-dark text-lg font-semibold mb-9">
                  Journals
                </h4>
                <ul class="widget-list">
                  <li class="tagline">
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base text-body-color hover:text-primary leading-loose mb-2">
                      ICAN Students' Journal
                    </a>
                  </li>
                  <li class="tagline">
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base text-body-color hover:text-primary leading-loose mb-2">
                      The Nigerian Accountant
                    </a>
                  </li>
                  <li class="tagline">
                    <a
                      href="javascript:void(0)"
                      class="inline-block text-base text-body-color hover:text-primary leading-loose mb-2">
                      ICAN Technical Bulletin
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="w-full sm:w-1/2 lg:w-3/12 px-4">
              <div class="w-full mb-10">
                <h4 class="text-dark text-lg font-semibold mb-9">
                  Follow Us On
                </h4>
                <div class="flex items-center mb-6">
                  <a
                    class="w-8 h-8 flex items-center justify-center rounded-full border border-[#E5E5E5] text-dark hover:text-white hover:bg-primary hover:border-primary mr-3 sm:mr-4 lg:mr-3 xl:mr-4"
                    href="https://www.facebook.com/pages/The-Institute-of-Chartered-Accountants-of-Nigeria-ICAN/408218229260845"
                    target="_blank"
                    ><i class="fa-brands fa-facebook"></i>
                  </a>
                  <a
                    class="w-8 h-8 flex items-center justify-center rounded-full border border-[#E5E5E5] text-dark hover:text-white hover:bg-primary hover:border-primary mr-3 sm:mr-4 lg:mr-3 xl:mr-4"
                    href="https://twitter.com/ICAN_NGR"
                    target="_blank"
                    ><i class="fa-brands fa-twitter"></i
                  ></a>
                  <a class="w-8 h-8 flex items-center justify-center rounded-full border border-[#E5E5E5] text-dark hover:text-white hover:bg-primary hover:border-primary mr-3 sm:mr-4 lg:mr-3 xl:mr-4" href="https://www.instagram.com/ican_ng/" target="_blank"
                    ><i class="fa-brands fa-instagram"></i></a>
                  </a>
                  <a class="w-8 h-8 flex items-center justify-center rounded-full border border-[#E5E5E5] text-dark hover:text-white hover:bg-primary hover:border-primary mr-3 sm:mr-4 lg:mr-3 xl:mr-4" href="https://ng.linkedin.com/in/ican1965" target="_blank"
                    ><i class="fa-brands fa-linkedin"></i></a>
                  </a>
                  <a
                    class="w-8 h-8 flex items-center justify-center rounded-full border border-[#E5E5E5] text-dark hover:text-white hover:bg-primary hover:border-primary mr-3 sm:mr-4 lg:mr-3 xl:mr-4"
                    href="https://twitter.com/ICAN_NGR"
                    target="_blank"
                    ><i class="fa-brands fa-youtube"></i
                  ></a>
                </div>
                <p class="text-base text-body-color">&copy; <script>document.write(new Date().getFullYear())</script> <a href="index.php">ICAN</a></p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <span class="absolute left-0 bottom-0 z-[-1]">
            <svg
              width="217"
              height="229"
              viewBox="0 0 217 229"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M-64 140.5C-64 62.904 -1.096 1.90666e-05 76.5 1.22829e-05C154.096 5.49924e-06 217 62.904 217 140.5C217 218.096 154.096 281 76.5 281C-1.09598 281 -64 218.096 -64 140.5Z"
                fill="url(#paint0_linear_1179_5)" />
              <defs>
                <linearGradient
                  id="paint0_linear_1179_5"
                  x1="76.5"
                  y1="281"
                  x2="76.5"
                  y2="1.22829e-05"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="#3056D3" stop-opacity="0.08" />
                  <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                </linearGradient>
              </defs>
            </svg>
          </span>
          <span class="absolute top-10 right-10 z-[-1]">
            <svg
              width="75"
              height="75"
              viewBox="0 0 75 75"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M37.5 -1.63918e-06C58.2107 -2.54447e-06 75 16.7893 75 37.5C75 58.2107 58.2107 75 37.5 75C16.7893 75 -7.33885e-07 58.2107 -1.63918e-06 37.5C-2.54447e-06 16.7893 16.7893 -7.33885e-07 37.5 -1.63918e-06Z"
                fill="url(#paint0_linear_1179_4)" />
              <defs>
                <linearGradient
                  id="paint0_linear_1179_4"
                  x1="-1.63917e-06"
                  y1="37.5"
                  x2="75"
                  y2="37.5"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="#13C296" stop-opacity="0.31" />
                  <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                </linearGradient>
              </defs>
            </svg>
          </span>
        </div>
      </footer>
    </div>
    <!-- ====== Footer Section End -->
 
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal({ reset: true });
        ScrollReveal({ duration: 2000});
    
    
		ScrollReveal().reveal('.headline', { origin: 'top', distance: '30px', delay: 200 })
		ScrollReveal().reveal('.tagline', { origin: 'top', distance: '30px', delay: 500 })
		ScrollReveal().reveal('.punchline', { origin: 'top', distance: '30px', delay: 2000 })
    ScrollReveal().reveal('.icandesign', { interval: 500, delay: 500});
    ScrollReveal().reveal('.widget', { interval: 900, delay: 500});
	</script>
    <script src="assets/tailwindcss/3.1.8/tailwind.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"></script>
  </body>
</html>
