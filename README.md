## Installazione di Laravel
<br >
Primo comando da lanciare: 

- open php ~/.bash_profile

Questo comando dovrebbe aprire un pop up .bash_profile. Se non si apre nessun pop up .bash_profile) lanciamo il comando da terminale:

- touch php ~/.bash_profile

Una volta aperto .bash_profile, sempre da terminale rilanciare:

- open php ~/.bash_profile

Nel file .bash_profile che si apre dopo aver lanciato il comando, scriviamo (ATTENZIONE ALLA PROPRIA VERSIONE DI PHP INSTALLATA SU MAMP):

- export PATH=/Applications/MAMP/bin/php/php7.4.21/bin:$PATH

Poi chiudiamo il pop up con la X. In seguito torniamo sul terminale e lanciamo il comando:

- source ~/.bash_profile

Poi lanciamo il comando:

- php -v

Se il comando restituisce la versione di php in uso, allora tutto funziona come dovrebbe


## Per installare Laravel nella repository del mio progetto:
<br >

Per problemi con VSC, effettua tutto il procedimento dal classico terminale.
Per prima cosa installiamo composer, lanciando in ordine i seguenti comandi:

1. php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"


2. php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

3. php composer-setup.php

4. ricordati di lanciare il comando richiesto dal comando precedente una volta che ha finito!

5. php -r "unlink('composer-setup.php');"

Dopo aver terminato, entra tramite terminale nella cartella Boolean utilizzando i seguenti comandi:

- cd Desktop
- cd Boolean
- cd Esercizi

Poi creiamo un nuovo progetto Laravel 7, utilizzando questo comando. NB: A causa dei problemi, alla fine devi scrivere il nome della nuova cartella che verrà creata con all'interno tutti i file del progetto:

- composer create-project --prefer-dist laravel/laravel:^7.0 nome-cartella-quellochevuoi

Al termine dell'installazione, entriamo nella cartella del progetto e avviamo l'artisan serve con uno di questi due comandi:

- php artisan 

- php -S localhost:8000 -t public


