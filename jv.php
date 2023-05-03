<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<table>
<tbody id="calculation">
<td><input class="underline-input" type="number" name="item" /></td>
<td><input class="underline-input amount" type="number" id="amount" name="amount"/></td>
</tbody>
<tr>
<th colspan="2">TOTAL RM</th>
<td><input class="underline-input" type="number" id="total" name="total" /></td>
</tr>
</table>

<script type="text/javascript">
$(document).ready(function () {

    $('#calculation').on("keyup", ".amount", function () {

        var sum = 0;

        $('.amount').each(function () {
            sum += Number($(this).val());
        });

        $('#total').val(sum);

    });
});

function addRow() {
    var template = '';
    template += '<tr>';
    template += '<td><input class="underline-input" type="number" name="item" />';
    template += '<td><input class="underline-input amount" type="number" id="amount" name="amount" /></td>';
    template += '</tr>';

    $("#calculation").append(template);
}
</script>
</body>
</html>
