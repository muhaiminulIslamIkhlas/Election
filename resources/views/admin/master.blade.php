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
    <link rel="stylesheet" href="{{asset('admin/style.css')}}" />
    <link
      href="https://fonts.googleapis.com/css?family=Oswald&display=swap"
      rel="stylesheet"
    />
    <script src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>

    <title>Bangladesh Election Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light">
      <button
        class="navbar-toggler ml-auto mb-2 bg-light"
        type="button"
        data-toggle="collapse"
        data-target="#myNavbar"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
              <a
                href=""
                class="navabr-brand text-white d-block text-center py-3 mb-4 bottom-border"
                >Coders never quit</a
              >
              <div class="bottom-border pb-3">
                <img
                  src="{{asset('admin/images/Muhaimin.jpg')}}"
                  width="50"
                  class="rounded-circle mr-3"
                />
                @php
                  $user=Auth::user();
                @endphp
                <a href="" class="text-white">{{$user->name}}</a>
              </div>
              <ul class="navbar-nav flex-column mt-4">
                <li class="nav-item">
                  <a href="{{route('dashboard')}}" class="nav-link text-white p-3 mb-2 current"
                    ><i class="fas fa-home text-light fa-lg mr-3"></i
                    >চলমান নির্বাচন</a
                  >
                </li>
                <li class="nav-item">
                  <a href="{{route('profile')}}" class="nav-link text-white p-3 mb-2 sidebar-link"
                    ><i class="fas fa-user text-light fa-lg mr-3"></i>প্রোফাইল</a
                  >
                </li>
                <li class="nav-item">
                  <a href="{{route('recent')}}" class="nav-link text-white p-3 mb-2 sidebar-link"
                    ><i class="fas fa-chart-line text-light fa-lg mr-3"></i
                    >সাম্প্রতিক তথ্যসমূহ</a
                  >
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link text-white p-3 mb-2 sidebar-link"
                    ><i class="fas fa-chart-line text-light fa-lg mr-3"></i
                    >চলমান নির্বাচন</a
                  >
                </li>
              
              </ul>
            </div>
            <div
              class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar"
            >
              <div class="row align-items-center">
                <div class="col-md-4 text-light text-uppercase ">
                  <h4>Dashboard</h4>
                </div>
                <div class="col-md-5">
                  <form action="" class="form-group">
                    <div class="input-group pt-2">
                      <input
                        type="text"
                        class="form-control search-input"
                        placeholder="Search"
                      />
                      <button type="button" class="btn btn-white search-button">
                        <li class="fas fa-search text-danger"></li>
                      </button>
                    </div>
                  </form>
                </div>
                <div class="col-md-3">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a href="" class="nav-link"
                        ><i class="fas fa-comments text-muted fa-lg"></i
                      ></a>
                    </li>
                    <li class="nav-item">
                      <a href="" class="nav-link"
                        ><i class="fas fa-bell text-muted fa-lg"></i
                      ></a>
                    </li>
                    <li class="nav-item ml-md-auto">
                      <a
                        href=""
                        data-toggle="modal"
                        data-target="#myModal"
                        class="nav-link"
                        ><i class="fas fa-sign-out-alt text-danger fa-lg"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!--end of navbar-->
    <!--model-->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Want to leave ?</h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body">
            Press logout to leave
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-success">
              Stay Here
            </button>
            <a href="{{route('logingout')}}" class="btn btn-danger">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!--Card-->

    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 col-md-8 col-lg-9 ml-auto">
            <div class="row pt-md-5 mt-md-5 mb-5">
              <div class="col-xl-12 col-sm-12 p-2">
                @yield('body')
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
