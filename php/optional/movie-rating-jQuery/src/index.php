<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Movie Rating</title>
</head>
<body>
    <!-- wrapper class -->
    <div class = "wrapper">
        <h1 class = "wrapper__heading">My Favorite Movies</h1>
        Title : <input type = "text" id = "movie-name" placeholder="Enter movie name">
        Rating : <input type = "number" id = "movie-rating" placeholder="Enter rating (1-10)">
        <button type="submit" id = "add">Add Movie</button>
        <p id = "error"></p>
        <!-- table containing list of all movies -->
        <table class = "wrapper__table">
            <caption>Movie Table</caption>
            <thead class = "wrapper__table-head">
                <tr>
                    <th id="sortByTitle">Title <i class="fa fa-fw fa-sort"></i></th>
                    <th id="sortByRating">Rating <i class="fa fa-fw fa-sort"></i></th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody id = "table-body">
            </tbody>
        </table>
    </div>
</body>
<script src="./JS/script.js"></script>
</html>