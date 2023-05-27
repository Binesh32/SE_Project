@extends('main')

@section('content')

<section id="posts" class="ls ms section_padding_100">

<div class="container">
          <div class="col-sm-12 text-center">
							<h2 >
								Create Post
							</h2>
							<p class="small-text grey">What we post??</p>
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
        <label for="message">Message:</label>
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
      <div class="col-sm-3">
      <div class="form-group">
        <label for="waste">Waste Type</label>
        <select class="form-control" id="waste" style="background-color: lightgrey;">
          <option value="bio">Bio Degradable</option>
          <option value="hazard">Hazardous Waste </option>
          <option value="recycle">Recyclable Waste </option>
          <option value="solid">Solid Waste </option>
        </select>
      </div>
      </div>
      </div>

      <button type="submit" class="theme_button color1 wide_button" style="margin-right: 83rem;">Submit</button>
      <a class="theme_button color1 wide_button" href="{{route('post')}}">Back</a>

    </form>
  </div>


</section>

@endsection