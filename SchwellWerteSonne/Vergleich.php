<?

class Vergleich extends IPSModule {

public function ApplyChanges() {

    $Ident = $this->GetIDForIdent("LightValue");

    if($Ident == $this->GetIDForIdent("VarOSW")) {
        IPS_RunScript($this->GetIDForIdent("Skript"));

      }
}

}

?>
