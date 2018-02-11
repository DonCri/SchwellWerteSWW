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

        $this->RegisterVariableString("upperValue", "Oberer Schwellwert");
        $this->RegisterVariableString("lowerValue", "Unterer Schwellwert");
        $this->RegisterVariableInteger("Activate", "AktivesEreignis");


        $this->RegisterPropertyInteger("LightValue", 0);
        $this->RegisterPropertyInteger("upperValue", 0);
        $this->RegisterPropertyInteger("lowerValue", 0);

      }

      public function Vergleich() {

        $this->RegisterScript("Skript", "Befehle");

        $Lichtsensor = GetValue($this->ReadPropertyInteger("LightValue"));
        $obererSchwellwert = GetValue($this->GetIDForIdent("upperValue"));

        if($Lichtsensor == $obererSchwellwert) {
            SetValue($this->GetIDForIdent("Activate"), 1);
            IPS_RunScript($this->GetIDForIdent("Skript"));
          }

        }
      }

?>
