<!-- website nav bar -->
<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=$level?>index.php"><h5>APRIL JAMES <span class="sub-text">artist + graphic designer</span></h5></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="<?=($activePage == 'Home')?'active':''?>" href="<?=$level?>index.php">Home</a></li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery</a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item <?=($activePage == 'Drawings')?'active':''?>" href="<?=$level?>drawings/index.php">Drawings</a>
                        <a class="dropdown-item <?=($activePage == 'Paintings')?'active':''?>" href="<?=$level?>paintings/index.php">Paintings</a>
                        <a class="dropdown-item <?=($activePage == 'Ceramics')?'active':''?>" href="<?=$level?>ceramics/index.php">Ceramics</a>
                        <a class="dropdown-item <?=($activePage == 'Graphic Design')?'active':''?>" href="<?=$level?>graphicDesign/index.php">Graphic Design</a>
                        <a class="dropdown-item <?=($activePage == 'Woodworking')?'active':''?>" href="<?=$level?>woodworking/index.php">Woodworking</a>
                        <a class="dropdown-item <?=($activePage == 'Tattoos')?'active':''?>" href="<?=$level?>tattoos/index.php">Tattoos</a>                    
                    </div>
                </li>
                <li><a class="<?=($activePage == 'Resume')?'active':''?>" href="<?=$level?>assets/pdf/resume.pdf" target="_blank">Resume</a></li>
                <li><a class="<?=($activePage == 'About')?'active':''?>" href="<?=$level?>about/index.php">About</a></li>
                <li><a class="<?=($activePage == 'Login')?'active':''?>" href="<?=$level?>login.php">
                    <i class="<?php echo (isset($_SESSION['username'])) ? "fas fa-frog" : "fa fa-user"?> nav-user" aria-hidden="true"></i>  
                </a></li>
                
            </ul>
        </div>
    </div>
</div>