<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>

    <!---CSS für die Navigationsleiste--->
    <link rel="stylesheet" href="css/navigation.css">

    <!---CSS für alle Seiten, die die head.php eingebunden bekommen--->
    <link href="css/style.css" rel="stylesheet">

    <!---Favicon----->
    <link rel="icon" type="image/vnd.microsoft.icon" href="images/favicon.png">


    <!---Schriftarten---->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <!---
Zum Benutzen in CSS
font-family: 'Permanent Marker', cursive;
-->
    <title>Mailing - Justin Wenner</title>
    <link rel="stylesheet" href="css/mailing.css">

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
        <div>
            <!--Text-->
            <div class="mailing">
                <div class="mailing shadow p-3 mb-5 mt-3 bg-white rounded">
                    <div class="notfound-404">
                        <h1 class="headline">Mailing</h1>

                        <p class="pmailing">Mit diesem Formular können Sie sich in die Mailingliste eintragen. Wenn Sie sich in diese Liste eingetragen haben, dann bekommen Sie eine Benachrichtigung, wenn Justin Wenner oder andere Ihnen etwas mitteilen möchte.</p>

                        <!--Abstand---->
                        <br>

                        <!--Altert Warnung wegen automatischem Refresh--->
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Bist du richtig?</h4>
                            <p>Du befindest dich auf der Seite, die sich <strong>nicht</strong> automatisch aktualisiert.</p>
                            <hr>
                            <p class="mb-0">Stand dieser Website ist von dem 08.02.2021. Wenn du falsch bist, dann klicke <a href="/mailing.php">hier</a>.</p>
                        </div>

                        <!--Formular-->
                        <form action="https://ml.kundenserver.de/cgi-bin/mailinglist.cgi" method="POST" target="_blank">
                            <div style="margin-left: 5px">
                                <input checked name="subscribe_r" type="radio" value="subscribe">
                                Ja, ich möchte auf die Mailingliste von Justin Wenner.
                                <br />
                                <input name="subscribe_r" type="radio" value="unsubscribe">
                                Bitte streichen Sie mich wieder von der Mailingliste von Justin Wenner.
                                <br />
                            </div>
                            <div class="row g-2">
                                <div class="col-md" style="padding: 0px 10px 0px 10px;">
                                    <div class="form-floating" style="margin:0px 10px 0px 10px;">
                                        <label style="margin:0px;">E-Mail Adresse</label>
                                        <input maxlength="51" name="mailaccount_r" size="51" type="text" class="form-control" id="floatingInputGrid" placeholder="max@mustermann.com">
                                    </div>
                                </div>
                                <div class="col-md" style="padding: 0px 10px 0px 10px;">
                                    <div class="form-floating" style="margin:0px 10px 0px 10px; ">
                                        <label style="margin:0px;">E-Mail Adresse wiederholen</label>
                                        <input maxlength="51" name="mailaccount2_r" size="51" type="text" class="form-control" id="floatingInputGrid" placeholder="max@mustermann.com">
                                    </div>
                                </div>
                            </div>
                            <p class="infosmallmailing">Mit dem Absenden bestätigen Sie, dass es sein kann, dass andere mitbekommen, dass Sie sich zu diesem Mailing angemeldet haben.</p>
                            <button type="SUBMIT" class="btn btn-outline-success btn-margin">Senden</button>
                            <br>
                            <input name="FBMLNAME" type="hidden" value="mailing@justinwenner.de">
                            <br />
                            <input name="FBLANG" type="hidden" value="de">
                            <br />
                            <input name="FBURLERROR_L" type="hidden" value="https://ml.kundenserver.de/mailinglist/error.de.html">
                            <br />
                            <input name="FBURLSUBSCRIBE_L" type="hidden" value="https://ml.kundenserver.de/mailinglist/subscribe.de.html">
                            <br />
                            <input name="FBURLUNSUBSCRIBE_L" type="hidden" value="https://ml.kundenserver.de/mailinglist/unsubscribe.de.html">
                            <br />
                            <input name="FBURLINVALID_L" type="hidden" value="https://ml.kundenserver.de/mailinglist/invalid.de.html">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>