<?php
if (isset($_POST['submit'])) {
    $nome_produto = $_POST['name'];
    $orcamento = $_POST['number'];
    $descricao = $_POST['textarea'];
    $nome_img = $_FILES['arquivo']['name'];

    if ((!empty($nome_produto)) && (!empty($orcamento)) && (!empty($descricao)) && (!empty($nome_img))) {
        $insert = fopen("./txt/info.txt", "a");
        fputs($insert, $nome_produto . ";");
        fputs($insert, $orcamento . ";");
        fputs($insert, $descricao . ";");
        fputs($insert, $novoNome . ";" . "\n");

        $lines = file('./txt/info.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $l) {
            list($nome_produto, $orcamento, $descricao, $novoNome) = explode(";", $l);
            $src = 'imagens/' . $novoNome;
            echo '
            <table class="table table-striped table-light" id="tb-result">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Peça</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Nome do arquivo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>' . $nome_produto . '</td>
                        <td>' . $orcamento . '</td>
                        <td>' . $descricao . '</td>
                        <th scope="row" colspan="3">' . $novoNome . '</th>
                    </tr>
                    <tr>
                        <td colspan="6"><img src = "' . $src . '" id="peca-img"/></img></td>
                    </tr>
                </tbody>
            </table>';
        }
    }
}
