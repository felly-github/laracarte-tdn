@extends('layouts.default', ['title' => 'Contact'])

@section('content')

    <div class="container ">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Get in Touch</h2>
                <p>If you are in trouble with this service, please <a href="mailto:fellyunikin7@gmail.com">ask for help</a>.</p>

                <form action="#" method="post">
                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('name')? 'has-error': '' }}">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control">

                        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('email')? 'has-error': '' }}">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                        
                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('message')? 'has-error': '' }}">
                        <label for="message" class="control-label sr-only">Message</label>
                        <textarea name="message" id="message" class="form-control" cols="10" rows="10"></textarea>
                        
                        {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-block">submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection