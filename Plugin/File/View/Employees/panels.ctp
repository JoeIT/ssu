<link href="<?php echo $this->webroot; ?>css/files-styles.css" rel="stylesheet">

<script type="text/javascript">
    var loadsRemaining = 0;
    $(document).ready(function () {

        $('#EmployeeProfilePhoto').val('');

        $('.panel_to_toggle').hide();

        $('.code_build_name').keyup(function(){
            buildCode();
        });

        $('.code_build_date').change(function(){
            buildCode();
        });

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
                    name = 'carta';
                    break;
                case 'contracts':
                    url = "<?php echo $this->Html->url(array("controller" => "contracts", "action" => "add"));?>";
                    urlDelete = "<?php echo $this->Html->url(array("controller" => "contracts", "action" => "delete"));?>";
                    name = 'contrato de trabajo';
                    break;
                case 'certificates':
                    url = "<?php echo $this->Html->url(array("controller" => "certificates", "action" => "add"));?>";
                    urlDelete = "<?php echo $this->Html->url(array("controller" => "certificates", "action" => "delete"));?>";
                    name = 'título/certificado';
                    break;
                case 'memos':
                    url = "<?php echo $this->Html->url(array("controller" => "memos", "action" => "add"));?>";
                    urlDelete = "<?php echo $this->Html->url(array("controller" => "memos", "action" => "delete"));?>";
                    name = 'memorandum';
                    break;
                case 'personalrequirements':
                    url = "<?php echo $this->Html->url(array("controller" => "personalrequirements", "action" => "add"));?>";
                    urlDelete = "<?php echo $this->Html->url(array("controller" => "personalrequirements", "action" => "delete"));?>";
                    name = 'requerimiento de personal';
                    break;
                case 'documents':
                    url = "<?php echo $this->Html->url(array("controller" => "documents", "action" => "add"));?>";
                    urlDelete = "<?php echo $this->Html->url(array("controller" => "documents", "action" => "delete"));?>";
                    name = 'documento personal';
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
            else
            {
                $('.panel_to_toggle').hide('slow');
                $('.panel_table').html('');
                loadIndexPanel($(this).attr('custom_tag'));
            }
        });

        $('#dialog_content').dialog({
            autoOpen: false,
            modal: true,
            title: '',
            width: 'auto',
            resizable: false,
            closeOnEscape: true,
            //zIndex: 1000,
            //position: { my: "center top", at: "center top+15", of: "#container"},
            /*beforeSend:function(){
                $('#dialog_content').html('<div class="loading"></div>');
            },*/
            close: function(){
                $('#dialog_content').html('');
            }
        });
    });

    function loadDialogPanel( url, title )
    {
        // http://preloaders.net/
        $('#dialog_content').html('<?php echo $this->Html->image('File.default/loading.gif', array("alt" => "Cargando...", "class" => "css-img_center")); ?>');
        //$.ajax({async:false});
        $('#dialog_content').load( url + '?' + $.now(), function(){
            $(this).dialog({
                title: title,
                position: { my: "center top", at: "center top+30", of: window}
            });

            $(this).dialog('open');
        });
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
        var urlPersonalReq = "<?php echo $this->Html->url(array("controller"  =>  "personalrequirements", "action"  =>  "index"));?>";
        var urlDocuments = "<?php echo $this->Html->url(array("controller"  =>  "documents", "action"  =>  "index"));?>";

        switch (tag) {
            case 'records':
                name = 'ANTECEDENTES Y TITULOS';
                loadsRemaining = 6;
                ajaxLoadPanel(urlLetter, 'letters', tag, name);
                ajaxLoadPanel(urlContract, 'contracts', tag, name);
                ajaxLoadPanel(urlCertificate, 'certificates', tag, name);
                ajaxLoadPanel(urlMemos, 'memos', tag, name);
                ajaxLoadPanel(urlPersonalReq, 'personalrequirements', tag, name);
                ajaxLoadPanel(urlDocuments, 'documents', tag, name);
                break;
            case 'jobs':
                name = 'EXPERIENCIAS DE TRABAJOS';
                loadsRemaining = 6;
                ajaxLoadPanel(urlLetter, 'letters', tag, name);
                ajaxLoadPanel(urlContract, 'contracts', tag, name);
                ajaxLoadPanel(urlCertificate, 'certificates', tag, name);
                ajaxLoadPanel(urlMemos, 'memos', tag, name);
                ajaxLoadPanel(urlPersonalReq, 'personalrequirements', tag, name);
                ajaxLoadPanel(urlDocuments, 'documents', tag, name);
                break;
            case 'courses':
                name = 'CURSOS REALIZADOS';
                loadsRemaining = 6;
                ajaxLoadPanel(urlLetter, 'letters', tag, name);
                ajaxLoadPanel(urlContract, 'contracts', tag, name);
                ajaxLoadPanel(urlCertificate, 'certificates', tag, name);
                ajaxLoadPanel(urlMemos, 'memos', tag, name);
                ajaxLoadPanel(urlPersonalReq, 'personalrequirements', tag, name);
                ajaxLoadPanel(urlDocuments, 'documents', tag, name);
                break;
            case 'contracts':
                name = 'CONTRATOS DE TRABAJO';
                loadsRemaining = 6;
                ajaxLoadPanel(urlLetter, 'letters', tag, name);
                ajaxLoadPanel(urlContract, 'contracts', tag, name);
                ajaxLoadPanel(urlCertificate, 'certificates', tag, name);
                ajaxLoadPanel(urlMemos, 'memos', tag, name);
                ajaxLoadPanel(urlPersonalReq, 'personalrequirements', tag, name);
                ajaxLoadPanel(urlDocuments, 'documents', tag, name);
                break;
            case 'statements':
                name = 'DECLARACIONES JURADAS DE BIENES Y RENTAS';
                loadsRemaining = 6;
                ajaxLoadPanel(urlLetter, 'letters', tag, name);
                ajaxLoadPanel(urlContract, 'contracts', tag, name);
                ajaxLoadPanel(urlCertificate, 'certificates', tag, name);
                ajaxLoadPanel(urlMemos, 'memos', tag, name);
                ajaxLoadPanel(urlPersonalReq, 'personalrequirements', tag, name);
                ajaxLoadPanel(urlDocuments, 'documents', tag, name);
                break;
            case 'others':
                name = 'OTROS';
                loadsRemaining = 6;
                ajaxLoadPanel(urlLetter, 'letters', tag, name);
                ajaxLoadPanel(urlContract, 'contracts', tag, name);
                ajaxLoadPanel(urlCertificate, 'certificates', tag, name);
                ajaxLoadPanel(urlMemos, 'memos', tag, name);
                ajaxLoadPanel(urlPersonalReq, 'personalrequirements', tag, name);
                ajaxLoadPanel(urlDocuments, 'documents', tag, name);
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
            async: 'true',
            data: {documentTag: tag},
            success: function ( indexDataPanel ) {
                $('#panel_' + tag + '_' + type).html( indexDataPanel );

                showPanelAfterLoadComplete( tag );
            },
            error: function (request, textStatus, errorThrown) {
                alert('Error: No se pudo cargar la lista de ' + panelName + '.');
            }
        });
    }

    function showPanelAfterLoadComplete(tag)
    {
        loadsRemaining -= 1;

        if(loadsRemaining == 0)
        {
            // If panel is hidden, then it will be showed
            if( $('#panel_' + tag).is(':hidden') )
                $('#panel_' + tag).slideToggle();
        }
    }

    function buildCode()
    {
        var name = $('#EmployeeName').val().toUpperCase().substring(0, 1);
        var paternal = $('#EmployeePaternalSurname').val().toUpperCase().substring(0, 1);
        var maternal = $('#EmployeeMaternalSurname').val().toUpperCase().substring(0, 1);

        var day = $('#EmployeeBornDateDay').val();
        var month = $('#EmployeeBornDateMonth').val();
        var year = $('#EmployeeBornDateYear').val().substring(2, 4);

        $('#code_label').html( paternal + maternal + name + year + '' + month + '' + day );
    }

