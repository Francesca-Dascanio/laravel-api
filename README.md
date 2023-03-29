Utilizzo template:
creare il db
copiare il file .env.example e rinominarlo in .env
collegare il db nel file .env
eseguire composer install
eseguire il comando php artisan key:generate
eseguire npm i


Milestone 1
nome repo 1: laravel-api
Aggiungiamo al nostro progetto Laravel una nuovo Api/ProjectController. OK
Questo controller risponderà a delle richieste via API e si occuperà di restituire la lista dei progetti presenti nel database in formato json.

Milestone 2
Testiamo la chiamata API tramite Postman e assicuriamoci di ricevere i dati correttamente.