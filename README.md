# Modul zum vergleichen der Schwellwerte für die Sonnenfunktion.

### Version
1.1

### Was wird hinzugefügt?

Beim einfügen wird ein Modul mit 6 Variablen hinzugefügt.
  * Variable 1 = Schwellwert Status Sonne
  * Variable 2 = oberer Schwellwert Sonne
  * Variable 3 = unterer Schwellwert Sonne
  * Variable 4 = Schwellwert Status Wind
  * Variable 5 = oberer Schwellwert Wind
  * Variable 6 = unterer Schwellwert Wind

### Beschreibung der einzelne Variable

Variable Aktiver Schwellwert: Wird der Wert "oben" oder "unten" geschrieben.
Variable oberer Schwellwert: Kann im WebFront der obere Wert (integer) eingegeben werden.
Variable unterer Schwellwert: Kann im WebFront der untere Wert (integer) eingegeben werden.

### Funktionsweise

Beim überschreiten des oberen Wert, wird in der "Schwellwert Status" Variable den Wert "oben" geschrieben.
Beim unterschreiten des unteren Wert, wird in der "Schwellwert Status" Variable den Wert "unten" geschrieben.
Diese beide Werte (oben, unten) können benutzt werden um ein Ereignis ("Bei bestimmten Wert") auszuführen.
Der Wert "oben" bleibt solange bestehen, bis die Variable den Wert "unten" hat und andersrum das selbe. So wird die Variable nicht verändert, wen sich der Lichtsensor Wert zwischen den oberen und unteren SchwellWert befinden.

Um den oberen Schwellwert zu aktivieren muss der Regensensor auf "false" gestellt sein, ansonsten wird kein Befehl ausgeführt.

### Eigenschaftenformular

Einstellmöglichkeiten:
  * Lichtsensor: Variable des Lichtsensor welcher für den Vergleich notwendig ist.
  * Regensensor: Variable des Regensensor welcher überprüft werden soll.
  * oberen Schwellwert: Variable wo der obere Schwellwert eingegeben wird.
  * untere Schwellwert: Variable wo der untere Schwellwert eingegeben wird.
  * Windssensor: Variable des Windsensor welcher für den Vergleich notwendig ist.
