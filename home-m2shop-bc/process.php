<?php 

	include 'idmore.php';
	$idmoreRo = new idmoreRo();
	if (isset($_GET['act'])) {
		switch ($_GET['act']) {
			case 'showprovince':
				$province = $idmoreRo->showProvince();
				echo $province;
				break;
			case 'showcity':
				$idprovince = $_GET['province'];
				$city = $idmoreRo->showCity($idprovince);
				echo $city;
				break;
			case 'cost':
				$origin = $_GET['origin'];
				$destination = $_GET['destination'];
				$weight = $_GET['weight'];
				$courier = $_GET['courier'];
				$cost = $idmoreRo->hitungOngkir($origin,$destination,$weight,$courier);
				$costarray = json_decode($cost);
				// print_r($costarray);
				$results = $costarray->rajaongkir->results;
				
				if(!empty($results)):
					foreach($results as $r):
						foreach($r->costs as $rc):

							foreach($rc->cost as $rcc):
								echo "		
											<tr>
												<td>
													<input onclick='totalOngkir()' type='radio' id='pilihpaket' name='pilihpaket' value=".$rcc->value.">
												</td>
												<td>".$rc->service."</td>
												<td>".$rc->description."</td>
												<td>".$rcc->etd."</td>
												<td>".number_format($rcc->value)."</td>
											</tr>
									
									";

							endforeach;
						endforeach;
					endforeach;
				endif;
				// 	// end parse json
				break;
				case 'alvincost':
				$origin = $_GET['origin'];
				$destination = $_GET['destination'];
				$weight = $_GET['weight'];
				$courier = $_GET['courier'];
				$cost = $idmoreRo->hitungOngkir($origin,$destination,$weight,$courier);
				//parse json
				$costarray = json_decode($cost);
				$results = $costarray->rajaongkir->results;
				echo '<br/>';
				// print_r($results);
				if(!empty($results)){
					foreach($results as $r):
						foreach($r->costs as $rc):
							foreach($rc->cost as $rcc):
								echo '<label><input onclick="totalOngkir()" type="radio" id="pilihpaket" name="pilihpaket" value="'.$rcc->value.'">'.$r->code.'<br/>'.$rc->service.'<br/>'.$rc->description.'Rp.'.number_format($rcc->value).'</label><br/>';
							endforeach;
						endforeach;
					endforeach;
				}else{
					echo 'paket tidak tersedia';
				}
		//end of parse json
				break;
				default:
				echo 'aksi tidak tersedia';
				break;
		}
	}

	
 ?>