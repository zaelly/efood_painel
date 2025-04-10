@extends('layouts.blank')
@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-12">
                <div class="mar-ver pad-btm text-center">
                    <h1 class="h3">Welcome!</h1>
                    <p>
                        All set to begin the installation process.
                    </p>
                </div>

                <div class="text-center">
                    <a href="{{ route('step3') }}" class="btn btn-info">Continue Installation <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
