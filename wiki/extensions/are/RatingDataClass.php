<?php

global $wgArticlePath;
global $ratingsJSONName;

class RatingData {

	protected $thisCodename;
	
	public $noImageString = '';
	
	public $JSONPath = '';

	public function __construct($codename){
		if(empty($codename)){
			trigger_error('Never seed RatingData with an empty codename');
		} else {
			$this -> thisCodename = $codename;
		}
		global $finalJSONPath;
		$this -> JSONPath = areDoPaths();
	}
	
	public function getAllRatings(){
		global $finalJSONPath;
		$json = file_get_contents(areDoPaths());
		$ratings = json_decode($json, true);
		
		$returners = array();
		
		foreach($ratings as $data){
			$returners[] = $data['codename'];
		}
		return $returners;
	}
	
	public function getAttr($attr){
		$json = file_get_contents($this -> JSONPath);
		if( empty($json)){
			 trigger_error( 'ARE Error: empty JSON' );
		}
		$ratings = json_decode($json, true);
		
		foreach($ratings as $data){
			if($data['codename'] == $this -> thisCodename){
				return $data[$attr];
			}
		}
		trigger_error('No rating found for the codename "' . $codename . '"');
	}
	
	public function getImage(){
		$data = $this -> getAttr('img');
		
		$file = wfFindFile($data);
		if(!$file){
			return $this -> noImageString;
		}
		$image = $file -> getCanonicalUrl();
		$pic = '<img class="mw-rating-img" src="' . $image . '" height="20px" width="20px" /> ';
		
		return $pic;
	}
	
	public function getImageWT(){
		$data = $this -> getAttr('img');
		
		$file = wfFindFile($data);
		if(!$file){
			return $this -> noImageString;
		}
		return '[[File:' . $data . '|20px]] ';
	}
	
	public function getAboutLink(){
		global $wgArticlePath;
		$link = $this -> getAttr('link');
		
		$url = str_replace('$1', $link, $wgArticlePath);
  		$label = '<a class="mw-rating-about-link" href="' . $url . '" target="_blank">' . $this -> getAttr('name') . '</a>';
				
		return $label;
	}
	
	public function getAboutLinkWT(){
		$label = '[[' . $this -> getAttr('link') . '|' . $this -> getAttr('name') . ']]';
				
		return $label;
	}
}