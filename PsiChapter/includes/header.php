<div class="navbar-position" style="background-color: white">
	<nav class="navbar navbar-toggleable-sm navbar-light ">

        <!--toggle small screen button-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--Medium up image-->
        <img src="includes/images/a-psi-long-logo-final-palm-tree-blk.png" width="448" height="90" style="max-width: 80%" class="img-fluid hidden-sm-down">

        <!--Small down image-->
        <img src="includes/images/apsi-crest.png" class="img-fluid mx-auto hidden-md-up" style="max-height:150px;" >
        <img src="includes/images/apsi-logo-letters-only.png" class="img-fluid hidden-md-up">

        <!--Navigation links-->
        <!--will dissappear if small screen -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="index.php"><h3>Home</h3></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="AboutUs.php"><h3>About Us</h3></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="calendar.php"><h3>Calendar</h3></a>
              </li>
              <?php
                session_start();
                if (!isset($_SESSION['user'])) {
                    echo '<li class="nav-item"><a class="nav-link" href="login.php"><h3>Log In</h3></a></li>';
                } else {
                    echo '<li class="nav-item"><a class="nav-link" href="dues.php"><h3>Dues</h3></a></li>';
                    echo '<li class="nav-item"><a class="nav-link" href="logout.php"><h3>' . $_SESSION['user'][4] .'</h3></a></li>';
                }
                ?>
            </ul>
        </div>
	</nav>
	</div>
