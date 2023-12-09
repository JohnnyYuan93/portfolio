<?php
$conn = new mysqli("localhost", "root", "", "test");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the note from the POST data
    $name = $_POST['name'];
    $note = $_POST['note'];
    $category = $_POST['category'];
    $current_date = date("Y-m-d H:i:s");

    if (!empty($note)) {
        $query = $conn->prepare("INSERT INTO `notes` (`name`, `category`, `content`, `date`) VALUES ( ?, ?, ?,?); ");
        $query->bind_param("ssss", $name, $category, $note, $current_date);
        $query->execute();
    } else {
        echo "<script>alert('Error: Note cannot be empty!')</script>";
    }
}
?>

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
    <link href="css/note.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.bootcss.com/typed.js/2.0.9/typed.min.js"></script>
    <style>
        body {
            background-image: url('img/contact1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
    </style>

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
                        <a class="nav-link" href="project.php">Project
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Study Notes</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="https://www.linkedin.com/in/jiapeng-yuan-b448437b/">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4 content">
        <h1>Study Notes</h1>
        <form method="post">
            <select class="form-select mb-2 ml-3" aria-label="Default select example" name="category">
                <option selected>Select Category</option>
                <option value="JAVA">JAVA</option>
                <option value="HTML/CSS">HTML/CSS</option>
                <option value="Java Script">Java Script</option>
            </select>

            <div class="col-4 my-1">
                <input type="text" class="form-control mb-2 ml-0" id="nameInput" placeholder="Note's Name" name="name">
            </div>

            <div class="form-group">
                <!-- <label for="studyNotes">Add Study Notes:</label> -->
                <textarea class="form-control ml-3" id="studyNotes" rows="6" name="note"
                    placeholder="Type your study notes here..."></textarea>
            </div>

            <button type="submit" class="btn btn-info ml-3" id="sub_note">Add Note</button>
        </form>

    </div>

    <div class="container">
        <h3 class='content1'>Recent Notes</h3>
        <div class="row">
            <?php
            $result = $conn->query("SELECT * FROM `notes` order by date desc limit 3; ");
            foreach ($result as $row) {
                if ($row['category'] == 'JAVA') {
                    $Colorr = 'blue';
                } elseif ($row['category'] == 'HTML/CSS') {
                    $Colorr = 'green';
                } elseif ($row['category'] == 'Java Script') {
                    $Colorr = 'yellow';
                } else {
                    $Colorr = 'brown';
                }
                ?>
                <div class="col-md-4 col-sm-6 content-card">
                    <div>
                        <div class="card card-just-text" data-color=<?php echo $Colorr ?> data-radius="none">
                            <div class="content">
                                <h6 class="category">
                                    <?php echo $row['category']; ?>
                                </h6>
                                <h4 class="title">
                                    <?php echo $row['name']; ?>
                                </h4>
                                <p class="description">
                                    <?php echo $row['content']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>