<link href="<?php echo $this->webroot; ?>css/files-styles.css" rel="stylesheet">

<style>
    .css-left_container {
        float: left;
        border: 2px solid #a0a0a0;
        background: #908989;
        width: 250px;
        height: auto;
    }

    .css-search_table {
        -moz-border-radius: 10px;
        border-radius: 10px;
        background: #5872A6;
        color: #ffffff;
    }

    .css-search_table th, .css-search_table td {
        padding-left: 4px;
    }

    .css-section_panel {
        padding: 5px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        border: 2px solid gray;
        background: #F2ECCE;
    }

    .css-section_panel_search {
        text-align: left;
    }

    .css-info_panels {
        display: inline-block;
        vertical-align: top;
        padding: 10px;
    }

    .css-info_panels a:hover{
        text-decoration: none;
    }

    .css-info_panel_search {
    }

    .css-info_panel_results {
        text-align: center;
        width: 65%;
    }

    .css-left_container a {
        text-decoration: none;
    }

    .css-container {
        text-align: center;
    }

    .css-img_circle {
        border-radius: 50%;
    }

    .css-employee_title1, .css-employee_title2, .css-employee_title3 {
        background: #ffffff;
        -moz-border-radius: 10px;
        border-radius: 10px;
        text-align: center;
        border: 1px solid;
    }

    .css-employee_title1 {
        color: coral;
        border-color: coral;
    }

    .css-employee_title2 {
        color: green;
        border-color: green;
    }

    .css-employee_title3 {
        color: blue;
        border-color: blue;
    }

    .css-employee_box1, .css-employee_box2, .css-employee_box3 {
        background-color: #ffffff;
        border: 2px solid black;
        margin-bottom: 5px;
        padding: 5px;
        width: 340px;
        height: 50px;
        text-align: left;

        -moz-border-radius: 10px;
        border-radius: 10px;
        /*box-sizing: border-box;*/
    }

    .css-employee_box1 {
        border-color: coral;
    }

    .css-employee_box2 {
        border-color: green;
    }

    .css-employee_box3 {
        border-color: blue;
    }

    .css-div_intern_box {
        display: inline-block;
        margin: 2px;
        vertical-align: middle;
        padding: 3px;
    }

    .css-search_result_table td {
        border: 1px solid grey;
        padding: 5px;
    }

</style>

<script type="text/javascript">
    $(document).ready(function () {

        $('#search_button').click(function(){
            $.ajax({
                url: "<?php echo $this->Html->url(array("controller" => "employees", "action" => "search"));?>",
                type: 'POST',
                data: {
                    name: $('#search_name').val(),
                    lastName: $('#search_lastName').val(),
                    code: $('#search_code').val(),
                    ci: $('#search_ci').val(),
                    gender: $('#search_gender').val(),
                    profile: $('#search_profile').val(),
                    degree: $('#search_degree').val(),
                    certificate: $('#search_certificate').val()
                },
                success: function ( searchResultPanel ) {
                    $('#search_panel').html( searchResultPanel );
                },
                error: function (request, textStatus, errorThrown) {
                    alert('Error: No se pudo cargar los resultados de la busqueda.');
                }
            });
        });

    });
</script>

<body>

