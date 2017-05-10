@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Random Image</div>

                <div class="panel-body">
                    Welcome   {{ Auth::user()->name }}!
                </div>
                <a href="RandomPicture">Click here for a random image!</a>
                <br>
                <a href="UploadPicture">Click here to upload a image</a>
                <br>
                <a href="Statistics">View some data (under construction)</a>
            </div>
        </div>
    </div>
</div>
@endsection
