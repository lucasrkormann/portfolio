<?php
include __DIR__ . '/../app/config/db.php';
include __DIR__ . '/../includes/header.php';

if (isset($_POST['enviar'])) {
    $nome = trim($_POST['nome']);
    $mensagem = trim($_POST['mensagem']);

    if (!empty($nome) && !empty($mensagem)) {
        $sql = "INSERT INTO comentarios (nome, mensagem) VALUES (:nome, :mensagem)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':mensagem', $mensagem);
        $stmt->execute();

        header("Location: funcionalidades.php?sucesso=1");
        exit;
    }
}

$comentarios = [];

if (isset($_GET['mostrar'])) {
    $sql = "SELECT nome, mensagem, created_at 
            FROM comentarios 
            ORDER BY created_at DESC";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $comentarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>

<section class="container py-5 text-center">
    <h2 class="mb-4">Funcionalidades para teste</h2>

    <div class="mb-3">
        <button id="theme-toggle" class="btn btn-outline-secondary">
            Alternar tema
        </button>
    </div>

    <div class="mb-2">
        <button id="click-button" class="btn btn-outline-primary">
            Clique aqui
        </button>
    </div>

    <p id="click-counter">
        Cliques no botão: <strong>0</strong>
    </p>
</section>

<section class="container py-5">
    <h2 class="mb-4 text-center">Livro de visitas</h2>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="row justify-content-center">
                <p>As mensagens enviadas serão gravadas no banco de dados e caso clique no botão de exibir mensagens, ele
                    irá ler e exibir as mensagens gravadas no banco de dados.
                </p>
            </div>

            <?php if (isset($_GET['sucesso'])): ?>
                <div class="alert alert-success text-center">
                    Comentário enviado com sucesso!
                </div>
            <?php endif; ?>
            <form method="POST" class="card p-4 shadow-sm">

                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mensagem</label>
                    <textarea name="mensagem" class="form-control" rows="4" required></textarea>
                </div>

                <button type="submit" name="enviar" class="btn btn-primary w-100">
                    Enviar comentário
                </button>

            </form>

            <div class="text-center mt-4">
                <a href="?mostrar=1" class="btn btn-outline-secondary me-2">
                    Mostrar comentários
                </a>

                <a href="funcionalidades.php" class="btn btn-outline-danger">
                    Ocultar comentários
                </a>
            </div>


            <?php if (!empty($comentarios)): ?>
                <div class="mt-4">
                    <?php foreach ($comentarios as $comentario): ?>
                        <div class="card mb-3 shadow-sm">
                            <div class="card-body">
                                <h6 class="card-title mb-1">
                                    <?= htmlspecialchars($comentario['nome']) ?>
                                </h6>
                                <p class="card-text">
                                    <?= nl2br(htmlspecialchars($comentario['mensagem'])) ?>
                                </p>
                                <small class="text-muted">
                                    <?= date('d/m/Y H:i', strtotime($comentario['created_at'])) ?>
                                </small>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>