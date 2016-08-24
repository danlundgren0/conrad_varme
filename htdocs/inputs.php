<?php
require 'inc.php';


$file = isset($_POST['db']) ? $_POST['db'] : '';

try 
{
    $inputs = new Inputs($file);
    echo $inputs->getView();
}
catch (Exception $e)
{
    echo $e->getMessage();
}


class Inputs
{

    private $dbh;

    public function __construct($file)
    {
        try
        {
            $this->dbh = new Db($file);
        }
        catch (Exception $e)
        {
            exit($e->getMessage());
        }
    }

    public function getView()
    {
        $result = $this->dbh->query('SELECT * FROM input_fields');

        if (!$result)
            throw new Exception('DB_ERROR');


        $ret = '';
        foreach ($result->fetchAll(PDO::FETCH_OBJ) as $row)
        {
            if (!empty($row->steps))
                $ret.= $this->dropdown($row);
            else
                $ret.= $this->textfield($row);
        }

        $ret.= '<div style="margin-top:10px"><input type="submit" value="Submit" id="calculate" /></div>';
        $ret.= '<div style="margin-top:10px"><input type="button" value="Print" id="print" /></div>';

        return $ret;
    }

    private function textfield($row)
    {
        $ret = '<div class="inputs">';
        $ret.= '<label for="' . $row->fieldname . '">' . $row->name . '</label>';
        $ret.= '<input type="text" name="' . $row->fieldname . '" id="' . $row->fieldname . '" value="' . $row->default_value . '" min="' . $row->min_value . '" max="' . $row->max_value . '" class="data" />';
        $ret.= '<span class="symbol">' . $row->symbol . '</span>';
        $ret.= '</div>';

        return $ret;
    }

    private function dropdown($row)
    {
        $steps = explode(',', $row->steps);

        $ret = '<div class="inputs">';
        $ret.= '<label for="' . $row->fieldname . '">' . $row->name . '</label>';
        $ret.= '<select name="' . $row->fieldname . '" id="' . $row->fieldname . '">';

        foreach ($steps as $step)
        {
            $selected = $row->default_value == $step ? 'selected' : '';
            $ret.= '<option '.$selected.' value="' . $step . '">' . $step . '</option>';
        }
            

        $ret.='</select>';
        $ret.= '<span class="symbol">' . $row->symbol . '</span>';
        $ret.= '</div>';

        return $ret;
    }

}





















