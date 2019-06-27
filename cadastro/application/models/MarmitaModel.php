<?php
class MarmitaModel extends CI_Model
{

    public function atualiza()
    {
        if (!sizeof($_POST)) return;
        $prontuario = $this->input->post("prontuario");

        $this->db->where("prontuario", $prontuario);
        $query = $this->db->get("controle_prontuario");


        if ($query->num_rows() == 1) {
            $data = array(
                'estado_marmita' => '1',
            );
            $this->db->where('prontuario', $prontuario);
            $this->db->update('controle_prontuario', $data);
            echo '<div class="text-center alert-success" style="font-size: 20px"><b>Marmita reservada, obrigado</b></div>';
        } else {
            echo '<div class="text-center alert-danger" style="font-size: 20px"><b>O Prontuário não existe, faça o cadastro do mesmo</b></div>';
        }
    }

    public function cadastrar()
    {


        $prontuario = $this->input->post("prontuario");

        $sql = "INSERT INTO controle_prontuario(prontuario)
        VALUE ('$prontuario')";

        $this->db->query($sql);
    }
}
