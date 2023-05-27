@extends('main')

@section('content')


<section id="posts" class="ls ms section_padding_100">



<div class="container">
<h2 class="text-center">Posts</h2>
<div class="col-sm-12 text-center">
							
<h2>All the things <a href="{{route('createpost')}}" class="text grey" style="text-decoration: underline;">Create Post?</a></h2>
<a href="{{route('usermypost')}}" class="theme_button color2 wide_button" >My Posts</a>


						</div>

    

<!-- // For loop lagaune//  -->
  <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
              <img class="img-profile rounded-circle small-icon" src="images/team/04.jpg">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
          </a>
        </div>
      </div>
  </div>

      <div class="row">
      <div class="col-xl-4 col-sm-6">
      <img src="images/slide02.jpg " class="img-fluid" alt="Post Image">
      </div>
      <div class="col-xl-3 col-sm-6">
      <h4 class="card-title">Post Title</h4>
      <p class="card-text" style="color: black;">This is the description of the post. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus aut aliquam fugiat iste dolore sit et aspernatur suscipit! Deleniti saepe blanditiis quia nobis voluptatum explicabo non soluta harum vitae eaque!</p>
      <p class="card-text" style="color: black;"><b >Waste Type:</b> Organic</p>
      </div>
      </div>


        <div class="mb-3">
        <textarea id="comment-text" class="form-control" placeholder="Write a comment" style="background-color: lightgrey;" ></textarea>
        <button id="add-comment"  class="btn btn-secondary mt-2" >Comment</button>
      </div>

      <div id="comment-list">
      </div>

    </div>
   

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Function to create a new comment element
    function createCommentElement(text, likes) {
      const commentElement = document.createElement('div');
      commentElement.classList.add('comment', 'border', 'p-3', 'mb-3');
      commentElement.innerHTML = `
        <p class="mb-1">${text}</p>
        <button class="btn btn-sm btn-outline-primary like-btn">${likes} Likes</button>
      `;
      return commentElement;
    }

    // Function to handle adding a new comment
    function handleAddComment() {
      const commentText = document.getElementById('comment-text').value;
      if (commentText) {
        const commentElement = createCommentElement(commentText, 0);
        document.getElementById('comment-list').appendChild(commentElement);
        document.getElementById('comment-text').value = '';
      }
    }

    // Event listener for adding a comment
    document.getElementById('add-comment').addEventListener('click', handleAddComment);

    // Event delegation for liking a comment
    document.getElementById('comment-list').addEventListener('click', function(event) {
      if (event.target.classList.contains('like-btn')) {
        const likeButton = event.target;
        const likes = parseInt(likeButton.innerText);
        likeButton.innerText = `${likes + 1} Likes`;
      }
    });
  </script>

  </section>

  @endsection
