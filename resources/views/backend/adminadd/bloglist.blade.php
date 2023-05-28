@extends('adminMaster')

@section('content')
    <section class="section" style="background-color: white;">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <h3>Blogs List </h3>
                    <a class="theme_button color1 wide_button" style="margin-right: 90rem;" href="{{ route('add.blogs') }}">Add
                        Blog</a>
                    <a class="theme_button color1 wide_button" href="{{ route('blogs') }}">View BLogs</a>
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->

            <div class="row">
                <div class="col-xs-12">
                    <div class="with_border with_padding">
                        <div class="table-responsive">
                            @foreach($couponData as $data)
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <td class="media-middle text-center">
                                        <input type="checkbox">
                                    </td>
                                    <th>Title:</th>
                                    <th>Blogs</th>
                                    <th>Image</th>
                                    <th>Actions:</th> <!-- Added column for actions -->
                                </tr>
                                <tr class="item-editable">
                                    <td class="media-middle text-center">
                                        <input type="checkbox">
                                    </td>
                                    <td class="media-middle">
                                        <h5>
                                            <a href="admin_post.html">
                                               {{$data->title}}
                                            </a>
                                        </h5>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="{{ asset('backend/blogsUploads/' . $data->image) }}" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    <a href="admin_profile.html">{{$data->message}}</a>
                                                </h5>
                                                &lt;<a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="056068646c6945607d64687569602b666a68">[email&#160;protected]</a>&gt;
                                            </div>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        <img src="images/slide02.jpg" class="img-fluid"
                                            style="max-width: 200px; height: auto;" alt="Post Image">

                                    </td>


                                    <td class="media-middle">
                                        <!-- Added column for actions -->

                                        <button class="btn btn-sm btn-primary edit-button">Edit</button>
                                        <button class="btn btn-sm btn-info comment-button">Comment</button>
                                        <button class="btn btn-sm btn-danger delete-button">Delete</button>

                                    </td>
                                </tr>
                                <!-- Additional table rows -->
                            </table>
                            @endforeach
                        </div>

                        <!-- .table-responsive -->
                    </div>
                    <!-- .with_border -->
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="pagination highlightlinks">
                                <li class="disabled">
                                    <a href="#">
                                        <span class="sr-only">Prev</span>
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li>
                                    <a href="#">
                                        <span class="sr-only">Next</span>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-md-right">
                            Showing 1 to 6 of 12 items
                        </div>
                    </div>
                </div>
            </div>
            <!-- .row main columns -->
        </div>
        <!-- .container -->
    </section>
@endSection
