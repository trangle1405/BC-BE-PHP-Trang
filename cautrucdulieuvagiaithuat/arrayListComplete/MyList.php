<?php

class MyList
{
    public $arrayList = array();

    public function ArrayList($arr = "")
    {
        if (is_array($arr) == true)
            $this->arrayList = $arr;
        else
            $this->arrayList = array();
    }


    public function add($obj)
    {
        array_push($this->arrayList, $obj);
    }

    public function addOnIndex($obj, $index)
    {
        array_splice($this->arrayList,$index,0, $obj);
    }

    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = array();
            for ($i = 0; $i < $this->size(); $i++)
                if ($index != $i) $newArrayList[] = $this->get($i);
            $this->arrayList = $newArrayList;
        } else {
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
    }

    public function size()
    {
        return count($this->arrayList);
    }

    public function cloneArray()
    {
        $newArray = $this->arrayList;
        return $newArray;
    }

    public function contains($obj)
    {
        if (in_array($obj, $this->arrayList)) {
            return true;
        } else return false;
    }

    public function indexOf($obj)
    {
        $index = array_search($obj, $this->arrayList);
        return $index;
    }


    public function ensureCapacity($minCapacity)
    {
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }

    public function clear()
    {
        $this->arrayList = array();
    }

    public function isEmpty()
    {
        if (count($this->arrayList) == 0) {
            return true;
        }
        return false;
    }
    public function toArray()
    {
        return $this->arrayList;
    }

    public function isInteger($toCheck) {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
}