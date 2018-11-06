<?php require_once('core/init.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/assets/css/main.css">
  <title>Landing Page E-Perpus</title>
</head>

<body>
  <section class="hero is-info is-medium is-bold">
    <div class="hero-head">
      <nav class="navbar">
        <div class="container">
          <div class="navbar-brand">
            <a class="navbar-item" href="../">
              <img src="http://bulma.io/images/bulma-type-white.png" alt="Logo">
            </a>
            <span class="navbar-burger burger" data-target="navbarMenu">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </div>
          <div id="navbarMenu" class="navbar-menu">
            <div class="navbar-end">
              <div class="tabs is-right">
                <ul>
                  <li class="is-active"><a>Home</a></li>
                  <li><a href="">Examples</a></li>
                  <li><a href="">Features</a></li>
                  <li><a href="">Team</a></li>
                  <li><a href="">Help</a></li>
                </ul>
                <span class="navbar-item">
                  <a class="button is-white is-outlined" href="https://github.com/dansup/bulma-templates/blob/master/templates/hero.html">
                    <span class="icon">
                      <i class="fa fa-github"></i>
                    </span>
                    <span title="Hello from the other side">View Source</span>
                  </a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title">
          The new standard in &lt;insert industry here&gt;
        </h1>
        <h2 class="subtitle">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </h2>
      </div>
    </div>
  </section>
  <div class="box cta">
    <p class="has-text-centered">
      <span class="tag is-primary">New</span> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>
  <section class="container">
    <div class="columns features">
      <div class="column is-4">
        <div class="card is-shady">
          <div class="card-image has-text-centered">
            <i class="fa fa-paw"></i>
          </div>
          <div class="card-content">
            <div class="content">
              <h4>Tristique senectus et netus et. </h4>
              <p>Purus semper eget duis at tellus at urna condimentum mattis. Non blandit massa enim nec. Integer enim neque volutpat ac tincidunt vitae semper quis. Accumsan tortor posuere ac ut consequat semper viverra nam.</p>
              <p><a href="#">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="column is-4">
        <div class="card is-shady">
          <div class="card-image has-text-centered">
            <i class="fa fa-empire"></i>
          </div>
          <div class="card-content">
            <div class="content">
              <h4>Tempor orci dapibus ultrices in.</h4>
              <p>Ut venenatis tellus in metus vulputate. Amet consectetur adipiscing elit pellentesque. Sed arcu non odio euismod lacinia at quis risus. Faucibus turpis in eu mi bibendum neque egestas cmonsu songue. Phasellus vestibulum lorem
                sed risus.</p>
              <p><a href="#">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="column is-4">
        <div class="card is-shady">
          <div class="card-image has-text-centered">
            <i class="fa fa-apple"></i>
          </div>
          <div class="card-content">
            <div class="content">
              <h4> Leo integer malesuada nunc vel risus. </h4>
              <p>Imperdiet dui accumsan sit amet nulla facilisi morbi. Fusce ut placerat orci nulla pellentesque dignissim enim. Libero id faucibus nisl tincidunt eget nullam. Commodo viverra maecenas accumsan lacus vel facilisis.</p>
              <p><a href="#">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="intro column is-8 is-offset-2">
      <h2 class="title">Perfect for developers or designers!</h2><br>
      <p class="subtitle">Vel fringilla est ullamcorper eget nulla facilisi. Nulla facilisi nullam vehicula ipsum a. Neque egestas congue quisque egestas diam in arcu cursus.</p>
    </div>
    <div class="sandbox">
      <div class="tile is-ancestor">
        <div class="tile is-parent is-shady">
          <article class="tile is-child notification is-white">
            <p class="title">Hello World</p>
            <p class="subtitle">What is up?</p>
          </article>
        </div>
        <div class="tile is-parent is-shady">
          <article class="tile is-child notification is-white">
            <p class="title">Foo</p>
            <p class="subtitle">Bar</p>
          </article>
        </div>
        <div class="tile is-parent is-shady">
          <article class="tile is-child notification is-white">
            <p class="title">Third column</p>
            <p class="subtitle">With some content</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
            </div>
          </article>
        </div>
      </div>
      <div class="tile is-ancestor">
        <div class="tile is-vertical is-8">
          <div class="tile">
            <div class="tile is-parent is-vertical">
              <article class="tile is-child notification is-white">
                <p class="title">Vertical tiles</p>
                <p class="subtitle">Top box</p>
              </article>
              <article class="tile is-child notification is-white">
                <p class="title">Vertical tiles</p>
                <p class="subtitle">Bottom box</p>
              </article>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child notification is-white">
                <p class="title">Middle box</p>
                <p class="subtitle">With an image</p>
                <figure class="image is-4by3">
                  <img src="https://picsum.photos/640/480/?random" alt="Description">
                </figure>
              </article>
            </div>
          </div>
          <div class="tile is-parent is-shady">
            <article class="tile is-child notification is-white">
              <p class="title">Wide column</p>
              <p class="subtitle">Aligned with the right column</p>
              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
              </div>
            </article>
          </div>
        </div>
        <div class="tile is-parent is-shady">
          <article class="tile is-child notification is-white">
            <div class="content">
              <p class="title">Tall column</p>
              <p class="subtitle">With even more content</p>
              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula
                  eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
                <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet
                  felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
                <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam
                  ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
              </div>
            </div>
          </article>
        </div>
      </div>
      <div class="tile is-ancestor">
        <div class="tile is-parent is-shady">
          <article class="tile is-child notification is-white">
            <p class="title">Side column</p>
            <p class="subtitle">With some content</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
            </div>
          </article>
        </div>
        <div class="tile is-parent is-8 is-shady">
          <article class="tile is-child notification is-white">
            <p class="title">Main column</p>
            <p class="subtitle">With some content</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
            </div>
          </article>
        </div>
      </div>
      <div class="tile is-ancestor">
        <div class="tile is-parent is-8 is-shady">
          <article class="tile is-child notification is-white">
            <p class="title">Murphy's law</p>
            <p class="subtitle">Anything that can go wrong will go wrong</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
            </div>
          </article>
        </div>
        <div class="tile is-parent is-shady">
          <article class="tile is-child notification is-white">
            <p class="title">Main column</p>
            <p class="subtitle">With some content</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="content has-text-centered"><h2>Sponsor</h2></div>
    <div class="columns is-mobile">
      <div class="column">
        <img src="https://itpolsri.com/Images/GlobalFM.jpeg" width="112" height="28" alt="GlobalFM">
      </div>
      <div class="column">
        <img src="https://itpolsri.com/Images/SponsorGamerINA.jpeg" alt="GamerINA">
      </div>
      <div class="column">
        <img src="https://itpolsri.com/Images/SponsorGoodNews.jpeg"  alt="GoodNews">
      </div>
      <div class="column">
        <img src="https://itpolsri.com/Images/SponsorMomea.jpeg"  alt="Momea">
      </div>
      <div class="column">
        <img src="https://itpolsri.com/Images/SponsorPalembangEvents.jpeg"  alt="Palembang Events">
      </div>
      <div class="column">
        <img src="https://itpolsri.com/Images/SponsorJon.jpeg"  alt="Jon">
      </div>
      <div class="column">
        <img src="https://itpolsri.com/Images/SriwijayaPost.jpeg"  alt="Sriwijaya Post">
      </div>
      <div class="column">
        <img src="https://itpolsri.com/Images/SponsorIdea.jpeg"  alt="Sponsor Idea">
      </div>
      <div class="column">
        <img src="https://itpolsri.com/Images/SponsorElti.jpeg"  alt="Sponsor Elti">
      </div>
      <div class="column">
        <img src="https://itpolsri.com/Images/SriwijayaHost.jpeg" alt="Sriwijaya Host">
      </div>

    </div>

  </footer>
  <script type="text/javascript" src="/assets/js/main.js"></script>
</body>
</html>