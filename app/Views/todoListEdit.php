<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Story</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        form {
            display: grid;
            grid-template-columns: auto;
            justify-content: center;
            margin: 50px 0 0 0;
        }

        form textarea:focus {
            outline: none;
        }

        textarea {
            max-width: 700px;
            min-width: 700px;
            height: 70px;
            min-height: 70px;
            padding: 10px;
            margin-bottom: 10px;
            border: 2px solid black;
            border-radius: 5px;
            font-size: 18px;
        }

        button {
            width: 100px;
            height: 40px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Edit Story</h1>
    <form action="<?=base_url('todoList/edit/'.$data['id'])?>" method="POST">
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <button type="submit">Edit</button>
    </form>
</body>
</html>