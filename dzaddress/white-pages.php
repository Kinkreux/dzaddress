<?php
$address_json = file_get_contents(__DIR__."/address.json");
$address_array = json_decode($address_json, true);

?>

<html>
    <head>
        <title>
            Мой телефонный справочник
        </title>
        <style>
            thead {
                font-weight: bold;
            }

            td {
                padding: 5px 5px;
            }
        </style>
    </head>
    <body>
        <h1>
           Мой телефонный справочник
        </h1>
        <h2>
            Добро пожаловать! Снова.
        </h2>
        <table>
            <thead>
                <tr>
                    <td>
                        Фамилия
                    </td>
                    <td>
                        Имя
                    </td>
                    <td>
                        Отчество
                    </td>
                    <td>
                        Адрес
                    </td>
                    <td>
                        Мобильный телефон
                    </td>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($address_array as $item) : ?>
            <tr>
                <td>
                    <?php echo $item['firstName']?>
                <td>
                    <?php echo $item['lastName']?>
                </td>
                <td>
                    <?php echo $item['middleName']?>
                </td>
                <td>
                    <?php echo $item['address']?>
                </td>
                <td>
                    <?php echo $item['phoneNumber']?>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>