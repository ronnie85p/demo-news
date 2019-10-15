<?php
/**
 * English Upgrades Lexicon Topic for Revolution setup.
 *
 * @package setup
 * @subpackage lexicon
 */
$_lang['add_column'] = 'Added new `[[+column]]` column to [[+table]].';
$_lang['add_index'] = 'Added new index on `[[+index]]` for table [[+table]].';
$_lang['alter_column'] = 'Modified column `[[+column]]` in table [[+table]].';
$_lang['add_moduser_classkey'] = 'Campo adicionado class_key para apoiar derivados modUser.';
$_lang['added_cachepwd'] = 'Campo faltante em versões anteriores do Revolution cachepw adicionado.';
$_lang['added_content_ft_idx'] = 'Adicionado novo `content_ft_idx` índice de texto completo nos campos `pagetitle`, `longtitle`, `description`, `introtext`, `content`.';
$_lang['allow_null_properties'] = 'Corrigindo permissão para nulo para a `[[+class]]`.`properties`.';
$_lang['alter_activeuser_action'] = 'Alterado modActiveUser `action` para permitir maiores rótulos de ações.';
$_lang['alter_usermessage_messageread'] = 'Alterado campo modUserMessage `messageread` para `read`.';
$_lang['alter_usermessage_postdate'] = 'Alteardo campo modUserMessage `postdate` de um INT para um DATETIME e para nome `date_sent`.';
$_lang['alter_usermessage_subject'] = 'Alterado campo modUserMessage `subject` de VARCHAR(60) para VARCHAR(255).';
$_lang['change_column'] = 'Changed `[[+old]]` field to `[[+new]]` on table [[+table]].';
$_lang['change_default_value'] = 'Changed default value for column `[[+column]]` to "[[+value]]" on table [[+table]].';
$_lang['connector_acls_removed'] = 'Contexto conector Removido ACLs.';
$_lang['connector_acls_not_removed'] = 'Não foi possível remover ACLs contexto de conectores.';
$_lang['connector_ctx_removed'] = '';
$_lang['connector_ctx_not_removed'] = 'Não foi possível remover contexto de conector.';
$_lang['data_remove_error'] = 'Erro ao remover os dados para a classe `[[+class]]`.';
$_lang['data_remove_success'] = 'Dados removido com sucesso da tabela para a classe `[[+class]]`.';
$_lang['drop_column'] = 'Dropped column `[[+column]]` on table [[+table]].';
$_lang['drop_index'] = 'Dropped index `[[+index]]` on table [[+table]].';
$_lang['lexiconentry_createdon_null'] = 'Alterado modLexiconEntry `createdon` para aceitar NULL.';
$_lang['lexiconentry_focus_alter'] = 'Alterado modLexiconEntry `focus` de VARCHAR(100) para INT(10).';
$_lang['lexiconentry_focus_alter_int'] = 'Atualizada coluna de dados modLexiconEntry `focus` de string para nova chave estrangeira int de modLexiconTopic.';
$_lang['lexiconfocus_add_id'] = 'Adicionada coluna modLexiconFocus `id`.';
$_lang['lexiconfocus_add_pk'] = 'Adicionado modLexiconFocus PRIMARY KEY para coluna `id`.';
$_lang['lexiconfocus_alter_pk'] = 'Alterado modLexiconFocus `name` de PRIMARY KEY para UNIQUE KEY';
$_lang['lexiconfocus_drop_pk'] = 'Derrubado modLexiconFocus PRIMARY KEY.';
$_lang['modify_column'] = 'Modified column `[[+column]]` from `[[+old]]` to `[[+new]]` on table [[+table]]';
$_lang['rename_column'] = 'Renamed column `[[+old]]` to `[[+new]]` on table [[+table]].';
$_lang['rename_table'] = 'Renomeada tabela de `[[+old]]` para `[[+new]]`.';
$_lang['remove_fulltext_index'] = 'Removido índice de texto completo `[[+index]]`.';
$_lang['systemsetting_xtype_fix'] = 'Corrigido com sucesso xtypes para modSystemSettings.';
$_lang['transportpackage_manifest_text'] = 'Moficada a coluna `manifest` para TEXT de MEDIUMTEXT em `[[+class]]`.';
$_lang['update_closure_table'] = 'Atualizando os dados da tabela de fechamento para a classe `[[+class]]`.';
$_lang['update_table_column_data'] = 'Dados atualizados em coluna [[+column]] da tabela [[+table]] ( [[+class]] )';
$_lang['iso_country_code_converted'] = 'Convertido com êxito os nomes de país do perfil de usuário para códigos ISO.';
$_lang['legacy_cleanup_complete'] = 'Limpeza de arquivo legado completa.';
$_lang['legacy_cleanup_count'] = 'Removido [[+files]] arquivo(s) e [[+folders]] pasta(s).';
$_lang['clipboard_flash_file_unlink_success'] = 'Successfully removed the copy to clipboard flash file.';
$_lang['clipboard_flash_file_unlink_failed'] = 'Error removing the copy to clipboard flash file.';
$_lang['clipboard_flash_file_missing'] = 'The copy to clipboard flash file has already been removed.';
$_lang['system_setting_cleanup_success'] = 'System Setting `[[+key]]` removed.';
$_lang['system_setting_cleanup_failed'] = 'System Setting `[[+key]]` could not be removed.';
$_lang['system_setting_update_xtype_success'] = 'Successfully changed the xtype for System Setting `[[+key]]` from `[[+old_xtype]]` to `[[+new_xtype]]`.';
$_lang['system_setting_update_xtype_failure'] = 'Failed to change the xtype for System Setting `[[+key]]` from `[[+old_xtype]]` to `[[+new_xtype]]`.';
$_lang['system_setting_update_success'] = 'System Setting `[[+key]]` updated.';
$_lang['system_setting_update_failed'] = 'System Setting `[[+key]]` could not be updated.';