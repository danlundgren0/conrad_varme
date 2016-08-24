<?php

class Db extends PDO
{

    function __construct($file)
    {
        $file = ucfirst($file);
        $file = "db/$file.sqlite";

        if(!is_file($file))
            throw new Exception('NO_FILE' . $file);

        parent::__construct("sqlite:$file");
    }

}

class Init
{

    protected $dbName;
    protected $dbh;
    protected $class;

    public function __construct($input)
    {
        $class = ucfirst(strtolower($input['db']));

        if(!class_exists($class))
            throw new Exception('INVALID_CLASS:' . $class);

        $this->class = new $class($input);
    }

    public function getView()
    {
        $this->class->run();

        return $this->class->getView();
    }

}

class Base
{

    protected $input;
    protected $view = '';
    protected $lengthField = 'Length';
    protected $maxLen;
    protected $minLen;
    protected $description = '';

    public function __construct($input)
    {
        $class = get_class($this);

        try
        {
            $this->dbh = new Db($class);
        }
        catch(PDOException $e)
        {
            throw new Exception($e);
        }

        $this->input = (object) $input;

        $this->setMinMaxLen();
    }

    public function run()
    {
        $this->init();
        $this->setHeader();

        $result = $this->dbh->query($this->query());
        foreach($result->fetchAll(PDO::FETCH_OBJ) as $row)
        {
            $this->setRow($row);
        }
    }

    protected function init()
    {

    }

    protected function appView($str)
    {
        $this->view .= $str;
    }

    protected function addRow($arr, $isHeader = false)
    {
        $header = $isHeader ? 'row-header' : '';

        $tmp = '<tr class="row ' . $header . '">';

        $first = true;
        foreach($arr as $item)
        {
            if($isHeader && $first)
            {
                $tmp.= '<td class="item first">' . $item . '</td>';
                $first = false;
            }
            else
                $tmp.= '<td class="item">' . $item . '</td>';
        }
        $tmp.= '</tr>';

        $this->appView($tmp);
    }

    protected function query()
    {
        return 'SELECT * FROM article';
    }

    protected function calc($wpm_nom, $n_koef = 1, $height_fact = null)
    {

        /*
          echo 'flow:'.$this->input->flow.'<br>';
          echo 'return:'.$this->input->return.'<br>';
          echo 'room:'.$this->input->room.'<br>';
          echo '$wpm_nom:'.$wpm_nom.'<br>';
          echo '$n_koef:'.$n_koef.'<br>';
          echo '$height_fact:'.$height_fact.'<br><br>';
         */
//echo '$wpm_nom:'.$wpm_nom.'<br>';
        $values = array();
        $values['watt1'] = null;
        $values['watt2'] = null;
        $values['length'] = null;
        $wpm = null;

        if($wpm_nom)
        {


            //echo ($this->input->flow - $this->input->return);
            if($this->input->flow - $this->input->return)
            {
                $wpm = floor($wpm_nom * pow(($this->input->flow - $this->input->return) / (log(($this->input->flow - $this->input->room) /
                                        ($this->input->return - $this->input->room))) / ((75 - 65) / log((75 - 20) / (65 - 20))), $n_koef));
            }
        }
//echo 'ff'.$n_koef .' '.$wpm.', ';
        if($wpm)
        {
            if(!$height_fact)
            {
                $switch = isset($this->input->height) ? $this->input->height : null;
                if($switch <= 100)
                    $height_fact = 1;
                else if($switch <= 125)
                    $height_fact = 1.1;
                else if($switch <= 150)
                    $height_fact = 1.2;
                else if($switch <= 200)
                    $height_fact = 1.3;
                else
                    $height_fact = 1;
            }

            $w1 = ceil(($this->input->length / 1000 ) * $height_fact * $wpm);
            $le = round(( $this->input->watt * $height_fact ) / $wpm, 2) * 1000;
            $w2 = ceil(($le / 1000 ) * $height_fact * $wpm);

            $values['watt1'] = $w1;

            if($le < $this->maxLen && $le > $this->minLen)
            {
                $values['length'] = $le;
                $values['watt2'] = $w2;
            }
        }


        return $values;
    }

