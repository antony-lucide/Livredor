<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $message = trim($_POST['message']);

    if ($name && $message) {
        $file = 'data/messages.json';
        $messages = json_decode(file_get_contents($file), true);
        
        $messages[] = [
            'name' => htmlspecialchars($name),
            'message' => htmlspecialchars($message),
            'date' => date('Y-m-d H:i')
        ];
        
        file_put_contents($file, json_encode($messages, JSON_PRETTY_PRINT));
    }
}

header('Location: index.php');
exit();
