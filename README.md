# Реализация Bootstrap Alert для Laravel 5.5.x

[![Latest Version](https://img.shields.io/github/release/rulweb/laravel-alert.svg?style=flat)](https://github.com/rulweb/laravel-alert/releases)
[![License](https://img.shields.io/packagist/l/rulweb/laravel-alert.svg?style=flat)](https://packagist.org/packages/rulweb/laravel-alert)

## Установка

Установка пакета с помощью [Composer](https://getcomposer.org/), в корневом каталоге вашего приложения

```bash
$ composer require rulweb/laravel-alert
```

В Laravel 5.5.x пакеты подгружаются автоматически, по этому не нужно ничего прописывать в `config/app.php`

В нужном месте в вашем шаблоне добавить

```blade
@include('alert::bootstrap')
```