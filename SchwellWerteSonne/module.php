<?
include_once __DIR__ . '/../SchwellWerteSonne/Vergleich.php';

    // Klassendefinition
    class SchwellWerteSonneSoll extends Vergleich {
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

        $this->RegisterVariableInteger("VarOSW", "Oberer Schwellwert");
        $this->RegisterVariableInteger("VarUSW", "Unterer Schwellwert");
        $this->RegisterScript("Skript", "Befehle");

        $this->RegisterPropertyInteger("LightValue", 0);
        $this->RegisterPropertyInteger("upperValue", 0);
        $this->RegisterPropertyInteger("lowerValue", 0);
      }

        }

?>
