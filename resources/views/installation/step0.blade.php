@extends('layouts.blank')
@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-12">
                <div class="mar-ver pad-btm text-center">
                    <h1 class="h3">Installation Progress Started!</h1>
                    <p>We are checking file permissions.</p>
                </div>

                <ul class="list-group">
                    <li class="list-group-item text-semibold">
                        PHP version 7.4+

                        @php
                            $phpVersion = number_format((float)phpversion(), 2, '.', '');
                        @endphp
                        @if ($phpVersion >= 7.40)
                            <i class="fa fa-check text-success float-end"></i>
                        @else
                            <i class="fa fa-close text-danger float-end"></i>
                        @endif
                    </li>
                    <li class="list-group-item text-semibold">
                        Curl Enabled

                        @if ($permission['curl_enabled'])
                            <i class="fa fa-check text-success float-end"></i>
                        @else
                            <i class="fa fa-close text-danger float-end"></i>
                        @endif
                    </li>
                    <li class="list-group-item text-semibold">
                        <b>.env</b> File Permission

                        @if ($permission['db_file_write_perm'])
                            <i class="fa fa-check text-success float-end"></i>
                        @else
                            <i class="fa fa-close text-danger float-end"></i>
                        @endif
                    </li>
                    <li class="list-group-item text-semibold">
                        <b>RouteServiceProvider.php</b> File Permission

                        @if ($permission['routes_file_write_perm'])
                            <i class="fa fa-check text-success float-end"></i>
                        @else
                            <i class="fa fa-close text-danger float-end"></i>
                        @endif
                    </li>
                </ul>

                <p class="text-center pt-3">
                    @if (
                        $permission['curl_enabled'] &&
                        $permission['db_file_write_perm'] &&
                        $permission['routes_file_write_perm'] &&
                        $phpVersion >= 7.40
                    )
                        <a href="{{ route('step2') }}" class="btn btn-info">Next <i class="fa fa-forward"></i></a>
                    @endif
                </p>
            </div>
        </div>
    </div>
@endsection
