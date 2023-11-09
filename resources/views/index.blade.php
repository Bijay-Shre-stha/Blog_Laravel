<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <title>Blogs</title>
</head>

<body>
    <h1 class="blog">Blogs Available</h1>
    <?php foreach ($posts as $post) : ?>
        <article>
            <h1>
                <?= $post->title; ?>
            </h1>
            <div class="body">
                <?= $post->body; ?>
            </div>
            <p>
        </article>
    <?php endforeach; ?>
</body>

</html>