</script>

<?php
echo $this->Html->link('<<< PRINCIPAL',
    $this->Html->url(array("controller" => "employees", "action" => "index"), true),
    array('class' =>  "css-action_button css-mini_action_button"));
?>

<h1>DATOS DEL EMPLEADO</h1>

<!-- OTHER SECTION -->
<div class='css-content' >
	<div class='css-details_section' id='test' >
		<div class=''>
			<h2>Detalles</h2>
		</div>
		<?php echo $this->fetch('employee_info'); ?>
	</div>
	<!-- OTHER SECTION -->
    <?php
    if(!empty($this->request->data['Employee']['id']))
    {
    ?>
    <div class='css-data_section' >
        <div class='css-data_menu'>
            AGREGAR:
            <?php foreach($GLOBAL_DOCS as $keyDoc => $doc){ ?>
            <a href='javascript:void(0)' id="crud_action" type="<?php echo $keyDoc; ?>" class="css-action_button" ><?php echo $doc; ?></a>
            <?php }?>
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
                        <div id='panel_<?php echo $key . '_' . $keyDoc; ?>' class='panel_table' ></div>
                    <?php } ?>
                </div>
            </div>
        <?php
        } // Foreach end
        ?>
	</div>
    <?php
    }
    else{
    ?>
        <div class='css-data_section' >
            <div class='css-data_menu'>
                AGREGAR:
                <?php foreach($GLOBAL_DOCS as $keyDoc => $doc){ ?>
                    <button class="css-action_button" ><?php echo $doc; ?></button>
                <?php }?>
            </div>
            <?php
            foreach($GLOBAL_TAGS as $key => $tag)
            { ?>
                <div class='css-data_subsection'>
                    <div class='toggle_index_panel css-title_section css-title_section_<?php echo $key ?>' >
                        <h2><?php echo $tag ?></h2>
                    </div>
                </div>
            <?php
            } // Foreach end
            ?>
        </div>
    <?php
    } ?>
</div>
<div id='dialog_content'>
</div>