<?php get_header() ?>

<!-- Wrapper -->
<div id="wrapper">

  <?php get_template_part("template-parts/navbar") ?>

  <!-- Banner -->
  <section id="banner" class="major">
    <div class="inner">
      <header class="major">
        <h1>Hello, I'm Guy Farley</h1>
      </header>
      <div class="content">
        <p>Web Developer | JS | React | Node</p>
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
          <h3><a href="<?php echo site_url('/projects'); ?>" class="link">Projects</a></h3>
          <p>Party In The Back</p>
        </header>
      </article>
      <article>
        <span class="image">
          <img src="<?= get_template_directory_uri() ?>/images/pic03.jpg" alt="" />
        </span>
        <header class="major">
          <h3><a href="<?php echo site_url('/blog'); ?>" class="link">Blog</a></h3>
          <p>Deep Thoughts</p>
        </header>
      </article>
      <article>
        <span class="image">
          <img src="<?= get_template_directory_uri() ?>/images/pic04.jpg" alt="" />
        </span>
        <header class="major">
          <h3><a href="<?php echo site_url('/contact'); ?>" class="link">Contact Me</a></h3>
          <p>I love getting mail</p>
        </header>
      </article>
    </section>

    <?php
    $aboutMe = new WP_Query(array(
      'category_name' => 'about-me',
    ));

    while ($aboutMe->have_posts()) {
      $aboutMe->the_post();
    ?>
      <section id="two">
        <div class="inner">
          <header class="major">
            <h2><?php the_title() ?></h2>
          </header>
          <p><?php the_content(); ?></p>
        </div>
      </section>
    <?php }
    ?>
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

</div>