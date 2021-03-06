<?php

return [
    'description'   => 'Einige hilfreiche Tipps und Tricks, um dir mit Kanka zu helfen',
    'dice'          => [
        'description'               => 'Allgemeine Würfelwürfe sind möglich, wenn du "d20", "4d4+4", "d%" (Prozentwürfe) oder "df" (FUDGE-würfe) schreibst.',
        'description_attributes'    => 'Es ist auch möglich ein Charakterattribut zu verwenden mittels {character.attribute_name} Syntac. Zum Beispiel, {character.level}d6+{character.wisdom}.',
        'more'                      => 'Mehr Optionen sind verfügbar und werden auf der Würfelwurf-Plugin Seite erklärt.',
        'title'                     => 'Würfelwürfe',
    ],
    'filters'       => [
        'description'   => 'Sie können Filter verwenden, um die Anzahl der in Listen angezeigten Ergebnisse zu begrenzen. Textfelder unterstützen verschiedene Optionen, um detaillierter zu steuern, was herausgefiltert wird.',
        'empty'         => 'Schreibt man :tag in ein Feld wird in allen Objekten, bei denen dieses Feld leer ist gesucht.',
        'ending_with'   => 'Durch Platzieren eines :tag am Ende Ihres Textes können Sie nach jeder Entität mit genau diesem Text im Feld suchen.',
        'session'       => 'Filter und geordnete Spalten, die für eine Objektliste festgelegt wurden, werden in Ihrer Sitzung gespeichert. Solange Sie verbunden bleiben, müssen Sie sie nicht auf jeder Seite neu festlegen.',
        'starting_with' => 'Durch Platzieren eines :tag vor Ihrem Text können Sie nach Objekten suchen, die den Text in diesem Feld nicht enthalten.',
        'title'         => 'Verwendung von Filtern',
    ],
    'link'          => [
        'auto_update'       => 'Links zu ändern Objekten werden automatisch aktualisiert, wenn der Name des Ziels oder die Beschreibung sich geändert hat.',
        'description'       => 'Mit einem "@" kannst du ganz einfach Links zu anderen Einträgen setzen. Ein "#" zeigt dir stattdessen eine Namensliste mit Monaten aus deinen Kalendern an.',
        'friendly_mentions' => 'Verknüpfen Sie andere Objekte, indem Sie Folgendes eingeben :code und die ersten Zeichen eines Objekts, um danach zu suchen. Dadurch wird :example in den Texteditor eingefügt und beim Anzeigen dieses Objekts als Link zum Objekt verlinkt.',
        'limitations'       => 'Bitte beachten Sie, dass diese Abkürzungen aufgrund technischer Einschränkungen auf Android-Mobilgeräten nicht funktionieren.',
        'mentions'          => 'Verknüpfen Sie andere Objekte, indem Sie Folgendes eingeben :code und die ersten Zeichen eines Objekts, um danach zu suchen. Dies wird eingefügt :example im Texteditor. Um den Namen des angezeigten Objekts anzupassen, können Sie Folgendes eingeben: :example_name. Verwenden Sie zum Festlegen der Unterseite des Objekts :example_page. Verwenden Sie zum Festlegen der Registerkarte des Objekts :example_tab.',
        'months'            => 'Geben Sie :code ein, um eine Liste der Monate aus Ihrem Kalendern abzurufen.',
        'title'             => 'Andere Objekte verlinken',
    ],
    'map'           => [
        'description'   => 'Wenn Sie eine Karte an einen Ort hochladen, wird das Menü "Karte" auf der Ansichtsseite des Standorts und ein direkter Link zur Karte von der Standortseite der Kampagne aktiviert. In der Kartenansicht können Benutzer, die den Standort bearbeiten können, den Bearbeitungsmodus aktivieren, mit dem sie Kartenpunkte auf der Karte platzieren können. Diese können mit einem vorhandenen Objekt verknüpft sein oder ein Etikett sein und verschiedene Formen und Größen haben.',
        'private'       => 'Mitglieder in der Administratorrolle der Kampagne können eine Karte privat machen. Auf diese Weise können Benutzer einen Standort anzeigen, Administratoren können die Karte jedoch geheim halten.',
        'title'         => 'Standortkarten',
    ],
    'public'        => 'Sie die Tutorial Videos über öffentliche Kampagnen auf Youtube an.',
    'title'         => 'Hilfe',
];
