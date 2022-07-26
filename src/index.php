<?php
    require "../vendor/autoload.php";
    use GenericApiLayer\GenericApiLayer;
    if (!isset($_GET['page'])) {
        $page = 2;
    } else {

        $page = $_GET['page'];
    }

    $api = new GenericApiLayer();
    // Retrieve a page 2 list of users
    $users = $api->getUsers($page);

    // retrieve user with id
    // $user = $api->getUser(4);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Costum style -->
    <link rel="stylesheet" href="../assets/style.css">
    <title>Active House</title>
</head>
<body>

<nav class="navbar mt-0 navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Active House</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <form class="d-flex ms-auto">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<h1 class="text-center text-primary p-4">Composer Package Test</h1>
<hr>


<div class="container">
    <div class="row">

    <?php
    if (isset($user)) {?>
    <h2 class="text-success text-center">Retrieve a single user by ID</h2>
        <div class="col-md-3">
            <div class="contact-box center-version">
                <a href="#profile.html">
                    <img alt="image" class="img-circle" src="<?php echo $user['data']['avatar']; ?>">
                    <h3 class="m-b-xs"><strong><?php echo $user['data']['first_name'] . ' ' . $user['data']['last_name']; ?></strong></h3>

  
                    <address class="m-t-md">
                        <abbr title="Email">E:</abbr><?php echo $user['data']['email']; ?>
                    </address>

                </a>
                <div class="contact-box-footer">
                    <div class="m-t-xs btn-group">
                        <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                        <a href="mailto:<?php echo $contact['email']; ?>" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                        <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                    </div>
                </div>

            </div>
        </div>

        <?php

        } else {?>
        <h2 class="text-success text-center">Retrieve a paginated list of users</h2>
            <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php for ($i = 1; $i < 4; $i++) {
                                echo "<li class='page-item'><a class='page-link' href=index.php?page=" . htmlspecialchars($i) . ">$i</a></li>";
                            }
                            ?>
                    </ul>
                </nav>
                <?php
                foreach ($users['data'] as $contact) {?>
        <div class="col-md-3">
            <div class="contact-box center-version">
                <a href="#profile.html">
                    <img alt="image" class="img-circle" src="<?php echo $contact['avatar']; ?>">
                    <h3 class="m-b-xs"><strong><?php echo $contact['first_name'] . ' ' . $contact['last_name']; ?></strong></h3>

                    <address class="m-t-md">
                        <abbr title="Email">E:</abbr><?php echo $contact['email']; ?>
                    </address>

                </a>
                <div class="contact-box-footer">
                    <div class="m-t-xs btn-group">
                        <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                        <a href="mailto:<?php echo $contact['email']; ?>" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                        <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                    </div>
                </div>

            </div>
        </div>
        <?php }}?>

    </div>
</div>

</body>
</html>
