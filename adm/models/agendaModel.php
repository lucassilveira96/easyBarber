<?php
    class agendaModel{
        var $result;

        public function __construct(){
            require_once ("db/connectClass.php");
        }
        public function listhorariosdisp($arrayagenda){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = 'SELECT ph.id,p.nome as profissional,h.hora as hora,s.nome as servico,a.datas from agenda a right join profissionais_horarios ph on ph.id=a.profissionais_horarios_id inner join horarios h on h.id=ph.hora_id inner join profissionais p on p.id=ph.profissionais_id inner join horarios_sp hsp on hsp.hora_id=h.id inner join servicos_por_profissionais sp on sp.id=hsp.servicos_profissionais_id inner join servicos s on s.id=sp.servicos_id where a.situacao is null and s.id='.$arrayagenda['servico'].';';
            $this ->result = $conn -> query($sql); 
        }
        public function listagenda(){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = 'SELECT a.id as id,c.nome as cliente,s.nome as servico,p.nome as profissional,a.datas as datas,h.hora as hora  FROM agenda a INNER JOIN servicos_por_profissionais sp on sp.id=a.servicos_profissionais_id INNER JOIN horarios h on h.id=a.hora_id INNER JOIN servicos s on sp.servicos_id=s.id INNER JOIN profissionais p on p.id=sp.profissionais_id INNER JOIN clientes c on c.id=a.clientes_id;';
            $this ->result = $conn -> query($sql);
        }
        public function consultagenda($cod){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "SELECT * FROM agenda WHERE id = ".$cod.";";
            $this ->result = $conn -> query($sql);
        }
        public function insertagenda($arrayagenda){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "INSERT INTO agenda(nome,telefone) VALUES ('".$arrayagenda['name']."','".$arrayagenda['tel']."');";
            $conn -> query($sql);
            $sql = "SELECT id FROM agenda where nome=".$arrayagenda['name']."";
            $conn -> query($sql);
            $this ->result = $conn -> insert_id;
            $sql = "INSERT INTO servicos_por_agenda(agenda_id,servicos_id) VALUES ($this->result,'".$arrayagenda['servico']."');";
            $conn -> query($sql);
            $sql = "INSERT INTO servicos_por_agenda(agenda_id,servicos_id) VALUES ($this->result,'".$arrayagenda['servico2']."');";
            $conn -> query($sql);
            $this ->result = $conn -> insert_id;
        }
        public function insertagenda1servico($arrayagenda){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "INSERT INTO agenda(nome,telefone) VALUES ('".$arrayagenda['name']."','".$arrayagenda['tel']."');";
            $conn -> query($sql);
            $sql = "SELECT id FROM agenda where nome=".$arrayagenda['name']."";
            $conn -> query($sql);
            $this ->result = $conn -> insert_id;
            $sql = "INSERT INTO servicos_por_agenda(agenda_id,servicos_id) VALUES ($this->result,'".$arrayagenda['servico']."');";
            $conn -> query($sql);
            $this ->result = $conn -> insert_id;
        }
        public function updateagenda($arrayagenda){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "UPDATE agenda set nome='".$arrayagenda['name']."', telefone='".$arrayagenda['tel']."' where id=".$arrayagenda['cod'].";";
            $this ->result = $conn -> query($sql);
        }
        public function deleteagenda($cod){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "DELETE FROM agenda WHERE id='".$cod."';";
            $this ->result = $conn -> query($sql);
        }
        public function getConsult(){
            return $this -> result;
        }
    }
?>