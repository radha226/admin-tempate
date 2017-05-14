<?php
    $menu='index';
?>
@extends('layouts.main')
<!--BEGIN HORIZONTAL MENU-->
@section('content')
   
   <!--BEGIN PAGE CONTENT-->
            <div class="page-content"><!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb hidden-xs hidden">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i
                                class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;
                        </li>
                        <li class="active">Dashboard</li>
                    </ol>
                    <ol class="breadcrumb charts-inline hidden-xs pull-right">
                        <li><p><span class="chart-title">Income</span><span
                                values="50000,60000,70000,50000,60000,50000,80000,40000,70000,80000"
                                class="sparkbar green mls mrm"></span><span class="chart-title">Outcome</span><span
                                values="5000,6000,3000,8000,4000,7000,5000,6000,3000,2000"
                                class="sparkbar default mls"></span></p></li>
                    </ol>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <div class="box-content"><!--BEGIN CONTENT-->
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div id="carousel-example-generic" data-ride="carousel" class="carousel slide">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-example-generic" data-slide-to="0"
                                                    class="active"></li>
                                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active"><img
                                                        src="{{asset('admin/assets/images/face.jpg')}}"
                                                        alt=""/>

                                                    <div class="carousel-caption"><p>Your eyes can deceive you. Don't
                                                        trust them. I don't know what you're talking about.</p>
                                                        <small><i>Another famous person</i></small>
                                                    </div>
                                                </div>
                                                <div class="item"><img
                                                        src="{{asset('admin/assets/images/face.jpg')}}"
                                                        alt=""/>

                                                    <div class="carousel-caption"><p>Your eyes can deceive you. Don't
                                                        trust them. I don't know what you're talking about.</p>
                                                        <small><i>Another famous person</i></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#carousel-example-generic" role="button" data-slide="prev"
                                               class="left carousel-control"><span class="icon-arrow-left"></span></a><a
                                                href="#carousel-example-generic" role="button" data-slide="next"
                                                class="right carousel-control"><span
                                                class="icon-arrow-right"></span></a></div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-body">Earning<span style="font-size: 24px;"
                                                                         class="pull-right">$<span
                                            id='earning-number'></span></span>

                                        <div id="earning-chart" style="width: 100%; height:100px" class="mtl"></div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-body">New Customers<span class="pull-right"> <span
                                            id='new-customer-number' style="font-size: 24px;"></span></span>

                                        <div id="new-customer-chart" style="width: 100%; height:100px"
                                             class="mtl"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div id="placeholder" style="width: 100%; height:150px"
                                             class="demo-placeholder"></div>
                                        <div class="section section-info"><span class="info-time">Today 2:25 PM</span>

                                            <h3 class="info-title">Salt Lake City, Utah</h3>

                                            <div class="info-block">
                                                <dl>
                                                    <dt>13.5 M</dt>
                                                    <dd>Shares Traded</dd>
                                                </dl>
                                            </div>
                                            <div class="info-block last">
                                                <dl>
                                                    <dt>28.44</dt>
                                                    <dd>Market Cap</dd>
                                                </dl>
                                            </div>
                                            <div class="info-aapl">AAPL
                                                <ul>
                                                    <li><span style="height: 47.5%" class="orange"></span></li>
                                                    <li><span style="height: 70%" class="orange"></span></li>
                                                    <li><span style="height: 70%" class="orange"></span></li>
                                                    <li><span style="height: 40%" class="orange"></span></li>
                                                    <li><span style="height: 75%" class="green"></span></li>
                                                    <li><span style="height: 50%" class="green"></span></li>
                                                    <li><span style="height: 15%" class="green"></span></li>
                                                    <li><span style="height: 25%" class="green"></span></li>
                                                </ul>
                                            </div>
                                            <div class="yearly-change">Yearly Change<span><em>+</em> 127.01</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="panel">
                                    <div class="panel-body"><h3 class="info-title mtn">MOST PLACE IN THE WORLD</h3>
                                        <small>Analytics favourite country user visited</small>
                                        <div class="row mtl">
                                            <div class="col-md-4">
                                                <div id="map-visitor-chart" style="width: 100%; height:200px"></div>
                                            </div>
                                            <div class="col-md-8">
                                                <div id="map-visitor-markers" style="width: 100%; height: 300px"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="widget-weather">
                                    <div class="widget-header"><h5>California USA<span class="caret mls"></span></h5>
                                    </div>
                                    <div class="widget-body">
                                        <div class="date"><p>Dec, 10 - Monday</p></div>
                                        <div class="row">
                                            <div class="col-xs-7"><p class="time">12:30<span>PM</span></p>

                                                <div class="stats"><p>Wind:<span class="text-success">6 mph NE</span>
                                                </p>

                                                    <p>Humidity<span>%</span><span id="number-humidity"
                                                                                   class="text-pink">88</span></p>

                                                    <p>Sunrise:<span>6:30 AM</span></p>

                                                    <p>Sunset<span>5:40 PM</span></p></div>
                                            </div>
                                            <div class="col-xs-5">
                                                <canvas id="icon1" width="60px" height="60px"></canvas>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="items">
                                                <div class="item col-xs-3"><p>France</p>
                                                    <canvas id="icon2" width="30px" height="30px"></canvas>
                                                    <p class="value">14°C</p></div>
                                                <div class="item col-xs-3"><p>Italia</p>
                                                    <canvas id="icon3" width="30px" height="30px"></canvas>
                                                    <p class="value">20°C</p></div>
                                                <div class="item col-xs-3"><p>India</p>
                                                    <canvas id="icon4" width="30px" height="30px"></canvas>
                                                    <p class="value">25°C</p></div>
                                                <div class="item col-xs-3"><p>England</p>
                                                    <canvas id="icon5" width="30px" height="30px"></canvas>
                                                    <p class="value">30°C</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mbl">
                            <div class="col-md-5">
                                <div class="widget-user mbl">
                                    <div class="header">
                                        <div class="header-content clearfix">
                                            <div class="user-img col-sm-3"><img
                                                    src="{{asset('admin/assets/images/face.jpg')}}"
                                                    class="img-circle img img-responsive"/></div>
                                            <div class="user-info col-sm-9"><h2>Jake Rochleau</h2>

                                                <p>I'm a freelance developer based in Austin, TX. I runs several
                                                    open-source projects</p>

                                                <p><span class="label label-info">Design</span><span
                                                        class="label label-warning">UI/UX</span></p></div>
                                        </div>
                                    </div>
                                    <div class="stats">
                                        <div class="row">
                                            <div class="stat-item col-xs-4"><a href="javascript:void(0)"><span
                                                    id="number-blogs">1,240</span>

                                                <p>blogs</p></a></div>
                                            <div class="stat-item col-xs-4"><a href="javascript:void(0)"><span
                                                    id="number-following">60</span>

                                                <p>following</p></a></div>
                                            <div class="stat-item col-xs-4"><a href="javascript:void(0)"><span
                                                    id="number-follower">117</span>

                                                <p>followers</p></a></div>
                                        </div>
                                    </div>
                                    <ul class="action-list">
                                        <li><a href="javascript:void(0)"><i data-toggle="tooltip" data-placement="top"
                                                                            title="Write message" class="icon-note"></i></a>
                                        </li>
                                        <li><a href="javascript:void(0)"><i data-toggle="tooltip" data-placement="top"
                                                                            title="View" class="icon-info"></i></a></li>
                                        <li><a href="javascript:void(0)"><i data-toggle="tooltip" data-placement="top"
                                                                            title="Favourite"
                                                                            class="icon-heart"></i></a></li>
                                        <li><a href="javascript:void(0)"><i data-toggle="tooltip" data-placement="top"
                                                                            title="Setting"
                                                                            class="icon-settings"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="panel">
                                    <div class="panel-body"><h3 class="info-title mtn">POPULAR ITEMS</h3>
                                        <small>Follow product's income in market place</small>
                                        <div class="table-responsive mtl">
                                            <table class="table table-border-dashed table-hover">
                                                <thead>
                                                <tr>
                                                    <th>App Name</th>
                                                    <th>Download</th>
                                                    <th>Percent</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Highway Rider</td>
                                                    <td>2.346</td>
                                                    <td>
                                                        <div data-hover="tooltip" title="80%"
                                                             class="progress progress-xs mtm mbm">
                                                            <div role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width: 80%;"
                                                                 class="progress-bar progress-bar-success"><span
                                                                    class="sr-only">80% Complete</span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>FaceFighter Ultimate</td>
                                                    <td>1.320</td>
                                                    <td>
                                                        <div data-hover="tooltip" title="85%"
                                                             class="progress progress-xs mtm mbm">
                                                            <div role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width: 85%;"
                                                                 class="progress-bar progress-bar-info"><span
                                                                    class="sr-only">85% Complete</span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>My Talking Tom</td>
                                                    <td>4.780</td>
                                                    <td>
                                                        <div data-hover="tooltip" title="90%"
                                                             class="progress progress-xs mtm mbm">
                                                            <div role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width: 90%;"
                                                                 class="progress-bar progress-bar-danger"><span
                                                                    class="sr-only">90% Complete</span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bomb Me</td>
                                                    <td>7.884</td>
                                                    <td>
                                                        <div data-hover="tooltip" title="60%"
                                                             class="progress progress-xs mtm mbm">
                                                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width: 60%;"
                                                                 class="progress-bar progress-bar-warning"><span
                                                                    class="sr-only">60% Complete</span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END CONTENT--></div>
            </div>

         
@endsection
    <!--BEGIN FOOTER-->
 