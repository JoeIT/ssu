<script type="text/javascript">
	$(document).ready(function () {
		//alert('JQuery is HERE!!!');
		
		$('#table_address').hide();
		$('#table_address2').hide();
		
		$('#link_address').click(function(){
			//alert('Clicked');
			$('#table_address').toggle('slide');
		});
	});
</script>

<style>
	body {
		background: #e0e0e0;
	}
	
	.css-details_seccion{
		background: white;
		float: left;
		width: auto;
		padding: 10px;
		border: 2px solid #a0a0a0;
	}
	
	.css-data_seccion{
		background: white;
		border: 2px solid #a0a0a0;
	}
</style>

<h1>Editar datos de empleado</h1>

<div class='css-details_seccion' >
	<table>
	<tr><h2>Detalles</h2></tr>
	<tr>
		<td colspan='2' align='center'>
			<?php echo $this->Html->image('File.Test_no_avatar.jpg', array("alt" => "")); ?>
		</td>
	</tr>
	<tr>
		<th>
			Nombre(*):
		</th>
		<td>
			<input type='text' value='<?php echo $userinfoView['Name']; ?>'/>
		</td>
	</tr>
	<tr>
		<th>
			Apellido Paterno:
		</th>
		<td>
			<input type='text' value='<?php echo ''; ?>'/>
		</td>
	</tr>
	<tr>
		<th>
			Apellido Materno: 
		</th>
		<td>
			<input type='text' value='<?php echo ''; ?>'/>
		</td>
	</tr>
	<tr>
		<th>
			Fecha de nacimiento(*): 
		</th>
		<td>
			<input type='text' value='<?php echo $userinfoView['BIRTHDAY']; ?>'/>
		</td>
	</tr>
	<tr>
		<th>
			Genero: 
		</th>
		<td>
			<select>
				<option value='Femen'>Femenino</option>
				<option value='Masc'>Masculino</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align='center'><input type='button' value='GUARDAR' /><td>
	</tr>
	</table>
</div>
<div class='css-data_seccion' >
	<div>
		<h2><a href='javascript:void(0)' id='link_address' >Direccion</a></h2>
		<table id='table_address'>
			<tr>
				<th>
					Calle:
				</th>
				<td>
					<input type='text' value='<?php echo ''; ?>'/>
				</td>
			</tr>
			<tr>
				<th>
					Numero: 
				</th>
				<td>
					<input type='text' value='<?php echo ''; ?>'/>
				</td>
			</tr>
		</table>		
	</div>
	
	<div>
		<h2><a href='javascript:void(0)' id='link_address' >Direccion 2</a></h2>
		<table id='table_address2'>
			<tr>
				<th>
					Algo:
				</th>
				<td>
					<input type='text' value='<?php echo ''; ?>'/>
				</td>
			</tr>
			<tr>
				<th>
					Algo: 
				</th>
				<td>
					<input type='text' value='<?php echo ''; ?>'/>
				</td>
			</tr>
		</table>		
	</div>
</div>