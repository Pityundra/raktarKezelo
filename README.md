Készíts el egy raktárkészletkezelő alkalmazást egy áruházlánc számára! A vállalat több telephelyen rendelkezik raktárral. Tervezz egy osztályhierarchiát, amivel modellezni tudsz:

    raktárat (megnevezés, cím, kapacitás, raktárkészlet, ...),
    márkát (márkanév, minőségkategória (1 - 5), ...),
    terméket (cikkszám, megnevezés, ár, márka, ...).

Készíts 2-3 termék osztályt, mely tetszőleges cikket reprezentál. Az alap tulajdonságokon kívül mindegyiket bővítsd legalább egy egyedi tulajdonsággal.

Készíts olyan alkalmazást, mely a következőket tudja:

    létrehoz raktárat,
    kiíratja a raktárak tartalmát,
    hozzáad / elvesz valamennyi tételt valamely raktárból - a raktárak kapacitását közösen kezeld (pl.: ha az első raktárban nincs elég hely hozzáadáskor, akkor próbáld a maradék termékeket a második raktárban elhelyezni)

Írj tesztet a következő lehetséges esetekre:

Létrehoz több raktárat, majd ...

    ... felvesz több terméket és kiíratja a raktár tartalmát
    ... felvesz több terméket, de nincs elég hely
    ... kikér több terméket, de a kérést csak több raktár együtt tudja kiszolgálni
    ... bármilyen egyéb eset, ami eszedbe jut.

A teszt lehet egyszerű php file konzolos, vagy html kimenettel, de használható tetszőleges teszt framework is: phpunit, codeception stb.

Megvalósítással kapcsolatos követelmények:

    hibaesetek kezeléséhez használj kivételkezelést,
    mindenhol a megfelelő láthatósági szintet használd,
    tartsd be a cleancode (solid, dry) és az oop alapelveit,
    kövesd a PSR-4 és PSR-12 standard-eket (https://www.php-fig.org/psr/),
    az autoloading-ot a composer által generált autoload.php fájl biztosítsa,
    a megvalósítás során használható a PHP bármely aktuálisan támogatott verziója és annak valamennyi feature-e. (https://www.php.net/supported-versions.php)
