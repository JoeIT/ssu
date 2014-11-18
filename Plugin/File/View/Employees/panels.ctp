<link href="<?php echo $this->webroot; ?>css/files-styles.css" rel="stylesheet">

<script type="text/javascript">
    $(document).ready(function () {

        $('.panel_to_toggle').hide();

        $('#add_statements').click(function(){
            var url = "<?php echo $this->Html->url(array("controller"  =>  'statements',
													"action"  =>  'ajaxadd'));?>";
            loadDialogPanel(url, 'Nueva declaración jurada');
        });

        $('.ajaxloadpanel').click(function(){

            var type = $(this).attr('custom_type');

            switch ( type )
            {
                case 'records':
					url = "<?php echo $this->Html->url(array("controller"  =>  "records", "action"  =>  "index"));?>";
                    loadIndexPanel(url, type, 'ANTECEDENTES');
                    break;
                case 'personal_education':
                    url = "<?php echo $this->Html->url(array("controller"  =>  "personal_education", "action"  =>  "index"));?>";
                    loadIndexPanel(url, type, 'EDUCACION PERSONAL');
					break;
                case 'jobs':
                    url = "<?php echo $this->Html->url(array("controller"  =>  "jobs", "action"  =>  "index"));?>";
                    loadIndexPanel(url, type, 'EXPERIENCIAS DE TRABAJOS');
                    break;
                case 'statements':
                    url = "<?php echo $this->Html->url(array("controller"  =>  "statements", "action"  =>  "index"));?>";
                    loadIndexPanel(url, type, 'DECLARACIONES JURADAS');
                    break;
                case 'vacations':
                    url = "<?php echo $this->Html->url(array("controller"  =>  "vacations", "action"  =>  "index"));?>";
                    loadIndexPanel(url, type, 'VACACIONES');
                    break;
                case 'memos':
                    url = "<?php echo $this->Html->url(array("controller"  =>  "memos", "action"  =>  "index"));?>";
                    loadIndexPanel(url, type, 'MEMORANDUMS');
                    break;
                case 'others':
                    url = "<?php echo $this->Html->url(array("controller"  =>  "others", "action"  =>  "index"));?>";
                    loadIndexPanel(url, type, 'OTROS');
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
        });$

        // PARA BORRAR
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
        //-----------------------------
    });

    function loadDialogPanel( url, title )
    {
        $('#dialog_content').dialog('option', 'title', title);
        //$.ajax({async:false});
        $('#dialog_content').load( url + '?' + $.now() ).dialog('open');
    }

    // -----------------------------------
    // Load the index/list panels
    function loadIndexPanel(url, type, name)
    {
        $.ajax({
            url: url,
            type: 'POST',
            async: 'false',
            success: function(indexDataPanel)
            {
                $('#panel_' + type).html(indexDataPanel);
                $('#panel_' + type).toggle();
            },
            error: function(request, textStatus, errorThrown)
            {
                alert('Error: No se pudo cargar la lista de '+ name +'.');
            }
        });
    }
</script>

<h1>DATOS DEL EMPLEADO</h1>

<!-- OTHER SECTION -->
<div class='css-content' >
	<div class='css-details_section ibox float-e-margins' id='test' >
		<div class='ibox-title'>
			<h2>Detalles</h2>
		</div>
		<?php echo $this->Html->image('File.Test_no_avatar.jpg', array("alt" => "Fotografía")); ?>
		<?php echo $this->fetch('employee_info'); ?>
	</div>
	<!-- OTHER SECTION -->
	<div class='css-data_section' >
        <?php
        $areasArray = array(
            array(type => 'records', title => 'Antecedentes', value => '123'),
            array(type => 'personal_education', title => 'Educacion personal', value => '123'),
            array(type => 'jobs', title => 'Experiencias de trabajo', value => '123'),
            array(type => 'statements', title => 'Declaraciones juradas', value => '123'),
            array(type => 'vacations', title => 'Salidas y vacaciones', value => '123'),
            array(type => 'memos', title => 'Memorandums', value => '123')
        );

        foreach($areasArray as $area)
        {
        ?>
            <div class='css-data_subsection'>
                <a href='javascript:void(0)' id="add_<?php echo $area['type'] ?>" class="pull-right btn btn-primary bt-sm m-r-sm m-t-sm" >Agregar</a>
                <div class=''>
                    <h2><a href='javascript:void(0)' id='' class='ajaxloadpanel' custom_type='<?php echo $area['type'] ?>'><?php echo $area['title'] ?></a>
                    </h2>
                </div>
                <div id='panel_<?php echo $area['type'] ?>' class='panel_to_toggle'>
                </div>
            </div>
        <?php
        } // Foreach end
        ?>
	</div>
</div>

<div id='dialog_content'>
</div>