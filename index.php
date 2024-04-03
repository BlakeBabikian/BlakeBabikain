<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blake Babikian CS Homepage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="icon" type="image/ico" href="images/favicon.ico"/>
    <style>
        body,h1,h2,h3,h4,h6 {
            font-family: "Karma", sans-serif;
            color: rgb(3, 29, 68);
        }
        p,h5 {
            font-family: "Karma", sans-serif;
            color: rgb(18, 22, 25);
        }
        .w3-bar-block .w3-bar-item {padding:20px}
        html {
            scroll-behavior: smooth;
        }
        h3 {
            font-weight: bolder;
        }
        li {
            font-size: 16px;
            text-align: right;
        }
        hr {
            border: none;
            height: 2px;
            background-color: rgb(255, 149, 5);
        }
    </style>
</head>
<body style="background-color: rgb(230, 240, 255)">

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()"
       class="w3-bar-item w3-button">Close Menu</a>
    <a href="#SchoolProject" onclick="w3_close()" class="w3-bar-item w3-button">School Code</a>
    <a href="#PersonalProject" onclick="w3_close()" class="w3-bar-item w3-button">Personal Project</a>
</nav>

<!-- Top menu -->
<div class="w3-top" style="background-color: rgb(255, 149, 5)" id="navbar">
    <div class="w3-xlarge" style="max-width:1200px;margin:auto; ">
        <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()" style="margin-left: 10px">☰ Menu</div>
        <div class="w3-right w3-padding-16" style="margin-right: 30px">Blake Babikian</div>
        <div class="w3-center w3-padding-16">My Code</div>
    </div>
