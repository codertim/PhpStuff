<!doctype html>
<html>
  <head>
    <title>Character Count</title>
    <style>
      body {
        background-color: orange;
      }
    </style>
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
        <button type="submit">Go</button>
      </form>
    </section>
  </body>
</html>


