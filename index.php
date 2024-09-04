<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formhandler.php" method="post">
        <label for="firstname">Firstname: </label>
        <input type="text" id="firstname" name="firstname" placeholder="Firstname">

        <label for="firstname">Lastname: </label>
        <input type="text" id="lastname" name="lastname" placeholder="Lastname">

        <label for="select" id="favoritepet" name="favoritepet">Favorite Pet</label>
        <option value="none">None</option>
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>

        <button>submit</button>



    </form>
</body>
</html>