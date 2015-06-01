<div class="row text-center col-xs-4 col-xs-offset-4">

    @if($errors->any())
        <div class="panel panel-danger">
            <header class="panel-heading">
                <span style="font-style: italic !important; font-weight: lighter;">
                    <strong>Whoops!</strong>
                </span>
            </header>
            <div class="panel-body">
                <ul class="list list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li class="text-danger"><strong>{{ $error }}</strong></li>
                    @endforeach
                </ul>

            </div>
        </div>
    @endif

</div>