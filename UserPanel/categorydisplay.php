<?php

	
	$query="SELECT s.SubCategoryName,c.CategoryName FROM Category c LEFT OUTER JOIN SubCategory s ON s.CategoryID=c.CategoryID;";
	$result=mysql_query($query);
	$categories=array();
	while($rows=mysql_fetch_array($result))
	{
		$categoryname=$rows['CategoryName'];
		$subcategoryname=$rows['SubCategoryName'];
		if(array_key_exists($categoryname,$categories))
		{
			array_push($categories[$categoryname],
				$subcategoryname);
		}
		else
		{
			
			$categories[$categoryname]=array();
		}
	}

						//print_r($categories);
	foreach ($categories as $categoryname => $subcategoryname)
	{
		$len=count($subcategoryname);
		//echo 'len'.$len;
		if($len==0)
		{
			echo 
			'<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"><a href="#">'.$categoryname.'</a></h4>
				</div>
			</div>';
			}
		else
		{
			echo 
			'<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordian" href="#'.$categoryname.'">
							<span class="badge pull-right"><i class="fa fa-plus"></i></span>'.
							$categoryname.'
						</a>
					</h4>
				</div>
				<div id="'.$categoryname.'" class="panel-collapse collapse">
					<div class="panel-body">
						<ul>';
				for($i=0;$i<$len;$i++)echo '<li><a href="">'.$subcategoryname[$i].'</a></li>';
			
			echo
						'</ul>
					</div>
				</div>
				</div>';
			
		}
	}
?>