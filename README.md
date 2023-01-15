# laravel9-slack

## Requirements

* Laravel Framework 9+

## Installation

```sh
$ composer require mffonseca/laravel9-slack
```

## Registering the Package

 - Em ```config/app.php```

```php
/**
 * Package Service Provider
 */

'providers' => [
    // ...

    Mfonseca\Slack\SlackServiceProvider::class,
],
```

- Em ```config/app.php```

```php
/**
 * Package Alias
 */

'aliases' => [
    // ...

    'Slack' => Mfonseca\Slack\Facade\Slack::class,
],
```

## Configuration

- Execute o seguinte comando em seu terminal

```sh
$ php artisan vendor:publish
```

- Edite seu ```config/slack.php``` e cole a url do seu webhook em ```incoming-webhook``` .

## Usage

- Enviando mensagens:

```php
\Slack::send("your-message");
```

```php
Slack::send("your-message" [,"display-name" [,"display-emoji"] [,"#channel" or "@username"]]);
```

