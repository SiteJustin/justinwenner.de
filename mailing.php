<!DOCTYPE html>
<html lang="de">

<head>
  <?php
  @include 'elements/head.php';
  ?>
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
              <h1 class="headline1">Mailing</h1>

              <p class="pmailing">Mit diesem Formular können Sie sich in die Mailingliste eintragen. Wenn Sie sich in diese Liste eingetragen haben, dann bekommen Sie eine Benachrichtigung, wenn Justin Wenner oder andere Ihnen etwas mitteilen möchte.</p>

              <!--Spam-->
              <strong class="strongmailing">Spam:</strong>
              <p class="pstrongmailing"><strong>Nein</strong>, es wird kein Spam sein. Mails im Mailing sollten nicht häufiger als wöchentlich sein.</p>
              <!--Berechtigungen-->
              <strong class="strongmailing">Berechtigung:</strong>
              <p class="pstrongmailing">In diesem Abschnitt geht es darum wer die Berechtigung hat ein Mailing zu schreiben. Es haben nur die Moderatoren und Admins die Rechte ein Mailing zu schreiben. Alle Mitglieder können ein Mailing aufgeben aber das muss von den Moderatoren oder Admins freigegeben werden. Kein Mailing von einem Mitglied bekommt eine Freigabe, wenn das Spam ist oder nicht mit allen aus dem Team abgeprochen ist. Grundsetzlich werden die Mailings von Mitgliedern abgelehnt.</p>
              <!--Mailing schreiben-->
              <strong class="strongmailing">Mailing schreiben:</strong>
              <p class="pstrongmailing">Sie sind Mitglied von dem Mailing und möchten ein Mailing schreiben? Am besten ist es, wenn Sie sich mit dem Team absprechen, dass Sie ein Mailing schreiben möchten. Anfragen können Sie gerne an <a href="mailto:kontakt@justinwenner.de">kontakt@justinwenner.de</a> schicken. Sie können auch direkt ein Mailing schreiben, indem Sie eine Mail an <a href="mailto:mailing@justinwenner.de">mailing@justinwenner.de</a> schreiben. Das was Sie in diese Mail schreiben wird wenn es freigegeben wird dann in ihrem Namen als Mailing an alle Mitglieder des Mailings geschickt.</p>
              <!--Anmeldung zum Mailing-->
              <strong class="strongmailing">Anmeldung zum Mailing</strong>
              <p class="p2strongmailing">Sie müssen, um sich bei dem Mailing anzumelden das Formular auf dieser Seite ausfüllen und abschicken. Im Anschluss bekommen Sie eine Mail, wo Sie die Anmeldung nochmal bestätigen müssen. Die Mail enthält ein Link, auf den Sie klicken müssen und dann sind Sie bei dem Mailing angemeldet. Bei erfolgreichem Anmelden bekommen Sie eine weitere Mail zur Bestätigung.</p>
              <p class="smallmailing">Info: Die Mail zur Bestätigung kommt von der E-Mail: no.reply@oneandone.com und mit dem Namen: Mailinglisten-Manager. Falls Sie keine Mail erhalten sollten, dann schauen Sie in Ihrem Spam Ordner nach und füllen bei nicht auffinden der Mail das Formular erneut aus oder setzten Sie sich mit dem Team in Verbindung.</p>

              <!--weitere Themen-->
              <strong class="strongmailing">weitere Themen</strong>
              <p class="pstrongmailing">Falls Sie weitere Fragen haben, dann schreiben Sie die Frage gerne an <a href="mailto:kontakt@justinwenner.de">kontakt@justinwenner.de</a>. Wir werden auf Ihre Mail so schnell wie möglich antworten.</p>

              <!--Abstand---->
              <br>


              <!--Altert Warnung wegen automatischem Refresh--->
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Achtung!</strong> Durch eine technische Einstellung wird diese Seite automatisch nach 20 Sekunden aktualisiert und nach einer Aktualisierung werden die Eingabe gelöscht. Falls Sie länger als 20 Sekunden brauchen, um beide E-Mail Felder auszufüllen dann können Sie <a href="/mailingformular.php">hier</a> klicken. Mit diesem Link kommen Sie zu dem Formular auf einer anderen Seite, die sich nicht automatisch aktualisiert.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
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
  </main>
</body>

</html>