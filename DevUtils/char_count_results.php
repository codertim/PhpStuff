<html>
  <head>
    <title>Character Count Results</title>
    <style>
      body {
        background-color: orange;
      }

      section {
        margin-bottom: 30px;
      }
    </style>
  </head>
  <body>
 
    <?php define("DEBUGGING", false); ?>
    <?php echo "<h2>Dev Utilities - Character Count Results</h2>"; ?>
    <br />

    <section>
      <label>Character Count:</label>
    <?php
        $char_string = "";
        if (isset($_POST['charstring'])) {
            $char_string = $_POST['charstring'];
        }
        $string_len = strlen($char_string);
        $trimmed_char_string = trim($char_string);
        $trimmed_string_len = strlen($trimmed_char_string);

        echo $string_len;
        echo "<br />";
        echo "Spaces removed (beginning and end) character count: " . $trimmed_string_len;
    ?>
    </section>
    
    <a href="./index.php" >Utils</a>
    
  </body>
</html>


