<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./assets/logo2.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Resultados</title>
</head>
<body>
    <nav class="navbar navbar-expand-xl navbar-dark bg-transparent" id="nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.html">
                <img src="./assets/logo1.png" alt="" id="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-xl-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./budget.html">Orçamento</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="d-flex align-content-center align-items-center flex-column" id="home-section">
        <h1>Lista de pedidos</h1><br>
        <div class="d-flex flex-column" id="content">
            <?php include_once './php/img-register.php'; ?>
            <?php include_once './php/register.php'; ?>
        </div>
        <div class="on-dark">
            <br>
            <button class="border-gradient border-gradient-purple"><a href="./budget.html">Voltar</a></button>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="./js/script.js"></script>
</body>
</html>