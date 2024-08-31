<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include("includes/header.php");
    ?>
    <title>Harsh Kumar Singh</title>
</head>
<body>
    <?php 
        include("includes/navbar-index.php");
    ?>
    <section class="bg-dark text-light text-center py-5">
        <div class="container">
            <div class="d-flex">
                <div>
                    <h1><span class="text-accent-colour">Harsh </span>Kumar Singh</h1>
                    <p>I am a passionate and dedicated web developer with a strong foundation in HTML,CSS,JS,JSX,JAVA,Python. I have a strong background in web development and have experience in creating responsive and user-friendly websites.</p><br>
                    <p>I am skilled in Cybersecurity and have experience in penetration testing and network security. It's been nearly a year since I started my journey in web development, and I am excited to continue my learning and growth as a Full stack Software Engineer.</p>
                    <a class="btn btn-accent" href="https://linkedin.com/in/engi-harsh">Connect Me</a>
                    <a class="m-2 btn btn-light" href="mailto:hello@harshkumarsingh.online">Need Help?</a>
                </div>
                <img class="img-fluid w-50" src="assets/img/logo.svg" alt="">
            </div>
        </div>
    </section>
    <section  id="projects" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">
                Projects
            </h2>
            <div class="row text-center">
                <div class="col-sm">
                    <div class="card bg-dark text-light mb-3">
                        <div class="h1 mt-3">
                            <i class="fa-solid fa-clock-rotate-left"></i>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title text-accent-colour">Protfolio Website</h4>
                            <p class="card-text">You can see my website code on my github: github.com/harshuopjs</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card bg-dark text-light mb-3">
                        <div class="h1 mt-3">
                            <i class="fa-solid fa-arrow-up-from-bracket"></i>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title text-accent-colour">Coming soon.....</h4>
                            <p class="card-text">More projects to be updated soon.....</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="certificate" class="py-5 bg-dark text-light">
        <div class="container">
            <div class="py-2 text-center">
                <h2>Certrifications And work</h2>
            </div>
            <div class="row align-items-center justify-content-center text-center -5">
                <div class="col">
                    <img src="assets/img/letter.svg" alt="" class="img-fluid d-none d-md-block">
                </div>
                <div class="col-sm p-5 h1">
                    <i class="fa-solid fa-server text-accent-colour"></i>
                    <h5>Google || Coursera</h5>
                    <h5><a href="https://drive.google.com/file/d/1_W5zIgKFRpz98Ojuvct0ggWQW_TBAq3C/view?usp=drive_link">CyberSecurity</a></h5>
                </div>
                <div class="col-sm p-5 h1">
                    <i class="fa-solid fa-user-group text-accent-colour"></i>
                    <h5>Udemy || YouAccel</h5>
                    <h5><a href="https://drive.google.com/file/d/1BJuY6OxVgLtlLmSB0FiLC2mbglNKq9Vs/view?usp=drive_link">Web Development</a></h5>
                </div>
                <div class="col-sm p-5 h1">
                    <i class="fa-solid fa-hashtag text-accent-colour"></i>
                    <h5>My Resume for more information</h5>
                    <h5><a href="https://drive.google.com/file/d/12zjeYWv0xPar8sqmBn4o__30zHO5UUhw/view?usp=drive_link">Click me</a></h5>
                </div>
            </div>

        </div>
    </section>
    <section id="FAQ" class="py-5">
        <div class="container">
            <h2 class="text-center mb-3">
                Skills I gained
            </h2>
            <div class="accordion accordion-flush" id="your-faq">
                <div class="accordion-item">
                    <h5 class="accordion-header" id="qusetion-1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer-1">
                            In CyberSecurity
                        </button>
                    </h5>
                    <div class="accordion-collapse collapse" id="answer-1" data-bs-parent="#your-faq">
                        <div class="p-3">
                        Python Programming<br>Security Information and Event Management (SIEM) tools<br>SQL<br>Linux<br>Intrusion Detection Systems (IDS)
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h5 class="accordion-header" id="qusetion-2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer-2">
                            Web Development MasterClass
                        </button>
                    </h5>
                    <div class="accordion-collapse collapse" id="answer-2" data-bs-parent="#your-faq">
                        <div class="p-3">
                        Cloud Computing<br>Web Apps<br>Linux<br>Web Servers<br>DBMS<br>LAMP Stack<br>HTML<br>CSS<br>JavaScript<br>PHP
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h5 class="accordion-header" id="qusetion-3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer-3">
                            While Pursuing Full Stack Developer from IBM
                        </button>
                    </h5>
                    <div class="accordion-collapse collapse" id="answer-3" data-bs-parent="#your-faq">
                        <div class="p-3">
                        Develop with front-end development languages and tools such as HTML, CSS, JavaScript, React and Bootstrap<br>Program applications using back-end languages and frameworks like Express, Node.js, Python, Django, etc.<br>Deploy and scale applications using Cloud Native methodologies and tools like Containers, Kubernetes, Microservices and Serverless Functions<br>Build your GitHub portfolio by applying your Full Stack Cloud Development skills with multiple labs and hands-on projects, including a capstone
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
        include("includes/footer.php");
    ?>
    <?php 
        include("includes/javascript.php");
    ?>
</body>

</html>