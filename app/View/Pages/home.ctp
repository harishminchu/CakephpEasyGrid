<div class="actions">
	<h3><?php echo __d('cake', 'Models'); ?></h3>
	<ul>		
<?php		
	foreach ($models as $model) {				
		echo "<li>" . $this->Html->link($model,array('controller' => Inflector::underscore(Inflector::pluralize($model)), 'action' => 'grid')). "</li>";	
	}
?>
	</ul>
</div>