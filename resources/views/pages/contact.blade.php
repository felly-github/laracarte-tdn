@extends('layouts.default', ['title' => 'Contact'])

@section('content')

    <div class="container ">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1 ">
                
                @if (session()->has('emailSent'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Successfully sent !</strong> {{ session()->get('emailSent') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <h2>Get in Touch</h2>
                <p>If you are in trouble with this service, please <a href="mailto:{{ config('laracarte.admin_support_email') }}">ask for help</a>.</p>

                <form action="{{ route('contact_path') }}" method="post" novalidate>
                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('name')? 'has-error': '' }}">
                        <label for="name" class="col-form-label font-weight-bold">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>

                        {!! $errors->first('name', '<span class="form-text text-danger">:message</span>') !!}
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-form-label font-weight-bold">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                        
                        {!! $errors->first('email', '<span class="form-text text-danger">:message</span>') !!}
                    </div>

                    <div class="form-group">
                        <label for="message" class="col-form-label sr-only font-weight-bold">Message</label>
                        <textarea name="message" id="message" class="form-control" cols="10" rows="10" required>{{ old('message') }}</textarea>
                        
                        {!! $errors->first('message', '<span class="form-text text-danger">:message</span>') !!}
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection