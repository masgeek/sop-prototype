<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SOP Tool variables</title>
    <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/demo/demo.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.edatagrid.js"></script>
    <script type="text/javascript" src="app.js"></script>
</head>
<body>
<h2>Variables DataGrid</h2>
<p>Double click the row to begin editing.</p>

<form id="form" action="#">
    <div class="field">
        <label for="odkFormId">Odk Form Id:</label>
        <input type="text" id="odkFormId" name="odkFormId" required onchange="setOdkFormId()" class="form-control">
    </div>
</form>
<hr/>

<table id="dg" title="My Users" class="table table-responsive" width="100%"
       toolbar="#toolbar" pagination="false" idField="id"
       rownumbers="true" fitColumns="true" singleSelect="true">
    <thead>
    <tr>
        <!--        <th field="user_id" width="50" editor="{type:'validatebox',options:{required:true}}">First Name</th>-->
        <!--        <th field="crop" width="50" editor="{type:'validatebox',options:{required:true}}">Crop</th>-->
        <!--        <th field="sopno" width="50" editor="{type:'validatebox',options:{required:true}}">Sopno</th>-->
        <!--        <th field="ODKFORM_id" width="50" editor="{type:'validatebox',options:{required:true}}">ODKFORM_id</th>-->
        <th field="type" width="50" editor="{type:'validatebox',options:{required:true}}">Type</th>
        <!--        <th field="unit" width="25" editor="{type:'validatebox',options:{required:true}}">Unit</th>-->
        <th data-options="field:'unit',width:100,
                        formatter:function(value,row){
                            return row.unit;
                        },
                        editor:{
                            type:'combobox',
                            options:{
                                valueField:'unit',
                                textField:'unit',
                                method:'get',
                                url:'crud/unit.json',
                                required:true
                            }
                        }">Unit
        </th>
        <th field="label" width="50" editor="{type:'validatebox',options:{required:true}}">label</th>
        <th field="name" width="50" editor="{type:'validatebox',options:{required:true}}">Name</th>
        <th field="category_1" width="50">Category_1</th>
        <th field="category_2" width="50">Category_2</th>
        <th field="category_3" width="50">Category_3</th>
        <th field="category_4" width="50">Category_4</th>
        <th field="category_5" width="50">Category_5</th>
        <th field="category_6" width="50">Category_6</th>
    </tr>
    </thead>
</table>

<div id="toolbar">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true"
       onclick="javascript:$('#dg').edatagrid('addRow')">New</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true"
       onclick="javascript:$('#dg').edatagrid('destroyRow')">Delete</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-save" plain="true"
       onclick="javascript:$('#dg').edatagrid('saveRow')">Save</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-undo" plain="true"
       onclick="javascript:$('#dg').edatagrid('cancelRow')">Cancel</a>
</div>
<script type="text/javascript">
    $(function () {
        $('#dg').edatagrid({
            url: 'crud/get_variables.php',
            saveUrl: 'crud/add_variable.php',
            updateUrl: 'crud/update_variable.php',
            destroyUrl: 'crud/remove_variable.php',
        });
    });
</script>

</body>
</html>