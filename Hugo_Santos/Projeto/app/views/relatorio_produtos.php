<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {width: 100%; border-collapse: collcollapse;}
        th, td {border: 1px solid #000; padding: 8px; text-align: laft; }
    </style>
</head>
<body>
    <h1>
        <table>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <h1>Quantidade</h1>
            <h1>Data de Adição</h1>
        </tr>
        <?php foreach ($produtos as $produto): ?>
        <tr>
         <td><?= htmlspecialchars($produto['nome']) ?></td>
         <td><?= htmlspecialchars(number_format($produto['preco'], 2, ',','.')) ?></td>
         <td><?= htmlspecialchars($produto['quantidade']) ?></td>
         <td><?= htmlspecialchars($produto['data_adicao']) ?></td>
        </tr>
        <?php endforeach; ?>
        </table>
    </h1>
</body>
</html>