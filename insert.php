<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>
</head>
<body>
    <h1>Form Handling Page</h1>
        <form action="index.php" method="post">
            <p>
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </p>
            <p>
                <label for="body">Body</label>
                <input type="text" name="body" id="body">
            </p>
            <p>
                <label for="date">Date Posted</label>
                <input type="date" name="date_created" id="dateCreated">
            </p>
            <!-- submission handling -->
            <input type="submit" value="Submit">
        </form>
</body>
</html>