<!DOCTYPE html>
<html lang="en">

<title>Inicio</title>
<head> 
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./../css/bootstrap.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
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
<div class="table-responsive">
<table width="100%" class="FormS" align="center">
 		<tr>
 			<td align="left" valign="top" ><table width="95%" align="center">
 				<tr>
 					<td height="25px" align="center"></td>
 					</tr>
				<tr>
 					<td>&nbsp;</td>
 					</tr>
				<tr>
 					<td>
					Consulta de los Usuarios
					</td>
 					</tr>
					<tr>
 					<td>&nbsp;</td>
 					</tr><tr>
 					<td>&nbsp;</td>
 					</tr>
					<tr>
 					<td>
					<table width="95%" class="table table-condensed table-hover">
					<thead>
				<tr>
				<th><font color="#95ff7b", size="2">Imagen de Usuario</font></th><th><font color="#95ff7b", size="2">Nombre Completo</font></th><th><font color="#83f1f3", size="2">Usuario</font></th><th><font color="#83f1f3", size="2">E-mail</font></th><th><font color="#83f1f3", size="2">Telefono</font></th><th></th>
				</tr>
				</thead>
				@foreach($usuarios as $us)

				<tr>
			<td>
	<img src = "{{asset('archivos/'.$us->imagen)}}"
        height =50 width=50></td>
	<td><font color='#000000', size='2'>{{$us->nombre}} {{$us->ape_pat}} {{$us->ape_mat}} </font></td>
	<td><font color='#000000', size='2'>{{$us->usuario}}</font></td>
	<td><font color='#000000', size='2'>{{$us->email}} </font></td>
	<td><font color='#000000', size='2'>{{$us->telefono}} </font></td>
	<td>
	@if($us->deleted_at=="")
	<a href="{{URL::action('c_usuarios@eliminausuarios',['id_usuario'=>$us->id_usuario])}}"> &nbsp;
	Desactivar	
	</a> 
	<a href="{{URL::action('c_usuarios@modificausuarios',['id_usuario'=>$us->id_usuario])}}"> &nbsp;
	Modificar	
	</a> 
	@else
	<a href="{{URL::action('c_usuarios@restaurausuarios',['id_usuario'=>$us->id_usuario])}}"> &nbsp;
	Restaurar
	</a> 
	<a href="{{URL::action('c_usuarios@efisicausuarios',['id_usuario'=>$us->id_usuario])}}"> &nbsp;
	Eliminar
	</a> 
	@endif
	</td>
	</tr>
@endforeach
			

				</table>
					</td>
 					</tr>
					<table width="35%" align="center">
					<tr>
					</table>
 					<td>&nbsp;</td>
 					</tr><tr>
 					<td>&nbsp;</td>
 					</tr> 	<tr>
 					<td>&nbsp;</td>
 					</tr><tr>
 					<td>&nbsp;</td>
 					</tr>
	 </table>
	 </table>
	 </div>
	 </body>
 
</html>