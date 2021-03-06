<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}" />
    <link
      href="https://fonts.googleapis.com/css?family=Oswald&display=swap"
      rel="stylesheet"
    />
    <script src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>

    <title>Bangladesh Election Commission</title>
    <link rel="icon" href="{{asset('frontend/images/icon.png')}}">
  </head>
  <body >
    <div class="container ">
        <div class="shadow">
            <div class="jumbotron mb-0 pb-2 pt-2">
              <div class="row">
                <div class="col-md-1 col-lg-1 d-none d-md-block">
                  <img src="{{asset('frontend/images/logo.png')}}" height="55px" alt="" />
                </div>
      
                <div class="col-md-11 col-lg-11 d-none d-md-block">
                  
                  <h4 class="text-success mb-0">
                    বাংলাদেশ নির্বাচন কমিশন<br /><span style="color:red"
                      >Bangladesh Election Commission</span
                    >
                  </h4>
                  
                </div>
              </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: green;color: white;">
              <a class="navbar-brand custom" href="{{route('home')}}">হোম</a>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
      
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a
                          class="nav-link dropdown-toggle"
                          href="#"
                          id="navbarDropdown"
                          role="button"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          নির্বাচন সমূহ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">রাষ্ট্রপতি নির্বাচন</a>
                          <a class="dropdown-item" href="#">জাতীয় সংসদ নির্বাচন</a>
                          <a class="dropdown-item" href="#">সিটি কর্পোরেশন নির্বাচন</a>
                          <a class="dropdown-item" href="#">জেলা পরিষদ নির্বাচন</a>
                          <a class="dropdown-item" href="#">উপজেলা পরিষদ নির্বাচন</a>
                         
                      </li>
                  <li class="nav-item dropdown">
                      <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                      ভোটার নিবন্ধন
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">নিবন্ধন প্রক্রিয়া</a>
                        <a class="dropdown-item" href="#">নিবন্ধন ফর্ম</a>
                    </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                    রাজনৈতিক দলসমূহ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">নিবন্ধিত দলসমূহ</a>
                      <a class="dropdown-item" href="#">অডিট রিপোর্ট</a>
                      <a class="dropdown-item" href="#">নিবন্ধন</a>
                      
                     
                  </li>
                
                    <li class="nav-item dropdown">
                        <a
                          class="nav-link dropdown-toggle"
                          href="#"
                          id="navbarDropdown"
                          role="button"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                        নির্বাচনী পর্যবেক্ষণ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">নির্বাচন পর্যবেক্ষণ নীতিমালা</a>
                          <a class="dropdown-item" href="#">পর্যবেক্ষক ফরমসমূহ</a>
                          <a class="dropdown-item" href="#">পাবলিকেশন্স</a>
                          
                         
                      </li>
                      <li class="nav-item">

                        @if (Auth::guest())
                            <a class="nav-link" href="{{route('login')}}">LogIn</a>
                        @else
                            <a class="nav-link" href="{{url('/dashboard')}}">DashBoard</a>
                        @endif
                     </li>
                     
                  </ul>
                </ul>
              
              </div>
            </nav>
            <!--End header-->

            @yield('slider')

                        <div class="card  border-0 mr-0">
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-3">
                      <div class="card mt-1 mb-2">
                          <div class="card-header bg-dark text-white">
                              অনলাইন মনোনায়ন দাখিল
                          </div>
                          <div class="card-body">
                              <p><a href="" target="_blank" style="color: black;">&nbsp;অনলাইনে মনোনয়নপত্র দাখিলের লিংক</a></p>
                            
                          </div>
                        </div>
                        <div class="card mt-1 mb-2">
                            <div class="card-header bg-dark text-white">
                                নোটিশ বোর্ড
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li><a href="http://ecs.gov.bd/category/office-order" target="_blank" rel="noopener">অফিস আদেশ/অন্যান্য নোটিশ</a></li>
                                    <li><a href="http://ecs.gov.bd/category/foreign-tour">বিদেশ ভ্রমন</a></li>
                                    <li><a href="http://ecs.gov.bd/category/noc">এন.ও.সি</a></li>
                                    <li><a href="http://www.ecs.gov.bd/category/tender-notice">টেন্ডার</a></li>
                                    <li><a href="http://www.ecs.gov.bd/category/press-release" target="_blank" rel="noopener">প্রেস রিলিজ</a></li>
                                    <li><a href="http://www.ecs.gov.bd/category/gazettes" target="_blank" rel="noopener">গেজেট</a></li>
                                    <li><a href="http://www.ecs.gov.bd/page/elections-symbol" target="_blank" rel="noopener">নির্বাচনি প্রতীক</a></li>
                                    <li><a href="http://www.ecs.gov.bd/page/holofnama">হলফনামা</a></li>
                                    <li><a href="http://www.ecs.gov.bd/page/election-results" target="_blank" rel="noopener">নির্বাচনি ফলাফল</a></li>
                                    <li><a href="http://www.ecs.gov.bd/category/election-report" target="_blank" rel="noopener">নির্বাচনি প্রতিবেদন</a></li>
                                    <li><a href="http://www.ecs.gov.bd/page/download" target="_blank" rel="noopener">ডাউনলোড</a></li>
                                    <li><a href="http://www.ecs.gov.bd/category/job-information" target="_blank" rel="noopener">চাকুরী</a></li>
                                    <li><a href="http://www.ecs.gov.bd/category/smart-card-and-voter-list" target="_blank" rel="noopener">স্মার্ট কার্ড ও ভোটার তালিকা</a></li>
                                    <li><a href="https://www.youtube.com/watch?v=62TAvmnEm6A&amp;t=35s" target="_blank" rel="noopener">নির্বাচন কমিশন বিষয়ে ডকুমেন্টারি</a></li>
                                    </ul>
                              
                            </div>
                          </div>
                              <div class="card mt-1 mb-2">
                              <div class="card-header bg-dark text-white">
                                  অনলাইন মনোনায়ন দাখিল
                              </div>
                              <div class="card-body">
                                  <p><a href="" target="_blank" style="color: black;">&nbsp;অনলাইনে মনোনয়নপত্র দাখিলের লিংক</a></p>
                                
                              </div>
                            </div>
                          </div>

                          @yield('body')

                           </div>
                </div>
              </div>

                          <section>
              
              
                <footer class="page-footer font-small bg-light">

                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3">All Rights Reserved &copy; 2000 - 2019.
                    </div>
                    <!-- Copyright -->
                  
                  </footer>
            </section>
      
          </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    
  </body>
</html>