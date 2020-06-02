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
						<form class="form-horizontal" action="{{url('/save/banner')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
						  <fieldset>


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
						    <div class="form-group">
                                <label class="control-label">Logo</label>
                                <div class="controls">
                                <input class="form-control-file" name="logo" type="file" required=" " />
                                </div>
							</div>
                            <div class="form-group">
                                <label class="control-label">Banner image</label>
                                <div class="controls">
                                <input class="form-control-file" name="b_image" type="file" required=" " />
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