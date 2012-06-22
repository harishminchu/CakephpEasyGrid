<script type="text/javascript">
	var modelsForExjts = <?php echo $modelsForExjts;?>;
	var modelName = <?php echo '\'' . $modelName  . '\'';?>; 
</script>

<?php
    echo $this->Html->css('ext-all'); 
    echo $this->Html->script('ext/ext-all-dev.js');	
    echo $this->Html->script('grid/models');	
    echo $this->Html->script('grid/grid');
    echo $this->Html->script('grid/easyGrid');
?> 

<div id="ext-example1"></div> 