</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding w3-center" style="max-width:1200px;margin-top:80px">
    <div class="w3-image">
        <img src="images/homePage/homePicture.jpeg" alt="Picture of rice patty Bali Indonesia" style="width:100%">
        <p class="w3-left">This is a picture I took of rice fields in Bali Indonesia, May 2023.</p>
    </div>
    <div class="w3-row-padding w3-padding-16 w3-center">
        <h3 class="w3-center">About The Webpage</h3>
        <hr>
        <p>Hey there! I'm currently a senior at Bentley University, where I'm majoring in Computer Information Systems
            and minoring in Economics. This webpage is a hub to showcase for my code in CS 380, the Multitiered
            Application Development course. Here, I've linked some of the course work I've worked on during the
            semester. You'll also find links to some of my work from other classes. I've thrown in a personal project
            that I'm pretty proud of. So, take a look around and get to know my coding journey and coursework! P.S. I
            don't actually talk like that, I had ChatGPT write me a bio, and even this I had to tone back haha.</p>
    </div>
    <!-- First Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center">
        <h3 class="w3-center">CS 380 Code</h3>
        <hr>
        <div class="w3-third">
            <a href="tech_support/index.php" target="_blank">
                <img src="images/homePage/techSupport.png" alt="Tech support logo" style="width:100%"></a>
            <h3>Tech Support Homepage</h3>
            <h5>Assignment 3</h5>
            <p>PHP & SQL web app</p>
        </div>
        <div class="w3-third">
            <a href="https://github.com/BlakeBabikian/CS380Assign3" target="_blank">
                <img src="images/homePage/github.png" alt="Github logo" style="width:100%"></a>
            <h3>Tech Support Github</h3>
            <h5>Assignment 3</h5>
            <p>PHP & SQL web app</p>
        </div>
        <div class="w3-third">
            <a href="person.php"><img src="images/homePage/students.png" alt="Picture of students" style="width:100%"></a>
            <h3>Part 2 People</h3>
            <h5>Assignment 2</h5>
            <p>PHP HTML SQL Table</p>
        </div>
    </div>
    <br>
    <br>
    <div class="w3-row-padding w3-padding-16 w3-center">
        <div class="w3-third">
            <a href="census.php"><img src="images/homePage/babyName.png" alt="Picture of name tag" style="width:100%"></a>
            <h3>Part 3 Census</h3>
            <h5>Assignment 2</h5>
            <p>PHP, text file, arrays</p>
        </div>
        <div class="w3-third">
            <a href="products.php">
                <img src="images/homePage/hardware.png" alt="Picture of hardware store" style="width:100%"></a>
            <h3>Part 4 Products</h3>
            <h5>Assignment 2</h5>
            <p>PHP HTML SQL Table</p>
        </div>
        <div class="w3-third">
            <a href="/Assign1/index.html" target="_blank">
                <img src="images/homePage/html.png" alt="HTML logo" style="width:100%"></a>
            <h3>My First Homepage</h3>
            <h5>Assignment 1</h5>
            <p>Basic html, and CSS</p>
        </div>
    </div>
    <div id="SchoolProject" style="height: 50px"></div>
    <div class="w3-row-padding w3-padding-16 w3-center">
        <h3 class="w3-center">Other Course Work</h3>
        <hr>
        <div class="w3-quarter">
            <a href="https://web.bentley.edu/bbabikian/index.html" target="_blank">
                <img src="images/homePage/html.png" alt="HTML logo" style="width:100%"></a>
            <h3>My First Homepage</h3>
            <h5>Assignment 1</h5>
            <p>Basic html, and CSS</p>
        </div>
        <div class="w3-quarter">
            <a href="https://blakebabikian-bbabikian-final-t38xsn.streamlit.app" target="_blank">
                <img src="images/homePage/ufo.png" alt="Image of UFO" style="width:100%"></a>
            <h3>CS 230 Final</h3>
            <h5>Python</h5>
            <p>Python webpage built with Streamlit</p>
        </div>
        <div class="w3-quarter">
            <a href="https://web.bentley.edu/bbabikian/pro.html" target="_blank">
                <img src="images/homePage/electric.png" alt="Image of electricity" style="width:100%"></a>
            <h3>CS 213 Final</h3>
            <h5>World Wide Web</h5>
            <p>Complete company website</p>
        </div>
        <div class="w3-quarter">
            <a href="files/Midterm.pdf" target="_blank">
                <img src="images/homePage/creditCardFraud.png" alt="Fraud" style="width:100%"></a>
            <h3>MA 346 Midterm</h3>
            <h5>Data Science</h5>
            <p>Credit Card Fraud Report</p>
        </div>
    </div>
    <div id="PersonalProject"></div>
    <br>
    <br>
    <br>
    <!-- About Section -->
    <div class="w3-row-padding w3-padding-16 w3-center">
        <h3 class="w3-center">Hash Wallet</h3>
        <hr>
        <p>The project involves the development of an ATM/banking app, akin to Venmo, with four Python files: wsgi.py
            for session management, backEnd.py for the Flask app, encrypt.py for encryption and database.py for database
            functions. It utilizes a Postgres database through SQLAlchemy, featuring four main chains: AccountChain for
            accounts and balances, TransactionChain to record all transactions, DepositChain to track deposits, and
            SessionChain to log logins. The data security strategy involves hashing transaction data (sender_id,
            receiver_id, amount, date, time, old_hash, new_hash) to ensure data integrity. An audit process validates
            data by comparing it to the hash and verifying that new hashes match the next chain link's old hash. This
            design ensures data integrity and security within the banking app.</p>
        <div class="w3-third">
            <a href="https://www.hashwallet.digital" target="_blank">
                <img src="images/homePage/computer.png" alt="Image of computer" style="width:100%"></a>
            <h3>Web Application</h3>
            <h5>Hash-Wallet</h5>
            <p>See the app</p>
        </div>
        <div class="w3-third">
            <a href="https://github.com/BlakeBabikian/Hash_Wallet" target="_blank">
                <img src="images/homePage/github.png" alt="Github logo" style="width:100%"></a>
            <h3>Git Repository</h3>
            <h5>Hash-Wallet</h5>
            <p>See the code</p>
        </div>
        <div class="w3-third">
            <a href="files/Hash-Wallet.pdf" target="_blank">
                <img src="images/homePage/gears.png" alt="Image of gear" style="width:100%"></a>
            <h3>App Mechanics</h3>
            <h5>Hash-Wallet</h5>
            <p>See how the apps works</p>
        </div>
    </div>
    <hr>

    <!-- Footer -->
    <footer>
        <div class="w3-left w3-serif">
            <h3 style="text-align: left; padding-left: 15px">Contact</h3>
            <ul style="list-style-type: none;">
                <li style="text-align: left">Blake Babikian</li>
                <Li style="text-align: left">BlakeBabikian@gmail.com</Li>
                <li style="text-align: left">+1 (978) 460 7731</li>
                <li style="text-align: left"><a href="https://www.linkedin.com/in/blake-babikian-730961207"
                                                target="_blank">LinkedIn</a></li>
            </ul>
        </div>
    </footer>

    <!-- End page content -->
</div>

<script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }

    let prevScrollPos = window.scrollY;
    const navbar = document.getElementById("navbar");

    window.addEventListener("scroll", () => {
        const currentScrollPos = window.scrollY;
        if (prevScrollPos > currentScrollPos) {
            // User is scrolling up; show the navbar
            navbar.style.top = "0";
        } else {
            // User is scrolling down; hide the navbar
            navbar.style.top = `-${navbar.offsetHeight}px`;
        }
        prevScrollPos = currentScrollPos;
    });

</script>

</body>
</html>
