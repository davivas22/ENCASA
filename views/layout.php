<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENCASA</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="/css/style.css">
     <!-- CSS específico de la página (si existe) -->
     <?php if (isset($pageStylesheet)) : ?>
        <link rel="stylesheet" href="<?php echo $pageStylesheet; ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<body>
<?php echo $contenido; ?>  
            
<script src="/js/app.js"></script>
<!-- JS específico de la página (si existe) -->
<?php if (isset($pageScript)) : ?>
    <script src="<?php echo $pageScript; ?>"></script>
<?php endif; ?>
</body>
</html>
