<!doctype html>
<html>
  <head>
    <title>Convert to Upper Case</title>
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
    
    <!-- following three links for bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </head>
  <body>
 
    <?php define("DEBUGGING", false); ?>
    
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Upper Case</li>
      </ol>
    </nav>

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


