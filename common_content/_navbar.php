<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <title>ePaper</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
    /* CSS Reset */

* {
    margin: 0;
    padding: 0;
}

html {
    scroll-behavior: smooth;
}


/* CSS Variables */

 :root {
    --navbar-height: 59px;
}


/* Navigation Bar: language */

.first-navbar {
    display: flex;
    align-items: center;
    top: 0px;
}

.first-navbar ul li a {
    color: white;
    display: block;
    padding: 3px 22px;
    border-radius: 20px;
    text-decoration: none;
    color: black;
}

.first-navbar ul {
    display: flex;
}

.first-navbar ul li {
    list-style: none;
    font-size: 1.3rem;
    display: inline;
}

.first-navbar .f-wrapper {
    float: right;
    width: auto;
    position: absolute;
    right: 0;
}

.first-navbar .follow-icon a {
    display: inline-block;
    position: relative;
    font-size: 23px;
    width: 39px;
    text-decoration: none;
}

.first-navbar h3 {
    font-size: 21px;
    justify-content: end;
    align-items: end;
}

.first-navbar::before {
    content: "";
    background-color: #ada3a3;
    position: absolute;
    top: 0px;
    left: 0px;
    height: 100%;
    width: 100%;
    z-index: -1;
    opacity: 1.7;
}

.H-title::before {
    background-color: white;
}

.H-title {
    justify-content: center;
    display: flex;
    font-family: 'Playfair Display', serif;
    font-size: x-large;
}

.first-div {
    background: rgb(193 193 193);
    text-align: center;
    padding: 5px 305px;
}

.first-div ul li a:hover {
    color: black;
    background-color: white;
}

.Filter {
    position: sticky;
    z-index: 2;
}

.Filter::before {
    background-color: #000000;
}

.Filter ul li a {
    font-size: 15px;
    font-weight: 600;
    /* line-height: 26px; */
    padding: 9px 8px 0px;
    color: rgb(255 255 255);
}

.Filter ul {
    position: relative;
}

.first-div li a strong {
    display: none;
    z-index: 999999;
    background: #414141;
    height: 22px;
    font-size: 11px;
    color: #fff;
    padding: 5px 10px;
    border-radius: 3px;
    position: absolute;
    top: 30px;
    left: -6px;
}

.first-div li a strong :hover {
    visibility: visible;
}

.l-div ul {
    display: inline-block;
    list-style: none;
}

.l-div ul li {
    display: inline-block;
    margin-right: 70px;
}

.l-div ul li a {
    text-decoration: none;
    color: white;
}

.l-div ul li button {
    color: white;
    outline: none;
    border: none;
    background: transparent;
    cursor: pointer;
    width: auto;
    font-size: 15px;
    font-weight: 600;
}

.l-div nav ul li button:hover {
    color: aqua;
}

.T-date .date-update {
    justify-content: center;
    align-items: center;
    display: flex;
    font-size: 1.3rem;
}

.T-date {
    border-bottom: 1px solid #dfdfdf;
}


/* content section */

#content-wrapper {
    display: flex;
    max-width: 1100px;
    margin: 15px auto;
    padding: 0px;
    gap: 0;
    width: auto;
    max-width: 1146px;
}


/* left navbar section */

.hdgTexure::before {
    content: "";
    display: block;
    top: -4px;
}

.hdgTexure::after {
    content: "";
    display: block;
    top: 2px;
}

.hd-lines .hd-lines::before .hd-lines::after {
    content: "";
    display: block;
    top: -4px;
    position: absolute;
    top: 24px;
    left: 0;
    height: 2px;
    width: 100%;
    border-top: solid 1px #dbdbdb;
}

.hd-lines {
    position: absolute;
    top: 19px;
    left: 0;
    height: 2px;
    width: 100%;
    border-top: solid 1px #dbdbdb;
}

.leftnews {
    display: block;
    width: 210px;
    box-shadow: none;
    background-color: transparent;
    top: 90px;
    margin: 0px 15px;
}

.Lfnews {
    display: block;
    background: white;
    margin-bottom: 20px;
    box-shadow: 0 0 6px 0 rgb(121 121 121 / 16%);
}

.Lfnews .fheading {
    font-size: 16px;
    padding-bottom: 0;
    margin-bottom: 5px;
    position: relative;
}

.fheading {
    font-family: "blacker_pro_displayheavy";
    text-align: center;
    font-size: 20px;
    font-weight: normal;
    padding: 10px 0px;
}

h2,
h3 {
    color: black;
}

h2 a,
h3 a {
    color: #000000;
    text-decoration: none;
}

.Lfnews .row-news:first-child {
    padding: 0;
    border-top: none;
}

.Lfnews .row-news {
    padding: 12px 3px 12px;
    margin: 0 10px;
    border-bottom: 2px solid brown;
}

.head-style {
    text-transform: uppercase;
    position: relative;
    z-index: 1;
    background-color: #fff;
    padding: 0 1px;
    margin-left: 10px;
    margin-right: 10px;
    display: initial;
    vertical-align: text-top;
}

