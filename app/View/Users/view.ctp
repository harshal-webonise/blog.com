<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expendetures'), array('controller' => 'expendetures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expendeture'), array('controller' => 'expendetures', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Expendetures'); ?></h3>
	<?php if (!empty($user['Expendeture'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Usedfor'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Tookfrom'); ?></th>
		<th><?php echo __('Duedate'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Expendeture'] as $expendeture): ?>
		<tr>
			<td><?php echo $expendeture['id']; ?></td>
			<td><?php echo $expendeture['usedfor']; ?></td>
			<td><?php echo $expendeture['amount']; ?></td>
			<td><?php echo $expendeture['created']; ?></td>
			<td><?php echo $expendeture['tookfrom']; ?></td>
			<td><?php echo $expendeture['duedate']; ?></td>
			<td><?php echo $expendeture['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'expendetures', 'action' => 'view', $expendeture['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'expendetures', 'action' => 'edit', $expendeture['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'expendetures', 'action' => 'delete', $expendeture['id']), null, __('Are you sure you want to delete # %s?', $expendeture['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Expendeture'), array('controller' => 'expendetures', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
