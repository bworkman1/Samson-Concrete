<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('navMenu'))
{
    function navMenu()
    {
        $nav = [
          [
            'label' => 'Home',
            'url' => base_url('home'),
          ],
          [
            'label' => 'Services',
            'url' => base_url('services'),
          ],
          [
            'label' => 'Gallery',
            'url' => base_url('gallery'),
          ],
          [
            'label' => 'Contact Us',
            'url' => base_url('contact-us'),
          ]
        ];

        return $nav;
    }
}


if ( ! function_exists('getKeywords'))
{
    function getKeywords() 
    {
    	$keywords = 'paving, concrete, seal coating, Asphalt Cutting, Asphalt Paving, Asphalt Removal, Asphalt Repair, Asphalt Sealing, Basement Waterproofing, Basketball Court Construction, Basketball Court Resurfacing, Brick &amp; Stone Paving, Brick and Stone Driveway Installation, Concrete Breaking, Concrete Construction, Concrete Delivery, Concrete Drilling, Concrete Paving, Concrete Pumping, Concrete Removal, Concrete Repair, Concrete Shotcrete, Faux Paving, Fireplace Installation, Foundation Inspection, Foundation Repair, Install Brick or Stone, Mud Jacking, Other Concrete Services, Paver Installation, Pavers Maintenance, Paving Services, Repair Brick or Stone, Tennis Court Construction, Aprons, Driveways, Pads, Patios, Retaining Walls, Sidewalks, Stamped Concrete, Stone Sidewalks
			Walls';

		return $keywords;
    }

}

if ( ! function_exists('getDescription'))
{
    function getDescription() 
    {
    	$keywords = 'paving, concrete, seal coating, Asphalt Cutting, Asphalt Paving, Asphalt Removal, Asphalt Repair, Asphalt Sealing, Basement Waterproofing, Basketball Court Construction, Basketball Court Resurfacing, Brick &amp; Stone Paving, Brick and Stone Driveway Installation, Concrete Breaking, Concrete Construction, Concrete Delivery, Concrete Drilling, Concrete Paving, Concrete Pumping, Concrete Removal, Concrete Repair, Concrete Shotcrete, Faux Paving, Fireplace Installation, Foundation Inspection, Foundation Repair, Install Brick or Stone, Mud Jacking, Other Concrete Services, Paver Installation, Pavers Maintenance, Paving Services, Repair Brick or Stone, Tennis Court Construction, Aprons, Driveways, Pads, Patios, Retaining Walls, Sidewalks, Stamped Concrete, Stone Sidewalks
			Walls';

		return $keywords;
    }
}

if ( ! function_exists('getTitle'))
{
	// I COULD HAVE SET THIS THE CONSTANTS FILE BUT FOR CONSITANCY I WANTED TO KEEP IT HERE
    function getTitle() 
    {
    	$websiteTitle = 'Samson Concrete LLC | Central OH';

		return $websiteTitle;
    }

}