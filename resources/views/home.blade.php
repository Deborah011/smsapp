<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lincoln International College</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.6;
            color: #222;
        }

        header {
            background-color: #123c69;
            color: white;
            padding: 20px 8%;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        nav h2 {
            font-size: 22px;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 20px;
            flex-wrap: wrap;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        .hero {
            background: #eaf2f8;
            padding: 100px 8%;
            text-align: center;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 15px;
            color: #123c69;
        }

        .hero p {
            max-width: 650px;
            margin: 0 auto 25px;
        }

        .button {
            display: inline-block;
            padding: 12px 25px;
            background: #123c69;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .about {
            padding: 60px 8%;
            text-align: center;
        }

        .about h2 {
            margin-bottom: 20px;
            color: #123c69;
        }

        .programmes {
            padding: 60px 8%;
            background: #f5f7fa;
            text-align: center;
        }

        .programme-list {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 30px;
        }

        .programme {
            background-color: white;
            padding: 30px;
            width: 250px;
            border-radius: 8px;
            box-shadow: 0 2px 10px #000015;
        }

        footer {
            background-color: #123c69;
            color: white;
            padding: 25px;
            text-align: center;
        }

        @media(max-width:600px) {
            nav {
                flex-direction: column;
            }

            nav ul {
                justify-content: center;
            }

            .hero h1 {
                font-size: 30px;

            }
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <h2>Lincoln School</h2>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Program</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero">
        <h1>Welcome to Lincoln International School</h1>
        <p>We provide quality education, practical knowledge and environment
            that encourages innovations, creativity and academic excellence.
        </p>
        <a href="#" class="button">Explore our programmes</a>

    </section>

    <section class="about" id="about">
        <h2>About our school</h2>
        <p>Lincoln International school is committed to providing quality education
            and preparing student for a successful future.
        </p>
    </section>

    <section class="programmes" id="programmes">
        <h2>Our Programmes</h2>
        <div class="programme-list">
            <div class="programme">
                <h3>Computer Science</h3>
                <p>Learn computing and software development</p>
            </div>
            <div class="programme">
                <h3>Software Engineering</h3>
                <p>Build modern software application</p>
            </div>
            <div class="programme">
                <h3>Cyber Security</h3>
                <p>Learn how to secure digital system</p>
            </div>
        </div>
    </section>

    <footer id="contact">
        <h3>Lincoln International School</h3>
        <p>Email:info@lincolnschool.com</p>
        <p>Phone: +234 000 0000 000</p>
        <p>&copy;2026 Lincoln International School. All rights reserved</p>

    </footer>
</body>

</html>