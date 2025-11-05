# MyFinance 💰

MyFinance é uma aplicação Laravel 12 que combina autenticação robusta via Laravel Fortify com uma interface Inertia.js + React 19 renderizada pelo Vite. O repositório ainda inclui protótipos estáticos das páginas de marketing, facilitando a evolução tanto da experiência autenticada quanto das páginas públicas em um só lugar. 🚀

## Estrutura do Projeto 🗂️
- `MyFinance/` – Aplicação Laravel completa (API, autenticação, views Inertia).
- `index.html`, `login.html`, `register.html`, `pricing.html`, `home.css`, `app.js` – Protótipos estáticos independentes para páginas institucionais.

## Stack Tecnológica 🛠️
- PHP 8.2+, Laravel 12, Pest para testes.
- Laravel Fortify para cadastro, login, redefinição de senha, verificação de e-mail e 2FA.
- Inertia.js com React 19, TypeScript, Tailwind CSS 4 (plugin Vite) e componentes inspirados no shadcn/ui.
- SQLite (configuração padrão) com filas, cache e jobs já configurados.

## Pré-requisitos ✅
Instale localmente:
- PHP 8.2 ou superior (com `sqlite3`, `openssl`, `pdo`, `mbstring`, `fileinfo` e `curl`).
- Composer 2.x.
- Node.js 18+ e npm (requisito do Vite 7).
- SQLite (ou ajuste o `.env` para outro banco).

## Início Rápido ⚡
```bash
git clone <url-do-repositorio>
cd MyFinance/MyFinance
composer run setup      # Instala dependências PHP, copia .env, gera chave, migra, instala npm e faz build
```

Prefere executar os passos manualmente? 😉

```bash
cd MyFinance/MyFinance
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite   # Necessário apenas se usar SQLite
php artisan migrate
npm install
npm run build
```

Depois, ajuste o `.env` com credenciais de e-mail, fila ou serviços externos (os fluxos do Fortify para e-mail dependem disso). ✉️

## Desenvolvimento Local 💻
- Suba tudo (Laravel, fila, logs, Vite) em um único comando:
  ```bash
  composer run dev
  ```
- Ou execute separadamente:
  ```bash
  php artisan serve
  npm run dev         # Vite com HMR
  php artisan queue:listen
  ```
- Acesse `http://localhost:8000`. Usuários autenticados veem o dashboard; visitantes ficam na landing page. 🌐

## Protótipos Estáticos 🎨
Abra os arquivos diretamente (nível raiz) para visualizar rapidamente:
- `index.html` – Landing page.
- `pricing.html` – Protótipo da página de planos.
- `login.html` / `register.html` – Fluxos de autenticação sem backend.

## Banco de Dados & Migrações 🗃️
- Conexão padrão: SQLite (`database/database.sqlite`). Crie o arquivo e garanta a extensão ativa.
- Para reconstruir o schema:
  ```bash
  php artisan migrate:fresh
  ```
- Adicione seeders em `database/seeders` e execute `php artisan db:seed` quando precisar popular dados.

## Testes 🧪
- Rodar a suíte completa (Pest + PHPUnit):
  ```bash
  composer test
  ```
- Também é possível rodar subconjuntos, ex.: `php artisan test --testsuite=Feature`.

## Ferramentas Frontend ✨
- Formatador (Prettier): `npm run format`.
- Linter (ESLint): `npm run lint`.
- Verificação de tipos: `npm run types`.
- Build SSR (opcional): `npm run build:ssr` seguido de `composer run dev:ssr` para iniciar o servidor SSR do Laravel.

## Deploy 🚀
1. Ajuste `.env` com `APP_URL`, `APP_ENV=production` e configurações de cache/e-mail.
2. Rode as migrações: `php artisan migrate --force`.
3. Compile os assets: `npm run build`.
4. Otimize caches (opcional): `php artisan optimize`.

## Licença 📄
Projeto distribuído sob a licença MIT – consulte `LICENSE` (se disponível) ou o texto padrão da licença MIT.
