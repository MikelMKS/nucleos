<html lang="en">
<title>Alta Usuario</title>
<head> 
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./../css/bootstrap.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
	  <script>
function Text(string){//solo letras y numeros
    var out = '';
    //Se añaden las letras validas
    var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ ';//Caracteres validos
	
    for (var i=0; i<string.length; i++)
       if (filtro.indexOf(string.charAt(i)) != -1) 
	     out += string.charAt(i);
    return out;
}
</script>
<script>
function NumText(string){//solo letras y numeros
    var out = '';
    //Se añaden las letras validas
    var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890 ';//Caracteres validos
	
    for (var i=0; i<string.length; i++)
       if (filtro.indexOf(string.charAt(i)) != -1) 
	     out += string.charAt(i);
    return out;
}
</script><script>
function Num(string){//solo letras y numeros
    var out = '';
    //Se añaden las letras validas
    var filtro = '1234567890';//Caracteres validos
	
    for (var i=0; i<string.length; i++)
       if (filtro.indexOf(string.charAt(i)) != -1) 
	     out += string.charAt(i);
    return out;
}
</script><script>
function Double(string){//solo letras y numeros
    var out = '';
    //Se añaden las letras validas
    var filtro = '1234567890.';//Caracteres validos
	
    for (var i=0; i<string.length; i++)
       if (filtro.indexOf(string.charAt(i)) != -1) 
	     out += string.charAt(i);
    return out;
}
</script>
<script>
function Email(string){//solo letras y numeros
    var out = '';
    //Se añaden las letras validas
    var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890_.@';//Caracteres validos
	
    for (var i=0; i<string.length; i++)
       if (filtro.indexOf(string.charAt(i)) != -1) 
	     out += string.charAt(i);
    return out;
}
</script>
<style type="text/css">
input.Mayuscprim {text-transform:capitalize;}

i
{

    padding: 9px 10px;
    background: 0;
    border: 0;

    outline: 0;
    font-style: italic;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 0px;
    margin-bottom: 5px;
    color: #888dee;
    outline: 0;
}


input
{
	
    width: 90%;
    margin: 0;
    padding: 5px 10px;
    background: 0;
    border: 0;
    border-bottom: 2px solid #888dee;
    outline: 0;
    font-style: italic;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 5px;
    color: #888dee;
    outline: 0;
}

.iconn{

background-color: #5cb85c;
border-color: #4cae4c;
color: white;

}

.FormS{
	
	background: url(C:\xampp\htdocs\nucleos\bootstrap\css\fondo.jpg) no-repeat center center fixed;
	background: no-repeat center center fixed;
		background-attachment:fixed;
	background-position:fixed;
	background-size: cover;
	
	
	box-shadow: 20px 20px 15px rgba(6,1,1,0.43);
	

	font-family: Arial, cursive;
    font-size: 11px;
    font-weight: bold;
    outline: none;
    border: 0px solid #c4c4c4;


}


.subtituloR{
 font-family: 'Open Sans' , sans-serif;
    font-size: 20px;
    font-weight: 600;
    text-align: center;
    color: #f83434;
    margin-top: 5%;
    text-transform: uppercase;
    letter-spacing: 4px;

}

.subtituloD{
 font-family: 'Open Sans' , sans-serif;
    font-size: 15px;
    font-weight: 800;
    text-align: center;
    color: #f83434;
    margin-top: 5%;
    text-transform: uppercase;


}

.subtituloM{
 font-family: 'Open Sans' , sans-serif;
    font-size: 10px;
    font-weight: 600;
    color: #888dee;
    margin-top: 5%;
    text-transform: uppercase;
    letter-spacing: 1px;

}
.custom-radios div {
  display: inline-block;
}
.custom-radios input[type="radio"] {
  display: none;
}
.custom-radios input[type="radio"] + label {
  color: #333;
  font-family: Arial, sans-serif;
  font-size: 14px;
}
.custom-radios input[type="radio"] + label span {
  display: inline-block;
  width: 30px;
  height: 30px;
  margin: -1px 4px 0 0;
  vertical-align: middle;
  cursor: pointer;
  border-radius: 50%;
  border: 2px solid #FFFFFF;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.33);
  background-repeat: no-repeat;
  background-position: center;
  text-align: center;
  line-height: 20px;
}
.custom-radios input[type="radio"] + label span img {
  opacity: 0;
  transition: all .3s ease;
}
.custom-radios input[type="radio"]#F + label span {
  background-color: #fc40ff;
}
.custom-radios input[type="radio"]#M + label span {
  background-color: #3498db;
}
.custom-radios input[type="radio"]:checked + label span {
  opacity: 1;
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg) center center no-repeat;
  width: 30px;
  height: 30px;
  display: inline-block;

}

