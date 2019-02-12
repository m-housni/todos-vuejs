<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.4/vue.min.js"></script>
</head>
<body>

    <div id="app">
        {{name}}
    </div>

    <script>
    new Vue({
        'el':'#app',
        'data:'{
            name:'AppName'
        }
    });
    
    </script>
    
</body>
</html>