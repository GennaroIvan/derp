<!DOCTYPE html> 
<html> 
	<head> 
	<title>Detalle</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="<?php echo base_url() ?>css/themes/own.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile.structure-1.1.0.min.css" /> 

	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
</head> 
<body> 
    <div data-role="dialog">
		<div data-role="header">
			<h1>Opciones</h1>
		</div>

		<div data-role="content">
                    <div data-role="controlgroup">
                        <?php foreach($estados as $e =>$i): ?>
                        <a href="<?php echo base_url() ?>index.php/oservicio/filtro/estado/<?php echo $e; ?>" data-ajax="false" data-role="button"><?php echo $i; ?></a>
                        <?php endforeach; ?>
                        <a href="<?php echo base_url() ?>index.php/oservicio/filtro/estado/null" data-ajax="false" data-role="button">Todos</a>
                        <a href="<?php echo base_url() ?>index.php/oservicio/filtrar" data-role="button">Cancelar</a>
                    </div>
		</div>
	</div>

</body>
</html>