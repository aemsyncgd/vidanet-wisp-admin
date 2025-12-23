			</div>
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

	<script src="ui/ui/scripts/vendors.js"></script>
	<script src="ui/ui/scripts/plugins/screenfull.js"></script>
	<script src="ui/ui/scripts/plugins/perfect-scrollbar.min.js"></script>
	<script src="ui/ui/scripts/plugins/waves.min.js"></script>
	<script src="ui/ui/scripts/plugins/select2.min.js"></script>
	<script src="ui/ui/scripts/plugins/bootstrap-colorpicker.min.js"></script>
	<script src="ui/ui/scripts/plugins/bootstrap-slider.min.js"></script>
	<script src="ui/ui/scripts/plugins/summernote.min.js"></script>
	<script src="ui/ui/scripts/plugins/bootstrap-datepicker.min.js"></script>
	<script src="ui/lib/js/bootbox.min.js"></script>
	<script src="ui/ui/scripts/app.js"></script>
	<script src="ui/ui/scripts/custom.js"></script>
	<script src="ui/ui/scripts/theme.js"></script>
	<script src="ui/ui/scripts/form-elements.init.js"></script>

{if isset($xfooter)}
	{$xfooter}
{/if}

</body>
</html>