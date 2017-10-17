<?php
		$xml = simplexml_load_file("data.xml");
		$query = 'row[season="winter" and color="red" and vendor_id="4"]';
		$query = 'row[season="winter" and color="red"]';
		$query = 'row[season="winter"]';
		$xml = $xml->xpath($query);
		foreach($xml as $row)
		{
			echo $row->vendor_id.", ".$row->season.", ".$row->color."<br>";
			
		}
