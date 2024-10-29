<?php
/**
 * Olly Form Render
 */
?>
<div <?php echo get_block_wrapper_attributes(); ?>>
	<div class="field step1">
		<label for="email"><?= __( 'Email', 'olly-form' ) ?> <span class="required">*</span></label>
		<input type="email" name="email" id="email" class="text" required />
		<p class="text msg"><?= __( 'By entering your email information, you accept to receive emails from Wonder-land.', 'olly-form' ) ?></p>
	</div>
	<div class="field step2">
		<label for="name"><?= __( 'First and last name', 'olly-form' ) ?></label>
		<input type="text" name="name" id="name" class="text" />
		<p class="text msg"></p>
	</div>
	<div class="field step3">
		<label for="phone"><?= __( 'Phone number', 'olly-form' ) ?> <span class="required">*</span></label>
		<input type="text" name="phone" id="phone" class="text" required />
		<p class="text msg"></p>
	</div>
	<div class="tks step4">
		<img src="<?= plugin_dir_url( __FILE__ ) ?>img/Success.png" alt="Success" />
		<div>
			<h3><?= __( 'Thank you!', 'olly-form' ) ?></h3>
			<p class="text"><?= __( 'We’ve received your information and we’ll get back to you.', 'olly-form' ) ?></p>
		</div>
	</div>
	<div class="btns">
		<button class="btn light-btn step2 step3"><?= __( 'Go Back', 'olly-form' ) ?></button>
		<button class="btn green-btn step1 step2"><?= __( 'Next', 'olly-form' ) ?></button>
		<button class="btn green-btn step3"><?= __( 'Submit', 'olly-form' ) ?></button>
	</div>
	<div class="steppers">
		<img class="step1" src="<?= plugin_dir_url( __FILE__ ) ?>img/Stepper1.png" alt="1st Step" />
		<img class="step2" src="<?= plugin_dir_url( __FILE__ ) ?>img/Stepper2.png" alt="2st Step" />
		<img class="step3" src="<?= plugin_dir_url( __FILE__ ) ?>img/Stepper3.png" alt="3st Step" />
		<img class="step4" src="<?= plugin_dir_url( __FILE__ ) ?>img/Stepper4.png" alt="4st Step" />
	</div>
</div>
