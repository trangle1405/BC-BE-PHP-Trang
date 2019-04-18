<?php
include_once("Node.php");

class MyLinkedList
{
    private $firstNode;
    private $lastNode;
    private $count;

    function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        if ($this->lastNode == null) {
            $this->lastNode = $link;

        }
        $this->count++;

    }

    public function insertLast($data)
    {
        if ($this->firstNode != null) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = null;
            $this->lastNode = $link;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }

    function insertByIndex($index, $data)
    {
        if ($index == 0) {
            $this->insertFirst($data);
        } else {
            $link = new Node($data);
            $previous = $this->firstNode;
            $current = $this->firstNode->next;
            for ($i = 1; $i < $index; $i++) {
                $previous = $current;
                $current = $current->next;
            }
            $previous->next = $link;
            $link->next = $current;
            $this->numNode++;
        }
    }

    public function totalNodes()
    {
        return $this->count;
    }

    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;

        while ($current != null) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }

    public function cloneList()
    {
        $cloneList = $this->readList();
        return $cloneList;
    }

    public function contains($data)
    {
        $current = $this->firstNode;
        $flag = null;
        while ($current != NULL) {
            if ($current->data == $data) {
                $flag = 'true';
                break;
            } else {
                $current = $current->next;
                $flag = 'false';
            }
        }
        return $flag;
    }


    public function indexOf($data)
    {
        $current = $this->firstNode;
        $flag = null;
        $index = 0;
        while ($current != NULL) {
            if ($current->data == $data) {
                $flag = 'true';
                break;
            } else {
                $current = $current->next;
                $flag = 'false';
                $index++;
            }
        }
        if ($flag == 'true') {
            return $index;
        } else {
            return $flag;
        }
    }

    public function clear()
    {
        $this->firstNode = NULL;
    }

    public function deleteNode($key)
    {
        $current = $this->firstNode;
        $previous = $this->firstNode;

        while ($current->data != $key) {
            if ($current->next == NULL)
                return NULL;
            else {
                $previous = $current;
                $current = $current->next;
            }
        }

        if ($current == $this->firstNode) {
            if ($this->count == 1) {
                $this->lastNode = $this->firstNode;
            }
            $this->firstNode = $this->firstNode->next;
        } else {
            if ($this->lastNode == $current) {
                $this->lastNode = $previous;
            }
            $previous->next = $current->next;
        }
        $this->count--;
    }

    public function removeByIndex($index)
    {
        if ($index <= $this->count) {
            $current = $this->firstNode;
            $previous = $this->firstNode;
            $pos = 1;

            while ($pos != $index) {
                if ($current->next == NULL)
                    return null;
                else {
                    $previous = $current;
                    $current = $current->next;
                }
                $pos++;
            }
        }
        if ($current == $this->firstNode) {
            if ($this->count == 1) {
                $this->lastNode = $this->firstNode;
            }
            $this->firstNode = $this->firstNode->next;
        } else {
            if ($this->lastNode == $current) {
                $this->lastNode = $previous;
            }
            $previous->next = $current->next;
        }
        $this->count--;
    }

    public function reverse()
    {
        if ($this->head != NULL) {
            if ($this->head->next != NULL) {
                $current = $this->head;
                $new = NULL;
                while ($current != NULL) {
                    $temp = $current->next;
                    $current->next = $new;
                    $new = $current;
                    $current = $temp;
                }
                $this->head = $new;
            }
        }
    }

    public function getFirst()
    {
        return $this->firstNode->data;
    }

    public function getLast()
    {
        return $this->lastNode->data;
    }

    public function getIndex($index)
    {
        if ($index == 0) {
            return $this->getFirst();
        } else {
            $current = $this->firstNode;
            for ($i = 0; $i < $index; $i++) {
                $current = $current->next;
            }
            return $current->data;
        }
    }
}