<?php
/**
 * Snippet English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['example_tag_snippet_name'] = 'NameOfSnippet';
$_lang['snippet'] = 'Kódrészlet';
$_lang['snippets_available'] = 'Az oldalba beilleszthető kódrészletek érhetők el';
$_lang['snippet_category_desc'] = 'Use to group Snippets within the Elements tree.';
$_lang['snippet_code'] = 'Snippet Code (PHP)';
$_lang['snippet_delete_confirm'] = 'Biztosan törli ezt a kódrészletet?';
$_lang['snippet_description_desc'] = 'Usage information for this Snippet shown in search results and as a tooltip in the Elements tree.';
$_lang['snippet_duplicate_confirm'] = 'Biztosan új példányt hoz létre a kódrészletből?';
$_lang['snippet_duplicate_error'] = 'Hiba történt a kódrészlet másolatának létrehozásakor.';
$_lang['snippet_err_create'] = 'Hiba történt a kódrészlet létrehozásakor.';
$_lang['snippet_err_delete'] = 'Hiba történt a kódrészlet törlése közben.';
$_lang['snippet_err_duplicate'] = 'Hiba történt a kódrészlet másolatának létrehozásakor.';
$_lang['snippet_err_ae'] = 'Már létezik kódrészlet "[[+name]]" néven.';
$_lang['snippet_err_invalid_name'] = 'A kódrészlet neve érvénytelen.';
$_lang['snippet_err_locked'] = 'A kódrészlet szerkesztésre zárolva.';
$_lang['snippet_err_nf'] = 'Kódrészlet nem található!';
$_lang['snippet_err_ns'] = 'Kódrészlet nincs megadva.';
$_lang['snippet_err_ns_name'] = 'Kérjük, adja meg a kódrészlet nevét.';
$_lang['snippet_err_remove'] = 'Hiba történt a kódrészlet törlése közben.';
$_lang['snippet_err_save'] = 'Hiba történt a kódrészlet mentésekor.';
$_lang['snippet_execonsave'] = 'Kódrészlet végrehajtása mentés után.';
$_lang['snippet_lock'] = 'Kódrészlet zárolása szerkesztésre';
$_lang['snippet_lock_desc'] = 'Only users with “edit_locked” permissions can edit this Snippet.';
$_lang['snippet_management_msg'] = 'Itt választhatja ki a módosítani kívánt kódrészletet.';
$_lang['snippet_name_desc'] = 'Place the content generated by this Snippet in a Resource, Template, or Chunk using the following MODX tag: [[+tag]]';
$_lang['snippet_new'] = 'Kódrészlet létrehozása';
$_lang['snippet_properties'] = 'Alaptulajdonságok';
$_lang['snippet_tab_general_desc'] = 'Here you can enter the basic attributes for this <em>Snippet</em> as well as its content. The content must be PHP, either placed in the <em>Snippet Code</em> field below or in a static external file. To receive output from your Snippet at the point where it is called (within a Template or Chunk), a value must be returned from within the code.';
$_lang['snippet_tag_copied'] = 'Snippet tag copied!';
$_lang['snippets'] = 'Kódrészletek';

// Temporarily match old keys to new ones to ensure compatibility
// --fields
$_lang['snippet_desc_category'] = $_lang['snippet_category_desc'];
$_lang['snippet_desc_description'] = $_lang['snippet_description_desc'];
$_lang['snippet_desc_name'] = $_lang['snippet_name_desc'];
$_lang['snippet_lock_msg'] = $_lang['snippet_lock_desc'];

// --tabs
$_lang['snippet_msg'] = $_lang['snippet_tab_general_desc'];
