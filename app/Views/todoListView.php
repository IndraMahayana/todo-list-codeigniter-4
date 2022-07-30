<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .header {
            padding: 0 200px;
            height: 70px;
            display: grid;
            justify-content: center;
            align-content: center;
            background-color: #333;
            color: white;
        }

        .header .title {
            padding-top: 2px;
            font-size: 30px;
        }

        .container {
            display: grid;
            justify-content: center;
            row-gap: 20px;
            margin: 50px 200px 0 200px;
        }

        .create-data form {
            display: grid;
            grid-template-columns: 100px 700px 100px;
            column-gap: 5px;
        }

        .create-data form textarea {
            height: 40px;
            max-width: 700px;
            min-width: 700px;
            min-height: 50px;
            border: 1px solid black;
            border-radius: 10px;
            font-size: 20px;
            padding: 10px;
        }

        .create-data form input {
            border: 1px solid black;
            border-radius: 10px;
            font-size: 20px;
            padding: 10px;
        }

        .create-data form textarea:focus, .create-data form input:focus {
            outline: none;
        }

        .create-data form button {
            height: 50px;
        }

        button {
            height: 40px;
            width: 90px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .card {
            border: 1px solid #333;
            border-radius: 10px;
            max-width: 900px;
            min-width: 900px;
            min-height: 50px;
            word-wrap: break-word;
            word-break: break-all;
            text-align: justify;
            font-size: 18px;
        }

        .description {
            padding: 10px;
            grid-row: 1;
            font-size: 25px;
        }

        .buttons {
            display: grid;
            grid-template-columns: auto auto;
            column-gap: 5px;
            justify-content: start;
            padding: 0 0 10px 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="title">To Do List </div>
    </div>
    
    <div class="container">
        <div class="create-data">
            <form action="<?=base_url('todoList/create')?>" method="POST">
                <input type="number" name="id" placeholder="1 - 999" required>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="learning codeigniter 4" required></textarea>
                <button type="submit">Create</button>
            </form>
        </div>

        <?php foreach($data as $r){?>
        <div class="card">
            <div class="description"><?= $r['description'] ?></div>
            <div class="buttons">
                <a href="<?=base_url('todoList/todoListEdit/'.$r['id'])?>"><button>Edit</button></a>
                <a href="<?=base_url('todoList/delete/'.$r['id'])?>"><button>Delete</button></a>
            </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>