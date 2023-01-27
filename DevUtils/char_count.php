<!doctype html>
<html>
  <head>
    <title>Character Count</title>
    <style>
      body {
        background-color: orange!important;
        min-height: 100vh;
        padding: 25px;
      }
    </style>

    <!-- following three links for bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php define("DEBUGGING", false); ?>
    <?php echo "<h2>Dev Utilities - Character Count</h2>"; ?>
    <br />

    <?php
    ?>

    <section>
      <form method="POST" action="./char_count_results.php">
        <label>Enter string:</label>
        <input type="text" name="charstring" size="80" />
        <div style="margin-top: 20px;"></div>
        <button type="submit" class="btn btn-outline-primary">Go</button>
      </form>
    </section>
  </body>
</html>


