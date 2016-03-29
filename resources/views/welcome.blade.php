@extends('layout')
@section('content')





        <div class="col-sm-4 col-xl-3">
            <div class="panel panel-tile text-center br-a br-grey">
                <div class="panel-body">
                    <h1 class="fs30 mt5 mbn">{{ $nbmoviestotal }}</h1>
                    <h6 class="text-system">NOUVEAU FILM</h6>
                </div>
                <div class="panel-footer br-t p12">
                  <span class="fs11">
                    <i class="fa fa-arrow-up pr5"></i> 3% INCREASE
                    <b>1W AGO</b>
                  </span>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xl-3">
            <div class="panel panel-tile text-center br-a br-grey">
                <div class="panel-body">
                    <h1 class="fs30 mt5 mbn">63,262</h1>
                    <h6 class="text-success">NOUVEAU COMMENTAIRE</h6>
                </div>
                <div class="panel-footer br-t p12">
                  <span class="fs11">
                    <i class="fa fa-arrow-up pr5"></i> 2.7% INCREASE
                    <b>1W AGO</b>
                  </span>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xl-3">
            <div class="panel panel-tile text-center br-a br-grey">
                <div class="panel-body">
                    <h1 class="fs30 mt5 mbn">248</h1>
                    <h6 class="text-warning">NOUVEL UTILISATEUR</h6>
                </div>
                <div class="panel-footer br-t p12">
                  <span class="fs11">
                    <i class="fa fa-arrow-up pr5 text-success"></i> 1% INCREASE
                    <b>1W AGO</b>
                  </span>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xl-3 visible-xl">
            <div class="panel panel-tile text-center br-a br-grey">
                <div class="panel-body">
                    <h1 class="fs30 mt5 mbn">6,718</h1>
                    <h6 class="text-danger">UNIQUE VISITS</h6>
                </div>
                <div class="panel-footer br-t p12">
                  <span class="fs11">
                    <i class="fa fa-arrow-down pr5 text-danger"></i> 6% DECREASE
                    <b>1W AGO</b>
                  </span>
                </div>
            </div>
        </div>










    <div class="col-md-3">


    <div class="panel panel-tile text-center">
        <div class="panel-body bg-success light">
            <i class="fa fa-film text-muted fs45 br64 bg-success p15 ph20 mt10"></i>
            <h1 class="fs35 mbn"> {{ $nb }} sur {{ $nbmoviestotal }}</h1>
            <h6 class="text-white">Films visible en stock</h6>
        </div>
    </div>


    </div>

        <div class="col-md-3">


            <div class="panel panel-tile text-center">
                <div class="panel-body bg-warning light">
                    <i class="fa fa-video-camera text-muted fs45 br64 bg-warning p15 ph20 mt10"></i>
                    <h1 class="fs35 mbn"> {{ $nbtotal }}</h1>
                    <h6 class="text-white">Directeurs</h6>
                </div>
            </div>


        </div>

        <div class="col-md-3">


            <div class="panel panel-tile text-center">
                <div class="panel-body bg-system light">
                    <i class="fa fa-users text-muted fs45 br64 bg-system p15 ph20 mt10"></i>
                    <h1 class="fs35 mbn">{{ $nbusers }}</h1>
                    <h6 class="text-white">Utilisateur</h6>
                </div>
            </div>


        </div>

        <div class="col-md-3">


            <div class="panel panel-tile text-center">
                <div class="panel-body bg-primary light">
                    <i class="fa fa-comment text-muted fs45 br64 bg-primary p15 ph20 mt10"></i>
                    <h1 class="fs35 mbn">166</h1>
                    <h6 class="text-white">Commentaires</h6>
                </div>
            </div>


        </div>







            <div class="col-md-3">


                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-danger light">
                        <i class="fa fa-users text-muted fs45 br64 bg-danger p15 ph20 mt10"></i>
                        <h1 class="fs35 mbn"> {{ $age }} ans</h1>
                        <h6 class="text-white">Age moyen des acteurs</h6>
                    </div>
                </div>


            </div>

            <div class="col-md-3">


                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-alert light">
                        <i class="fa fa-usd text-muted fs45 br64 bg-alert p15 ph20 mt10"></i>
                        <h1 class="fs35 mbn">{{ $budget }}€</h1>
                        <h6 class="text-white">Budget total</h6>
                    </div>
                </div>


            </div>

            <div class="col-md-3">


                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-dark light">
                        <i class="fa fa-clock-o text-muted fs45 br64 bg-dark p15 ph20 mt10"></i>
                        <h1 class="fs35 mbn">{{ $duree }}h</h1>
                        <h6 class="text-white">Duree moyenne des films</h6>
                    </div>
                </div>


            </div>

            <div class="col-md-3">


                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-info light">
                        <i class="fa fa-pencil-square-o text-muted fs45 br64 bg-info p15 ph20 mt10"></i>
                        <h1 class="fs35 mbn"> {{ $notepress }} / 5</h1>
                        <h6 class="text-white">Moyenne des notes</h6>
                    </div>
                </div>
            </div>

    <div class="col-md-6">

        <!-- User Group Widget -->
        <div class="panel user-group-widget">
            <div class="panel-heading">
                    <span class="panel-icon">
                      <i class="fa fa-users"></i>
                    </span>
                <span class="panel-title"> Recent User Activity</span>
            </div>
            <div class="panel-menu">
                <div class="input-group ">
                      <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                      </span>
                    <input type="text" placeholder="Search user..." class="form-control">
                </div>
            </div>
            <div style="max-height: 513px;" class="panel-body panel-scroller pn scroller scroller-active"><div class="scroller-bar" style="height: 512px;"><div class="scroller-track" style="height: 502px; margin-bottom: 5px; margin-top: 5px;"><div class="scroller-handle" style="height: 401.28px; top: 0px;"></div></div></div><div class="scroller-content">

                    <div class="row mt15">

                        @foreach ($users as $user)

                        <div class="col-md-3">
                            <img width="75px" height="75px" style="border: 2px solid lightgrey" src="{{ $user->avatar }}">
                            <div class="caption">
                                <h5>{{ $user->username }}
                                    <br>
                                    <small> {{ $user->username }}</small>
                                </h5>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div></div>
        </div>

    </div>

    <div class="col-md-6">

        <div class="bs-component">
            <div class="panel">
                <div class="panel-heading">
                      <span class="panel-icon">
                        <i class="fa fa-clock-o"></i>
                      </span>
                    <span class="panel-title"> Activity/Timeline Widget</span>
                </div>
                <div class="panel-body ptn pbn p10">
                    <ol class="timeline-list">
                        <li class="timeline-item">
                            <div class="timeline-icon bg-dark light">
                                <span class="fa fa-tags"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Michael</b> Added to his store:
                                <a href="#">Ipod</a>
                            </div>
                            <div class="timeline-date">1:25am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-dark light">
                                <span class="fa fa-tags"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Sara</b> Added his store:
                                <a href="#">Notebook</a>
                            </div>
                            <div class="timeline-date">3:05am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-success">
                                <span class="fa fa-usd"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Admin</b> created invoice for:
                                <a href="#">Software</a>
                            </div>
                            <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-success">
                                <span class="fa fa-usd"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Admin</b> created invoice for:
                                <a href="#">Apple</a>
                            </div>
                            <div class="timeline-date">7:45am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-success">
                                <span class="fa fa-usd"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Admin</b> created invoice for:
                                <a href="#">Software</a>
                            </div>
                            <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-success">
                                <span class="fa fa-usd"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Admin</b> created invoice for:
                                <a href="#">Apple</a>
                            </div>
                            <div class="timeline-date">7:45am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-dark light">
                                <span class="fa fa-tags"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Michael</b> Added his store:
                                <a href="#">Ipod</a>
                            </div>
                            <div class="timeline-date">8:25am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-system">
                                <span class="fa fa-fire"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Admin</b> created invoice for:
                                <a href="#">Software</a>
                            </div>
                            <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-dark light">
                                <span class="fa fa-tags"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Sara</b> Added to his store:
                                <a href="#">Notebook</a>
                            </div>
                            <div class="timeline-date">3:05am</div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="btn btn-primary btn-xs" id="source-button" style="display: none;">&lt; &gt;</div></div>

    </div>









@endsection