<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>All About PHP</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="https://image.flaticon.com/icons/svg/2306/2306154.svg" type="image/x-icon">
</head>

<body>

    <div class="jumbotron text-center">
        <h1 class="display-3">ALL ABOUT PHP</h1>
        <p class="lead">All simple php questions with answers in a dynamic way</p>
        <hr class="my-2">
        <!-- <p>Add Questions</p> -->
        <p class="lead">
            <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addQuestion" role="button"> Add More questions</a>
        </p>
    </div>
    <!-- Add Questions Modal -->
    <form action="./controller/add.php" method="POST" class="modal fade" id="addQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Add your <span class="text-danger">Q</span> &<span class="text-success"> A</span></h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Question?</label>
                        <input type="text" class="form-control" id="recipient-name" name="questions">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Answer!</label>
                        <textarea class="form-control" id="message-text" name="answers"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn " data-dismiss="modal">Close</button>
                    <button type="submit" class="btn">Add</button>
                </div>
            </div>
        </div>
    </form>
    <div class="container">
        <?php
        $con = mysqli_connect("localhost", "root", "", "php_questions");
        $sql = "SELECT * FROM `q_and_a`";
        $res = mysqli_query($con, $sql);

        while ($val = mysqli_fetch_assoc($res)) {

            echo '                                
                <div id="accordion' . $val["id"] . '">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                <a class="text-danger" data-toggle="collapse" data-target="#collapseOne' . $val["id"] . '" aria-expanded="true"
                    aria-controls="collapseOne' . $val["id"] . '">
                    ' . $val["questions"] . '
                <i class="fas fa-angle-double-down"></i>
                    </a>
                    </h2>
                </div>
                    <div id="collapseOne' . $val["id"] . '" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion' . $val["id"] . '">
                        <div class="card-body">
                        ' . $val['answers'] . '
                        </div>
                    </div>
                </div>
                ';
        }
        ?>
    </div>
    </div>
    <!-- jQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script>



    </script>
</body>

</html>