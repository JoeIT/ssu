<link href="<?php echo $this->webroot; ?>css/files-styles.css" rel="stylesheet">

<script type="text/javascript">
    $(document).ready(function () {

        $('.panel_to_toggle').hide();

        $(document).on('click', '#crud_action', function () {
            var title = '';
            var action = $(this).attr('action');
            var tag = $(this).attr('tag');
            var type  = $(this).attr('type');
            var idType = $(this).attr('id_type');
            var name = '';
            var url = '';
            var urlDelete = '';

            switch (type) {
                case 'letters':
                    url = "<?php echo $this->Html->url(array("controller" => "letters", "action" => "add"));?>";
                    urlDelete = "<?php echo $this->Html->url(array("controller" => "letters", "action" => "delete"));?>";
                    name = 'antecedente';
                    break;
                case 'contracts':

                    name = 'experiencia de trabajo';
                    break;
                case 'certificates':

                    name = 'cursos realizados';
                    break;
                case 'memos':

                    name = 'contratos de trabajo';
                    break;
                case 'personal_docs':

                    name = 'declaración jurada';
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
            if($('#panel_' + $(this).attr('custom_tag')).is(':visible'))
                $('#panel_' + $(this).attr('custom_tag')).slideToggle();
            else {
                loadIndexPanel($(this).attr('custom_tag'));
            }
        });

        $('#dialog_content').dialog({
            autoOpen: false,
            modal: true,
            title: '',
            resizable: false,
            closeOnEscape: true,
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
    function loadIndexPanel(tag)
    {
        var name = '';

        var urlLetter = "<?php echo $this->Html->url(array("controller"  =>  "letters", "action"  =>  "index"));?>";
        var urlContract = "<?php echo $this->Html->url(array("controller"  =>  "contracts", "action"  =>  "index"));?>";
        var urlCertificate = "<?php echo $this->Html->url(array("controller"  =>  "certificates", "action"  =>  "index"));?>";
        var urlMemos = "<?php echo $this->Html->url(array("controller"  =>  "memos", "action"  =>  "index"));?>";
        var urlPersonalDocs = "<?php echo $this->Html->url(array("controller"  =>  "personal_docs", "action"  =>  "index"));?>";

        switch (tag) {
            case 'records':
                name = 'ANTECEDENTES Y TITULOS';

                ajaxLoadPanel(urlLetter, 'letters', tag, name);
                break;
            case 'jobs':
                name = 'EXPERIENCIAS DE TRABAJOS';
                break;
            case 'courses':
                name = 'CURSOS REALIZADOS';
                break;
            case 'contracts':
                name = 'CONTRATOS DE TRABAJO';
                break;
            case 'statements':
                name = 'DECLARACIONES JURADAS DE BIENES Y RENTAS';
                break;
            case 'others':
                name = 'OTROS';
                break;
            default:
                break;
        }
    }

    function ajaxLoadPanel(url, type, tag, panelName)
    {
        $.ajax({
            url: url,
            type: 'POST',
            async: 'false',
            data: {documentTag: tag},
            success: function ( indexDataPanel ) {
                $('#panel_' + tag + '_' + type).html( indexDataPanel );

                // If panel is hidden, then it will be showed
                if( $('#panel_' + tag).is(':hidden') )
                    $('#panel_' + tag).slideToggle();
            },
            error: function (request, textStatus, errorThrown) {
                alert('Error: No se pudo cargar la lista de ' + panelName + '.');
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
        <div class='css-data_menu'>
            <a href='javascript:void(0)' id="crud_action" type="letters" class="css-add_button" >Carta(+)</a>
            <a href='javascript:void(0)' id="crud_action" type="contracts" class="css-add_button" >Contrato(+)</a>
            <a href='javascript:void(0)' id="crud_action" type="certificates" class="css-add_button" >Certificado(+)</a>
        </div>

        <?php
        foreach($GLOBAL_TAGS as $key => $tag)
        {
        ?>
            <div class='css-data_subsection'>
                <div class='toggle_index_panel css-title_section css-title_section_<?php echo $key ?>' custom_tag='<?php echo $key ?>'>
                    <h2><?php echo $tag ?></h2>
                </div>
                <div id='panel_<?php echo $key ?>' class='panel_to_toggle css-panel_to_toggle'>
                    <?php foreach($GLOBAL_DOCS as $keyDoc => $doc){ ?>
                        <div id='panel_<?php echo $key . '_' . $keyDoc; ?>' ></div>
                    <?php }?>
                </div>
            </div>
        <?php
        } // Foreach end
        ?>
	</div>
</div>

<div id='dialog_content'>
</div>