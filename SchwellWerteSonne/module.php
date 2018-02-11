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
        $this->RegisterVariableString("Activate", "AktivesEreignis");


        $this->RegisterPropertyInteger("LightValue", 0);
        $this->RegisterPropertyString("upperValue", 0);
        $this->RegisterPropertyString("lowerValue", 0);
        $this->RegisterPropertyString("Activate", "");
        $this->EnableAction("upperValue");
        $this->EnableAction("lowerValue");

      }

      public function RequestAction($Ident, $Value) {

            switch($Ident) {
                  case "upperValue":
                  //Neuen Wert in die Statusvariable schreiben
                    SetValue($this->GetIDForIdent($Ident), $Value);
                  break;
                  case "lowerValue":
                    //Neuen Wert in die Statusvariable schreiben
                    SetValue($this->GetIDForIdent($Ident), $Value);
                    break;
    }

}

      public function SchwellWertOben() {

        $Lichtsensor = GetValue($this->ReadPropertyInteger("LightValue"));
        $obererSchwellwert = GetValue($this->GetIDForIdent("upperValue"));
        $Status = GetValue(GetIDForIdent("Activate"));

        if($Status == "obenAktiv")
          {

            if($Lichtsensor >= $obererSchwellwert)
            {
              SetValue($this->GetIDForIdent("Activate"), "oben Aktiv");
              IPS_RunScript($this->GetIDForIdent("ScriptUpper"));
            }
          }

        }
      }

?>
