<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YellowSquash</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="css/bootstrap-min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/slick.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    

  </head>
  <body>
    <div class="main-wrapper">
      <div class="header">
        <div class="top-bar-header">
          <div class="container">
            <div class="row flex">
              <div class="col-md-2 b-right">
                <div class="top-bar-email tp-text">
                <span><i class="fa-solid fa-envelope"></i></span> <a href="mailto:info@yellowsquash.in">info@yellowsquash.in</a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="top-bar-phone tp-text">
                  <span><i class="fas fa-phone"></i></span> <a href="tel:+919717333655">+91 97173 33655</a>
                </div>
              </div>
              <div class="col-md-5">
                <div class="text-uppercase tp-text tp-tagline">Intro Price ! Get Online Programmes @ 25% Offer<span class="tagline-rtext">New</span></div>
              </div>
              <div class="col-md-3">
                <div class="tp-header-cta">
                  <a href="#">Register as an Expert</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="main-header">
          <div class="container">
            <div class="row">
              <div class="col-xl-2 col-lg-4 col-6">
                <div class="header-logo">
                  <a href="index.html"><img src="images/logo.png"></a>
                </div>
              </div>
              <div class="col-xl-7 col-lg-8 col-6">
                <div class="top-navigation">
                  <nav class="navbar navbar-expand-xl navbar-light">
  
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="program.html">Programs</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="workshop.html">Workshop</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="expert-list.html">Experts</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="blog.html">Healthpedia</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Store</a>
                        </li>
                        
                      </ul>
                    </div>
                  </nav>
                 
                </div>
              </div>
              
              <div class="col-md-3 main-heder-right">
                <div class="header-right">
                  <div class="user-login">
                    <a href="{{route('frontend/login')}}">
                      <i class="fa-regular fa-user"></i>Login
                    </a>
                  </div>
                  <div class="header-cta">
                    <a href="{{route('frontend/register')}}" class="yst-btn">Register Now  <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
                
                
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="main">
        <!---Banner Start--->
        <div class="hero-banner">
          <div class="banner-inner">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="banner-con">
                    <h2 class="banner-heading">
                      Find The Best<br>
                      <span>Solution For Your</span><br>
                      Chronic Conditions!
                    </h2>
                    <div class="banner-text">
                      Achieve long-term wellness through simple,<br> powerful, and holistic changes in your lifestyle.
                    </div>
                    <div class="banner-cta">
                      <a href="#" class="yst-btn">TALK TO US  <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="banner-img">
                    <img src="images/banner-img.png">
                    <span class="video-popup-btn"><i class="fa-solid fa-play"></i></span>
                  </div>
                </div>
              </div>
              <div class="video-banner modal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="video-popup">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/C0DPdy98e4c?si=f-tkoXXc9Fk_I8H6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!---Banner End-->

        <!---Meet Expert STart-->
        <div class="meet-expert">
          <div class="container">
            <div class="expert-inner">
              <div class="section-heding text-center">
                <h2 class="ys-headting">Meet Our Top Experts</h2>
              </div>
              <div class="slider-inner">
                <div id="expert-slider">
                  <div class="item">
                    <div class="expert-list">
                      <div class="expert-img">
                        <img src="images/expert1.jpg">
                      </div>
                      <div class="expert-info">
                        <h3 class="expert-name">Dr. Gaurang Ramesh</h3>
                        <div class="expert-designation">
                          Functional Medicine Expert , MBBS
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="expert-list">
                      <div class="expert-img">
                        <img src="images/expert2.jpg">
                      </div>
                      <div class="expert-info">
                        <h3 class="expert-name">Dr. Ashwani Garg</h3>
                        <div class="expert-designation">
                          Surgical Gastroenterology | Functional Medicine
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="expert-list">
                      <div class="expert-img">
                        <img src="images/expert1.jpg">
                      </div>
                      <div class="expert-info">
                        <h3 class="expert-name">Dr. Ashwani Garg</h3>
                        <div class="expert-designation">
                          Functional Medicine Expert , MBBS
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!---Meet Expert End-->

        <!---Health Concern Form Start--->
        <div class="health-concern">
          <div class="container">
            <div class="health-concern-inner">
              <div class="section-heding text-center">
                <h2 class="ys-headting">Share Your Health Concerns</h2>
              </div>
              <form class="health-concern-from">
                <div class="row">
                  <div class="col-md-4">
                    <input type="text" placeholder="Full Name*" required="" class="ys-field">
                  </div>
                  <div class="col-md-4">
                    <input type="email" placeholder="Email*" required="" class="ys-field">
                  </div>
                  <div class="col-md-4">
                    <input type="text" placeholder="Phone Number*" required="" class="ys-field">
                  </div>
                  <div class="col-md-4">
                    <select class="ys-field">
                      <option>Select your concern*</option>
                      <option>Concern 1</option>
                      <option>Concern 2</option>
                      <option>Concern 3</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <div class="form-radio">
                      <input type="radio" >Workshops
                    </div>
                    <div class="form-radio">
                      <input type="radio" >Programs
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-cta text-md-end">
                      <button type="submit" class="yst-btn">Submit  <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!---Health Concern Form End--->

        <!---Condition Start--->
        <div class="condition-cover">
          <div class="container container-custom">
            <div class="row align-items-center">
              <div class="col-lg-8 col-md-6">
                <div class="section-heding">
                  <h2 class="ys-headting">Conditions We Cover</h2>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="ys-cta text-md-end">
                      <a href="program.html" class="yst-btn">Explore Our Programs  <i class="fa-solid fa-arrow-right"></i></a>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="condition-tabs ys-tabs">
                  <nav>
                    <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="programs" data-bs-toggle="tab" data-bs-target="#programs-content" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Programs</button>
                      <button class="nav-link" id="workshops" data-bs-toggle="tab" data-bs-target="#workshops-content" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Workshops</button>
                      
                    </div>
                  </nav>
                  <div class="tab-content p-3 border bg-light" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="programs-content" role="tabpanel" aria-labelledby="programs">
                      <div class="conditions-slider">
                        <div class="item">
                          <div class="condition-list text-center">
                            <div class="con-icon">
                              <img src="images/ADHD.png" class="m-auto">
                            </div>
                            <div class="con-text">
                              ADHD
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="condition-list text-center">
                            <div class="con-icon">
                              <img src="images/GDD.png" class="m-auto">
                            </div>
                            <div class="con-text">
                              GDD
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="condition-list text-center">
                            <div class="con-icon">
                              <img src="images/Accupressure.png" class="m-auto">
                            </div>
                            <div class="con-text">
                              Accupressure
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="condition-list text-center">
                            <div class="con-icon">
                              <img src="images/Allergies.png" class="m-auto">
                            </div>
                            <div class="con-text">
                              Allergies
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="condition-list text-center">
                            <div class="con-icon">
                              <img src="images/Autism.png" class="m-auto">
                            </div>
                            <div class="con-text">
                              Autism
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="condition-list text-center">
                            <div class="con-icon">
                              <img src="images/Diabetes.png" class="m-auto">
                            </div>
                            <div class="con-text">
                              Diabetes
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="condition-list text-center">
                            <div class="con-icon">
                              <img src="images/ADHD.png" class="m-auto">
                            </div>
                            <div class="con-text">
                              Diet
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                
                    <div class="tab-pane fade" id="workshops-content" role="tabpanel" aria-labelledby="workshops">
                      <div class="conditions1-slider">
                        <div class="item">
                          <div class="condition-list text-center">
                            <div class="con-icon">
                              <img src="images/ADHD.png" class="m-auto">
                            </div>
                            <div class="con-text">
                              ADHD
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="condition-list text-center">
                            <div class="con-icon">
                              <img src="images/GDD.png" class="m-auto">
                            </div>
                            <div class="con-text">
                              GDD
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="condition-list text-center">
                            <div class="con-icon">
                              <img src="images/Accupressure.png" class="m-auto">
                            </div>
                            <div class="con-text">
                              Accupressure
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="condition-list text-center">
                            <div class="con-icon">
                              <img src="images/Allergies.png" class="m-auto">
                            </div>
                            <div class="con-text">
                              Allergies
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="condition-list text-center">
                            <div class="con-icon">
                              <img src="images/Autism.png" class="m-auto">
                            </div>
                            <div class="con-text">
                              Autism
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="condition-list text-center">
                            <div class="con-icon">
                              <img src="images/Diabetes.png" class="m-auto">
                            </div>
                            <div class="con-text">
                              Diabetes
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="condition-list text-center">
                            <div class="con-icon">
                              <img src="images/ADHD.png" class="m-auto">
                            </div>
                            <div class="con-text">
                              Diet
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!---Condition End--->

        <!---Popular Workshops Start--->
        <div class="workshops-section">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-8 col-md-6">
                <div class="section-heding">
                  <h2 class="ys-headting">Popular Workshops</h2>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="ys-cta text-md-end">
                      <a href="workshop.html" class="yst-btn">Explore Our Workshops <i class="fa-solid fa-arrow-right"></i></a>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="programs-tabs ys-tabs">
                  <nav>
                    <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="adhd" data-bs-toggle="tab" data-bs-target="#adhd-content" type="button" role="tab" aria-controls="nav-adhd" aria-selected="true">ADHD</button>
                      <button class="nav-link" id="gdd" data-bs-toggle="tab" data-bs-target="#gdd-content" type="button" role="tab" aria-controls="nav-gdd" aria-selected="false">GDD</button>
                      <button class="nav-link" id="asd" data-bs-toggle="tab" data-bs-target="#asd-content" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">ASD</button>
                      <button class="nav-link" id="accupressure" data-bs-toggle="tab" data-bs-target="#accupressure-content" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Accupressure</button>
                      <button class="nav-link" id="allergies" data-bs-toggle="tab" data-bs-target="#allergies-content" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Allergies</button>

                      
                    </div>
                  </nav>
                  <div class="tab-content p-3 border bg-light" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="adhd-content" role="tabpanel" aria-labelledby="adhd">
                      <div class="programs-inner">
                        <div class="row">
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Dr.+Ashwani+Garg+_+Functional+Medicine+Expert+_+Health+and+Wellness+Consultant.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Developmental Disorders
                                </div>
                                <div class="program-desc">
                                  For parents of children with developmental disorders such as autism, GDD, ADHD, and learning disabilities.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert2.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Ashwani Garg
                                    </div>
                                    <div class="p-expert-designation">
                                      Functional Medicine Expert , MBBS
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/LCHF-program-page+video+download.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  2-Day Workshop on Low Carb Healthy Fat (LCHF) Lifestyle
                                </div>
                                <div class="program-desc">
                                  People who are tired of persistent lifestyle disorders and looking for a practical solution.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert3.png">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Satyajit Dash
                                    </div>
                                    <div class="p-expert-designation">
                                      LCHF Coach | Sports Nutrition
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Infertility+Intro+RP.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Be Baby Ready Program for Infertility
                                </div>
                                <div class="program-desc">
                                  Begin Your Motherhood Journey through Personalized Guidance and Expert Support!
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert4.png">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                     Meenakshi Rana
                                    </div>
                                    <div class="p-expert-designation">
                                      Low Carb Nutritionist | Holistic Fertility Coach
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  A learning community where people can share knowledge
                                </div>
                                <div class="program-desc">
                                  Fusce tristique blandit turpis eu lobortis. In fringilla, sapien in bibendum accumsan, est felis lobortis nisi.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                
                    <div class="tab-pane fade" id="gdd-content" role="tabpanel" aria-labelledby="gdd">
                      <div class="programs-inner">
                        <div class="row">
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="asd-content" role="tabpanel" aria-labelledby="asd">
                      <div class="programs-inner">
                        <div class="row">
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>


                    <div class="tab-pane fade" id="accupressure-content" role="tabpanel" aria-labelledby="accupressure">
                      <div class="programs-inner">
                        <div class="row">
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>


                    <div class="tab-pane fade" id="allergies-content" role="tabpanel" aria-labelledby="allergies">
                      <div class="programs-inner">
                        <div class="row">
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                         
                        </div>  
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <!---Popular Workshops End--->

        <!-----Why choose us Start---->

        <div class="choose-us">
          <div class="container">
            <div class="row space-between">
              <div class="col-lg-3 col-md-6 wc-col">
                <a href="how-tocontrol-diabetes.html"><div class="wc-inner wcbg-blue">
                  <div class="wc-heading">
                    How to control Diebetes?
                  </div>
                  <div class="wc-desc">
                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T.
                  </div>
                </div></a>
              </div>
              <div class="col-lg-3 col-md-6 wc-col">
                <a href="how-tocontrol-diabetes.html"><div class="wc-inner  wcbg-yellow">
                  <div class="wc-heading">
                    How to control Diebetes?
                  </div>
                  <div class="wc-desc">
                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T.
                  </div>
                </div></a>
              </div>
              <div class="col-lg-3 col-md-6 wc-col">
                <a href="how-tocontrol-diabetes.html"><div class="wc-inner  wcbg-purple">
                  <div class="wc-heading">
                    How to control Diebetes?
                  </div>
                  <div class="wc-desc">
                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T.
                  </div>
                </div></a>
              </div>
              <div class="col-lg-3 col-md-6 wc-col">
                <a href="how-tocontrol-diabetes.html"> <div class="wc-inner wcbg-yellow">
                  <div class="wc-heading">
                    How to control Diebetes?
                  </div>
                  <div class="wc-desc">
                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T.
                  </div>
                </div></a>
              </div>
            </div>
            <div class="row space-between small-row">
              
              <div class="col-lg-3 col-md-6 wc-col">
                <a href="how-tocontrol-diabetes.html">  <div class="wc-inner  wcbg-white">
                  <div class="wc-heading">
                    How to control Diebetes?
                  </div>
                  <div class="wc-desc">
                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T.
                  </div>
                </div></a>
              </div>
              <div class="col-lg-3 col-md-6 wc-col">
                <a href="how-tocontrol-diabetes.html">  <div class="wc-inner  wcbg-blue">
                  <div class="wc-heading">
                    How to control Diebetes?
                  </div>
                  <div class="wc-desc">
                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T.
                  </div>
                </div></a>
              </div>
              <div class="col-lg-3 col-md-6 wc-col">
                <a href="how-tocontrol-diabetes.html">  <div class="wc-inner wcbg-white">
                  <div class="wc-heading">
                    How to control Diebetes?
                  </div>
                  <div class="wc-desc">
                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T.
                  </div>
                </div></a>
              </div>
            </div>
            <div class="row space-between">
              <div class="col-lg-3 col-md-6 wc-col">
                <a href="how-tocontrol-diabetes.html"> <div class="wc-inner wcbg-blue">
                  <div class="wc-heading">
                    How to control Diebetes?
                  </div>
                  <div class="wc-desc">
                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T.
                  </div>
                </div></a>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="wc-inner-text">
                  <div class="wc-heading-big text-center">
                    <h2>Why Choose Us</h2>
                  </div>
                  
                </div>
              </div>
              
              <div class="col-lg-3 col-md-6 wc-col">
                <a href="how-tocontrol-diabetes.html">   <div class="wc-inner wcbg-blue">
                  <div class="wc-heading">
                    How to control Diebetes?
                  </div>
                  <div class="wc-desc">
                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T.
                  </div>
                </div> </a>
              </div>
            </div>
            <div class="row space-between small-row">
              
              <div class="col-lg-3 col-md-6 wc-col">
                <a href="how-tocontrol-diabetes.html"> <div class="wc-inner  wcbg-white">
                  <div class="wc-heading">
                    How to control Diebetes?
                  </div>
                  <div class="wc-desc">
                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T.
                  </div>
                </div></a>
              </div>
              
              <div class="col-lg-3 col-md-6 wc-col">
                <a href="how-tocontrol-diabetes.html"> <div class="wc-inner wcbg-white">
                  <div class="wc-heading">
                    How to control Diebetes?
                  </div>
                  <div class="wc-desc">
                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T.
                  </div>
                </div></a>
              </div>
            </div>
            <div class="social-media">
              <div class="row space-between">
                <div class="section-heding text-center mb-4">
                  <h2 class="ys-headting">Follow Us On Social Media</h2>
                </div>
                <div class="col-lg-3 col-md-6 wc-col">
                  <div class="wc-inner  wcbg-yellow">
                    <div class="social-link-inner">
                      <div class="social-icon">
                        <i class="fa-brands fa-facebook-f"></i>
                      </div>
                      <div class="social-text">
                        <div class="social-heading">
                          Facebook
                        </div>
                        <div class="social-info">
                          <span><i class="fa-brands fa-instagram"></i> 620</span>
                          <span><i class="fa-brands fa-square-facebook"></i> 620</span>
                        </div>
                      </div>
                      <div class="clearfix">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 wc-col">
                  <div class="wc-inner  wcbg-pink">
                    <div class="social-link-inner">
                      <div class="social-icon">
                        <i class="fa-brands fa-square-instagram"></i>
                      </div>
                      <div class="social-text">
                        <div class="social-heading">
                          Instagram
                        </div>
                        <div class="social-info">
                          <span><i class="fa-brands fa-instagram"></i> 620</span>
                          <span><i class="fa-brands fa-square-facebook"></i> 620</span>
                        </div>
                      </div>
                      <div class="clearfix">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 wc-col">
                  <div class="wc-inner  wcbg-blue">
                    <div class="social-link-inner">
                      <div class="social-icon">
                        <i class="fa-brands fa-twitter"></i>
                      </div>
                      <div class="social-text">
                        <div class="social-heading">
                          Twitter
                        </div>
                        <div class="social-info">
                          <span><i class="fa-brands fa-instagram"></i> 620</span>
                          <span><i class="fa-brands fa-square-facebook"></i> 620</span>
                        </div>
                      </div>
                      <div class="clearfix">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 wc-col">
                  <div class="wc-inner  wcbg-white">
                    <div class="social-link-inner">
                      <div class="social-icon">
                        <i class="fa-brands fa-youtube"></i>
                      </div>
                      <div class="social-text">
                        <div class="social-heading">
                          Youtube
                        </div>
                        <div class="social-info">
                          <span><i class="fa-brands fa-instagram"></i> 620</span>
                          <span><i class="fa-brands fa-square-facebook"></i> 620</span>
                        </div>
                      </div>
                      <div class="clearfix">
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            
          </div>

        </div>
        <!-----Why choose us End------>

        <!---Popular Programs start--->
        <div class="programs-section">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-8 col-md-6">
                <div class="section-heding">
                  <h2 class="ys-headting">Popular Programs</h2>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="ys-cta text-md-end">
                      <a href="program.html" class="yst-btn">Explore Our Programs <i class="fa-solid fa-arrow-right"></i></a>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="programs-tabs ys-tabs">
                  <nav>
                    <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="adhd1" data-bs-toggle="tab" data-bs-target="#adhd-content1" type="button" role="tab" aria-controls="nav-adhd" aria-selected="true">ADHD</button>
                      <button class="nav-link" id="gdd1" data-bs-toggle="tab" data-bs-target="#gdd-content1" type="button" role="tab" aria-controls="nav-gdd" aria-selected="false">GDD</button>
                      <button class="nav-link" id="asd1" data-bs-toggle="tab" data-bs-target="#asd-content1" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">ASD</button>
                      <button class="nav-link" id="accupressure1" data-bs-toggle="tab" data-bs-target="#accupressure-content1" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Accupressure</button>
                      <button class="nav-link" id="allergies1" data-bs-toggle="tab" data-bs-target="#allergies-content1" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Allergies</button>

                      
                    </div>
                  </nav>
                  <div class="tab-content p-3 border bg-light" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="adhd-content1" role="tabpanel" aria-labelledby="adhd1">
                      <div class="programs-inner">
                        <div class="row">
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Dr.+Ashwani+Garg+_+Functional+Medicine+Expert+_+Health+and+Wellness+Consultant.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Developmental Disorders
                                </div>
                                <div class="program-desc">
                                  For parents of children with developmental disorders such as autism, GDD, ADHD, and learning disabilities.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert2.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Ashwani Garg
                                    </div>
                                    <div class="p-expert-designation">
                                      Functional Medicine Expert , MBBS
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/LCHF-program-page+video+download.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  2-Day Workshop on Low Carb Healthy Fat (LCHF) Lifestyle
                                </div>
                                <div class="program-desc">
                                  People who are tired of persistent lifestyle disorders and looking for a practical solution.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert3.png">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Satyajit Dash
                                    </div>
                                    <div class="p-expert-designation">
                                      LCHF Coach | Sports Nutrition
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Infertility+Intro+RP.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Be Baby Ready Program for Infertility
                                </div>
                                <div class="program-desc">
                                  Begin Your Motherhood Journey through Personalized Guidance and Expert Support!
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert4.png">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                     Meenakshi Rana
                                    </div>
                                    <div class="p-expert-designation">
                                      Low Carb Nutritionist | Holistic Fertility Coach
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  A learning community where people can share knowledge
                                </div>
                                <div class="program-desc">
                                  Fusce tristique blandit turpis eu lobortis. In fringilla, sapien in bibendum accumsan, est felis lobortis nisi.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                
                    <div class="tab-pane fade" id="gdd-content1" role="tabpanel" aria-labelledby="gdd1">
                      <div class="programs-inner">
                        <div class="row">
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="asd-content1" role="tabpanel" aria-labelledby="asd1">
                      <div class="programs-inner">
                        <div class="row">
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>


                    <div class="tab-pane fade" id="accupressure-content1" role="tabpanel" aria-labelledby="accupressure1">
                      <div class="programs-inner">
                        <div class="row">
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>


                    <div class="tab-pane fade" id="allergies-content1" role="tabpanel" aria-labelledby="allergies1">
                      <div class="programs-inner">
                        <div class="row">
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6">
                            <div class="program-list">
                              <div class="program-video">
                                <video controls="" class="mx-auto h-auto md:h-[280px]" controlslist="nodownload"><source src="https://ysdbresouces.s3.ap-south-1.amazonaws.com/sp/Intro+Video+Gorang.mp4" type="video/mp4"></video>
                              </div>
                              <div class="program-cont">
                                <div class="rating">
                                  <ul class="star-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li>4.5</li>
                                  </ul>
                                </div>
                                <div class="program-title">
                                  Functional Medicine Approach for Digestive Disorders
                                </div>
                                <div class="program-desc">
                                  People who are seeking sustainable relief from digestive disorders by treating root causes.
                                </div>
                                <div class="program-bottom">
                                  <div class="p-expert-img">
                                    <img src="images/expert1.jpg">
                                  </div>
                                  <div class="p-expert-info">
                                    <div class="p-expert-name">
                                      Dr. Gaurang Ramesh
                                    </div>
                                    <div class="p-expert-designation">
                                      Surgical Gastroenterology | Functional Medicine
                                    </div>
                                  </div>
                                  <div class="p-button">
                                    <a href="#" class="yst-btn">Subscribe</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                         
                        </div> 
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!---Popular Programs End--->

        <!---Journey start--->
        <div class="ys-journey">
          <div class="container">
            <div class="row">
              <div class="section-heding text-center mb-5">
                <h2 class="ys-headting">Start the Journey with Us</h2>
              </div>
              <div class="journey-list">
                <div class="journey-inner">
                  <div class="journey-img">
                    <img src="images/jimg1.png">
                  </div>
                  <div class="journey-con">
                    <div class="journey-heading">
                      Informative Events
                    </div>
                    <div class="journey-desc">
                      Find Your Path To Health!
                    </div>
                  </div>
                </div>
                <div class="journey-inner r-reverse">
                  
                  <div class="journey-con">
                    <div class="journey-heading">
                      Consultations
                    </div>
                    <div class="journey-desc">
                      Find The Best Wellness Expert For Yourself!
                    </div>
                  </div>
                  <div class="journey-img">
                    <img src="images/jimg2.png">
                  </div>
                </div>
                <div class="journey-inner">
                  <div class="journey-img">
                    <img src="images/jimg3.png">
                  </div>
                  <div class="journey-con">
                    <div class="journey-heading">
                      Wellness Programs
                    </div>
                    <div class="journey-desc">
                      Become a better version of yourself!
                    </div>
                  </div>
                </div>
                <div class="journey-inner r-reverse">
                  
                  <div class="journey-con">
                    <div class="journey-heading">
                      Product
                    </div>
                    <div class="journey-desc">
                      Coming Soon!
                    </div>
                  </div>
                  <div class="journey-img">
                    <img src="images/jimg4.png">
                  </div>
                </div>
                <div class="journey-inner">
                  <div class="journey-img">
                    <img src="images/jimg5.png">
                  </div>
                  <div class="journey-con">
                    <div class="journey-heading">
                      Healthpedia
                    </div>
                    <div class="journey-desc">
                      Become Aware!
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!---journey End--->

        <!----Our team start----->
        <div class="our-expert">
          <div class="container">
            <div class="our-expert-inner">
              <div class="row">
                <div class="section-heding text-center">
                    <h2 class="ys-headting">Our Experts</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="expert-box text-center">
                      <div class="o-expert-img">
                        <img src="images/MaskExpert1.png">
                      </div>
                      <div class="o-expert-info">
                        <div class="o-expert-name">
                          Dr. Indira Priyadarshini
                        </div>
                        <div class="o-expert-designation">
                          Infertility & Child Specialist
                        </div>
                      </div>
                      <div class="o-expert-bottom">
                          <ul>
                            <li><span>50+</span>
                              Patients<br> Treated
                            </li>
                            <li><span>100+</span>
                              Participants<br> Enrolled
                            </li>
                            <li><span>10+</span>
                              Years of<br> Experience
                            </li>
                          </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="expert-box text-center">
                      <div class="o-expert-img">
                        <img src="images/MaskExpert2.png">
                      </div>
                      <div class="o-expert-info">
                        <div class="o-expert-name">
                          Dr. Indira Priyadarshini
                        </div>
                        <div class="o-expert-designation">
                          Infertility & Child Specialist
                        </div>
                      </div>
                      <div class="o-expert-bottom">
                          <ul>
                            <li><span>50+</span>
                              Patients<br> Treated
                            </li>
                            <li><span>100+</span>
                              Participants<br> Enrolled
                            </li>
                            <li><span>10+</span>
                              Years of<br> Experience
                            </li>
                          </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="expert-box text-center">
                      <div class="o-expert-img">
                        <img src="images/MaskExpert3.png">
                      </div>
                      <div class="o-expert-info">
                        <div class="o-expert-name">
                          Dr. Indira Priyadarshini
                        </div>
                        <div class="o-expert-designation">
                          Infertility & Child Specialist
                        </div>
                      </div>
                      <div class="o-expert-bottom">
                          <ul>
                            <li><span>50+</span>
                              Patients<br> Treated
                            </li>
                            <li><span>100+</span>
                              Participants<br> Enrolled
                            </li>
                            <li><span>10+</span>
                              Years of<br> Experience
                            </li>
                          </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ys-cta text-center mt-5">
                  <a href="expert-list.html" class="yst-btn">View More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        
        <!-----Our team end------>

        <!-----Data Speak Start------>
        <div class="data-speak-section">
          <div class="container">
            <div class="data-speak-inner">
              <div class="row">
                <div class="col-lg-7">
                  <div class="ds-left">
                    <div class="ds-img">
                      <img src="images/data-speak.png">
                    </div>
                    <div class="ds-boxes">
                      <div class="row">
                        <div class="col-lg-3 col-6">
                          <div class="box-inner text-center">
                            <div class="ds-value bg-black">
                              70%
                            </div>
                            <div class="ds-text">
                              CUSTOMERS COMPLETELY CURED
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-6">
                          <div class="box-inner text-center">
                            <div class="ds-value bg-yellow">
                              79%
                            </div>
                            <div class="ds-text">
                              CUSTOMERS OFF ALL MEDICINES
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-6">
                          <div class="box-inner text-center">
                            <div class="ds-value bg-green">
                              3K+
                            </div>
                            <div class="ds-text">
                              CUSTOMERS SERVED SUCCESSFULLY
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-6">
                          <div class="box-inner text-center">
                            <div class="ds-value bg-grey">
                              69%
                            </div>
                            <div class="ds-text">
                              CUSTOMERS HAVE REDUCED MEDICINE
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="ds-right">
                    <div class="section-heding">
                      <h2 class="ys-headting">Let The Data Speak</h2>
                    </div>
                    <p>Integer venenatis consequat elit. Curabitur eget laoreet nibh. Cras euismod, tellus vitae luctus ultricies, lacus erat sagittis nulla, id ornare velit ligula congue ex. Etiam rhoncus urna ut pulvinar euismod.</p>

                    <div class="ds-right-list">
                      <ul>
                        <li>Informative Events</li>
                        <li>Consultations</li>
                        <li>Wellness Programs</li>
                        <li>Product</li>
                        <li>Healthpedia</li>
                      </ul>
                    </div>
                    <div class="ds-video">
                      <div class="ds-v-icon"><i class="fa-solid fa-play"></i></div>
                      <div class="ds-v-text">24 Experts Online Connected<span>Unlimited Workshops</span></div>
                    </div>
                    <div class="ds-right-bottom">
                      <div class="ds-rbottom-title">
                        Tools For Expert Learners
                      </div>
                      <div class="ds-rbottom-desc">
                        A learning community where peoplecan share knowledge
                      </div>
                      <div class="ys-cta mt-4">
                        <a href="contact.html" class="yst-btn">Connect with Us <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      <!-----Data Speak End------>

      <!-----Register Expert Start----->
        <div class="register-expert">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-5">
                <div class="regExp-img">
                  <img src="images/regExp.png">
                </div>
              </div>
              <div class="col-md-7">
                <div class="regExp-right mb-5">
                  <div class="section-heding">
                    <h2 class="ys-headting">Register as an expert with yellowsquash</h2>
                  </div>
                  <p class="regExp-desc">Rrow itself, let it be sorrow; let him love it; let him pursue it, ishing for its acquisitiendum. Because he will ab hold, uniess but through concer, and also of those who resist.</p>
                  <div class="ys-cta mt-5">
                    <a href="#" class="yst-btn">Register As An Expert <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-----Register Expert End----->

      <!-----Testimonial Start----->
        <div class="ys-testimonial">
          <div class="container">
            <div class="row">
              <div class="section-heding text-center mb-4">
                <h2 class="ys-headting">Hear from our Customers</h2>
              </div>
            </div>
            <div class="testimonial-slider">
              <div class="item">
                <div class="testimonial-slide">
                  <div class="client-img">
                    <img src="images/client1.png">
                  </div>
                  <div class="testimonial-con">
                    <div class="testi-text">
                      Father of a 2.5-year-old boy with Autism Spectrum Disorder (ASD) shared uplifting testimonials about his child's progress. He noted improvements in bowel movements, a considerable decrease in hand flapping, and a significant reduction in hyperactivity.
                    </div>
                    <div class="client-name">
                      Ramchandra Rao
                    </div>
                    <div class="client-info">
                      Father of ASD child
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-slide">
                  <div class="client-img">
                    <img src="images/client1.png">
                  </div>
                  <div class="testimonial-con">
                    <div class="testi-text">
                      Father of a 2.5-year-old boy with Autism Spectrum Disorder (ASD) shared uplifting testimonials about his child's progress. He noted improvements in bowel movements, a considerable decrease in hand flapping, and a significant reduction in hyperactivity.
                    </div>
                    <div class="client-name">
                      Ramchandra Rao
                    </div>
                    <div class="client-info">
                      Father of ASD child
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-slide">
                  <div class="client-img">
                    <img src="images/client2.png">
                  </div>
                  <div class="testimonial-con">
                    <div class="testi-text">
                      Father of a 2.8-year-old girl with Autism Spectrum Disorder (ASD) expressed satisfaction with our interventions. He observed enhanced social interactions, improved eye contact, and an overall increase in the child's energy levels.
                    </div>
                    <div class="client-name">
                      Ramchandra Rao
                    </div>
                    <div class="client-info">
                      Father of ASD child
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-----Testimonial End----->

      <!-------Faq Start---------------->
      <div class="faq-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="faq-right">
                <div class="row faq-right-row">
                  <div class="col-md-12">
                    <div class="section-heding">
                      <h2 class="ys-headting">Frequently  Asked Questions</h2>
                    </div>
                  </div>
                  
                </div>
                <div class="faq-list list-group nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="faq1" data-bs-toggle="tab" data-bs-target="#faq1-content" type="button" role="tab" aria-controls="nav-adhd" aria-selected="true">What kind of programs does YellowSquash offer?</button>
                      <button class="nav-link" id="faq2" data-bs-toggle="tab" data-bs-target="#faq2-content" type="button" role="tab" aria-controls="nav-gdd" aria-selected="false">Are the programs dispensed through only live sessions?</button>
                      <button class="nav-link" id="faq3" data-bs-toggle="tab" data-bs-target="#faq3-content" type="button" role="tab" aria-controls="nav-gdd" aria-selected="false">What if I am not available for the program time slots?</button>
                      <button class="nav-link" id="faq4" data-bs-toggle="tab" data-bs-target="#faq4-content" type="button" role="tab" aria-controls="nav-gdd" aria-selected="false">What if I miss a session?</button>
                      <button class="nav-link" id="faq5" data-bs-toggle="tab" data-bs-target="#faq5-content" type="button" role="tab" aria-controls="nav-gdd" aria-selected="false">Where can I reach for technical issues?</button>
                      <button class="nav-link" id="faq6" data-bs-toggle="tab" data-bs-target="#faq6-content" type="button" role="tab" aria-controls="nav-gdd" aria-selected="false">How can one become an instructor with YellowSquash?</button>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="faq-left">
                <div class="tab-content p-3 border bg-light" id="nav-tabContent1">
                  <div class="tab-pane fade active show" id="faq1-content" role="tabpanel" aria-labelledby="faq1">
                    <div class="faq-ans">
                      <div class="ans-heading">
                        What kind of programs does YellowSquash offer?
                      </div>
                      <div class="ans-text">
                        YellowSquash Programs are well thought through well being programs. We cover all aspects of human wellness – nutritional, physical, mental, emotional, intellectual, social and spiritual.
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="faq2-content" role="tabpanel" aria-labelledby="faq2">
                    <div class="faq-ans">
                      <div class="ans-heading">
                        Are the programs dispensed through only live sessions?
                      </div>
                      <div class="ans-text">
                       For the time being, programs are being conducted through live classes so that you can clear all your doubts and queries. However, in near future we will also have recorded version of these live programs available for subscription at a lower cost.
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="faq3-content" role="tabpanel" aria-labelledby="faq3">
                    <div class="faq-ans">
                      <div class="ans-heading">
                        What if I am not available for the program time slots?
                      </div>
                      <div class="ans-text">
                        If you are not available for the time slots of the program, please check later on. We will soon have recorded version of the courses held in the past.
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="faq4-content" role="tabpanel" aria-labelledby="faq4">
                    <div class="faq-ans">
                      <div class="ans-heading">
                        What if I miss a session?
                      </div>
                      <div class="ans-text">
                        Not to worry! All participants who have subscribed to a program can access all previously held recorded classes in their account.
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="faq5-content" role="tabpanel" aria-labelledby="faq5">
                    <div class="faq-ans">
                      <div class="ans-heading">
                        Where can I reach for technical issues?
                      </div>
                      <div class="ans-text">
                        You can write to info@yellowsquash.in or call +91 120 435 6959 for any technical queries.
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="faq6-content" role="tabpanel" aria-labelledby="faq6">
                    <div class="faq-ans">
                      <div class="ans-heading">
                        How can one become an instructor with YellowSquash?
                      </div>
                      <div class="ans-text">
                        YellowSquash follows a rigorous process to vet an instructor. Once registered, YellowSquash team requires you to fill in a detailed profile form along with submission of relevant certifications. Additionally, there are telephonic and/ or video interviews to qualify as a YellowSquash expert. Kindly note that this necessary to maintain the quality we aspire and promise to our consumers.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="faq-left-bimg">
                  <img src="images/faq.png">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-------Faq End------------------>

      <!-----BLog Section Start----------->
      <div class="latest-blogs">
          <div class="container">
            <div class="row">
              <div class="section-heding text-center mb-4">
                <h2 class="ys-headting">Latest Blogs</h2>
              </div>
              <div class="blogs-slider">
                <div class="item">
                  <div class="blog-list">
                    <div class="blog-img">
                      <img src="images/blog1.jpg">
                    </div>
                    <div class="blog-con">
                      <div class="blog-meta">
                        <ul>
                          <li>By Dr. Praveen Dhole</li>
                          <li>|</li>
                          <li>Jan 30, 2024</li>
                        </ul>
                      </div>
                      <div class="blog-title">
                        <a href="blog-detail.html">Fungal Infections, and Hyperactivity and heir Connection with Autism </a>
                      </div>
                      <div class="blog-desc">
                        Learn about the connection between yeast overgrowth and autism-related symptoms 
                      </div>
                      <div class="blog-btn">
                        <a href="blog-detail.html" class="yst-btn">Read More <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="item">
                  <div class="blog-list">
                    <div class="blog-img">
                      <img src="images/blog2.jpg">
                    </div>
                    <div class="blog-con">
                      <div class="blog-meta">
                        <ul>
                          <li>By YS Content </li>
                          <li>|</li>
                          <li>Jan 18, 2024</li>
                        </ul>
                      </div>
                      <div class="blog-title">
                        <a href="blog-detail.html">The Impact of Chronic Inflammation on Overall Health and Well-Being</a>
                      </div>
                      <div class="blog-desc">
                        This article will introduce you to chronic inflammation, which is fueled by unhe
                      </div>
                      <div class="blog-btn">
                        <a href="blog-detail.html" class="yst-btn">Read More <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="item">
                  <div class="blog-list">
                    <div class="blog-img">
                      <img src="images/blog3.jpg">
                    </div>
                    <div class="blog-con">
                      <div class="blog-meta">
                        <ul>
                          <li>By Dr. Gaurang Ramesh</li>
                          <li>|</li>
                          <li>Jan 16, 2024</li>
                        </ul>
                      </div>
                      <div class="blog-title">
                        <a href="blog-detail.html">Proton Pump Inhibitors: Pros and Cons</a>
                      </div>
                      <div class="blog-desc">
                        Proton Pump Inhibitors might provide relief in digestive disorders, but they are
                      </div>
                      <div class="blog-btn">
                        <a href="blog-detail.html" class="yst-btn">Read More <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="item">
                  <div class="blog-list">
                    <div class="blog-img">
                      <img src="images/blog4.jpg">
                    </div>
                    <div class="blog-con">
                      <div class="blog-meta">
                        <ul>
                          <li>Dr. Praveen Dhole</li>
                          <li>|</li>
                          <li>Jan 18, 2024</li>
                        </ul>
                      </div>
                      <div class="blog-title">
                        <a href="blog-detail.html">Sensory Processing Issues in Children with Autism</a>
                      </div>
                      <div class="blog-desc">
                        In this article, we will read about sensory issues that occur in autistic childr
                      </div>
                      <div class="blog-btn">
                        <a href="blog-detail.html" class="yst-btn">Read More <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-----BLog Section End----------->

      <!----Newsletter Start-------------->
      <div class="newsletter-section">
        <div class="container">
          <div class="row">
            <div class="section-heding text-center mb-3">
              <h2 class="ys-headting">Subscribe Our Newsletter</h2>
            </div>
            <div class="section-desc text-center">
              Integer venenatis consequat elit. Curabitur eget laoreet nibh. Cras euismod, tellus vitae luctus ultricies, lacus erat sagittis nulla, id ornare velit ligula congue ex. Etiam rhoncus urna ut pulvinar euismod.
            </div>
            <div class="subscription-form">
              <form>
                <input type="email" name="semail">
                <div class="form-cta text-center">
                  <button type="submit" class="yst-btn">Subscribe  <i class="fa-solid fa-arrow-right"></i></button>
                </div>
              </form>
            </div>
            <div class="guidline text-center">
              No ads, No trails, No Commitments
            </div>
            <div class="adds-logo">
              <img src="images/add1.png">
              <img src="images/add2.png">
            </div>
          </div>
        </div>
      </div>

      <!----Newsletter End-------------->
    </div>


    <div class="footer">
      <div class="container">
        <div class="footer-first-section">
          <div class="row">
            <div class="col-md-6">
              <div class="footer-text">
                <p>
                  YellowSquash is a community-based marketplace for global wellness entrepreneurs (both in services and products). We provide platform and technology to enable sustainable & holistic wellness professionals to be successful, right from...
                </p>
              </div>
              <div class="footer-cta">
                <a href="about-us.html" class="yst-btn">About Us  <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footer-fmiddle">
                <h2 class="footer-col-title">Explore Programs</h2>

                <div class="footer-menu">
                  <ul>
                    <li>
                      <a href="">Alternate Therapy</a>
                    </li>
                    <li>
                      <a href="">Autism</a>
                    </li>
                    <li>
                      <a href="">Bone Elderly Lung</a>
                    </li>
                    <li>
                      <a href="">Community Wellness</a>
                    </li>
                    <li>
                      <a href="">Hormonal Issues</a>
                    </li>
                    <li>
                      <a href="">Heart Health</a>
                    </li>
                  </ul>
                  
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footer-last">
                <h2 class="footer-col-title">Use Full Links</h2>
                <div class="footer-menu">
                  <ul>
                    <li>
                      <a href="about-us.html">About Us</a>
                    </li>
                    <li>
                      <a href="#">Upcoming  Events</a>
                    </li>
                    <li>
                      <a href="#">Events</a>
                    </li>
                    <li>
                      <a href="">Faq Questions</a>
                    </li>
                    <li>
                      <a href="#">Privacy Policy</a>
                    </li>
                    <li>
                      <a href="#">Gallery</a>
                    </li>
                    <li>
                      <a href="contact.html">Contact us</a>
                    </li>
                  </ul>
                  
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="footer-second-section">
          <div class="row">
            <div class="col-lg-9 col-md-6">
              <div class="foote2-first">
                <h2 class="footer-col-title">Follow Us On Social Media</h2>
                <div class="social-media mt-0">
                  <div class="row space-between  mt-0">
                    
                    <div class="col-lg-3 col-sm-6 wc-col">
                      <div class="wc-inner  wcbg-yellow">
                        <div class="social-link-inner">
                          <div class="social-icon">
                            <i class="fa-brands fa-facebook-f"></i>
                          </div>
                          <div class="social-text">
                            <div class="social-heading">
                              Facebook
                            </div>
                            <div class="social-info">
                              <span><i class="fa-brands fa-instagram"></i> 620</span>
                              <span><i class="fa-brands fa-square-facebook"></i> 620</span>
                            </div>
                          </div>
                          <div class="clearfix">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wc-col">
                      <div class="wc-inner  wcbg-pink">
                        <div class="social-link-inner">
                          <div class="social-icon">
                            <i class="fa-brands fa-square-instagram"></i>
                          </div>
                          <div class="social-text">
                            <div class="social-heading">
                              Instagram
                            </div>
                            <div class="social-info">
                              <span><i class="fa-brands fa-instagram"></i> 620</span>
                              <span><i class="fa-brands fa-square-facebook"></i> 620</span>
                            </div>
                          </div>
                          <div class="clearfix">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wc-col">
                      <div class="wc-inner  wcbg-blue">
                        <div class="social-link-inner">
                          <div class="social-icon">
                            <i class="fa-brands fa-twitter"></i>
                          </div>
                          <div class="social-text">
                            <div class="social-heading">
                              Twitter
                            </div>
                            <div class="social-info">
                              <span><i class="fa-brands fa-instagram"></i> 620</span>
                              <span><i class="fa-brands fa-square-facebook"></i> 620</span>
                            </div>
                          </div>
                          <div class="clearfix">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wc-col">
                      <div class="wc-inner  wcbg-white">
                        <div class="social-link-inner">
                          <div class="social-icon">
                            <i class="fa-brands fa-youtube"></i>
                          </div>
                          <div class="social-text">
                            <div class="social-heading">
                              Youtube
                            </div>
                            <div class="social-info">
                              <span><i class="fa-brands fa-instagram"></i> 620</span>
                              <span><i class="fa-brands fa-square-facebook"></i> 620</span>
                            </div>
                          </div>
                          <div class="clearfix">
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="foote2-last">
                <h2 class="footer-col-title">Contact Us</h2>
                <div class="footer-info">
                  <div class="f-address">
                    <p>Platina Heights C-24, C Block, Phase 2, Industrial Area, Sector 62, Noida, Uttar Pradesh 201301</p>
                  </div>
                  <div class="f-contact">
                    <a href="tel:+91 97173 33655">+91 97173 33655</a>
                  </div>
                  <div class="f-email">
                    <a href="mailto:info@yellowsquash.in">info@yellowsquash.in</a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="footer-copyright">
                Copyright © 2024. All Rights Reserved | Yellowsquash
              </div>
            </div>
            

          </div>
        </div>
      </div>
    </div>
  </div>

<script src="js/jquery-min.js"></script>  
<script src="js/bootstrap-min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main-js.js"></script>
</body>
</html>