<?php

declare(strict_types=1);

require_once IPS_GetScriptFile(MapLocalConstant('HM_INSTANCE_REVISE_HELPER'));

// HM_ShowNormalize('HmIP-xxx', '00000000000000');

/*
HM_Normalize('HM-LC-Dim1TPBU-FM', 'QEQ0342340', 'Lichtschiene');
HM_Normalize('HM-LC-Sw4-Ba-PCB', 'OEQ1048777', 'Trafo', [ 1 => 'Trafo#1 - Feinstaubsensor', 2 => 'Trafo#2 - Weatherman', 3 => 'Trafo#3 - tasmotaBT' ]);

HM_Normalize('HmIP-BRC2', '0019DA49A71714', 'Hängeschrank Taster'); // Küche
HM_Normalize('HmIP-BRC2', '0019DBE98FB2F2', 'Lichtschiene Esstisch Taster'); // Wohnzimmer
HM_Normalize('HmIP-BRC2', '0019DBE98FB3E0', 'Lichtschiene Taster'); // Küche
HM_Normalize('HmIP-BRC2', '0019DBE98FB417', 'Licht Taster 1');
HM_Normalize('HmIP-BRC2', '0019DBE98FB8DE', 'Lichtschiene Sofa Taster'); // Wohnzimmer
HM_Normalize('HmIP-BRC2', '0019DBE9942C5A', 'Licht Taster 1');
HM_Normalize('HmIP-BRC2', '0019DBE9942C66', 'Licht Taster 2');
HM_Normalize('HmIP-BRC2', '0019DBE9942C74', 'Licht Taster 2');
HM_Normalize('HmIP-BRC2', '0019DBE9943135', 'Licht Taster');
HM_Normalize('HmIP-BRC2', '0019DBE9943159', 'Licht Taster 1');
HM_Normalize('HmIP-BRC2', '0019DBE994315D', 'Licht Taster 2');
HM_Normalize('HmIP-BRC2', '0019DBE9943161', 'Licht vorne Taster');
HM_Normalize('HmIP-BRC2', '0019DBE99D7AED', 'Taster', [ 1 => 'Taster unten', 2 => 'Taster oben' ]); // Eltern-Schlafzimmer
HM_Normalize('HmIP-BROLL', '00111BE98B7EAB', 'Rolladen');
HM_Normalize('HmIP-BROLL', '00111BE99841D0', 'Rolladen mitte');
HM_Normalize('HmIP-BROLL', '00111BE99841E9', 'Rolladen');
HM_Normalize('HmIP-BROLL', '00111BE99841F0', 'Rolladen');
HM_Normalize('HmIP-BROLL', '00111BE998424B', 'Rolladen Garten');
HM_Normalize('HmIP-BROLL', '00111BE9984251', 'Rolladen links');
HM_Normalize('HmIP-BROLL', '00111BE9984264', 'Rolladen rechts');
HM_Normalize('HmIP-BROLL', '00111BE998426D', 'Rolladen Vorplatz');
HM_Normalize('HmIP-BROLL', '00111BE99843A1', 'Rolladen');
HM_Normalize('HmIP-BROLL', '00111D8994B20A', 'Rolladen');
HM_Normalize('HmIP-BROLL', '00111D8994B25D', 'Rolladen');
HM_Normalize('HmIP-BS2', '00315F298E56D2', 'Schalter', [ 4 => 'Schalter Licht (oben)', 8 => 'Schalter Ventilator (unten)' ]);
HM_Normalize('HmIP-BS2', '00315F298E5B66', 'Schalter', [ 1 => 'Schalter (Taster oben)', 2 => 'Schalter (Taster unten)', 4 => 'Schalter Licht (oben)', 8 => 'Schalter Ventilator (unten)' ]); // Jaana-Wohnzimmer
HM_Normalize('HmIP-BSM', '00085A498AB678', 'Licht');
HM_Normalize('HmIP-BSM', '00085A499BEC01', 'Aussenleuchte');
HM_Normalize('HmIP-BSM', '00085BE98C269F', 'Licht Fenster');
HM_Normalize('HmIP-BSM', '00085BE98C26A7', 'Licht');
HM_Normalize('HmIP-BSM', '00085BE98C26ED', 'Nachtlicht');
HM_Normalize('HmIP-BSM', '00085BE98C2788', 'Lichtschiene Esstisch'); // Wohnzimmer
HM_Normalize('HmIP-BSM', '00085BE98C2797', 'Sideboard'); // Wohnzimmer
HM_Normalize('HmIP-BSM', '00085BE98C27A9', 'Lichtschiene Sofa'); // Wohnzimmer
HM_Normalize('HmIP-BSM', '00085BE98C27B5', 'Aussenleuchte', [ 1 => 'Aussenleuchte (Taster unten)', 2 => 'Aussenleuchte (Taster oben)' ]); // Flur
HM_Normalize('HmIP-BSM', '00085BE98C27B8', 'Lichtschiene');
HM_Normalize('HmIP-BSM', '00085BE98C27C9', 'Licht');
HM_Normalize('HmIP-BSM', '00085BE98C27CC', 'Licht Tür');
HM_Normalize('HmIP-BSM', '00085BE98C27CD', 'Deckenventilator'); // Wohnzimmer
HM_Normalize('HmIP-BSM', '00085BE98EF971', 'Licht');
HM_Normalize('HmIP-BSM', '00085BE98EF9F1', 'Licht');
HM_Normalize('HmIP-BSM', '00085BE98F127F', 'Licht');
HM_Normalize('HmIP-BSM', '00085BE9941E2F', 'Licht', [ 1 => 'Licht (Taster unten)', 2 => 'Licht (Taster oben)' ]); // Arbeitszimmer
HM_Normalize('HmIP-BSM', '00085BE9941E4B', 'Licht');
HM_Normalize('HmIP-BSM', '00085BE9941E4F', 'Licht');
HM_Normalize('HmIP-BSM', '00085BE9941E52', 'Licht');
HM_Normalize('HmIP-BSM', '00085BE9941E8F', 'Lichtschiene'); // Küche
HM_Normalize('HmIP-BSM', '00085BE9941E98', 'Hängeschrank'); // Küche
HM_Normalize('HmIP-BSM', '00085BE9941F4F', 'Licht hinten');
HM_Normalize('HmIP-BSM', '00085BE9941F53', 'Licht vorne');
HM_Normalize('HmIP-BSM', '00085BE9941F59', 'Lichtschiene');
HM_Normalize('HmIP-BSM', '00085BE994202C', 'Licht');
HM_Normalize('HmIP-BSM', '00085BE9942044', 'Spiegelschrank'); // Jaana-Badezimmer
HM_Normalize('HmIP-BSM', '00085BE9942051', 'Deckenleuchte');
HM_Normalize('HmIP-BWTH', '000C98A98AB0C9', 'Thermostat'); // Arbeitszimmer
HM_Normalize('HmIP-BWTH', '000C9A4999F283', 'Thermostat'); // Eltern-Schlafzimmer
HM_Normalize('HmIP-BWTH', '000C9A4999F288', 'Thermostat');
HM_Normalize('HmIP-BWTH', '000C9A4999F28E', 'Thermostat'); // FLur
HM_Normalize('HmIP-BWTH', '000C9A4999F290', 'Thermostat'); // Gäste-WC
HM_Normalize('HmIP-BWTH', '000C9A4999F291', 'Thermostat'); // Jaana-Wohnzimmer
HM_Normalize('HmIP-BWTH', '000C9A4999F295', 'Thermostat'); // Jaana-Schlafzimmer
HM_Normalize('HmIP-BWTH', '000C9A4999F296', 'Thermostat');
HM_Normalize('HmIP-BWTH', '000C9A4999F299', 'Thermostat'); // Jaana-Badezimmer
HM_Normalize('HmIP-BWTH', '000C9A4999F29D', 'Thermostat');
HM_Normalize('HmIP-DSD-PCB', '0026DA49A82717', 'Türklingel'); // Hausanschlussraum
HM_Normalize('HmIP-ESI', '003FA0C9AD71FE', 'Energiezähler'); // Waschküche
HM_Normalize('HmIP-eTRV-2', '002A9F29B39514', 'Heizkörper'); // Jaana-Badezimmer
HM_Normalize('HmIP-eTRV-E', '002A9D89AFA5F1', 'Heizkörper'); // Waschküche
HM_Normalize('HmIP-eTRV-E', '002A9D89AFA8FD', 'Heizkörper'); // Kellerbad
HM_Normalize('HmIP-eTRV-E', '002A9D89AFA903', 'Heizkörper'); // Kellerraum klein
HM_Normalize('HmIP-eTRV-E', '002A9D89AFB403', 'Heizkörper'); // Kellerraum groß
HM_Normalize('HmIP-FDT', '000E1BE98F22EE', 'Strahler Wand');
HM_Normalize('HmIP-FDT', '000E1BE98F24CE', 'Strahler Vordach');
HM_Normalize('HmIP-FDT', '000E1D898EED49', 'Schrank oben'); // Wohnzimmer
HM_Normalize('HmIP-FDT', '000E1D898EFB80', 'Schrank mitte'); // Wohnzimmer
HM_Normalize('HmIP-FDT', '000E1D898EFB8C', 'Schrank unten'); // Wohnzimmer
HM_Normalize('HmIP-FSI16', '00255D89B20ABC', 'Deckenlicht'); // Garage
HM_Normalize('HmIP-FSM', '000895699E532E', 'Flutlicht Stellplatz');
HM_Normalize('HmIP-FSM', '000895699E557B', 'Drainagepumpe');
HM_Normalize('HmIP-FSM', '000895699E55BA', 'Beleuchtungskreis 2 - Trafo');
HM_Normalize('HmIP-FSM', '000895699E58F1', 'Kamera Vorplatz');
HM_Normalize('HmIP-FSM', '000895699E5C58', 'Stromversorgung');
HM_Normalize('HmIP-FSM', '00089BE98DA709', 'Flutlicht Vorplatz');
HM_Normalize('HmIP-FSM', '00089BE98DA8B8', 'Steckdosen Vordach');
HM_Normalize('HmIP-FSM', '00089BE98DAA11', 'Strahler');
HM_Normalize('HmIP-FSM', '00089BE98DAABA', 'Strahler rechts');
HM_Normalize('HmIP-FSM', '00089BE98DAACD', 'Strahler vorne');
HM_Normalize('HmIP-FSM', '00089BE98DAAF9', 'Poller Grillplatz');
HM_Normalize('HmIP-FSM', '00089BE99164BD', 'Kamera Schuppen');
HM_Normalize('HmIP-FSM', '00089BE998DEFC', 'Kamera Terrasse');
HM_Normalize('HmIP-FSM', '00089D89A168E1', 'Heizungsaktor');
HM_Normalize('HmIP-FSM16', '000B9BE9993D9C', 'Steckdosen links'); // Terrasse
HM_Normalize('HmIP-FSM16', '000B9BE9993DAD', 'Steckdose rechts'); // Terrasse
HM_Normalize('HmIP-FSM16', '000B9BE9A246C1', 'Stromversorgung Vordach'); // Terrasse
HM_Normalize('HmIP-FSM16', '000B9F29A728D3', 'Steckdosen'); // Grillplatz
HM_Normalize('HmIP-HAP', '0003DBE98D3878', 'Homematic HAP (KG)'); // Hausanschlussraum
HM_Normalize('HmIP-HAP', '0003DBE98D3D4A', 'Homematic HAP (EG)'); // Wohnzimmer
HM_Normalize('HmIP-MOD-OC8', '000D18A9A5AC93', 'Tor-Aktor', [ 10 => 'Rechts - Licht!', 14 => 'Rechts - Lüften!', 18 => 'Rechts - Zu!', 22 => 'Rechts - Auf!', 26 => 'Links - Licht!', 30 => 'Links - Lüften!', 34 => 'Links - Zu!', 38 => 'Links - Auf!' ]);
HM_Normalize('HmIP-MOD-OC8', '000D1F299B969F', 'Bewässerung 1', [ 10 => 'Bewässerung 1.1', 14 => 'Bewässerung 1.2', 18 => 'Bewässerung 1.3', 22 => 'Bewässerung 1.4' ]);
HM_Normalize('HmIP-MOD-RC8', '00145709AED9FE', 'Tor-Kontakt', [ 1 => 'Links - Unten?', 2 => 'Links - Oben?', 3 => 'Links - Licht?', 5 => 'Rechts - Unten?', 6 => 'Rechts - Oben?', 7 => 'Rechts - Licht?' ]);
HM_Normalize('HmIP-PCBS', '00045A49A87691', 'Trafo-Warema'); // Wohnzimmer
HM_Normalize('HmIP-PCBS', '00045A49A876C3', 'Beleuchtungskreis 2B'); // Garten
HM_Normalize('HmIP-PCBS', '00045A49A87718', 'Beleuchtungskreis 3B'); // Garten
HM_Normalize('HmIP-PCBS', '00045A49A87866', 'Beleuchtungskreis 3A'); // Garten
HM_Normalize('HmIP-PCBS', '00045A49A87AD5', 'Beleuchtungskreis 2A'); // Garten
HM_Normalize('HmIP-PCBS', '00045A49A87C79', 'Beleuchtungskreis 1B'); // Garten
HM_Normalize('HmIP-PCBS', '00045A49A87C9D', 'Beleuchtungskreis 4'); // Vorplatz
HM_Normalize('HmIP-PCBS', '00045A49A87C9E', 'Leuchtturm'); // Garten
HM_Normalize('HmIP-PCBS', '00045A49A87D23', 'Beleuchtungskreis 1C'); // Garten
HM_Normalize('HmIP-PCBS', '00045A49A87E2F', 'Beleuchtungskreis 1A'); // Garten
HM_Normalize('HmIP-PCBS', '00045BE9936AE3', 'Brunnenbeleuchtung'); // Garten
HM_Normalize('HmIP-PS', '0002170990E154', 'Anrichte'); // Wohnzimmer
HM_Normalize('HmIP-PS', '000217099E49E7', 'Nachtlicht'); // Flur
HM_Normalize('HmIP-PSM', '0001D709904342', 'Beleuchtungskreis 1 - Trafo'); // Schuppen
HM_Normalize('HmIP-PSM', '0001D70995178E', 'Zwischenstecker 5'); // Kellerraum groß (Dörrgerät)
HM_Normalize('HmIP-PSM-2', '0034DD89B9B5B9', 'Zwischenstecker 8'); // Wohnzimmer
HM_Normalize('HmIP-PSM', '0001DD89AAD814', 'Zwischenstecker 4'); // ohne Raum
HM_Normalize('HmIP-SCI', '001E1A498F64D1', 'Rauchmelder-Kontakt');
HM_Normalize('HmIP-SCI', '001E1A498F6A8A', 'Briefkasten-Klappe');
HM_Normalize('HmIP-SCI', '001E1BE98BAD44', 'Törchen Vorplatz');
HM_Normalize('HmIP-SCI', '001E1BE98BAFBA', 'Törchen Straße');
HM_Normalize('HmIP-SCI', '001E1BE98BB097', 'Törchen Grillplatz');
HM_Normalize('HmIP-SCI', '001E1BE9941A4D', 'Briefkasten-Tür');
HM_Normalize('HmIP-SLO', '000D58A9915650', 'Aussenhelligkeit');
HM_Normalize('HmIP-SLO', '000D58A9915BBE', 'Lichtsensor');
HM_Normalize('HmIP-SMI55-2', '00319D89B16F27', 'Bewegungsmelder');
HM_Normalize('HmIP-SMO', '00095BE98B5C40', 'Bewegungsmelder');
HM_Normalize('HmIP-SPI', '000C1BE98E07C9', 'Präsenzmelder'); // Vorratskeller
HM_Normalize('HmIP-SPI', '000C1D898D6A9E', 'Präsenzmelder'); // Kellerraum groß
HM_Normalize('HmIP-SRH', '0007DBE98D976F', 'Fenster');
HM_Normalize('HmIP-SRH', '0007DBE98D9B7A', 'Fenster');
HM_Normalize('HmIP-SRH', '0007DBE98DA28C', 'Fenster');
HM_Normalize('HmIP-SRH', '0007DBE991C367', 'Fenster rechts');
HM_Normalize('HmIP-SRH', '0007DBE991C36A', 'Fenster links');
HM_Normalize('HmIP-SRH', '0007DBE991C373', 'Fenster'); // Garderobe
HM_Normalize('HmIP-SRH', '0007DBE991C38B', 'Fenster rechts'); // Zockerbude
HM_Normalize('HmIP-SRH', '0007DBE991C39F', 'Fenster links');
HM_Normalize('HmIP-SRH', '0007DBE9A69560', 'Fenster rechts');
HM_Normalize('HmIP-SRH', '0007DBE9A69571', 'Fenster links');
HM_Normalize('HmIP-SRH', '0007DBE9A6957D', 'Balkontür');
HM_Normalize('HmIP-SRH', '0007DBE9A6957E', 'Fenster links');
HM_Normalize('HmIP-SRH', '0007DBE9A6957F', 'Fenster');
HM_Normalize('HmIP-SRH', '0007DBE9A695B1', 'Fenster links');
HM_Normalize('HmIP-SRH', '0007DBE9A696DC', 'Fenster'); // Kellerbad
HM_Normalize('HmIP-SRH', '0007DBE9A696EC', 'Fenster rechts');
HM_Normalize('HmIP-SRH', '0007DBE9A6970B', 'Fenster Vorplatz');
HM_Normalize('HmIP-SRH', '0007DBE9A6970E', 'Fenster rechts');
HM_Normalize('HmIP-SRH', '0007DBE9A69714', 'Balkontür');
HM_Normalize('HmIP-STH', '000E58A99C8862', 'Raumklima');
HM_Normalize('HmIP-STH', '000E5D89A10C50', 'Raumklima');
HM_Normalize('HmIP-STHD', '000E98A991C454', 'Raumklima');
HM_Normalize('HmIP-STHD', '000E98A9A9FDA8', 'Raumklima');
HM_Normalize('HmIP-STHO', '000ED709B28322', 'Raumklima');
HM_Normalize('HmIP-STHO', '000EDD89B3A74E', 'Raumklima');
HM_Normalize('HmIP-SWD', '001898A9926320', 'Wassersensor');
HM_Normalize('HmIP-SWDM', '00155A49A4EE8D', 'Tür');
HM_Normalize('HmIP-SWDM', '00155A49A4F1C1', 'Tür');
HM_Normalize('HmIP-SWDM', '00155BE9908F12', 'Tür rechts');
HM_Normalize('HmIP-SWDM', '00155BE99091D9', 'Tür links');
HM_Normalize('HmIP-SWDM', '00155BE9A4396A', 'Tür');
HM_Normalize('HmIP-SWDO', '0000DBE9973682', 'Haustür');
HM_Normalize('HmIP-SWDO', '0000DD898F3FE3', 'Fenster-Kontakt unten');
HM_Normalize('HmIP-SWDO', '0000DD898F4093', 'Fenster-Kontakt unten');
HM_Normalize('HmIP-SWDO', '0000DD898F40A5', 'Fenster-Kontakt oben');
HM_Normalize('HmIP-SWDO', '0000DD898F4166', 'Fenster-Kontakt oben');
HM_Normalize('HmIP-WRC6', '000B60C9A34AD7', 'Taster 6-fach rechts', [ 1 => 'Taster 6-fach rechts (oben-links) - Markise einfahren', 2 => 'Taster 6-fach rechts (oben-rechts) - Heizung 100%', 3 => 'Taster 6-fach rechts (mitte-links) - Markise stoppen', 4 => 'Taster 6-fach rechts (mitte-rechts) - Heizung 75%', 5 => 'Taster 6-fach rechts (unten-links) - Markise ausfahren', 6 => 'Taster 6-fach rechts (unten-rechts) - Heizung aus' ]); // Wohnzimmer
HM_Normalize('HmIP-WRC6', '000B5D89BBB8F6', 'Taster 6-fach links', [ 1 => 'Taster 6-fach links (oben-links) - Steckdose links', 2 => 'Taster 6-fach links (oben-rechts) - Terrasse.Licht', 3 => 'Taster 6-fach links (mitte-links) - Steckdose rechts', 4 => 'Taster 6-fach links (mitte-rechts) - Hochbeete.Strahler', 5 => 'Taster 6-fach links (unten-links) -  Steckdose Vordach', 6 => 'Taster 6-fach links (unten-rechts) - Grillplatz.Licht' ]); // Wohnzimmer
HM_Normalize('HmIP-WRCD', '002A5F29999206', 'Garagenöffner', [ 1 => 'Garagenöffner (Taster unten)', 2 => 'Garagenöffner (Taster oben)' ]); // Küche
HM_Normalize('HmIP-WTH-2', '000A9D89A404C0', 'Thermostat');
HM_Normalize('HmIP-WTH-2', '000A9D89B665F6', 'Thermostat'); // Eltern-Badezimmer
HM_Normalize('HmIP-WTH-2', '000A9F298A3032', 'Thermostat');
HM_Normalize('RPI-RF-MOD', '001F58A9930185', 'Homematic Funkmodul');
 */
