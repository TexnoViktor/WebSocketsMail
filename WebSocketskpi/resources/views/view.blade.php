<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap CSS -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="../../public/styles.css" />
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
		/>
		<title>Studmail</title>
	</head>
	<body>
		<div class="wrapper">
			<div class="container text-center">
				<div class="row align-items-center justify-content-between">
					<div class="col-2">
						<h1>
							<a href="inbox.blade.php">Studmail</a>
						</h1>
					</div>
					<div class="col-8">
						<div class="input-group">
							<input
								type="search"
								class="form-control rounded"
								placeholder="Search"
								aria-label="Search"
								aria-describedby="search-addon"
							/>
							<button type="button" class="btn btn-outline-primary">
								search
							</button>
						</div>
					</div>
					<div class="col-2">
						<a class="icon-link" href="account.blade.php">
							<i class="bi bi-person-circle"></i>
							Your Account
						</a>
					</div>
				</div>
			</div>
			<div class="container my-4">
				<div class="row align-items-start justify-content-between">
					<div class="col-2">
						<a class="btn btn-primary m-2" href="write.blade.php" role="button"
							><i class="bi bi-pen"></i>Write</a
						>
						<div class="list-group">
							<button
								type="button"
								class="list-group-item list-group-item-action active"
								aria-current="true"
							>
								<i class="bi bi-inbox"></i>
								Inbox
							</button>
							<button
								type="button"
								class="list-group-item list-group-item-action"
							>
								<i class="bi bi-send"></i>
								Sent
							</button>
							<button
								type="button"
								class="list-group-item list-group-item-action"
							>
								<i class="bi bi-exclamation-circle"></i>
								Spam
							</button>
							<button
								type="button"
								class="list-group-item list-group-item-action"
							>
								<i class="bi bi-archive"></i>
								Archive
							</button>
							<button
								type="button"
								class="list-group-item list-group-item-action"
							>
								<i class="bi bi-trash"></i>
								Trash
							</button>
						</div>
					</div>
					<div class="col-10">
						<h1 class="h1">Theme: email caption</h1>
						<h2 class="h2">Sender: maxmusterman@emal.com</h2>
						<p>
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit quas
							esse et doloribus cupiditate, at expedita, dolorem maxime sunt
							officia pariatur deserunt animi, laboriosam natus consequatur
							recusandae exercitationem ipsam. Eligendi pariatur accusantium
							quidem quaerat soluta ea similique quos eos, cupiditate aut
							laboriosam saepe corporis, dolores inventore maxime sunt natus
							sed?
						</p>
						<div class="row align-items-start">
							<button class="col-1 btn-primary m-1" href="write.html">
								Answer
							</button>
							<button class="col-1 btn-secondary m-1">Archive</button>
							<button class="col-1 btn-danger m-1">Delete</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
			crossorigin="anonymous"
		></script>
	</body>
</html>
