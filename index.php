<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 6 Home Pactice</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .alert-warning,
        .alert-success {
            height: 5vw;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card border-success mb-3 text-center">
                    <div class="card-header">
                        <h3>Calculator</h3>
                    </div>
                    <div class="card-body text-success">
                        <form action="" method="POST">
                            <h6 class="form-label">Input Number one :</h6>
                            <input class="form-control" type="number" name="one">
                            <h6 class="form-label">Input Number two :</h6>
                            <input class="form-control" type="number" name="two">
                            <h6 class="form-label">Input Number three :</h6>
                            <input class="form-control" type="number" name="three">
                            <button type="submit" class="mt-3 me-1 btn btn-primary" name="add">Add (+)</button>
                            <button type="submit" class="mt-3 me-1 btn btn-danger" name="sub">Sub (-)</button>
                            <button type="submit" class="mt-3 me-1 btn btn-success" name="multi">Multi (*)</button>
                            <button type="submit" class="mt-3 me-1 btn btn-dark" name="divi">Divi (/)</button>

                            <div class="mt-4 alert alert-success " id="output_box" role="alert">
                                <h5>Output will be shown here :</h5>
                                <h6 class="text-center mb-0">
                                    <?php
                                    if (isset($_POST["one"]) && isset($_POST["two"]) && isset($_POST["three"])) {
                                        if ($_POST["one"]) {
                                            if ($_POST["two"]) {
                                                if ($_POST["three"]) {
                                                    if (isset($_POST["add"])) {
                                                        $addResult = $_POST["one"] + $_POST["two"] + $_POST["three"];
                                                        print_r("Addition result is : " . $addResult);
                                                    } else if (isset($_POST["sub"])) {
                                                        $subResult = $_POST["one"] - $_POST["two"] - $_POST["three"];
                                                        print_r("Subtraction result is : " . $subResult);
                                                    } else if (isset($_POST["multi"])) {
                                                        $multiResult = $_POST["one"] * $_POST["two"] * $_POST["three"];
                                                        print_r("Multiplication result is : " . $multiResult);
                                                    } else if (isset($_POST["divi"])) {
                                                        $diviResult = $_POST["one"] / $_POST["two"] / $_POST["three"];
                                                        print_r("Division result is : " . $diviResult);
                                                    }
                                                } else {
                                                    echo "Number three is left blank";
                                                }
                                            } else {
                                                echo "Number two is left blank";
                                            }
                                        } else {
                                            echo "Number one is left blank";
                                        }
                                    }
                                    ?>
                                </h6>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>







    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
