<?php 
require_once 'exceptions/queryException.class.php';
require_once 'utils/const.php';
require_once 'entities/app.class.php';
require_once 'entities/datebase/IEntity.class.php';
abstract class  QueryBuilder{

    //Variables
    /**
     * @var PDO
     */
    private $connection;

    /**
     * @var string
     */
    private $table;

    /**
     * @var string
     */
    private $classEntity;

    /**
     * Constructor de la clase
     * @param string $table
     * @param string $classEntity
     */
    public function __construct($table, $classEntity){
        $this->connection=App::getConnection();
        $this->table=$table;
        $this->classEntity=$classEntity;
    }
    /**
     * 
     * Obtiene los registros de la tabla utilizando la sentendia de MySQL
     * Conectandose a la base de datos utilizando la clse Connection
     * @return array
     */
    public function findAll(){

        $sqlStatement="Select * from $this->table";
        // mejor prepare para evitar que metan codigo sql

        $pdoStatement=$this->connection->prepare($sqlStatement);

        if($pdoStatement->execute()===false){

            throw new QueryException(getErrorString(ERROR_EXECUTE_STATEMENT));

        }
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,$this->classEntity);
        


    }
    /**
     * Mete los datos en la base de datos utilizando la sentencia MySQL (campo) y (valor)
     * Conectandose a la base de datos utilizando la clse Connection
     *  @param IEntity $entity
     */
    public function save(IEntity $entity): void{
        try{
        $parameters =$entity->toArray();
        // Hace un insert into imagenes (descripcion, categoria) values (lo que ocupa)

        $sql = sprintf('insert into %s (%s) values(%s)',
        $this->table,
        implode(', ',array_keys($parameters)),
        ':'.implode(',:',array_keys($parameters)) // :id, :nombre, :descripcion
    );
    
        $statement =$this->connection->prepare($sql);
        $statement->execute($parameters);
        if($entity instanceof imagenGaleria){
            $this->incrementarNumCategorias($entity->getCategoria());
        }


    }catch(PDOException $exception){
        die ($exception->getMessage());
        //throw new  QueryException(getErrorString($exception));

    }
    
    
        
        
        

    }
    /**
     * @param int $categoria
     */
    public function incrementarNumCategorias(int $categoria){
        try{
            $this->connection->beginTransaction();
        $sql = "UPDATE categorias SET numImagenes=numImagenes+1 where id=$categoria";
        $this->connection->exec($sql);
        $this->connection->commit();

        }catch(Exception $exception){
            $this->connection->rollBack();
            throw new Exception($exception->getMessage());

        }
        


       
    }
    /**
     * @param callable $fnExecuteQuerys
     */
    public function executeTransaction(callable $fnExecuteQuerys){
        try{
            $this->connection->beginTransaction();
            $fnExecuteQuerys(); //llamo al callable para que ejecute todas
                                //las operaciones que sean necesarias realizar

            $this->connection->commit(); //Para confirmar las operaciones pendientes y ejecutar

        }catch(PDOException $pdoException){
            $this->connection->rollBack();
            throw new QueryException('No se ha podido realizar la operacion');
        }
    }
    

    
}

?>