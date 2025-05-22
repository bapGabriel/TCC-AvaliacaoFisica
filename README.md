# 🏃‍♂️ Sistema de Avaliação Física

Este projeto é uma aplicação web desenvolvida com **Laravel** que permite gerenciar alunos, registrar testes físicos e visualizar a evolução através de gráficos.

## 🚀 Funcionalidades

- Cadastro e gerenciamento de alunos
- Registro de testes físicos
- Geração de gráficos de desempenho
- Exportação de dados em PDF

## 📦 Tecnologias

- Laravel 11
- PHP 8.2
- MySQL
- Bootstrap
- Chart.js
- Socialite (Login com Google)

---

## ⚙️ Instalação

### 1. Clone o repositório

```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
cd seu-repositorio
```

### 2. Instale as dependências

```bash
composer install
npm install && npm run build
```

### 3. Copie e configure o `.env`

```bash
cp .env.example .env
```

Configure as seguintes variáveis:

```env
APP_NAME=Sistema Avaliação Física
APP_URL=http://localhost:8000

DB_DATABASE=nome_do_banco
DB_USERNAME=root
DB_PASSWORD=

GOOGLE_CLIENT_ID=xxxxxxx.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=xxxxxxxxx
GOOGLE_REDIRECT_URI=http://localhost:8000/auth/google/callback
```

### 4. Gere a chave da aplicação

```bash
php artisan key:generate
```

### 5. Execute as migrações

```bash
php artisan migrate
```

### 6. Suba o servidor local

```bash
php artisan serve
```

Acesse em: [http://localhost:8000](http://localhost:8000)

---

## 🔑 Como configurar o login com Google

1. Acesse o [Google Cloud Console](https://console.cloud.google.com/)
2. Crie um novo projeto ou use um existente
3. Vá em **APIs & Services > Credentials**
4. Crie uma credencial do tipo **OAuth Client ID**
5. Escolha **Web application**
6. Adicione em `Authorized redirect URIs`:
   ```
   http://localhost:8000/auth/google/callback
   ```
7. Copie o `Client ID` e `Client Secret` para o `.env`

---

## 📂 Estrutura de pastas importante

- `app/Http/Controllers` — Lógica da aplicação
- `resources/views` — Telas da aplicação (Blade)
- `routes/web.php` — Todas as rotas do sistema
- `app/Models` — Modelos Eloquent para as entidades

---

## 🤝 Contribuindo

1. Faça um fork do repositório
2. Crie uma branch: `git checkout -b minha-feature`
3. Commit suas mudanças: `git commit -m 'feat: minha feature'`
4. Push: `git push origin minha-feature`
5. Crie um Pull Request

---

## 🧑‍💻 Autor

Desenvolvido por Bruno Della Nina.

---

## 📄 Licença

Este projeto está sob a licença MIT.
