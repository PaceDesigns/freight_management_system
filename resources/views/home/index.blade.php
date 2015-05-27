@extends('home')

@section('styles')

@endsection

@section('title')

@endsection


@section('content')

    <!--body wrapper start-->

    @if(Auth::user()->privilege < 4)

        <div class="row">
            <div class="col-md-12">
                <!--statistics start-->
                <div class="row state-overview">
                    <a href="{{ url('home/logistics') }}" class="" style="color:white !important">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                        <div class="panel purple">
                            <div class="symbol">
                                <i class="fa fa-gavel"></i>
                            </div>
                            <div class="state-value">
                                <div class="value">LOGISTICS </div>
                                <div class="title"></div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="{{ url('home/management') }}" class="text-muted" style="color:white !important">
                    <div class="col-md-6 col-xs-12 col-sm-6">
                        <div class="panel red">
                            <div class="symbol">
                                <i class="fa fa-tags"></i>
                            </div>
                            <div class="state-value">
                                <div class="value">MANAGEMENT </div>
                                <div class="title"></div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="row state-overview">
                    <a href="{{ url('home/account') }}" style="color:white !important">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                        <div class="panel blue">
                            <div class="symbol">
                                <i class="fa fa-money"></i>
                            </div>
                            <div class="state-value">
                                <div class="value"> ACCOUNTING</div>
                                <div class="title"></div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="{{ url('admin/settings') }}" style="color:white !important">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                        <div class="panel green">
                            <div class="symbol">
                                <i class="fa fa-gear"></i>
                            </div>
                            <div class="state-value">
                                <div class="value">SETTINGS</div>
                                <div class="title"> </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>

        </div>

        <div class="row">

        </div>
     @else



     @endif

    <!--body wrapper end-->

@endsection

@section('scripts')

@endsection