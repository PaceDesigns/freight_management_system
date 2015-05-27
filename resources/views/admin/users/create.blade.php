@extends('home')

@section('title')

    <h3 class="well text-center">Account Creation</h3>

@stop


@section('content')

    <div class="warpper">
        
        <div class="row">
            <div class="col-md-1">
                <a href="{{ action('UsersController@index') }}">
                    <button class="btn btn-default" type="button"><i class="fa fa-undo"></i> Go Back</button>
                </a>
            </div>
            <div class="col-md-1 col-md-offset-9">
                <a href="">
                    <button class="btn btn-danger" type="reset"><i class="fa fa-times"></i> Cancel</button>
                </a>
            </div>
        </div>



            {!! Form::open(['class' => 'form-signup', 'action' => 'UsersController@store', 'method' => 'post']) !!}
                    <div class="login-wrap">
                        <p>Enter User personal details below</p>
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

         @include('errors.error-display')

    </div>


@stop