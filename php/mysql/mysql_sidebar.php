<?PHP
	if (!isset($_SESSION)) {
		session_start();
	}
	require ("mysql_conn.php");
	error_reporting(E_ALL ^ E_NOTICE);
	$db = $mysqli_conection;
	$errorMessage = "";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['sidebar'])) {
			$sql = "show databases;";
			$result = mysqli_query($db, $sql);
			$count = mysqli_num_rows($result);
			if ($count >= 1) {
				while ($row = mysqli_fetch_array($result)) {
					$schema = $row['Database'];
					$tab_sql = 'Select table_name from information_schema.tables where table_schema <> "information_schema" and table_schema="'.$schema.'"';
					$tab_result = mysqli_query($db, $tab_sql);
					$countt = mysqli_num_rows($tab_result);
					
						while ($row_tab = mysqli_fetch_array($tab_result)) {
							$table_name = $row_tab['table_name'];
							$t_result =  '<li>
											<span><i class="glyphicon glyphicon-list"></i>'.$table_name.'</span>
										</li>';
						}
						$f_result .=$t_result;
						echo 
							'<li class="parent_li">
								<span><i class="glyphicon glyphicon-globe"></i>'.$schema.'</span>
								<ul>'
									.$f_result.
								'</ul>
							</li>';
				 
				}
			} else {
				echo 'No schema';
			}
			ob_end_flush();
		}
	}
	mysqli_close($db);
?>