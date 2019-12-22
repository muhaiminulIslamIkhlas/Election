@extends('admin.master')

@section('body')

	
                <div class="card card-common">

                  <div class="card-body">
                  	<a href="" data-toggle="modal" data-target="#Addnew" class="btn btn-sm btn-success text-right">Add New</a>
                  	<br>
                  	<hr>
                  	<table class="table">
					  <thead>
					    <tr>
					      
					      <th scope="col">Title</th>
					      <th scope="col">Details</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($data as $row)
					    <tr>
					     
					      <td>{{$row->title}}</td>
					      <td>{{$row->details}}</td>
					      <td>
					      	<a href="{{URL::to('edit/recent/'.$row->id)}}" class="btn btn-sm btn-danger">Edit</a>
					      	<a href="{{URL::to('delete/recent/'.$row->id)}}" class="btn btn-sm btn-warning">Delete</a>
					      </td>
					    </tr>
					  @endforeach
					  </tbody>
					</table>
                  </div>
                </div>


                <!--Modal-->

                <div class="modal fade" id="Addnew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        	<form class="form-horizontal" action="{{route('store-recent')}}" method="post">
				        		@csrf
							  <div class="form-group">
							    <label class="control-label col-sm-2" for="email">Title</label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" name="title"  placeholder="Enter title">
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-2" for="pwd">Details</label>
							    <div class="col-sm-10">
							      
							      <textarea type="text" name="details" class="form-control"></textarea>
							    </div>
							  </div>
							  
							  

				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="Submit" class="btn btn-primary">Submit</button>
				      </div>
							
					</form>
				    </div>
				  </div>
				</div>


@endsection()