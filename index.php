<?php
// Установим кодировку UTF-8
mb_internal_encoding("UTF-8");

// Ввод данных с консоли
$surname = readline("Введите фамилию: ");
$name = readline("Введите имя: ");
$patronymic = readline("Введите отчество: ");

// Преобразуем первые буквы
$первая_буква_фамилии = mb_strtoupper(mb_substr($surname, 0, 1));
$первая_буква_имени = mb_strtoupper(mb_substr($name, 0, 1));
$первая_буква_отчества = !empty($patronymic) ? mb_strtoupper(mb_substr($patronymic, 0, 1)) : "";

// Формируем надпись
$fullName = mb_ucfirst($surname) . ' ' . mb_ucfirst($name) . ' ' . mb_ucfirst($patronymic);
$surnameAndInitials = "Фамилия и инициалы: " . mb_ucfirst($surname) . " $первая_буква_имени.$первая_буква_отчества.";
$fio = $первая_буква_фамилии . $первая_буква_имени . $первая_буква_отчества;

echo "Полное имя: '$fullName'\n";
echo $surnameAndInitials . "\n";
echo "Аббревиатура: '$fio'";

// Преобразовываем в верхний регистр 
function mb_ucfirst($str) {
    return mb_strtoupper(mb_substr($str, 0, 1)) . mb_substr($str, 1);
}
?>
