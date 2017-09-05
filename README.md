# Laravel MixPanel Tracker

## Install

### Install via composer

```
$ composer require squareboat/mixtracker
```

### Configure Laravel

Once installation operation is complete, simply add both the service provider and facade classes to your project's `config/app.php` file:

#### Service Provider
```
SquareBoat\Mixtracker\MixtrackerServiceProvider::class,
```

#### Facade

```
'Mixtracker' => SquareBoat\Mixtracker\Facades\Mixtracker::class,
```
