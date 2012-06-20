roothPath = '/payables';

/*
 * Gets all the possible columns for a model given
 * a string that is the model name
 * @param modelName string
 */
function inArray(arr,val){
	for(var	x = 0; x < arr.length; x++){
		if(arr[x] === val)
			return true;
	}
	
	return false;
}

Ext.define('App.Model',{
		
		extend: 'Ext.data.Model', 
		
		getFieldByName: function(name){
			
			console.log(this);
		//	return this.items.fields;
		}, 
		getFormFieldXtypes:function(field){
			
			var type = field.type.type;
			if(type == 'int' || type == 'float'){
				return 'numberfield';
			}else if(type == 'date'){
				return 'datefield';			
			}else if(type == 'bool'){
				return 'checkboxfield';
			}else{
				return 'textfield';
			}
		}
});

for(x in modelsForExjts){
		
	Ext.define(modelsForExjts[x].name, {
		id: modelsForExjts[x].name, 
		extend: 'App.Model', 
		fields: modelsForExjts[x].fields,
		idProperty: modelsForExjts[x].primaryKey,
		
		getNumberOfFields: function(){
			return this.fields.items.length;
		},
		getFields:function(){
			
			return this.fields.items;
		},
		setDisplayField: function(str){
			 this.displayField = str;
		}
			
		
				
	});	
	 var model = Ext.ModelManager.getModel(modelsForExjts[x].name);	
	model.displayField = modelsForExjts[x].displayField;

	 
	Ext.create('Ext.data.Store', {
		model: modelsForExjts[x].name,
		storeId: modelsForExjts[x].name + 'Store',
		 autoLoad: true,
		 buffered: false,
		 autoSync: true,
		 pageSize: 10,
		 remoteFilter: true,
		 remoteSort: true,
		 proxy: {
			 type: 'ajax',
			 reader:{			
			type: 'json',
			root: modelsForExjts[x].name					
		},
		writer:{			
			type: 'json',
			root: modelsForExjts[x].name			
		},		 
		api: {
		read: roothPath + '/' + modelsForExjts[x].path + '/read',	
				update: roothPath + '/' +  modelsForExjts[x].path + '/update',
				create: roothPath + '/' +  modelsForExjts[x].path + '/create',
				destroy: roothPath + '/' +  modelsForExjts[x].path + '/destroy',	
			}
		}
	});
}