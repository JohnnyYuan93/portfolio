<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Johnny's Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.bootcss.com/typed.js/2.0.9/typed.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="grid.php">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Project
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="note.php">Study Notes</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav d-flex flex-row">
                <!-- Icons -->
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="https://www.linkedin.com/in/jiapeng-yuan-b448437b/">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="py-5 bg-image-full" style="background-image: url('img/project.jpg')">
        <div class="row justify-content-center">
            <?php
            $conn = new mysqli("localhost", "root", "", "test");

            $result = $conn->query("SELECT * FROM `projects`; ");

            
            foreach ($result as $row) {
                ?>
                <div class="container my-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h2 class='text-white'>
                                <?php echo $row['name']; ?>
                            </h2>
                            <p class="text-white">
                                <?php echo $row['date']; ?>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h2 class='text-white'>Link</h2>
                            <p class="text-white">
                            Visit website: <a href=<?php echo $row['link']; ?>><?php echo $row['link']; ?></a>
                            </p>

                        </div>
                    </div>
                </div>
                        <?php
            }
            ?>
        </div>
    </div>

    <div class="py-5 bg-image-full">
            <div style="height: 5rem">
                <div class="col-lg-6" style="width: 500px;">
					<h3 class="ct1">Contact:</h3>
					<div class="contact1">
                        <p>Phone: 027 437 3945<br>
                            Email : yuanjiapeng0312@gmail.com <br>
                            </p >
                        </p>
                    </div>
				</div>
			</div>
        </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>