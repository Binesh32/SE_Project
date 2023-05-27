@extends('adminMaster')

@section('content')

<section class="section" style="background-color: white;">
				<div class="container-fluid">

        <div class="container">
          <div class="col-sm-12 text-center">
							<h2 >
								Add Blogs
							</h2>
							
						</div>
    <form>
      <div class="row">
      <div class="col-sm-3">
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter title" style="background-color: lightgrey;">
      </div>
      </div>

      <div class="col-sm-3"></div>
      
      <div class="col-sm-6">
      <div class="form-group">
        <label for="message">About blog</label>
        <textarea class="form-control" id="message" rows="3" placeholder="Enter message" style="background-color: lightgrey;"></textarea>
      </div>
      </div>
      </div>
      
      <div class = "row">
      <div class="col-sm-3">
      <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control-file" id="image" >
      </div>
      </div>

      <div class="col-sm-3"></div>
      
      </div>

      <button type="submit" class="theme_button color1 wide_button" style="margin-right: 95rem;">Submit</button>
      <a class="theme_button color1 wide_button" href="{{route('bloglist')}}">Blog List</a>

    </form>
  </div>




        </div>
</section>

@endsection