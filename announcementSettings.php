<?php include 'header-footer/header.php';?>
<?php include 'deleteAnnouncement.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Admin Controls</title>
        <link rel="stylesheet" type="text/css" href="assets/css/announcementSettings.css">
        <!-- Accessing stylesheet for information -->
</head>
<body>

 <div id="background">
        <div id="announcementTitle">
            <div id="addContainer">
            	<div id="inputContainer">
                    <h2>Announcement Settings</h2>
            		<form id="addAnnouncement" action="insertData.php" method="POST" enctype="multipart/form-data">
                        <label>Post Announcement</label>
                            <select name="type">
                                <option value="1">Promotion</option>
                                <option value="2">Special Discount</option>
                                <option value="3">Event</option>
                                <!-- value selects which table to add to -->
                            </select>
                        <div>
                            <input id="Title" name="Title" placeholder="Title" type="text" required>
                        </div>
                        <div>
                            <input id= "Period" name="Period" placeholder="Date" type="text" required>
                        </div>
                        <div>
                            <input id= "Description" name="Description" placeholder="Description" type="text" required>
                        </div>
                        <div>
                            <input id = "image" name="image" placeholder = "Image Link" type="text" required>
                        </div>
                        <div>
                             <button type="submit" name = "submitButton">ADD</button>
                             <!-- connecting to database and creating new unique accouncement -->
                        </div>
                    </form>
                    <p>
                <div id="deleteContainer">
                    <form id ="deleteAnnouncement" action = "deleteAnnouncement.php" method="POST">
                        <label>Remove Announcement</label>
                        <div>
                            <select name="typeDelete">
                                <option value="1">Promotion</option>
                                <option value="2">Special Discount</option>
                                <option value="3">Event</option>
                            </select>
                            <br>
                            <input id ="id" name = "id" placeholder = "Announcement ID" type="text" required>
                            <button type="submit" name = "submitDelete">REMOVE</button>
                        </div>
                        <!-- delete announcement form -->
                </div>
                </div>
        </div>
</div>
        </form>
</body>
</html>


<?php include 'header-footer/footer.php';?>