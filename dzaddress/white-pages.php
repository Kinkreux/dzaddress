<?php
$address_json = file_get_contents(__DIR__."/address.json");
$address_array = json_decode($address_json, true);

?>

<html>
    <head>
        <title>
            My Crazy White Pages
        </title>
    </head>
    <body>
        <h1>
           Welcome to My Crazy White Pages!
        </h1>
        <table>
            <thead>
                <tr>
                    <td>
                        First name
                    </td>
                    <td>
                        Last name
                    </td>
                    <td>
                        Full address with postal code
                    </td>
                    <td>
                        Mobile phone number
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