<!DOCTYPE HTML>
<html>
  <head>
    <title>Practica 6 de programacion</title>
  </head>
  <body>
    <h2>Practica 6 de programacion 4</h2>
    <h3>editar y eliminar </h3>
	<?php
	// si la forma ya ha sido enviada
	// escribe la cookie con la configuración
	if(isset($_POST['editar'])) {
	  $ret1 = (isset($_POST['id1'])) ? 
        setcookie('id1', $_POST['id1'], mktime() + 3600, '/') : null;
	  $ret2 = (isset($_POST['producto1'])) ? 
        setcookie('asiento', $_POST['producto1'], mktime() + 3600, '/') : null;
	  $ret3 = (isset($_POST['precio1'])) ? 
            setcookie('comida', $_POST['precio1'], mktime() + 3600, '/') : null;
	  /*$ret4 = (isset($_POST['ofertas'])) ? 
        setcookie('ofertas', implode(',',$_POST['ofertas']), mktime() + 3600, '/') : null;*/
	}
	// lee la cookie y asigna sus valores 
	//  a variables PHP
	$id1 = isset($_COOKIE['id1']) ? $_COOKIE['id1'] : '';
	$producto1 = isset($_COOKIE['producto1']) ? $_COOKIE['producto1'] : '';
	$precio1 = isset($_COOKIE['precio1']) ? $_COOKIE['precio1'] : '';
	$id2 = isset($_COOKIE['id2']) ? $_COOKIE['id2'] : '';
	$producto2 = isset($_COOKIE['producto2']) ? $_COOKIE['producto2'] : '';
	$precio2 = isset($_COOKIE['precio2']) ? $_COOKIE['precio2'] : '';
        $id3 = isset($_COOKIE['id3']) ? $_COOKIE['id3'] : '';
	$producto3 = isset($_COOKIE['producto3']) ? $_COOKIE['producto3'] : '';
	$precio3 = isset($_COOKIE['precio3']) ? $_COOKIE['precio3'] : '';
	?>
	<?php
	// si el formulario ya ha sido enviado
	// despliega mensaje de éxito
	if (isset($_POST['editar'])) {
	?>
		<table>
                <tr>
                <th> ID</th>
                <th> PRODUCTO</th>
                <th> PRECIO </th>
                </tr>
                <tr>
                <td>
		<input type="text" size="20" name="id1" value="<?php echo $id1; ?>" />
                </td>
                <td>
                <input type="text" size="20" name="producto1" value="<?php echo $producto1; ?>" />
                </td>
                <td>
                <input type="text" size="20" name="precio1" value="<?php echo $precio1; ?>" />
                </td>
                </tr>
                <tr>
                <td>
		<input type="text" size="20" name="id2" value="<?php echo $id2; ?>" />
                </td>
                <td>
                <input type="text" size="20" name="producto2" value="<?php echo $producto2; ?>" />
                </td>
                <td>
                <input type="text" size="20" name="precio2" value="<?php echo $precio2; ?>" />
                </td>
                </tr>
                <tr>
                <td>
		<input type="text" size="20" name="id3" value="<?php echo $id3; ?>" />
                </td>
                <td>
                <input type="text" size="20" name="producto3" value="<?php echo $producto3; ?>" />
                </td>
                <td>
                <input type="text" size="20" name="precio3" value="<?php echo $precio3; ?>" />
                </td>
                </tr>
                </table>

	<?php
	} else {
	?>
		<form method="post" action="cookies.php">
		<table>
                <tr>
                <th> ID</th>
                <th> PRODUCTO</th>
                <th> PRECIO </th>
                <th> OPCIONES </th>
                </tr>
                <tr>
                <td>
		<input type="text" size="20" name="id1" value="<?php echo $id1; ?>" />
                </td>
                <td>
                <input type="text" size="20" name="producto1" value="<?php echo $producto1; ?>" />
                </td>
                <td>
                <input type="text" size="20" name="precio1" value="<?php echo $precio1; ?>" />
                </td>
                <td>
                <input type="submit" name="editar" value="editar" />
                <input type="submit" name="eliminar" value="eliminar" />
                </td>
                </tr>

                <tr>
                <td>
		<input type="text" size="20" name="id2" value="<?php echo $id2; ?>" />
                </td>
                <td>
                <input type="text" size="20" name="producto2" value="<?php echo $producto2; ?>" />
                </td>
                <td>
                <input type="text" size="20" name="precio2" value="<?php echo $precio2; ?>" />
                </td>
                <td>
                <input type="submit" name="editar" value="editar" />
                <input type="submit" name="eliminar" value="eliminar" />
                </td>
                </tr>

                 <tr>
                <td>
		<input type="text" size="20" name="id3" value="<?php echo $id3; ?>" />
                </td>
                <td>
                <input type="text" size="20" name="producto3" value="<?php echo $producto3; ?>" />
                </td>
                <td>
                <input type="text" size="20" name="precio3" value="<?php echo $precio3; ?>" />
                </td>
                <td>
                <input type="submit" name="editar" value="editar" />
                <input type="submit" name="eliminar" value="eliminar" />
                </td>
                </tr>
		<p>
		</form>
	<?php
	}
	?>
  </body>
</html>