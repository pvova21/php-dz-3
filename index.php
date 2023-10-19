<?php
$фамилия = "подрезов";
$имя = "владимир";
$отчество = "юрьевич";

// Установим кодировку UTF-8
//mb_internal_encoding("UTF-8");

// Преобразуем первые буквы
$первая_буква_фамилии = mb_strtoupper(mb_substr($фамилия, 0, 1));
$первая_буква_имени = mb_strtoupper(mb_substr($имя, 0, 1));
$первая_буква_отчества = !empty($отчество) ? mb_strtoupper(mb_substr($отчество, 0, 1)) : "";

// Формируем надпись
$fullName = mb_ucfirst($фамилия) . ' ' . mb_ucfirst($имя) . ' ' . mb_ucfirst($отчество);
$surnameAndInitials = "Фамилия и инициалы: " . mb_ucfirst($фамилия) . " $первая_буква_имени.$первая_буква_отчества.";
$fio = $первая_буква_фамилии . $первая_буква_имени . $первая_буква_отчества;

echo "Полное имя: '$fullName'\n";
echo $surnameAndInitials . "\n";
echo "Аббревиатура: '$fio'";

// Преобразовываем в верхний регистр 
function mb_ucfirst($str) {
    return mb_strtoupper(mb_substr($str, 0, 1)) . mb_substr($str, 1);
}

?>