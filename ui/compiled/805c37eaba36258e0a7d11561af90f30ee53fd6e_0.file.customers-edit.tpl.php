<?php
/* Smarty version 3.1.39, created on 2025-12-21 01:47:34
  from 'C:\xampp\htdocs\phpmixbill\ui\ui\customers-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6946ef46d5f396_21013317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '805c37eaba36258e0a7d11561af90f30ee53fd6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpmixbill\\ui\\ui\\customers-edit.tpl',
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
function content_6946ef46d5f396_21013317 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit_Contact'];?>
</div>
						<div class="panel-body">

							<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/edit-post" >
							<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
								<div class="form-group">
									<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
" placeholder="Phone Number" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full_Name'];?>
</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['fullname'];?>
">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
									<div class="col-md-6">
										<input type="password" class="form-control" id="password" name="password">
										<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['password_change_help'];?>
</span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm_Password'];?>
</label>
									<div class="col-md-6">
										<input type="password" class="form-control" id="cpassword" name="cpassword">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
									<div class="col-md-6">
										<textarea name="address" id="address"  class="form-control"><?php echo $_smarty_tpl->tpl_vars['d']->value['address'];?>
</textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['phonenumber'];?>
">
									</div>
								</div>

								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
										Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
