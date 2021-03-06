
# RockHopSoft/Fallacy

[![Laravel](https://img.shields.io/badge/Laravel-5.7-orange.svg?style=flat-square)](http://laravel.com)
[![Survloop](https://img.shields.io/badge/Survloop-0.0-orange.svg?style=flat-square)](https://github.com/rockhopsoft/survloop)
[![License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://tldrlegal.com/license/mit-license)

Don't Fallacy Me is a free, collaborative, multiplayer mind game! It provides an example, and you select the clearest 
logical fallacy. A fallacy is, very generally, an error in reasoning. This differs from a factual error, which is 
simply being wrong about the facts.  The Don't Fallacy Me database is being rebuilt using 
<a href="https://github.com/rockhopsoft/survloop" target="_blank">Survloop</a>, Wiki World Order's 
<a href="https://laravel.com/" target="_blank">Laravel</a>-based engine for designing a 
database and creating a mobile-friendly user interface to fill it. 

Part of my re-build is to migrate the game to the software I've been focused on building for the past three years. 
But the more important part is a redesign of the user experience, since upon launch the site made it to page three of 
a 'design fails' sub-Reddit. The game needs work perfectly for mobile devices.

So if you have any skills with design or graphics that would be an amazing collaboration. It would also be amazing to 
find sharp minds to help create an arsenal of memes, which drove tons of traffic to the site for its first few months. 
And of course, folks can always help more by adding examples to the crowd-sourced collection.

Let me know if getting more involved in this project would interest you! rockhoppers *at* runbox.com

# Table of Contents
* [Requirements](#requirements)
* [Getting Started](#getting-started)
* [Documentation](#documentation)
* [Roadmap](#roadmap)
* [Change Logs](#change-logs)
* [Contribution Guidelines](#contribution-guidelines)


# <a name="requirements"></a>Requirements

* php: >=7.2.11
* <a href="https://packagist.org/packages/laravel/framework" target="_blank">laravel/framework</a>: 5.7.*
* <a href="https://packagist.org/packages/rockhopsoft/survloop" target="_blank">rockhopsoft/survloop</a>: 0.*

# <a name="getting-started"></a>Getting Started

The instructions below include the needed steps to install Laravel, Survloop, as well as the Don't Fallacy Me system.
For more on creating environments to host Laravel, you can find more instructions on
<a href="https://survloop.org/how-to-install-laravel-on-a-digital-ocean-server" target="_blank">Survloop.org</a>.

* Use Composer to install Laravel with default user authentication, one required package:

```
$ composer global require "laravel/installer"
$ composer create-project laravel/laravel Fallacy "5.7.*"
$ cd Fallacy
$ php artisan make:auth
$ php artisan vendor:publish --tag=laravel-notifications
```

* Update `composer.json` to add requirements and an easier Don't Fallacy Me reference:

```
$ nano composer.json
```

```
...
"require": {
	...
    "rockhopsoft/fallacy": "0.*",
	...
},
...
"autoload": {
	...
	"psr-4": {
		...
		"Fallacy\\": "vendor/rockhopsoft/fallacy/src/",
	}
	...
},
...
```

```
$ composer update
```

* Add the package to your application service providers in `config/app.php`.

```
$ nano config/app.php
```

```php
...
'providers' => [
	...
	Survloop\SurvloopServiceProvider::class,
	Fallacy\FallacyServiceProvider::class,
	...
],
...
'aliases' => [
	...
	'Survloop'	 => 'RockHopSoft\Survloop\SurvloopFacade',
	'Fallacy'	 => 'RockHopSoft\Fallacy\FallacyFacade',
	...
],
...
```

* Swap out the Survloop user model in `config/auth.php`.

```
$ nano config/auth.php
```

```php
...
'model' => App\Models\User::class,
...
```

* Update composer, publish the package migrations, etc...

```
$ php artisan vendor:publish --force
$ php artisan migrate
$ composer dump-autoload
$ php artisan db:seed --class=SurvloopSeeder
$ php artisan db:seed --class=FallacySeeder
```

* For now, to apply database design changes to the same installation you are working in, depending on your server, 
you might also need something like this...

```
$ chown -R www-data:33 app/Models
$ chown -R www-data:33 database
```

* Browse to load the style sheets, etc.. /dashboard/css-reload

* Log into Don't Fallacy Me admin dashboard...

```
user: open@dontfallacy.me
password: Fallacy
```


# <a name="documentation"></a>Documentation

Once installed, documentation of this system's database design can be found at /dashboard/db/all . This system's user 
experience design for data entry can be found at /dashboard/tree/map?all=1&alt=1 .


# <a name="roadmap"></a>Roadmap

Here's the TODO list for the next release (**1.0**). It's my first time building on Laravel, or GitHub. So sorry.

* [ ] Code commenting, learning and implementing more community standards.
* [ ] Correct collection of issues still on my list.
* [ ] Adding unit testing.
* [ ] Basic database design and user experience processes are generated by Survloop itself. 
* [ ] Finish migrating all queries to use Laravel's process.

# <a name="change-logs"></a>Change Logs


# <a name="contribution-guidelines"></a>Contribution Guidelines

Please help educate me on best practices for sharing code in this community.
Please report any issue you find in the issues page.

# <a name="security-help"></a>Reporting a Security Vulnerability

We want to ensure that Survloop is a secure HTTP open data platform for everyone. 
If you've discovered a security vulnerability in DontFallacy.Me, 
we appreciate your help in disclosing it to us in a responsible manner.

Publicly disclosing a vulnerability can put the entire community at risk. 
If you've discovered a security concern, please email us at rockhoppers *at* runbox.com. 
We'll work with you to make sure that we understand the scope of the issue, and that we fully address your concern. 
We consider correspondence sent to rockhoppers *at* runbox.com our highest priority, 
and work to address any issues that arise as quickly as possible.

After a security vulnerability has been corrected, a release will be deployed as soon as possible.
