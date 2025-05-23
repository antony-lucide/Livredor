<?php
$messages = json_decode(file_get_contents("data/messages.json"), true);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Livre d'Or</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
  <div class="max-w-xl mx-auto bg-white shadow-md p-6 rounded-xl">
    <h1 class="text-3xl font-bold text-blue-600 mb-4">📖 Livre d'Or</h1>
    <a href="write.php" class="text-blue-500 hover:underline">→ Écrire un message</a>

    <?php if (!empty($messages)): ?>
      <ul class="mt-6 space-y-4">
        <?php foreach (array_reverse($messages) as $msg): ?>
          <li class="border-b pb-3">
            <p class="font-semibold"><?= htmlspecialchars($msg['name']) ?> <span class="text-sm text-gray-500"><?= $msg['date'] ?></span></p>
            <p><?= nl2br(htmlspecialchars($msg['message'])) ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
      <p class="mt-4 text-gray-500">Aucun message pour le moment.</p>
    <?php endif; ?>
  </div>
</body>
</html>
