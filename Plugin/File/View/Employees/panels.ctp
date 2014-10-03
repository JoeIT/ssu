<script type="text/javascript">
    $(document).ready(function () {

        $('.panel_to_toggle').hide();

        $('.toggle_area').click(function(){
            $('#panel_' + $(this).attr('custom_type') ).toggle('slide');
        });

        $( "#opener" ).click(function() {
            $( "#dialog" ).dialog();
        });

        $('.ajaxloadpanel').click(function(){

            switch ( $(this).attr('custom_type') )
            {
                case 'records':
                    break;
                case 'personal_education':
                    break;
                case 'jobs':
                    break;
                case 'statements':
                    loadStatementsPanel();
                    break;
                case 'vacations':
                    break;
                case 'memos':
                    break;
                case 'others':
                    break;
                default:
                    break;
            }
        })

        /*$.ajax({
            url: "<?php //echo $this->Html->url(array("controller"  =>  "statements",
						//							"action"  =>  "index"));?>",
            type: 'POST',
            async: 'false',
            data: {
                my_id: '001',
                my_name: 'This is my name'
            },
            success: function(response)
            {
                alert('RESPONSE = ' + response);
            },
            error: function(request, textStatus, errorThrown)
            {
            }
        });*/
    });

    function loadStatementsPanel() {
        $.ajax({
            url: "<?php echo $this->Html->url(array("controller"  =>  "statements",
													"action"  =>  "index"));?>",
            type: 'POST',
            async: 'false',
            success: function(statementsPanel)
            {
                $('#panel_statements').html(statementsPanel);
                $('#panel_statements').show();
            },
            error: function(request, textStatus, errorThrown)
            {
                alert('Error: No se pudo cargar la lista de declaraciones juradas.');
            }
        });
    }
</script>

<style>
    body {
        background: #e0e0e0;
    }

    .error-message {
        color: red;
    }

    .css-details_section{
        background: white;
        float: left;
        width: auto;
        padding: 10px;
        border: 2px solid #a0a0a0;
    }

    .css-data_section{
        background: white;
        border: 2px solid #a0a0a0;
    }

    .css-data_subsection{
        border: 1px solid #a0a0a0;
    }

    .css-date_area{
        width: auto;
    }

    h2 a, h2{
        color: #9999FF;
    }

</style>

<div id="dialog" title="Basic dialog">
    <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>
<button id="opener">Open Dialog</button>


<h1>DATOS DEL EMPLEADO</h1>

<!-- OTHER SECTION -->
<div class='css-details_section' >
    <h2>Detalles</h2>

    <?php echo $this->Html->image('File.Test_no_avatar.jpg', array("alt" => "")); ?>

    <?php echo $this->fetch('employee_info'); ?>
</div>
<!-- OTHER SECTION -->
<div class='css-data_section' >
    <div class='css-data_subsection'>
        <h2><a href='javascript:void(0)' id='' class='ajaxloadpanel' custom_type='records' >Antecedentes</a></h2>
        <table id='panel_records' class='panel_to_toggle'>
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

    <div class='css-data_subsection' >
        <h2><a href='javascript:void(0)' id='' class='ajaxloadpanel' custom_type='personal_education' >Educación personal</a></h2>
        <div id='panel_personal_education' class='panel_to_toggle'>
        </div>
    </div>
<!-- OTHER SECTION -->
    <div class='css-data_subsection' >
        <h2><a href='javascript:void(0)' id='' class='ajaxloadpanel' custom_type='jobs' >Experiencias de trabajo</a></h2>
        <div id='panel_jobs' class='panel_to_toggle'>
        </div>
    </div>
<!-- OTHER SECTION -->
    <div class='css-data_subsection' >
        <h2><a href='javascript:void(0)' id='' class='ajaxloadpanel' custom_type='statements' >Declaraciones juradas</a></h2>
        <div id='panel_statements' class='panel_to_toggle'>
        </div>
    </div>
<!-- OTHER SECTION -->
    <div class='css-data_subsection' >
        <h2><a href='javascript:void(0)' id='' class='ajaxloadpanel' custom_type='vacations' >Salidas y vacaciones</a></h2>
        <div id='panel_vacations' class='panel_to_toggle'>
        </div>
    </div>
<!-- OTHER SECTION -->
    <div class='css-data_subsection' >
        <h2><a href='javascript:void(0)' id='' class='ajaxloadpanel' custom_type='memos' >Memorandums</a></h2>
        <div id='panel_memos' class='panel_to_toggle'>
        </div>
    </div>
<!-- OTHER SECTION -->
    <div class='css-data_subsection' >
        <h2><a href='javascript:void(0)' id='' class='ajaxloadpanel' custom_type='others' >Otros</a></h2>
        <div id='panel_others' class='panel_to_toggle'>
        </div>
    </div>
</div>