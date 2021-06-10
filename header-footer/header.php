<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
    <style>
        body,html {
            margin:0;
            padding:0;
        }

        div.titlebarContainer {
            width: 100%;
            margin: 0;
            height: 55px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 8px 6px -6px black;
            font-family: Arial, Helvetica;
        }
        
        div.home {
            color: #FF7F50;
            font-weight: 500;
            font-size: 24px;
            margin: 5px 10px;
            padding: 0.5rem;
            border-radius: 5px;
            width: fit-content;
            font-family: Arial, Helvetica;
        }
        div.options {
            margin: 0.1rem 1rem;
            padding: 0.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        div.home:hover{
            box-shadow: 0 0 11px rgba(33,33,33,.2);
            cursor: pointer;
        }
        img.gear {
            width: 30px;
            height: 30px;
            padding:0.3rem;
            border-radius: 5px;
            margin: 0.5rem 0.5rem;
        }
        img.gear:hover {
            cursor: pointer;
            box-shadow: 0 0 11px rgba(33,33,33,.2);
        }

        div.leftSide {
            display: flex;
            justify-content: flex-start;
        }

        div.button {
            pointer-events: auto;
	        cursor: pointer;
	        background: #e7e7e7;
	        border: none;
	        padding: 0.5rem 2rem;
            border-radius: 5px;
	        margin: 0;
	        font-family: inherit;
	        font-size: inherit;
	        position: relative;
	        display: inline-block;
        }
        div.button:hover {
            box-shadow: 0 8px 6px -6px black;
            transition: 0.2s;
            background: #FF8C00;
        }

        .topnav {
            background-color: transparent;
            overflow: hidden;
            font-family: Arial, Helvetica;
        }


        /* Style the links inside the navigation bar */
        .topnav div {
            float: left;
             color: #FF8C00;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        /* Change the color of links on hover */
        .topnav div:hover {
            background-color: #FF8C00;
            color: black;
        }

        /* Add a color to the active/current link */
        .topnav div.active {
            background-color: #FF8C00;
            color: white;
        }
    </style>
</head>
<body>
    <div class="titlebarContainer">
        <div class="leftSide">
            <div class = "home" onClick = "home()">
                Xtitan Ecomm
            </div>
            <div class="topnav">
	            <div onClick="announcements()" style = "cursor: pointer">Announcements</div>
	            <div >Contact</div>
	            <div >About</div>
	        </div>
        </div>
        <div class="options">
        <img src="https://icon-library.com/images/gear-icon-svg/gear-icon-svg-15.jpg" class="gear" onClick="announcementSettings()">
        <div class= "button" onClick="register()">Log In</div>
        </div>
        
    </div>
    <script>
        function home() {
        window.location.href="/major-project-php/home.php";
        }

        function announcementSettings(){
            window.location.href="/major-project-php/announcementSettings.php";
        }
        function register(){
            window.location.href="/major-project-php/register.php";
        }
        function announcements(){
            window.location.href="/major-project-php/announcements.php";
        }
    </script>
</body>
</html>