PHPLeituraNFe
=============

Conjunto de classes para auxilio na leitura do XML das Notas Fiscais Eletrônicas

Como começar?
=============

Simples!

    <?php
    
    require_once 'PHPLeituraNFe.php';
    
    $leitor = new PHPLeituraNFe();
    $leitor->loadXML('nota-fiscal.xml');
    $dados = (array)$leitor;
    
    print_r($leitor);
    
    ?>

Se quiser auxiliar no desenvolvimento, abra a classe principal e ative o debug, mude a constante NFE_DEBUG para true, assim você será notificado de itens que as classes ainda não interpretam e poderá auxiliar.

Ainda com as classes se faz necessário a leitura dos documentos técnicos da SEFAZ, em especial, "LAYOUT", assim você descobre o que cada propriedade é, e pode documentar as propriedades com sua IDE (Eclipse / NetBeans).
