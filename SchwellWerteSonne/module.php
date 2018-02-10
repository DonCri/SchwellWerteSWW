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
        public function Create() {
          parent::Create();

// Modul-Eigenschaftserstellung
$this->RegisterPropertyString("Benutzername", "MaxMustermann");
$this->RegisterPropertyInteger("Zahl", 123);
$this->RegisterPropertyFloat("Faktor", 0.5);
$this->RegisterPropertyBoolean("Geöffnet", true);
        }
    }
?>
