@extends('home')

@section('title')

    <!-- page heading start-->
                <div class="page-heading">
                    <h3>
                        All Users <small><i>(including Admins, Managers, Accountants, Logistics)</i></small>
                    </h3>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="active">All Users </li>
                    </ul>
                </div>
                <!-- page heading end-->

@stop


@section('content')

    <div class="row">
        <div class="col-md-1 col-md-offset-9">
            <a href="{{ action('UsersController@create') }}">
                <button class="btn btn-primary" type="button"><i class="fa fa-plus"></i> Create New User</button>
            </a>
        </div>
    </div>


     <div class="wrapper">
            <div class="directory-info-row">
                <div class="row">
                    @foreach($users as $user)
                        <div class="col-md-6 col-sm-6">
                            <div class="panel">
                                <div class="panel-body">
                                    <h4>{{ $user->name }} <span class="text-muted small"> - {{ $user->function }}</span></h4>
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="thumb media-object" src="{{ asset('images/photos/user2.png') }}" alt="">
                                        </a>
                                        <div class="media-body">
                                            <address>
                                                <strong>ABCDE, Inc.</strong><br>
                                                {{ $user->address }}<br>
                                                {{ $user->address }} <br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                            </address>
                                            <ul class="social-links pull-right">
                                                <li><a class="dl" data-toggle="modal" data-placement="top" href="{{ url('admin/users', ['id'=>$user->id]) }}" class="tooltips" data-original-title="View Profile"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

    </div>

@stop


@section('script')
    <script>
        $(function(){
            $('.dl').click(function(){
                console.log('clicked');
                bootbox.dialog({
                              message: "Are You Sure You Want DELETE This User?",
                              title: "Deletion",
                              buttons: {
                                danger: {
                                  label: "Delete",
                                  className: "btn-danger",
                                  callback: function() {

                                    console.log("User is being deleted");
                                    $.gritter.add({
                                    	// (string | mandatory) the heading of the notification
                                    	title: 'User is Being Deleted...',
                                    	// (string | mandatory) the text inside the notification
                                    	text: '....'
                                    });
                                  }
                                },
                                primary: {
                                  label: "Cancel",
                                  className: "btn-primary",
                                  callback: function() {
                                    $.gritter.add({
                                        // (string | mandatory) the heading of the notification
                                        title: 'Canceled',
                                        // (string | mandatory) the text inside the notification
                                        text: '....'
                                    });
                                  }
                                },
                              }
                            });
            })
        })
    </script>
@stop