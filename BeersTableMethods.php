<?php 
class BeersTableMethods 
{
    private $connection;

    public function __construct() {
        $this->connection = new mysqli("localhost", "root", "", "php_elso_dolgozat");
    }

    function getAll() {
        $sql = "SELECT * FROM beers";
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }  
    
    function create($beerdata) {
        $sql ="INSERT INTO beers (sor_nev,tipus,kiszerelese,alkoholfok,lejarati_ido)
                    VALUES (?,?,?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $sor_nev = $beerdata['sor_nev'];
        $tipus = $beerdata['tipus'];
        $kiszerelese = $beerdata['kiszerelese'];
        $alkoholfok = $beerdata['alkoholfok'];
        $lejarati_ido = $beerdata['lejarati_ido'];
        $stmt->bind_param("sssss", $sor_nev, $tipus, $kiszerelese,  $alkoholfok, $lejarati_ido );        
        $stmt->execute();
    }
}
?>