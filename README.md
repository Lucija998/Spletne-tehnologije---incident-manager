# Incident Manager

Spletna aplikacija za prijavo in upravljanje IT incidentov.

Projekt je izdelan v okviru predmeta Spletne tehnologije.

-----------------------------------------------------------

## Opis projekta

Incident Manager omogoča:

- prijavo uporabnika
- prijavo novega incidenta
- pregled vseh incidentov
- urejanje incidentov
- brisanje incidentov

Aplikacija je razvita z uporabo:

- Laravel 12
- PHP 8.3
- MySQL
- Bootstrap 5

---

## Namestitev projekta

1. Kloniranje repozitorija:
```bash
git clone https://github.com/Lucija998/Spletne-tehnologije---incident-manager.git
cd incident-manager
```

2. Namestitev odvisnosti:
```bash
composer install
npm install
```

3. Ustvari .env datoteko
```bash
cp .env.example .env
```

4. Nastavi podatke za bazo:
```bash
DB_DATABASE=incident_db
DB_USERNAME=root
DB_PASSWORD=
```

5. Generiraj ključ:
```bash
php artisan key:generate
```

6. Migracije:
```bash
php artisan migrate
```

7. Zaženi aplikacijo:
```bash
php artisan serve
```

Aplikacija bo dostopna na: http://127.0.0.1:8000

Testni uporabnik:
```bash
Email: admin@demo.si
Geslo: geslo
```

Funkcionalnosti:
- Login
- Dashboard
- Prijava incidenta
- Seznam incidentov
- Urejanje incidenta
- Brisanje incidenta
