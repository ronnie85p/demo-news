<?php
/* Smarty version 4.3.4, created on 2023-10-03 14:36:18
  from '/var/www/html/manager/templates/default/element/tv/renders/input/textbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_651c26e2303f97_58898685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '909232845f056e572598435c3f580976c7938051' => 
    array (
      0 => '/var/www/html/manager/templates/default/element/tv/renders/input/textbox.tpl',
      1 => 1696333951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651c26e2303f97_58898685 (Smarty_Internal_Template $_smarty_tpl) {
?><input id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"
    type="text" class="textfield"
    value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
"
    <?php echo (($tmp = $_smarty_tpl->tpl_vars['style']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

    tvtype="<?php echo $_smarty_tpl->tpl_vars['tv']->value->type;?>
"
/>

<?php echo '<script'; ?>
>
// <![CDATA[
document.getElementById('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
').setAttribute('autocomplete', globalAutoCompleteSetting);

Ext.onReady(function() {
    const fld = MODx.load({
    
        xtype: 'textfield'
        ,itemId: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,width: '99%'
        ,enableKeyEvents: true
        ,msgTarget: 'under'
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['minLength'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>,minLength: <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['minLength'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);
}?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['maxLength'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>,maxLength: <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['maxLength'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);
}?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['regex'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>,regex: new RegExp(/<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['params']->value['regex'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
/)<?php }?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['regexText'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>,regexText: '<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['params']->value['regexText'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
'<?php }?>
    
        ,listeners: {
            keydown: {
                fn: MODx.fireResourceFormChange,
                scope: this
            }
        }
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
    MODx.makeDroppable(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
