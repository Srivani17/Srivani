<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../test/json/functions.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function () {

    (function ($) {

        $('#filter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('#tblList tr').hide();
            $('#tblList tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));

});
</script>






</head>
<body>
<form id="form">
<ul>
<li> <label for="txtID">ID:</label> <input type="text" id="txtID" readonly/> </li></br>
<li> <label for="txtName">Name:</label> <input type="text" id="txtName"/> </li></br>
<li> <label for="txtPhone">Phone:</label> <input type="text" id="txtPhone"/> </li></br>
<li> <label for="txtEmail">Email:</label> <input type="text" id="txtEmail"/> </li></br>
<button value="Save" id="btnSave"/>Save</button> 
</ul>
</form>

<div class="input-group"> <span class="input-group-addon">Filter</span>

    <input id="filter" type="text" class="form-control" placeholder="Type here...">
</div></br></br>


<button id="short_data" onClick="javascript:sortData();">short_data</button>


<table class="table table-striped table-bordered" id="tblList">
 <tbody>
<tr>
<td>Action</td><td>ID</td><td>Name</td><td>Phone</td><td>Email</td>
</tr>
 </tbody>
</table>


</body>

</html>