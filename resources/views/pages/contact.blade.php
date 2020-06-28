@extends('layouts.default', ['title' => 'Contact'])


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Get in Touch</h2>
                <p class="text-muted">If you are in trouble with this service, please <a href="mailto:fellyunikin7@gmail.com">ask for help</a>.</p>

                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name" class="controle-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="controle-label">Name</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="controle-label sr-only">Message</label>
                        <textarea name="message" id="message" class="form-control" rows="10" cols="10" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="submit" class="btn btn-primary btn-block">
                    </div>
                </form>
            </div>   
        </div>
        
    </div>

@endsection