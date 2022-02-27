<header>
  <nav class="navbar  navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle uarr collapsed" data-toggle="collapse" data-target="#navbar-collapse-uarr">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./index.html" title="">
          <img src="./assets/images/mashuptemplate.svg" class="navbar-logo-img" alt="">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="./" title="" class="<?php if($activePage=="home"){ echo 'active'; } ?>">Home</a></li>
          <li><a href="./about.php" title="" class="<?php if($activePage=="about"){ echo 'active'; } ?>"> About</a></li>
          <li><a href="./pricing.php" title="" class="<?php if($activePage=="pricing"){ echo 'active'; } ?>"> Pricing </a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>