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

        $this->RegisterPropertyInteger("LightValue", 0);
        $this->RegisterPropertyInteger("upperValue", 0);
        $this->RegisterPropertyInteger("lowerValue", 0);

        $this->RegisterVariableInteger("VarOSW", "Oberer Schwellwert");
        $this->RegisterVariableInteger("VarUSW", "Unterer Schwellwert");
        $script = $this->RegisterScript("Skript", "Befehle");
      }

      public function ApplyChanges() {

    // Diese Zeile nicht löschen
    parent::ApplyChanges();

    if($this->ReadPropertyInteger("LightValue") == 10 ) {
        RunScript($script);
    }
    }

    }

?>
