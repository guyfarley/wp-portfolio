<?php get_header() ?>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header -->
<header id="header" class="alt">
  <a href="index.html" class="logo">Home</a>
  <nav>
    <a href="#menu">Menu</a>
  </nav>
</header>

<!-- Menu -->
<nav id="menu">
  <ul class="links">
    <li><a href="index.html">Home</a></li>
    <li><a href="projects.html">Projects</a></li>
    <li><a href="blog.html">Blog</a></li>
    <li><a href="contact.html">Contact</a></li>
  </ul>
  <!-- <ul class="actions stacked">
    <li><a href="#" class="button primary fit">Get Started</a></li>
    <li><a href="#" class="button fit">Log In</a></li>
  </ul> -->
</nav>

<!-- Banner -->
<section id="banner" class="major">
  <div class="inner">
    <header class="major">
      <h1>Hello, I'm Guy Farley</h1>
    </header>
    <div class="content">
      <p>I'm a Software Developer<br />
        JavaScript | React | Node | Express</p>
      <ul class="actions">
        <li><a href="#one" class="button next scrolly">My Work</a></li>
      </ul>
    </div>
  </div>
</section>

<!-- Main -->
<div id="main">

  <!-- One -->
  <section id="one" class="tiles">
    <article>
      <span class="image">
        <img src="<?= get_template_directory_uri() ?>/images/pic01.jpg" alt="" />
      </span>
      <header class="major">
        <h3><a href="https://github.com/GuyFarley" class="link" target="_blank">GitHub</a></h3>
        <p>Business Up Front</p>
      </header>
    </article>
    <article>
      <span class="image">
        <img src="<?= get_template_directory_uri() ?>/images/pic02.jpg" alt="" />
      </span>
      <header class="major">
        <h3><a href="projects.html" class="link">Projects</a></h3>
        <p>Party In The Back</p>
      </header>
    </article>
    <article>
      <span class="image">
        <img src="<?= get_template_directory_uri() ?>/images/pic03.jpg" alt="" />
      </span>
      <header class="major">
        <h3><a href="blog.html" class="link">Blog</a></h3>
        <p>Deep Thoughts</p>
      </header>
    </article>
    <article>
      <span class="image">
        <img src="<?= get_template_directory_uri() ?>/images/pic04.jpg" alt="" />
      </span>
      <header class="major">
        <h3><a href="contact.html" class="link">Contact Me</a></h3>
        <p>I love getting mail</p>
      </header>
    </article>
  </section>

  <!-- Two -->
  <section id="two">
    <div class="inner">
      <header class="major">
        <h2>About Me</h2>
      </header>
      <p>Hello! I am a software developer specializing in applications built with JavaScript, React,
        Node, and Express. I'm also a career-changer with extensive experience in project management for brand
        marketing and print production, and most recently I managed an account team in support of Unilever's
        in-store marketing programs. I love to solve problems and think strategically, and I'm also a big believer
        that
        emotional intelligence and a strong culture are essential to the success of any organization.<br />
        <br />
        When I'm not coding, you can find me fly fishing on the Deschutes or out grabbing a pint at
        a local brewery. I love making connections in the tech community, so feel free to reach out!
      </p>
      <ul class="actions">
        <!-- <li><a href="landing.html" class="button next">Get Started</a></li> -->
      </ul>
    </div>
  </section>

</div>

<!-- Contact -->
<section id="contact">
  <div class="inner">
    <section>
      <form method="post" action="https://formspree.io/f/xlevlrbg">
        <div class="fields">
          <div class="field half">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" />
          </div>
          <div class="field half">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" />
          </div>
          <div class="field">
            <label for="message">Message</label>
            <textarea name="message" id="message" rows="6"></textarea>
          </div>
        </div>
        <ul class="actions">
          <li><input type="submit" value="Send Message" class="primary" /></li>
          <li><input type="reset" value="Clear" /></li>
        </ul>
      </form>
    </section>
    <section class="split">
      <section>
        <div class="contact-method">
          <span class="icon solid alt fa-envelope"></span>
          <h3>Email</h3>
          <a href="mailto:guy.e.farley@gmail.com">guy.e.farley@gmail.com</a>
        </div>
      </section>
      <section>
        <div class="contact-method">
          <span class="icon solid alt fa-phone"></span>
          <h3>Phone</h3>
          <span>(615) 491-5951</span>
        </div>
      </section>
      <section>
        <div class="contact-method">
          <span class="icon brands alt fa-linkedin-in"></span>
          <h3>LinkedIn</h3>
          <a href="https://www.linkedin.com/in/guyefarley/" target="_blank">linkedin.com/in/guyefarley</a>
        </div>
      </section>
    </section>
  </div>
</section>

<?php get_footer() ?>