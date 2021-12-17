<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Biodata</h1>
    <form action="/kirim" method="post">
        @csrf
        <label>First name: </label><Br><br>
            <input type="text" name="firstname"><br><br>
        <label>Last name:</label><br><br>
            <input type="text" name="lastname"><br><br>
        <label>Gender:</label> <br><br>
            <input type="radio" name="gender" value="male">Male<br>
            <input type="radio" name="gender" value="female">Female<br>
            <input type="radio" name="gender" value="other">Other<br><br>
        <label>Nationality:</label><br><br>
            <select name="nationality">
                <option value="indonesian">Indonesian</option>
                <option value="singaporean">Singaporean</option>
                <option value="malaysian">Malaysian</option>
                <option value="australian">Austarlian</option>
            </select><br><br>
        <label>Language Spoken:</label><br><br>
            <input type="checkbox" name="language">Bahasa Indonesia<br>
            <input type="checkbox" name="language">English<br>
            <input type="checkbox" name="language">Other<br><br>
        <label>Bio:</label><br><br>
            <textarea name="bio" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="kirim">
    </form>
</body>
</html>