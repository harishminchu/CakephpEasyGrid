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

Ext.define("Ext.view.AbstractView.LoadMask", {
    override: "Ext.view.AbstractView",
    onRender: function() { 
        this.callParent(); 
        if (this.loadMask && Ext.isObject(this.store)) { 
            this.setMaskBind(this.store); 
        } 
    } 
});

Ext.onReady(function() {
		var batchManager = new PayableGrid({
				border : false,
				hasPagingBar: true,
				dataModel: 'PayBatch',
				title :'Pay Batches', 		
				store: 	Ext.getStore('PayBatch' + 'Store'),		
				admin: this.admin,
				pageSize: 100
			}
		);	
	
	var mainPanel = Ext.create('Ext.panel.Panel', {
		renderTo: Ext.getBody(),
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


