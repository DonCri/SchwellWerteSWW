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

        $this->RegisterVariableString("upperValueSun", "Oberer Schwellwert Sonne", "", "0");
        $this->RegisterVariableString("lowerValueSun", "Unterer Schwellwert Sonne", "", "1");
        $this->RegisterVariableString("ActivateSun", "Aktiver Schwellwert Sonne", "", "2");

        $this->RegisterVariableString("upperValueWind", "Oberer Schwellwert Wind", "", "3");
        $this->RegisterVariableString("lowerValueWind", "Unterer Schwellwert Wind", "", "4");
        $this->RegisterVariableString("ActivateWind", "Aktiver Schwellwert Wind", "", "5");


        $this->RegisterPropertyInteger("LightValue", 0);
        $this->RegisterPropertyInteger("RainValue", 0);
        $this->EnableAction("upperValueSun");
        $this->EnableAction("lowerValueSun");

        $this->RegisterPropertyInteger("WindValue", 0);
        $this->EnableAction("upperValueWind");
        $this->EnableAction("lowerValueWind");

      }

      public function RequestAction($Ident, $Value) {

            switch($Ident) {
                  case "upperValueSun":
                  //Neuen Wert in die Statusvariable schreiben
                    SetValue($this->GetIDForIdent($Ident), $Value);
                  break;
                  case "lowerValueSun":
                    //Neuen Wert in die Statusvariable schreiben
                    SetValue($this->GetIDForIdent($Ident), $Value);
                  break;
                  case "upperValueWind":
                    //Neuen Wert in die Statusvariable schreiben
                      SetValue($this->GetIDForIdent($Ident), $Value);
                  break;
                  case "lowerValueWind":
                      //Neuen Wert in die Statusvariable schreiben
                      SetValue($this->GetIDForIdent($Ident), $Value);
                  break;
                  }

    }

      public function Beschattung() {

        $Lichtsensor = GetValue($this->ReadPropertyInteger("LightValue"));
        $Regensensor = GetValue($this->ReadPropertyInteger("RainValue"));
        $oberenSchwellwert = GetValue($this->GetIDForIdent("upperValueSun"));
        $unterenSchwellwert = GetValue($this->GetIDForIdent("lowerValueSun"));
        $Status = GetValue($this->GetIDForIdent("ActivateSun"));

        if($Status <> "oben")
          {

            if($Lichtsensor >= $oberenSchwellwert && $Regensensor == false)
            {
              SetValue($this->GetIDForIdent("ActivateSun"), "oben");
            }
          }           elseif($Status <> "unten")
                      {

                        if($Lichtsensor <= $unterenSchwellwert)
                        {
                          SetValue($this->GetIDForIdent("ActivateSun"), "unten");
                        }
                      }

        }

        public function Wind() {
          $Windsensor = GetValue($this->ReadPropertyInteger("WindValue"));
          $oberenSchwellwert = GetValue($this->GetIDForIdent("upperValueWind"));
          $unterenSchwellwert = GetValue($this->GetIDForIdent("lowerValueWind"));
          $Status = GetValue($this->GetIDForIdent("ActivateWind"));

          if($Status <> "oben")
            {

              if($Windsensor >= $oberenSchwellwert)
              {
                SetValue($this->GetIDForIdent("ActivateWind"), "oben");
              }
            }           elseif($Status <> "unten")
                        {

                          if($Windsensor <= $unterenSchwellwert)
                          {
                            SetValue($this->GetIDForIdent("ActivateWind"), "unten");
                          }
                        }
          }

}

?>
