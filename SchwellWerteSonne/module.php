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
        $this->RegisterVariableString("Activate", "Aktives Ereignis");


        $this->RegisterPropertyInteger("LightValue", 0);
        $this->RegisterPropertyString("upperValue", 0);
        $this->RegisterPropertyString("lowerValue", 0);
        $this->RegisterPropertyString("Activate", "NichtsAktiv");
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
        $oberenSchwellwert = GetValue($this->GetIDForIdent("upperValue"));
        $Status = GetValue($this->GetIDForIdent("Activate"));

        if($Status <> "obenAktiv")
          {

            if($Lichtsensor >= $oberenSchwellwert)
            {
              SetValue($this->GetIDForIdent("Activate"), "obenAktiv");
              IPS_RunScript($this->GetIDForIdent("ScriptUpper"));
            }
          }

        }

        public function SchwellWertUnten() {

          $Lichtsensor = GetValue($this->ReadPropertyInteger("LightValue"));
          $unterenSchwellwert = GetValue($this->GetIDForIdent("lowerValue"));
          $Status = GetValue($this->GetIDForIdent("Activate"));

          if($Status <> "untenAktiv")
            {

              if($Lichtsensor <= $unterenSchwellwert)
              {
                SetValue($this->GetIDForIdent("Activate"), "unten Aktiv");
              }
            }

          }

}

?>
