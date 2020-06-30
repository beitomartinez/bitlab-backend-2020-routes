<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de inicio</title>
</head>
<body>
    <h1>Página de inicio</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa magnam culpa praesentium aliquid sit a, earum quam aspernatur tempora quod perferendis velit dicta cupiditate deserunt, animi laboriosam perspiciatis, ab reiciendis.</p>
    <p><a href="<?php echo route('contact-page') ?>">Ir a página de contacto</a></p>
    <p><a href="<?php echo route('stores.centro') ?>">Ir a página de sucursal centro</a></p>
    <hr>
    <p><a href="<?php echo route('products.show', ['id' => 999]) ?>">Ir a producto</a></p>
    <p><a href="<?php echo route('products.show.comments', ['id' => 999]) ?>">Ir a comentarios del producto</a></p>
    <p><a href="<?php echo route('products.comments.by-type', ['id' => 999]) ?>">Ir a comentarios por tipo</a></p>
</body>
</html>