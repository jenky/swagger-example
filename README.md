# Swagger 3 (OpenApi) example

#### Specification

https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md

#### Laravel Mix copy `redoc js` to `public/js` directory

```js
mix.copy('node_modules/redoc/bundles/redoc.standalone.js', 'public/js/redoc.standalone.js')
```
#### Laravel Blade template
```
composer require darkaonline/l5-swagger 5.7.*
```

```php
@extends('layouts.master')

@section('title', config('l5-swagger.api.title'))

@push('css')
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700|Roboto:300,400,700|Open+Sans:400,700|Source+Code+Pro:300,600|Titillium+Web:400,600,700" rel="stylesheet">
<link rel="icon" type="image/png" href="{{ l5_swagger_asset('favicon-32x32.png') }}" sizes="32x32" />
<link rel="icon" type="image/png" href="{{ l5_swagger_asset('favicon-16x16.png') }}" sizes="16x16" />
@endpush

@push('js')
<script src="{{ asset('js/redoc.standalone.js') }}"></script>
@endpush

@section('body')
<redoc spec-url='{{ $urlToDocs }}'></redoc>
@endsection
```
