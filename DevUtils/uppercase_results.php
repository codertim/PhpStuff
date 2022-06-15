<?php
        $char_string = "";
        $string_uppercase = "";

        if (isset($_POST['charstring'])) {
            $char_string = $_POST['charstring'];

            $case_type = $_POST['casetype'];
            if ($case_type == "all") {
              $string_uppercase = strtoupper($char_string);
            }
            else if ($case_type == "word") {
              $string_uppercase = ucwords($char_string);
            }
            else if ($case_type == "sentence") {
              $string_uppercase = ucfirst($char_string);
            }
        }

        //echo $string_uppercase;
?>
<!doctype html>
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
      <label>Convert to Uppercase:</label>
      <div>
        <?php echo $string_uppercase; ?>
      </div>
    </section>
    
    <a href="./index.php" >Utils</a>
    
  </body>
</html>


