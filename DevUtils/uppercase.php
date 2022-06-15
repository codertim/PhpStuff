<!doctype html>
<html>
  <head>
    <title>Conver to Upper Case</title>
    <style>
      body {
        background-color: orange;
      }
      #radio-options {
        margin-bottom: 1em;
        padding-left: 50px;
      }
      #radio-options input {
        margin-left: 25px;
      }
    </style>
  </head>
  <body>
 
    <?php define("DEBUGGING", false); ?>
    <?php echo "<h2>Dev Utilities - Uppercase</h2>"; ?>
    <br />

    <div>
      <form method="POST" action="./uppercase_results.php">
        <label>Enter string:</label>
        <input type="text" name="charstring" size="80" />

        <section  id="radio-options">
            <input type="radio" id="all" name="casetype" value="all" checked />
            <label for="all">All characters</label>

            <input type="radio" id="word" name="casetype" value="word" />
            <label for="word">Every word</label>

            <input type="radio" id="sentence" name="casetype" value="sentence" />
            <label for="sentence">Sentence</label>
        </section>

        <button type="submit">Go</button>
      </form>
    </div>
  </body>
</html>


