
@extends('admin.master')

@section('body')
				<div class="card card-common">

                  <div class="card-body">
   						<form class="form-horizontal" action="{{url('/update/recent/'.$data->id)}}" method="post">
				        		@csrf
							  <div class="form-group">
							    <label class="control-label col-sm-2" for="email">Title</label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" name="title"  placeholder="Enter title" value="{{$data->title}}">
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-2" for="pwd">Details</label>
							    <div class="col-sm-10">
							      
							      <textarea type="text" name="details" class="form-control">{{$data->details}}</textarea>
							    </div>
							  </div>
							  
							  

				      </div>
				      
				        
				        <button type="Submit" class="btn btn-primary">Update</button>
				      
							
					</form>
				</div>
			</div>



@endsection