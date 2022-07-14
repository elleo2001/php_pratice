<?php

    $resultados = '';
    foreach($vagas as $vaga){
        $resultados .= '<tr>
                            <td>'
    }
?>
<main>

    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Nova vaga</button> 
        </a>
    </section>

    <table class="table bg-light mt-3">

        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>

    </table>


</main>