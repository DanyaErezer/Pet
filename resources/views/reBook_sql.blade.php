<?php
// Укажите путь к вашей базе данных SQLite
$dbFile = 'D:\PHP Project\Pet\Pet\database\database.sqlite';

try {
    // Создание соединения с базой данных SQLite
    $pdo = new PDO("sqlite:$dbFile");

    // Установка режима ошибок для PDO на исключения
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Подготовка SQL-запроса для обновления данных
    // Например, обновляем столбец 'name' для записи с 'id' равным 1
    $sql = "UPDATE books SET author = :author WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    // Присваиваем значения параметрам
    $author = 'Кристофер Прист';
    $id = 8;

    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':id', $id);

    // Выполнение подготовленного запроса
    if ($stmt->execute()) {
        echo "Данные успешно обновлены.";
    } else {
        echo "Ошибка при обновлении данных.";
    }

} catch (PDOException $e) {
    // Обработка ошибки
    echo "Ошибка подключения: " . $e->getMessage();
}

// Закрытие соединения (по желанию, PDO сам отключается при уничтожении объекта)
$pdo = null;
?>
