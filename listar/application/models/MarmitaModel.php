<?php
class MarmitaModel extends CI_Model
{
    /**
	 * @author Gabriel Moraes Martins
	 */

    public function listar(Type $var = null)
    {
        $sql = "SELECT *
        FROM controle_prontuario
        WHERE estado_marmita = 1
        ORDER BY prontuario asc";

        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->prontuario</td>";
            $html .= '<td>' . $this->get_action_buttonsOleoColetado($row->id_prontuario) . '</td>';
            $html .= "</tr>";
        }
        return $html;
    }
    private function get_action_buttonsOleoColetado($id)
    {
        $html = '<a href="' . base_url('index.php/welcome/remove/' . $id) . '">
                    <button type="button" class="btn btn-outline-success btn-sm waves-effect">Entregue</button>
                </a>';
        return $html;
    }

    public function remover($id)
    {
        $sql = "UPDATE  controle_prontuario SET estado_marmita =  '0' WHERE  controle_prontuario.id_prontuario = $id";
        $this->db->query($sql);
    }
}
