<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">APOTEK TRI ARGA FARMA</a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <?php include 'side_bar.php'; ?>
        <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge"></span> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-header">Messages</li>
                    <li class="message-preview">
                        <a href="#">
                            <span class="avatar"><i class="fa fa-bell"></i></span>
                            <span class="message">Security alert</span>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li class="message-preview">
                        <a href="#">
                            <span class="avatar"><i class="fa fa-bell"></i></span>
                            <span class="message">Security alert</span>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#">Go to Inbox <span class="badge"></span></a></li>
                </ul>
            </li>
            <?php $username = $_SESSION['username']; ?>
            <li class="dropdown user-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $username; ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="<?= base_url('auth/logout') ?>"><i class="fa fa-power-off"></i> Log Out</a></li>

                </ul>
            </li>
            <li class="divider-vertical"></li>
        </ul>
    </div>
</nav>