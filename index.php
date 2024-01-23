<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Tôn đẹp trai</title>
    <meta
      name="viewport"
      content="user-scalable=no, initial-scale=1, maximum-scale=0.5, minimum-scale=0.5, width=device-width"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div id="app-cover">
      <div id="bg-artwork"></div>
      <div id="bg-layer"></div>
      <div id="player">
        <div id="player-track">
          <div id="album-name"></div>
          <div id="track-name"></div>
          <div id="track-time">
            <div id="current-time"></div>
            <div id="track-length"></div>
          </div>
          <div id="s-area">
            <div id="ins-time"></div>
            <div id="s-hover"></div>
            <div id="seek-bar"></div>
          </div>
        </div>
        <div id="player-content">
          <div id="album-art">
            <img src="./Background/backg.jpg" class="active" id="_1" />
            <div id="buffer-box">Loading...</div>
          </div>
          <div id="player-controls">
            <div class="control">
              <div class="button" id="play-previous">
                <i class="fas fa-backward"></i>
              </div>
            </div>
            <div class="control">
              <div class="button" id="play-pause-button">
                <i class="fas fa-play"></i>
              </div>
            </div>
            <div class="control">
              <div class="button" id="play-next">
                <i class="fas fa-forward"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- partial -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./script.js"></script>
  </body>
</html>
