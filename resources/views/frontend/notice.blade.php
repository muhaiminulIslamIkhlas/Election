@extends('frontend.master')



@section('body')


	    <div class="col-md-9 ">
                      <div class="card mt-2 mr-0">
                          <div class="card-header bg-primary text-white">
                              {{$data->title}}
                          </div>
                          <div class="card-body">
                              <p><strong>{{$data->details}}</strong></a></p>
                            
                          </div>
                        </div>
                  </div>
                 



@endsection