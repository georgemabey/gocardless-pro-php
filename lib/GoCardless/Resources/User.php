<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Resources;

/**
  *  
  */
class User
{
  
    
    private $data;
    private $response;

    public function __construct($data, $response = null)
    {
      if ($data === null)
      {
        throw new \Exception('Data cannot be null');
      }
      $this->response = $response;
      $this->data = $data;
    }
  
    
    
    public function created_at()
    {
      return $this->data->created_at;
    }
  
    
    public function email()
    {
      return $this->data->email;
    }
  
    
    public function enabled()
    {
      return $this->data->enabled;
    }
  
    
    public function family_name()
    {
      return $this->data->family_name;
    }
  
    
    public function given_name()
    {
      return $this->data->given_name;
    }
  
    
    public function id()
    {
      return $this->data->id;
    }
  
    
    public function links()
    {
      return $this->data->links;
    }
  
    
    public function response() {
      return $this->response;
    }


}
