<h3>An easy site settings example to show how to create a site settings page and cache the settings in laravel</h3>

![Screenshot](https://raw.githubusercontent.com/yakuter/laravel-site-settings/master/laravel-site-settings-screenshot.png)

<hr></hr>
<h3>How to use</h3>
<ul>
<li>Clone the repository with <strong>git clone</strong>.</li>
<li>Create a database</li>
<li>Copy <strong>.env.example</strong> file to <strong>.env</strong> and edit <strong>database</strong> section there</li>
<li>Run <strong>composer install</strong></li>
<li>Run <strong>php artisan key:generate</strong></li>
<li>There is migration and seeder file in project but you can have <code>Base table or view not found...</code> error while migrating. So try creating table with <strong>laravel-site-settings.sql</strong> file in the project. </li>
<li>That's it - load the homepage</li>
</ul>

<hr></hr>
<h3>License</h3>

Please use and re-use however you want.