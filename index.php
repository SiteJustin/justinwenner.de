<!DOCTYPE html>
<html lang="de">

<head>
  <?php
  @include 'elements/head.php';
  ?>
  <title>Startseite - Justin Wenner</title>
  <link rel="stylesheet" href="css/index.css">

  <!----eigene Schriftart für #home--->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <?php
    @include 'elements/navigation.php';
    ?>
  </header>
  <main>
    <!--HOME-->
    <div id="home" class="home">
      <div class="hometext">
        <h1 class="hometexth1 headline">Willkommen</h1>
        <a href="#about" title="weiter scrollen"><img src="images/arrow-down.png" class="img-arrow-home" alt="Springe nach unten"></a>
      </div>
    </div>
    <!--ABOUT-->
    <div class="about" id="about">
      <hr class="index-hr">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-12">
            <img src="Images/justinwenner.png" class="about-img img-fluid" alt="">
          </div>
          <div class="col-md-6 col-12">
            <h3 class="about-h3 headline1">Herzlich Willkommen!</h3>
            <h5 clas="about-h5">Name: Justin Wenner</h5>
            <p class="about-p">Nachdem ich meinen mittlere Schulabschluss im Jahr 2020 absolviert habe, mache ich dereit eine Ausbildung zum Fachinformatiker.</p>
            <p class="about-p">Auf dieser Website finden Sie Informationen über mich und mit welchen Programmen, Tools ich mein Tagesablauf gestalte. Ich informiere hier auf dieser Seite auch über derzeitige Interessen und Themen, auf die ich mich derzeit konzentriere.</p>
            <p class="about-p">Über Projekte werde ich in naher Zukunft auch informieren und diese auf dieser Website freigeben. Ich werde Motivationen sagen, wie ich dazu gekommen bin die Projekte zu starten und in welchem Status diese derzeit sind.</p>
            <br>
            <br>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Wartung!</strong> Die Website ist derzeit noch nicht vollständig und wird noch entwickelt. Wir würden uns freuen, wenn Sie uns <a href="mailto:kontakt@justinwenner.de">per Mail</a> auf Fehler usw. aufmerksam machen.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <hr class="index-hr">
    </div>
    <!--Werdegang-->
    <div class="werdegang" id="werdegang">
      <h1 class="werdegang-title headline1">Werdegang</h1>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-6 ">
            <div class="shadow p-3 mb-3 bg-white rounded">
              <div class="row">
                <div class="col-6">
                  <h4>Grundschule</h4>
                </div>
                <div class="col-6">
                  <h5 class="text-right"><span aria-hidden="true"></span> 09/2008 - 07/2021</h5>
                </div>
              </div>
              <h5><span class="badge badge-secondary">Grundschule</span></h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, recusandae, corporis, tempore nam fugit deleniti sequi excepturi quod repellat laboriosam soluta laudantium amet dicta non ratione distinctio nihil dignissimos esse!</p>
            </div>
          </div>
          <div class="col-md-12 col-lg-6">
            <div class="shadow p-3 mb-3 bg-white rounded">
              <div class="row">
                <div class="col-6">
                  <h4>Realschule</h4>
                </div>
                <div class="col-6">
                  <h5 class="text-right"><span aria-hidden="true"></span> 09/2009 - 07/2020</h5>
                </div>
              </div>
              <h5><span class="badge badge-secondary">Realschule</span></h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, recusandae, corporis, tempore nam fugit deleniti sequi excepturi quod repellat laboriosam soluta laudantium amet dicta non ratione distinctio nihil dignissimos esse!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="shadow p-3 mb-3 bg-white rounded">
              <div class="row">
                <div class="col-6">
                  <h4>Fachinformatiker für Systemintegration</h4>
                </div>
                <div class="col-6">
                  <h5 class="text-right"><span aria-hidden="true"></span> 09/2020 - 08/2023</h5>
                </div>
              </div>
              <h5><span class="badge badge-secondary">Ausbildung inkl. Berufsschule</span></h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, recusandae, corporis, tempore nam fugit deleniti sequi excepturi quod repellat laboriosam soluta laudantium amet dicta non ratione distinctio nihil dignissimos esse!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="index-hr">
    <!--Fähigkeiten-->
    <div class="skills" id="skills">
      <h1 class="fähigkeiten-title headline1">Fähigkeiten</h1>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="progress mt-4">
              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"> Microsoft Office (Word, Excel, PP, ...)</div>
            </div>
            <div class="progress mt-4">
              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"> HTML</div>
            </div>
            <div class="progress mt-4">
              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> CSS</div>
            </div>
            <div class="progress mt-4">
              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 55%"> C++ / C#</div>
            </div>
            <div class="progress mt-4">
              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"> PHOTOSHOP</div>
            </div>
            <div class="progress mt-4">
              <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%"> PHP</div>
            </div>
            <div class="progress mt-4">
              <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> VMWare</div>
            </div>
            <p class="skillsp">weitere Fähigkeiten werden noch nachgetragen...</p>
          </div>
        </div>
      </div>
    </div>
    <hr class="index-hr">
  </main>
</body>

</html>