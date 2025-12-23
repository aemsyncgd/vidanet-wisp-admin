<?php
/* Smarty version 3.1.39, created on 2025-12-19 03:47:38
  from 'C:\xampp\htdocs\phpmixbill\ui\ui\paymentgateway.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6944686ab95b96_48898348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75ec9c6cae35da30428a8eddf1526629c21ab359' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpmixbill\\ui\\ui\\paymentgateway.tpl',
      1 => 1704772084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6944686ab95b96_48898348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
    <div class="col-sm-12">
            <div class="panel panel-info panel-hovered">
            <div class="panel-heading"><?php echo Lang::T('Payment Gateway');?>
</div>
            <div class="panel-body row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pgs']->value, 'pg');
$_smarty_tpl->tpl_vars['pg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pg']->value) {
$_smarty_tpl->tpl_vars['pg']->do_else = false;
?>
                    <div class="col-sm-4 mb20">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
paymentgateway/<?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
"
                        class="btn btn-block btn-<?php if ($_smarty_tpl->tpl_vars['pg']->value == $_smarty_tpl->tpl_vars['_c']->value['payment_gateway']) {?>success<?php } else { ?>default<?php }?>"><?php echo ucwords($_smarty_tpl->tpl_vars['pg']->value);?>
</a>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="panel-footer">
                <form method="post">
                <div class="form-group row">
                    <label class="col-md-2 control-label">Payment Gateway</label>
                    <div class="col-md-8">
                        <select name="payment_gateway" id="payment_gateway" class="form-control">
                            <option value="none">None</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pgs']->value, 'pg');
$_smarty_tpl->tpl_vars['pg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pg']->value) {
$_smarty_tpl->tpl_vars['pg']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['pg']->value;
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['_c']->value['payment_gateway'] == $_prefixVariable1) {?>selected="selected" <?php }?>><?php echo ucwords($_smarty_tpl->tpl_vars['pg']->value);?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-block btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                    </div>
                </div>
                </div>
            </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
