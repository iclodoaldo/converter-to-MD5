<html>
<head><title>Conversosr de senhas MD5!</title></head>

<body style='background:Ivory'>
<br>
<br>
<?php
if ($_POST){
	$senha = $_POST['senha'];
	$entrada = $senha != '' ? $senha : '';
	$saida   = $senha != '' ? md5($senha) : '';
	}else{ 
		$entrada=''; $saida='';
	}

?>
<table border='1' align='center' width='400'>
	<tr>
		<td colspan='2' style='text-align:center; background:DimGray; font-weight:bold; color:lime; font-size:large;'>Conversor de Senhas em MD5!!!</td>
	</tr>
	<form method='post' action='?'>
	<tr>
		<td style="background:black; color:lime; font-weight:bold;font-size:large; width:50%;"><marquee>Digite aqui ao lado a sua senha...</marquee></td><td style='width:50%'><?php echo "<input style='width:100%; background:yellow;' type='text' name='senha' value='' autofocus> ";?></td>
	</tr>
	<tr>
		<td colspan='2'><?php echo "<input style='width:100%; font-weight:bold;' type='submit' value='Enviar'>";?></td>
	</tr>
	</form>
	<tr><td style='text-align:center; font-weight:bold; '>Sua Senha</td><td style='text-align:center; font-weight:bold;'>Sua Senha Criptografada</td></tr>
	<tr>
		<td  style='width:50%;'><?php echo "<input style='width:100%; background:LightSkyBlue; text-align:center; ' type='text' name='entrada' value='$entrada'readonly >";?></td>
		<td style='width:50%;'><?php echo "<input style='width:100%; background:' typoe='text' name='saida' value='$saida' readonly >";?></td>
	</tr>
</table>

</body>
</html>
