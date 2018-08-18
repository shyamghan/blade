@extends('layouts.app')
@section('content')
<div class="container">
		<div class="content">
			<h1>File Upload</h1>
			 <form action="{{ url('/store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="fileToUpload" id="exampleInputFile" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                </form>
		</div>
	</div>
@endsection