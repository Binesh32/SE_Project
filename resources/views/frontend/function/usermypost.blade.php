@extends('main')

@section('content')
<section id="posts" class="ls ms section_padding_100">
<div class="container">
<h2 class="text-center">My Posts</h2>
<div class="col-sm-12 text-center">
							
<h2>All the things <a href="{{route('createpost')}}" class="text grey" style="text-decoration: underline;">Create Post?</a></h2>

						</div>
<div class="row">
      <div class="col-xl-4 col-sm-6">
      <img src="images/slide02.jpg " class="img-fluid" alt="Post Image">
      </div>
      <div class="col-xl-3 col-sm-6">
      <h4 class="card-title">Post Title</h4>
      <p class="card-text" style="color: black;">This is the description of the post. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus aut aliquam fugiat iste dolore sit et aspernatur suscipit! Deleniti saepe blanditiis quia nobis voluptatum explicabo non soluta harum vitae eaque!</p>
      <p class="card-text" style="color: black;"><b >Waste Type:</b> Organic</p>
      <div class="d-flex justify-content-end">
              <button class="theme_button color2 wide_button" >Edit</button>
              <button class="theme_button color3 wide_button">Delete</button>
            </div>
      </div>
      </div>
   
  </div>

  <!-- Include Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Function to handle edit button click
    function handleEdit() {
      // Code to handle edit functionality
      console.log("Edit button clicked");
    }

    // Function to handle delete button click
    function handleDelete() {
      // Code to handle delete functionality
      console.log("Delete button clicked");
    }

    // Attach event listeners to edit and delete buttons
    document.addEventListener("DOMContentLoaded", function() {
      const editButtons = document.querySelectorAll(".editBtn");
      const deleteButtons = document.querySelectorAll(".deleteBtn");

      editButtons.forEach(button => {
        button.addEventListener("click", handleEdit);
      });

      deleteButtons.forEach(button => {
        button.addEventListener("click", handleDelete);
      });
    });
  </script>
</section>
@endsection