.first-Nheading {
    margin-top: 20px;
    /* padding: 0px 0px; */
    font-size: 16px;
}


/* main container */

.main-container {
    padding: 0px;
    display: block;
    background: #fcfcfc;
    position: relative;
    margin: 0px 20px;
    width: 522px;
}

.content-holder {
    margin-bottom: 16px;
    padding: 16px 16px 0;
    box-shadow: 0 0 6px 0 rgb(121 121 121 / 16%);
    background-color: #fff;
    border-radius: 4px;
    margin: 9px 10px 16px;
}

.main-container img {
    width: 100%;
    display: block;
    position: absolute;
}

.content-holder figure span {
    overflow: hidden;
    position: relative;
    padding-bottom: 56.3%;
    display: block;
}


/* advertisement */

.r-content {
    margin: 0px 4px;
    padding: 0px 7px 0px 0px;
}

.r-content a img {
    width: 97%;
    margin: 0px 9px;
    height: 343px;
}

.radvertise {
    display: block;
    top: 90px;
    margin: 0px -2px;
    width: 30%;
    margin: 0px;
    padding: 0px 17px 0px;
}

.right-div {
    background-color: #e5e5e5;
    margin-bottom: 20px;
    overflow: hidden;
}

.ad-head::before {
    content: "Advertisement";
    display: block;
    color: #777;
    font-size: 14px;
    line-height: 16px;
    font-family: "Lato", sans-serif;
    margin-bottom: 2px;
}

.ad-head {
    text-align: center;
    padding-top: 10px;
    animation: change 10s infinite ease-in-out;
}

@keyframes change {
    0% {}
}

.t-news {
    width: 101%;
    margin: 0;
}


/* Footer */

.footer {
    border-top: 2px solid black;
    margin-top: 32px;
    padding: 24px 0 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.f-wrapper ul li {
    display: flex;
    padding: 0px 57px 0px;
}

.f-wrapper li a {
    font-size: 18px;
    font-weight: 600;
    line-height: 26px;
    padding: 9px 5px 0;
    text-decoration: none;
    color: black;
}

.follow-icon a {
    display: inline-block;
    margin: 11px 15px 0px 0px;
    position: relative;
    font-size: 28px;
    width: 50px;
    text-decoration: none;
}

.fa-instagram {
    color: #d3746b;
}

.fa-twitter {
    color: #453bde;
}

.copy-right {
    text-align: center;
    border-top: 1px solid black;
    width: 100%;
}
</style>


<body style="overflow: initial;">
    <div class="full-body">
        <nav class="first-navbar language">
            <div class="first-div">
                <ul>
                    <li class="item click-event">
                        <a href="# ">English
                            <strong>English</strong>
                        </a>

                    </li>
                    <li class="item click-event">
                        <a href="# ">Hindi
                            <strong>Hindi</strong>
                        </a>

                    </li>
                    <li class="item click-event">
                        <a href="# ">Marathi
                            <strong>Marathi</strong>
                        </a>

                    </li>
                    <li class="item click-event">
                        <a href="# ">தமிழ்
                            <strong>Tamil</strong>
                        </a>

                    </li>
                    <li class="item click-event">
                        <a href="# ">বাংলা
                            <strong>Bangla</strong>
                        </a>

                    </li>
                    <li class="item click-event">
                        <a href="# ">മലയാളം
                            <strong>Malyalam</strong>
                        </a>

                    </li>
                </ul>
            </div>
        </nav>
        <nav class="first-navbar Filter first-div">
            <div class="m-div">
                <ul>
                    <li class="item"><a href="#home">Home</a></li>
                    <li class="item"><a href="#State&City">State&City</a></li>
                    <li class="item"><a href="#World">World</a></li>
                    <li class="item"><a href="#Sports">Sports</a></li>
                    <li class="item"><a href="#Entertainment">Entertainment</a></li>
                    <li class="item"><a href="#Lifestyle">Lifestyle</a></li>
                    <li class="item"><a href="#Live">Live</a></li>
                    <li class="item"><a href="#publishing">publishing</a></li>
                    <li class="item"><a href="#EPaper">EPaper</a></li>

                </ul>
            </div>
            <div class="l-div f-wrapper">
                <ul>
                    <li>
                        <a href="../php/login.html">
                            <button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button>
                        </a>

                    </li>

                </ul>
            </div>

        </nav>

    </div>
    </div>
    <span>
        <!-- <nav class="first-navbar H-title">
             <div id="logo">
                    <img src="../img/logo.jpg" alt="MyIndia.com">
                 </div> 
            <div>
                <center>
                    <h1>The Daily Hub</h1>
                </center>
            </div>
            <div class="f-wrapper follow">


                <div class="follow-icon">
                    <h3>Follow us on :</h3> 
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>

                </div>
            </div>
        </nav>
    </span>
    <div class="T-date">
        <span class="date-update">Tue,8 Feb</span>
    </div> -->
</body> 

</html>