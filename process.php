<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    
    echo "
    <html>
    <head>
        <title>Registration Successful</title>
    </head>
    <body style='
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        height: 100vh;
        background: linear-gradient(135deg, #f9f9f9,rgb(126, 173, 255),rgb(241, 170, 115));
        display: flex;
        justify-content: center;
        align-items: center;
        color: #333;
    '>
        <div style='
            max-width: 600px;
            width: 90%;
            margin: 20px;
            padding: 20px;
            background: linear-gradient(135deg, #ffffff, #f9f9f9);
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            text-align: center;
            color: #333;
        '>
            <h1 style='
                font-size: 2rem;
                color: #6a0dad;
                margin-bottom: 20px;
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            '>🎉 Registration Successful 🎉</h1>
            <div style='
                background: linear-gradient(90deg, #fff, #f8f9fa);
                padding: 15px;
                border-radius: 10px;
                box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1);
                text-align: left;
                line-height: 1.8;
            '>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Date of Birth:</strong> $dob</p>
                <p><strong>Gender:</strong> $gender</p>
            </div>
        </div>
    </body>
    </html>
    ";
}
?>
