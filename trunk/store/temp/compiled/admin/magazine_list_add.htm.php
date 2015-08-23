<?php echo $this->fetch('pageheader.htm'); ?>
<div class="list-div" id="listDiv">
<form action="magazine_list.php" method="post">
<table cellspacing="1" cellpadding="3">
<tr>
	<td width="15%"><?php echo $this->_var['lang']['magazine_name']; ?></td><td><input type="text" name="magazine_name" value="<?php echo $this->_var['magazine_name']; ?>" size="40" /></td>
</tr>
<tr>
	<td><?php echo $this->_var['lang']['magazine_content']; ?></td><td><?php echo $this->_var['FCKeditor']; ?></td>
</tr>
<tr align="center">
  <td colspan="2">
	<input type="hidden" name="step" value="2" />
	<input type="hidden" name="id" value="<?php echo $this->_var['id']; ?>" />
	<input type="hidden" name="act" value="<?php echo $this->_var['act']; ?>" />
    <input type="submit" class="button"  name="Submit"       value="<?php echo $this->_var['lang']['button_submit']; ?>" />
  </td>
</tr>
</table>
</form>
</div>
<script type="Text/Javascript" language="JavaScript">
<!--
onload = function()
{
  // 开始检查订单
  startCheckOrder();
}
//-->
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>