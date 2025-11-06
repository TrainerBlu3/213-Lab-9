<?php
class Book {
    private $title;
    private $author;
    private $available = true;

    function set_title($title) {
        $this->title = $title;
    }

    function get_title() {
        return $this->title;
    }

    function set_author($author) {
        $this->author = $author;
    }

    function get_author() {
        return $this->author;
    }

    function borrow() {
        $this->available = false;
    }

    function returnBook() {
        $this->available = true;
    }

}
