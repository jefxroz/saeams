if ($.fn.pagination){
	$.fn.pagination.defaults.beforePageText = 'Pagina';
	$.fn.pagination.defaults.afterPageText = 'of {paginas}';
	$.fn.pagination.defaults.displayMsg = 'Mostrar {from} a {to} of {total} items';
}
if ($.fn.datagrid){
	$.fn.datagrid.defaults.loadMsg = 'Procesando, por favor espere ...';
}
if ($.messager){
	$.messager.defaults.ok = 'Aceptar';
	$.messager.defaults.cancel = 'Cancelar';
}
if ($.fn.validatebox){
	$.fn.validatebox.defaults.missingMessage = 'Este campo es requerido.';
	$.fn.validatebox.defaults.rules.email.message = 'Por favor escriba un Correo electr&oacute;nico valido.';
	$.fn.validatebox.defaults.rules.url.message = 'Por favor escriba una URL valida.';
	$.fn.validatebox.defaults.rules.length.message = 'Por favor escriba un valor entre {0} y {1}.';
	$.fn.validatebox.defaults.rules.remote.message = 'Por favor arregle este campo.';
}
if ($.fn.numberbox){
	$.fn.numberbox.defaults.missingMessage = 'Este campo es requerido';
}
if ($.fn.combobox){
	$.fn.combobox.defaults.missingMessage = 'Este campo es requerido';
}
if ($.fn.combotree){
	$.fn.combotree.defaults.missingMessage = 'Este campo es requerido';
}
if ($.fn.combogrid){
	$.fn.combogrid.defaults.missingMessage = 'Este campo es requerido';
}
if ($.fn.calendar){
	$.fn.calendar.defaults.weeks = ['Dom','Lun','Mar','Mier','Jue','Vier','Sab'];
	$.fn.calendar.defaults.months = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];
}
if ($.fn.datebox){
	$.fn.datebox.defaults.currentText = 'Hoy';
	$.fn.datebox.defaults.closeText = 'Cerrado';
	$.fn.datebox.defaults.okText = 'Aceptar';
	$.fn.datebox.defaults.missingMessage = 'Este campo es requerido';
}
if ($.fn.datetimebox && $.fn.datebox){
	$.extend($.fn.datetimebox.defaults,{
		currentText: $.fn.datebox.defaults.currentText,
		closeText: $.fn.datebox.defaults.closeText,
		okText: $.fn.datebox.defaults.okText,
		missingMessage: $.fn.datebox.defaults.missingMessage
	});
}
