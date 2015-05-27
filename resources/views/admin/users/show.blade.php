@extends('home')

@section('title')

    <button class="btn btn-primary pull-right">Add New User</button>

@stop


@section('content')

    <div class="col-md-6 col-md-offset-3">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body">
                        <div class="profile-pic text-center">
                            <img alt="" src="{{ asset('images/photos/user1.png') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body">
                        <ul class="p-info">
                            <li>
                                <div class="title">Gender</div>
                                <div class="desk">Male</div>
                            </li>
                            <li>
                                <div class="title">Position</div>
                                <div class="desk">ABC Inc.</div>
                            </li>
                            <li>
                                <div class="title">Funtion</div>
                                <div class="desk">BSC. in CSE</div>
                            </li>
                            <li>
                                <div class="title">Department</div>
                                <div class="desk">50+</div>
                            </li>
                            <li>
                                <div class="title">Role</div>
                                <div class="desk">HTML, CSS, JavaScript.</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body p-states">
                        <a type="button" href="{{ action('UsersController@index') }}" class="btn btn-primary btn-block"><span class="pull-left"><i class="fa fa-undo"></i></span>Go Back</a>
                        <div id="expense2" class="chart-bar"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body p-states">
                        <a type="button" href="#edit" data-toggle="modal" class="btn btn-warning btn-block"><span class="pull-left"><i class="fa fa-pencil"></i></span>Edit</a>
                        <div id="expense2" class="chart-bar"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body p-states">
                        <button type="button" class="btn btn-danger btn-block"><span class="pull-left"><i class="fa fa-times"></i></span>Delete</button>
                        <div id="expense2" class="chart-bar"></div>
                        <div id="pro-refund" class="chart-bar"></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">Editing <i>{{ $user->name }}</i></h4>
                </div>
                <div class="modal-body">

                    {!! Form::open(['class' => 'form-signup', 'action' => 'UsersController@store', 'method' => 'post']) !!}
                            <div class="login-wrap">
                                <strong>Enter User personal details below</strong>
                                <input type="text" autofocus="" placeholder="Full Name" class="form-control" name="name">
                                <input type="text" autofocus="" placeholder="Address" class="form-control" name="address">
                                <input type="text" autofocus="" placeholder="Email" class="form-control" name="email">

                                <div class="radios">
                                    <label for="radio-01" class="label_radio col-lg-6 col-sm-6">
                                        <input type="radio" checked="" value="0" id="radio-01" name="gender"> Male
                                    </label>
                                    <label for="radio-02" class="label_radio col-lg-6 col-sm-6">
                                        <input type="radio" value="1" id="radio-02" name="gender"> Female
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label for="function">Function</label>
                                    <select class="form-control" name="function">
                                        <option value="Logistics">Logistics</option>
                                        <option value="Accountant">Accountant</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Administrator">Administrator</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="department">Department</label>
                                    <select class="form-control" name="department_id">
                                        <option value="1">Logistics</option>
                                        <option value="2">Accounting</option>
                                        <option value="3">Management</option>
                                        <option value="4">Administration</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="department">Privilge</label>
                                    <select class="form-control" name="privilege">
                                        <option value="1">Lowest Level (for Logistics)</option>
                                        <option value="2">Medium Level (for Accountant)</option>
                                        <option value="3">High Level (for Manager)</option>
                                        <option value="4">Top Level (for Admin)</option>
                                    </select>
                                </div>

                                <input type="password" placeholder="Password" class="form-control" name="password">
                                <input type="password" placeholder="Re-type Password" class="form-control" name="password_confirmation">

                                <button type="submit" class="btn btn-lg btn-login btn-block">
                                    <i class="fa fa-check"></i>
                                </button>

                            </div>

                        {!! Form::close() !!}

                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save changes</button>
                </div> --}}
            </div>
        </div>
    </div>

@stop

@section('script')
    <script>
        $(function(){
            
        })
    </script>
@stop