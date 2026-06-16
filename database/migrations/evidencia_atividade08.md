# Atividade 8 — Status das Migrations

## migrate:status (todas rodadas)
| Batch | Migration | Status |
|-------|-----------|--------|
| 1 | 0001_01_01_000000_create_users_table | Ran |
| 1 | 0001_01_01_000001_create_cache_table | Ran |
| 1 | 0001_01_01_000002_create_jobs_table | Ran |
| 1 | 2026_06_15_190444_create_clientes_table | Ran |
| 1 | 2026_06_15_191250_create_produtos_table | Ran |
| 1 | 2026_06_15_191400_create_categorias_table | Ran |
| 1 | 2026_06_15_191409_create_produtos_com_categoria_table | Ran |
| 1 | 2026_06_15_191515_refactor_produtos_use_foreignid | Ran |
| 1 | 2026_06_15_191619_create_produtos_v3_com_cascade | Ran |
| 2 | 2026_06_15_192810_add_descricao_to_produtos_table | Ran |

## Explicação das colunas
- **Batch**: agrupa migrations executadas juntas — cada vez que você roda `migrate`, incrementa o batch
- **Migration**: nome do arquivo de migration
- **Status**: Ran = executada, Pending = pendente

## migrate:rollback --step=2 (duas revertidas)
| Batch | Migration | Status |
|-------|-----------|--------|
| 1 | 2026_06_15_191619_create_produtos_v3_com_cascade | Pending |
| 1 | 2026_06_15_192810_add_descricao_to_produtos_table | Pending |
