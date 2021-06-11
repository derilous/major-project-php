<?php include 'header-footer/header.php';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>XTitan E-comm</title>
	<style>
	body{
		margin: 1rem 0.5rem;
		font-family: Apercu Arial,sans-serif;
	}
	div.container{
		width: 100%
	}
	div.HeroC100{
		margin: 1rem 0.5rem;
		display: flex;
		width: 100%;
		justify-content:center;
		align-items: center;
	}
	div.Hero50Text{
		width: 40%;
		margin: 0.5rem;
		display: flex;
		align-items: center;
		justify-content: center;
		transition: 0.2s;
		cursor: pointer;
	}
	div.Hero50{
		width: 40%;
		margin: 0.5rem;
		display: flex;
		align-items: center;
		justify-content: center;
		transition: 0.2s;
		cursor: pointer;
	}

	div.hero25{
		width: 20%;
		margin 0.5rem;
		transition: 0.2s;
		cursor: pointer;
	}
	div.hero75{
		width: 20%;
		margin 0.5rem;
		transition: 0.2s;
	}
	div.Hero50Text:hover{
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		border-color: #000;
	}

	div.hero25:hover{
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	}
	div.hero75:hover{
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	}


	</style>
</head>
<body>
	<div class = "container">
		<div class="HeroC100">
			<div class="Hero50Text" style="background-color: #6e3507; color:#fff; padding: 1rem;">
				Shop Today
			</div>
			<div class="Hero50Text" style="background-color: #1f3d0c; color:#fff; padding: 1rem;">
				MCO with XTitan: Your Stay-At-Home Starter Kit
			</div>
		</div>
	<div>
</body>
</html>


<?php include 'header-footer/footer.php';?>