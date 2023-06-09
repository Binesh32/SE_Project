@extends('sign')

@section('content')
    <div class="modal fade" tabindex="-1" role="dialog" id="admin_contact_modal">
        <!-- <div class="ls with_padding"> -->
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <form class="with_padding contact-form" method="post" action="https://html.modernwebtemplates.com/gogreen/">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Contact Admin</h3>
                            <div class="contact-form-name">
                                <label for="name">Full Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" value="" name="name"
                                    id="name" class="form-control" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="contact-form-subject">
                                <label for="subject">Subject
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" value="" name="subject"
                                    id="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>

                        <div class="col-sm-12">

                            <div class="contact-form-message">
                                <label for="message">Message</label>
                                <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control"
                                    placeholder="Message"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12 text-center">
                            <div class="contact-form-submit">
                                <button type="submit" id="contact_form_submit" name="contact_submit"
                                    class="theme_button wide_button color1">Send Message</button>
                                <button type="reset" id="contact_form_reset" name="contact_reset"
                                    class="theme_button wide_button">Clear Form</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- eof .modal -->

    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">

            <!-- template sections -->
            <section class="ls section_padding_top_100 section_padding_bottom_100 section_full_height">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 to_animate">
                            <div class="with_border with_padding">

                                <h4 class="text-center">
                                    Sign In to Your Account
                                </h4>
                                <hr class="bottommargin_30">
                                <div class="wrap-forms">
                                    <form action="{{ route('organization.SignIn') }}" method="post" novalidate="novalidate">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-placeholder">
                                                    <label for="login-email">Email address</label>
                                                    <i class="grey fa fa-envelope-o"></i>
                                                    <input type="email" class="form-control" name = "email" id="login-email"
                                                        placeholder="Email Address">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-placeholder">
                                                    <label for="login-password">Password</label>
                                                    <i class="grey fa fa-pencil-square-o"></i>
                                                    <input type="password" class="form-control" name="password" id="login-password"
                                                        placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="remember_me_checkbox">
                                                    <label for="remember_me_checkbox">Rememrber Me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="theme_button block_button color1">Log In</button>
                                    </form>
                                </div>

                                <div class="darklinks text-center topmargin_20">

                                    <a role="button" data-toggle="collapse" href="#signin-resend-password"
                                        aria-expanded="false" aria-controls="signin-resend-password">
                                        Forgot your password?
                                    </a>

                                </div>
                                <div class="collapse form-inline-button" id="signin-resend-password">
                                    <form class="form-inline topmargin_20">
                                        <div class="form-group">
                                            <label class="sr-only">Enter your e-mail</label>
                                            <input type="email" class="form-control" placeholder="E-mail">
                                        </div>
                                        <button type="submit" class="theme_button with_icon">
                                            <i class="fa fa-share"></i>
                                        </button>
                                    </form>
                                </div>


                            </div>
                            <!-- .with_border -->

                            <p class="divider_20 text-center">
                                Not registered? Create an account <br> <a href="{{ route('usersignup') }}">User</a>, <a
                                    href="{{ route('organizationsignup') }}">Organization</a>, <a
                                    href="{{ route('adminsignup') }}">Admin</a> <br>
                                or go <a href="{{ route('home') }}">Home</a>
                            </p>

                        </div>
                        <!-- .col-* -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </section>
        </div>
        <!-- eof #box_wrapper -->
    </div>
@endsection
