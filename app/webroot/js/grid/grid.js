function getEditor(field, typeObject, isForeignKey){	
	if(isForeignKey !== undefined && isForeignKey == true){
		
		var comboBoxStore = Ext.data.StoreManager.lookup(field.model + 'Store').load();
		comboBoxStore. remoteFilter =  false;
		comboBoxStore. remoteSort = false;
		return {			
			xtype: 'combobox',									
			value: 0,
			store: comboBoxStore,
			valueField: field.valueField,
			displayField: field.displayField,			
			queryMode: 'local',
			queryParam: 'remote',
			triggerAction: 'all',queryCaching: false,
			typeAhead: true,
			forceSelection: true
		}
	}
	else{	
		if(typeObject.type == 'integer' || typeObject.type == 'float' || typeObject.type == 'boolean'){
		return {
				xtype: 'numberfield',
				decimalPrecision: 2,
				allowBlank: true				}
		}
		else if(typeObject.type == 'date'){
			return{
				xtype: 'datefield' ,	
				allowBlank: true,
				format: 'm-d-Y'
				}							
		}
		else {
			return {
				xtype: 'textfield',
				allowBlank: true		
			}				
		}
	}	
}
/*
 * This function returns a grid 
 * @param modelName: string  - the name of the model 
 * @param editable: boolean    -  if the grid should be editable
 * @param ecludedFields: array: string	- array of field that should be excluded from the grid
 * @param: walkOverRide: boolean - if the grid should have an overridden cell-walk function
 */

 Ext.define('PayableGrid', {
		extend: 'Ext.grid.Panel',		
		syncOnEdit : false,
		editorOptions: {clicksToEdit: 2},
		dataModel: '',
		loadingMask: true,
		walkToAddCells: false,
		topDockItems: [{}],
		bottomDockItems: [{}],
		excludedColumns: [],		
		initDockBar:function(position, pagingBar, toobarItems){
		var thisScope = this;
		var barItems = new Array();	
			for(x in toobarItems){
				barItems.push(
				{
					xtype: toobarItems[x].xtype,
					fieldLabel:  toobarItems[x].fieldLabel,
					labelAlign: 'right',
					text: toobarItems[x].text,
					handler: toobarItems[x].handler,
					listeners:  toobarItems[x].listeners
				}
					);
			}			
			if(pagingBar == true){
				return Ext.create('Ext.PagingToolbar', {
					store: thisScope.store,
					dock: position,
					displayInfo: true,
					displayMsg: 'Items {0} - {1} of {2}',
					emptyMsg: "No items to display",
					items: barItems,
				});
			}
			else {			
				return {
					xtype: 'toolbar',
					dock: position,
					items: barItems					
				}
			}
		},			
		initDockedItems: function(pagingBar, topDockItems, bottomDockItems){
			var thisScope = this;
			var theTopBar = this. initDockBar('top' , false, topDockItems);
			var theBottomBar = 	this.initDockBar('bottom', thisScope.hasPagingBar, bottomDockItems)
			var theItems = Array();
			
			if(topDockItems.length > 1){
				theItems.push(theTopBar);
			}		
			
			theItems.push(theBottomBar);		
			
			thisScope.dockedItems = theItems;
		},		
		/**
		* Returns sum of all amounts in the grid 
		* @return {float} grid sum
		*/
		getAmountSum: function(){			
			var sum = 0;
			var allrows = this.store.getRange();			
			if(this.store.count() == 0)
				return 0;			
			for ( x in allrows){			
				sum = sum + allrows[x].get('Amount');
			}			
			return sum;
		},		
		initListeners: function(){			
			if(this.syncOnEdit == true)
				this.on('edit', function(rowEditing, e) {			
					this.store.sync();		
				});	
		},
		
		getColumnSum: function(column){			
			var sum = 0;
			var allrows = this.store.getRange();			
			if(this.store.count() == 0)
				return 0;			
			for ( x in allrows){			
				sum = sum + allrows[x].get(column);
			}			
			return sum;
		},

		/**
		* Returns the grid data as a JSON string
		* to be posted to the backend
		* @return {string} json data
		*/
		getAllRows: function(){		
			var datar = new Array();
			var jsonDataEncode = "";
			var records = this.store.getRange();
			for (var i = 0; i < records.length; i++) {
				datar.push(records[i].data);
			}			
			jsonDataEncode = Ext.encode(datar);			
			return jsonDataEncode;		
		},	


		initRowEditor: function(opts){
			this.plugins = [Ext.create('Ext.grid.plugin.CellEditing', {clicksToEdit: 2})];			
		},		
		
		getModelColumns : function (excludedColumns, modelName){	
			//have to create the model to get the field names. stupid extjs....
			var model = Ext.ModelManager.getModel(modelName).create();
					
			var fields = model.getFields();
			var items = new Array();
			
			for(var	x = 0; x < fields.length; x++){
				if(  inArray(excludedColumns, fields[x].name)  ==  false){
					var isCom = fields[x].isForeignKey;			
					 
					var newColumn = 
						 {
							text: fields[x].name,
							dataIndex: fields[x].name,
							editor: getEditor(fields[x], fields[x].type, isCom),
							flex: 1		
						};
					
						if(fields[x].type.type == 'date'){
								newColumn.xtype = 'datecolumn';
								newColumn.format ='m-d-Y';
						}
						items.push(newColumn);
				}
			}
			delete model;
			delete fields;
			return items;
		},
		
		
		initComponent: function(){	
	
			this.store.loadPage(1);
			this.initRowEditor(this.editorOptions);			
			this.initDockedItems(this.hasPagingBar, this.topDockItems, this.bottomDockItems);			
			this.columns = this.getModelColumns(this.excludedColumns, this.dataModel)
			this.callParent();				
			this.initListeners();
		}
	});	
		

