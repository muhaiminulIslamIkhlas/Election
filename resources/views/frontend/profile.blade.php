@extends('admin.master')

@section('body')


@php
  $user=Auth::user();
@endphp

@section('body')


	    <div class="col-md-9 ">
                      <div class="card mt-2 mr-0">
                          <div class="card-header bg-primary text-white">
                              প্রোফাইল
                          </div>
                          <div class="card-body">
                              <strong>Name : </strong>
                              <label>{{$user->name}}</label>
                              <br>
                              <strong>Email : </strong>
                              <label>{{$user->email}}</label>
                            
                          </div>
                        </div>
                  </div>
                 



@endsection