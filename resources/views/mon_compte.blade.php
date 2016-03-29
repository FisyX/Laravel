@extends('layout')
@section('content')


    <section class="" id="content">

    <!-- Begin .page-heading -->
    <div class="page-heading">
        <div class="media clearfix">
            <div class="media-left pr30">
                <a href="#">
                    <img width="125px" alt="..." src="assets/img/avatars/kratos-portrait.jpg" class="media-object mw150">
                </a>
            </div>
            <div class="media-body va-m">
                <h2 class="media-heading">Théo Loiselot
                    <small> - Profile</small>
                </h2>
                <p class="lead">Lorem ipsum dolor sit amet ctetur adicing elit, sed do eiusmod tempor incididunt</p>
                <div class="media-links">
                    <ul class="list-inline list-unstyled">
                        <li>
                            <a title="facebook link" href="#">
                                <span class="fa fa-facebook-square fs35 text-primary"></span>
                            </a>
                        </li>
                        <li>
                            <a title="twitter link" href="#">
                                <span class="fa fa-twitter-square fs35 text-info"></span>
                            </a>
                        </li>
                        <li>
                            <a title="google plus link" href="#">
                                <span class="fa fa-google-plus-square fs35 text-danger"></span>
                            </a>
                        </li>
                        <li class="hidden">
                            <a title="behance link" href="#">
                                <span class="fa fa-behance-square fs35 text-primary"></span>
                            </a>
                        </li>
                        <li class="hidden">
                            <a title="pinterest link" href="#">
                                <span class="fa fa-pinterest-square fs35 text-danger-light"></span>
                            </a>
                        </li>
                        <li class="hidden">
                            <a title="linkedin link" href="#">
                                <span class="fa fa-linkedin-square fs35 text-info"></span>
                            </a>
                        </li>
                        <li class="hidden">
                            <a title="github link" href="#">
                                <span class="fa fa-github-square fs35 text-dark"></span>
                            </a>
                        </li>
                        <li class="">
                            <a title="phone link" href="#">
                                <span class="fa fa-phone-square fs35 text-system"></span>
                            </a>
                        </li>
                        <li>
                            <a title="email link" href="#">
                                <span class="fa fa-envelope-square fs35 text-muted"></span>
                            </a>
                        </li>
                        <li class="hidden">
                            <a title="external link" href="#">
                                <span class="fa fa-external-link-square fs35 text-muted"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



</section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">S'enregistrer</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">Nom</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Prénom</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-md-4 control-label">Photo</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="photo" value="{{ old('photo') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Description</label>
                                <div class="col-md-6">
                                    <textarea  class="form-control" name="description" value="{{ old('description') }}"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Mot de passe</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Confirmer mot de passe</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection