<?php require_once View::path('layouts/base.php'); ?>

<?php function content() { ?>
	<div class="container-fluid">
		<div class="row">
			<div class="panel">
				<div class="panel-body">
					<form
						method="<?php $form->post(); ?>"
						action="<?php $application->url(); ?>">
						<input type="hidden" name="<?php Token::NAME; ?>" value="<?php Token::make() ?>" />
						<div class="form-group">
							<label for="username">Username: </label>
							<input
								type="text"
								class="form-control"
								name="username"
								id="username"
								placeholder="username123" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php } ?>