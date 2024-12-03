# **Google OAuth**

Questo progetto consente agli utenti di effettuare l'autenticazione tramite Google OAuth, recuperando e memorizzando le informazioni dell'utente in sessione. I dati sensibili, come le credenziali OAuth, sono gestiti tramite un file .env per garantire la sicurezza.

---

## Sommario
1. [Prerequisiti](#prerequisiti)
2. [Installazione](#installazione)
3. [COnfigurazione OAuth](#configurazione-OAuth-su-Google-Cloud-Console)
4. [Flusso](#flusso)

---

## Prerequisiti

### Requisiti Generali
- **PHP:** >= 8.1  
- **Composer:** >= 2.x  
- **account Google e un'applicazione registrata sulla Google Cloud Console**

---

## Installazione

1. Clona il repository:
   ```bash
   git clone https://github.com/ValeriaGiannelli/login
   cd login

2. Installa le dipendenze con Composer:
   ```bash
   composer install
3. Crea un file .env nella directory principale del progetto e aggiungi le credenziali OAuth::
  ```bash
  GOOGLE_OAUTH_CLIENT_ID=your_google_client_id
  GOOGLE_OAUTH_CLIENT_SECRET=your_google_client_secret
  GOOGLE_OAUTH_REDIRECT_URI=your_redirect_uri
  GOOGLE_OAUTH_VERSION=v2

4. Avvia il server di sviluppo:
   ```bash
   php -S localhost:8000

  Accedi al progetto visitando http://localhost:8000

---

## Configurazione OAuth su Google Cloud Console

1. Vai su Google Cloud Console.
2. Crea un nuovo progetto o seleziona uno esistente.
3. Abilita l'API di Google OAuth.
4. Configura le credenziali per ottenere il Client ID e il Client Secret.
5. Imposta l'URL di reindirizzamento corretto (GOOGLE_OAUTH_REDIRECT_URI).

---
## Flusso
1. L'utente viene reindirizzato alla pagina di autenticazione di Google.
2. Dopo aver concesso le autorizzazioni, Google restituisce un codice di accesso.
3. Il codice viene scambiato per un token di accesso tramite una richiesta cURL.
4. Utilizzando il token, viene recuperato il profilo dell'utente da Google.
5. Le informazioni dell'utente vengono memorizzate nella sessione PHP.
