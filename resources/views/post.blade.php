<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/post.css">
    <title>Post</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Merriweather:ital,wght@1,700&family=Playpen+Sans:wght@300&family=Poppins:wght@200;300;500&display=swap');

body {
    font-family: 'Playpen Sans', cursive;
    background-color: #f0f0f0;
    margin-top: 50px;
}

h1
{
    font-weight: 700;
    color: #333;
    text-align: center;
    font-size: 35px;
    margin-bottom: 15px;
}

article{
    margin-top: 50px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 5px;
    width: 60%;
    background-color: #fff
}

article + article{
    margin-top: 20px;
    margin-bottom: 20px;
}

a{
    text-decoration: none;
    color: #fff;
}
button
{
    cursor: pointer;
    border: none;
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    font-weight: 500;
    transition: all 0.3s ease;
}


    </style>
</head>
<body>
    <article>
        <?= $post; ?>
    </article>
    <a href="/">Go back</a>
</body>
</html>
