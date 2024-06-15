<html>
  <head>
    <title>PHP Calendar</title>
    <style>
      table {
        border: 1px solid #000;
        border-collapse: collapse;
      }
      th {
        border: 1px solid #000;
        font-weight: bold;
        background-color: #999;
        padding: 0.5rem;
      }
      td {
        border: 1px solid #333;
        padding: 0.5em;
        vertical-align: top;
      }
    </style>
  </head>
  <body>
 
    <?php define("DEBUGGING", true); ?>
    <?php echo "<h2>Current Month</h2>"; ?>
    <br />

    <?php
        session_start();
        if (!isset($_POST['month']) || !isset($_POST['year'])) {
            if (DEBUGGING) {
                echo "<br />month or year NOT set";
                echo "<br />_POST[month]: " . $_POST['month'];
                echo "<br />_POST[year]: " . $_POST['year'];
            }
            $currDateArray = getdate();
            if (DEBUGGING) {
                echo "<br />currDateArray after calling getDate(): <br />";
                print_r($currDateArray);
            }
            $month = $currDateArray['mon'];
            $year = $currDateArray['year'];
        } else {
            echo "<br />month and year found in POST";
            $month = $_POST['month'];
            $year = $_POST['year'];
        }

        if (DEBUGGING) {
            echo "<br />month:" . $month;
            echo "<br />year:" . $year;
        }

        $start_date = mktime(12, 0, 0, $month, 1, $year);
        $first_day_of_month_array = getdate($start_date);
        if (DEBUGGING) {
            echo "<br />start_date = " . $start_date;
            echo "<br />first_day_of_month_array = <br /> &nbsp;&nbsp;";
            print_r($first_day_of_month_array);
        }

        $day_abbrevs = array("Sun", "Mon", "Tue", "Wed", "Thur", "Fri", "Sat");
        # $month_start = strtotime("first day of this month", time());
        # $month_end = strtotime("last day of this month", time());


	    //   $start_weekday = date("D", $month_start);
        $start_weekday = date("D", $start_date);   // e.g. "Mon"
	    //   $num_days_in_month = (int)date("d", $month_end);   // e.g. 30
        $num_days_in_month = date("t", $start_date);   // e.g. 31



        // months drop-down
        $months = array("January", "February", "March", "April", "May", "June", "July", "August", "september", "October", "November", "December");
        echo "<section>";
        echo '  <form action="calendar.php" method="POST">';
        echo '    <select name="month">';
        for ($i=1; $i <= 12; $i++)
        {
            $curr_month = $months[$i - 1];
            if ($month == $i ) {
                echo "          <option value='$i' selected>";
            } else {
                echo "          <option value='$i'>";
            }
            echo "$curr_month</option>";
        }
        echo '    </select>';
        echo '    <input type=text" name="year" value="' . $year . '" />';
        echo '    <button type="submit">Go</button>';
        echo '  </form>';
        echo '</section>';


        if (DEBUGGING) {
            echo '<br />';
            echo '<br />start_weekday: ' . $start_weekday;
            echo '<br />num_days_in_month = ' . $num_days_in_month;
            //echo "<br /><br /> SERVER: "  . print_r($_SERVER);
            echo "<br /><br /> ENV: ";
            print_r($_ENV);
            echo "<br /><br /> REQUEST: ";
            print_r($_REQUEST);
            echo "<br /><br /> SESSION: ";
            print_r($_SESSION);

	        $var_test = "testing";
	        echo "<br />var_test integer: " . is_integer($var_test);
            settype($var_test, 'array');
            echo "<br /><br />var_test: " . print_r($var_test);
	        echo "<br />var_test is_array: " . is_array($var_test);
	        echo "<br />var_test is_string: " . is_string($var_test);

            echo "<br />File: " . __FILE__;
            echo "<br />Line: " . __LINE__;

	        echo "<br />First day of month: ";
            echo date("Y-m-1");
            echo("<br />");

	        echo "<br />First day of month: ";
            echo strtotime(date("Y-m-1"));

	        echo "<br />First day of this month: ";
            echo strtotime("first day of this month", time());
            echo "<br />DEBUGGING: " . DEBUGGING;
            echo "<br />First day of this month, formatted: ";
            echo date("D, M jS Y", $start_date); 
	        echo "<br />End month day number:" . $num_days_in_month . "<br />";
	    }

        // set counter
        $counter_start = 0;
	    if ($start_weekday == "Sun") {
            $counter_start = 1;
	    } elseif ($start_weekday == "Mon") {
            $counter_start = 2;
	    } elseif ($start_weekday == "Tue") {
            $counter_start = 3;
	    } elseif ($start_weekday == "Wed") {
            $counter_start = 4;
	    } elseif ($start_weekday == "Thu") {
            $counter_start = 5;
	    } elseif ($start_weekday == "Fri") {
            $counter_start = 6;
	    } elseif ($start_weekday == "Sat") {
            $counter_start = 7;
	    }

        if (DEBUGGING) {
            echo "<br />Counter Start: " . $counter_start . "<br />";
	    }
    ?>

    <br />

    <table>
        <?php
            // table headers
            echo "<tr>";  
	        foreach($day_abbrevs as $day) {
	            echo "<th style='width: 100px;'>" . $day . "</th>";
	        }
	        echo "</tr>";

            // first row of data
	        echo "<tr>";  
	        $day_counter = 1;
	        for($j = 1; $j <= 7; $j++) {
	            if ($j >= $counter_start) {
                    echo "<td style='text-align: center;'>" . $day_counter . "</td>";
                    $day_counter++;
	            } else {
                    echo "<td>&nbsp;</td>";
                }
	        }
	        echo "</tr>";

            // rest of the rows of data
	        for($i = 0; $i < 6; $i++) {
	            echo "<tr>";
	            for($j = 0; $j < 7; $j++) {
                    if ($day_counter <= $num_days_in_month) {
			            echo "<td style='text-align: center;'>" . $day_counter . "</td>";
			            $day_counter++;
	                }
                    else {
                        echo "<td>&nbsp;</td>";
                    }
	            }
	            echo "</tr>";
            }
        ?>
    </table>
  </body>
</html>


