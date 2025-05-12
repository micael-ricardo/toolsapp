# Gerenciador de Ferramentas - Exercício Técnico
![alt text](image.png)

## 🚀 Tecnologias Utilizadas

- Laravel 10
- Livewire 2
- Bootstrap 5 (via CDN)
- SQL Server 2017+
- Docker (com WSL 2)
- PHP 8.1+
- Composer

## 📦 Requisitos

Antes de iniciar, verifique se você tem os seguintes requisitos instalados:

- [WSL 2](https://learn.microsoft.com/en-us/windows/wsl/install)
- [Docker Desktop](https://www.docker.com/)


## 🛠️ Estrutura do Projeto

app/
├── Models/
│ └── Ferramenta.php # Model Eloquent
├── Http/
│ └── Livewire/
│ ├── Lista.php # Lógica da listagem + filtros
│ └── Dados.php # Formulário CRUD
database/
├── migrations/
│ └── 2024_05_20_000000_create_ferramentas_table.php
├── seeders/
│ └── FerramentasSeeder.php # Dados iniciais
resources/
└── views/
├── layouts/
│ └── app.blade.php # Layout base
└── livewire/
├── lista.blade.php # Tabela + filtros
└── dados.blade.php # Modal de formulário




✅ Funcionalidades Implementadas
Listagem com ordenação ASC por nome

Busca por nome (com debounce de 500ms)

Filtro por status (Ativa/Inativa)

Paginação dinâmica (10/25/50 itens)

Loading states visíveis

CRUD completo em modais

Validação de formulário

Confirmação de exclusão

Migrations para SQL Server

Seeds para dados de teste

