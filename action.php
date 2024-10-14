<?php
require_once("db.php");

$db = new Database();

if (isset($_POST['action']) && $_POST['action'] == 'view') {
    $output = "";
    $data = $db->read();
    if ($db->rowCount() > 0) {
        $output .= ' <table class="table table-striped table-sm table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>FIRST_NAME</th>
                                <th>LAST_NAME</th>
                                <th>E-MAIL</th>
                                <th>PHONE</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>';
        foreach ($data as $row) {
            $output .= '<tr class="text-center text-secondary">
                            <td>'.$row["id"].'</td>
                            <td>'.$row["first_name"].'</td>
                            <td>'.$row["last_name"].'</td>
                            <td>'.$row["email"].'</td>
                            <td>'.$row["phone"].'</td>
                            <td> <a href="" title="View Details" class="text-success"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;
                                        <a href="" title="Edit" class="text-primary"><i class="fas fa-edit fa-lg"></i></a>&nbsp;&nbsp;
                                        <a href="" title="Delete" class="text-danger"><i class="fas fa-trash-alt fa-lg"></i></a>&nbsp;&nbsp;
                            </td></tr>';
        }
        $output.='</tbody></table>';
        echo $output;
    }
    else{
        echo '<h3 class="text-center text-danger">No Users Found</h3>';
    }
}
