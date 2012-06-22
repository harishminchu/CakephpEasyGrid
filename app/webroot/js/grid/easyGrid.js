 Ext.require([ 
	'Ext.Msg.*',
	'Ext.panel.*',
	'Ext.LoadMask',
	'Ext.Ajax.*',
	'Ext.form,*',
	'Ext.grid.*',
	'Ext.data.*',
	'Ext.util.*',
	'Ext.state.*', 
	'Ext.selection.CellModel',
	'Ext.layout.container.Column',
	'Ext.Date.*',
	'Ext.toolbar.Paging'
]);
Ext.onReady(function() {	
 
		var batchManager = new PayableGrid({
				border : false,
				hasPagingBar: true,
				dataModel: modelName,
				title : modelName,
				store: 	Ext.getStore(modelName + 'Store'),		
				admin: this.admin,
				pageSize: 100
			}
		);	
	
	var mainPanel = Ext.create('Ext.panel.Panel', {
		renderTo: 'ext-example1',
		width:'100%',
		id: 'main-panel',
		frame: false,
		border: false,
		margins: '2 0 5 5',
		items: [
			batchManager 		 			
		]
	});
}); 


