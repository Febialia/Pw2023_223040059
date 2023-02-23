<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2d php</title>
    <style>
        .kotak1 {
            background-color: #000;
        }

        .kotak2 {
            background-color: #fff;
        }

        .kotak1 .kotak2 {
            height: 30px;
            width: 30px;
        }
    </style>
</head>

<body>
    <table border="1" cellspacing="0" cellpadding="30">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?>

                    <?php $total = $i + $j; ?>

                    <?php if ($total % 2 == 0) : ?>
                        <td class="kotak1"></td>
                    <?php else :  ?>
                        <td class="kotak2"></td>
                    <?php endif ?>

                <?php endfor ?>

            </tr>
        <?php endfor ?>
    </table>

</body>

</html>