<!doctype html>
<html>
  <head>
    <title>Dev Utils</title>
    <style>
      body {
	background-color: orange!important;
	min-height: 100vh;
        padding: 25px;
      }
      section {
        margin-bottom: 1rem;
      }
    </style>

    <!-- following three links for bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </head>
  <body>
    <?php define("DEBUGGING", false); ?>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Home</li>
      </ol>
    </nav>

    <?php echo "<h2>Dev Utiltities</h2>"; ?>

    <br />

    <div class="list-group">
      <a href="char_count.php" class="list-group-item">Character Count</a>
      <a href="uppercase.php" class="list-group-item">Upper Case</a>
    </div>
  </body>
</html>


