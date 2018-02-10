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
        $this->RegisterScript("oswScript", "Oberer SchwellWert", "<? $LichtSensor = GetValue(); $ObereSchwelle = GetValue(); if($LichtSensor >= $ObereSchwelle){HUE_SetState(, false); IPS_SetEventActive(, false); IPS_SetEventActive( , true); } ?>");


        }

    }

?>
