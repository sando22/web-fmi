<!DOCTYPE html>
<html>
<body>

<?php
const PAGE_ID = 'page';

require "HomeworkTwoUtils.php";
$data = [
    'webgl' => [
        'title' => 'Компютърна графика с WebGL',
        'description' => 'Description for Webgl',
        'lecturer' => 'доц. П. Бойчев',
    ],
    'go' => [
        'title' => 'Програмиране с Go',
        'description' => 'description for Go',
        'lecturer' => 'Николай Бачийски',
    ]
];


if ($_GET) {
    echo HomeworkTwoUtils::showNav($data, $_GET[PAGE_ID]);
    echo HomeworkTwoUtils::showPage($data, $_GET[PAGE_ID]);
} else {
    echo HomeworkTwoUtils::showNav($data, null);
}
?>
</body>
</html>