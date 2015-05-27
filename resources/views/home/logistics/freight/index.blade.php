@extends('.........master')

@section('styles')
    <link href="{{ asset('css/tables.min.css') }}" rel="stylesheet">
@endsection

@section('title')

@endsection


@section('content')

    <!--body wrapper start-->

    <div class="row">
    <div class="col-sm-12">
    <section class="panel">
    <header class="panel-heading">
    Dynamic Table
    <span class="tools pull-right">
        <a href="javascript:;" class="fa fa-chevron-down"></a>
        <a href="javascript:;" class="fa fa-times"></a>
    </span>
    </header>
    <div class="panel-body">
    <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
            <thead>
                <tr>
                    <th>Sr.</th>
                    <th>Date</th>
                    <th>L.R. No.</th>
                    <th>G.P. No.</th>
                    <th>Product</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Display Km</th>
                    <th>Calculation Km</th>
                    <th>Quantity</th>
                    <th>Rate</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr class="gradeX">
                    <td>Trident</td>
                    <td>Trident</td>
                    <td>Internet Explorer 4.0</td>
                    <td>Win 95+</td>
                    <td class="center hidden-phone">4</td>
                    <td class="center hidden-phone">4</td>
                    <td class="center hidden-phone">4</td>
                    <td class="center hidden-phone">4</td>
                    <td class="center hidden-phone">4</td>
                    <td class="center hidden-phone">4</td>
                    <td class="center hidden-phone">X</td>
                    <td class="center hidden-phone">X</td>
                </tr>
                <tr class="gradeC">
                    <td>Trident</td>
                    <td>Internet
                    Explorer 5.0</td>
                    <td>Win 95+</td>
                    <td class="center hidden-phone">5</td>
                    <td class="center hidden-phone">C</td>
                </tr>

                <tr class="gradeU">
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">U</td>
                </tr>
            </tbody>
            <tfoot>
            <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th class="hidden-phone">Engine version</th>
                <th class="hidden-phone">CSS grade</th>
            </tr>
            </tfoot>
        </table>
    </div>
    </div>
    </section>
    <section class="panel">
                <header class="panel-heading">
                    No More Tables
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                    <section id="no-more-tables">
                        <table class="table table-bordered table-striped table-condensed cf">
                            <thead class="cf">
                            <tr>
                                <th>Sr.</th>
                                <th>Date</th>
                                <th>L.R. No.</th>
                                <th>G.P. No.</th>
                                <th>Product</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Display Km</th>
                                <th>Calculation Km</th>
                                <th>Quantity</th>
                                <th>Rate</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-title="Code">AAC</td>
                                <td data-title="Company">AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                <td class="numeric" data-title="Price">$1.38</td>
                                <td class="numeric" data-title="Change">-0.01</td>
                                <td class="numeric" data-title="Change %">-0.36%</td>
                                <td class="numeric" data-title="Open">$1.39</td>
                                <td class="numeric" data-title="High">$1.39</td>
                                <td class="numeric" data-title="Low">$1.38</td>
                                <td class="numeric" data-title="Volume">9,395</td>
                                <td class="numeric" data-title="Volume">9,395</td>
                                <td class="numeric" data-title="Volume">9,395</td>
                                <td class="numeric" data-title="Volume">9,395</td>
                            </tr>

                            </tbody>
                        </table>
                    </section>
                </div>
            </section>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-12">
    <section class="panel">
    <header class="panel-heading">
    DataTables hidden row details example
    <span class="tools pull-right">
        <a href="javascript:;" class="fa fa-chevron-down"></a>
        <a href="javascript:;" class="fa fa-times"></a>
    </span>
    </header>
    <div class="panel-body">
    <div class="adv-table">
        <table class="display table table-bordered" id="hidden-table-info">
            <thead>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th class="hidden-phone">Platform(s)</th>
                    <th class="hidden-phone">Engine version</th>
                    <th class="hidden-phone">CSS grade</th>
                </tr>
            </thead>
            <tbody>
                <tr class="gradeX">
                    <td>Trident</td>
                    <td>Internet
                    Explorer 4.0</td>
                    <td class="hidden-phone">Win 95+</td>
                    <td class="center hidden-phone">4</td>
                    <td class="center hidden-phone">X</td>
                </tr>
                <tr class="gradeC">
                    <td>Trident</td>
                    <td>Internet
                    Explorer 5.0</td>
                    <td class="hidden-phone">Win 95+</td>
                    <td class="center hidden-phone">5</td>
                    <td class="center hidden-phone">C</td>
                </tr>
                <tr class="gradeA">
                    <td>Trident</td>
                    <td>Internet
                    Explorer 5.5</td>
                    <td class="hidden-phone">Win 95+</td>
                    <td class="center hidden-phone">5.5</td>
                    <td class="center hidden-phone">A</td>
                </tr>

                <tr class="gradeC">
                    <td>Misc</td>
                    <td>IE Mobile</td>
                    <td class="hidden-phone">Windows Mobile 6</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">C</td>
                </tr>
                <tr class="gradeC">
                    <td>Misc</td>
                    <td>PSP browser</td>
                    <td class="hidden-phone">PSP</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">C</td>
                </tr>
                <tr class="gradeU">
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td class="hidden-phone">-</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">U</td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
    </section>
    </div>
    </div>

    <!--body wrapper end-->

@endsection

@section('scripts')
<script src="{{ asset('js/tables.min.js') }}"></script>
@endsection