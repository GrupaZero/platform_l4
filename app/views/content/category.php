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
<h1>Category</h1>
<pre>
    <span>ID: <?php echo $content->getId(); ?></span>
    <span>Path: <?php echo $content->getPath(); ?></span>
    <span>Type: <?php echo $content->getType()->getName(); ?></span>
    <?php if (!empty($children)): ?>
        <span><strong>Children:</strong></span>
        <?php foreach ($children as $child): ?>
            <span>ID: <?php echo $child->getId(); ?></span>
            <span>Path: <?php echo $child->getPath(); ?></span>
            <span>Type: <?php echo $child->getType()->getName(); ?></span>
        <?php endforeach; ?>
    <?php endif; ?>
</pre>
<hr/>
<h3>FOOTER</h3>
<?php if (!empty($regions)): ?>
    <?php foreach ($regions['footer'] as $block): ?>
        <?php echo $block->view; ?>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>
