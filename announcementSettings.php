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
		<form id="registerForm" action="insertData.php" method="POST" enctype="multipart/form-data">
            <div>Add a new announcement:</div>
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
            <input id = "image" name="image" placeholder = "Add image link" >
            </div>
            <div>
            <button type="submit" name = "upload">Add Announcement</button>
            </div>
        </form>
</body>
	