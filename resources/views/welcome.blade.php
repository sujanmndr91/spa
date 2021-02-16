<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>title</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="css/styleCommon.css" rel="stylesheet" type="text/css">
  <link href="css/styleMedia.css" rel="stylesheet" type="text/css">
  <link href="css/stylePages.css" rel="stylesheet" type="text/css">
  <link href="css/styleNav.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
  <header>
    <section id="navWrap">
      <div class="logo">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3>Sherpa Technologies</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="burger"> <span></span> </div>
      <nav>
        <ul class="main">
          <li><a class="scroll" href="#page-one">Home</a></li>
          <li><a class="scroll" href="#page-two">About</a></li>
          <li><a class="scroll" href="#page-three">Team</a></li>
          <li><a class="scroll" href="#page-four">Contact</a></li>
        </ul>
      </nav>
    </section>
    <div class="overlay"></div>
  </header>
  <section id="singlePage">
    <nav id="mainNav" class="navbar navbar-expand-lg navbar-light bg-light">

      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link scroll" href="#page-one"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link scroll" href="#page-two"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link scroll" href="#page-three"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link scroll" href="#page-four"></a>
        </li>
      </ul>

    </nav>
    <main>
      <div class="page-section" id="page-one">
        <section id="banner"
          style="background: url('images/_SOM3917.JPG');background-repeat: no-repeat;background-size: cover; background-position: center center;">
          <div class="bannerCov">
            <div class="container">
              <div class="row">
                <div class="col-sm-8 bannerText">
                  <h1>{{ $banner->heading }}</h1>
                  <h2>{{ $banner->subheading}} <br>
                    Experience <br>
                    Agency</h2>
                  <p>{{ $banner->body }}</p>
                </div>
                <div class="col-8 bannerbtn">
                  <a href="#" class="btn viewBtn">
                    Read More <i class="fas fa-chevron-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="page-section" id="page-two">
        <section id="teamWrap">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4 team">
                <h3>Lorem Ipsum is simply dummy</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s.</p>
                <a href="#" class="btn viewBtn">
                  Meet the Team <i class="fas fa-chevron-right"></i>
                </a>
              </div>
              <div class="col-6 col-md-6 col-lg-4 teamGap">
                <div class="teamBox">
                  <div class="teamBox-inner">
                    <div class="teamBox-front">
                      <img src="./images/nature-1.jpg" class="img-fuild" alt="teamImage">
                    </div>
                    <div class="teamBox-back">
                      <h3>Member name</h3>
                      <h4> <span>Position</span></h4>
                      <p>Eduation</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-6 col-lg-4 teamGap">
                <div class="teamBox">
                  <div class="teamBox-inner">
                    <div class="teamBox-front">
                      <img src="./images/nature-2.jpg" class="img-fuild" alt="teamImage">
                    </div>
                    <div class="teamBox-back">
                      <h3>Member name</h3>
                      <h4> <span>Position</span></h4>
                      <p>Eduation</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-6 col-lg-4 teamGap">
                <div class="teamBox">
                  <div class="teamBox-inner">
                    <div class="teamBox-front">
                      <img src="./images/nature-3.jpg" class="img-fuild" alt="teamImage">
                    </div>
                    <div class="teamBox-back">
                      <h3>Member name</h3>
                      <h4> <span>Position</span></h4>
                      <p>Eduation</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-6 col-lg-4 teamGap">
                <div class="teamBox">
                  <div class="teamBox-inner">
                    <div class="teamBox-front">
                      <img src="./images/nature-4.jpg" class="img-fuild" alt="teamImage">
                    </div>
                    <div class="teamBox-back">
                      <h3>Member name</h3>
                      <h4> <span>Position</span></h4>
                      <p>Eduation</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-6 col-lg-4 teamGap">
                <div class="teamBox">
                  <div class="teamBox-inner">
                    <div class="teamBox-front">
                      <img src="./images/nature-5.jpg" class="img-fuild" alt="teamImage">
                    </div>
                    <div class="teamBox-back">
                      <h3>Member name</h3>
                      <h4> <span>Position</span></h4>
                      <p>Eduation</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-6 col-lg-4 teamGap">
                <div class="teamBox">
                  <div class="teamBox-inner">
                    <div class="teamBox-front">
                      <img src="./images/nature-6.jpg" class="img-fuild" alt="teamImage">
                    </div>
                    <div class="teamBox-back">
                      <h3>Member name</h3>
                      <h4> <span>Position</span></h4>
                      <p>Eduation</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-6 col-lg-4 teamGap">
                <div class="teamBox">
                  <div class="teamBox-inner">
                    <div class="teamBox-front">
                      <img src="./images/nature-7.jpg" class="img-fuild" alt="teamImage">
                    </div>
                    <div class="teamBox-back">
                      <h3>Member name</h3>
                      <h4> <span>Position</span></h4>
                      <p>Eduation</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4 team">
                <h3>Lorem Ipsum is simply dummy</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s.</p>
                <a href="#" class="btn viewBtn">
                  View all Careers <i class="fas fa-chevron-right"></i>
                </a>
              </div>
            </div>
          </div>
        </section>

      </div>
      <div class="page-section" id="page-three">
        <section id="servicesWrap">
          <div class="container-fluid">
            <div class="row">
              <aside class="col-sm-2 no-mar-pad">
                <nav id="servNav" class="servNav navbar">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#serv-one"><span>01 VR | AR</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#serv-two""><span>02 Design</span></a>
                        </li>
                        <li class=" nav-item">
                        <a class="nav-link js-scroll-trigger" href="#serv-three"><span>03 Development
                          </span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#serv-four"><span>04 Marketing</span></a>
                    </li>
                  </ul>
                </nav>
              </aside>
              <div class="col-12 col-md-12 col-lg-10 service">
                <div class="service-section" id="serv-one">
                  <div class="row">
                    <div class="col-sm-6 servImg">
                      <img src="images/nature-2.jpg" class="img-fluid" alt="image">
                    </div>
                    <div class="col-sm-6 servText">
                      <h2 data-num="01">VR | AR</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s.</p>
                      <a href="#" class="btn viewBtn">
                        Read More <i class="fas fa-chevron-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="service-section" id="serv-two">
                  <div class="row">
                    <div class="col-sm-6 servImg">
                      <img src="images/nature-3.jpg" class="img-fluid" alt="image">
                    </div>
                    <div class="col-sm-6 servText">
                      <h2 data-num="02">Design</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s.</p>
                      <a href="#" class="btn viewBtn">
                        Read More <i class="fas fa-chevron-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="service-section" id="serv-three">
                  <div class="row">
                    <div class="col-sm-6 servImg">
                      <img src="images/nature-5.jpg" class="img-fluid" alt="image">
                    </div>
                    <div class="col-sm-6 servText">
                      <h2 data-num="03">Development</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s.</p>
                      <a href="#" class="btn viewBtn">
                        Read More <i class="fas fa-chevron-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="service-section" id="serv-four">
                  <div class="row">
                    <div class="col-sm-6 servImg">
                      <img src="images/nature-7.jpg" class="img-fluid" alt="image">
                    </div>
                    <div class="col-sm-6 servText">
                      <h2 data-num="04">Marketing</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s.</p>
                      <a href="#" class="btn viewBtn">
                        Read More <i class="fas fa-chevron-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="page-section" id="page-four">
        <section id="contactWrap" class="secGap">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 detail">
                <div class="detailCov">
                  <h1>Let's Do Something <br>
                    Awesome Together</h1>
                  <div class="contactDivider">
                    <a href="#">info@sherpatechnologies</a>
                  </div>
                  <div class="contactDivider">
                    <a href="#">01- 4228467</a>
                  </div>
                  <div class="contactDivider">
                    <div class="address">
                      <p> <span>Nepal</span> <br> jyatha, kantipath <br> Kathmandu</p>
                    </div>
                  </div>
                  <ul>
                    <li><a href="#"><i class="fab fa-twitter"></i></a> </li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a> </li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                  </ul>

                </div>
              </div>
              <div class="col-sm-6 entry">
                <form id="needs-validation" novalidate>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Name </label>
                        <div class="reverse">
                          <input type="text" class="form-control" placeholder="Your name here" required>
                          <div class="invalid-feedback">
                            Please provide your Name
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email </label>
                        <div class="reverse">
                          <input type="email" class="form-control" placeholder="your@email.com" required>
                          <div class="invalid-feedback">
                            Please provide your email
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Subject</label>
                        <div class="reverse">
                          <select class="form-control">
                            <option value="">General</option>
                            <option value="1" selected="selected">Project Requested</option>
                            <option value="2">Job Opportunities</option>
                          </select>
                          <div class="invalid-feedback">
                            Please provide your Name
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Budget </label>
                        <div class="reverse">
                          <select class="form-control input-lg">
                            <option value="" selected="selected">Select Budget</option>
                            <option value="1">Rs.15000 - Rs.25000</option>
                            <option value="2">Rs.25000 - Rs.35000</option>
                            <option value="3">Rs.35000 - Rs.45000</option>
                            <option value="4">Rs.45000 - Rs.55000</option>
                          </select>
                          <div class="invalid-feedback">
                            Please provide your Name
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <label>Message</label>
                      <div class="reverse">
                        <textarea class="form-control counted" name="message" rows="9" placeholder="write message here"
                          required></textarea>
                        <div class="invalid-feedback">
                          Please write your message
                        </div>
                      </div>
                      <button type="submit" class="btn viewBtn">Send</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
  </section>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="js/nav.js"></script>
  <script src="js/common.js"></script>

  <!-- Plugin JavaScript -->
  <script src="js/sideNav/jquery.easing.min.js"></script>
  <script src="js/sideNav/scrolling-nav.js"></script>
</body>

</html>