<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de inicio</title>
</head>
<body>
    <h1>Página de contacto</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa magnam culpa praesentium aliquid sit a, earum quam aspernatur tempora quod perferendis velit dicta cupiditate deserunt, animi laboriosam perspiciatis, ab reiciendis.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime, soluta?</p>
    <p><a href="<?php echo route('welcome') ?>">Ir a página de inicio</a></p>
    <p><a href="<?php echo route('products.show', ['id' => 999]) ?>">Ir a producto</a></p>
    <p><a href="<?php echo route('products.show.comments', ['id' => 999]) ?>">Ir a comentarios del producto</a></p>
    <p><a href="<?php echo route('products.comments.by_type', ['id' => 999]) ?>">Ir a comentarios por tipo</a></p>
</body>
</html>