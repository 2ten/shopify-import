<?php
// get file handle
// loop thru each line in file
foreach $line as $item{


// import all configurable parents first to set up the url key
// or clean the file somehow
// select all
// then if not empty parentsku and magento product type = simple
// - append data to the already started "parent"

	// Every line for all variants and/or images

	// PROBLEM 
	// some child products url key is not same as parent
	// all variants must have same url key
	Handle = $item['url_key']

	// only needed once for all variants on first line
	Title	= $item['short_title']
	Body(HTML) = $item['description']
	Vendor= $item['brand'] or manufacturer
	Type = $item['ca_classification'] // possibly $item['producttype']
	Tags = // if these fields are not empty, store as tags
		$item['chaintype']
		$item['charm_type']
		$item['clasptype']
		$item['color']
		$item['department']
		$item['gemtype1']
		$item['itemtype']	
		$item['material1']	
		$item['metalstamp']	
		$item['metaltype']	
		$item['stonecolor1']	
		$item['stoneshape']	

	Published	='TRUE'

	// Variants: new line for each variant
	if(!empty($item['parentsku'] && $item['magento_product_type'] == 'simple'){
		// we have variants
		// size or earringsize save as variants
		// color saving as tag and variant

		// Check how many first
		$variants = 0;
		if(!empty($item['color'])){
			$variants++;
			Option$variants Name = 'Color'
			Option$variants Value	= $item['color']
		}
		if(!empty($item['earringsize'])){
			$variants++;
			Option$variants Name = 'Size'
			Option$variants Value	= $item['earringsize']
		}
		if(!empty($item['earside'])){
			$variants++;
			Option$variants Name = 'Side'
			Option$variants Value	= $item['earside']
		}
		if(!empty($item['length'])){
			$variants++;
			Option$variants Name = 'Length'
			Option$variants Value	= $item['length']
		}
		if(!empty($item['ringsize'])){
			$variants++;
			Option$variants Name = 'Size'
			Option$variants Value	= $item['ringsize']
		}
		if(!empty($item['alphabet'])){
			$variants++;
			Option$variants Name = 'Letter'
			Option$variants Value	= $item['letter']
		}
		if(!empty($item['zodiac'])){
			$variants++;
			Option$variants Name = 'Sign'
			Option$variants Value	= $item['zodiac']
		}
	}

	// new line for each variant
	Variant SKU = $item['sku']
	Variant Grams	= round($item['weight'] * 453.592) // round to nearest integer
	Variant Inventory Tracker	= ''
	Variant Inventory Qty	= $item['qty']
	Variant Inventory Policy	= 'deny'
	Variant Fulfillment Service	= 'manual'
	Variant Price =	$item['price']
	Variant Compare At Price = $item['msrp']
	Variant Requires Shipping	= 'TRUE'
	Variant Taxable	='TRUE'
	Variant Barcode	= $item['upc']


	// IMAGES
	// child products have multiple images
	// if size option many times all images are the same but with different urls

	// each image on new line, independent of variants
	// need to do images in a separate task ?
	Image Src	= $item['aten_image_url']
		// this is a comma separated list of image urls
		// loop thru the list of urls
		$item['aten_additional_image_url']

	Image Position = '0';
	Image Alt Text = if $item['color'] then $item['color'] else $item['short_title'] // to enable swatching


	// new line for each variant
	Gift Card	= 'FALSE'
	SEO Title	= $item['name'] // or meta_title but they should be the same anyway
	SEO Description =	$item['meta_description']

	// new line for each variant
	// Google Shopping / Google Product Category	
	Google Shopping / Gender	= 'female'
	Google Shopping / Age Group	= 'adult'
	/*
	Google Shopping / MPN	
	Google Shopping / AdWords Grouping	
	Google Shopping / AdWords Labels	
	Google Shopping / Condition	
	Google Shopping / Custom Product	
	*/
	Google Shopping / Custom Label 0 = $item['itemtype']
	/*
	Google Shopping / Custom Label 1	
	Google Shopping / Custom Label 2	
	Google Shopping / Custom Label 3	
	*/
	Google Shopping / Custom Label 4	= $item['metaltype']

	// Variant Image	
	Variant Weight Unit	= 'lb'
	// Variant Tax Code	
	// Cost per item									

	// new line for each variant
	// Meta
	if(!empty($item['color'])){
			meta.color	= $item['color']	
	}
	if(!empty($item['enable_product_designer'])){
			meta.engravable	= $item['enable_product_designer']	
	}
	if(!empty($item['gift_message_available'])){
			meta.gift_message	= $item['gift_message_available']	
	}
	if(!empty($item['itemdisplaylength'])){
			meta.length	= $item['itemdisplaylength']	
	}
	if(!empty($item['meta_keyword'])){
			meta.keywords	= $item['meta_keyword']	
	}
	if(!empty($item['short_description'])){
			meta.short_description	= $item['short_description']	
	}
	if(!empty($item['width'])){
			meta.width	= $item['width']	
	}
	if(!empty($item['vpouch'])){
			meta.pouch	= $item['vpouch']	
	}

	// this is the parent, set certain variables for the variants that are coming later in the loop
	if($item['magento_product_type'] == 'configurable'){


	}





	}


}
