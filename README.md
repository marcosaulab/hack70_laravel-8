# Livewire

un framework full-stack (sviluppo sia backend sia frontend) che ci permette di sviluppare interfacce interattive.

Quando si verifica un'interazione Livewire effettua una richiesta AJAX (Asynchronous JavaScript XML) al server

## Componente

Livewire un componente è costituito da un file html (blade) all'interno di resources/views/livewire e una classe all'interno di app/Http/Livewire

- Livewire utilizza il concetto di routing implicito. 
Esempio: se ho un componente che si chiama ContactForm costituito da:
   - 1. un file html in cui c'è il form di contatto
   - 2. una classe che gestirà i campi e la funzione di invio

Livewire utilizzerà una rotta che si costruisce da se, chiamata ad esempio http://..../livewire/contact-form, e 
la collega direttamente alla funzione che si occuperà dell'invio.


- @livewireStyles e @livewireScripts sono direttive: stiamo permettendo a livewire di caricare tutti il js e gli stili di cui ha bisogno per funzionare

- Quando renderizzo (mostro a video) una pagina che contiene un componente Livewire:
il server vede tutti gli attributi pubblici -> li mette poi a disposizione dentro l'oggetto 
livewire.components.components()[0].data e li manda al browser che poi li renderizza

- uso la direttiva wire:click per aggiugnere un eventListener che rimane in ascolto sull'evento click. Quando l'utente clicca sul pulsante viene richiamata la funzione (ovvero la rotta che è collegata alla funzione) increment()


- uso la direttiva wire:model per collegare un campo di input ad un attributo del componente lato backend
  Two-Way-Data-Binding

  Lo stato: è l'insieme di tutti i valori degli attributi in un determinato momento


- wire:submit.prevent="store()":  dice al form di non fare quello che fa di default (prevent = previeni il tuo comportamento di default)! In un form il comportamento di default è mandare una GET alla rotta in cui ci troviamo.
Fai quello che ti dico con wire:submit -> scatena l'evento submit del form ma chiamando la funzione store

- Lifecycle Hooks: sono funzioni che vengono eseguite in momenti specifici del ciclo di vita del componente. 
  E' una funzione che scatta quando succede qualcosa.

- cosa fondametale: ogni componente deve essere racchiuso in un UNICO tag: 
 - Esempi giusti:
   `<div></div> <table></table>`

 - Esempi sbagliati:
   `<div></div><h1></h1>`
         

## Introduciamo una relazione N a N

Vogliamo che i nostri articoli siano collegati ai tag: quindi diciamo che un articolo può avere più tags
e un tag può essere associato a più articoli

1. Prima mi occupo di verificare se ho tutte le tabelle coinvolte nella relazione, nel caso non le avessi le creo.
2. Poi i fillable dei nuovi model ed eventualmente DatabaseSeeder
3. tabella pivot
4. Istruiamo i models con le funzioni di relazione


## Direttive Livewire

- wire:model.lazy: id dati di input vengono inviati al server solo quando l'elemento di input perder il focus

- wire:model.defer: id dati in input vengono inviati al server solo quando viene attivato un envento specifico:
  la pressione del tasto salva
