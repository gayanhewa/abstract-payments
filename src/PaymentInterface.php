<?php
/**
  Abstract Payment Interface. 
**/  
interface PaymentInterface
{
    /**
        Initialize the wrapper
    **/    
    public function initialize($params);
    
    /**
        Process transaction
    **/    
    public function process($amount);
}
