@extends('adminMaster')

@section('content')

<section class="section" style="background-color: white;">
    <div class="container-fluid">
        <div class="container">
            <div class="col-sm-12 text-center">
                <h2>Edit Blogs</h2>
            </div>
            <form action="{{ route('update.Blogs', $editBlogs->id) }}" class="form mb-15" method="post"
                id="kt_contact_form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$editBlogs->title}}" placeholder="Enter title" style="background-color: lightgrey;">
                            @if ($errors->has('title'))
                                <div class="alert alert-danger" style="border:none">
                                    {{$errors->first('title')}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="message">About blog</label>
                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Enter message" value="{{$editBlogs->message}}" style="background-color: lightgrey;"></textarea>
                            @if ($errors->has('message'))
                                <div class="alert alert-danger" style="border:none">
                                    {{$errors->first('message')}}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" class="form-control-file" name="image" id="image">
                            @if ($errors->has('image'))
                                <div class="alert alert-danger" style="border:none">
                                    {{$errors->first('image')}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                    <div class="col-md-3 fv-row">
                        <label class="fs-5 fw-semibold mb-2">Old Image</label>
                        <img style="height:80px;" src="{{ asset('backend/blogsUploads/' . $editBlogs->offer_image) }}">
                    </div>
                </div>
                <button type="submit" class="theme_button color1 wide_button" style="margin-right: 95rem;">Edit</button>
                <a class="theme_button color1 wide_button" href="{{route('bloglist')}}">Blog List</a>
            </form>
        </div>
    </div>
</section>

@endsection
