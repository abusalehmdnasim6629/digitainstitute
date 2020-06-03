@extends('admin.dashboard')
@section('admin_content')


{{-- <ul class="breadcrumb">
<li>
		<i class="icon-home"></i>
			<a href="{{URL::to('/admin')}}" class="btn btn-link">Home</a>
		<i class="icon-angle-right"></i>
	</li>
			</ul> --}}
			
			<div class="row-fluid sortable">
                
                <p class="alert-success">
                  
                </p>
				<div class="box span12">
				<div class="card">
					<div class="card-header">
						Update banner and logo information
					</div>
					<div class="card-body">
						<div class="box-content">
							<form class="form-horizontal" action="{{url('/save/banner')}}" method="post" enctype="multipart/form-data">
							@csrf
	
								<div class="form-group">
									<label class="control-label">Text 1</label>
									<div class="controls">
									<input class="form-control" name="t1" required=" "/>
									</div>
								</div>
	
								<div class="form-group">
									<label class="control-label">Text 2</label>
									<div class="controls">
									<input class="form-control" name="t2" required=" "/>
									</div>
								</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Logo</label>
										<div class="controls">
										<input class="form-control-file" name="logo" type="file" required=" " />
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Banner image</label>
										<div class="controls">
										<input class="form-control-file" name="b_image" type="file" required=" " />
										</div>
									</div>
								</div>
							</div>
								<div class="form-group float-right mt-4">
								  <button type="submit" class="btn btn-primary rounded-0">Save</button>
								</div>
							</form>   
	
						</div>
					</div>
				</div>	
				</div><!--/span-->

			</div><!--/row-->

@endsection