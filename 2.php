<div class="form-group options">
<label class="control-label col-md-4" for="optiontext">Specify an option</label>
<div class="col-md-6">
    <input type="checkbox" name="option[]" value="option1" required/> Option 1<br>
    <input type="checkbox" name="option[]" value="option2" required/> Option 2<br>
    <input type="checkbox" name="option[]" value="option3" required/> Option 3<br>
    <input type="checkbox" name="option[]" value="option4" required/> Option 4<br>
    <input type="checkbox" name="option[]" value="option5" required/> Option 5<br>
    <input type="checkbox" name="option[]" value="option6" required/> Option 6<br>
    <input type="checkbox" name="option[]" value="option7" required/>  Option 7
</div>
<p>&nbsp;</p>

<script type="text/javascript">

$(function()
{

var requiredCheckboxes = $('.options :checkbox[required]');
requiredCheckboxes.change(function()
{
    if(requiredCheckboxes.is(':checked')) 
	{
        requiredCheckboxes.removeAttr('required');
    } 
	else {
        requiredCheckboxes.attr('required', 'required');
    }
});

</script>