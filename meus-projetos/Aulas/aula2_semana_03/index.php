
    <?php
    require_once 'Pessoa.php';
    require_once 'Funcionario.php';
    require_once 'Empresa.php';
    require_once 'utils.php';

    $empresa01 = new Empresa('Zucchetti', '12.988.479/0001-50');

    $funcionario01 = new Funcionario("Diego", "081.815.397-80", 2000);    
    $funcionario02 = new Funcionario("joao", "021.815.397-90", 3000);
  

    $empresa01->contratar($funcionario01);
    $empresa01->contratar($funcionario02);


    $empresa01->demitir($funcionario01->getId());
    

    ?>
