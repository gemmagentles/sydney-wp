<?php

namespace WPGMZA\MarkerListing;

class Carousel extends \WPGMZA\MarkerListing
{
	public function __construct($map_id)
	{
		global $wpgmza;
		
		\WPGMZA\MarkerListing::__construct($map_id);
		
		$this->setAjaxParameters(array());
		
		if($wpgmza->settings->useLegacyHTML)
		{
			$document = $this->element->ownerDocument;
			
			$container = $document->createElement('div');
			
			if($map_id !== null)
			{
				$container->setAttribute('id', "wpgmza_marker_list_container_$map_id");
				$this->element->setAttribute('id', "wpgmza_marker_list_$map_id");
			}
			
			$container->addClass('wpgmza_marker_carousel');
			$this->element->addClass('owl-carousel');
			$this->element->addClass('owl-theme');
			
			$this->element->parentNode->appendChild($container);
			$container->appendChild($this->element);
		}
		
		$this->element->setAttribute('data-wpgmza-carousel-marker-listing', null);
		$this->element->addClass('wpgmza_marker_carousel');
		$this->element->removeClass('wpgmza_marker_list_class');
	}
	
	public function getAjaxResponse($request)
	{
		global $wpgmza;
		
		$response = $this->getRecords($request);
		
		$document = new \WPGMZA\DOMDocument();
		$document->loadPHPFile($this->getItemHTMLPath() . 'carousel-item.html.php');
		
		$template = $document->querySelector("body>*");
		$template->remove();
		
		$imageDimensions = $this->getImageDimensions();
		
		// TODO: Odd / even classnames
		
		$index = 1;
		foreach($response->data as $marker)
		{
			$item = $template->cloneNode(true);
			
			// Classes
			if($index % 2 == 1)
				$item->addClass('wpgmza_carousel_odd');
			else
				$item->addClass('wpgmza_carousel_even');
			
			$item->addClass('item owl-item');
			
			// Attributes
			$item->setAttribute('mid', $marker->id);
			$item->setAttribute('mapid', $request['map_id']);
			
			// Fields
			$icon = $marker->icon;
			if(empty($icon))
				$icon = \WPGMZA\Marker::DEFAULT_ICON;
			
			$item->querySelector('.wpgmza_marker_icon')->setAttribute('src', $icon);
			$item->querySelector('.wpgmza_marker_title')->appendText($marker->title);
			$item->querySelector('.wpgmza_marker_address')->appendText($marker->address);
			
			if($img = $item->querySelector('.wpgmza_map_image'))
			{
				if(empty($marker->pic))
					$img->remove();
				else
					$img->setAttribute('src', $marker->pic);
				
				
			}
			
			$this->appendListingItem($document, $item);
			$index++;
		}
		
		$response->html = $document->saveInnerBody();
		
		unset($response->data);
		
		return $response;
	}
}
