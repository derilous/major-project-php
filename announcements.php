
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Announcements</title>
    <style>
        div {
            font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        }
        div.header {
            font-size: 25px;
            font-weight: 400;
            color: #ff8c00;
            margin: 1rem;
            
        }
        div.announcementContainer{
            margin: 1rem;
        }
        
        div.announcementRow{
            margin: 0.5rem 0;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            height: 200px;
            width: 100%;
        }
        div.announcementHeader{
            font-size: 20px;
            margin: 0.5rem 0;
        }
        div.announcementHero{
            width: 480px;
            height: 200px;
            margin: 0.5rem;
            display: flex;
            justify-content: flex-start;
            /* padding: 0.5rem; */
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
        }
        div.announcementHero:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        img.annPhoto {
            width: 135px;
            height: 200px;
            border-radius: 5px 0 0 5px;
            margin: auto;
            display: block;
            object-fit: cover;
        }
        div.heroText {
            margin: 0.5rem;
            display: flex;
            flex-direction: column;
            padding: 0.5rem;
        }
        div.heroTitle {
            padding: 0.3rem 0.5rem;
            font-size: 18px;
        }
        div.heroPeriod{
            padding:0rem 0.5rem;
            font-size: 13px;
            color: #828282;
        }div.heroDescription{
            padding:0.5rem;
            font-size: 15px;
            color: #000;
        }
    </style>
</head>
<body>
<?php include 'header-footer/header.php';?>
	<div id="inputContainer">
        <div class="header">Announcement board</div>
            <div class = "announcementContainer">
		        <div class="announcementHeader">Promotions</div>
                <div class="announcementRow">
                    <?php
                        $server = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "xtitan-announcement-project";

                        $conn =mysqli_connect ($server , $username , $password , $dbname);
                        $fetchPromotions = "select title, period, description, photo from promotions";
                        $result = mysqli_query($conn,$fetchPromotions);
                        $rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        foreach($rows as $row) {
                            ?> 
                            <div class='announcementHero'>
                                <div>
                                    <img src="<?=$row['photo'];?>" class='annPhoto'>;
                                </div>
                                <div class='heroText'>
                                    <div class='heroTitle'>
                                        30% off today
                                    </div>
                                    <div class='heroPeriod'>
                                        18-20th Oct 2021
                                    </div>
                                    <div class = 'heroDescription'>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
    </div>
            <div>
            
            </div>
</body>
</html>