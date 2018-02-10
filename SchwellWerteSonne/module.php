<?
    // Klassendefinition
    class SchwellWerteSonneSoll extends IPSModule {
        /**
        * Die folgenden Funktionen stehen automatisch zur Verfügung, wenn das Modul über die "Module Control" eingefügt wurden.
        * Die Funktionen werden, mit dem selbst eingerichteten Prefix, in PHP und JSON-RPC wiefolgt zur Verfügung gestellt:
        *
        * ABC_MeineErsteEigeneFunktion($id);
        *
        */

        // Überschreibt die interne IPS_Create($id) Funktion
        public function Create() {
        // Diese Zeile nicht löschen.
        parent::Create();

        $this->RegisterVariableInteger("osw", "Oberer Schwellwert");
        $this->RegisterVariableInteger("usw", "Unterer Schwellwert");
        $this->RegisterScript("oswScript", "Oberer SchwellWert", "<? $LichtSensor = GetValue(56901 /*[DominoSwiss SWW SOL\Light]*/);
        $ObereSchwelle = GetValue(22504 /*[Test Variablen\Schwellwerte Sonne\Unteren Wert]*/);

        if($LichtSensor >= $ObereSchwelle)
        {
        	HUE_SetState(15057 /*[Wohnen]*/, false);
        	IPS_SetEventActive(23276 /*[Scripts\BeschattungAus\Bei Variablenänderung der Variable ""]*/, false); // Ereignis vom oberen Schwellwert deaktivieren
        	IPS_SetEventActive(23361 /*[Scripts\Beschattung\Bei Variablenänderung der Variable ""]*/, true); // Ereignis vom unteren Schwellwert aktivieren
        } ?>");

        }

    }

?>
