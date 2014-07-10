<?php
namespace ProductAdmin\Form;
use Zend\InputFilter\InputFilter;

class ProductFilter extends InputFilter
{

    public function __construct ()
    {
    	$this->add(array (
    			'name' => 'type_id',
    			'required' => true,
    	));

    	$this->add(array (
    			'name' => 'attribute_set_id',
    			'required' => true,
    	));
    	
    }
}