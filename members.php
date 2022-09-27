<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/naci/css/naci.css">
<!-- Gogole Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap"
    rel="stylesheet" />


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

  <div class="z-0 opacity-90 w-full h-full absolute" style="background: linear-gradient(-45deg, #2f1ce0 0%, #53a0fd 50%, #51eca5 100%);"></div>
    <div class="relative w-full flex flex-col">
        <div class="bg-bottom bg-no-repeat bg-cover" style="background-image:url('https://galaxy.up.video/media/backgrounds/bg-curve.svg')">
          
            <section class="w-full">
                <div class="container mx-auto flex flex-row sm:items-center xl:pb-16 xl:px-0 px-4">
                    <div class="w-1/2 text-white flex flex-col">
                        <h1 class="sm:text-5xl text-xl font-weight-bolder sm:mb-4">Become A Member</h1>
                        <h2 class="sm:text-2xl text-base mb-2">Tailwind landing app theme.</h2>
                        <p class="text-xs sm:text-base">To serve you better, we have created a dedicated email</p>
                        
                        <p class="text-xs sm:block hidden">* Legal text</p>
                        <button class="btn block btn-sm btn-success">
                            Hello
                        </button>
                    </div>
                    <div class="w-1/2 xl:pt-8 xl:items-center flex justify-end">
                        <img class="" height="700" src="assets/img/1smiling.png" alt="Happy Member"/>
                    </div>
                </div>
            </section>
        </div>
        <div class="bg-white pb-8 w-full pt-8">
            <div class="container mx-auto">
                <form class="flex xl:hidden p-2 w-full justify-center pb-16">
                    <input class="rounded-l-full p-2 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white" placeholder="your@mail.com"/>
                    <button class="px-2 rounded-r-full bg-yellow-400 text-gray-800 font-bold p-4 uppercase border-yellow-500 border-t border-b border-r">Subscribe</button>
                </form>
                <div class="text-center w-full pb-16">
                    <h3 class="uppercase text-gray-800">Why choose my app?</h3>
                    <p class="sm:text-3xl text-2xl text-black-800 pt-4 xl:w-1/2 mx-auto">
                        A simple, proven way to boost your team perfomance.
                    </p>
                </div>
                <div class="flex sm:flex-row flex-col w-full xl:mt-12 mb-12 xl:px-0 px-4">
                    <div class="sm:w-1/3 dark:shadow-gray-900 shadow rounded mx-2 p-3 mb-8 sm:mb-0 xl:pr-0 pr-2">
                        <div class="flex flex-wrap mb-4">
                            <div class="w-1/6 items-center mx-auto">
                              <svg height="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 55 55" style="enable-background:new 0 0 55 55;" xml:space="preserve">
                                        <path d="M55,27.5C55,12.337,42.663,0,27.5,0S0,12.337,0,27.5c0,8.009,3.444,15.228,8.926,20.258l-0.026,0.023l0.892,0.752 c0.058,0.049,0.121,0.089,0.179,0.137c0.474,0.393,0.965,0.766,1.465,1.127c0.162,0.117,0.324,0.234,0.489,0.348 c0.534,0.368,1.082,0.717,1.642,1.048c0.122,0.072,0.245,0.142,0.368,0.212c0.613,0.349,1.239,0.678,1.88,0.98 c0.047,0.022,0.095,0.042,0.142,0.064c2.089,0.971,4.319,1.684,6.651,2.105c0.061,0.011,0.122,0.022,0.184,0.033 c0.724,0.125,1.456,0.225,2.197,0.292c0.09,0.008,0.18,0.013,0.271,0.021C25.998,54.961,26.744,55,27.5,55 c0.749,0,1.488-0.039,2.222-0.098c0.093-0.008,0.186-0.013,0.279-0.021c0.735-0.067,1.461-0.164,2.178-0.287 c0.062-0.011,0.125-0.022,0.187-0.034c2.297-0.412,4.495-1.109,6.557-2.055c0.076-0.035,0.153-0.068,0.229-0.104 c0.617-0.29,1.22-0.603,1.811-0.936c0.147-0.083,0.293-0.167,0.439-0.253c0.538-0.317,1.067-0.648,1.581-1 c0.185-0.126,0.366-0.259,0.549-0.391c0.439-0.316,0.87-0.642,1.289-0.983c0.093-0.075,0.193-0.14,0.284-0.217l0.915-0.764 l-0.027-0.023C51.523,42.802,55,35.55,55,27.5z M2,27.5C2,13.439,13.439,2,27.5,2S53,13.439,53,27.5 c0,7.577-3.325,14.389-8.589,19.063c-0.294-0.203-0.59-0.385-0.893-0.537l-8.467-4.233c-0.76-0.38-1.232-1.144-1.232-1.993v-2.957 c0.196-0.242,0.403-0.516,0.617-0.817c1.096-1.548,1.975-3.27,2.616-5.123c1.267-0.602,2.085-1.864,2.085-3.289v-3.545 c0-0.867-0.318-1.708-0.887-2.369v-4.667c0.052-0.52,0.236-3.448-1.883-5.864C34.524,9.065,31.541,8,27.5,8 s-7.024,1.065-8.867,3.168c-2.119,2.416-1.935,5.346-1.883,5.864v4.667c-0.568,0.661-0.887,1.502-0.887,2.369v3.545 c0,1.101,0.494,2.128,1.34,2.821c0.81,3.173,2.477,5.575,3.093,6.389v2.894c0,0.816-0.445,1.566-1.162,1.958l-7.907,4.313 c-0.252,0.137-0.502,0.297-0.752,0.476C5.276,41.792,2,35.022,2,27.5z"/>
                                </svg>
                            </div>
                            <div class="w-5/6"><h4 class="items-center xl:text-2xl text-blue-800"><a href=""> BECOME A MEMBER</h4></a></div>
                        </div>
                        <p><b class="font-normal ">The Institute issues certificate of membership as evidence of proficiency and authority in their chosen field of Accountancy.</b></p>
                    </div>
                    <div class="sm:w-1/3 dark:shadow-gray-900 shadow rounded mx-2 p-3 mb-8 sm:mb-0 xl:pr-0 pr-2">
                        <div class="flex flex-wrap mb-4">
                            <div class="w-1/6 items-center mx-auto">
                              <svg height="40px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 58.201 58.201" style="enable-background:new 0 0 58.201 58.201;" xml:space="preserve">
                                  <path d="M31.707,33.07c-0.87,0.027-1.74,0.042-2.606,0.042c-0.869,0-1.742-0.014-2.614-0.042 c-7.341-0.201-13.191-1.238-17.403-2.717C7.104,29.685,5.409,28.899,4.1,28v7.111v0.5v0.5V37.4c2.846,2.971,12.394,5.711,25,5.711                             s22.154-2.74,25-5.711v-1.289v-0.5v-0.5V28c-1.318,0.905-3.028,1.697-5.025,2.367C44.865,31.839,39.027,32.87,31.707,33.07z"/>
                                  <path d="M4.1,14.889V22v0.5V23v1.289c2.638,2.754,11.033,5.31,22.286,5.668c0.115,0.004,0.233,0.005,0.349,0.008 c0.326,0.009,0.651,0.018,0.982,0.023C28.174,29.996,28.635,30,29.1,30s0.926-0.004,1.383-0.011                             c0.33-0.005,0.656-0.014,0.982-0.023c0.116-0.003,0.234-0.005,0.349-0.008c11.253-0.359,19.648-2.915,22.286-5.668V23v-0.5V22                             v-7.111C49.233,18.232,38.944,20,29.1,20S8.968,18.232,4.1,14.889z"/>                             <path d="M53.965,8.542C52.843,4.241,44.215,0,29.1,0C14.023,0,5.404,4.22,4.247,8.51C4.162,8.657,4.1,8.818,4.1,9v0.5v1.806 C6.937,14.267,16.417,17,29.1,17s22.164-2.733,25-5.694V9.5V9C54.1,8.832,54.044,8.681,53.965,8.542z"/>
                                  <path d="M4.1,41v8.201c0,0.162,0.043,0.315,0.117,0.451c1.181,4.895,11.747,8.549,24.883,8.549c13.106,0,23.655-3.639,24.875-8.516 c0.08-0.144,0.125-0.309,0.125-0.484v-8.199c-4.135,2.911-12.655,5.199-25,5.199C16.754,46.201,8.234,43.911,4.1,41z"/>
                              </svg>
                            </div>
                            <div class="w-4/5"><h4 class="items-center xl:text-2xl text-blue-800"><a href=""> MEMBERS BENEFIT</h4></a></div>
                        </div>
                        <p>We provide you with the resources you need to enhance your technical and professional skills</p>
                    </div>
                    <div class="sm:w-1/3 dark:shadow-gray-900 shadow rounded mx-2 p-3 mb-8 sm:mb-0 xl:pr-0 pr-2">
                        <div class="flex flex-wrap mb-4">
                            <div class="w-1/6 items-center mx-auto">
                                <svg height="40px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 58.201 58.201" style="enable-background:new 0 0 58.201 58.201;" xml:space="preserve">
                                    <path d="M42.117,43.007c-0.55-0.067-1.046,0.327-1.11,0.876s0.328,1.046,0.876,1.11C52.399,46.231,58,49.567,58,51.5 c0,2.714-10.652,6.5-28,6.5S2,54.214,2,51.5c0-1.933,5.601-5.269,16.117-6.507c0.548-0.064,0.94-0.562,0.876-1.11 c-0.065-0.549-0.561-0.945-1.11-0.876C7.354,44.247,0,47.739,0,51.5C0,55.724,10.305,60,30,60s30-4.276,30-8.5 C60,47.739,52.646,44.247,42.117,43.007z"/>
                                    <path d="M29.823,54.757L45.164,32.6c5.754-7.671,4.922-20.28-1.781-26.982C39.761,1.995,34.945,0,29.823,0 s-9.938,1.995-13.56,5.617c-6.703,6.702-7.535,19.311-1.804,26.952L29.823,54.757z M30,12c3.86,0,7,3.141,7,7s-3.14,7-7,7 s-7-3.141-7-7S26.14,12,30,12z"/>
                                </svg>
                            </div>
                            <div class="w-4/5"><h4 class="items-center xl:text-2xl text-blue-800"><a href=""> Project Management</h4></a></div>
                        </div>
                        <p>ICAN has various membership categories such as professional membership, AATWA membership.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<!-- component -->
