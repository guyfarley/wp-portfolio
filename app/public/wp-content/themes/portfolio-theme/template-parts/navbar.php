<!-- Header -->
<header id="header" class="alt">
<a href="<?= home_url(); ?>" class="logo">Home</a>

<nav>
  <a href="#menu">Menu</a>
</nav>

</header>

<!-- Menu -->
<nav id="menu">
  <ul class="links">
    <li><a href="<?php echo site_url(); ?>">Home</a></li>
    <li><a href="<?php echo site_url('/projects'); ?>">Projects</a></li>
    <li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
    <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
  </ul>
</nav>