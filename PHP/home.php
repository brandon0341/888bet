<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/EXAM/CSS/home.css">
</head>
<body>
    <div class="header">
        <img class="hambur-img" src="/EXAM/PIC/ham.png" alt="">
        <div class="hambur">
            <ul class="subham">
                <li><a href="https://bet88.ph/en/casino/page/2/live-dealer">Live</a></li>
                <li><a href="https://bet88.ph/en/sportsbook">Sports</a></li>
                <li><a href="https://bet88.ph/en/casino">Casino</a></li>
                <li><a href="https://ggbetpromo.com/gg_bonus100/index.php?ref=gg_w29201c201241l15509p1231_">Esports</a></li>
                <li><a href="https://bet88.ph/en/casino/page/2/live-dealer">Poker</a></li>
            </ul>
            <!-- Modify the link to include the username -->
            <?php
            session_start();
            include("database.php");
            
            if(isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                $sql = "SELECT firstname, lastname FROM register WHERE username = '$username'";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $firstname = $row["firstname"];
                    $lastname = $row["lastname"];
                    // Display the "Profile" link with the username
                    echo '<a href="/EXAM/PHP/prof.php">' . $firstname . ' ' . $lastname . '</a>';
                }
            }
            ?>
            <img class="pic" src="/EXAM/PIC/pic.webp" alt=""></a>
        </div>
        <div class="logo">888 BET</div>
        <div class="designs">
        <a href="https://bet88.ph/en/casino/page/2/live-dealer">Live</a>
        <a href="https://bet88.ph/en/sportsbook">Sports</a>
        <a href="https://bet88.ph/en/casino">Casino</a>
        <a href="https://ggbetpromo.com/gg_bonus100/index.php?ref=gg_w29201c201241l15509p1231_">Esports</a>
        <a href="https://bet88.ph/en/casino/page/2/live-dealer">Poker</a>
        </div>
    </div>

    <div id="slider">
        <input type="radio" name="slider" id="s1" checked />
        <input type="radio" name="slider" id="s2" />
        <input type="radio" name="slider" id="s3" />
        <input type="radio" name="slider" id="s4" />
        <input type="radio" name="slider" id="s5" />
        <label for="s1" id="slide1">
            <img src="/Exam/PIC/img1.jpg" alt="">
        </label>
        <label for="s2" id="slide2">
            <img src="/EXAM/PIC/img2.jpg" alt="">
        </label>
        <label for="s3" id="slide3">
            <img src="/EXAM/PIC/img3.webp" alt="">
        </label>
        <label for="s4" id="slide4">
            <img src="/EXAM/PIC/img4.jpg" alt="">
        </label>
        <label for="s5" id="slide5">
            <img src="/EXAM/PIC/img5.jpg" alt="">
        </label>
    </div>

    <script>
        document.querySelector('.hambur-img').addEventListener('click', function() {
            document.querySelector('.hambur').classList.toggle('show-hambur');
        });
        document.querySelector('.pic').addEventListener('click', function() {
            document.querySelector('.prof').classList.toggle('show-prof');
        });

        const logo = document.querySelector('.logo');
logo.classList.toggle('logo-behind');
    </script>
</body>
</html>
