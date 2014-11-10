<link href="<?php echo $this->webroot; ?>css/files-styles.css" rel="stylesheet">

<script type="text/javascript">
    $(document).ready(function () {

        $('.panel_to_toggle').hide();

        $('#add_statement').click(function(){
            var url = "<?php echo $this->Html->url(array("controller"  =>  'statements',
													"action"  =>  'ajaxadd'));?>";
            loadDialogPanel(url, 'Nueva declaración jurada');
        });

        $('.ajaxloadpanel').click(function(){

            switch ( $(this).attr('custom_type') )
            {
                case 'records':
					$('#panel_records').toggle();
                    break;
                case 'personal_education':
                    $('#panel_personal_education').toggle();
					break;
                case 'jobs':
					$('#panel_jobs').toggle();
                    break;
                case 'statements':
                    loadStatementsPanel();
                    break;
                case 'vacations':
					$('#panel_vacations').toggle();
                    break;
                case 'memos':
					$('#panel_memos').toggle();
                    break;
                case 'others':
					$('#panel_others').toggle();
                    break;
                default:
                    break;
            }
        });

        $('#dialog_content').dialog({
            autoOpen: false,
            modal: true,
            title: '',
            resizable: false,
            close: function(){
                $('#dialog_content').html('');
            }
        });

        $('#ajax_content2').dialog({
            autoOpen: false,
            modal: true,
            title: 'Nueva declaración jurada',
            buttons: [
                {
                    text: 'Aceptar',
                    click: function() {
                        alert('La info fue guardada.');
                    }
                },
                {
                    text: 'Cerrar',
                    click: function() {
                        $(this).dialog('close');
                    }
                }
            ],
            close: function(){
            }
        });
    });

    function loadDialogPanel( url, title ) {

        $('#dialog_content').dialog('option', 'title', title);
        //$.ajax({async:false});
        $('#dialog_content').load( url + '?' + $.now() ).dialog('open');

        /*$.ajax({
            url: url,
            type: 'POST',
            async: 'false',
            data: {
                my_id: '001',
                my_name: 'This is my name'
            },
            success: function( response )
            {
                $('#dialog_content').html( response );
                $('#dialog_content').dialog('open');
            },
            error: function(request, textStatus, errorThrown)
            {
                alert('Error: ' + errorThrown);
            }
        });*/
    }

    function loadStatementsPanel() {
        $.ajax({
            url: "<?php echo $this->Html->url(array("controller"  =>  "statements",
													"action"  =>  "index"));?>",
            type: 'POST',
            async: 'false',
            success: function(statementsPanel)
            {
                $('#panel_statements').html(statementsPanel);
                $('#panel_statements').toggle();
            },
            error: function(request, textStatus, errorThrown)
            {
                alert('Error: No se pudo cargar la lista de declaraciones juradas.');
            }
        });
    }
</script>

<style>
    

</style>

<link href="<?php echo $this->webroot; ?>css/stylehrms.css" rel="stylesheet">

<h1>DATOS DEL EMPLEADO</h1>

<!-- OTHER SECTION -->
<div class='css-content' >
	<div class='css-details_section ibox float-e-margins' id='test' >
		<div class='ibox-title'>
			<h2>Detalles</h2>
		</div>

		<?php echo $this->Html->image('File.Test_no_avatar.jpg', array("alt" => "")); ?>

		<?php echo $this->fetch('employee_info'); ?>
	</div>
	<!-- OTHER SECTION -->
	<div class='css-data_section' >
		<div class='css-data_subsection'>
			<div class='ibox-title'>
				<h2><a href='javascript:void(0)' id='' class='ajaxloadpanel' custom_type='records' >Antecedentes</a></h2>
			</div>
			<div id='panel_records' class='panel_to_toggle'>
			</div>
		</div>

		<div class='css-data_subsection' >
			<div class='ibox-title'>
				<h2><a href='javascript:void(0)' id='' class='ajaxloadpanel' custom_type='personal_education' >Educación personal</a></h2>
			</div>
			<div id='panel_personal_education' class='panel_to_toggle'>
			</div>
		</div>
	<!-- OTHER SECTION -->
		<div class='css-data_subsection' >
			<div class='ibox-title'>
				<h2><a href='javascript:void(0)' id='' class='ajaxloadpanel' custom_type='jobs' >Experiencias de trabajo</a></h2>
			</div>
			<div id='panel_jobs' class='panel_to_toggle'>
			</div>
		</div>
	<!-- OTHER SECTION -->
		<div class='css-data_subsection' >
			<a href='javascript:void(0)' id="add_statement" class="pull-right btn btn-primary bt-sm m-r-sm m-t-sm" >Agregar</a>
			<div class='ibox-title'>
				<h2><a href='javascript:void(0)' id='' class='ajaxloadpanel' custom_type='statements' >Declaraciones juradas</a></h2>
			</div>
			<div id='panel_statements' class='panel_to_toggle'>
			</div>
		</div>
	<!-- OTHER SECTION -->
		<div class='css-data_subsection' >
			<div class='ibox-title'>
				<h2><a href='javascript:void(0)' id='' class='ajaxloadpanel' custom_type='vacations' >Salidas y vacaciones</a></h2>
			</div>
			<div id='panel_vacations' class='panel_to_toggle'>
			</div>
		</div>
	<!-- OTHER SECTION -->
		<div class='css-data_subsection' >
			<div class='ibox-title'>
				<h2><a href='javascript:void(0)' id='' class='ajaxloadpanel' custom_type='memos' >Memorandums</a></h2>
			</div>
			<div id='panel_memos' class='panel_to_toggle'>
			</div>
		</div>
	<!-- OTHER SECTION -->
		<div class='css-data_subsection' >
			<div class='ibox-title'>
				<h2><a href='javascript:void(0)' id='' class='ajaxloadpanel' custom_type='others' >Otros</a></h2>
			</div>
			<div id='panel_others' class='panel_to_toggle'>
			</div>
		</div>
	</div>
</div>

<div id='dialog_content'>
</div>