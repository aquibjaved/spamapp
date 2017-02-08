<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script>
 $(document).ready(function()
{
    $("#search").click(function()
    {
        var value = $('input[name=nm]').val();

        $.ajax(
        {
            type: "POST",
            url: 'form2.php',
            data: {txt1:value},
            success: function(result)
            {
                $("#result").html(result);
            }
        });
    });
}); 
</script>
    
</head>
<body>
 <label for="route_no">Name</label><input type="text" id="nm" name="nm" required="required" />
<input type="button" value="Search" id="search" />
<div id="result"></div>
</body>
</html>