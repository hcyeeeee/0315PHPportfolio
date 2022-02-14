<?php
class DB{

    //宣告成員屬性
    private $dsn="mysql:host=localhost;charset=utf8;dbname=portfolio";
    private $root='root';
    private $password='';
    private $table;
    private $pdo;

    //建立建構式，在建構時帶入table名稱會建立資料庫的連線
    public function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,$this->root,$this->password);
    }

// all

public function all(...$arg){

    $sql="select * from $this->table ";

    switch(count($arg)){
        case 1:
    
            if(is_array($arg[0])){
    
                foreach($arg[0] as $key => $value){
    
                    $tmp[]="`$key`='$value'";
    
                }
                $sql.=" WHERE ". implode(" AND " ,$tmp);
            }else{
                
              
                $sql.=$arg[0];
            }
        break;
        case 2:
    
            foreach($arg[0] as $key => $value){
    
                $tmp[]="`$key`='$value'";
    
            }
    
            $sql.=" WHERE ". implode(" AND " ,$tmp) ." ". $arg[1];
        break;

        }
    
    return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
    }

 
public function math($math,$col,...$arg){

    $sql="SELECT $math(`$col`) FROM $this->table ";

    switch(count($arg)){
        case 1:

            if(is_array($arg[0])){
    

                foreach($arg[0] as $key => $value){
    
                    $tmp[]="`$key`='$value'";
    
                }

                $sql .= " WHERE ". implode(" AND " ,$tmp);
            }else{
                
               
                $sql .= $arg[0];
            }
        break;
        case 2:
    
            foreach($arg[0] as $key => $value){
    
                $tmp[]="`$key`='$value'";
    
            }
    
            $sql.=" WHERE ". implode(" AND " ,$tmp) ." ". $arg[1];
        break;
    
        }

    return $this->pdo->query($sql)->fetchColumn();
    
    }

    public function find($id){
        $sql="select * from $this->table where ";
            
            if(is_array($id)){
        
                foreach($id as $key => $value){
        
                    $tmp[]="`$key`='$value'";
        
                }
        
                $sql .= implode(" AND ",$tmp);
        
            }else{
        
                $sql .= " `id`='$id'";
        
            }
        
        //echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        
        }

        public function del($id){

            $sql="delete from $this->table where ";
        
            if(is_array($id)){
        
                foreach($id as $key => $value){
        
                    $tmp[]="`$key`='$value'";
        
                }
        
                    $sql .= implode(" && ",$tmp);
        
            }else{
         
                $sql .= " `id`='$id'";
        
            }
        
        //echo $sql;
        return $this->pdo->exec($sql);
        
        }



public function save($array){

    //判斷資料陣列中是否有帶有 'id' 這個欄位，有則表示為既有資料的更新
    //沒有 'id' 這個欄位則表示為新增的資料
    if(isset($array['id'])){
        //update
        foreach($array as $key => $value){

            if($key!='id'){

                $tmp[]="`$key`='$value'";

            }
        }

        //建立更新資料(update)的sql語法
        $sql="update $this->table set ".implode(',',$tmp)." where `id`='{$array['id']}'";

    }else{
        //insert

        //建立新增資料(insert)的sql語法
        $sql="insert into $this->table (`".implode("`,`",array_keys($array))."`) 
                     values('".implode("','",$array)."')";
                    }
                    echo $sql;
                    return $this->pdo->exec($sql);
                    
                    }
                    
                
public function q($sql){

    return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

}

}


 function to($url){

 header("location:".$url);
                        
}


date_default_timezone_set("Asia/Taipei");

                        session_start();
                        
$User=new DB('user');
                        

?>