<?php

class Book {
    public int $isbn;
    public string $title;
    public string $author;
    public int $available;

    public function __construct(
        int $isbn,
        string $title,
        string $author, 
        int $available
        ) {
            $this->isbn = $isbn;
            $this->title = $title;
            $this->author = $author;
            $this->available = $available;
        }

    public function __toString() {
        $result = "<i>{$this->title}</i> - {$this->author}";
        if (!$this->available) {
            $result .= ' <b>Not available</b>';
            }
        return $result;
        }

        public function __set($variable, $value) {}
        public function __get($variable) {
            if(isset($this->variable)) return $this->variable;
            else {
                return "Property not set!";
            }
        }

    public function getCopy(): bool {
        if($this->available > 0) {
            $this->available -= 1;
            return true;
        } else {
            return false;
        }
    }

    public function addCopy(int $num) : bool {
        if($num > 0) {
            $this->available += $num;
            return true;
        } else {
            return false;
        }
    }
}

?>