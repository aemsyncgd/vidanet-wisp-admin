<?php
/* Smarty version 3.1.39, created on 2025-12-20 15:23:20
  from 'C:\xampp\htdocs\phpmixbill\ui\ui\pppoe-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6946f7a8d49758_22617543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e5ca12c4babb2ba416c90d8d81874d2e86ae05f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpmixbill\\ui\\ui\\pppoe-add.tpl',
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
function content_6946f7a8d49758_22617543 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Plan'];?>
</div>
						<div class="panel-body">
						<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe-add-post" >
                            <div class="form-group">
                                <label class="col-md-2 control-label"><?php echo Lang::T('Status');?>
</label>
                                <div class="col-md-10">
                                    <label class="radio-inline warning">
                                        <input type="radio" checked name="enabled" value="1"> Enable
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="enabled" value="0"> Disable
                                    </label>
                                </div>
                            </div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="name_plan" maxlength="40" name="name_plan">
                                    <p class="help-block"><?php echo Lang::T('Cannot be change after saved');?>
</p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['BW_Name'];?>
</label>
								<div class="col-md-6">
									<select id="id_bw" name="id_bw" class="form-control">
										<option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_BW'];?>
...</option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['name_bw'];?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Price'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="price" name="price">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Validity'];?>
</label>
								<div class="col-md-4">
									<input type="text" class="form-control" id="validity" name="validity">
								</div>
								<div class="col-md-2">
									<select class="form-control" id="validity_unit" name="validity_unit">
										<option value="Mins"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Mins'];?>
</option>
										<option value="Hrs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hrs'];?>
</option>
										<option value="Days"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Days'];?>
</option>
										<option value="Months"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months'];?>
</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Router_Name'];?>
</label>
								<div class="col-md-6">
									<select id="routers" name="routers" class="form-control">
										<option value=''><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Routers'];?>
</option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['r']->value, 'rs');
$_smarty_tpl->tpl_vars['rs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['name'];?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
                                    <p class="help-block"><?php echo Lang::T('Cannot be change after saved');?>
</p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Pool'];?>
</label>
								<div class="col-md-6">
									<select id="pool_name" name="pool_name" class="form-control">
										<option value=''><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Pool'];?>
</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
									Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
