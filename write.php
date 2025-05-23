<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Écrire un message</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
  <div class="max-w-xl mx-auto bg-white shadow-md p-6 rounded-xl">
    <h1 class="text-2xl font-bold text-blue-600 mb-4">Laisser un message</h1>
    <form action="save.php" method="post" class="space-y-4">
      <input name="name" type="text" required placeholder="Votre nom" class="w-full p-2 border rounded" />
      <textarea name="message" required placeholder="Votre message..." class="w-full p-2 border rounded h-32"></textarea>
      <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Envoyer</button>
    </form>
  </div>
</body>
</html>
