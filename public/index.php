<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucas R. Kormann | Portfólio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <script src="../assets/js/main.js" defer></script>
</head>

<body>
    <section class="container py-5 text-center">
        <h1 class="fw-bold">Lucas Rafael Kormann</h1>
        <p class="lead">
            Desenvolvedor Júnior | Técnico em Desenvolvimento de Sistemas
        </p>

        <div class="d-flex justify-content-center gap-3 mt-3">
            <a href="https://github.com/lucasrkormann" target="_blank" class="btn btn-dark">GitHub</a>
            <a href="https://www.linkedin.com/in/lucas-r-kormann" target="_blank" class="btn btn-primary">LinkedIn</a>
        </div>
    </section>

    <section class="container py-5">
        <h2 class="text-center mb-4">Habilidades</h2>

        <div class="row justify-content-center g-3">
            <?php
            $skills = ['HTML', 'CSS', 'JavaScript', 'PHP', 'SQL'];
            foreach ($skills as $skill):
            ?>
                <div class="col-6 col-md-2 text-center">
                    <span class="badge bg-secondary p-3 w-100"><?= $skill ?></span>
                </div>
            <?php endforeach; ?>
        </div>

    </section>

    <section class="container py-5 text-center">
        <h2 class="mb-4">Funcionalidades em teste</h2>

        <div>
            <button id="theme-toggle" class="btn btn-outline-secondary mb-3">
                Alternar tema
            </button>
        </div>

        <div>
            <button id="click-button" class="btn btn-outline-primary mb-2">
                Clique aqui
            </button>
        </div>

        <p id="click-counter">
            Cliques no botão: <strong>0</strong>
        </p>

    </section>

    <footer class="text-center py-4 border-top">
        <p class="mb-0">© <?php echo date('Y'); ?> Lucas Kormann</p>
    </footer>

</body>

</html>