textarea
{
     width: 90%;
    margin: 0;
    padding: 5px 10px;
    background: 0;
    border: 0;
    border-bottom: 2px solid #888dee;
    outline: 0;
    font-style: italic;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 5px;
    color: #888dee;
    outline: 0;
}

.combob{
    margin: 0;
    padding: 5px 10px;
    background: 0;
    border: 0;
    border-bottom: 2px solid #ffffff;
    outline: 0;
    font-style: italic;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 5px;
    color: #ffffff;
    outline: 0;
}
</style>
<body>
 
<form action = "{{route('insertaalmacen')}}" method = "POST" enctype='multipart/form-data'>
{{csrf_field()}}
<table align="center"  class="FormS">
 		<tr>
 			<td align="middle" valign="middle" ><table align="middle">
 				<tr>
 					<td  align="middle"></td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr><tr>
 					<td>&nbsp;</td>
 					</tr>
 				<tr>
 					<td class="subtituloR" align="center">Nuevo Almacen<br>
					</td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
				<tr>
 					<td>&nbsp;</td>
 					</tr>
					</table>
					<table width="70%">
					<tr>
 					<td>&nbsp;</td>
 					</tr>
 				<tr>
 					<td align="center">Recuerde verificar que toda la información que desea ingresar sea correcta antes de ingresarla a la plataforma</td></tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr><tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr>
 					<td align="center" class="subtituloD">Datos de el Almacen</td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					</table>
					<table width="50%">
					<tr><td>
					<i class="glyphicon glyphicon-stop"></i>
 						<input type="text" name="nro" size="20" maxlength="11" placeholder="Numero de Rollo"  required="required" onkeyup="this.value=Num(this.value)" value="{{old('nro')}}"/></td>
 					</td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr><td>
					<i class="glyphicon glyphicon-stop"></i>
 						<input type="text" name="lro" size="20" maxlength="10" placeholder="Largo del Rollo"  required="required"  value="{{old('lro')}}"/></td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr><td>
					<i class="glyphicon glyphicon-asterisk"></i>
 						<input type="text" name="aro" size="20" maxlength="10" placeholder="Ancho del Rollo" required="required" value="{{old('aro')}}" class="estTF" /></td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr><td>
					<i class="glyphicon glyphicon-asterisk"></i>
 						Selecciona el Proveedor<select required class="combob" name = 'pro'>
	    
			@foreach($proveedor as $pro)
			<option value = '{{$pro->id_prov}}'>{{$pro->proveedor}}</option>
			@endforeach
                  </select></td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr><td>
					<i class="glyphicon glyphicon-asterisk"></i>
 						<input type="text" name="pes" size="20" maxlength="10" placeholder="Peso (kgs)" required="required" value="{{old('pes')}}" class="estTF" /></td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr><tr>
 					<td class="subtituloM ">Fecha de Ingreso:  </td>
 					</tr><tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr>
					<td> 
 						<i class="glyphicon glyphicon-calendar"></i>	<input  type="date" required placeholder="Fecha de Ingreso" name="f_ing" value="{{old('f_ing')}}">
					</td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr><td>
					<i class="glyphicon glyphicon-asterisk"></i>
 						Selecciona la Ubicacion del Almacen<select required class="combob" name = 'ubal'>
	    
			@foreach($ubicacion as $ub)
			<option value = '{{$ub->id_ubicacion}}'>{{$ub->ubicacion}}</option>
			@endforeach
                  </select></td> 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr><td>
					<i class="glyphicon glyphicon-asterisk"></i>
 						<input type="text" name="p_sal" size="20" maxlength="10" placeholder="Peso de Salida(kgs)" required="required" value="{{old('p_sal')}}" class="estTF" /></td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr><td>
					<i class="glyphicon glyphicon-asterisk"></i>
 						<input type="text" name="not" size="20" maxlength="10" placeholder="Numero de Orden de Trabajos de Salida" required="required" value="{{old('not')}}" class="estTF" /></td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr>
 					<td class="subtituloM ">Fecha de Salida:  </td>
 					</tr><tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr>
					<td> 
 						<i class="glyphicon glyphicon-calendar"></i>	<input  type="date" required placeholder="Fecha de Salida" name="f_sal" value="{{old('f_sal')}}">
					</td></tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr><td>
					<i class="glyphicon glyphicon-asterisk"></i>
 						Selecciona la Produccion<select required class="combob" name = 'prod'>
	    
			@foreach($produccion as $pr)
			<option value = '{{$pr->id_prod}}'>{{$pr->id/ave}}</option>
			@endforeach
                  </select></td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr><td align="center"><input type="submit" value="Crear Tipo de Nucleo" class="btn btn-success" ></td>
 					</tr><tr>
 					<td>&nbsp;</td>
 					</tr><tr>
 					<td>&nbsp;</td>
 					</tr>
 				</table></td>
	 </table>
</form>
 
</body>
</html>