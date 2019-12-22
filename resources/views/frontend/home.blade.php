@extends('frontend.master')


@section('slider')

	            <!--slider-->
      
      			 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('frontend/images/slider1.jpeg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('frontend/images/slider2.jpeg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('frontend/images/slider4.jpeg')}}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
      
      
            <!--end slider-->

@endsection



@section('body')




	                  <div class="col-md-7 ">
                      <div class="card mt-2 mr-0">
                          <div class="card-header bg-primary text-white">
                              সাম্প্রতিক তথ্যসমূহ
                          </div>
                          <div class="card-body">
                              <p><a href="" target="_blank" style="color: black;">&nbsp;<strong>></strong>অনলাইনে মনোনয়নপত্র দাখিলের লিংক(plz insert in the admin)</a></p>
                              @foreach($recent as $row)
                              <p><a href="{{url('recent/'.$row->id)}}" target="_blank" style="color: black;">&nbsp;<strong>></strong>{{$row->title}}</a></p>
                              @endforeach

                              <br>
                              {{$recent->links()}}
                            
                          </div>
                        </div>
                  </div>
                  <div class="col-md-2">
                      <div class="card mt-1 mb-2 " style="max-width: 38rem;">
                          <div class="card-header bg-dark text-white">
                              চলমান নির্বাচন
                          </div>
                          <div class="card-body">
                              <marquee direction="up" scrollamount="3">
                              <p><a href="" target="_blank" style="color: black;">&nbsp;অনলাইনে মনোনয়নপত্র দাখিলের লিংক(test data. plz insert in database)</a></p>
                              <p><a href="" target="_blank" style="color: black;">&nbsp;অনলাইনে মনোনয়নপত্র দাখিলের লিংক</a></p>
                              @foreach($data as $row)
                              <p><a href="{{url('running/election/'.$row->id)}}" target="_blank" style="color: black;">&nbsp;{{$row->title}}</a></p>
                              @endforeach
                              
                            </marquee>
                          </div>
                        </div>
                        <div class="card mt-1 mb-2">
                            <div class="card-header bg-dark text-white">
                                মাননীয় প্রধান নির্বাচন কমিশনার
                            </div>
                            <div class="card-body">
                             
                              <img src="{{asset('frontend/images/ec.jpg')}}" height="183px" width="130px" class="img-responsive" alt="">
                            
                              <p>কে এম নুরুল হুদা</p>
                            </div>
                        </div>
                        <div class="card mt-1 mb-2">
                            <div class="card-header bg-dark text-white">
                                মাননীয় প্রধান নির্বাচন কমিশনার
                            </div>
                            <div class="card-body">
                              <img src="{{asset('frontend/images/ec-secretary.jpg')}}" height="183px" width="115px" class="img-responsive" alt="">
                              <p>কে এম নুরুল হুদা</p>
                            </div>
                        </div>
                  </div>

@endsection