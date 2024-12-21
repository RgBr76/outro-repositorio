<?php
$Aluno = $_POST["Aluno"];
$CPFA = $_POST["CPFA"];
$Mae = $_POST["Mae"];
$CPFM = $_POST["CPFM"];
$MMail = $_POST["MMail"];
$telmae = $_POST["telmae"];
$Pai = $_POST["Pai"];
$CPFP = $_POST["CPFP"];
$telpai = $_POST["telpai"];
$PMail = $_POST["PMail"];
$dataA = $_POST["dataA"];
$cidadeN = $_POST["cidadeN"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$dataI = $_POST["dataI"];
$Uescola = $_POST["Uescola"];
$ensinoesc = $_POST["ensinoesc"];
$anocurso = $_POST["anocurso"];




include './conexao.php';

$sql = "INSERT INTO formulario VALUES(null,'$Aluno','$CPFA','$Mae','$CPFM','$MMail','$telmae','$Pai','$CPFP','$telpai','$PMail','$dataA','$cidadeN','$endereco','$numero','$bairro','$cidade','$estado','$dataI','$Uescola','$ensinoesc','$anocurso')";

if (mysqli_query($conexao, $sql)) {
    echo "Gravação realizada com sucesso";
} else {
    echo "Erro ao gravar: " . mysqli_error($conexao);
}

?>