<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercici 1</title>
    <link href="{{ asset('css/all.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css')  }}" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Exercici 1</h1>

<div id="app">
{{ message | capitalize  }}
<br>
<input type="text" v-model="message"><br>
{{ a }}

<pre>{{ $data | json }}</pre>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>
<script src="{{ asset('js/all.js') }}"></script>
</body>
</html>