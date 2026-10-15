<?php
    // cada pagina define $titulo antes de incluir este archivo
    if (!isset($titulo)) {
        $titulo = 'Inicio';
    }
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="metro4:locale" content="es-MX">
<title><?php echo $titulo; ?> | Campus Virtual</title>

<link rel="stylesheet" href="https://cdn.metroui.org.ua/4.5.12/metro.css">
<link rel="stylesheet" href="CSS/style.css">
