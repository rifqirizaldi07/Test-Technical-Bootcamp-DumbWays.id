<?php
		$name = "Rifqi Rizaldi Putra";
		$addres = "Jondul 1 Blok K No 10 Tabing Padang";
		$hobbies = ["Music", "Football"];
		$is_married = false;
		$school = [
							"highSchool" => "SMA NEGERI 8 PADANG",
							"university" => "Univeristas Sriwijaya"];
		$skill =  [
							"Skill" => "HTML","CSS","BOOTSTRAP","PHP","MYSQL","AUGMENTED REALITY"
							
		];
	
		function biodata($name, $addres, $hobbies, $is_married, $school, $skill){
	return json_encode([
		'name' => $name,
		'address' => $addres,
		'hobbies' => $hobbies,
		'is_married' => $is_married,
		'schools' => $school,
		'skills' => $skill
	],
	JSON_PRETTY_PRINT
);
		};
echo biodata($name, $addres, $hobbies, $is_married, $school, $skill);
?>