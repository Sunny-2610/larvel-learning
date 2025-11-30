<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Tutorial</title>
</head>
<body>
    <h1>Home</h1>
    <form action="{{ route('formsubmitted') }}" method="post">
        @csrf
        <label for="fullname">Fullname</label>
        <input type="text" id="fullname" name="fullname" placeholder="Type your fullname" required>
        <br><br>

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Type your email" required>
        <br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>