    protected function setHeader()
    {
        $arr = array();
        $arr[] = '';
        $arr[] = 'Konvektortyp';
        $arr[] = 'Längd';
        $arr[] = 'Effekt';
        $arr[] = 'Längd';
        $arr[] = 'Effekt';

        $this->addRow($arr, true);
    }

    protected function setRow($row)
    {

    }

    protected function getDesc()
    {
        $query = 'SELECT tube, desc FROM description';
        $result = $this->dbh->query($query);

        $tmp = '';
        if($result)
        {
            foreach($result->fetchAll(PDO::FETCH_OBJ) as $row)
            {
                $tube = empty($row->tube) ? null : '<div class="tube_' . $row->tube . '"></div>';
                ;

                if($tube)
                {
                    $tmp.= '<div class="d0">';
                    $tmp.= '<div class="d1 tubes">' . $tube . '</div>';
                    $tmp.= '<div class="d2">' . $row->desc . '</div>';
                }
                else
                {
                    $tmp.= '<div class="d4">';
                    $tmp.= '<div class="d3">' . $row->desc . '</div>';
                }

                $tmp.= '</div>';
            }

            $tmp = '<tr><td colspan="6" style="padding-top:20px;padding-bottom:20px">' . $tmp . '</td></tr>';
        }

        return $tmp;
    }

    public function getView()
    {
        $view = '<table class="g-table" cellspacing="1" cellpadding="1">';
        $view.= $this->view;
        $view.= $this->getDesc();
        $view.= '</table>';

        return $view;
    }

    protected function addTubes($str)
    {
        $ret = '';

        for($i = 0; $i < strlen($str); $i++)
        {
            $tmp = $str[$i];
            $ret .= '<div class="tube_' . $tmp . '"></div>';
        }

        $tubes = '<div class="tubes">' . $ret . '</div>';

        return $tubes;
    }

    protected function setMinMaxLen()
    {
        $query = 'SELECT min_value, max_value FROM input_fields
                  WHERE fieldname LIKE "' . $this->lengthField . '"
                  LIMIT 1';
        $result = $this->dbh->query($query);

        if(!$result)
            throw new Exception('ERROR_LENGTH_NAME');

        $row = $result->fetch(PDO::FETCH_OBJ);

        $this->minLen = $row->min_value;
        $this->maxLen = $row->max_value;
    }

}

class Proline extends Base
{

    protected function setRow($row)
    {
        $values = $this->calc($row->wpm_nom, $row->n_koef);

        $arr = array();
        $arr['tubes'] = $this->addTubes($row->tubes);
        $arr[] = $row->artno;
        $arr[] = $values['length'];
        $arr[] = $values['watt2'];
        $arr[] = $this->input->length;
        $arr[] = $values['watt1'];

        $this->addRow($arr);
    }

}

class Finned extends Base
{

    protected function query()
    {
        $col = 'c' . $this->input->return;
        $where = 'WHERE name LIKE "' . $this->input->flow . $this->input->room . '%"';

        $query = 'SELECT name AS artno,' . $col . ' AS wpm_nom, tubes FROM article ' . $where;

        return $query;
    }

    protected function setRow($row)
    {
        $values = $this->calc($row->wpm_nom, null);

        $arr = array();
        $arr[] = $this->addTubes($row->tubes);
        $arr[] = $row->artno;
        $arr[] = $values['length'];
        $arr[] = $values['watt2'];
        $arr[] = $this->input->length;
        $arr[] = $values['watt1'];

        $this->addRow($arr);
    }

}

class Lline extends Base
{

    protected function setHeader()
    {
        $arr = array();
        $arr[] = '';
        $arr[] = 'Längd';
        $arr[] = 'Effekt';
        $arr[] = 'Längd';
        $arr[] = 'Effekt';

        $this->addRow($arr, true);
    }

