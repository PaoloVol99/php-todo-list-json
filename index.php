<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
    <div id="app">
        <div class="container">
            <h1>{{ title }}</h1>
        </div>
        <div class="container">
            <ul class="todolist">
                <li v-for="(todo,i) in todolist"> {{ todo }}</li>
            </ul>
        </div>
    </div>

    <script src="./app.js"></script>
</body>
</html>