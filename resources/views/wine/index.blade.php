
<html>
<head>
    <title>Wine Database</title>
    {{ HTML::style('css/style.css') }}
</head>


<body style="background-color:#FFFACC">

<div id="outercontainer">



    <div style="position:relative;padding-left:30px;padding-right:30px;">
        <a href="home.php" id="name"> Vinosaurus </a>
        <div style="margin:auto;">
            <a href="about.php" class="navlink">About Us</a>
            <a href="wine_add.php" class="navlink">Add a Wine</a>


    <img src="http://www.wineshoplouisville.com/images/wine.jpg" height="500" style="width:100%;opacity:0.8;">

    <div id="body">
        <div style="float:left;text-align:center;center;font-size:30px; color:white;font-weight:bold;">
            Welcome to Vinosaurus! The wine thesaurus dedicated to collecting information on wines from all over the world.
            <hr>

            <div id="form">
                <div id="labels">
                    Wine Name:
                    <br/>
                    Grape:
                    <br/>
                    Year Bottled:
                    <br/>
                    Wine Type:
                    <br/>
                    Country:
                    <br/>
                    Price:
                    <br/>
                </div> <!--close labels-->
                <div id="values">
                    <form action="/winelist/results" method="post">
                        <input style="width:300px;font-size:15px;font-family:times;" type="text" name="name">
                        <br/>
                        <select style="font-size:15px;font-family:times;width:200px;" name="grape_id">
                            <option value ="all"> All </option>
<!--                            --><?php
//                            while ($row = mysqli_fetch_array($results_grapes)){
//                                echo "<option value='" . $row['grape_id'] . "'>";
//                                echo $row['grape'];
//                                echo "</option>";
//                            }
//                            ?>
                        </select>
                        <br/>
                        <input  style="font-size:15px;font-family:times;width:200px;" type ="text" name="year">
                        <br/>
                        <select style="font-size:15px;font-family:times;width:200px;" name="wine_type_id">
                            <option value ="all"> All </option>
<!--                            --><?php
//                            while ($row = mysqli_fetch_array($results_wine_types)){
//                                echo "<option value='" . $row['wine_type_id'] . "'>";
//                                echo $row['wine_type'];
//                                echo "</option>";
//                            }
//                            ?>
                        </select>
                        <br/>
                        <select style="font-size:15px;font-family:times;width:200px;" name="country_id">
                            <option value ="all"> All </option>
<!--                            --><?php
//                            while ($row = mysqli_fetch_array($results_countries)){
//                                echo "<option value='" . $row['country_id'] . "'>";
//                                echo $row['country'];
//                                echo "</option>";
//                            }
//                            ?>
                        </select>
                        <br/>
                        <input style="font-size:15px;font-family:times;width:250px;" name="price">
                        <br/>

                        <button class="button" type="submit" value="Submit"/>Submit</button>

                    </form>
                </div><!--close values-->
            </div><!--close form-->
            <hr>
        </div><!--close intro-->
    </div><!--close body-->
</div> <!--close outercontainer-->


</body>
</html>