    protected function setRow($row)
    {
        $values = $this->calc($row->wpm_nom, $row->n_koef);

        $arr = array();
        $arr[] = $this->addTubes($row->tubes);
        // $arr[] = $row->artno;
        $arr[] = $values['length'];
        $arr[] = $values['watt2'];
        $arr[] = $this->input->length;
        $arr[] = $values['watt1'];

        $this->addRow($arr);
    }

}

class Skyline extends Lline
{

}

class Convectors extends Base
{

    protected function query()
    {
        $where = 'WHERE height = ' . $this->input->height;

        $query = 'SELECT artno, wpm_nom, tubes FROM article ' . $where;

        return $query;
    }

    protected function setRow($row)
    {
        $values = $this->calc($row->wpm_nom, 1.2, 1);

        $arr = array();
        $arr[] = $this->addTubes($row->tubes);
        $arr[] = $row->artno;
        $arr[] = $values['length'];
        $arr[] = $values['watt2'];
        $arr[] = $this->input->length;
        $arr[] = $values['watt1'];

        $this->addRow($arr);
    }

}

class Floorline extends Finned
{

    protected function query()
    {
        $col = '*';
        $where = 'WHERE type LIKE "' . $this->input->temp . '"';

        $query = 'SELECT * FROM art2 ' . $where;

        return $query;
    }

    public function run()
    {
        $this->init();
        $this->setHeader();

        $result = $this->dbh->query($this->query());
        $row = $result->fetch(PDO::FETCH_OBJ);


        $options = array();
        $tmp = array();
        foreach($row as $key => $val)
        {
            if(('c' . $this->input->length) == $key)
            {
                $options['watt1'] = $val;
            }

            if(is_numeric($val))
                $tmp[$key] = $val;
        }

        ksort($tmp);

        foreach($tmp as $key => $val)
        {
            if($val > $this->input->watt)
            {
                $options['len1'] = str_replace('c', '', $key);
                $options['watt2'] = $val;
                break;
            }
        }

        foreach($tmp as $key => $val)
        {
            if(($val * 2) > $this->input->watt)
            {
                $options['len2'] = str_replace('c', '', $key);
                $options['watt3'] = ($val * 2);
                break;
            }
        }


        if(!isset($options['watt2']))
        {
            $options['len1'] = 'Too large W';
            $options['watt2'] = '';
        }


        $this->setRow('FL', $options['watt1'], $options['watt2'], $options['len1']);
        $this->setRow('FL TWIN', ($options['watt1'] * 2), $options['watt3'], $options['len2']);
    }

    protected function setHeader()
    {
        $arr = array();
        $arr[] = 'Type';
        $arr[] = 'Length';
        $arr[] = 'Watt';
        $arr[] = 'Length';
        $arr[] = 'Watt';

        $this->addRow($arr, true);
    }

    protected function setRow($name, $watt, $watt2, $len)
    {
        $this->setInput();

        //$values = $this->calc($row->wpm_nom, null);

        $arr = array();
        $arr[] = $name;
        ;
        //$arr[] = $row->artno;
        $arr[] = $len;
        $arr[] = $watt2;
        $arr[] = $this->input->length;
        $arr[] = $watt;

        $this->addRow($arr);
    }

    private function setInput()
    {
        $values = explode('/', $this->input->temp);

        $this->input->flow = $values[0];
        $this->input->return = $values[1];
        $this->input->room = $values[2];
    }

}

class Vertical extends Base
{

