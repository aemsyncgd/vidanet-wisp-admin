<?php
/* Smarty version 3.1.39, created on 2025-12-20 16:01:51
  from 'C:\xampp\htdocs\phpmixbill\ui\ui\sections\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_694700aff18256_79863011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '075f087899f345e1bdc86fc1c5ca0e5c85f653f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpmixbill\\ui\\ui\\sections\\footer.tpl',
      1 => 1766260872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694700aff18256_79863011 (Smarty_Internal_Template $_smarty_tpl) {
?>			</div>
		</div>
	</div>

	<div class="site-settings clearfix hidden-xs">
		<div class="settings clearfix">
			<div class="trigger ion ion-settings left"></div>
			<div class="wrapper left">
				<div class="text-center" style="padding: 10px;">
					<p class="text-uppercase small text-bold" style="margin-bottom: 10px; color: #777;">Apariencia</p>
					<div class="row">
						<div class="col-md-12" style="margin-bottom: 5px;">
							<button type="button" class="btn btn-block btn-default" id="btnThemeLight">
								<i class="ion ion-ios-sunny-outline"></i> Claro
							</button>
						</div>
						<div class="col-md-12" style="margin-bottom: 5px;">
							<button type="button" class="btn btn-block btn-default" id="btnThemeDark">
								<i class="ion ion-ios-moon-outline"></i> Oscuro
							</button>
						</div>
						<div class="col-md-12">
							<button type="button" class="btn btn-block btn-default" id="btnThemeSystem">
								<i class="ion ion-monitor"></i> Sistema
							</button>
						</div>
					</div>
					<!-- Hidden elements to prevent app.js crash -->
					<div style="display:none;">
						<input type="checkbox" id="fixedHeader">
						<input type="checkbox" id="navFull">
						<ul id="themeColor">
							<li data-theme="theme-zero"></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php echo '<script'; ?>
 src="ui/ui/scripts/vendors.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/plugins/screenfull.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/plugins/perfect-scrollbar.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/plugins/waves.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/plugins/select2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/plugins/bootstrap-colorpicker.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/plugins/bootstrap-slider.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/plugins/summernote.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/plugins/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/lib/js/bootbox.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/app.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/custom.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/theme.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/ui/scripts/form-elements.init.js"><?php echo '</script'; ?>
>

<?php if ((isset($_smarty_tpl->tpl_vars['xfooter']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['xfooter']->value;?>

<?php }?>

</body>
</html><?php }
}
