<?php
/* Smarty version 3.1.39, created on 2025-12-20 16:48:35
  from 'C:\xampp\htdocs\phpmixbill\ui\ui\dbstatus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_69470ba35fa209_14377254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55b96db0eff8ae4c4578bc1c2273f6d66c192e35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpmixbill\\ui\\ui\\dbstatus.tpl',
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
function content_69470ba35fa209_14377254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
	<div class="col-sm-12">
		<div class="panel mb20 panel-default">
			<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Database_Status'];?>
</div>
			<div class="panel-body">
			
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
						<div class="col-md-9"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total_Database_Size'];?>
: <?php echo $_smarty_tpl->tpl_vars['dbsize']->value;?>
  MB </div>
						<div class="col-md-3 text-right">
							<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/dbbackup/" class="btn btn-primary btn-xs"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download_Database_Backup'];?>
</a>
						</div>&nbsp;
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th width="50%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Table_Name'];?>
</th>
										<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Rows'];?>
</th>
										<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Size'];?>
</th>
									</tr>
								</thead>
								<tbody>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tables']->value, 'tbl');
$_smarty_tpl->tpl_vars['tbl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tbl']->value) {
$_smarty_tpl->tpl_vars['tbl']->do_else = false;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['rows'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['size'];?>
 Kb</td>
									</tr>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</tbody>
							</table>
						</div>
                    </div>
                </div>
				
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
