<?php

class Race
{

    private $id;
    private $name;
    private $created_at;

    public function __construct($name = null)
    {
        $this->name = $name;
    }

    public function insert()
    {
        try {
            $connection = new PDO("pgsql:host=localhost;dbname=api_pets", "docker", "docker");

            $sql = "insert into races (name) values (:name_value)";

            $statement = $connection->prepare($sql);
            $statement->bindValue(":name_value", $this->getName());

            $statement->execute();

            return ['success' => true];
        } catch (PDOException $error) {
            debug($error->getMessage());
            return ['success' => false];
        }
    }


    public function findMany(){
        $connection = new PDO("pgsql:host=localhost;dbname=api_pets", "docker", "docker");

        $sql = "SELECT id,name from races";

        $statement = $connection->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }
}