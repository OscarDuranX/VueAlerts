<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="{{ asset('css/all.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css')  }}" rel="stylesheet" type="text/css">
</head>
<body>
<alert type="success"> <strong>Success!</strong> Your account has been updated</alert>

<template id="alert-template">
    <div :class="['Alert', type == 'success' ? 'Alert--Success' : '']"  v-show="show">

        <slot></slot>

        <span class="Alert__close" @click="show = false" >X</span>

    </div>
</template>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>
<script src="{{ asset('js/all.js') }}"></script>
</body>
</html>
