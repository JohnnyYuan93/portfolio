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
        <!-- <script src="https://cdn.bootcdn.net/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
        <script src="https://cdn.bootcss.com/typed.js/2.0.9/typed.min.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                    aria-expanded="false" aria-label="Toggle navigation">
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="project.php">Project
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="note.php">Study Notes</a>
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
        <header class="py-5 bg-image-full" style="background-image: url('img/background.jpg')">
            <div class="text-center py-5">
                <img class="rounded-circle img-fluid" src="img/j.jpeg" width="200" alt="." />
                <h1 class="text-white">Johnny Yuan</h1>
                <h4 class="text-white-50">Software Develper | Data <span id="typed" ></span></h4>
                    <div id="typed-strings">
                        <p class="text-white-50 mb-0">scientist</p>
                        <p class="text-white-50 mb-0">Analyst</p>
                    </div>

            </div>
        </header>

		<div class="container my-5">
			<div class="row">
				<div class="col-lg-6">
					<h3 class="cv">Education</h2>
					<div>
                        <p class="cv"><strong>Victoria University of Wellington</strong><br>
                            July 2023 - present | Wellington, NZ<br>
                            M.S. in Software development</p >
                            
                            <p class="cv"><strong>Boston University</strong><br>
                            Sep 2015 - Jul 2016 | Boston, MA<br>
                            M.S. in Statistics</p >

                            <p class="cv"><strong>China Agriculture University</strong><br>
                                Sep 2011 - Jul 2015 | Beijing, China<br>
                                B.A. in Economics</p >
                        </p>
                    </div>
				</div>
                <div class="col-lg-6">
					<h3 class="cv">Work Experience</h2>
                    <div>
                        <p class="cv"><strong>Li Auto</strong><br>
                            Dec 2020 - May 2023 | Beijing, China<br>
                            Machine Learning Engineer<br>
                            </p >
                            
                            <p class="cv"><strong>Ai Bank</strong><br>
                            Feb 2018 - Nov 2020 | Beijing, China<br>
                            Data Analyst | Leadership Support Section</p >

                            <p class="cv"><strong>JD Logistics</strong><br>
                                Dec 2017 - Dec 2018 | Beijing, China<br>
                                Data Analyst | Leadership Support Section</p >
                    </div>

				</div>

			</div>
		</div>


        <div class="py-5 bg-image-full" style="background-image: url('img/contact1.jpg')">
            <div style="height: 5rem">
                <div class="col-lg-6" style="width: 500px;">
					<h3 class="ct">Contact:</h3>
					<div class="contact">
                        <p><strong>Phone: 027 437 3945</strong><br>
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