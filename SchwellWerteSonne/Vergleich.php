<?

class Vergleich extends IPSModule {

public function ApplyChanges() {

    $Ident = $this->ReadPropertyInteger("LightValue");

    if($Ident == $this->ReadPropertyInteger("upperValue")) {
        IPS_RunScript($this->GetIDForIdent("Skript"));

      }
}

}

?>
