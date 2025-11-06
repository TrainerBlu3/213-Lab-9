<?php
class Member {
	public $name;
	public $email;

	public function __construct($name, $email) {
		$this->name = $name;
		$this->email = $email;
	}

	public function describe() {
		return $this->name . " (" . $this->email . ")";
	}
}

class Student extends Member {
	public function getRole() {
		return "Student";
	}
}

class Teacher extends Member {
	public function getRole() {
		return "Teacher";
	}
}

$members = [new Student("Alice", "alice@school.com"), new Teacher("Bob", "bob@school.com")];

foreach($members as $member) {
	echo $member->describe() . " - " . $member->getRole() . "\n";
}
?>
