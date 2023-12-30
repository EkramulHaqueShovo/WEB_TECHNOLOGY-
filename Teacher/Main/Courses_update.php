<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Courses</title>
    <link rel="stylesheet" href="../Css/style.css">
</head>
<body>
    <header>
        <h1>SEARCH COURSES</h1>
        <nav>
            <a href="courses.php">Courses</a>
        </nav><br>
    </header>

    <form action="displayupdate_course.php" method="post">
        <fieldset>
            <legend style="text-align: center">
                <h3>SEARCH COURSES BY ID</h3>
            </legend><br>
            <label for="course_id">Course ID:</label><br><br>
            <input type="text" id="course_id" name="course_id" required><br><br>
            <button type="submit">Search</button><br><br>
        </fieldset>
    </form>
</body>
</html>
