<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>To Do List</title>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--  Foglio di Stile -->
    <link rel="stylesheet" href="./style/style.css" />
</head>

<body>
    <div id="app">
        <div class="container">
            <h1>To do List</h1>
            <section class="list-area">
                <ul>
                    <li v-for="(item,index) in todoList" :key="index">
                        {{item}}
                    </li>
                </ul>
                <form class="input-area" action="./add.php" method="get">
                    <label for="task">Inserisci una nuova Task</label>
                    <input type="text" id="task" v-model="content" name="task">
                    <button type="submit">Aggiungi</button>
                </form>
            </section>
        </div>
    </div>
    <!-- Scripts -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>