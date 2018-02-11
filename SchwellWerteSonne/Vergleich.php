<?

class Vergleich extends IPSModule {

  $this->RegisterPropertyInteger("LightValue", 0);
  $this->RegisterPropertyInteger("upperValue", 0);
  $this->RegisterPropertyInteger("lowerValue", 0);


    $Ident = $this->GetIDForIdent("LightValue");

    if($Ident == $this->GetIDForIdent("VarOSW")) {
        IPS_RunScript($this->GetIDForIdent("Skript"));

      }


}

?>
