<?php
// Путь к вашей базе данных SQLite
$dbPath = 'D:\PHP Project\Pet\Pet\database\database.sqlite';

// Открытие базы данных
$db = new SQLite3($dbPath);

// Подготовка SQL-запроса
$stmt = $db->prepare("INSERT INTO books (book_name, author, review, link, image) VALUES (:book_name, :author, :review, :link, :image)");

// Привязка данных к параметрам
$book_name = 'Затерянный мир';
$author = 'Артур Конан Дойл';
$review = 'Роман «Затерянный мир» – это увлекательная история о чудаковатом профессоре Челленджере и его друзьях, открывших настоящий «затерянный мир» в неисследованном районе Южной Америки и обнаруживших в нем живых динозавров. Книга ничуть не устарела и десятилетия спустя читается с таким же интересом, с каким читалась и прежде.
В сборник также вошло продолжение приключений полюбившихся героев – повесть «Отравленный пояс».';
$link = 'https://www.chitai-gorod.ru/product/zateryannyy-mir-2808077';
$image = 'images/Затерянный мир.jpg';



$stmt->bindValue(':book_name', $book_name, SQLITE3_TEXT);
$stmt->bindValue(':author', $author, SQLITE3_TEXT);
$stmt->bindValue(':review', $review, SQLITE3_TEXT);
$stmt->bindValue(':link', $link, SQLITE3_TEXT);
$stmt->bindValue(':image', $image, SQLITE3_TEXT);

// Выполнение запроса
$result = $stmt->execute();

if ($result) {
    echo "Данные успешно добавлены!";
} else {
    echo "Ошибка при добавлении данных: " . $db->lastErrorMsg();
}

// Закрытие соединения
$db->close();
?>
