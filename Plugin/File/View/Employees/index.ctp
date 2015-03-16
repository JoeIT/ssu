<link href="<?php echo $this->webroot; ?>css/files-styles.css" rel="stylesheet">

<style>
    .css-left_container {
        float: left;
        border: 2px solid #a0a0a0;
        background: #908989;
        width: 250px;
        height: auto;
    }

    .css-info_panels {
        display: inline-block;
        vertical-align: top;

        -moz-border-radius: 10px;
        border-radius: 10px;
        background: #ffffff;
        padding: 10px;
    }

    .css-left_container a {
        text-decoration: none;
    }

    .css-container {
        float: left;
    }

    .css-img_circle {
        border-radius: 50%;
    }

    .css-employee_box {
        background-color: #ffffff;
        border: 1px solid #908989;
        margin-bottom: 5px;
        padding: 5px;
        width: auto;
        height: 50px;

        -moz-border-radius: 10px;
        border-radius: 10px;
        /*box-sizing: border-box;*/
    }

    .css-employee_box a:hover{
        text-decoration: none;
    }

    .css-div_intern_box {
        display: inline-block;
        /*float: left;*/
        margin: 2px;
        vertical-align: middle;
        padding: 3px;
        /*box-sizing: border-box;*/
    }
</style>

<body>

<div style="width: 100%">
    <div class="css-container">
        <!-- NUEVOS CONTRATADOS -->
        <div class="css-info_panels">
            <h3>ULTIMAS CONTRATACIONES</h3>
            <?php foreach($newlyHired as $employee){ ?>
                        <div class="css-employee_box">
                            <a href="<?php
                            echo $this->Html->url(array("controller" => "employees", "action" => "edit", $employee['Employee']['id']), true)
                            ?>">
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
                            </a>
                        </div>
            <?php } ?>
        </div>
        <!-- CONTRATOS VENCIDOS -->
        <div class="css-info_panels">
            <h3>CONTRATOS VENCIDOS</h3>
            <?php foreach($notHired as $employee){ ?>
                <div class="css-employee_box">
                    <a href="<?php
                    echo $this->Html->url(array("controller" => "employees", "action" => "edit", $employee['Employee']['id']), true)
                    ?>">
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
                    </a>
                </div>
            <?php } ?>
        </div>
        <!-- CUMPLEAÑEROS -->
        <div class="css-info_panels">
            <h3><strong>CUMPLEAÑER@(S)</strong></h3>
            <?php
            foreach($birthdayEmployees as $employee){ ?>
                <div class="css-employee_box">
                    <a href="<?php
                    echo $this->Html->url(array("controller" => "employees", "action" => "edit", $employee['Employee']['id']), true)
                    ?>">
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
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</body>