<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {

	private $Image_Directory_Path = 'assets/images/gallery/';
	private $RandomAlts = ['Paving', 'Concrete', 'Seal Coating', 'Asphalt Cutting', 'Asphalt Paving', 'Asphalt Removal', 'Asphalt Repair', 'Asphalt Sealing', 'Basement Waterproofing', 'Basketball Court Construction', 'Basketball Court Resurfacing', 'Brick &amp; Stone Paving', 'Brick and Stone Driveway Installation', 'Concrete Breaking', 'Concrete Construction', 'Concrete Delivery', 'Concrete Drilling', 'Concrete Paving', 'Concrete Pumping', 'Concrete Removal', 'Concrete Repair', 'Concrete Shotcrete', 'Faux Paving', 'Fireplace Installation', 'Foundation Inspection', 'Foundation Repair', 'Install Brick or Stone', 'Mud Jacking', 'Other Concrete Services', 'Paver Installation', 'Pavers Maintenance', 'Paving Services', 'Repair Brick or Stone', 'Tennis Court Construction', 'Aprons', 'Driveways', 'Pads', 'Patios', 'Retaining Walls', 'Sidewalks', 'Stamped Concrete', 'Stone Sidewalks
Walls'];

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('directory');
	}

	public function getGallery()
	{
		return $this->formatDirectoryMap(directory_map($this->Image_Directory_Path));
	}

	/*
		RETURNS ARRAY - TAKES ALL THE FILES IN A DIRECTORY AND UPPERCASES THE ONES THAT ARE NON NUMERIC FOR EASY COMPARISONS
	*/
	private function formatDirectoryMap($directories)
	{
		$data = [];
		if(!empty($directories)) {
			foreach($directories as $key => $dir) {
				if(is_numeric($key)) {
					$data['OTHER'][] = $this->formatImageAttributes($dir, '');
				} else {
					
					if(is_array($dir) && !empty($dir)) {
						foreach($dir as $k => $img) {
							$data[strtoupper(rtrim($key, '\\'))][] = $this->formatImageAttributes($img, $key);
						}
					}
				}
			}
		}

		return $data;
	}

	private function formatImageAttributes($image, $folder)
	{
		$imgAttr = [
			'path' => base_url($this->Image_Directory_Path . $folder . $image),
			'alt' => $this->formatImageName($image)
		];

		return $imgAttr;
	}

	private function formatImageName($image)
	{
		$find = ['-', '_', 'IMG'];
		$replace = [' ', ' ', ''];

		$name = explode('.', $image)[0];
		$name = trim(str_replace($find, $replace, preg_replace('/\d/', '', $name )));
		
		if(!$name) {
			$name = 'Samson Concrete Central Ohio ' . $this->RandomAlts[rand(0, (count($this->RandomAlts) - 1))];
		}

		return $name;
	}



}



// $return = [
// 	['directories'] = [
// 		['name' => 'image.jpg']
// 		['name' => 'image.jpg']
// 	];
// 	['images'] = [
// 		[
// 			'name' => 'image_for_truck.jpg', 
// 			'alt' => 'image'
// 		]
// 	];
// ];