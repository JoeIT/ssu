<link href="<?php echo $this->webroot; ?>css/files-styles.css" rel="stylesheet">

<script type="text/javascript">
    $(document).ready(function () {


        $('.panel_to_toggle').hide();

        $(document).on('click', '#crud_action', function () {
            var title = '';
            var action = $(this).attr('action');
            var type  = $(this).attr('type');
            var idType = $(this).attr('id_type');
            var name = '';
            var url = '';
            var urlDelete = '';

            switch (type) {
                case 'records':
                    url = "<?php echo $this->Html->url(array("controller" => "records", "action" => "add"));?>";
                    urlDelete = "<?php echo $this->Html->url(array("controller" => "records", "action" => "delete"));?>";
                    name = 'antecedente';
                    break;
                case 'personal_education':
                    url = "<?php echo $this->Html->url(array("controller" => "personal_education", "action" => "add"));?>";
                    urlDelete = "<?php echo $this->Html->url(array("controller" => "personal_education", "action" => "delete"));?>";
                    name = 'educación personal';
                    break;
                case 'jobs':
                    url = "<?php echo $this->Html->url(array("controller" => "jobs", "action" => "add"));?>";
                    urlDelete = "<?php echo $this->Html->url(array("controller" => "jobs", "action" => "delete"));?>";
                    name = 'experiencia de trabajo';
                    break;
                case 'statements':
                    url = "<?php echo $this->Html->url(array("controller" => "statements", "action" => "add"));?>";
                    urlDelete = "<?php echo $this->Html->url(array("controller" => "statements", "action" => "delete"));?>";
                    name = 'declaración jurada';
                    break;
                case 'vacations':
                    url = "<?php echo $this->Html->url(array("controller" => "vacations", "action" => "add"));?>";
                    urlDelete = "<?php echo $this->Html->url(array("controller" => "vacations", "action" => "delete"));?>";
                    name = 'vacación';
                    break;
                case 'memos':
                    url = "<?php echo $this->Html->url(array("controller" => "memos", "action" => "add"));?>";
                    urlDelete = "<?php echo $this->Html->url(array("controller" => "memos", "action" => "delete"));?>";
                    name = 'memorandum';
                    break;
                default:
                    break;
            }


            if(action == 'delete')
            {
                url = urlDelete + '/' + idType;
                title = 'Eliminar ' + name;
            }
            else if(idType != '' && idType != undefined)
            {
                url += '/' + idType;
                title = 'Editar ' + name;
            }
            else
                title = 'Agregar ' + name;

            loadDialogPanel(url, title);
        });

        $('.toggle_index_panel').click(function(){
            // If panel is showed, then it will be just hide
            if($('#panel_' + $(this).attr('custom_type')).is(':visible'))
                $('#panel_' + $(this).attr('custom_type')).slideToggle();
            else {
                loadIndexPanel($(this).attr('custom_type'));
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

        // PARA BORRAR
        /*
        $('#ajax_content2').dialog({
            autoOpen: false,
            modal: true,
            title: 'Registro de declaración jurada',
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
        });*/
        //-----------------------------
    });

    function loadDialogPanel( url, title )
    {
        // http://preloaders.net/
        $('#dialog_content').html('<?php echo $this->Html->image('File.loading.gif', array("alt" => "Cargando...", "class" => "center")); ?>');
        $('#dialog_content').dialog('option', 'title', title);
        //$.ajax({async:false});
        $('#dialog_content').load( url + '?' + $.now() ).dialog('open');
    }

    // -----------------------------------
    // Load the index/list panels
    function loadIndexPanel(type)
    {
        var url = '';
        var name = '';

        switch (type) {
            case 'records':
                url = "<?php echo $this->Html->url(array("controller"  =>  "records", "action"  =>  "index"));?>";
                name = 'ANTECEDENTES';
                break;
            case 'personal_education':
                url = "<?php echo $this->Html->url(array("controller"  =>  "personal_education", "action"  =>  "index"));?>";
                name = 'EDUCACION PERSONAL';
                break;
            case 'jobs':
                url = "<?php echo $this->Html->url(array("controller"  =>  "jobs", "action"  =>  "index"));?>";
                name = 'EXPERIENCIAS DE TRABAJOS';
                break;
            case 'statements':
                url = "<?php echo $this->Html->url(array("controller"  =>  "statements", "action"  =>  "index"));?>";
                name = 'DECLARACIONES JURADAS';
                break;
            case 'vacations':
                url = "<?php echo $this->Html->url(array("controller"  =>  "vacations", "action"  =>  "index"));?>";
                name = 'VACACIONES';
                break;
            case 'memos':
                url = "<?php echo $this->Html->url(array("controller"  =>  "memos", "action"  =>  "index"));?>";
                name = 'MEMORANDUMS';
                break;
            default:
                break;
        }

        $.ajax({
            url: url,
            type: 'POST',
            async: 'false',
            success: function (indexDataPanel) {
                $('#panel_' + type).html(indexDataPanel);

                // If panel is hidden, then it will be showed
                if( $('#panel_' + type).is(':hidden') )
                    $('#panel_' + type).slideToggle();
            },
            error: function (request, textStatus, errorThrown) {
                alert('Error: No se pudo cargar la lista de ' + name + '.');
            }
        });
    }
</script>

<h1>DATOS DEL EMPLEADO</h1>

<!-- OTHER SECTION -->
<div class='css-content' >
	<div class='css-details_section' id='test' >
		<div class=''>
			<h2>Detalles</h2>
		</div>
		<?php echo $this->Html->image('File.Test_no_avatar.jpg', array("alt" => "Fotografía", "class" => "center")); ?>
        </br>
        </br>
		<?php echo $this->fetch('employee_info'); ?>
	</div>
	<!-- OTHER SECTION -->
	<div class='css-data_section' >
        <?php
        $areasArray = array(
            array(type => 'records', title => 'Antecedentes', addButton => true),
            array(type => 'personal_education', title => 'Educacion personal', addButton => false),
            array(type => 'jobs', title => 'Experiencias de trabajo', addButton => false),
            array(type => 'statements', title => 'Declaraciones juradas', addButton => true),
            array(type => 'vacations', title => 'Salidas y vacaciones', addButton => false),
            array(type => 'memos', title => 'Memorandums', addButton => true)
        );

        foreach($areasArray as $area)
        {
        ?>
            <div class='css-data_subsection'>
                <?php if($area['addButton']){?>
                <a href='javascript:void(0)' id="crud_action" type="<?php echo $area['type'] ?>" class="pull-right btn btn-primary bt-sm m-r-sm m-t-sm" >Agregar</a>
                <?php }// End if ?>
                <div class='toggle_index_panel css-title_section' custom_type='<?php echo $area['type'] ?>'>
                    <h2><?php echo $area['title'] ?>
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