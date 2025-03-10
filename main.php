<?php
    namespace PHP\Modelo;
    require_once ('CadastroLog.php');
    require_once ('Logins.php');
    require_once ('CadastrarLivro.php');
    require_once ('CompraLivro.php');

    use PHP\Modelo\Cadastrar;
    use PHP\Modelo\Logins;
    use PHP\Modelo\CadastrarLivros;
    use PHP\Modelo\CompraLivro;

    $cadastrar1 = new Cadastrar ('Otávio',
                                'Av.Lo',
                                '11986234587', 
                                '03.08.2002',
                                'otaviofidalgo1@gmail.com',
                                '123456');


    $logins1 = new Logins ('otavifidalgo1@gmail.com',
                                '123456');


    $livro1 = new CadastrarLivros (1239,
                                   'Comedia',
                                  'As vindas',
                                   'Manoel Silva',
                                   150);


     $compra1 = new CompraLivro ($cadastrar1,
                                    $livro1,
                                  '5623588954566',
                                   '10.12.2025');                               



    echo "<br><br>".$cadastrar1->imprimir();
    echo "<br><br>".$logins1->imprimir();
    echo "<br><br>".$livro1->imprimir();
    echo "<br><br>".$compra1->imprimir();
    
?>