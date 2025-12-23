<?php
/* Smarty version 3.1.39, created on 2025-12-20 15:14:50
  from 'C:\xampp\htdocs\phpmixbill\ui\ui\voucher-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6946f5aa8c3a48_61421443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b02eba281b1dd22be90b09a05421b3697aa1aaf3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpmixbill\\ui\\ui\\voucher-add.tpl',
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
function content_6946f5aa8c3a48_61421443 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Voucher'];?>
</div>
						<div class="panel-body">

                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher-post" >            
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
						<div class="col-md-6">
							<input type="radio" id="Hot" name="type" value="Hotspot"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Hotspot_Plans'];?>
 
							<input type="radio" id="POE" name="type" value="PPPOE"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['PPPOE_Plans'];?>
 
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</label>
						<div class="col-md-6">
							<select id="server" name="server" class="form-control">
								<option value=''><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Routers'];?>
</option>
							</select>
						</div>
					</div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Service_Plan'];?>
</label>
						<div class="col-md-6">
							<select id="plan" name="plan" class="form-control">
								<option value=''><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Plans'];?>
</option>
                            </select>
						</div>
                    </div>
					
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Number_of_Vouchers'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="numbervoucher" value="1">
						</div>
                    </div>
					
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Length_Code'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="lengthcode" value="12">
						</div>
                    </div>
					
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-success waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Generate'];?>
</button> 
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
