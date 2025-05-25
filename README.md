# Ez a projekt egy PHP alkalmazás futtatását teszi lehetővé PostgreSQL adatbázissal, Nginx web szerverrel Docker konténerekben. A konfiguráció modern környezetekhez igazított, .env alapú környezeti változókezeléssel és Makefile alapú fejlesztői workflow-val.

Hogy működjön a make parancs, a gépeden telepítve kell legyen a make (GNU Make) eszköz
Linuxon általában alapból telepítve van, vagy egyszerűen telepíthető (pl. sudo apt install make Ubuntu/Debian alatt)
Mac-en Xcode Command Line Tools tartalmazza.
Windows alatt pl. Git Bash, vagy WSL alatt érhető el, vagy külön telepíthetsz GNU Make-et.

## Állítsd be a .env fájlt (nézd meg, hogy UID/GID megfelel a sajátodnak)
POSTGRES_DB=
POSTGRES_USER=
POSTGRES_PASSWORD=

DB_HOST=
DB_PORT=

UID=
GID=

## Építsd fel az image-ket:

`make build`

## Indítsd el a konténereket:

`make up`
Böngészőben látogass a http://localhost:8080-ra

## Ha kell, nézd a logokat:

`make logs`

## Teszteléshez futtasd:

`make test`
