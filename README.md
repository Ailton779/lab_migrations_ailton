# Lab Migrations Laravel

**Aluno:** José Ailton  
**Disciplina:** Programação Web I  
**Professor:** Renato William R. de Souza  
**Semestre:** 2026.1  

## Como executar

git clone https://github.com/Ailton779/lab_migrations_ailton.git
cd lab_migrations_ailton
cp .env.example .env
php artisan key:generate
php artisan migrate

## Atividades

| Atividade | Branch | Status |
|-----------|--------|--------|
| Atividade 1 — Preparação do Ambiente | atividade/01-ambiente | Concluída |
| Atividade 2 — Primeira Migration | atividade/02-primeira-migration | Concluída |
| Atividade 3 — Tipos de Dados | atividade/03-tipos-de-dados | Concluída |
| Atividade 4 — Chave Estrangeira Simples | atividade/04-chave-estrangeira | Concluída |
| Atividade 5 — Uso do foreignId | atividade/05-foreignid | Concluída |
| Atividade 6 — Regras de Exclusão | atividade/06-regras-exclusao | Concluída |
| Atividade 7 — Alteração de Tabela | atividade/07-alteracao-tabela | Concluída |
| Atividade 8 — Status das Migrations | atividade/08-status-migrations | Concluída |
| Atividade 9 — Relacionamento 1:N | atividade/09-relacionamento-1n | Concluída |
| Atividade 10 — Diagnóstico de Erros | atividade/10-diagnostico-erros | Concluída |
| Prática 1 — Sistema de Biblioteca | pratica/01-biblioteca | Concluída |
| Prática 2 — Sistema Acadêmico | pratica/02-sistema-academico | Concluída |
| Prática Avançada — Gestão de Projetos | pratica/03-gestao-projetos | Concluída |

## Saída do migrate:status

| Batch | Migration | Status |
|-------|-----------|--------|
| 1 | 0001_01_01_000000_create_users_table | Ran |
| 1 | 0001_01_01_000001_create_cache_table | Ran |
| 1 | 0001_01_01_000002_create_jobs_table | Ran |
| 1 | create_clientes_table | Ran |
| 1 | create_produtos_table | Ran |
| 1 | create_categorias_table | Ran |
| 1 | create_produtos_com_categoria_table | Ran |
| 1 | refactor_produtos_use_foreignid | Ran |
| 1 | create_produtos_v3_com_cascade | Ran |
| 1 | create_pedidos_table | Ran |
| 1 | create_itens_pedido_table | Ran |
| 2 | create_pedidos_items_corrigida | Ran |
| 3 | create_autores_table | Ran |
| 3 | create_livros_table | Ran |
| 4 | create_cursos_table | Ran |
| 4 | create_alunos_table | Ran |
| 4 | create_matriculas_table | Ran |
| 5 | create_colaboradores_table | Ran |
| 5 | create_projetos_table | Ran |
| 5 | create_projeto_colaborador_table | Ran |
| 5 | create_tarefas_table | Ran |
| 5 | add_prioridade_to_tarefas_table | Ran |
