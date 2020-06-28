@extends('layouts.default', ['title' => 'About'])


@section('content')
    <div class="container">
        <h2>What is Laracate?</h2>
        <p>
            Laracarte is a clone app of 
            <a href="https://laramap.com" target="_blank">Laramap.com</a>
        </p>
        
        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong><i class="fa fa-exclamation-triangle"></i>This app has been build by <a href="http://twitter.com/esmo" target="_blank" rel="noopener noreferrer">@estmo</a> for learning purpose.</strong>
                </p>
            </div>
        </div>

        <p>Feel free to improve the <a href="">source code</a></p>
        
        <hr>
        <h2>What is Laramap?</h2>
        <p>Laramap is a website by which Laracarte was inspired :).</p>
        <p>More info <a href="https://laramp.com/p/about">here</a>.</p>
        <h2>which tools and services are used in laracarte?</h2>
        <p>basicly it's build on Laravel &amp; Bootstrap. but there is a branch of services usedd for email and other section</p>
        <ul>
            <li>Laravel</li>
            <li>Booststrap</li>
            <li>Amazon S3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocation Package</li>
            <li>Michel Fortin's Mackdown Parser Package</li>
            <li>Heroku</li>
        </ul>
    </div>
    
@endsection