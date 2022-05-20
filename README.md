## Installazione di Laravel

<br />
- Primo comando da lanciare: 

<br />
open php ~/.bash_profile

<br />
- Questo comando dovrebbe aprire un pop up .bash_profile. Se non si apre nessun pop up .bash_profile) lanciamo il comando da terminale:

<br />
touch php ~/.bash_profile

<br />
- Una volta aperto .bash_profile, sempre da terminale rilanciare:

<br />
open php ~/.bash_profile

<br />
- Nel file .bash_profile che si apre dopo aver lanciato il comando, scriviamo (ATTENZIONE ALLA PROPRIA VERSIONE DI PHP INSTALLATA SU MAMP):

<br />
export PATH=/Applications/MAMP/bin/php/php7.4.21/bin

<br />
- Poi chiudiamo il pop up con la X. In seguito torniamo sul terminale e lanciamo il comando:

<br />
source ~/.bash_profile

<br />
- Poi lanciamo il comando:

<br />
php -v

<br />
Se il comando restituisce la versione di php in uso, allora tutto funziona come dovrebbe

<br />
<br />

## Per installare Laravel nella repository del mio progetto:

<br />
- Per prima cosa, creiamo un nuovo progetto Laravel 7, utilizzando questo comando all'interno della cartella vuota creata dalla repo:

<br />
composer create-project --prefer-dist laravel/laravel:^7.0 .

<br />
- Al termine dell'installazione, entriamo nella cartella del progetto e avviamo l'artisan serve con uno di questi due comandi:

<br />
php artisan 

<br />
oppure 

<br />
php -S localhost:8000 -t public

<br />
- Instead of using HTML entities like &nbsp; and &emsp; (as others have suggested), you can use the Unicode em space (8195 in UTF-8) directly. Try copy-pasting the following into your README.md. The spaces at the start of the lines are em spaces.

