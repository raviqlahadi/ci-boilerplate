<?php

class Form_template{
              
    public function __construct(){
        
    }

    /**
     * Return input text with label
     * @param label String 
     * @param name String
     * @param placeholder String
     * @param value String    
     * 
     * @return String html text
     */

    public function text($label, $name, $placeholder=null, $value=null){
        if($placeholder == null){
            $placeholder = 'Enter your '. $name;
        }
        return "
        <label class='col-md-3 col-form-label' for='" . $name . "'>" . $label . "</label>
        <div class='col-md-9'>
            <input class='form-control' id='". $name . "' type='text' name='" . $name . "' placeholder='" . $placeholder . "' value='" . $value . "'>
        </div>
        
        ";

    }

    /**
     * Return textarea with label
     * @param label String 
     * @param name String
     * @param placeholder String
     * @param value String    
     * 
     * @return String html text
     */

    public function textarea($label, $name, $placeholder=null, $value = null)
    {
        if ($placeholder == null) {
            $placeholder = 'enter your ' . $name;
        }
        return "
            <label class='col-md-3 col-form-label' for='" . $name . "'>" . $label . "</label>
           <div class='col-md-9'>
                <textarea name='" . $name . "' id='' cols='30' rows='10' class='form-control'placeholder='" . $placeholder . "'>" . $value . "</textarea>
            </div>
            
            ";
    }

    /**
     * Return submit button
     * @return String html text
     */

    public function submit(){
        return "
             <div class='col-12'>
                <div class='float-right'>                    
                    <button class='btn btn-sm btn-primary' type='submit'> Submit</button>
                     <button class='btn btn-sm btn-danger' type='reset'> Reset</button>
                </div>
            </div>
        ";
    }

    public function action_dropdown($url, $id){
        return "
            <div class='dropdown'>
                <button class='btn btn-primary btn-sm dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    Action
                </button>
                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                    <a class='dropdown-item' href='" . $url . "?edit=true&id=" . $id . "'>Edit</a>
                    <a class='dropdown-item text-danger' href='" . $url . "/delete/" . $id . "'>Delete</a>
            </div>
        ";
    }



}
