<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EzSchool</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@200;400;600&display=swap");

        h1 {
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
            color: #674ea7;
        }

        p {
            font-family: 'Montserrat Alternative', sans-serif;
            font-size: 16px;
        }

        .kotak {
            width: 400px;
            margin: 20px auto;
            border-radius: 20px;
            background-color: #858585;
            padding: 20px;
            text-align: center;
        }

        .kotak h3 {
            font-weight: bold;
            color: white;
            font-size: 25px;
            font-family: 'Poppins', sans-serif;
        }

        .kotak h1 {
            font-weight: bold;
            font-size: 50px;
            color: white;
            font-family: 'Montserrat Alternative', sans-serif;
        }

        body {
            background-color: white;
        }

    </style>
</head>

<body>
    <h1>{{ $details['title'] }}</h1>
    <p>Thanks for registering for an account on EzSchool! Before we started, we just need to confirm that is you. Please
        enter the verification code below to get started on EzSchool.</p>
    <p>Sssshh, For the security of your account, do not tell anyone this code.</p>
    <div class="kotak">
        <h3>Code Verification (OTP) :</h3>
        <h1>{{ $details['body'] }}</h1>
    </div>
</body>

</html>
