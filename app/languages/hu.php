<?php

return array(
  'title' => 'Hungarian',
  'direction' => 'ltr',
  'author' => 'Dávid Bóta <kukac7@gmail.com>',
  'version' => '0.0.1',
  'data' => array(

    // global
    'cancel' => 'Mégsem',
    'add' => 'Hozzáad',
    'save' => 'Mentés',
    'saved' => 'Mentve!',
    'delete' => 'Törlés',
    'insert' => 'Beilleszt',
    'ok' => 'Ok',

    // options (sidebar)
    'options.show' => 'Beállítások mutatása',
    'options.hide' => 'Beállítások elrejtése',

    // installation
    'installation' => 'Telepítés',
    'installation.check.headline' => 'Kirby Panel telepítés',
    'installation.check.text' => 'Kirby az alábbi problémával találkozott…',
    'installation.check.retry' => 'Újból',
    'installation.check.error' => 'Van néhány probléma!',
    'installation.check.error.accounts' => '/site/accounts nem írható',
    'installation.check.error.avatars' => '/assets/avatars nem írható',
    'installation.check.error.blueprints' => 'Kérlek hozd létre a site/blueprints mappát',
    'installation.check.error.content' => 'A content mappa és az összes tartalmazott mappának és fájlnak írhatónak kell lennie.',
    'installation.check.error.thumbs' => 'A thumbs mappának írhatónak kell lennie.',
    'installation.signup.username.label' => 'Első fiók létrehozása',
    'installation.signup.username.placeholder' => 'Felhasználónév',
    'installation.signup.email.label' => 'Email',
    'installation.signup.email.placeholder' => 'mail@példa.hu',
    'installation.signup.password.label' => 'Jelszó',
    'installation.signup.language.label' => 'Nyelv',
    'installation.signup.button' => 'Fiókod létrehozása',

    // login
    'login' => 'Belépés',
    'login.welcome' => 'Kérlek lépj be az új fiókoddal',
    'login.username.label' => 'Felhasználónév',
    'login.password.label' => 'Jelszó',
    'login.error' => 'Érvénytelen felhasználónév vagy jelszó',
    'login.button' => 'Belépés',

    // logout
    'logout' => 'Kijelentkezés',

    // dashboard
    'dashboard' => 'Vezérlőközpont',
    'dashboard.index.pages.title' => 'Oldalak',
    'dashboard.index.pages.edit' => 'Edit',
    'dashboard.index.pages.add' => 'Új oldal',
    'dashboard.index.site.title' => 'Honlapod URL-je',
    'dashboard.index.account.title' => 'Fiókod',
    'dashboard.index.account.edit' => 'Szerkesztés',
    'dashboard.index.metatags.title' => 'Metatagok',
    'dashboard.index.metatags.edit' => 'Szerkesztés',
    'dashboard.index.history.title' => 'Legutóbbi frissítések',
    'dashboard.index.history.text' => 'Az általad legutóbb módosított oldalakat találod itt, hogy könnyebben megtaláld újból.',

    // metatags
    'metatags' => 'Metatagok',
    'metatags.back' => 'Vissza a vezerlőközpontba',

    // pages
    'pages.show.settings' => 'Oldal beállítások',
    'pages.show.preview' => 'Előnézet megnyitása',
    'pages.show.changeurl' => 'URL változtatása',
    'pages.show.delete' => 'Oldal törlése',
    'pages.show.subpages.title' => 'Aloldalak',
    'pages.show.subpages.edit' => 'Edit',
    'pages.show.subpages.add' => 'Új aloldal',
    'pages.show.subpages.empty' => 'Az oldalhoz nem tartoznak aloldalak',
    'pages.show.files.title' => 'Fájlok',
    'pages.show.files.edit' => 'Edit',
    'pages.show.files.add' => 'Új hozzáadása',
    'pages.show.files.empty' => 'Az oldalhoz nem tartoznak fájlok',
    'pages.show.error.permissions.title' => 'Az oldal nem írható',
    'pages.show.error.permissions.text'  => 'Kérlek ellenőrizd a content mappa és a fájlok jogosultságát.',
    'pages.show.error.permissions.retry'  => 'Újból',
    'pages.show.error.form'  => 'Kérlek minden mezőt tölts ki',

    'pages.add.title.label' => 'Új aloldal hozzáadása',
    'pages.add.title.placeholder' => 'Cím',
    'pages.add.url.label' => 'URL név',
    'pages.add.url.enter' => '(add meg a címet)',
    'pages.add.url.close' => 'Bezár',
    'pages.add.url.help' => 'Formátum: kisbetűs a-z, 0-9 és kötőjel',
    'pages.add.template.label' => 'Sablon',
    'pages.add.error.title' => 'Hiányzik a cím',
    'pages.add.error.template' => 'A sablon hiányzik',
    'pages.add.error.max.headline' => 'Új oldal látrehozása nem engedélyezett',
    'pages.add.error.max.text' => 'A maximum létrehozható aloldalak számát elérted.',
    'pages.url.uid.label' => 'URL név',
    'pages.url.uid.label.option' => 'Címből készítés',
    'pages.url.error.exists' => 'Van már egy másik oldal ezzel az URL-lel',
    'pages.url.error.move' => 'Az URL nincs megváltoztatva',
    'pages.delete.headline' => 'Biztos vagy benne, hogy törlöd az oldalt?',
    'pages.delete.error.home.headline' => 'A főoldal nem törölhető',
    'pages.delete.error.home.text' => 'Te a főoldalt próbálod törölni. Ez nem lehetséges és beláthatatlan következményei lennének.',
    'pages.delete.error.error.headline' => 'A hiba oldal nem törölhető',
    'pages.delete.error.error.text' => 'Te a hiba oldalt próbálod törölni. Ez nem lehetséges és beláthatatlan következményei lennének.',
    'pages.delete.error.children.headline' => 'Az oldal nem törölhető',
    'pages.delete.error.children.text' => 'Az oldalnak vannak aloldalai és nem törölhető.Előbb töröld az összes aloldalt.',
    'pages.delete.error.blocked.headline' => 'Az oldal nem törölhető',
    'pages.delete.error.blocked.text' => 'Ez az oldal zárolt és nem törölhető.',
    'pages.search.help' => 'Keresés URL szerint.Navigálhatsz a fel és le nyilakkal és az enter-rel ugorhatsz a kiválasztott oldalhoz.',
    'pages.search.noresults' => 'Amire kerestél, nincs találat. Kérlek próbáld meg egy másik URL-lel.',
    'pages.error.missing' => 'Az oldal nem található',

    // subpages
    'subpages' => 'Aloldalak',
    'subpages.index.headline' => 'Aloldalak kezelése ennél: ',
    'subpages.index.back' => 'Vissza',
    'subpages.index.add' => 'Új aloldal',
    'subpages.index.add.first.text' => 'Ennek az oldalnak még nincs aloldala',
    'subpages.index.add.first.button' => 'Az első aloldal hozzáadása',
    'subpages.index.visible' => 'Látható aloldalak',
    'subpages.index.visible.help' => 'Fogd meg jobbról az oldalt és rendezd vagy tedd láthatóvá.',
    'subpages.index.invisible' => 'Láthatatlan aloldalak',
    'subpages.index.invisible.help' => 'Fogd meg balról az oldalt és rendezd vagy tedd láthatatlanná.',
    'subpages.error.missing' => 'Az oldal nem található',

    // files
    'files' => 'Fájlok',
    'files.index.headline' => 'Fájlkezelés ennél: ',
    'files.index.back' => 'Vissza',
    'files.index.upload' => 'Új fájl feltöltése',
    'files.index.upload.first.text' => 'Ennél az oldalnál még nincs fájl feltöltve',
    'files.index.upload.first.button' => 'Töltsd fel az első fájlt',
    'files.index.edit' => 'Szerkeszt',
    'files.index.delete' => 'Töröl',
    'files.show.name.label' => 'Fájlnév',
    'files.show.info.label' => 'Típus / fájlméret / méretek',
    'files.show.link.label' => 'Publikus link',
    'files.show.open' => 'Fájl megtekintése/letöltése',
    'files.show.back' => 'Vissza',
    'files.show.replace' => 'Cserél',
    'files.show.delete' => 'Töröl',
    'files.show.error.rename' => 'A fájl nem nevezhető át',
    'files.show.error.form' => 'Kérlek minden mezőt tölts ki',
    'files.upload.drop' => 'Dobd a fájlokat ide…',
    'files.upload.click' => '…vagy kattints ide a feltöltéshez',
    'files.replace.drop' => 'Dobd a fájlt ide…',
    'files.replace.click' => '…vagy kattints ide a cseréhez',
    'files.replace.error.type' => 'A feltöltött fájlnak azonos a típusa',
    'files.delete.headline' => 'Biztos törölni akarod ezt a fájlt?',
    'files.error.missing.page' => 'Az oldal nem található',
    'files.error.missing.file' => 'A fájl nem található',

    // users
    'users' => 'Felhasználók',
    'users.index.headline' => 'Összes felhasználó',
    'users.index.add' => 'Új felhasználó',
    'users.index.edit' => 'szerkeszt',
    'users.index.delete' => 'töröl',
    'users.form.username.label' => 'Felhasználónév',
    'users.form.username.placeholder' => 'Felhasználóneved',
    'users.form.username.help' => 'Engedélyezett karakterek: kisbetűs a-z, 0-9 és kötőjel',
    'users.form.username.readonly' => 'A felhasználónév nem változtatható meg',
    'users.form.firstname.label' => 'Keresztnév',
    'users.form.lastname.label' => 'Vezetéknév',
    'users.form.email.label' => 'Email',
    'users.form.email.placeholder' => 'mail@pálda.hu',
    'users.form.password.label' => 'Jelszó',
    'users.form.password.confirm.label' => 'Jelszó megerősítése',
    'users.form.password.new.label' => 'Új jelszó',
    'users.form.password.new.confirm.label' => 'Az új jelszó megerősítése',
    'users.form.password.new.help' => 'Hagyd üresen, ha a jelenlegi jelszót meg akarod tartani',
    'users.form.language.label' => 'Nyelv',
    'users.form.role.label' => 'Role',
    'users.form.options.headline' => 'Fiók beállítások',
    'users.form.options.message' => 'Email küldése',
    'users.form.options.delete' => 'Fiók törlése',
    'users.form.avatar.headline' => 'Profil kép',
    'users.form.avatar.upload' => 'Profil kép feltöltése',
    'users.form.avatar.replace' => 'Profil kép cseréje',
    'users.form.avatar.delete' => 'Profil kép törlése',
    'users.form.back' => 'Vissza a felhasználókhoz',
    'users.form.error.password.confirm' => 'Kérlek erősítsd meg a jelszót',
    'users.form.error.update' => 'A felhasználó nem frissíthető',
    'users.form.error.create' => 'A felhasználó nem hozható létre',
    'users.form.error.permissions.title' => 'A account mappa nem írható',
    'users.form.error.permissions.text' => 'Kérlek ellenőrizd, hogy a /site/accounts mappa létezik és írható.',
    'users.delete.headline' => 'Biztos törlöd ezt a felhasználót?',
    'users.delete.error' => 'A felhasználó nem törölhető',
    'users.avatar.drop' => 'Dobd a profil képet ide…',
    'users.avatar.click' => '…vagy kattints ide a feltöltéshez',
    'users.avatar.error.type' => 'Csak JPG, PNG és GIF fájl tölthető fel',
    'users.avatar.error.folder.headline' => 'Az avatar mappa nem írható',
    'users.avatar.error.folder.text' => 'Kérlek hozd létre a <strong>/assets/avatars</strong> mappát és tedd írhatóvá a profil képek feltöltéséhez.',
    'users.avatar.delete.error' => 'A profil kép nem törölhető',
    'users.avatar.delete.success' => 'A profil kép törölve',
    'users.error.missing' => 'A felhasználó nem található',

    // form fields
    'fields.required' => 'Kötelező',
    'fields.date.label' => 'Dátum',
    'fields.date.months' => array(
      'január',
      'február',
      'március',
      'április',
      'május',
      'június',
      'július',
      'augusztus',
      'szeptember',
      'október',
      'november',
      'december'
    ),
    'fields.date.weekdays' => array(
      'vasárnap',
      'hétfő',
      'kedd',
      'szerda',
      'csütörtök',
      'péntek',
      'szombat'
    ),
    'fields.date.weekdays.short' => array(
      'va',
      'hé',
      'ke',
      'sze',
      'csü',
      'pé',
      'szo'
    ),
    'fields.email.label' => 'Email',
    'fields.email.placeholder' => 'mail@példa.hu',
    'fields.number.label' => 'Szám',
    'fields.number.placeholder' => '#',
    'fields.page.label' => 'Oldal',
    'fields.page.placeholder' => 'az/oldal/elérése',
    'fields.password.label' => 'Jelszó',
    'fields.structure.add' => 'Új',
    'fields.structure.add.first' => 'Első bejegyzés hozzáadása',
    'fields.structure.empty' => 'Nincs még bejegyzés',
    'fields.structure.cancel' => 'Mégse',
    'fields.structure.save' => 'Mentés',
    'fields.structure.edit' => 'Szerkeszt',
    'fields.structure.delete' => 'Törlés',
    'fields.tags.label' => 'Címkék',
    'fields.tel.label' => 'Telefon',
    'fields.textarea.buttons.bold.label' => 'Félkövér szöveg',
    'fields.textarea.buttons.bold.text' => 'Félkövér szöveg',
    'fields.textarea.buttons.italic.label' => 'Dölt szöveg',
    'fields.textarea.buttons.italic.text' => 'Dölt szöveg',
    'fields.textarea.buttons.link.label' => 'Link',
    'fields.textarea.buttons.email.label' => 'Email',
    'fields.textarea.buttons.image.label' => 'Kép',
    'fields.textarea.buttons.file.label' => 'Fájl',
    'fields.toggle.yes' => 'Igen',
    'fields.toggle.no' => 'Nem',
    'fields.toggle.on' => 'Be',
    'fields.toggle.off' => 'Ki',

    // textarea overlays
    'editor.link.url.label' => 'URL beillesztése',
    'editor.link.text.label' => 'Link szöveg',
    'editor.link.text.help' => 'A link szövege nem kötelező',
    'editor.email.address.label' => 'Email cím beillesztése',
    'editor.email.address.placeholder' => 'mail@példa.hu',
    'editor.email.text.label' => 'Link szöveg',
    'editor.email.text.help' => 'A link szövege nem kötelező',
    'editor.file.empty' => 'Az oldalnak nincsenek fájljai',
    'editor.image.empty' => 'Az oldalnak nincsenek képei',

    // error page
    'error' => 'Hiba',
    'error.headline' => 'Hiba',

  )
);
