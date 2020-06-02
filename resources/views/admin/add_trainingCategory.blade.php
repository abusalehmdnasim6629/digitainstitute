@extends('admin.dashboard')
@section('admin_content')


<ul class="breadcrumb">
<li>
		<i class="icon-home"></i>
		<a href="{{URL::to('/admin')}}" class="btn btn-link">Home</a>
		<i class="icon-angle-right"></i>
	</li>
			</ul>
			
			<div class="row-fluid sortable">
                
                <p class="alert-success">
                  
                </p>
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add</h2>
						
					</div>
					<!-- @if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif -->
					<div class="box-content">
						<form class="form-horizontal" action="{{url('/save/trainingCategory')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
						  <fieldset>


						    <div class="form-group">
                                <label class="control-label">Title</label>
                                <div class="controls">
                                <input class="form-control"  type="text" name="title" required=" "/>
                                </div>
							</div>
							
							<div class="form-group">
                                <label class="control-label">Description</label>
                                <div class="controls">
                                <textarea class="form-control" name="des" required=" "  rows="5"></textarea>
                                </div>
							</div>
							<div class="form-group">
                                <label class="control-label">Image</label>
                                <div class="controls">
                                <input class="form-control-file" name="image" type="file" required=" " />
                                </div>
							</div>

    	                    <br>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection