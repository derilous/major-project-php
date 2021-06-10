<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Admin Controls</title>
    <style>
        body,html {
            margin:0;
            padding:0;
        }

        div.titlebarContainer {
            width: 100%;
            margin: 0;
            height: fit-content;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 8px 6px -6px black;
        }
        
        div.home {
            color: #FF7F50;
            font-weight: 500;
            font-size: 24px;
            margin: 0.5rem 1rem;
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
            width: 25px;
            height: 24px;
            padding:0.5rem;
            border-radius: 5px;
            margin: 0 0.5rem;
        }
        img.gear:hover {
            cursor: pointer;
            box-shadow: 0 0 11px rgba(33,33,33,.2);
        }
        
        div.buttonAuth {
            display:inline-block;
            padding:0.46em 1.6em;
            border:0.1em solid #000000;
            margin:0 0.2em 0.2em 0;
            border-radius:0.12em;
            box-sizing: border-box;
            text-decoration:none;
            font-family:'Roboto',sans-serif;
            font-weight:300;
            color:#000000;
            text-shadow: 0 0.04em 0.04em rgba(0,0,0,0.35);
            background-color:#FF8C00;
            text-align:center;
            transition: all 0.15s;
        }
        div.buttonAuth:hover {
            text-shadow: 0 0 2em rgba(255,255,255,1);
            color:#FFFFFF;
            border-color:#FFFFFF;
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
    </style>
</head>
<body>
    <div class="titlebarContainer">
        <div class = "home" onClick = "home()">
            Xtitan Ecomm
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
    </script>
</body>
</html>