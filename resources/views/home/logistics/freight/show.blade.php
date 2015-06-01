@extends('home')

@section('styles')
    <link href="{{ asset('css/tables.min.css') }}" rel="stylesheet">
@endsection


@section('content')

    <!--body wrapper start-->
    <div class="wrapper">

        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <h4 class="text-center text-muted">FREIGHT INFORMATION</h4>  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <header class="panel-heading">
                                CLIENT INFORMATION
                                <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                 </span>
                            </header>
                            <div class="panel-body">
                                <ul class="p-info">
                                    <li>
                                        <div class="title">NAME</div>
                                        <div class="desk">Male</div>
                                    </li>
                                    <li>
                                        <div class="title">COMPANY NAME</div>
                                        <div class="desk">ABC Inc.</div>
                                    </li>
                                    <li>
                                        <div class="title">NATIONALITY</div>
                                        <div class="desk">BSC. in CSE</div>
                                    </li>
                                    <li>
                                        <div class="title">VALID ID NUMBER</div>
                                        <div class="desk">50+</div>
                                    </li>
                                    <li>
                                        <div class="title">EMAIL</div>
                                        <div class="desk">HTML, CSS, JavaScript.</div>
                                    </li>
                                    <li>
                                        <div class="title">OCCUPATION</div>
                                        <div class="desk">HTML, CSS, JavaScript.</div>
                                    </li>
                                    <li>
                                        <div class="title">RESIDENTIAL ADDRESS</div>
                                        <div class="desk">HTML, CSS, JavaScript.</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <header class="panel-heading">
                                FREIGHT INFORMATION
                                <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                 </span>
                            </header>
                            <div class="panel-body">
                                <ul class="p-info">
                                    <li>
                                        <div class="title">CONSIGNEE</div>
                                        <div class="desk">Male</div>
                                    </li>
                                    <li>
                                        <div class="title">HAWB #</div>
                                        <div class="desk">ABC Inc.</div>
                                    </li>
                                    <li>
                                        <div class="title">PRODUCT TYPE</div>
                                        <div class="desk">BSC. in CSE</div>
                                    </li>
                                    <li>
                                        <div class="title">PRODUCT DESCRIPTION</div>
                                        <div class="desk">50+</div>
                                    </li>
                                    <li>
                                        <div class="title">QUANTITY</div>
                                        <div class="desk">HTML, CSS, JavaScript.</div>
                                    </li>
                                    <li>
                                        <div class="title">GROSS WEIGHT</div>
                                        <div class="desk">HTML, CSS, JavaScript.</div>
                                    </li>
                                    <li>
                                        <div class="title">DESTINATION</div>
                                        <div class="desk">HTML, CSS, JavaScript.</div>
                                    </li>
                                    <li>
                                        <div class="title">DESTINATION </div>
                                        <div class="desk">HTML, CSS, JavaScript.</div>
                                    </li>
                                    <li>
                                        <div class="title">COURIER</div>
                                        <div class="desk">HTML, CSS, JavaScript.</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body p-states">
                                <a href="{{ route('freights') }}" title="">
                                    <button class="btn btn-warning btn-block" type="button"><i class="fa fa-undo"></i> Go Back</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <h4 class="text-center text-muted">TRANSPORTATION STATUS</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <header class="panel-heading">
                                STATUS FOR DATE##
                                <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                 </span>
                            </header>
                            <div class="panel-body">
                                <ul class="p-info">
                                    <li>
                                        <div class="title">STATUS</div>
                                        <div class="desk">Male</div>
                                    </li>
                                    <li>
                                        <div class="title">CODE</div>
                                        <div class="desk">ABC Inc.</div>
                                    </li>
                                    <li>
                                        <div class="title">DATE</div>
                                        <div class="desk">BSC. in CSE</div>
                                    </li>
                                    <li>
                                        <div class="title">TIME</div>
                                        <div class="desk">50+</div>
                                    </li>
                                    <li>
                                        <div class="title">LOCATION</div>
                                        <div class="desk">HTML, CSS, JavaScript.</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <header class="panel-heading">
                                STATUS FOR DATE##
                                <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                 </span>
                            </header>
                            <div class="panel-body">
                                <ul class="p-info">
                                    <li>
                                        <div class="title">STATUS</div>
                                        <div class="desk">Male</div>
                                    </li>
                                    <li>
                                        <div class="title">CODE</div>
                                        <div class="desk">ABC Inc.</div>
                                    </li>
                                    <li>
                                        <div class="title">DATE</div>
                                        <div class="desk">BSC. in CSE</div>
                                    </li>
                                    <li>
                                        <div class="title">TIME</div>
                                        <div class="desk">50+</div>
                                    </li>
                                    <li>
                                        <div class="title">LOCATION</div>
                                        <div class="desk">HTML, CSS, JavaScript.</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <header class="panel-heading">
                                STATUS FOR DATE##
                                <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                 </span>
                            </header>
                            <div class="panel-body">
                                <ul class="p-info">
                                    <li>
                                        <div class="title">STATUS</div>
                                        <div class="desk">Male</div>
                                    </li>
                                    <li>
                                        <div class="title">CODE</div>
                                        <div class="desk">ABC Inc.</div>
                                    </li>
                                    <li>
                                        <div class="title">DATE</div>
                                        <div class="desk">BSC. in CSE</div>
                                    </li>
                                    <li>
                                        <div class="title">TIME</div>
                                        <div class="desk">50+</div>
                                    </li>
                                    <li>
                                        <div class="title">LOCATION</div>
                                        <div class="desk">HTML, CSS, JavaScript.</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <header class="panel-heading">
                                STATUS FOR DATE##
                                <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                 </span>
                            </header>
                            <div class="panel-body">
                                <ul class="p-info">
                                    <li>
                                        <div class="title">STATUS</div>
                                        <div class="desk">Male</div>
                                    </li>
                                    <li>
                                        <div class="title">CODE</div>
                                        <div class="desk">ABC Inc.</div>
                                    </li>
                                    <li>
                                        <div class="title">DATE</div>
                                        <div class="desk">BSC. in CSE</div>
                                    </li>
                                    <li>
                                        <div class="title">TIME</div>
                                        <div class="desk">50+</div>
                                    </li>
                                    <li>
                                        <div class="title">LOCATION</div>
                                        <div class="desk">HTML, CSS, JavaScript.</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body p-states">
                                <form role="form">
                                    <div class="form-group">
                                        <label>STATUS</label>
                                        <div class="iconic-input right">
                                            <i class="fa fa-flash"></i>
                                            <input type="text" class="form-control" placeholder="Status">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>CODE</label>
                                        <div class="iconic-input right">
                                            <i class="fa fa-barcode"></i>
                                            <input type="text" class="form-control" placeholder="Code">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>DATE</label>
                                        <div class="iconic-input right">
                                            <i class="fa fa-calendar"></i>
                                            <input type="text" class="form-control" placeholder="Date">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>LOCATION</label>
                                        <div class="iconic-input right">
                                            <i class="fa fa-map-marker"></i>
                                            <input type="text" class="form-control" placeholder="Location">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-refresh"></i> Update Status</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--body wrapper end-->

@endsection

@section('scripts')
    <script src="{{ asset('js/tables.min.js') }}"></script>
@endsection