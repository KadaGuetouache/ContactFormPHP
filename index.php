<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<link rel="stylesheet" href="/style.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<title>Contact From</title>
	</head>
	<body>
		<main>
			<div id="msg">
				<?php if (isset($_GET["mailsend"])){ ?>
					<div class="notification is-success">
						<button class="delete"></button>	
						Mail send
					</div>
				<?php } ?>
				<?php if (isset($_GET["error"])){ ?>
					<div class="notification is-danger">
						<button class="delete"></button>	
						Seems like theres is an error, please try again later.
					</div>
				<?php } ?>
			</div>
			<form action="contact-form.php" method="post" accept-charset="utf-8">
				<div class="field">
					<label class="label" for="">Name</label>
					<div class="control has-icons-left">
						<input class="input" type="text" placeholder="Full Name" name="name">
						<span class="icon is-small is-left"><i class="fas fa-user"></i></span>
					</div>
				</div>
				<div class="field">
					<label class="label" for="">Subject</label>
					<div class="control">
						<input class="input" type="text" placeholder="Subject" name="subject">
					</div>
				</div>
				<div class="field">
					<label class="label" for="">Email</label>
					<div class="control has-icons-left">
						<input class="input" type="email" placeholder="Email" name="email">
						<span class="icon is-small is-left"><i class="fas fa-envelope"></i></span>
					</div>
				</div>
				<div class="field">
					<label class="label" for="">Message</label>
					<div class="control">
						<textarea class="textarea" name="message" cols="30" rows="10"></textarea>
					</div>
				</div>
				<button class="button is-info is-large is-fullwidth" name="submit" type="submit">Submit</button>
			</form>
		</main>
		<script charset="utf-8">
			var target = document.querySelector(".notification");
			var button = document.querySelector(".delete");
			button.addEventListener("click", function(){
				target.parentNode.removeChild(target);
			});
		</script>
	</body>
</html>
