<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Form</title>
    </head>
    <body>
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td>{{ $name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{ $email }}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>:</td>
                <td>{{ $phone }}</td>
            </tr>
            <tr>
                <td>Message</td>
                <td>:</td>
                <td>{{ $comment }}</td>
            </tr>
        </table>
    </body>
</html>