<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>To do list forse</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>

<body class="bg-black">
    <div id="app">
        <div class="container">
            <h1 class="text-center text-danger">To Do Maybe</h1>
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li v-for="maybeTab in maybeList" class="d-flex justify-content-between">
                                {{maybeTab.mayBe}} <button class="bg-danger"><i
                                        class="fa-regular fa-trash-can"></i></button></li>
                        </ul>
                    </div>
                    <div>
                        <form @submit.prevent="submit" action="" method="post"  class="input-group">
                            <input v-model="maybeTab.mayBe" name="inPut" type="text" class="form-control"
                                placeholder="Add task" aria-label="">
                            <button class="btn btn-outline-warning " type="submit">Vai!</button>
                        </form>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <script src="javas/main.js"></script>
</body>

</html>