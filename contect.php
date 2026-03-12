<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contect</title>

    <link rel="icon" type="image/x-icon" href="logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="shoe.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Zalando+Sans+Expanded:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">


    <style>
        .content {
            flex: 1;
            text-align: left;
        }

        .content h1 {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .content h3 {
            font-size: 20px;
        }

        .contact_card {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .contact {
            min-width: 200px;
        }

        .contact_info h1 {
            font-size: 60px;
            margin-top: 50px;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
        }

        .contect_h1 {
            font-size: 40px;
        }

        .contact p {
            font-size: 20px;
            line-height: 1.6;
        }

        .form {
            width: 100%;
            padding: 20px;
            border: 1px solid #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            font-family: "Roboto Flex", system-ui;
            margin-block: 40px;
        }

        .form h1 {
            text-align: center;
            font-size: 40px;
            color: #333;
            margin-bottom: 20px;
        }

        .form label {
            display: block;
            font-size: 16px;
            color: #555;
            margin-bottom: 5px;
        }

        .form input,
        .form textarea,
        .form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            font-family: "Roboto Flex", system-ui;
            box-sizing: border-box;
        }

        .fname {
            display: flex;
        }

        .form input:focus,
        .form textarea:focus,
        .form select:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .fname {
            display: flex;
            width: 100%;
            gap: 20px;
        }

        .lname {
            width: 100%;
        }

        .section {
            width: 50%;
            justify-items: center;
        }

        .form button:hover {
            background-color: #003d7f;
        }
    </style>

</head>

<body>
    <?php include "navbar.php"; ?>

    <div class="Best-seller">
        <div class="Best-seller-text">
            <span style="font-size: 100px; padding-bottom: 20px;">Contact Now</span>
        </div>

        <section id="contact">
            <div class="contact_card">
                <div class="contect_info">
                    <h1 class="contect_h1">Contact Us</h1>
                    <p>If you have any questions or inquiries,<br />
                        feel free to reach out to us!</p>
                    <!-- <img src="contectimg.png" alt="" style="width: 500px; height: 380px;"> -->
                </div>
                <div class="contect_form">
                    <form class="form">
                        <div class="fname">
                            <div class="lname">
                                <label>First name</label>
                                <input placeholder="" />
                            </div>
                            <div class="lname">
                                <label>Last name</label>
                                <input placeholder="" />
                            </div>
                        </div>
                        <div>
                            <label>Email</label>
                            <input placeholder="" />
                        </div>
                        <div>
                            <label>Phone</label>
                            <input placeholder="" />
                        </div>
                        <div>
                            <label>Message</label>
                            <textarea placeholder=""></textarea>
                        </div>
                        <div><button type="submit" class="submit">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </section>

        <?php include "footer.php"; ?>

</body>

</html>