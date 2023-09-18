<?php
class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll ($name_table)
    {
        $sql = "SELECT * FROM $name_table";
        $stm = $this->pdo->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOne($table,$id)
    {
        $sql = "SELECT * FROM $table WHERE id=:id";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(':id',$id);
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function create ($nameTable,$data)
    {
        $keys = implode(',', array_keys($data));
        $valuesKeys = ":" . implode(', :', array_keys($data));
        $values = implode('","', array_values($data));
        $sql = "INSERT INTO $nameTable ({$keys}) VALUES ({$valuesKeys})";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue("{$valuesKeys}","{$values}");
        $stm->execute();
    }
    public function update ($nameTable,$data,$id)
    {
        $keys = array_keys($data);
        $str = "";
        foreach ($keys as $key)
        {
            $str.=$key . '=:' . $key . ',';
        }
        $keys =rtrim($str,',');
        $sql = "UPDATE {$nameTable} SET {$keys} WHERE id=$id";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(":id",$id);
        $stm->execute($data);
    }
    public function delete($table,$id)
    {
        $sql = "DELETE FROM $table WHERE id=:id";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(':id',$id);
        $stm->execute();
    }
}
