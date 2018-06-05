<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Balance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: lightblue;">
        <a class="navbar-brand" href="index.php">Outfits</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarContent" aria-controls="navbarContent"
                aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="hummel.php">Hummel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="macron.php">Macron</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adidas.php">Adidas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nike.php">Nike</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="puma.php">Puma</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admiral.php">Admiral</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="errea.php">Errea</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="marathon.php">Marathon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kappa.php">Kappa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lotto.php">Lotto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="joma.php">Joma</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="umbro.php">Umbro</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="new_balance.php">New Balance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="unknown.php">Unknown</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<section class="container-fluid">
    <div class="container3">
        <h1 class="h1">Countries with New Balance outfit</h1>
        <table border="1" align="center" class="table">
            <thead>
            <tr>
                <th>Country Name</th>
                <th>Sport Name</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT country_name, sport_name, brand_name FROM outfit_list WHERE brand_name = 'New Balance' ORDER BY country_name ASC";
            $result = mysqli_query($connection, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["country_name"]; ?></td>
                        <td><?php echo $row["sport_name"]; ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</section>
<footer class="footer">
    <span class="text-center">&copy;2018, Salamon Andor</span>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
</body>
</html>