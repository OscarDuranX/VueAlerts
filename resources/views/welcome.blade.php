<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="{{ asset('css/all.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css')  }}" rel="stylesheet" type="text/css">
</head>
<body>
<alert type="error"> <strong>Error!</strong> Your account has not been updated</alert>

<alert type="success"> <strong>Error!</strong> Your account has not been updated</alert>

<alert> <strong>Error!</strong> Your account has not been updated</alert>

<template id="alert-template">
    <div :class="alertClasses"  v-show="show">

        <slot></slot>

        <span class="Alert__close" @click="show = false" >X</span>

    </div>
</template>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>
<script src="{{ asset('js/all.js') }}"></script>
</body>
</html>
