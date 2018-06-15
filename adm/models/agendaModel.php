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
            $sql = "SELECT df.data_func as datas,p.nome as profissional,s.nome as servico,h.hora as hora
            from agenda a
                right join date_as_servicos ds
                    on ds.id=a.date_as_servicos_id
                inner join dia_func df
                    on df.id=ds.data_func_id
                inner join horarios_servicos hs
                    on hs.id=ds.horarios_servicos_id
                inner join horarios h
                    on h.id=hs.horarios_id
                inner join servicos_por_profissionais sp
                    on sp.id=hs.servicos_profissionais_id
                inner join profissionais p
                    on p.id=sp.profissionais_id
                inner join servicos s
                    on s.id=sp.servicos_id
                    where df.data_func= '".$arrayagenda['date']."' and ds.situacao is null and a.situacao is null and s.id='".$arrayagenda['servico']."' and p.id='".$arrayagenda['profissionais']."'
                    order by df.data_func, h.hora;";
            $this ->result = $conn -> query($sql); 
        }
        public function listagenda($arrayagenda){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = 'SELECT df.data_func as datas,p.nome as profissional,s.nome as servico,h.hora as hora,c.nome as clientes
            from agenda a
                inner join date_as_servicos ds
                    on ds.id=a.date_as_servicos_id
                inner join dia_func df
                    on df.id=ds.data_func_id
                inner join horarios_servicos hs
                    on hs.id=ds.horarios_servicos_id
                inner join horarios h
                    on h.id=hs.horarios_id
                inner join servicos_por_profissionais sp
                    on sp.id=hs.servicos_profissionais_id
                inner join profissionais p
                    on p.id=sp.profissionais_id
                inner join servicos s
                    on s.id=sp.servicos_id
                inner join clientes c 
                    on c.id=a.clientes_id
                where p.id='.$arrayagenda['profissionais'].'';
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