<div class="mx-auto container py-20 px-6">
              <div class="container grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                  <div class="rounded">
                      <div class="shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1 w-full h-64 flex flex-col justify-between dark:bg-gray-800 bg-white dark:border-gray-700 rounded-lg border border-gray-400 mb-6 py-5 px-4">
                          <div>
                              <h4 class="text-gray-800 dark:text-gray-100 font-bold mb-3">13 things to work on</h4>
                              <p class="text-gray-800 dark:text-gray-100 text-sm">Our interior design experts work with you to create the space that you have been dreaming about.</p>
                          </div>
                          <div>
                              <div class="flex items-center justify-between text-gray-800 dark:text-gray-100">
                                  <p class="text-sm">March 28, 2020</p>
                                  <button class="w-8 h-8 rounded-full bg-gray-800 dark:bg-gray-100 dark:text-gray-800 text-white flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-black" aria-label="edit note" role="button">
                                      <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z"></path>
                                          <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                          <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"></line>
                                      </svg>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <div class="shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1 w-full h-64 flex flex-col justify-between bg-pink-300 rounded-lg border border-pink-300 mb-6 py-5 px-4">
                          <div>
                              <h4 class="text-gray-800 font-bold mb-3">13 things to work on</h4>
                              <p class="text-gray-800 text-sm">Our interior design experts work with you to create the space that you have been dreaming about.</p>
                          </div>
                          <div>
                              <div class="flex items-center justify-between text-gray-800">
                                  <p class="text-sm">March 28, 2020</p>
                                  <button class="w-8 h-8 rounded-full bg-gray-800 text-white flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 ring-offset-pink-300   focus:ring-black"
                                  aria-label="edit note" role="button">
                                      <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z"></path>
                                          <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                          <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"></line>
                                      </svg>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <!-- <div class="shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1 w-full h-64 flex flex-col justify-between items-start bg-blue-300 rounded-lg border border-blue-300 mb-6 py-5 px-4">
                          <div>
                              <h4 class="text-gray-800 font-bold mb-3">13 things to work on</h4>
                              <p class="text-gray-800 text-sm">Probabo, inquit, sic agam, ut labore et voluptatem sequi nesciunt, neque porro quisquam est, quid malum, sensu iudicari</p>
                          </div>
                          <div class="w-full flex flex-col items-start">
                              <div class="mb-3 border border-gray-800 rounded-full px-3 py-1 text-gray-800 text-xs flex items-center" aria-label="Due on" role="contentinfo">
                                   <svg   xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alarm" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z"></path>
                                      <circle cx="12" cy="13" r="7"></circle>
                                      <polyline points="12 10 12 13 14 13"></polyline>
                                      <line x1="7" y1="4" x2="4.25" y2="6"></line>
                                      <line x1="17" y1="4" x2="19.75" y2="6"></line>
                                  </svg>
                                  <p class="ml-2">7 Sept, 23:00</p>
                              </div>
                              <div class="flex items-center justify-between text-gray-800 w-full">
                                  <p class="text-sm">March 28, 2020</p>
                                  <button class="w-8 h-8 rounded-full bg-gray-800 text-white flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 ring-offset-blue-300  focus:ring-black" aria-label="edit note" role="button">
                                      <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z"></path>
                                          <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                          <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"></line>
                                      </svg>
                                  </button>
                              </div>
                          </div>
                      </div> -->
                  </div>
                  <div class="rounded">
                      <div class="shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1 w-full h-64 flex flex-col justify-between dark:bg-gray-800 bg-white dark:border-gray-700 rounded-lg border border-gray-400 mb-6 py-5 px-4">
                          <div>
                              <h3 class="text-gray-800 dark:text-gray-100 leading-7 font-semibold w-11/12">What does success as a UX designer look like and how to get there systematically</h3>
                          </div>
                          <div>
                              <div class="flex items-center justify-between text-gray-800">
                                  <p class="dark:text-gray-100 text-sm">March 28, 2020</p>
                                  <button class="w-8 h-8 rounded-full dark:bg-gray-100 dark:text-gray-800 bg-gray-800 text-white flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-black" aria-label="edit note" role="button">
                                      <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z"></path>
                                          <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                          <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"></line>
                                      </svg>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <div class="shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1 w-full h-64 flex flex-col justify-between dark:bg-gray-800 bg-white dark:border-gray-700 rounded-lg border border-gray-400 mb-6 py-5 px-4">
                          <div>
                              <h3 class="text-gray-800 dark:text-gray-100 leading-7 font-semibold w-11/12">What does success as a UX designer look like and how to get there systematically</h3>
                          </div>
                          <div>
                              <div class="mb-3 flex items-center">
                                  <div class="border border-gray-300 dark:border-gray-700 rounded-full px-3 py-1 dark:text-gray-400 text-gray-600 text-xs flex items-center" aria-label="due on" role="contentinfo">
                                      <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alarm" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z"></path>
                                          <circle cx="12" cy="13" r="7"></circle>
                                          <polyline points="12 10 12 13 14 13"></polyline>
                                          <line x1="7" y1="4" x2="4.25" y2="6"></line>
                                          <line x1="17" y1="4" x2="19.75" y2="6"></line>
                                      </svg>
                                      <p class="ml-2 dark:text-gray-400">7 Sept, 23:00</p>
                                  </div>
                                  <button class="p-1 bg-gray-800 dark:bg-gray-100 rounded-full ml-2 text-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-black" aria-label="save in starred items" role="button">
                                      <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z"></path>
                                          <path d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z"></path>
                                      </svg>
                                  </button>
                              </div>
                              <div class="flex items-center justify-between text-gray-800">
                                  <p class="dark:text-gray-100 text-sm">March 28, 2020</p>
                                  <button class="w-8 h-8 rounded-full dark:bg-gray-100 dark:text-gray-800 bg-gray-800 text-white flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-black" aria-label="edit note" role="button">
                                      <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z"></path>
                                          <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                          <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"></line>
                                      </svg>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <!-- <div class="shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1 w-full h-64 flex flex-col justify-between dark:bg-gray-800 bg-white dark:border-gray-700 rounded-lg border border-gray-400 mb-6 py-5 px-4">
                          <div>
                              <h3 class="text-gray-800 dark:text-gray-100 leading-7 font-semibold w-11/12">What does success as a UX designer look like and how to get there systematically</h3>
                          </div>
                          <div>
                              <div class="mb-3 flex items-center flex-no-wrap">
                                  <div class="w-6 h-6 bg-cover bg-center rounded-md">
                                      <img src="https://tuk-cdn.s3.amazonaws.com/assets/components/avatars/a_4_0.png" alt="read by Alia" class="h-full w-full overflow-hidden object-cover rounded-full border-2 border-white dark:border-gray-700 shadow" />
                                  </div>
                                  <div class="w-6 h-6 bg-cover rounded-md -ml-2">
                                      <img src="https://tuk-cdn.s3.amazonaws.com/assets/components/avatars/a_4_1.png" alt="read by jason" class="h-full w-full overflow-hidden object-cover rounded-full border-2 border-white dark:border-gray-700 shadow" />
                                  </div>
                                  <div class="w-6 h-6 bg-cover rounded-md bg-center -ml-2">
                                      <img src="https://tuk-cdn.s3.amazonaws.com/assets/components/avatars/a_4_2.png" alt="read by Kane" class="h-full w-full overflow-hidden object-cover rounded-full border-2 border-white dark:border-gray-700 shadow" />
                                  </div>
                              </div>
                              <div class="flex items-center justify-between text-gray-800">
                                  <p class="dark:text-gray-100 text-sm">March 28, 2020</p>
                                  <button class="w-8 h-8 rounded-full dark:bg-gray-100 dark:text-gray-800 bg-gray-800 text-white flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-black" aria-label="edit note" role="button">
                                      <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z"></path>
                                          <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                          <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"></line>
                                      </svg>
                                  </button>
                              </div>
                          </div>
                      </div> -->
                  </div>
                  <div class="rounded">
                      <div class="shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1 w-full h-64 flex flex-col justify-between items-start dark:bg-gray-800 bg-white dark:border-gray-700 rounded-lg border border-gray-400 mb-6 py-5 px-4">
                          <div>
                              <h4 class="text-gray-800 dark:text-gray-100 font-bold mb-3">13 things to work on</h4>
                              <p class="text-gray-800 dark:text-gray-100 text-sm">Probabo, inquit, sic agam, ut labore et voluptatem sequi nesciunt, neque porro quisquam est, quid malum, sensu iudicari</p>
                          </div>
                          <div class="w-full flex flex-col items-start">
                              <div aria-label="time" role="contentinfo" class="mb-3 border border-gray-800 rounded-full px-3 py-1 text-gray-800 dark:text-gray-400 dark:border-gray-700 text-xs flex items-center">
                                  <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alarm" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z"></path>
                                      <circle cx="12" cy="13" r="7"></circle>
                                      <polyline points="12 10 12 13 14 13"></polyline>
                                      <line x1="7" y1="4" x2="4.25" y2="6"></line>
                                      <line x1="17" y1="4" x2="19.75" y2="6"></line>
                                  </svg>
                                  <p class="ml-2">7 Sept, 23:00</p>
                              </div>
                              <div class="flex items-center justify-between text-gray-800 dark:text-gray-100 w-full">
                                  <p class="text-sm">March 28, 2020</p>
                                  <button class="w-8 h-8 rounded-full bg-gray-800 dark:text-gray-800 dark:bg-gray-100 text-white flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-black" aria-label="edit note" role="button">
                                      <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z"></path>
                                          <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                          <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"></line>
                                      </svg>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <div class="shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1 w-full h-64 flex flex-col justify-between bg-gray-300 dark:bg-gray-700 dark:border-gray-700 rounded-lg border border-gray-300 mb-6 py-5 px-4">
                          <div>
                              <h4 class="text-gray-800 dark:text-gray-100 font-bold mb-3">13 things to work on</h4>
                              <p class="text-gray-800 dark:text-gray-100 text-sm">Our interior design experts work with you to create the space that you have been dreaming about.</p>
                          </div>
                          <div>
                              <div class="flex items-center justify-between text-gray-800 dark:text-gray-100">
                                  <p class="text-sm">March 28, 2020</p>
                                  <button class="w-8 h-8 rounded-full bg-gray-800 text-white dark:bg-gray-100 dark:text-gray-800 flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 ring-offset-gray-300  focus:ring-black"  aria-label="edit note" role="button">
                                      <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z"></path>
                                          <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                          <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"></line>
                                      </svg>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <!-- <div class="shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1 w-full h-64 flex flex-col justify-between bg-yellow-400 rounded-lg border border-yellow-400 mb-6 py-5 px-4">
                          <div>
                              <h4 class="text-gray-800 font-bold mb-3">13 things to work on</h4>
                              <p class="text-gray-800 text-sm">Our interior design experts work with you to create the space that you have been dreaming about.</p>
                          </div>
                          <div>
                              <div class="flex items-center justify-between text-gray-800">
                                  <p class="text-sm">March 28, 2020</p>
                                  <button class="w-8 h-8 rounded-full bg-gray-800 text-white flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 ring-offset-yellow-400  focus:ring-black" aria-label="edit note" role="button">
                                      <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z"></path>
                                          <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                          <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"></line>
                                      </svg>
                                  </button>
                              </div>
                          </div>
                      </div> -->
                  </div>
                  <div class="rounded">
                      <div class="shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1 w-full h-64 flex flex-col justify-between dark:bg-gray-800 bg-white dark:border-gray-700 rounded-lg border border-gray-400 mb-6 py-5 px-4">
                          <div>
                              <h3 class="text-gray-800 dark:text-gray-100 leading-7 font-semibold w-11/12">What does success as a UX designer look like and how to get there systematically</h3>
                          </div>
                          <div>
                              <div class="mb-3 flex items-center">
                                  <button class="p-1 bg-gray-800 dark:bg-gray-100 rounded-full text-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-black" aria-label="save in starred messages" role="button">
                                      <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z"></path>
                                          <path d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z"></path>
                                      </svg>
                                  </button>
                              </div>
                              <div class="flex items-center justify-between text-gray-800 dark:text-gray-100">
                                  <p class="text-sm">March 28, 2020</p>
                                  <button class="w-8 h-8 rounded-full bg-gray-800 text-white dark:bg-gray-100 dark:text-gray-800 flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-black" aria-label="edit note" role="button">
                                      <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z"></path>
                                          <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                          <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"></line>
                                      </svg>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <div class="shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1 w-full h-64 flex flex-col justify-between dark:bg-gray-800 bg-white dark:border-gray-700 rounded-lg border border-gray-400 mb-6 py-5 px-4">
                          <div>
                              <h3 class="text-gray-800 dark:text-gray-100 leading-7 font-semibold w-11/12">What does success as a UX designer look like and how to get there systematically</h3>
                          </div>
                          <div>
                              <div class="mb-3 flex items-center flex-no-wrap">
                                  <div class="w-6 h-6 bg-cover bg-center rounded-md">
                                      <img src="https://tuk-cdn.s3.amazonaws.com/assets/components/avatars/a_4_0.png" alt="read by Alia" class="h-full w-full overflow-hidden object-cover rounded-full border-2 border-white dark:border-gray-700 shadow" />
                                  </div>
                                  <div class="w-6 h-6 bg-cover rounded-md -ml-2">
                                      <img src="https://tuk-cdn.s3.amazonaws.com/assets/components/avatars/a_4_1.png" alt="read by jason" class="h-full w-full overflow-hidden object-cover rounded-full border-2 border-white dark:border-gray-700 shadow" />
                                  </div>
                                  <div class="w-6 h-6 bg-cover rounded-md bg-center -ml-2">
                                      <img src="https://tuk-cdn.s3.amazonaws.com/assets/components/avatars/a_4_2.png" alt="read by Kane" class="h-full w-full overflow-hidden object-cover rounded-full border-2 border-white dark:border-gray-700 shadow" />
                                  </div>
                              </div>
                              <div class="flex items-center justify-between text-gray-800 dark:text-gray-100">
                                  <p class="text-sm">March 28, 2020</p>
                                  <button class="w-8 h-8 rounded-full bg-gray-800 text-white dark:bg-gray-100 dark:text-gray-800 flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-black" aria-label="edit note" role="button">
                                      <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z"></path>
                                          <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                          <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"></line>
                                      </svg>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <!-- <div class="shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1 w-full h-64 flex flex-col justify-between bg-red-300 rounded-lg border border-red-300 mb-6 py-5 px-4">
                          <div>
                              <h3 class="text-gray-800 leading-7 font-semibold w-11/12">What does success as a UX designer look like and how to get there systematically</h3>
                          </div>
                          <div>
                              <div class="flex items-center justify-between text-gray-800">
                                  <p class="text-sm">March 28, 2020</p>
                                  <button class="w-8 h-8 rounded-full bg-gray-800 text-white flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 ring-offset-red-300 focus:ring-black" aria-label="edit note" role="button">
                                      <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z"></path>
                                          <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                          <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"></line>
                                      </svg>
                                  </button>
                              </div>
                          </div>
                      </div> -->
                  </div>
              </div>
          </div>

          
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="position-relative container">
      <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 my-card">
                <div class="bg-white m-5">
                    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="mynav-link active" id="faq_tab_1-tab" data-bs-toggle="tab" data-bs-target="#faq_tab_1" type="button" role="tab" aria-controls="faq_tab_1" aria-selected="true">
                                <div class="d-flex flex-column lh-lg"><i class="bx bxs-plane-alt"></i> <span>Conference Details/Info</span></div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="mynav-link" id="faq_tab_2-tab" data-bs-toggle="tab" data-bs-target="#faq_tab_2" type="button" role="tab" aria-controls="faq_tab_2" aria-selected="false">
                                <div class="d-flex flex-column lh-lg"><i class="bx bxs-shopping-bag"></i> <span>Available Hotels/Rooms</span></div>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="faq_tab_1" role="tabpanel" aria-labelledby="faq_tab_1-tab">
                            <div class="container p-3 scroll-y">
                              <ul class="flex flex-col">
                                <li class="bg-white rounded my-2 shadow-lg" x-data="accordion(1)">
                                <h2
                                    @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>When will my order arrive?</span>
                                    <svg
                                    :class="handleRotate()"
                                    class="fill-current text-blue-900 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20"
                                    >
                                    <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                    x-ref="tab"
                                    :style="handleToggle()"
                                    class="border-l-2 border-green-600 overflow-hidden max-h-0 duration-500 transition-all"
                                >
                                    <p class="p-3 text-gray-900">
                                    Shipping time is set by our delivery partners, according to the delivery method chosen by you. Additional details can be found in the order confirmation
                                    </p>
                                </div>
                                </li>
                                <li class="bg-white rounded my-2 shadow-lg" x-data="accordion(2)">
                                <h2
                                    @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>How do I track my order?</span>
                                    <svg
                                    :class="handleRotate()"
                                    class="fill-current text-blue-900 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20"
                                    >
                                    <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                    class="border-l-2 border-green-600 overflow-hidden max-h-0 duration-500 transition-all"
                                    x-ref="tab"
                                    :style="handleToggle()"
                                >
                                    <p class="p-3 text-gray-900">
                                    Once shipped, you’ll get a confirmation email that includes a tracking number and additional information regarding tracking your order.
                                    </p>
                                </div>
                                </li>
                                <li class="bg-white rounded my-2 shadow-lg" x-data="accordion(3)">
                                <h2
                                    @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>What’s your return policy?</span>
                                    <svg
                                    :class="handleRotate()"
                                    class="fill-current text-blue-900 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20"
                                    >
                                    <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                    class="border-l-2 border-green-600 overflow-hidden max-h-0 duration-500 transition-all"
                                    x-ref="tab"
                                    :style="handleToggle()"
                                >
                                    <p class="p-3 text-gray-900">
                                    We allow the return of all items within 30 days of your original order’s date. If you’re interested in returning your items, send us an email with your order number and we’ll ship a return label.
                                    </p>
                                </div>
                                </li>
                                <li class="bg-white rounded my-2 shadow-lg" x-data="accordion(4)">
                                <h2
                                    @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>How do I make changes to an existing order?</span>
                                    <svg
                                    :class="handleRotate()"
                                    class="fill-current text-blue-900 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20"
                                    >
                                    <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                    class="border-l-2 border-green-600 overflow-hidden max-h-0 duration-500 transition-all"
                                    x-ref="tab"
                                    :style="handleToggle()"
                                >
                                    <p class="p-3 text-gray-900">
                                    Changes to an existing order can be made as long as the order is still in “processing” status. Please contact our team via email and we’ll make sure to apply the needed changes. If your order has already been shipped, we cannot apply any changes to it. If you are unhappy with your order when it arrives, please contact us for any changes you may require.
                                    </p>
                                </div>
                                </li>
                                <li class="bg-white rounded my-2 shadow-lg" x-data="accordion(5)">
                                <h2
                                    @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>What shipping options do you have?</span>
                                    <svg
                                    :class="handleRotate()"
                                    class="fill-current text-blue-900 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20"
                                    >
                                    <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                    class="border-l-2 border-green-600 overflow-hidden max-h-0 duration-500 transition-all"
                                    x-ref="tab"
                                    :style="handleToggle()"
                                >
                                    <p class="p-3 text-gray-900">
                                    For USA domestic orders we offer FedEx and USPS shipping.
                                    </p>
                                </div>
                                </li>
                                <li class="bg-white rounded my-2 shadow-lg" x-data="accordion(6)">
                                <h2
                                    @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                                >
                                    <span>What payment methods do you accept?</span>
                                    <svg
                                    :class="handleRotate()"
                                    class="fill-current text-blue-900 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20"
                                    >
                                    <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                <div
                                    class="border-l-2 border-green-600 overflow-hidden max-h-0 duration-500 transition-all"
                                    x-ref="tab"
                                    :style="handleToggle()"
                                >
                                    <p class="p-3 text-gray-900">
                                    Any method of payments acceptable by you. For example: We accept MasterCard, Visa, American Express, PayPal, JCB Discover, Gift Cards, etc.
                                    </p>
                                </div>
                                </li>
                            </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="faq_tab_2" role="tabpanel" aria-labelledby="faq_tab_2-tab">
                            <div class="container p-3 scroll-y table-responsive">
                              <table class="table table-hover table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">HOTEL</th>
                                    <th scope="col">RATE</th>
                                    <th scope="col">ROOMS AVAILABLE</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Hotel De Bentley</td>
                                    <td>290000</td>
                                    <td>68</td>
                                  </tr>
                                  <tr>
                                    <td>BELANOVA Apartments and Suites</td>
                                    <td>600000</td>
                                    <td>9</td>
                                  </tr>
                                  <tr>
                                    <td>Chelsea</td>
                                    <td>365000</td>
                                    <td>39</td>
                                  </tr>
                                  <tr>
                                    <td>Chida</td>
                                    <td>290000</td>
                                    <td>83</td>
                                  </tr>
                                  <tr>
                                    <td>JOHNWOOD Hotel by BOLTON</td>
                                    <td>620000</td>
                                    <td>29</td>
                                  </tr>
                                  <tr>
                                    <td>Grand Pela Hotel & Suites</td>
                                    <td>380000</td>
                                    <td>59</td>
                                  </tr>
                                  <tr>
                                    <td>Hawthorn Suites</td>
                                    <td>310000</td>
                                    <td>63</td>
                                  </tr>
                                  <tr>
                                    <td>RockView</td>
                                    <td>365000</td>
                                    <td>92</td>
                                  </tr>
                                  <tr>
                                    <td>Sheraton - Classic Room</td>
                                    <td>460000</td>
                                    <td>6</td>
                                  </tr>
                                  <tr>
                                    <td>Sheraton - Superior Room</td>
                                    <td>505000</td>
                                    <td>21</td>
                                  </tr>
                                  <tr>
                                    <td>Envoy Hotel</td>
                                    <td>480000</td>
                                    <td>29</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container mt-4">
              <br><a href="/assets/uploads/ICANAACPRIVACY.PDF" download class="btn btn-primary mb-3 btn-sm">Privacy Policy</a>
              <p>
                ALL HOTEL BOOKINGS WILL BE ON “FIRST-COME-FIRST-SERVED” BASIS.</p>
                <p><b>SPONSORSHIP</b>: Members requiring that letters be addressed to their employers for sponsorship should contact the Membership Affairs Directorate: gaakinlawon@ican.org.ng; iadams@ican.org.ng).</p>
                <p><b>NOTE</b>: GROUP PAYMENT - Organisations wishing to make group registration for their members of Staff should pay at any of the designated banks and collect individual PAYDIRECT Receipt and register them online - icanportal.org/members/confregs or click <a style="text-decoration: none; background:#12984f; color: #fff;" href="./paymasters/create.html">Here</a> to pay and register them individualy online</p>
                  <p>Registration for Accommodation closes on Monday 19 September 2022. “All bookings will be on “first-come-first-served basis”</p>
            </div> -->
        </div>
    </div>
    
    </div>

    <!--  -->

  </section>
    <section class="relative">
      <div class=" absolute -bottom-6 -right-32 -z-10 aspect-square md:border-8 border-blue-800 rounded-full md:w-64 lg:w-96 xl:max-w-lg"></div>
      <div class=" bg-green-600 h-24 xl:h-48 -mx-8 mt-5 xl:mt-0 xl:absolute w-screen -bottom-8 -z-10"></div>
    </section>
  <!-- End Hero Section -->
