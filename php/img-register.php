<?php
// Manipulando a imagem
if (isset($_FILES['arquivo']['name']) && $_FILES['arquivo']['error'] == 0) {
    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
    $nome = $_FILES['arquivo']['name'];

    // Filtrando e aceitando apenas imagens
    $extensao = pathinfo($nome, PATHINFO_EXTENSION);
    $extensao = strtolower($extensao);
    if (strstr('.jpg;.jpeg;.gif;.png;.webp', $extensao)) {
        $novoNome = uniqid(time()) . '.' . $extensao;
        $destino = 'imagens/' . $novoNome;

        if (@move_uploaded_file($arquivo_tmp, $destino)) {
        } else echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
    } else echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
}
