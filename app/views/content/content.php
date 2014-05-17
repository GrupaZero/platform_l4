<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:700);

        body {
            margin      : 0;
            font-family : 'Lato', sans-serif;
            text-align  : center;
            color       : #999;
        }
    </style>
</head>
<body>
<h1>Content</h1>
<pre>
    <p>ID: <?php echo $content->getId(); ?></p>
    <p>Path: <?php echo $content->getPath(); ?></p>
    <p>Type: <?php echo $content->getType()->getName(); ?></p>
</pre>
</body>
</html>
