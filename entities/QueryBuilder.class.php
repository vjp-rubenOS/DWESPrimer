<?php 
require_once 'exceptions/queryException.class.php';
require_once 'utils/const.php';
require_once 'entities/app.class.php';
require_once 'entities/datebase/IEntity.class.php';
abstract class  QueryBuilder{
    /**
     * @var PDO
     */
    private $connection;

    private $table;
    private $classEntity;
    /**
     * @param PDO $connection
     */
    public function __construct($table, $classEntity){
        $this->connection=App::getConnection();
        $this->table=$table;
        $this->classEntity=$classEntity;
    }
    public function findAll(){

        $sqlStatement="Select * from $this->table";
        // mejor prepare para evitar que metan codigo sql

        $pdoStatement=$this->connection->prepare($sqlStatement);

        if($pdoStatement->execute()===false){

            throw new QueryException(getErrorString(ERROR_EXECUTE_STATEMENT));

        }
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,$this->classEntity);
        


    }
    public function save(IEntity $entity): void{
        try{
        $parameters =$entity->toArray();

        $sql = sprintf('insert into %s (%s) values(%s)',
        $this->table,
        implode(', ',array_keys($parameters)),
        ':'.implode(',:',array_keys($parameters)) // :id, :nombre, :descripcion
    );
    
        $statement =$this->connection->prepare($sql);
        $statement->execute($parameters);
    }catch(PDOException $exception){
        throw new  QueryException(getErrorString($exception));

    }
    
    
        
        
        

    }
    
}

?>