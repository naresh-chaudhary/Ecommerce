<?php


function totalrecords($tablename)
{

$query="SELECT COUNT(*) AS total FROM $tablename;";
$result=mysql_query($query);

$rows= mysql_fetch_array($result);
return $rows['total'];
}

function totalamount()
{

$query="SELECT SUM(Price) AS total FROM OrderDetails;";
$result=mysql_query($query);
$rows= mysql_fetch_array($result);
return $rows['total'];
}


function maxm($tablename,$columnname)
{
    $query='SELECT MAX('.$columnname.') AS max FROM '.$tablename;
    $result=mysql_query($query);
    $rows=mysql_fetch_array($result);
    return $rows['max'];
}

//$fields and $wheere_clause are left optional
function select($tablename,$fields='',$where_clause='',$limit='',$offset='')
{

	$whereSQL = '';
    if(!empty($where_clause))
    {
    	$i = 1;
        $whereSQL.=" WHERE ";
		foreach($where_clause as $key => $value) 
		{
		$whereSQL .= " `$key`=`$value` ";
		if ($i < count($where_clause)) 
			{ 
				// last item should not include the AND 
				$whereSQL .= 'AND';
			}
		 $i++; 
		} 
        
    }
    $limitSQL='';
    if(!empty($limit))
    {
        $limitSQL.=" LIMIT ".$limit;

    }
    $offsetSQL='';
    if(!empty($offset))
    {
        $offsetSQL.=" OFFSET ".$offset;
    }

   $fieldSQL='';
   if(!empty($fields))
   {

   	$fieldSQL=implode(',',$fields);
   }

   if(empty($fieldSQL))
   	$fieldSQL=" * ";
$sql="SELECT ".$fieldSQL." FROM ".$tablename.$whereSQL.$limitSQL.$offsetSQL;
return mysql_query($sql);
}



function insert($table_name, $form_data)
{
    // retrieve the keys of the array (column titles)
    $fields = array_keys($form_data);

    // build the query
    $sql = "INSERT INTO ".$table_name."
    (`".implode('`,`', $fields)."`)
    VALUES('".implode("','", $form_data)."')";

    // run and return the query result resource
    return mysql_query($sql);
}



// where clause is left optional
function update($table_name, $form_data, $where_clause='')
{
    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause))
    {
    	$i = 1;
        $whereSQL.=" WHERE ";
		foreach($where_clause as $key => $value) 
		{
		$whereSQL .= $key."=".$value;
		if ($i < count($where_clause)) 
			{ 
				// last item should not include the AND 
				$whereSQL .= 'AND';
			}
		 $i++; 
		} 
        
    }


    
    // start the actual SQL statement
    $sql = "UPDATE ".$table_name." SET ";

    // loop and build the column /
    $sets = array();
    foreach($form_data as $column => $value)
    {
         $sets[] = "`".$column."` = '".$value."'";
    }
    $sql .= implode(', ', $sets);

    // append the where statement
    $sql .= $whereSQL;

    // run and return the query result
    return mysql_query($sql);
}

// the where clause is left optional incase the user wants to delete every row!
function dbRowDelete($table_name, $where_clause='')
{
    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause))
    {
    	$i = 1;
        $whereSQL.=" WHERE ";
		foreach($where_clause as $key => $value) 
		{
		$whereSQL .= "`$key`=`$value`";
		if ($i < count($where_clause)) 
			{ 
				// last item should not include the AND 
				$whereSQL .= 'AND';
			}
		 $i++; 
		} 
        
    }
    // build the query
    $sql = "DELETE FROM ".$table_name.$whereSQL;

    // run and return the query result resource
    return mysql_query($sql);
}


?>