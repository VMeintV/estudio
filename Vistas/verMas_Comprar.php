<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <?php
  echo "<style>";
  include_once "../Estilos/estilos.css";
  echo "</style>";
  ?>

</head>

<body>

  <div class="container" style="margin-top: 100px">

    <!--Primera parte de juegos-->

    <div class="modal fade" id="verMasTLOU2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">The Last Of Us</h5>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <div class="card" style="width: 30rem;">
                <img class="card-img-top img-responsive" src="https://i.blogs.es/2696f8/tlou2/1366_2000.jpeg">
                <div class="card-body">
                  <h5 class="card-title">The Last Of Us II</h5>
                  <p>The Last of Us 2 es la secuela de The Last of Us,
                    uno de los juegos más aclamados de la consola PS3, que
                    apareció en 2015 en PS4 en versión remasterizada.
                    Esta continuación ha sido anunciada en
                    el evento PlayStation Experience de diciembre de 2016, generando
                    grandísimas expectativas entre los jugadores. </p>
                </div>
                <div class="form-group">
                  <label for="plataformaTLOU2">Plataforma</label>
                  <form method="POST">
                    <select class="form-control" name="plataformaTLOU2">
                      <option>PS4 (Exclusivo)</option>>
                    </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-dark" data-dismiss="modal">Ver menos</button>
            <button type="submit" name="comprarTLOU2" class="btn btn-success">Añadir al carrito</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="verMasRE3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Resident Evil</h5>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <div class="card" style="width: 30rem;">
                <img class="card-img-top img-responsive" src="https://www.eluniverso.com/sites/default/files/fotos/2019/12/hipertextual-se-filtran-primeras-imagenes-remake-resident-evil-3-2019614147-740x740_0.jpg">
                <div class="card-body">
                  <h5 class="card-title">Resident Evil 3: Remake</h5>
                  <p>Resident Evil 3 a​ —cuyo título original es Biohazard RE: 3—
                    es un videojuego japonés perteneciente al género de horror de supervivencia,
                    desarrollado por la empresa Capcom, el videojuego es una nueva versión del
                    videojuego de 1999 del mismo nombre, el videojuego fue filtrado en el año 2019,
                    aunque su lanzamiento fue confirmado oficialmente a finales del 2019 de mano
                    de la propia Capcom, para inicios del mes de abril del año 2020.</p>
                </div>
                <div class="form-group">
                  <label for="plataformaRE3">Plataforma</label>
                  <form method="POST">
                    <select class="form-control" name="plataformaRE3">
                      <option>PS4</option>
                      <option>Xbox One</option>
                      <option>PC (Windows)</option>
                  </form>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-dark" data-dismiss="modal">Ver menos</button>
            <button type="submit" name="comprarRE3" class="btn btn-success">Añadir al carrito</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="verMasFF7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Final Fantasy</h5>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <div class="card" style="width: 30rem;">
                <img class="card-img-top img-responsive" src="https://i.ytimg.com/vi/8IrheLf0Ki0/maxresdefault.jpg">
                <div class="card-body">
                  <h5 class="card-title">Final Fantasy VII Remake</h5>
                  <p>Final Fantasy VII Remake (ファイナルファンタジーVII リメイク Fainaru Fantajī VII Rimeiku)
                    es un videojuego de rol de acción en desarrollo, publicado por la empresa
                    Square Enix para la plataforma PlayStation 4, con fecha de lanzamiento para
                    el 10 de abril de 2020, con una exclusividad temporal de un año.</p>
                </div>
                <div class="form-group">
                  <label for="plataformaFF7">Plataforma</label>
                  <form method="POST">
                    <select class="form-control" name="plataformaFF7">
                      <option>PS4 (Exclusiva temporal)</option>>
                    </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-dark" data-dismiss="modal">Ver menos</button>
            <button type="submit" name="comprarFF7" class="btn btn-success">Añadir al carrito</button>
            </form>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!--The Last Of Us II-->
    <!--Resident Evil 3: Remake-->
    <!--Final Fantasy VII Remake-->

    <!--Segunda parte de juegos-->

    <div class="modal fade" id="verMasFS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Flight Simulator</h5>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <div class="card" style="width: 30rem;">
                <img class="card-img-top img-responsive" src="https://i.blogs.es/d08573/screenshot_11/1366_2000.jpeg">
                <div class="card-body">
                  <h5 class="card-title">Flight Simulator 2020</h5>
                  <p>Microsoft Flight Simulator (también conocido como Flight Simulator 2020, abreviado FS2020)
                    es un simulador de vuelo desarrollado por Asobo Studio y programado para ser publicado por
                    Xbox Game Studios para el sistema operativo Windows 10 en algún momento de 2020, con un
                    lanzamiento previsto para Xbox One en una fecha posterior.</p>
                </div>
                <div class="form-group">
                  <label for="plataformaFS">Plataforma</label>
                  <form method="POST">
                    <select class="form-control" name="plataformaFS">
                      <option>Xbox One</option>
                      <option>PC (Windows)</option>
                    </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-dark" data-dismiss="modal">Ver menos</button>
            <button type="submit" name="comprarFS" class="btn btn-success">Añadir al carrito</button>
            </form>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="verMasMD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Minecraft</h5>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <div class="card" style="width: 30rem;">
                <img class="card-img-top img-responsive" src="https://media.vandal.net/i/1200x630/3-2020/202033118263724_1.jpg">
                <div class="card-body">
                  <h5 class="card-title">Minecraft Dungeons</h5>
                  <p>Minecraft: Dungeons es un próximo videojuego de acción-aventura y rol desarrollado por
                    Mojang AB y Xbox Game Studios. Se lanzará en abril de 2020 para Windows 10, Xbox One,
                    Nintendo Switch y PlayStation 4.</p>
                </div>
                <div class="form-group">
                  <label for="plataformaMD">Plataforma</label>
                  <form method="POST">
                    <select class="form-control" name="plataformaMD">
                      <option>Nintendo Switch</option>
                      <option>PS4</option>
                      <option>Xbox One</option>
                      <option>PC (Windows y macOS)</option>
                    </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-dark" data-dismiss="modal">Ver menos</button>
            <button type="submit" name="comprarMD" class="btn btn-success">Añadir al carrito</button>
            </form>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="verMasHI" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Halo</h5>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <div class="card" style="width: 30rem;">
                <img class="card-img-top img-responsive" src="https://image.halocdn.com/?path=https:%2F%2Fcontent.halocdn.com%2Fmedia%2FDefault%2Fgames%2Fhalo-infinite%2Fhalo_infinite_social_takeover_waypoint-hero-large-1920x675-c0a2b69586014f509881428f25e68afa.png&leftCrop=560&rightCrop=560&hash=cj6ZaRSh3Oj%2B1kgJDyKd7hTHtZi2AdD9OVZ5kn0%2FGX4%3D">
                <div class="card-body">
                  <h5 class="card-title">Halo Infinite</h5>
                  <p>Desarrollado por 343 Industries para toda la familia de dispositivos Xbox,
                    incluyendo Xbox Series X y PC Windows, Halo Infinite continúa la historia
                    de Halo 5: Guardians y dirige a la franquicia hacia direcciones ambiciosas e inesperadas,
                    impulsada por el nuevo motor Slipspace.</p>
                </div>
                <div class="form-group">
                  <label for="plataformaHI">Plataforma</label>
                  <form method="POST">
                    <select class="form-control" name="plataformaHI">
                      <option>Xbox One</option>
                      <option>Xbox Series X</option>
                      <option>PC (Windows)</option>
                    </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-dark" data-dismiss="modal">Ver menos</button>
            <button type="submit" name="comprarHI" class="btn btn-success">Añadir al carrito</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!--Flight Simulator 2020-->
    <!--Minecraft Dungeons-->
    <!--Halo Infinite-->


    <!--Figuras-->

    <div class="modal fade" id="verMasFCS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Final Fantasy VII Remake</h5>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <div class="card" style="width: 30rem;">
                <img class="card-img-top img-responsive" src="https://statics.vrutal.com/m/b949/b949588f02b2f33973c7f40db63ca590.jpg">
                <div class="card-body">
                  <h5 class="card-title">Cloud Strife</h5>
                  <p>Cloud Strife es el héroe principal del RPG Final Fantasy VII,
                    de Squaresoft. También ha participado como «invitado» en
                    Kingdom Hearts y Super Smash Bros. Su voz en el doblaje japonés
                    corre a cargo del actor Takahiro Sakurai.</p>
                </div>
                <div class="form-group">
                  <label for="tamañoFCS">Tamaño</label>
                  <form method="POST">
                    <select class="form-control" name="tamañoFCS">
                      <option>Tamaño estandar</option>
                      <option>Tamaño pequeño</option>
                    </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-dark" data-dismiss="modal">Ver menos</button>
            <button type="submit" name="comprarFCS" class="btn btn-success">Añadir al carrito</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="verMasFBW" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Final Fantasy VII Remake</h5>
          </div>
          <div class="modal-body">
            <div class="card" style="width: 30rem;">
              <img class="card-img-top img-responsive" src="https://cl.buscafs.com/www.levelup.com/public/uploads/images/621045_670x670.jpg">
              <div class="card-body">
                <h5 class="card-title">Barret Wallace</h5>
                <p>Barret Wallace es un personaje jugador en el videojuego de rol de Square Enix Final Fantasy VII.</p>
              </div>
              <div class="form-group">
                <label for="tamañoFCS">Tamaño</label>
                <form method="POST">
                  <select class="form-control" name="tamañoFBW">
                    <option>Tamaño estandar</option>
                    <option>Tamaño pequeño</option>
                  </select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-dark" data-dismiss="modal">Ver menos</button>
            <button type="submit" name="comprarFBW" class="btn btn-success">Añadir al carrito</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="verMasFW" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Overwatch</h5>
          </div>
          <div class="modal-body">
            <div class="card" style="width: 30rem;">
              <img class="card-img-top img-responsive" src="https://i.pinimg.com/originals/40/7e/20/407e2051c14489120715cd19788b7e4f.jpg">
              <div class="card-body">
                <h5 class="card-title">Widowmaker</h5>
                <p>Amèlie Guillard Lacroix, más conocida como Widowmaker, es un personaje
                  ficticio del videojuego de disparos en primera persona Overwatch​ desarrollado
                  por Blizzard Entertainment​.</p>
              </div>
              <div class="form-group">
                <label for="tamañoFCS">Tamaño</label>
                <form method="POST">
                  <select class="form-control" name="tamañoFW">
                    <option>Tamaño estandar</option>
                    <option>Tamaño pequeño</option>
                  </select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-dark" data-dismiss="modal">Ver menos</button>
            <button type="submit" name="comprarFW" class="btn btn-success">Añadir al carrito</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!--Figura Cloud Strife-->
    <!--Figura Barret Wallace-->
    <!--Figura WidowMaker-->



    <!--Playeras-->

    <div class="modal fade" id="verMasPCODMW3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Call of Duty</h5>
          </div>
          <div class="modal-body">
            <div class="card" style="width: 30rem;">
              <img class="card-img-top img-responsive" src="https://d26lpennugtm8s.cloudfront.net/stores/114/482/products/m113-e4408ce114ef527cc815132787035620-1024-1024.jpg">
              <div class="card-body">
                <h5 class="card-title">Modern Warfare 3</h5>
                <p>Call of Duty: Modern Warfare 3 es un videojuego de disparos en primera
                  persona desarrollado por Infinity Ward y Sledgehammer Games,
                  con el trabajo adicional de Raven Software, y distribuido por Activision. </p>
              </div>
              <div class="form-group">
                <label for="tamañoFCS">Tamaño</label>
                <form method="POST">
                  <select class="form-control" name="tamañoPCODMW3">
                    <option>Chica-S</option>
                    <option>Mediana-M</option>
                    <option>Grande-X</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="tamañoFCS">Manga</label>
                <select class="form-control" name="mangaPCODMW3">
                  <option>Manga Larga</option>
                  <option>manga corta</option>
                </select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-dark" data-dismiss="modal">Ver menos</button>
            <button type="submit" name="comprarPCODMW3" class="btn btn-success">Añadir al carrito</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="verMasPO" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Overwatch</h5>
          </div>
          <div class="modal-body">
            <div class="card" style="width: 30rem;">
              <img class="card-img-top img-responsive" src="https://gameplanet-53f8.kxcdn.com/media/catalog/product/cache/4/image/9df78eab33525d08d6e5fb8d27136e95/o/v/overwatch-logo-gris_1.jpg">
              <div class="card-body">
                <h5 class="card-title">Overwatch</h5>
                <p>Overwatch es un videojuego de disparos en primera persona multijugador,
                  desarrollado por Blizzard Entertainment. Fue lanzado al público el
                  24 de mayo del 2016, para las plataformas PlayStation 4, Xbox One,
                  Microsoft Windows y Nintendo Switch.​</p>
              </div>
              <div class="form-group">
                <label for="tamañoFCS">Tamaño</label>
                <form method="POST">
                  <select class="form-control" name="tamañoPO">
                    <option>Chica-S</option>
                    <option>Mediana-M</option>
                    <option>Grande-X</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="tamañoFCS">Manga</label>
                <select class="form-control" name="mangaPO">
                  <option>Manga Larga</option>
                  <option>manga corta</option>
                </select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-dark" data-dismiss="modal">Ver menos</button>
            <button type="submit" name="comprarPO" class="btn btn-success">Añadir al carrito</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="verMasPMK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mortal Kombat</h5>
          </div>
          <div class="modal-body">
            <div class="card" style="width: 30rem;">
              <img class="card-img-top img-responsive" src="https://ae01.alicdn.com/kf/HTB1XJKzNFXXXXaeXXXXq6xXFXXXa/Nuevo-juego-Mortal-Kombat-hombres-camiseta-MK-Dragon-Man-Camiseta-cuello-redondo-cl-sico-SUB-ZERO.jpg">
              <div class="card-body">
                <h5 class="card-title">Mortal Kombat</h5>
                <p>Mortal Kombat es una franquicia de videojuegos de peleas creada por
                  Ed Boon y John Tobias en 1992. Las cuatro primeras entregas fueron distribuidas
                  por Midway Games y lanzadas principalmente en máquinas arcade; posteriormente
                  estuvieron disponibles en consolas domésticas.</p>
              </div>
              <div class="form-group">
                <label for="tamañoFCS">Tamaño</label>
                <form method="POST">
                  <select class="form-control" name="tamañoPMK">
                    <option>Chica-S</option>
                    <option>Mediana-M</option>
                    <option>Grande-X</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="tamañoFCS">Manga</label>
                <select class="form-control" name="mangaMK">
                  <option>Manga Larga</option>
                  <option>manga corta</option>
                </select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-dark" data-dismiss="modal">Ver menos</button>
            <button type="submit" name="comprarPMK" class="btn btn-success">Añadir al carrito</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!--Playera COD: Modern Warfare 3-->
    <!--Playera Overwatch-->
    <!--Playera Mortal Kombat-->





  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>