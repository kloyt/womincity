<?php
function show_comments($id_article)
{
 include("config.php");
 $res = mysql_query("select * from comments where id_article like $id_article and public = 1 order by id", $con) or die ("Error! query – show comments");
 while($arr = mysql_fetch_array($res, MYSQL_NUM))
	 {
		echo "
			<div class=main>
			<img src=images/comentator.jpg>
				<div class=block_name>
					<span class=name>$arr[2]</span>
					<span class=date>$arr[5]</span>
				</div>
				<div class=coment>
					<div>$arr[4]</div>
				</div>
			</div>
		";
	}
}
?>