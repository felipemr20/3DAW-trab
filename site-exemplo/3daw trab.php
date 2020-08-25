<!DOCTYPE html>
<html>
<body>

<?php
echo "Ola Mundo!";

class Aluno{
    public $nome;
    function aluno(){
        $this->nome="jose";
    }
}
$aluno1=new aluno();
echo aluno1.nome;

?>

</body>
</html>