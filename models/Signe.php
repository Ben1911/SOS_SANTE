<?php
   class Signe{
      private $code;
      private $designation;

      public function __construct($donnee){
           $this->hydrate($donnee);
      }
      public function hydrate(array $data){
          foreach ($data as $key => $value) {
             $method ='set' .ucfirst($key);
             if(method_exists($this,$method)){
                   $this->$method($value);
             }
          }
      }
      /**
       * Get the value of code
       */ 
      public function getCode()
      {
            return $this->code;
      }
      /**
       * Set the value of code
       *
       * @return  self
       */ 
      public function setCode($code)
      {
            $this->code = $code;

            return $this;
      }

      /**
       * Get the value of designation
       */ 
      public function getDesignation()
      {
            return $this->designation;
      }

      /**
       * Set the value of designation
       *
       * @return  self
       */ 
      public function setDesignation($designation)
      {
            $this->designation = $designation;

            return $this;
      }
   }


?>