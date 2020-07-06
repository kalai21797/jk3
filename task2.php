<html>
<body>
<?php
$a=array(7,9,4,3,8,6,1);
function evenfun($a)
{
	if($a%2==0)
	{
	return $a;
	}
}
function oddfun($a)
{
	if($a%2!=0)
	{
	return $a;
	}
}
$even=array_filter($a,"evenfun");
$odd=array_filter($a,"oddfun");
print_r(array_merge($even,$odd));
?>
</body>
</html>