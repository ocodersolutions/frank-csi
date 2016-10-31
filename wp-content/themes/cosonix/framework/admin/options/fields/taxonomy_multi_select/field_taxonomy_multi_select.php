<?php
require_once( get_template_directory() . '/framework/admin/options/fields/select/field_select.php' );
class Redux_Options_taxonomy_multi_select extends Redux_Options_select {

    /**
     * Field Constructor.
     *
     * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
     *
     * @since Redux_Options 1.0.0
    */
    function __construct($field = array(), $value ='', $parent) {
        $this->field = $field;
		$this->value = $value;
		$this->args = $parent->args;
		
		$wp_args = wp_parse_args($this->field['args'], array());
		$this->field['options'] = get_taxonomies($args, 'names');
		$this->field['multiselect'] = true;
    }
}