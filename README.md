# 🏠 Laravel Woning Verhuur Platform

Welkom bij het Woning Verhuur Platform, een open-source webapplicatie waarmee gebruikers hun woningen eenvoudig kunnen verhuren. Verhuurders dienen een account aan te maken voordat zij een woning kunnen aanbieden.

## 📋 Functionaliteiten
- **Accountregistratie**: Verhuurders moeten een account aanmaken om toegang te krijgen tot de verhuurfunctionaliteiten.
- **Woningbeheer**: Gebruikers kunnen woningen toevoegen, bewerken, en verwijderen.
- **Open-source**: De volledige broncode is beschikbaar voor aanpassingen en uitbreidingen.

## 🚀 Installatie
Volg de onderstaande stappen om dit project lokaal te draaien:

### Vereisten
- [PHP](https://www.php.net/) (versie 8.1 of hoger)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (voor de frontend afhankelijkheden)
- [MySQL](https://www.mysql.com/) of een andere ondersteunde database

### Stappen
1. **Clone de repository**
   ```bash
   git clone https://github.com/jouw-gebruikersnaam/woning-verhuur-platform.git
   cd woning-verhuur-platform
   ```

2. **Installeer afhankelijkheden**
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Maak een .env bestand**
   Kopieer `.env.example` naar `.env` en pas de configuratie aan:
   ```bash
   cp .env.example .env
   ```
   Stel je database-instellingen in:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=woningen
   DB_USERNAME=root
   DB_PASSWORD=secret
   ```

4. **Genereer een applicatiesleutel**
   ```bash
   php artisan key:generate
   ```

5. **Voer database migraties uit**
   ```bash
   php artisan migrate
   ```

6. **Start de server**
   ```bash
   php artisan serve
   ```
   Bezoek [http://localhost:8000](http://localhost:8000) om de applicatie te openen.

## 🛠 Technologieën
Dit project is gebouwd met de volgende technologieën:

- [Laravel](https://laravel.com/) - Back-end framework
- [MySQL](https://www.mysql.com/) - Relationele database
- [Tailwind CSS](https://tailwindcss.com/) - Styling framework


## 💾 Backup maken
Via de console kun je een backup maken.

   ```bash
   php artisan backup:run
   ```

## 📄 Licentie
Dit project is gelicenseerd onder de MIT-licentie. Zie het [LICENSE](LICENSE) bestand voor details.

## 🌟 Contributie
Contributies zijn welkom! Volg deze stappen om bij te dragen:
1. Fork de repository.
2. Maak een feature branch: `git checkout -b feature/nieuwe-functionaliteit`
3. Commit je wijzigingen: `git commit -m 'Voeg nieuwe functionaliteit toe'`
4. Push naar de branch: `git push origin feature/nieuwe-functionaliteit`
5. Open een pull request.

## 🤝 Contact
Heb je vragen of feedback? Neem contact met mij op:

- **Email**: jouw-email@example.com
- **GitHub**: [jouw-gebruikersnaam](https://github.com/jouw-gebruikersnaam)

---
Dank je wel dat je gebruik maakt van dit platform! 😊
