<html>
	<head>
		<title>Quiz exercise</title>
	</head>
	<body>
    <center>
	<?php
        $Q1_res = $_POST["Q1"];
        $Q2_res = $_POST["Q2"];
        $Q3_res = $_POST["Q3"];
        $Q4_res = $_POST["Q4"];
        $Q5_res = $_POST["Q5"];

        echo "Question 1: Whose stand-in is the Star Platinum?<br>";
        echo "You answered:" .$Q1_res. "<br>";
        echo "Correct answer: Kujo Jotaro<br><br>";

        echo "Question 2: What is the radius of the emerald splash?<br>";
        echo "You answered:" .$Q2_res. "<br>";
        echo "Correct answer: 20m<br><br>";

        echo "Question 3: Which of the following characters is an ordinary office worker?<br>";
        echo "You answered:" .$Q3_res. "<br>";
        echo "Correct answer: Kira Yoshikage<br><br>";

        echo "Question 4: Who is the last gentleman in JOJO?<br>";
        echo "You answered:" .$Q4_res. "<br>";
        echo "Correct answer: Jonathan Joestar<br><br>";

        echo "Question 5: The age of the author of JOJO is:<br>";
        echo "You answered:" .$Q5_res. "<br>";
        echo "Correct answer: 60<br><br>";

        $t=0;
        if($Q1_res=="Kujo Jotaro")
        {
            $t++;
        }
        if($Q2_res=="20m")
        {
            $t++;
        }
        if($Q3_res=="Kira Yoshikage")
        {
            $t++;
        }
        if($Q4_res=="Jonathan Joestar")
        {
            $t++;
        }
        if($Q5_res=="60")
        {
            $t++;
        }

        $score =$t*20;

        echo "Correct answer number: " .$t."<br>";
        echo "Score: " .$score. "% <br>";
    ?>
    </center>
	</body>
</html>