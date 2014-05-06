<?php
/**
 * User View
 *
 * The user view displays account information for the given user. This will allow the user to edit their information.
 *
 * @author		Russell Toris - rctoris@wpi.edu
 * @copyright	2014 Worcester Polytechnic Institute
 * @link		https://github.com/WPI-RAIL/rms
 * @since		RMS v 2.0.0
 * @version		2.0.0
 * @package		app.View.Users
 */
?>

<header class="special container">
	<span class="icon fa-user"></span>
	<h2><?php echo __('%s %s', h($user['User']['fname']), h($user['User']['lname'])); ?></h2>
	<p><?php echo h($user['User']['email']); ?></p>
	<p>
		<?php echo $this->Html->link('Edit Information', array('action' => 'edit')); ?> |
		<?php echo $this->Html->link('Change Password', array('action' => 'password')); ?>
	</p>
</header>

<section class="wrapper style4 container">
	<div class="content center">
		<section>
			<?php
			echo $this->Form->postLink(
				' Deactivate My Account',
				array('action' => 'delete'),
				array('class' => 'icon fa-trash-o', 'confirm' => 'Are you sure?')
			);
			?>
			|
			<?php
			echo $this->Html->link( ' Email Subscriptions',
				array('controller' => 'subscriptions', 'action' => 'view'),
				array('class' => 'icon fa-envelope-o')
			);
			?>
		</section>
	</div>
</section>
