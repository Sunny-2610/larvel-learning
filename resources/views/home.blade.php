<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Tutorail</title>
</head>
<body>
    <h1>Home</h1>
    <form action="/formsubmitted" method="post >
    @crsf
        <label for="fullname">Fullname</label>
        <input type="text" id="fullname" name="fullname" placeholder="Type your fullname" required>
        <br> <br>

        <label for="email">Email</label>
  <input type="text" id="email" name="email" placeholder="Type your email" required>

        <button type="submit">Submit</button>

    </form>
</body>
</html>