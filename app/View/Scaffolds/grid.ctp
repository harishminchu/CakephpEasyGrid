<script type="text/javascript">
	var modelsForExjts = <?php echo $modelsForExjts;?>;
	var modelName = <?php echo '\'' . $modelName  . '\'';?>; 
</script>


  

<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Scaffolds
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
 
?>
<div class="<?php echo $pluralVar;?> index">


<table cellpadding="0" cellspacing="0">
<tr>

	
</tr>

<?php echo $this->Html->css('ext-all'); 
  echo $this->Html->script('ext/ext-all-dev.js');	
  echo $this->Html->script('grid/models');	
  echo $this->Html->script('grid/grid');
  echo $this->Html->script('grid/easyGrid');?>
<div id="ext-example1"></div> 


</table>
</div>
<div class="actions">
	<h3><?php echo __d('cake', 'Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__d('cake', 'New %s', $singularHumanName), array('action' => 'add')); ?></li>
<?php
		foreach ($models as $model) {				
		echo "<li>" . $this->Html->link($model,array('controller' => Inflector::underscore(Inflector::pluralize($model)), 'action' => 'grid')). "</li>";	
	}
?>
	</ul>
</div>

