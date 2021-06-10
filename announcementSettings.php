<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Admin Controls</title>
</head>
<body>
	<div id="inputContainer">
        <div>Announcement Settings</div>
		<form id="addAnnouncement" action="insertData.php" method="POST" enctype="multipart/form-data">
            <div>Add a new announcement:</div>
            <select name="type">
            <option value="1">Promotion</option>
            <option value="2">Special Discount</option>
            <option value="3">Event</option>
            </select>
            <div>
            <input id="Title" name="Title" placeholder="Title" type="text" required>
            </div>
            <div>
            <input id= "Period" name="Period" placeholder="Period" type="text" required>
            </div>
            <div>
            <input id= "Description" name="Description" placeholder="Description" required>
            </div>
            <div>
            <input id = "image" name="image" placeholder = "Add image web link" required>
            </div>
            <div>
            <button type="submit" name = "submitButton">Add Announcement</button>
            </div>
        </form>
        <form id ="deleteAnnouncement" action = "deleteAnnouncement.php" method="POST">
            <div>Delete an announcement</div>
            <div>
            <select name="typeDelete">
                <option value="1">Promotion</option>
                <option value="2">Special Discount</option>
                <option value="3">Event</option>
                </select>
                <input id ="id" name = "id" placeholder = "Insert announcement ID" required>
                <button type="submit" name = "submitDelete">Delete Announcement</button>
            <div>
            </div>
        </form>
</body>
	