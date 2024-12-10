<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
        $name = "Nurul Izzati Syazleen Binti Razalli";
        $matricNum = "CI220004";
        $course = "FSKTM, Web Technology";
        $yearOfStudy ="3rd year";
        $address ="No 13 jln ttjs 3/1, Taman Tuanku Jaafar";
    ?>
    <table>
    <tr>
        <td>Name: </td>
        <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
        <td>Matric number: </td>
        <td><?php echo "$matricNum"; ?></td>
    </tr>
    <tr>
        <td>Course: </td>
        <td><?php echo "$course"; ?></td>
    </tr>
    <tr>
        <td>Year of study: </td>
        <td><?php echo "$yearOfStudy"; ?></td>
    </tr>
    <tr>
        <td>Address: </td>
        <td><?php echo "$address"; ?></td>
    </tr>

    </table>

</body>
</html>