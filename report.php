<?php
abstract class Report {
  public $title;

  public function __construct($title){
    $this->title = $title;
  }

  abstract public function render();

  public function print(){
    echo $this->render() . "\n";
  }
}

class TextReport extends Report {
  public function render(){
    return "Report {$this->title} is in plain text\n";
  }
}

class JsonReport extends Report {
  public function render(){
    return json_encode([
                       "title" => $this->title,
                       "type" => "JSON Report"
                       ], JSON_PRETTY_PRINT);
  }
}

$title = "Monthly Salary";

$textReport = new TextReport($title);
echo "--Text Report--\n";
$textReport->print();

$jsonReport = new JsonReport($title);
echo "--JSON Report--\n";
$jsonReport->print();

?>
