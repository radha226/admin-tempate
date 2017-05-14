<?php
	$menu='profile'
?>
@extends('layouts.main')
<!--BEGIN HORIZONTAL MENU-->
@section('content')
   	
      <!--BEGIN PAGE CONTENT-->
<div class="page-content"><!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">Profile</div>
        </div>
        <ol class="breadcrumb page-breadcrumb hidden-xs">
            <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i
                    class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
            <li><a href="#">User</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
            <li class="active">Profile</li>
        </ol>
    </div>
    <!--END TITLE & BREADCRUMB PAGE-->
    <div class="box-content"><!--BEGIN CONTENT-->
        <div class="content">
            <div class="page-profile">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="profile-left-side col-md-3">
                                        <div class="user-img text-center"><img
                                                src="{{asset('admin/assets/images/face.jpg')}}"
                                                class="img-circle"/></div>
                                        <div class="social-icon-group">
                                            <ul class="social-icons list-unstyled list-inline text-center mbl mtl">
                                                <li><a href="#" data-hover="tooltip"
                                                       data-original-title="facebook" class="facebook"><i
                                                        class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" data-hover="tooltip"
                                                       data-original-title="google Plus" class="googleplus"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" data-hover="tooltip"
                                                       data-original-title="twitter" class="twitter"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="text-center"><a href="#" class="btn btn-default"><i
                                                class="fa fa-envelope"></i>&nbsp;
                                            Send an email</a></div>
                                        <div class="row">
                                            <dl class="partner-list col-sm-6 col-md-12 clearfix mtl">
                                                <dt>
                                                <p class="title-line">Partner<span
                                                        class="text-muted">(429)</span></p></dt>
                                                <dd><a href="#" data-hover="tooltip"
                                                       data-original-title="Uxceo"><img
                                                        src="{{asset('admin/assets/images/profile.jpg')}}"/></a>
                                                </dd>
                                                <dd><a href="#" data-hover="tooltip"
                                                       data-original-title="Rssems"><img
                                                        src="{{asset('admin/assets/images/profile.jpg')}}"/></a>
                                                </dd>
                                                <dd><a href="#" data-hover="tooltip"
                                                       data-original-title="Claudio Guglieri"><img
                                                        src="{{asset('admin/assets/images/profile.jpg')}}"/></a>
                                                </dd>
                                                <dd><a href="#" data-hover="tooltip"
                                                       data-original-title="Jack Mcdade"><img
                                                        src="{{asset('admin/assets/images/profile.jpg')}}"/></a>
                                                </dd>
                                                <dd><a href="#" data-hover="tooltip"
                                                       data-original-title="Dominik Martn"><img
                                                        src="{{asset('admin/assets/images/profile.jpg')}}"/></a>
                                                </dd>
                                                <dd><a href="#" data-hover="tooltip"
                                                       data-original-title="Oliveira Simoes"><img
                                                        src="{{asset('admin/assets/images/profile.jpg')}}"/></a>
                                                </dd>
                                                <dd><a href="#" data-hover="tooltip"
                                                       data-original-title="Adelle Charles"><img
                                                        src="{{asset('admin/assets/images/profile.jpg')}}"/></a>
                                                </dd>
                                            </dl>
                                            <dl class="recent-post-list col-sm-6 col-md-12 mtl">
                                                <dt>
                                                <p class="title-line">Recent Post<span class="text-muted">(5 mins ago)</span>
                                                </p></dt>
                                                <dd class="mtm"><a href="#" class="post-title"><img
                                                        src="assets/images/icon-html5.png"
                                                        class="mrs"/><span>HTML5 Weekly: A Free, Weekly Email</span></a>
                                                </dd>
                                                <dd class="mtm"><a href="#" class="post-title"><img
                                                        src="assets/images/icon-css3.png"
                                                        class="mrs"/><span>All you ever needed to know about CSS3</span></a>
                                                </dd>
                                                <dd class="mtm"><a href="#" class="post-title"><img
                                                        src="assets/images/icon-angular.png"
                                                        class="mrs"/><span>AngularJS Stories for Web Architects</span></a>
                                                </dd>
                                                <dd class="mtm"><a href="#" class="post-title"><img
                                                        src="assets/images/icon-vine.png"
                                                        class="mrs"/><span>How well does your browser support HTML5?</span></a>
                                                </dd>
                                                <dd class="mtm"><a href="#" class="post-title"><img
                                                        src="assets/images/icon-tumblr.png"
                                                        class="mrs"/><span>HTML5 semantic elements</span></a>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="profile-right-side col-md-9">
                                        <div class="row">
                                            <div class="col-xs-12"><h3 style="color: #222"
                                                                       class="mbs mlx plm">Jake
                                                Rochleau</h3>

                                                <p class="mlx plm">Jake Rochleau is a freelance developer
                                                    based in Austin, TX. He runs several open-source
                                                    projects (such as LabJS), writes books, and speaks at
                                                    meetups and conferences.</p>

                                                <div class="row">
                                                    <div class="tabbable-line col-md-12">
                                                        <ul class="row nav nav-tabs responsive mtxl">
                                                            <li class="active"><a href="#tab-about"
                                                                                  data-toggle="tab"
                                                                                  style="padding-top: 8px"><strong><i
                                                                    class="fa fa-info"></i>&nbsp;
                                                                About</strong></a></li>
                                                            <li><a href="#tab-activity" data-toggle="tab"
                                                                   style="padding-top: 8px"><strong><i
                                                                    class="fa fa-bolt"></i>&nbsp;
                                                                Activity</strong></a></li>
                                                            <li><a href="#tab-mail" data-toggle="tab"
                                                                   style="padding-top: 8px"><strong><i
                                                                    class="fa fa-envelope-o"></i>&nbsp;
                                                                Messages</strong></a></li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div id="tab-about"
                                                                 class="tab-pane fade in active">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="article article-danger">
                                                                            <div class="article-head"><h4
                                                                                    class="article-title">
                                                                                Basic Information</h4></div>
                                                                            <div class="article-body">
                                                                                <div class="st-section">
                                                                                    <table>
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <td class="tr-head">
                                                                                                Gender
                                                                                            </td>
                                                                                            <td>Male</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="tr-head">
                                                                                                Email
                                                                                            </td>
                                                                                            <td>
                                                                                                user@example.com
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="tr-head">
                                                                                                Address
                                                                                            </td>
                                                                                            <td>Street 123,
                                                                                                Avenue 45,
                                                                                                Country
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="tr-head">
                                                                                                Status
                                                                                            </td>
                                                                                            <td><span
                                                                                                    class="label label-success">Active</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="tr-head">
                                                                                                Rating
                                                                                            </td>
                                                                                            <td>
                                                                                                <i class="fa fa-star text-warning fa-fw"></i><i
                                                                                                    class="fa fa-star text-warning fa-fw"></i><i
                                                                                                    class="fa fa-star text-warning fa-fw"></i><i
                                                                                                    class="fa fa-star text-warning fa-fw"></i><i
                                                                                                    class="fa fa-star fa-fw"></i>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="tr-head">
                                                                                                Join
                                                                                            </td>
                                                                                            <td>Jun 03,
                                                                                                2014
                                                                                            </td>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div class="article-footer"><a
                                                                                    href="#" type="button"
                                                                                    data-target="#modal-default"
                                                                                    data-toggle="modal">Edit</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="article article-info">
                                                                            <div class="article-head"><h4
                                                                                    class="article-title">
                                                                                Education</h4></div>
                                                                            <div class="article-body">
                                                                                <div class="st-section"><h5
                                                                                        class="st-title">The
                                                                                    University of
                                                                                    Melbourne</h5>

                                                                                    <p class="st-description">
                                                                                        2012 - 2014</p>

                                                                                    <p class="st-description">
                                                                                        Oldest Victorian
                                                                                        university
                                                                                        (established 1855)
                                                                                        offering a vast
                                                                                        range of
                                                                                        coursework</p></div>
                                                                                <div class="st-section"><h5
                                                                                        class="st-title">The
                                                                                    University of
                                                                                    Sydney</h5>

                                                                                    <p class="st-description">
                                                                                        2014</p>

                                                                                    <p class="st-description">
                                                                                        Australia's leading
                                                                                        higher education and
                                                                                        research
                                                                                        University.</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="article-footer"><a
                                                                                    href="#" type="button"
                                                                                    data-target="#modal-default"
                                                                                    data-toggle="modal">Edit</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="article article-danger">
                                                                            <div class="article-head"><h4
                                                                                    class="article-title">
                                                                                Contact Information</h4>
                                                                            </div>
                                                                            <div class="article-body">
                                                                                <div class="st-section"><h5
                                                                                        class="ci-title st-title">
                                                                                    Home</h5>

                                                                                    <p class="st-description">
                                                                                    <table>
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <td class="tr-head">
                                                                                                Phone
                                                                                            </td>
                                                                                            <td>
                                                                                                08-1234-567
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="tr-head">
                                                                                                Fax
                                                                                            </td>
                                                                                            <td>021-56789
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="tr-head">
                                                                                                Website
                                                                                            </td>
                                                                                            <td><a href="#">http://www.yoursite.com</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="tr-head">
                                                                                                Blog
                                                                                            </td>
                                                                                            <td><a href="#">http://www.yourblog.com</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    </p></div>
                                                                                <div class="st-section"><h5
                                                                                        class="ci-title st-title">
                                                                                    Work</h5>

                                                                                    <p class="st-description">
                                                                                    <table>
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <td class="tr-head">
                                                                                                Phone
                                                                                            </td>
                                                                                            <td>
                                                                                                08-1234-567
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="tr-head">
                                                                                                Fax
                                                                                            </td>
                                                                                            <td>021-56789
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="tr-head">
                                                                                                Website
                                                                                            </td>
                                                                                            <td><a href="#">http://www.yoursite.com</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="tr-head">
                                                                                                Blog
                                                                                            </td>
                                                                                            <td><a href="#">http://www.yourblog.com</a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    </p></div>
                                                                            </div>
                                                                            <div class="article-footer"><a
                                                                                    href="#" type="button"
                                                                                    data-target="#modal-default"
                                                                                    data-toggle="modal">Edit</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="article article-success">
                                                                            <div class="article-head"><h4
                                                                                    class="article-title">
                                                                                Work</h4></div>
                                                                            <div class="article-body">
                                                                                <div class="st-section"><h5
                                                                                        class="st-title">
                                                                                    Occupation</h5>

                                                                                    <p class="st-description">
                                                                                        What do you do?</p>
                                                                                </div>
                                                                                <div class="st-section"><h5
                                                                                        class="st-title">
                                                                                    Skills</h5>

                                                                                    <p class="st-description">
                                                                                        What are your best
                                                                                        skils?</p></div>
                                                                                <div class="st-section"><h5
                                                                                        class="st-title">
                                                                                    Employment</h5>

                                                                                    <p class="st-description">
                                                                                        Where have you
                                                                                        worked?</p></div>
                                                                            </div>
                                                                            <div class="article-footer"><a
                                                                                    href="#" type="button"
                                                                                    data-target="#modal-default"
                                                                                    data-toggle="modal">Edit</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="article">
                                                                            <div class="article-head"><h4
                                                                                    class="article-title">
                                                                                Places</h4></div>
                                                                            <div class="article-body">
                                                                                <div class="st-section">
                                                                                    <iframe width="100%"
                                                                                            height="350"
                                                                                            frameborder="0"
                                                                                            style="border:0"
                                                                                            src="https://www.google.com/maps/embed/v1/place?q=121%20King%20Street%2C%20Melbourne%2C%20Victoria%2C%20Australia&amp;key=AIzaSyBl-BZWqTyzNfUxRGZbOODQGdyWtW7MVAY"></iframe>
                                                                                </div>
                                                                            </div>
                                                                            <div class="article-footer"><a
                                                                                    href="#" type="button"
                                                                                    data-target="#modal-default"
                                                                                    data-toggle="modal">Edit</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="article article-warning">
                                                                            <div class="article-head"><h4
                                                                                    class="article-title">
                                                                                Link Connection</h4></div>
                                                                            <div class="article-body">
                                                                                <div class="st-section"><img
                                                                                        src="assets/images/icon-html5.png"
                                                                                        class="pull-left mrm"/><a
                                                                                        href="#"
                                                                                        class="lc-link">HTML5
                                                                                    Community</a>
                                                                                    <button class="btn btn-default pull-right mts">
                                                                                        View
                                                                                    </button>
                                                                                </div>
                                                                                <div class="st-section"><img
                                                                                        src="assets/images/icon-css3.png"
                                                                                        class="pull-left mrm"/><a
                                                                                        href="#"
                                                                                        class="lc-link">Bootstrap
                                                                                    framework</a>
                                                                                    <button class="btn btn-default pull-right mts">
                                                                                        View
                                                                                    </button>
                                                                                </div>
                                                                                <div class="st-section"><img
                                                                                        src="assets/images/icon-angular.png"
                                                                                        class="pull-left mrm"/><a
                                                                                        href="#"
                                                                                        class="lc-link">Superheroic
                                                                                    Javascript framework</a>
                                                                                    <button class="btn btn-default pull-right mts">
                                                                                        View
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="article-footer"><a
                                                                                    href="#" type="button"
                                                                                    data-target="#modal-default"
                                                                                    data-toggle="modal">Edit</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="tab-activity" class="tab-pane fade">
                                                                <ul class="list-activity list-unstyled">
                                                                    <li class="post-list clearfix">
                                                                        <div class="avatar"><img
                                                                                src="../../../s3.amazonaws.com/uifaces/faces/twitter/mlane/48.jpg"
                                                                                class="img-circle"/></div>
                                                                        <div class="post-body">
                                                                            <div class="desc"><strong
                                                                                    class="post-user mrs">Diane
                                                                                Harris</strong>
                                                                                <small class="text-muted">
                                                                                    posted a new note
                                                                                </small>
                                                                                &nbsp; - &nbsp;
                                                                                <small class="text-muted">1
                                                                                    days ago at 6:18am
                                                                                </small>
                                                                            </div>
                                                                            <div class="post-content"><a
                                                                                    href="#"
                                                                                    class="post-title"><img
                                                                                    src="assets/images/icon-html5.png"
                                                                                    class="mrs"/><strong>HTML5
                                                                                Weekly: A Free, Weekly Email
                                                                                Newsletter</strong></a>

                                                                                <div class="summary mts cleafix">
                                                                                    <div class="img-wrapper">
                                                                                        <img src="assets/images/06.jpg"
                                                                                             class="mrs"/>
                                                                                    </div>
                                                                                    <p>Lorem ipsum dolor sit
                                                                                        amet, consectetur
                                                                                        adipisicing. Lorem
                                                                                        ipsum dolor
                                                                                        sit amet,consectetur
                                                                                        adipisicing elit.
                                                                                        Laudantium, quo.
                                                                                        Lorem
                                                                                        it amet,consectetur
                                                                                        adipisicing elit.
                                                                                        Laudantium, quo.
                                                                                        Lorem</p></div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <div class="action-post mtl"><a
                                                                                    href="#"><i
                                                                                    class="fa fa-heart-o mrx"></i>Like</a>&nbsp;
                                                                                - &nbsp;<a href="#"><i
                                                                                        class="fa fa-comments-o mrx"></i>Comments</a>&nbsp;
                                                                                - &nbsp;<a href="#"><i
                                                                                        class="fa fa-share-square-o mrx"></i>Share</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="post-list clearfix">
                                                                        <div class="avatar"><img
                                                                                src="../../../s3.amazonaws.com/uifaces/faces/twitter/adellecharles/48.jpg"
                                                                                class="img-circle"/></div>
                                                                        <div class="post-body">
                                                                            <div class="desc"><strong
                                                                                    class="post-user mrs">Ava
                                                                                Martin</strong>
                                                                                <small class="text-muted">
                                                                                    posted a new note
                                                                                </small>
                                                                                &nbsp; - &nbsp;
                                                                                <small class="text-muted">1
                                                                                    days ago at 6:18am
                                                                                </small>
                                                                            </div>
                                                                            <div class="post-content"><a
                                                                                    href="#"
                                                                                    class="post-title"><img
                                                                                    src="assets/images/icon-angular.png"
                                                                                    class="mrs"/><strong>AngularJS
                                                                                Stories for Web
                                                                                Architects</strong></a>

                                                                                <div class="summary mts cleafix">
                                                                                    <div class="img-wrapper">
                                                                                        <img src="assets/images/02-sm.jpg"
                                                                                             class="mrs"/>
                                                                                    </div>
                                                                                    <p>Lorem ipsum dolor sit
                                                                                        amet, consectetur
                                                                                        adipisicing. Lorem
                                                                                        ipsum dolor
                                                                                        sit amet,consectetur
                                                                                        adipisicing elit.
                                                                                        Laudantium, quo.
                                                                                        Lorem
                                                                                        it amet,consectetur
                                                                                        adipisicing elit.
                                                                                        Laudantium, quo.
                                                                                        Lorem</p></div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <div class="action-post mtl"><a
                                                                                    href="#"><i
                                                                                    class="fa fa-heart-o mrx"></i>Like</a>&nbsp;
                                                                                - &nbsp;<a href="#"><i
                                                                                        class="fa fa-comments-o mrx"></i>Comments</a>&nbsp;
                                                                                - &nbsp;<a href="#"><i
                                                                                        class="fa fa-share-square-o mrx"></i>Share</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="post-list clearfix">
                                                                        <div class="avatar"><img
                                                                                src="../../../s3.amazonaws.com/uifaces/faces/twitter/kurafire/48.jpg"
                                                                                class="img-circle"/></div>
                                                                        <div class="post-body">
                                                                            <div class="desc"><strong
                                                                                    class="post-user mrs">Charlotte
                                                                                Robinson</strong>
                                                                                <small class="text-muted">
                                                                                    upload new photos
                                                                                </small>
                                                                                &nbsp; - &nbsp;
                                                                                <small class="text-muted">1
                                                                                    week ago at 9:18am
                                                                                </small>
                                                                            </div>
                                                                            <div class="post-content">
                                                                                <div class="img-upload-wrap">
                                                                                    <img src="assets/images/04-sm.jpg"
                                                                                         class="img-responsive mts"/><img
                                                                                        src="assets/images/05-sm.jpg"
                                                                                        class="img-responsive mts"/><img
                                                                                        src="assets/images/07-sm.jpg"
                                                                                        class="img-responsive mts"/><img
                                                                                        src="assets/images/09-sm.jpg"
                                                                                        class="img-responsive mts"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="post-list clearfix">
                                                                        <div class="avatar"><img
                                                                                src="../../../s3.amazonaws.com/uifaces/faces/twitter/chadengle/48.jpg"
                                                                                class="img-circle"/></div>
                                                                        <div class="post-body">
                                                                            <div class="desc"><strong
                                                                                    class="post-user mrs">Sophia
                                                                                Lee</strong>
                                                                                <small class="text-muted">
                                                                                    upload new photos
                                                                                </small>
                                                                                &nbsp; - &nbsp;
                                                                                <small class="text-muted">1
                                                                                    week ago at 9:18am
                                                                                </small>
                                                                            </div>
                                                                            <div class="post-content">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <span class="task-item">Admin Template<small
                                                                                                class="pull-right text-muted">
                                                                                            80%
                                                                                        </small></span>

                                                                                        <div class="progress">
                                                                                            <div role="progressbar"
                                                                                                 aria-valuenow="80"
                                                                                                 aria-valuemin="0"
                                                                                                 aria-valuemax="100"
                                                                                                 style="width: 80%;"
                                                                                                 class="progress-bar progress-bar-orange">
                                                                                                <span class="sr-only">80% Complete (success)</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <span class="task-item">Wordpress Themes<small
                                                                                                class="pull-right text-muted">
                                                                                            40%
                                                                                        </small></span>

                                                                                        <div class="progress">
                                                                                            <div role="progressbar"
                                                                                                 aria-valuenow="40"
                                                                                                 aria-valuemin="0"
                                                                                                 aria-valuemax="100"
                                                                                                 style="width: 40%;"
                                                                                                 class="progress-bar progress-bar-success">
                                                                                                <span class="sr-only">40% Complete (success)</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <span class="task-item">Landing Page<small
                                                                                                class="pull-right text-muted">
                                                                                            67%
                                                                                        </small></span>

                                                                                        <div class="progress">
                                                                                            <div role="progressbar"
                                                                                                 aria-valuenow="67"
                                                                                                 aria-valuemin="0"
                                                                                                 aria-valuemax="100"
                                                                                                 style="width: 67%;"
                                                                                                 class="progress-bar progress-bar-warning">
                                                                                                <span class="sr-only">67% Complete (success)</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="post-list clearfix">
                                                                        <div class="avatar"><img
                                                                                src="../../../s3.amazonaws.com/uifaces/faces/twitter/oliveirasimoes/48.jpg"
                                                                                class="img-circle"/></div>
                                                                        <div class="post-body">
                                                                            <div class="desc"><strong
                                                                                    class="post-user mrs">Diane
                                                                                Harris</strong>
                                                                                <small class="text-muted">
                                                                                    posted a new note
                                                                                </small>
                                                                                &nbsp; - &nbsp;
                                                                                <small class="text-muted">1
                                                                                    days ago at 6:18am
                                                                                </small>
                                                                            </div>
                                                                            <div class="post-content"><a
                                                                                    href="#"
                                                                                    class="post-title"><img
                                                                                    src="assets/images/icon-html5.png"
                                                                                    class="mrs"/><strong>HTML5
                                                                                Weekly: A Free, Weekly Email
                                                                                Newsletter</strong></a>

                                                                                <div class="summary mts cleafix">
                                                                                    <div class="img-wrapper">
                                                                                        <img src="assets/images/04-sm.jpg"
                                                                                             class="mrs"/>
                                                                                    </div>
                                                                                    <p>Lorem ipsum dolor sit
                                                                                        amet, consectetur
                                                                                        adipisicing. Lorem
                                                                                        ipsum dolor
                                                                                        sit amet,consectetur
                                                                                        adipisicing elit.
                                                                                        Laudantium, quo.
                                                                                        Lorem
                                                                                        it amet,consectetur
                                                                                        adipisicing elit.
                                                                                        Laudantium, quo.
                                                                                        Lorem</p></div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <div class="action-post mtl"><a
                                                                                    href="#"><i
                                                                                    class="fa fa-heart-o mrx"></i>Like</a>&nbsp;
                                                                                - &nbsp;<a href="#"><i
                                                                                        class="fa fa-comments-o mrx"></i>Comments</a>&nbsp;
                                                                                - &nbsp;<a href="#"><i
                                                                                        class="fa fa-share-square-o mrx"></i>Share</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="post-list clearfix">
                                                                        <div class="avatar"><img
                                                                                src="../../../s3.amazonaws.com/uifaces/faces/twitter/claudioguglieri/48.jpg"
                                                                                class="img-circle"/></div>
                                                                        <div class="post-body">
                                                                            <div class="desc"><strong
                                                                                    class="post-user mrs">Diane
                                                                                Harris</strong>
                                                                                <small class="text-muted">
                                                                                    posted a new note
                                                                                </small>
                                                                                &nbsp; - &nbsp;
                                                                                <small class="text-muted">1
                                                                                    days ago at 6:18am
                                                                                </small>
                                                                            </div>
                                                                            <div class="post-content"><a
                                                                                    href="#"
                                                                                    class="post-title"><img
                                                                                    src="assets/images/icon-html5.png"
                                                                                    class="mrs"/><strong>HTML5
                                                                                Weekly: A Free, Weekly Email
                                                                                Newsletter</strong></a>

                                                                                <div class="summary mts cleafix">
                                                                                    <div class="img-wrapper">
                                                                                        <img src="assets/images/05-sm.jpg"
                                                                                             class="mrs"/>
                                                                                    </div>
                                                                                    <p>Lorem ipsum dolor sit
                                                                                        amet, consectetur
                                                                                        adipisicing. Lorem
                                                                                        ipsum dolor
                                                                                        sit amet,consectetur
                                                                                        adipisicing elit.
                                                                                        Laudantium, quo.
                                                                                        Lorem
                                                                                        it amet,consectetur
                                                                                        adipisicing elit.
                                                                                        Laudantium, quo.
                                                                                        Lorem</p></div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <div class="action-post mtl"><a
                                                                                    href="#"><i
                                                                                    class="fa fa-heart-o mrx"></i>Like</a>&nbsp;
                                                                                - &nbsp;<a href="#"><i
                                                                                        class="fa fa-comments-o mrx"></i>Comments</a>&nbsp;
                                                                                - &nbsp;<a href="#"><i
                                                                                        class="fa fa-share-square-o mrx"></i>Share</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div id="tab-mail" class="tab-pane fade">
                                                                <div class="mail-action-group form-inline mtl mbl">
                                                                    <div class="row">
                                                                        <div class="col-lg-6"><a href="#"
                                                                                                 role="button"
                                                                                                 class="btn btn-danger mrm"><i
                                                                                class="fa fa-send-o mrs"></i>COMPOSE</a><a
                                                                                href="#" role="button"
                                                                                class="btn btn-default"><i
                                                                                class="fa fa-trash-o mrs"></i>Trash</a>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group pull-right">
                                                                                <input type="text"
                                                                                       class="form-control input-inline"/><a
                                                                                    href="#"
                                                                                    class="input-group-addon">Search</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list-group mail-box"><a
                                                                        class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-lg-4"><input
                                                                                type="checkbox"/><span
                                                                                class="fa fa-star-o mrm mlm"></span><span
                                                                                class="mail-from">Bhaumik Patel</span>
                                                                        </div>
                                                                        <div class="col-lg-8"><i
                                                                                class="mail-title">Sed ut
                                                                            perspiciatis unde</i>&nbsp; -
                                                                            &nbsp;<span
                                                                                    style="font-size: 11px;"
                                                                                    class="text-muted">Lorem ipsum dolor sit amet...</span><span
                                                                                    class="pull-right">12:10 AM</span><span
                                                                                    class="pull-right mrl"><span
                                                                                    class="glyphicon glyphicon-paperclip"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </a><a class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-lg-4"><input
                                                                                type="checkbox"/><span
                                                                                class="fa fa-star-o mrm mlm"></span><span
                                                                                class="mail-from">Bhaumik Patel</span>
                                                                        </div>
                                                                        <div class="col-lg-8"><i
                                                                                class="mail-title">Sed ut
                                                                            perspiciatis unde</i>&nbsp; -
                                                                            &nbsp;<span
                                                                                    style="font-size: 11px;"
                                                                                    class="text-muted">Lorem ipsum dolor sit amet...</span><span
                                                                                    class="pull-right">12:10 AM</span><span
                                                                                    class="pull-right mrl"><span
                                                                                    class="glyphicon glyphicon-paperclip"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </a><a class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-lg-4"><input
                                                                                type="checkbox"/><span
                                                                                class="fa fa-star-o mrm mlm"></span><span
                                                                                class="mail-from">Bhaumik Patel</span>
                                                                        </div>
                                                                        <div class="col-lg-8"><i
                                                                                class="mail-title">Sed ut
                                                                            perspiciatis unde</i>&nbsp; -
                                                                            &nbsp;<span
                                                                                    style="font-size: 11px;"
                                                                                    class="text-muted">Lorem ipsum dolor sit amet...</span><span
                                                                                    class="pull-right">12:10 AM</span><span
                                                                                    class="pull-right mrl"><span
                                                                                    class="glyphicon glyphicon-paperclip"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </a><a class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-lg-4"><input
                                                                                type="checkbox"/><span
                                                                                class="fa fa-star-o mrm mlm"></span><span
                                                                                class="mail-from">Bhaumik Patel</span>
                                                                        </div>
                                                                        <div class="col-lg-8"><i
                                                                                class="mail-title">Sed ut
                                                                            perspiciatis unde</i>&nbsp; -
                                                                            &nbsp;<span
                                                                                    style="font-size: 11px;"
                                                                                    class="text-muted">Lorem ipsum dolor sit amet...</span><span
                                                                                    class="pull-right">12:10 AM</span><span
                                                                                    class="pull-right mrl"><span
                                                                                    class="glyphicon glyphicon-paperclip"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </a><a class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-lg-4"><input
                                                                                type="checkbox"/><span
                                                                                class="fa fa-star-o mrm mlm"></span><span
                                                                                class="mail-from">Bhaumik Patel</span>
                                                                        </div>
                                                                        <div class="col-lg-8"><i
                                                                                class="mail-title">Sed ut
                                                                            perspiciatis unde</i>&nbsp; -
                                                                            &nbsp;<span
                                                                                    style="font-size: 11px;"
                                                                                    class="text-muted">Lorem ipsum dolor sit amet...</span><span
                                                                                    class="pull-right">12:10 AM</span><span
                                                                                    class="pull-right mrl"><span
                                                                                    class="glyphicon glyphicon-paperclip"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </a><a class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-lg-4"><input
                                                                                type="checkbox"/><span
                                                                                class="fa fa-star-o mrm mlm"></span><span
                                                                                class="mail-from">Bhaumik Patel</span>
                                                                        </div>
                                                                        <div class="col-lg-8"><i
                                                                                class="mail-title">Sed ut
                                                                            perspiciatis unde</i>&nbsp; -
                                                                            &nbsp;<span
                                                                                    style="font-size: 11px;"
                                                                                    class="text-muted">Lorem ipsum dolor sit amet...</span><span
                                                                                    class="pull-right">12:10 AM</span><span
                                                                                    class="pull-right mrl"><span
                                                                                    class="glyphicon glyphicon-paperclip"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </a><a class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-lg-4"><input
                                                                                type="checkbox"/><span
                                                                                class="fa fa-star-o mrm mlm"></span><span
                                                                                class="mail-from">Bhaumik Patel</span>
                                                                        </div>
                                                                        <div class="col-lg-8"><i
                                                                                class="mail-title">Sed ut
                                                                            perspiciatis unde</i>&nbsp; -
                                                                            &nbsp;<span
                                                                                    style="font-size: 11px;"
                                                                                    class="text-muted">Lorem ipsum dolor sit amet...</span><span
                                                                                    class="pull-right">12:10 AM</span><span
                                                                                    class="pull-right mrl"><span
                                                                                    class="glyphicon glyphicon-paperclip"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </a><a class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-lg-4"><input
                                                                                type="checkbox"/><span
                                                                                class="fa fa-star-o mrm mlm"></span><span
                                                                                class="mail-from">Bhaumik Patel</span>
                                                                        </div>
                                                                        <div class="col-lg-8"><i
                                                                                class="mail-title">Sed ut
                                                                            perspiciatis unde</i>&nbsp; -
                                                                            &nbsp;<span
                                                                                    style="font-size: 11px;"
                                                                                    class="text-muted">Lorem ipsum dolor sit amet...</span><span
                                                                                    class="pull-right">12:10 AM</span><span
                                                                                    class="pull-right mrl"><span
                                                                                    class="glyphicon glyphicon-paperclip"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </a><a class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-lg-4"><input
                                                                                type="checkbox"/><span
                                                                                class="fa fa-star-o mrm mlm"></span><span
                                                                                class="mail-from">Bhaumik Patel</span>
                                                                        </div>
                                                                        <div class="col-lg-8"><i
                                                                                class="mail-title">Sed ut
                                                                            perspiciatis unde</i>&nbsp; -
                                                                            &nbsp;<span
                                                                                    style="font-size: 11px;"
                                                                                    class="text-muted">Lorem ipsum dolor sit amet...</span><span
                                                                                    class="pull-right">12:10 AM</span><span
                                                                                    class="pull-right mrl"><span
                                                                                    class="glyphicon glyphicon-paperclip"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </a><a class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-lg-4"><input
                                                                                type="checkbox"/><span
                                                                                class="fa fa-star-o mrm mlm"></span><span
                                                                                class="mail-from">Bhaumik Patel</span>
                                                                        </div>
                                                                        <div class="col-lg-8"><i
                                                                                class="mail-title">Sed ut
                                                                            perspiciatis unde</i>&nbsp; -
                                                                            &nbsp;<span
                                                                                    style="font-size: 11px;"
                                                                                    class="text-muted">Lorem ipsum dolor sit amet...</span><span
                                                                                    class="pull-right">12:10 AM</span><span
                                                                                    class="pull-right mrl"><span
                                                                                    class="glyphicon glyphicon-paperclip"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </a><a class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-lg-4"><input
                                                                                type="checkbox"/><span
                                                                                class="fa fa-star-o mrm mlm"></span><span
                                                                                class="mail-from">Bhaumik Patel</span>
                                                                        </div>
                                                                        <div class="col-lg-8"><i
                                                                                class="mail-title">Sed ut
                                                                            perspiciatis unde</i>&nbsp; -
                                                                            &nbsp;<span
                                                                                    style="font-size: 11px;"
                                                                                    class="text-muted">Lorem ipsum dolor sit amet...</span><span
                                                                                    class="pull-right">12:10 AM</span><span
                                                                                    class="pull-right mrl"><span
                                                                                    class="glyphicon glyphicon-paperclip"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </a><a class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-lg-4"><input
                                                                                type="checkbox"/><span
                                                                                class="fa fa-star-o mrm mlm"></span><span
                                                                                class="mail-from">Bhaumik Patel</span>
                                                                        </div>
                                                                        <div class="col-lg-8"><i
                                                                                class="mail-title">Sed ut
                                                                            perspiciatis unde</i>&nbsp; -
                                                                            &nbsp;<span
                                                                                    style="font-size: 11px;"
                                                                                    class="text-muted">Lorem ipsum dolor sit amet...</span><span
                                                                                    class="pull-right">12:10 AM</span><span
                                                                                    class="pull-right mrl"><span
                                                                                    class="glyphicon glyphicon-paperclip"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </a><a class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-lg-4"><input
                                                                                type="checkbox"/><span
                                                                                class="fa fa-star-o mrm mlm"></span><span
                                                                                class="mail-from">Bhaumik Patel</span>
                                                                        </div>
                                                                        <div class="col-lg-8"><i
                                                                                class="mail-title">Sed ut
                                                                            perspiciatis unde</i>&nbsp; -
                                                                            &nbsp;<span
                                                                                    style="font-size: 11px;"
                                                                                    class="text-muted">Lorem ipsum dolor sit amet...</span><span
                                                                                    class="pull-right">12:10 AM</span><span
                                                                                    class="pull-right mrl"><span
                                                                                    class="glyphicon glyphicon-paperclip"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </a><a class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-lg-4"><input
                                                                                type="checkbox"/><span
                                                                                class="fa fa-star-o mrm mlm"></span><span
                                                                                class="mail-from">Bhaumik Patel</span>
                                                                        </div>
                                                                        <div class="col-lg-8"><i
                                                                                class="mail-title">Sed ut
                                                                            perspiciatis unde</i>&nbsp; -
                                                                            &nbsp;<span
                                                                                    style="font-size: 11px;"
                                                                                    class="text-muted">Lorem ipsum dolor sit amet...</span><span
                                                                                    class="pull-right">12:10 AM</span><span
                                                                                    class="pull-right mrl"><span
                                                                                    class="glyphicon glyphicon-paperclip"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </a><a class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-lg-4"><input
                                                                                type="checkbox"/><span
                                                                                class="fa fa-star-o mrm mlm"></span><span
                                                                                class="mail-from">Bhaumik Patel</span>
                                                                        </div>
                                                                        <div class="col-lg-8"><i
                                                                                class="mail-title">Sed ut
                                                                            perspiciatis unde</i>&nbsp; -
                                                                            &nbsp;<span
                                                                                    style="font-size: 11px;"
                                                                                    class="text-muted">Lorem ipsum dolor sit amet...</span><span
                                                                                    class="pull-right">12:10 AM</span><span
                                                                                    class="pull-right mrl"><span
                                                                                    class="glyphicon glyphicon-paperclip"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </a><a class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-lg-4"><input
                                                                                type="checkbox"/><span
                                                                                class="fa fa-star-o mrm mlm"></span><span
                                                                                class="mail-from">Bhaumik Patel</span>
                                                                        </div>
                                                                        <div class="col-lg-8"><i
                                                                                class="mail-title">Sed ut
                                                                            perspiciatis unde</i>&nbsp; -
                                                                            &nbsp;<span
                                                                                    style="font-size: 11px;"
                                                                                    class="text-muted">Lorem ipsum dolor sit amet...</span><span
                                                                                    class="pull-right">12:10 AM</span><span
                                                                                    class="pull-right mrl"><span
                                                                                    class="glyphicon glyphicon-paperclip"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default-label"
                     aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" data-dismiss="modal" aria-hidden="true"
                                        class="close">&times;</button>
                                <h4 id="modal-default-label" class="modal-title text-center">Edit
                                    Profile</h4></div>
                            <div class="modal-body">
                                <div class="st-title">Modal title goes here</div>
                                <p class="st-description">Your form component goes here</p></div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-default">Close
                                </button>
                                <button type="button" class="btn btn-primary">Save changes</button>
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
 