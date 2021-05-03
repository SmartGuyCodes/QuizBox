
<!doctype html>
<html lang="en">
  <head>
    <!--<meta charset="utf-8">-->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <!--<meta name="description" content="">-->
    
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Quiz Box - Create & manage online quizzes, tests & exams for your organization with many eLearning features.">
      <meta name="author" content="Trulance Communications">
    
      <title>Quiz Box - Create & manage online quizzes, tests & exams for your organization with many eLearning features.</title>
      
      <meta property="og:title" content="QuizBox">
      <meta property="og:description" content="Create & manage online quizzes, tests & exams for your organization with many eLearning features.">
      <meta property="og:image" content="https://quizbox.trucomm.co.ke/upload/logo.png">
      <meta property="og:url" content="https://quizbox.trucomm.co.ke">
    
      <meta name="twitter:title" content="QuizBox">
      <meta name="twitter:description" content="Create & manage online quizzes, tests & exams for your organization with many eLearning features.">
      <meta name="twitter:image" content="https://quizbox.trucomm.co.ke/upload/logo.png">
      <meta name="twitter:card" content="summary_large_image">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    

    <!-- Bootstrap core CSS -->
    <!--<link href="/assets/css/bootstrap.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Favicons -->
    
    <meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">QuizBox</h4>
          <p class="text-muted">
            Create & manage online quizzes, tests & exams for your organization with many eLearning features.
          </p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <!--<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>-->
        <strong>QuizBox</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>
    <h1><?php echo $content[0]->title;?></h1>
    
    <div class="clearfix">
      <img src="/uploads/<?php echo $content[0]->attachment;?>" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
    
      <?php echo $content[0]->study_description;?>
    </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <!--<p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>-->
    <p class="mb-0"><a href="https://trucomm.co.ke" target="__blank">Trulance Communications</a> Copyright &copy; 2020 - <?=date('Y');?>  
    <br /> Read our <a href="#">getting started guide</a>.</p>
  </div>
</footer>


    <!--<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

      
  </body>
</html>
