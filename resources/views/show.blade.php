<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Guestbook</title>

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
                    <a class="navbar-brand" href="{{ url('/guestbook') }}">
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
                            <h3>Show Setting</h3>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Option</th>
                                    <th>Slug</th>
                                    <th>Value</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $setting->id }}</td>
                                        <td>{{ $setting->option }}</td>
                                        <td>{{ $setting->slug }}</td>
                                        <td>{{ $setting->value }}</td>
                                        <td>
                                            <a href="{{ url('/settings/'.$setting->id.'/edit') }}">Edit</a> |
                                            <a href="{{ url('/settings/'.$setting->id) }}">Show</a> |
                                            <a href="{{ url('/settings/'.$setting->id.'/delete') }}">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Usage</h3>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>{{ config('settings.site_name') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ config('settings.site_url') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ config('settings.site_description') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ config('settings.contact_email') }}</td>
                                </tr>
                                </tbody>
                            </table>
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