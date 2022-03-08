<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <div class="banner">
        <div class="busq-red">
          <div class="social-container">
            <ul class="social-icons">
              <li>
                <a class="facebook" href="https://www.facebook.com/PuebloyReforma" target="_blank"
                  ><i class="fab fa-facebook-f"></i
                ></a>
              </li>
              <li>
                <a class="instagram" href="https://www.instagram.com/puebloyreforma" target="_blank"
                  ><i class="fab fa-instagram"></i
                ></a>
              </li>
              <li>
                <a class="twitter" href="https://twitter.com/PuebloyReforma" target="_blank"><i class="fab fa-twitter"></i></a>
              </li>
            </ul>
          </div>
          <div class="busqueda">
            <table class="elementos">
              <tr>
                <td>
                  <input type="text" placeholder="Busqueda" class="search" />
                </td>
                <td>
                  <a href="#"><i class="material-icons">search</i></a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <div class="logo-container">
              <h4 class="logo">Pueblo y <span>Reforma</span></h4>
          </div>
          <button class="navbar-toggler third-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="animated-icon3"><span></span><span></span><span></span></div>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php
            wp_nav_menu(array(
                'theme_location' => 'top_menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
                  <!--<ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                      </ul>
                    </li>
                  </ul>-->
                </div>
              </div>
            </nav>
      
    </header>