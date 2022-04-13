<html>
  <head>
  </head>
  <body>
 
    <?php define("DEBUGGING", false); ?>
    <?php echo "<h2>Current Month</h2>"; ?>
    <br />

    <?php
        session_start();
        if (!isset($_POST['month']) || !isset($_POST['year'])) {
            if (DEBUGGING) {
                echo "<br />month or year NOT set";
            }
            $currDateArray = getdate();
            if (DEBUGGING) {
                echo "<br />currDateArray: <br />";
                print_r($currDateArray);
            }
            $month_selected = $currDateArray['mon'];
            $year_selected = $currDateArray['year'];
        } else {
            $month_selected = $_POST['month'];
            $year_selected = $_POST['year'];
        }

        if (DEBUGGING) {
            echo "<br />month selected:" . $month_selected;
            echo "<br />year selected:" . $year_selected;
        }

        $start_date = mktime(12, 0, 0, $month_selected, 1, $year_selected);
        $first_day_of_month_array = getdate($start_date);
        if (DEBUGGING) {
            echo "<br />start_date = " . $start_date;
            echo "<br />first_day_of_month_array = <br />";
            print_r($first_day_of_month_array);
        }

        $day_abbrevs = array("Sun", "Mon", "Tue", "Wed", "Thur", "Fri", "Sat");
        // $month_start = strtotime("first day of this month", time());
        // $month_end = strtotime("last day of this month", time());


	    //   $start_week_day = date("D", $month_start);
        $start_week_day = date("D", $start_date);
	    //   $end_month_day_number = (int)date("d", $month_end);   // e.g. 30
        $end_month_day_number = date("t", $start_date);
        




        // months drop-down
        $months = array("January", "February", "March", "April", "May", "June", "July", "August", "september", "October", "November", "December");
        echo "<section>";
        echo '<form action="calendar.php" method="POST">';
        echo '    <select name="month">';
        for ($i=1; $i <= 12; $i++)
        {
            $curr_month = $months[$i - 1];
            if ($month_selected == $i ) {
                echo "          <option value='$i' selected>$curr_month</option>" ;
            } else {
                echo "          <option value='$i'>$curr_month</option>" ;
            }
        }
        echo '    </select>';
        echo '    <input type=text" name="year" value="' . $year_selected . '" />';
        echo '    <button type="submit">Go</button>';
        echo '</form>';
        echo '</section>';

        if (DEBUGGING) {
            echo '<br />';
            echo '<br />start_week_day: ' . $start_week_day;
            echo '<br />end_month_day_number = ' . $end_month_day_number;
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
	        echo "<br />End month day number:" . $end_month_day_number . "<br />";
	    }

        // set counter
        $counter_start = 0;
	    if ($start_week_day == "Sun") {
            $counter_start = 1;
	    } elseif ($start_week_day == "Mon") {
            $counter_start = 2;
	    } elseif ($start_week_day == "Tue") {
            $counter_start = 3;
	    } elseif ($start_week_day == "Wed") {
            $counter_start = 4;
	    } elseif ($start_week_day == "Thu") {
            $counter_start = 5;
	    } elseif ($start_week_day == "Fri") {
            $counter_start = 6;
	    } elseif ($start_week_day == "Sat") {
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
                    if ($day_counter <= $end_month_day_number) {
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


