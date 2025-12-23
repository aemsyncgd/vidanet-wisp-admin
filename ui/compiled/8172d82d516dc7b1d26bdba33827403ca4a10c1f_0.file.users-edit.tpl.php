<?php
/* Smarty version 3.1.39, created on 2025-12-21 01:48:08
  from 'C:\xampp\htdocs\phpmixbill\ui\ui\users-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6946ef68e77744_07487390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8172d82d516dc7b1d26bdba33827403ca4a10c1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpmixbill\\ui\\ui\\users-edit.tpl',
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
function content_6946ef68e77744_07487390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit_User'];?>
</div>
						<div class="panel-body">

                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit-post">
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
">
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
					<?php if (($_smarty_tpl->tpl_vars['_admin']->value['id']) != ($_smarty_tpl->tpl_vars['d']->value['id'])) {?>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['User_Type'];?>
</label>
						<div class="col-md-6">
							<select name="user_type" id="user_type" class="form-control">
                                <option value="Admin" <?php if ($_smarty_tpl->tpl_vars['d']->value['user_type'] == 'Admin') {?>selected="selected" <?php }?>>Full Administrator</option>
                                <option value="Sales" <?php if ($_smarty_tpl->tpl_vars['d']->value['user_type'] == 'Sales') {?>selected="selected" <?php }?>>Sales</option>
                            </select>
							<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['user_type_help'];?>
</span>
						</div>
                    </div>
					<?php }?>
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
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-success waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
							Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
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
