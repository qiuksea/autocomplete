<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Autocomplete</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$(function() {
    $("#country").autocomplete({
        source: 'search.php',
		minLength: 2,
		select: function( event, ui ) {
        $( "#country" ).val( ui.item.value + "--" + ui.item.label );
        $( "#country_id" ).val( ui.item.value );
		$( "p" ).html("ID: " + ui.item.value);
        return false;
      }
    });
});
</script>
</head>
<body>

<div class="ui-widget">
  <label for="country">Country: </label>
  <input id="country" name= "country">
  <input type="hidden" name="country_id" id="country_id">
</div>

<p></p>
 
</body>
</html>