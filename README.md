# Vizsgaremek

### Készítette:
- Németh Szabolcs Dániel
- Nagy Attila
- Sági Dániel

# SkyFlights
## Bevezetés
Amikor repülővel utazunk általában feladunk egy poggyászt, ami a repülő rakterébe kerül és nem igazán tudjuk, hogy éppen mi is van a poggyászunkkal. Amikor csak egy repülővel utazunk, akkor a poggyászaink biztos kezekben vannak. A bechekkolásnál odaadjuk a bőröndünket és felteszik a gépre, amikor meg leszállunk leveszik és mi már ott várjuk a futószalagon. De az emberek, ha nagyon hosszú távra mennek elkerülhetetlen, hogy többször átszállva repüjenek egyik országból a másikba és ebben a rohanó világban előfordul, hogy egy-egy poggyász elkeveredik. Erre készítettünk egy megoldást. Egy olyan szofvert, ahol az utas nyomon tudja követni a csomagját.

## Szoftver előkészítése
Böngészőben `http://localhost:5173/flights` néven, míg github-on  `https://github.com/Th3W0rthy/kemeragsziv.git` néven érhető el a szoftver. A tároló tartalmaz egy webszervert docker alapokon, egy laravel-es projektet ami a `backend` mappában található,ezen belül a `public` és azon belül a `frontend` mappában található a vue-s projekt. Első lépésnek nyissuk meg a git bash-t, majd a tároló klónozásával hozzuk létre a projektet. Ehhez szükség lesz a `Git` nevű szoftverre vagy docker segítségével is megtehetjük.

### Git
```bash
git clone https://github.com/Th3W0rthy/kemeragsziv.git
```

### Windows - CMD
```bat
git clone docker run -it --rm -v %cd%:/git alpine/git clone ^
    https://github.com/Th3W0rthy/kemeragsziv.git
```

### Windows - Power Shell
```powershell
docker run -it --rm -v /${PWD}:/git alpine/git clone \
    https://github.com/Th3W0rthy/kemeragsziv.git
```
### Mac és Linux - bash, zsh, fish
```bash
docker run -it --rm -v (pwd):/git alpine/git clone \
    https://github.com/Th3W0rthy/kemeragsziv.git
```

A Laravel projektben szükségünk lesz egy `env` fájlra, amit a `.env.example` másolásával hozhatunk létre miután beléptünk a laravel projektbe.

### Windows - CMD
```bat
copy .env.example .env
```

### Windows - Power Shell
```powershell
Copy-Item .env.example .env
```
### Git, Mac és Linux - bash, zsh, fish
```bash
cp .env.example .env
```

Fel kell építeni az image-et.
```bash
docker compose build
```

Első futtatáskor kell ezt használi. Utána ha nem módosítjük a dockerfile-t.
```bash
docker compose up -d
```
```bash
docker docker compose -f docker-compose.yml -f docker-compose.dev.yml  up -d
```
### Laravel projekt indítása konténeren kívülről

A `composer` segítségével telepíteni kell az előre megírt osztályokat.
```bash
docker compose exec app composer install
```

A laravel működéséhez szükséges egy egyedi kulcs (API Key) generálása, amit az `artisan` segítségével hozhatunk létre.
```bash
docker compose exec app php artisan key:generate
```

### Laravel projekt indítása konténeren belülről
```bash
docker compose exec app fish
```

Majd a konténerben ezeket a parancsokat kell kiadnunk.
```bash
composer install
php artisan key:generate
```

Futtatnunk kell a migrációkat és fel kell seed-elnünk az adatokat.
```bash
php artisan migrate --seed
```

Ha újra akarjuk csinálni a migrációt.
```bash
php artisan migrate:fresh --seed
```

### Vue projekt indítása
Be kell lépni a `backend`-en belül a `public`-ba és a `frontend`-be,
majd itt telepíteni kell a `vite`-t.
```bash
npm install
```

El kell indítani a dev szervert.
```bash
npm run dev
```
