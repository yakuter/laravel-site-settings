<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Site Settings</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        
    </head>
    <body>

        <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/settings') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://www.yakuter.com" target="_blank">Yakuter</a></li>
                        <li><a href="{{ url('/settings') }}">All Settings</a></li>
                        <li><a href="{{ url('/settings/create') }}">Add Setting</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h2>Laravel Site Settings</h2>
                        </div>

                        <div class="panel-body">
                            <h3>Edit Setting</h3>
                            <form id="contactForm" action="{{ url('/settings/'.$setting->id) }}" method="POST">
                                <input name="_method" type="hidden" value="PUT">

                                @if (count($errors) > 0)
                                    <div class="alert alert-danger mt-4" id="contactError">
                                        <p><strong>Error!</strong> Problem updating setting.</p>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                {{ csrf_field() }}
                                
                                <div class="form-group">
                                    <label>Option *</label>
                                    <input type="text" value="{{ $setting->option }}" maxlength="100" class="form-control" name="option" id="option" placeholder="Option">
                                </div>

                                <div class="form-group">
                                    <label>Slug *</label>
                                    <input type="text" value="{{ $setting->slug }}" maxlength="100" class="form-control" name="slug" id="slug" placeholder="Slug">
                                </div>

                                <div class="form-group">
                                    <label>Value *</label>
                                    <textarea maxlength="5000" rows="8" class="form-control" name="value" id="value" placeholder="Value">{{ $setting->value }}</textarea>
                                </div>

                                <input type="submit" value="Update Setting" class="btn btn-primary">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>