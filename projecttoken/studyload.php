<!DOCTYPE html>
<head>
	<title>Table 2</title>
	<link rel="stylesheet" href="table.css" />
</head>

<body>

<?php
	session_start();

	if (isset($_SESSION['username'], $_SESSION['password'])) {
	   $username = htmlspecialchars($_SESSION['username']);
	   $password = htmlspecialchars($_SESSION['password']);
	   $token = htmlspecialchars($_SESSION['login_token']);
	} else {
	   echo "Session not set";
	}
	?>

	<h4>EDP CODE:: 222414<br>
	SUBJECT CODE:: IT WST12<br>
	ID NO.:: 2210217 <br>
	NAME:: LUCENO, ARCEE<br>
	Token:: <?php echo "$token"?>
	</h4>
	<table>
	<caption>MY STUDY LOAD</caption>
		<tr>
			<th class="border">Course Code</th>
			<th class="border">Course Name</th>
			<th class="border">Lecture Units (Hours)</th>
			<th class="border">Laboratory Units (Hours)</th>
			<th class="border">Rating</th>
			<th class="border">Remarks</th>
		</tr>
        <?php
            // Define study load data as an array
            $studyLoadData = array(
              array('course_code' => '222414', 'course_name' => 'Web Systems and Technologies', 'lec_units' => '2 (3 hrs)', 'lab_units' => '1 (2 hrs)', 'rating' => '1.2', 'remarks' => 'PASSED'),
              array('course_code' => '222413', 'course_name' => 'Introduction to Computer Programming 2', 'lec_units' => '2 (3 hrs)', 'lab_units' => '1 (2 hrs)', 'rating' => '1.3', 'remarks' => 'PASSED'),
              array('course_code' => '222416', 'course_name' => 'Digital Logic and Design', 'lec_units' => '2 (3 hrs)', 'lab_units' => '1 (2 hrs)', 'rating' => '1.1', 'remarks' => 'PASSED'),
              array('course_code' => '222415', 'course_name' => 'Discrete Mathematics', 'lec_units' => '3 (3 hrs)', 'lab_units' => '--', 'rating' => '1.1', 'remarks' => 'PASSED'),
              array('course_code' => 'GE ELEC 2', 'course_name' => 'Sining ng Komunikasyon', 'lec_units' => '3 (3 hrs)', 'lab_units' => '--', 'rating' => '1.7', 'remarks' => 'PASSED'),
              array('course_code' => 'IS 101', 'course_name' => 'Foreign Language (Fukien)', 'lec_units' => '3 (3 hrs)', 'lab_units' => '--', 'rating' => '5', 'remarks' => 'FAILED'),
              array('course_code' => 'PE 2', 'course_name' => 'Folk Dancing', 'lec_units' => '2 (2 hrs)', 'lab_units' => '--', 'rating' => '1.2', 'remarks' => 'PASSED'),
              array('course_code' => 'NSTP 2', 'course_name' => 'National Service Training Program II', 'lec_units' => '3 (3 hrs)', 'lab_units' => '--', 'rating' => '1.2', 'remarks' => 'PASSED')
            );
            
            // Generate HTML table dynamically
            foreach ($studyLoadData as $row)
			{
				echo "<tr>";
				echo "<td class='border'>" . $row['course_code'] . "</td>";
				echo "<td class='border'>" . $row['course_name'] . "</td>";
				echo "<td class='border'>" . $row['lec_units'] . "</td>";
				echo "<td class='border'>" . $row['lab_units'] . "</td>";
				echo "<td class='border'>" . $row['rating'] . "</td>";
				echo "<td class='border'>" . $row['remarks'] . "</td>";
				echo "</tr>";
			}
		?>
	  </table>
  </body>