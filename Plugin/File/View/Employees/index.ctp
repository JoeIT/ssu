<head>
</head>

<body>

<table align="center">
    <tr>
        <th>Nuevos contratados</th>
    </tr>
    <tr>
        <td>
            <?php echo $this->Html->link(
                $this->Html->image('File.Test_emp1.png', array('alt' => 'Empleado 1')),
                array('controller' => 'employees', 'action' => 'edit/1', 'comments' => false),
                array('escape' => false)); ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $this->Html->image('File.Test_emp2.png', array("alt" => "Empleado 2")); ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $this->Html->image('File.Test_emp3.png', array("alt" => "Empleado 2")); ?>
        </td>
    </tr>

</table>

</body>