<?php 
require_once 'exceptions/queryException.class.php';
require_once 'utils/const.php';
class QueryBuilder{
    /**
     * @var PDO
     */
    private $connection;
    /**
     * @param PDO $connection
     */
    public function __construct(PDO $connection){
        $this->connection=$connection;
    }
    public function findAll(string $table,string $classEntity){
        $sqlStatement="Select * from $table";
        // mejor prepare para evitar que metan codigo sql

        $pdoStatement=$this->connection->prepare($sqlStatement);

        if($pdoStatement->execute()===false){

            throw new QueryException(getErrorString(ERROR_EXECUTE_STATEMENT));

        }
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,$classEntity);
        


    }
    
}

?>