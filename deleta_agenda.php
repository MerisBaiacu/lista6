<div align="center">
<?php
include('conexao.php');
$id_agenda = $_GET['id_agenda'];

$sql = "DELETE FROM agenda WHERE id_agenda = $id_agenda";

//echo $sql;

$result = mysqli_query($con,$sql);

if($result)
{
    echo "<h1>Dados deletados com sucesso!</h1><br>";
}else{
    echo "<h1>Erro ao deletar dados: ". mysqli_error($con)."!</h1>";
}

?>
<a href = "listar_agenda.php"><button>Voltar</button></a>
</div>