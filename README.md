Utilizzo template:
creare il db
copiare il file .env.example e rinominarlo in .env
collegare il db nel file .env
eseguire composer install
eseguire il comando php artisan key:generate
eseguire npm i


continuiamo a lavorare sul codice dei giorni scorsi, ma in una nuova repo OK
aggiungiamo una nuova entità Technology. Questa entità rappresenta le tecnologie utilizzate ed è in relazione many to many con i progetti. OK

I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:
- creare la migration per la tabella technologies OK
- creare il model Technology OK
- creare la migration per la tabella pivot project_technology OK
- aggiungere ai model Technology e Project i metodi per definire la relazione many to many OK
- visualizzare nella pagina di dettaglio di un progetto le tecnologie utilizzate, se presenti - NON RIESCO
- permettere all'utente di associare le tecnologie nella pagina di creazione OK e modifica di un progetto
- gestire il salvataggio dell'associazione progetto-tecnologie con opportune regole di validazione