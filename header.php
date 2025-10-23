<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas Pendientes</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007BFF;
            color: white;
            text-align: center;
            padding: 1rem 0;
        }
        main {
            padding: 2rem;
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        ul {
            list-style: none;
            padding: 0;
        }
        .task-item {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border-left: 5px solid transparent;
            background-color: #f9f9f9;
        }
        .task-item.completed {
            text-decoration: line-through;
            color: #999;
            background-color: #e9ecef;
        }
        .priority-alta {
            border-left-color: #dc3545;
        }
        .priority-media {
            border-left-color: #ffc107;
        }
        .priority-baja {
            border-left-color: #28a745;
        }
    </style>
</head>
<body>
    <header>
        <h1>Gestor de Tareas</h1>
    </header>
    <main>
