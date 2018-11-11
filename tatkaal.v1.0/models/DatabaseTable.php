<!-- this is the database table that includes all the functions required for runnine the sql queries -->
<?php 
	class DatabaseTable{
		public $pdo; public $table;
		function __construct($pdo, $table){
			$this->pdo = $pdo;
			$this->table = $table;
		}
		function save($record, $primaryKey=''){
		    try {
		        $this->insert($record);
		    } 
		    catch (Exception $e) {
		        $this->update($record, $primaryKey);
		    }
		}

		function insert($record) {
		    $keys = array_keys($record);
		    $values = implode(', ', $keys);
		    $valuesWithColon = implode(', :', $keys);
		    var_dump($values);
		    var_dump($valuesWithColon);
		    
		    $query = 'INSERT INTO ' . $this->table . ' (' . $values . ') VALUES (:' . $valuesWithColon . ')';

		    $stmt = $this->pdo->prepare($query);

		    $stmt->execute($record);
		}

		function update($record, $primaryKey){
		    $query = 'UPDATE ' . $this->table. ' SET ';
		    $parameters = [];
		    foreach ($record as $key => $value) {
		         $parameters[] = $key . ' = :'. $key;
		    } 
		    $query .= implode(', ', $parameters);
		    $query .= ' WHERE ' . $primaryKey . ' = :primaryKey';
		    $record['primaryKey'] = $record[$primaryKey];
		    $stmt = $this->pdo->prepare($query);
		    $stmt->execute($record);
		}

		function find($field, $value) {

			if($field==''){
				$stmt = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' LIMIT ' . $value);
				$stmt->execute();
		        return $stmt;
			}
			else{
				$stmt = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE ' . $field . ' = :value');
		        $criteria = [
		                'value' => $value
		        ];
		        $stmt->execute($criteria);

		        return $stmt;
			}
		       
		}

		function findAll() {
		        $stmt = $this->pdo->prepare('SELECT * FROM ' . $this->table );
		        $stmt->execute();
		        return $stmt;
		}

		function delete($field, $value){
		    $stmt = $this->pdo->prepare('DELETE FROM ' . $this->table . ' WHERE ' . $field . ' = :value');
		    $criteria = [
		                'value' => $value
		        ];
		        $stmt->execute($criteria);

		        return $stmt;
		}
 
		// function insert($table, $criteria){
		// 	global $pdo;

		// 	$keys = array_keys($criteria);	// get table field name
		// 	// print_r($keys);
		// 	$keysWithComma = implode(', ', $keys);		//add comma in between the table fields
		// 	// echo $keysWithComma;
		// 	$keysWithCommaNColon = implode(', :', $keys);		//add comma and colon in between the table fields
		// 	// echo $keysWithCommaNColon;
		// 	$insertUser = $pdo->prepare("INSERT INTO $table ($keysWithComma) VALUES (:$keysWithCommaNColon)");

		// 	if($insertUser->execute($criteria)){
		// 		echo 'insert Success';
		// 		// $_SESSION['login_id'] = ;
		// 		unset($criteria);
		// 	}
		// }

		// function find($table, $field, $value) {
		// 	global $pdo;

		// 	$stmt = $pdo->prepare('SELECT * FROM ' . $table . ' WHERE ' . $field . '= :value');
		// 	$criteria = ['value' => $value];
		// 	$stmt->execute($criteria);
		// 	return $stmt->fetch(); 
		// }

		// // function update($table, $){
		// // 	global $pdo;

		// // 	$stmt = $pdo->prepare('SELECT * FROM ' . $table . ' WHERE ' . $field . '= :value');
		// // 	$criteria = ['value' => $value];
		// // 	$stmt->execute($criteria);
		// // }

	}
?>