    protected function calc($panel_fact)
    {
        $values = array();
        /*
          field[1]
          field[2]
          field[3]
          field[4]
          field[6]
         *
          ROUNDUP(((effekt_input/panelfaktor)/(length_input/70)-35.83333)/5.83333*100;-2)
         *
         *
         * ROUND(panel_faktor*(35.83333+(N4_längd_framräknad/100)*5.83333)*length_input/70;0)
         *
         */



        //ceil((($this->input->watt / $panel_fact) / ($this->input->length / 70) - 35.83333) / 5.83333 * 100);

        /*
          $k = pow(((($this->input->flow - $this->input->return) /
          log(($this->input->flow - $this->input->room) / ($this->input->return - $this->input->room))) / ((75 - 65) /
          log((75 - 20) / (65 - 20)))), 1.21);

          K= round( ((((flow_input-flow_return)/LN((flow_input-roomtemp_input)/(return_input-roomtemp_input)))/((75-65)/LN((75-20)/(65-20))))^1,21), 2)


          $length = ( ( ( ($this->input->watt ) / $panel_fact ) / ($this->input->height / 70) ) - (35.8333 * $k) / (5.8333 * $k)) * 100;
          $length = ceil($length / 100) * 100;

          $watt = $panel_fact * ((35.8333 * $k) + (($length / 100) * ($k * 5.83333))) * ($this->input->height / 70);
          $watt = ceil($watt);
         */
        //  $values['watt1'] = $watt;
        //  $values['length'] = $length;
        //  $values['watt2'] = $watt;


        if($this->input->height < 1000)
            $this->input->height = 1000;
        if($this->input->height > 3200)
            $this->input->height = 3200;


        $k = round(pow(((($this->input->flow - $this->input->return) /
                        log(($this->input->flow - $this->input->room) / ($this->input->return - $this->input->room))) / ((75 - 65) /
                        log((75 - 20) / (65 - 20)))), 1.21), 2);

        $values['height'] = ceil((($this->input->watt / $panel_fact) / ($this->input->length / 70) - (35.83333 * $k)) / (5.83333 * $k) * 100);
        //$values['height'] = ceil((($this->input->watt / $panel_fact) / ($this->input->length / 70) - 35.83333) / 5.83333 * 100);

        if($values['height'] < 1000)
            $values['height'] = 1000;
        if($values['height'] > 3200)
            $values['height'] = 3200;


        $values['height'] = ceil($values['height'] / 100) * 100;
        $values['watt1'] = ceil($panel_fact * (35.83333 + ($values['height'] / 100) * 5.83333 * $k) * $this->input->length / 70);


        //ROUND(panel_index*((35.83333*$k)+(height_mm/100)*(5.83333*$k))*B11_length_input/70;0)
        //$panel_fact*((35.83333*$k)+($this->input->height/100)*(5.83333*$k))*$this->input->length/70

        $values['watt2'] = round($panel_fact * ((35.83333 * $k) + ($this->input->height / 100) * (5.83333 * $k)) * $this->input->length / 70);



        // $values['height'] = ceil($values['height'] / 100) * 100;


        return $values;
    }

//=IF(ROUNDUP((($B$15/INDEX($Data.$F$26:$F$28;S8))/($B$11/70)-$Data.$D$27)/$Data.$D$26*100;-2)<=$Data.$B$28;$Data.$B$28;IF(ROUNDUP((($B$15/INDEX($Data.$F$26:$F$28;S8))/($B$11/70)-$Data.$D$27)/$Data.$D$26*100;-2)>$Data.$B$29;"";ROUNDUP((($B$15/INDEX($Data.$F$26:$F$28;S8))/($B$11/70)-$Data.$D$27)/$Data.$D$26*100;-2)))
    protected function query()
    {
        $query = 'SELECT artno || "$" || artno_pad AS artno, panel_fakt, tubes FROM article';

        return $query;
    }

    protected function setRow($row)
    {
        $values = $this->calc($row->panel_fakt);

        $arr = array();
        $arr['tubes'] = $this->addTubes($row->tubes);
        $arr[] = str_replace('$', ($this->input->length / 10), $row->artno);
        $arr[] = $values['height'];

        $arr[] = $values['watt1'];
        $arr[] = $this->input->height;
        $arr[] = $values['watt2'];

        $this->addRow($arr);
    }

}