<div style="width: 100%">

    <div class="css-container">
        <div class="css-section_panel css-section_panel_search" >
            <div class="css-info_panels css-info_panel_search">
                <table class="css-search_table" cellpadding="0" cellspacing="0">
                    <tr>
                        <th>Apellido:</th>
                        <td><input type="text" id="search_lastName"/></td>
                    </tr>
                    <tr>
                        <th>Nombre:</th>
                        <td><input type="text" id="search_name"/></td>
                    </tr>
                    <tr>
                        <th>Código:</th>
                        <td><input type="text" id="search_code"/></td>
                    </tr>
                    <tr>
                        <th>Carnet:</th>
                        <td><input type="text" id="search_ci"/></td>
                    </tr>
                    <tr>
                        <th>Género:</th>
                        <td>
                            <select  id="search_gender">
                                <option value="">Ambos</option>
                                <?php foreach($GENDER as $key => $gender){ ?>
                                    <option value="<?php echo $key; ?>"><?php echo $gender; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Perfil:</th>
                        <td>
                            <select  id="search_profile">
                                <option value="">Todos</option>
                                <?php foreach($PROFILE as $key => $profile){ ?>
                                    <option value="<?php echo $key; ?>"><?php echo $profile; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Profesional:</th>
                        <td>
                            <select  id="search_degree">
                                <option value="">Todos</option>
                                <?php foreach($PROFESSIONAL_DEGREE as $key => $degree){ ?>
                                <option value="<?php echo $key; ?>"><?php echo $degree; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Certificados:</th>
                        <td>
                            <select  id="search_certificate">
                                <option value="">Todos</option>
                                <?php foreach($CERTIFICATE_PROVISION as $key => $provision){ ?>
                                    <option value="<?php echo $key; ?>"><?php echo $provision; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2" align="center"><input type="button" id="search_button" value="BUSCAR"/></th>
                    </tr>
                </table>
            </div>
            <div id="search_panel" class="css-info_panels css-info_panel_results"></div>
        </div>
        </br>

        <div class="css-section_panel">
            <!-- NUEVOS CONTRATADOS -->
            <div class="css-info_panels">
                <h3 class="css-employee_title1" >ULTIMOS REGISTRADOS</h3>
                <?php foreach($newlyRegistered as $employee){ ?>
                    <a href="<?php
                        echo $this->Html->url(array("controller" => "employees", "action" => "edit", $employee['Employee']['id']), true)
                        ?>">
                        <div class="css-employee_box1">
                            <div class="css-div_intern_box">
                                <?php
                                $photo = 'File.default/Test_no_avatar.jpg';
                                $file_path = $employee['Employee']['code'] . '/profile_photo.jpg';
                                if(file_exists($DIGITAL_DOCS_PATH . $file_path))
                                    $photo = 'File.PERSONAL/'. $file_path;

                                echo $this->Html->image($photo, array('width' => '35px', 'class' => 'css-img_circle')) ?>
                            </div>

                            <div class="css-div_intern_box">
                                <span><strong><?php echo $employee['Employee']['paternal_surname'] .' '. $employee['Employee']['maternal_surname'] .' '. $employee['Employee']['name']; ?></strong></span>
                                </br>
                                <span>Código [<?php echo $employee['Employee']['code']; ?>]</span>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
            <!-- CONTRATOS VENCIDOS -->
            <div class="css-info_panels">
                <h3 class="css-employee_title2" >SIN CONTRATO</h3>
                <?php foreach($notHired as $employee){ ?>
                    <a href="<?php
                        echo $this->Html->url(array("controller" => "employees", "action" => "edit", $employee['Employee']['id']), true)
                        ?>">
                        <div class="css-employee_box2">
                            <div class="css-div_intern_box">
                                <?php
                                $photo = 'File.default/Test_no_avatar.jpg';
                                $file_path = $employee['Employee']['code'] . '/profile_photo.jpg';
                                if(file_exists($DIGITAL_DOCS_PATH . $file_path))
                                    $photo = 'File.PERSONAL/'. $file_path;

                                echo $this->Html->image($photo, array('width' => '35px', 'class' => 'css-img_circle')) ?>
                            </div>

                            <div class="css-div_intern_box">
                                <span><strong><?php echo $employee['Employee']['paternal_surname'] .' '. $employee['Employee']['maternal_surname'] .' '. $employee['Employee']['name']; ?></strong></span>
                                </br>
                                <span>Código [<?php echo $employee['Employee']['code']; ?>]</span>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
            <!-- CUMPLEAÑEROS -->
            <div class="css-info_panels">
                <h3 class="css-employee_title3">CUMPLEAÑER@(S)</h3>
                <?php
                foreach($birthdayEmployees as $employee){ ?>
                    <a href="<?php
                        echo $this->Html->url(array("controller" => "employees", "action" => "edit", $employee['Employee']['id']), true)
                        ?>">
                        <div class="css-employee_box3">
                            <div class="css-div_intern_box">
                                <?php
                                $photo = 'File.default/Test_no_avatar.jpg';
                                $file_path = $employee['Employee']['code'] . '/profile_photo.jpg';
                                if(file_exists($DIGITAL_DOCS_PATH . $file_path))
                                    $photo = 'File.PERSONAL/'. $file_path;

                                echo $this->Html->image($photo, array('width' => '35px', 'class' => 'css-img_circle')) ?>
                            </div>

                            <div class="css-div_intern_box">
                                <span><strong><?php echo $employee['Employee']['paternal_surname'] .' '. $employee['Employee']['maternal_surname'] .' '. $employee['Employee']['name']; ?></strong></span>
                                </br>
                                <span>Código [<?php echo $employee['Employee']['code']; ?>]</span>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</body>