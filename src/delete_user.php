<?php
require('../config/database.php');


$id = $_GET['id'];

$query_delete = "DELETE FROM users WHERE id = $id";
$result_delete = pg_query($conn, $query_delete);

if ($result_delete) {
    echo "Usuario eliminado correctamente";
} else {
    echo "Error al eliminar el usuario: " . pg_last_error($conn);
}


header("Location: list_users.php");
exit;
?>