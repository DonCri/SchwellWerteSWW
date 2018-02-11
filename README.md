# Modul zum vergleichen der Schwellwerte für die Sonnenfunktion.

### Version
1.0

### Was wird hinzugefügt?

Beim einfügen wird ein Modul mit 3 Variablen hinzugefügt.
  * Variable 1 = Aktiver Schwellwert
  * Variable 2 = oberer Schwellwert
  * Variable 3 = unterer Schwellwert

### Beschreibung der einzelne Variable

Variable Aktiver Schwellwert: Wird der ein Wert "oben" oder "unten" geschrieben.
Variable oberer Schwellwert: Kann im WebFront der obere Wert (integer) eingegeben werden.
Variable unterer Schwellwert: Kann im WebFront der untere Wert (integer) eingegeben werden.

### Funktionsweise

Beim überschreiten des oberen Wert, wird in der "Aktiver Schwellwert" Variable den Wert "oben" geschrieben.
Beim unterschreiten des unteren Wert, wird in der "Aktiver Schwellwert" Variable den Wert "unten" geschrieben.
Diese beide Werte (oben, unten) können benutzt werden um ein Ereignis (Bei bestimmten Wert) auszuführen.
Der Wert "oben" bleibt solange bestehen bis die Variable den Wert "unten" hat, andersrum das selbe. So wird die Variable nicht verändert
wen sich der Lichtsensor Wert zwischen den oberen und unteren SchwellWert befinden. Somit wird auch kein Ereignis ausgelöst.
