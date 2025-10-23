<?php

$tasks = [
    [
        'title' => 'Comprar víveres',
        'completed' => false,
        'priority' => 'media'
    ],
    [
        'title' => 'Enviar informe mensual',
        'completed' => true,
        'priority' => 'alta'
    ],
    [
        'title' => 'Llamar al proveedor',
        'completed' => false,
        'priority' => 'alta'
    ],
    [
        'title' => 'Regar las plantas',
        'completed' => true,
        'priority' => 'baja'
    ],
    [
        'title' => 'Actualizar el currículum',
        'completed' => false,
        'priority' => 'media'
    ]
];
?>

<?php include '../app/views/header.php'; ?>

<h2>Tareas Pendientes</h2>

<ul>
    <?php foreach ($tasks as $task): ?>
        <?php
            
            $taskClasses = 'task-item';
            
            
            if ($task['completed']) {
                $taskClasses .= ' completed';
            }

            
            switch ($task['priority']) {
                case 'alta':
                    $taskClasses .= ' priority-alta';
                    break;
                case 'media':
                    $taskClasses .= ' priority-media';
                    break;
                case 'baja':
                    $taskClasses .= ' priority-baja';
                    break;
            }
        ?>

        <li class="<?= $taskClasses; ?>">
            <?= htmlspecialchars($task['title']); ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php include '../app/views/footer.php'; ?>
