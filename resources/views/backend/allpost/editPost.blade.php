@extends('main')

@section('content')

<section id="posts" class="ls ms section_padding_100">
    <div class="container">
        <div class="col-sm-12 text-center">
            <h2>Edit Post</h2>
            <p class="small-text grey">What we post??</p>
        </div>
        <form action="{{ route('update.Post', $editPost->id) }}" class="form mb-15" method="post"
            id="kt_contact_form" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{$editPost->title}}" style="background-color: lightgrey;">
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
                        <label for="message">Message:</label>
                        <textarea class="form-control" name="message" id="message" rows="3" placeholder="Enter message"  value="{{$editPost->message}}" style="background-color: lightgrey;"></textarea>
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
                    <img style="height:80px;" src="{{ asset('backend/postUploads/' . $editPost->image) }}">
                </div>
            </div>
            <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="waste">Waste Type</label>
                    <select class="form-control" id="waste" name = "waste_type" value="{{$editPost->waste_type}}" style="background-color: lightgrey;">
                        <option value="bio">Bio Degradable</option>
                        @if ($errors->has('waste_type'))
                        <div class="alert alert-danger" style="border:none">
                            {{$errors->first('waste_type')}}
                        </div>
                    @enderror
                    </select>
                </div>
            </div>
            </div>
            <button type="submit" class="theme_button color1 wide_button" style="margin-right: 83rem;">Edit</button>
            <a class="theme_button color1 wide_button" href="{{route('post')}}">Back</a>
        </form>
    </div>
</section>

@endsection
