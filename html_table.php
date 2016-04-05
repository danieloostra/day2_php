<?php
$users = array( 
			array('first_name' => 'Michael', 'last_name' => 'Choi'),
			array('first_name' => 'John', 'last_name' => 'Supsupin'),
			array('first_name' => 'Mark', 'last_name' => 'Guillen'),
			array('first_name' => 'KB', 'last_name' => 'Talker'),
			array('first_name' => 'Ted', 'last_name' => 'Esquire'),
			array('first_name' => 'Jennifer','last_name' => 'Connelly'),
			array('first_name' => 'Bill', 'last_name' => 'Preston'),
			array('first_name' => 'Ted', 'last_name' => 'Esquire'),
			array('first_name' => 'Jen','last_name' => 'Connettye'),
			array('first_name' => 'Billy', 'last_name' => 'Thekid'),
			array('first_name' => 'Ted', 'last_name' => 'Porkbundy'),
			array('first_name' => 'Larry','last_name' => 'David'),
			array('first_name' => 'Paul', 'last_name' => 'Dolly'),
			array('first_name' => 'Madison', 'last_name' => 'Frankin')

);


?>

<table border="1px" cellpadding="3px" cellspacing="0px" bordercolor="#d3d3d3">
    <thead>
        <tr>
            <th>User #</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Full Name</th>
            <th>Full Name in upper case</th>
            <th>Length of full name</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $Usernum = 1;
    $junk = '';
    foreach($users as $val)
    {
    	
    	if($Usernum % 5 == 0)
    	{
			$junk = "<tr style='background-color:black;color:white;'>";
    	}
    	else
    	{
    		$junk = '<tr>';
    	}
    	$junk = $junk . '<td><strong>' . $Usernum . '</strong></td>';
    	++$Usernum;
    	foreach($val as $val2)
    	{
    		$junk = $junk . '<td>' . $val2 . '</td>';

    	}
    	$junk = $junk . '<td>' . $val['first_name'] . ' ' . $val['last_name'] . '</td>';
  		$junk = $junk . '<td>' . strtoupper($val['first_name']) . ' ' . strtoupper($val['last_name']) . '</td>';
  		$junk = $junk . '<td>' . (strlen($val['first_name']) + strlen($val['last_name'])) . '</td>';
    	$junk = $junk . '</tr>';
    	echo $junk;
    }
    	

    

    ?>
<!--         <tr>
            <td>Sample Name</td>
            <td>an_email@gmail.com</td>
            <td>555-5555</td>
        </tr>
        <tr>
            <td>Another Name</td>
            <td>another_email@gmail.com</td>
            <td>444-4444</td>
        </tr> -->
    </tbody>
</table>
