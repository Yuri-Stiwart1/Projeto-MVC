<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da tarefa</title>
</head>
<body>
    <h1>Detalhes das Tarefas</h1>
    <p><strong>ID:</strong> <?php echo htmlspecialchars($task['id'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>Tarefas:</strong> <?php echo htmlspecialchars($task['tarefa'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>Prazo:</strong> <?php echo htmlspecialchars($task['prazo'], ENT_QUOTES, 'UTF-8'); ?></p>
    <a href="taskindex.php">Voltar para lista de Tarefas</a>

    
</body>
</html>