<footer class="bg-white dark:bg-gray-900">
    <div class="container p-6 mx-auto">
        <div class="lg:flex">
            <div class="w-full -mx-6 lg:w-2/5">
                <div class="px-6">
                    <div>
                        <a href="#" class="text-xl font-bold text-gray-800 dark:text-white hover:text-gray-700 dark:hover:text-gray-300">Brand</a>
                    </div>

                    <p class="max-w-sm mt-2 text-gray-500 dark:text-gray-400">Join 31,000+ other and never miss out on new tips, tutorials, and more.</p>

                    <div class="flex mt-6 -mx-2">
                        <a href="#"
                            class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                            aria-label="Reddit">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                </path>
                            </svg>
                        </a>
                    
                        <a href="#"
                            class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                            aria-label="Facebook">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                </path>
                            </svg>
                        </a>
                    
                        <a href="#"
                            class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                            aria-label="Github">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-6 lg:mt-0 lg:flex-1">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    <div>
                        <h3 class="text-gray-700 uppercase dark:text-white">About</h3>
                        <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Company</a>
                        <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">community</a>
                        <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Careers</a>
                    </div>

                    <div>
                        <h3 class="text-gray-700 uppercase dark:text-white">Blog</h3>
                        <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Tec</a>
                        <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Music</a>
                        <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Videos</a>
                    </div>

                    <div>
                        <h3 class="text-gray-700 uppercase dark:text-white">Products</h3>
                        <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Mega cloud</a>
                        <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Aperion UI</a>
                        <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Meraki UI</a>
                    </div>

                    <div>
                        <h3 class="text-gray-700 uppercase dark:text-white">Contact</h3>
                        <span class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">+1 526 654 8965</span>
                        <span class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">example@email.com</span>
                    </div>
                </div>
            </div>
        </div>

        <hr class="h-px my-6 bg-gray-200 border-none dark:bg-gray-700">

        <div>
            <p class="text-center text-gray-500 dark:text-gray-400">© Brand 2020 - All rights reserved</p>
        </div>
    </div>
</footer>
<script>
    document.addEventListener('alpine:init', () => {
      Alpine.store('accordion', {
        tab: 0
      });
      
      Alpine.data('accordion', (idx) => ({
        init() {
          this.idx = idx;
        },
        idx: -1,
        handleClick() {
          this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
        },
        handleRotate() {
          return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
        },
        handleToggle() {
          return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
        }
      }));
    })
  </script>
    <!-- <link rel="stylesheet" href="./assets/styles/styles.css" /> -->
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
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